@extends('layouts.app')
@section('content')
    <h4 class="mb-3">
        Tambah Kelas
    </h4>
    <div class="d-flex justify-content-between mb-2">
        <div class="d-flex justify-content-header gap-3">
            <div class="position-relative mb-3 col-lg-8">
                <input type="text" class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
                <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
            </div>
            <div class="col-lg-4">
                <select name="" id="" class="form-select py-2">
                    <option value="">Filter Kelas</option>
                    @foreach ($classrooms as $classroom)
                        <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="">
            <button class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleModal"
                style="background-color: #5D87FF">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 18 19" fill="none">
                    <path d="M9 2L9 17" stroke="white" stroke-width="3" stroke-linecap="round" />
                    <path d="M1.5 9.5L16.5 9.5" stroke="white" stroke-width="3" stroke-linecap="round" />
                </svg>
                Tambah Kelas</button>
        </div>
    </div>
    <div class="row">
        @forelse ($classrooms as $classroom)
            <div class="col-6 col-lg-3 col-xxl-3">
                <div class="card border-primary border-bottom border-3 border-0">
                    <img src="{{ asset('assets-admin/images/gallery/01.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="text-dark mb-2" style="font-weight: 500">
                            Kelas {{ $classroom->name }}
                        </div>

                        <h5 class="card-title text-dark" style="font-weight: 700">{{ $classroom->major->name }}</h5>
                        <p class="card-text mt-2 mb-2">Tahun Ajaran {{ $classroom->schoolYear->name }}.</p>
                        <hr>
                        <div class="d-flex align-items-center gap-2">
                            <a class="btn btn-danger btn-delete text-white w-100" data-id="{{ $classroom->id }}"
                                data-bs-toggle="modal" data-bs-target="#modal-delete">Hapus</a>
                            <a class="btn btn-warning text-white w-100 btn-edit" id="btn-edit-{{ $classroom->id }}"
                                data-id="{{ $classroom->id }}" data-name="{{ $classroom->name }}"
                                data-major_id="{{ $classroom->major_id }}"
                                data-school_year_id={{ $classroom->school_year_id }}>Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
        <div class="d-flex justify-content-center">
            <div>
                <img src="{{ asset('showNoData.png') }}" alt="">
                <h5 class="text-center">Data Kelas Kosong!!</h5>
            </div>
        </div>
        @endforelse
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <form action="{{ route('classrooms.store') }}" method="post">
                @csrf
                @method('POST')
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="formFile" class="form-label">Tambah Kelas</label>
                                <input type="text" placeholder="Masukkan Kelas" class="form-control" name="name"
                                    id="">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="formFile" class="form-label">Tahun Ajaran</label>
                                <select class="form-select form-select-md" name="school_year_id"
                                    aria-label="Default select example">
                                    <option>Pilih Tahun Ajaran</option>
                                    @foreach ($schoolYears as $schoolYear)
                                        <option value="{{ $schoolYear->id }}">{{ $schoolYear->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="formFile" class="form-label">Jurusan</label>
                                <select class="form-select form-select-md" name="major_id"
                                    aria-label="Default select example">
                                    <option>Pilih Jurusan</option>
                                    @foreach ($majors as $major)
                                        <option value="{{ $major->id }}">{{ $major->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary text-white">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="modal-update" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <form id="form-update" method="post">
                @csrf
                @method('PUT')
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Kelas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="formFile" class="form-label">Tambah Kelas</label>
                                <input type="text" placeholder="Masukkan Kelas" class="form-control" name="name"
                                    id="">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="formFile" class="form-label">Tahun Ajaran</label>
                                <select class="form-select form-select-md" name="school_year_id"
                                    aria-label="Default select example">
                                    <option>Pilih Tahun Ajaran</option>
                                    @foreach ($schoolYears as $schoolYear)
                                        <option value="{{ $schoolYear->id }}">{{ $schoolYear->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="formFile" class="form-label">Jurusan</label>
                                <select class="form-select form-select-md" name="major_id"
                                    aria-label="Default select example">
                                    <option>Pilih Jurusan</option>
                                    @foreach ($majors as $major)
                                        <option value="{{ $major->id }}">{{ $major->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary text-white">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <x-delete-modal-component />
@endsection
@section('script')
    <script>
        $('.btn-edit').click(function() {
            const formData = getDataAttributes($(this).attr('id'))
            var actionUrl = `classrooms/${formData['id']}`;
            $('#form-update').attr('action', actionUrl);

            setFormValues('form-update', formData)
            $('#form-update').data('id', formData['id'])
            $('#form-update').attr('action', );
            $('#modal-update').modal('show')
        });
        $('.btn-delete').click(function() {
            id = $(this).data('id')
            var actionUrl = `classrooms/${id}`;
            $('#form-delete').attr('action', actionUrl);
            $('#modal-delete').modal('show')
        })
    </script>
@endsection
