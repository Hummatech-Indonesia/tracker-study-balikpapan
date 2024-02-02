@extends('layouts.app')
@section('title', 'alumni-register')

@section('content')
    <h4 class="mb-3">
        Data Alumni
    </h4>
    <div class="d-flex justify-content-between">
        <div class="position-relative mb-3 col-lg-3">
            <input type="text" class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
            <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
        </div>
        <div class="">
            <button class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleLargeModal"
                style="background-color: #5D87FF">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 18 19" fill="none">
                    <path d="M9 2L9 17" stroke="white" stroke-width="3" stroke-linecap="round" />
                    <path d="M1.5 9.5L16.5 9.5" stroke="white" stroke-width="3" stroke-linecap="round" />
                </svg>
                Tambah Lowongan</button>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-4 col-xxl-3">
            <div class="card border-primary border-bottom border-3 border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-center mt-2 mb-4">
                        <img src="{{ asset('assets-admin/images/avatars/avatar-2.png') }}" width="100px"
                            class="user-circle" alt="user">
                    </div>
                    <h5 class="card-title text-dark text-center" style="font-weight: 700">XII Multimedia A</h5>
                    <p class="card-text mt-2 text-center mb-5">Tahun Ajaran 2024-2025.</p>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <button class="btn btn-warning w-100 text-white">Detail</button>
                        <button class="btn btn-inverse-danger w-100">Tolak</button>
                    </div>
                    <button class="btn w-100 text-white" style="background-color: #1D9375">Terima</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 col-xxl-3">
            <div class="card border-primary border-bottom border-3 border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-center mt-2 mb-4">
                        <img src="{{ asset('assets-admin/images/avatars/avatar-2.png') }}" width="100px"
                            class="user-circle" alt="user">
                    </div>
                    <h5 class="card-title text-dark text-center" style="font-weight: 700">XII Multimedia A</h5>
                    <p class="card-text mt-2 text-center mb-5">Tahun Ajaran 2024-2025.</p>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <button class="btn btn-warning w-100 text-white">Detail</button>
                        <button class="btn btn-inverse-danger w-100">Tolak</button>
                    </div>
                    <button class="btn w-100 text-white" style="background-color: #1D9375">Terima</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 col-xxl-3">
            <div class="card border-primary border-bottom border-3 border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-center mt-2 mb-4">
                        <img src="{{ asset('assets-admin/images/avatars/avatar-2.png') }}" width="100px"
                            class="user-circle" alt="user">
                    </div>
                    <h5 class="card-title text-dark text-center" style="font-weight: 700">XII Multimedia A</h5>
                    <p class="card-text mt-2 text-center mb-5">Tahun Ajaran 2024-2025.</p>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <button class="btn btn-warning w-100 text-white">Detail</button>
                        <button class="btn btn-inverse-danger w-100">Tolak</button>
                    </div>
                    <button class="btn w-100 text-white" style="background-color: #1D9375">Terima</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 col-xxl-3">
            <div class="card border-primary border-bottom border-3 border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-center mt-2 mb-4">
                        <img src="{{ asset('assets-admin/images/avatars/avatar-2.png') }}" width="100px"
                            class="user-circle" alt="user">
                    </div>
                    <h5 class="card-title text-dark text-center" style="font-weight: 700">XII Multimedia A</h5>
                    <p class="card-text mt-2 text-center mb-5">Tahun Ajaran 2024-2025.</p>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <button class="btn btn-warning w-100 text-white">Detail</button>
                        <button class="btn btn-inverse-danger w-100">Tolak</button>
                    </div>
                    <button class="btn w-100 text-white" style="background-color: #1D9375">Terima</button>
                </div>
            </div>
        </div>
    </div>
@endsection
