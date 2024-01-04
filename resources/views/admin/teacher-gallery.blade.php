@extends('layouts.app')
@section('style')
    <style>
        .user-img-teacher {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            border: 0 solid #e5e5e5;
            padding: 0;
        }
    </style>
@endsection
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
    <h4>
        Upload Video
    </h4>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('teacher-video-gallery.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label class="form-label">Upload Video Disini</label>
                    <input type="file" name="video" class="form-control" accept="video/mp4">
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary btn-md">
                        Upload
                    </button>
                </div>
            </form>
        </div>
    </div>
    <h4>
        Galery Guru
    </h4>
    <div class="d-flex justify-content-between mb-2">
        <div class="position-relative mb-3 col-lg-3">
            <form action="">
                <input type="text" name="name" value="{{ request()->name }}" class="form-control search-chat py-2 ps-5"
                    id="search-name" placeholder="Search">
                <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
            </form>
        </div>
        <div class="">
            <button class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleModal"
                style="background-color: #5D87FF">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 18 19" fill="none">
                    <path d="M9 2L9 17" stroke="white" stroke-width="3" stroke-linecap="round" />
                    <path d="M1.5 9.5L16.5 9.5" stroke="white" stroke-width="3" stroke-linecap="round" />
                </svg>
                Tambah Gallery Guru</button>
        </div>
    </div>
    <div class="row">
        @forelse ($data as $teacher)
            <div class="col-6 col-lg-3">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div><img src="{{ asset('storage/' . $teacher->photo) }}" style="object-fit: cover" class="user-img-teacher"
                                    alt="...">
                            </div>
                            <div>
                                <h6 class="ms-2">{{ $teacher->name }}</h6>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="d-flex align-items-center gap-2">
                                <button type="button" class="btn btn-danger btn-delete text-white btn-sm"
                                    data-id="{{ $teacher->id }}" data-bs-toggle="modal"
                                    data-bs-target="#modal-delete">Hapus</button>
                                <button type="button" id="btn-edit-{{ $teacher->id }}" data-id="{{ $teacher->id }}"
                                    data-name="{{ $teacher->name }}"
                                    class="btn-edit btn btn-warning text-white btn-sm">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="d-flex justify-content-center">
                <div>
                    <img src="{{ asset('showNoData.png') }}" alt="">
                    <h6>Data Kosong, Tambah Gallery Guru Untuk Menampilkan Data!!</h6>
                </div>
            </div>
        @endforelse
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <form action="{{ route('teacher-gallery.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Gallery Guru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="major" class="form-label">Nama</label>
                                <input type="text" placeholder="Masukkan Nama Guru" class="form-control" name="name"
                                    id="">
                            </div>
                            <div class="col-12">
                                <label for="major" class="form-label">Upload Foto</label>
                                <input type="file" placeholder="Masukkan Nama Guru" class="form-control" name="photo"
                                    id="">
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
            <form id="form-update" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Guru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="major" class="form-label">Nama</label>
                                <input type="text" placeholder="Masukkan Nama Guru" class="form-control"
                                    name="name" id="">
                            </div>
                            <div class="col-12">
                                <label for="major" class="form-label">Upload Foto</label>
                                <input type="file" placeholder="Masukkan Nama Guru" class="form-control"
                                    name="photo" id="">
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
            var actionUrl = `teacher-gallery/${formData['id']}`;
            $('#form-update').attr('action', actionUrl);

            setFormValues('form-update', formData)
            $('#form-update').data('id', formData['id'])
            $('#form-update').attr('action', );
            $('#modal-update').modal('show')
        })
        $('.btn-delete').click(function() {
            id = $(this).data('id')
            var actionUrl = `teacher-gallery/${id}`;
            $('#form-delete').attr('action', actionUrl);
            $('#modal-delete').modal('show')
        })
    </script>
@endsection
