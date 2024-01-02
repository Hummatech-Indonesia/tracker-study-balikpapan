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
    <h4>
        Gambar Dengan Judul
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
        <div class="col-6 col-lg-3">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div><img src="{{ asset('assets-admin/images/gallery/01.png') }}" class="user-img-teacher" alt="...">
                        </div>
                        <div>
                            <h6 class="ms-2">Muhammad Ibnu Zauzi</h6>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end"><div class="d-flex align-items-center gap-2">
                        <button type="button" class="btn btn-danger btn-delete text-white btn-sm" data-id=""
                            data-bs-toggle="modal" data-bs-target="#modal-delete">Hapus</button>
                        <button type="button" id="btn-edit-" data-id=""
                            data-name="" class="btn-edit btn btn-warning text-white btn-sm">Edit</button>
                    </div></div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div><img src="{{ asset('assets-admin/images/gallery/01.png') }}" class="user-img-teacher" alt="...">
                        </div>
                        <div>
                            <h6 class="ms-2">Muhammad Ibnu Zauzi</h6>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end"><div class="d-flex align-items-center gap-2">
                        <button type="button" class="btn btn-danger btn-delete text-white btn-sm" data-id=""
                            data-bs-toggle="modal" data-bs-target="#modal-delete">Hapus</button>
                        <button type="button" id="btn-edit-" data-id=""
                            data-name="" class="btn-edit btn btn-warning text-white btn-sm">Edit</button>
                    </div></div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div><img src="{{ asset('assets-admin/images/gallery/01.png') }}" class="user-img-teacher" alt="...">
                        </div>
                        <div>
                            <h6 class="ms-2">Muhammad Ibnu Zauzi</h6>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end"><div class="d-flex align-items-center gap-2">
                        <button type="button" class="btn btn-danger btn-delete text-white btn-sm" data-id=""
                            data-bs-toggle="modal" data-bs-target="#modal-delete">Hapus</button>
                        <button type="button" id="btn-edit-" data-id=""
                            data-name="" class="btn-edit btn btn-warning text-white btn-sm">Edit</button>
                    </div></div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div><img src="{{ asset('assets-admin/images/gallery/01.png') }}" class="user-img-teacher" alt="...">
                        </div>
                        <div>
                            <h6 class="ms-2">Muhammad Ibnu Zauzi</h6>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end"><div class="d-flex align-items-center gap-2">
                        <button type="button" class="btn btn-danger btn-delete text-white btn-sm" data-id=""
                            data-bs-toggle="modal" data-bs-target="#modal-delete">Hapus</button>
                        <button type="button" id="btn-edit-" data-id=""
                            data-name="" class="btn-edit btn btn-warning text-white btn-sm">Edit</button>
                    </div></div>
                </div>
            </div>
        </div>

    </div>
@endsection
