@extends('layouts.app')
@section('content')
@if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
            });
        </script>
    @endif
    <h4 class="mb-3">
        Tahun Ajaran
    </h4>
    <div class="d-flex justify-content-between">
        <div class="position-relative mb-3 col-lg-3">
            <input type="text" class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
            <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
        </div>
        <div class="">
            <button class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleModal"
                style="background-color: #5D87FF">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 18 19" fill="none">
                    <path d="M9 2L9 17" stroke="white" stroke-width="3" stroke-linecap="round" />
                    <path d="M1.5 9.5L16.5 9.5" stroke="white" stroke-width="3" stroke-linecap="round" />
                </svg>
                Tambah Tahun Ajaran</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="{{ route('school-years.store') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Tahun Ajaran</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <label for="" class="form-label">Tahun Ajaran</label>
                                <input type="text" placeholder="Masukkan Tahun Ajaran" name="name" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal fade" id="modal-update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form method="post" id="form-update">
                        @csrf
                        @method('PUT')
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modal-update">Edit Tahun Ajaran</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <label for="" class="form-label">Tahun Ajaran</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @forelse ($schoolYear as $schoolYears)
            <div class="col-lg-4 col-xxl-3 col-12">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center mt-2 mb-2">
                            <div>
                                <h6 class="my-1" style="font-weight: 600">Tahun Ajaran</h6>
                                <h3 class="mb-0 mt-2" style="color:#5D87FF; font-weight:500">{{ $schoolYears->name }}</h3>
                            </div>
                            <div class="text-warning ms-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 64 64"
                                    fill="none">
                                    <path
                                        d="M13.3333 14.6667V20.0001C13.3333 21.4146 13.8952 22.7711 14.8954 23.7713C15.8956 24.7715 17.2522 25.3334 18.6666 25.3334C20.0811 25.3334 21.4377 24.7715 22.4379 23.7713C23.4381 22.7711 24 21.4146 24 20.0001V14.6667H40V20.0001C40 21.4146 40.5619 22.7711 41.5621 23.7713C42.5623 24.7715 43.9188 25.3334 45.3333 25.3334C46.7478 25.3334 48.1044 24.7715 49.1045 23.7713C50.1047 22.7711 50.6666 21.4146 50.6666 20.0001V14.6667C52.7884 14.6667 54.8232 15.5096 56.3235 17.0099C57.8238 18.5102 58.6666 20.545 58.6666 22.6667V28.0001H5.33331V22.6667C5.33331 20.545 6.17617 18.5102 7.67646 17.0099C9.17675 15.5096 11.2116 14.6667 13.3333 14.6667ZM58.6666 33.3334V49.3334C58.6666 51.4551 57.8238 53.49 56.3235 54.9903C54.8232 56.4906 52.7884 57.3334 50.6666 57.3334H13.3333C11.2116 57.3334 9.17675 56.4906 7.67646 54.9903C6.17617 53.49 5.33331 51.4551 5.33331 49.3334L5.33331 33.3334H58.6666ZM45.3333 6.66675C46.0406 6.66675 46.7188 6.9477 47.2189 7.4478C47.719 7.94789 48 8.62617 48 9.33341V20.0001C48 20.7073 47.719 21.3856 47.2189 21.8857C46.7188 22.3858 46.0406 22.6667 45.3333 22.6667C44.6261 22.6667 43.9478 22.3858 43.4477 21.8857C42.9476 21.3856 42.6666 20.7073 42.6666 20.0001V9.33341C42.6666 8.62617 42.9476 7.94789 43.4477 7.4478C43.9478 6.9477 44.6261 6.66675 45.3333 6.66675V6.66675ZM18.6666 6.66675C19.3739 6.66675 20.0522 6.9477 20.5523 7.4478C21.0524 7.94789 21.3333 8.62617 21.3333 9.33341V20.0001C21.3333 20.7073 21.0524 21.3856 20.5523 21.8857C20.0522 22.3858 19.3739 22.6667 18.6666 22.6667C17.9594 22.6667 17.2811 22.3858 16.781 21.8857C16.2809 21.3856 16 20.7073 16 20.0001V9.33341C16 8.62617 16.2809 7.94789 16.781 7.4478C17.2811 6.9477 17.9594 6.66675 18.6666 6.66675V6.66675Z"
                                        fill="#5D87FF" />
                                </svg>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-header gap-2">
                                <button class="btn btn-danger w-100 btn-delete"
                                    data-id="{{ $schoolYears->id }}" data-bs-toggle="modal" data-bs-target="#modal-delete">Hapus</button>
                                    <button type="button" id="btn-edit-{{ $schoolYears->id }}" data-id="{{ $schoolYears->id }}"
                                        data-name="{{ $schoolYears->name }}" class="btn-edit btn btn-primary text-white w-100">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            Data Kosong
        @endforelse
    </div>
    <x-delete-modal-component />
@endsection
@section('script')
    <script>
        $('.btn-edit').click(function() {
            const formData = getDataAttributes($(this).attr('id'))
            var actionUrl = `school-years/${formData['id']}`;
            $('#form-update').attr('action', actionUrl);

            setFormValues('form-update', formData)
            $('#form-update').data('id', formData['id'])
            $('#form-update').attr('action', );
            $('#modal-update').modal('show')
        });
        $('.btn-delete').click(function() {
            id = $(this).data('id')
            var actionUrl = `school-years/${id}`;
            $('#form-delete').attr('action', actionUrl);
            $('#modal-delete').modal('show')
        })
    </script>
@endsection
