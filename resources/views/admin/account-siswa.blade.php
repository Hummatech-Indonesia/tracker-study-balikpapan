@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between">
        <div class="">
            <h4 class="mb-3">
                Verifikasi Siswa
            </h4>
        </div>
        <div class="position-relative mb-3 col-lg-3">
            <input type="text" class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
            <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
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
                    <h5 class="card-title text-dark text-center" style="font-weight: 700">Zanuar Andai Andiyans</h5>
                    <div class="card-text mt-2 mb-2 text-center">Tahun Ajaran 2024-2025.</div>
                    <h6 class="card-title text-center mb-3" style="font-weight: 700;color:#5D87FF;">RPL</h6>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <button class="btn btn-warning w-100 text-white">Detail</button>
                        <button class="btn btn-danger w-100">Tolak</button>
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
                    <h5 class="card-title text-dark text-center" style="font-weight: 700">Zanuar Andai Andiyans</h5>
                    <div class="card-text mt-2 mb-2 text-center">Tahun Ajaran 2024-2025.</div>
                    <h6 class="card-title text-center mb-3" style="font-weight: 700;color:#5D87FF;">RPL</h6>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <button class="btn btn-warning w-100 text-white">Detail</button>
                        <button class="btn btn-danger w-100">Tolak</button>
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
                    <h5 class="card-title text-dark text-center" style="font-weight: 700">Zanuar Andai Andiyans</h5>
                    <div class="card-text mt-2 mb-2 text-center">Tahun Ajaran 2024-2025.</div>
                    <h6 class="card-title text-center mb-3" style="font-weight: 700;color:#5D87FF;">RPL</h6>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <button class="btn btn-warning w-100 text-white">Detail</button>
                        <button class="btn btn-danger w-100">Tolak</button>
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
                    <h5 class="card-title text-dark text-center" style="font-weight: 700">Zanuar Andai Andiyans</h5>
                    <div class="card-text mt-2 mb-2 text-center">Tahun Ajaran 2024-2025.</div>
                    <h6 class="card-title text-center mb-3" style="font-weight: 700;color:#5D87FF;">RPL</h6>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <button class="btn btn-warning w-100 text-white">Detail</button>
                        <button class="btn btn-danger w-100">Tolak</button>
                    </div>
                    <button class="btn w-100 text-white" style="background-color: #1D9375">Terima</button>
                </div>
            </div>
        </div>

    </div>
@endsection
