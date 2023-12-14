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
            </select>
        </div>
    </div>
    <div class="">
        <button class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleLargeModal"
            style="background-color: #5D87FF">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 18 19" fill="none">
                <path d="M9 2L9 17" stroke="white" stroke-width="3" stroke-linecap="round" />
                <path d="M1.5 9.5L16.5 9.5" stroke="white" stroke-width="3" stroke-linecap="round" />
            </svg>
            Tambah Kelas</button>
    </div>
</div>
<div class="row">
    <div class="col-12 col-lg-6 col-xxl-3">
        <div class="card border-primary border-bottom border-3 border-0">
            <img src="{{ asset('assets-admin/images/gallery/01.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-2 mt-1">
                    <div class="">
                        <p class="text-dark" style="font-weight: 500">
                            Kelas 10
                        </p>
                    </div>
                    <div class="">
                        <p>
                            30 Siswa
                        </p>
                    </div>
                </div>
                <h5 class="card-title text-dark" style="font-weight: 700">XII Multimedia A</h5>
                <p class="card-text mt-2 mb-4">Tahun Ajaran 2024-2025.</p>
                <hr>
                <div class="d-flex align-items-center gap-2">
                    <a href="javascript:;" class="btn btn-inverse-danger w-100">Hapus</a>
                    <a href="javascript:;" class="btn btn-warning w-100">Edit</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-xxl-3">
        <div class="card border-primary border-bottom border-3 border-0">
            <img src="{{ asset('assets-admin/images/gallery/01.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-2 mt-1">
                    <div class="">
                        <p class="text-dark" style="font-weight: 500">
                            Kelas 10
                        </p>
                    </div>
                    <div class="">
                        <p>
                            30 Siswa
                        </p>
                    </div>
                </div>
                <h5 class="card-title text-dark" style="font-weight: 700">XII Multimedia A</h5>
                <p class="card-text mt-2 mb-4">Tahun Ajaran 2024-2025.</p>
                <hr>
                <div class="d-flex align-items-center gap-2">
                    <a href="javascript:;" class="btn btn-inverse-danger w-100">Hapus</a>
                    <a href="javascript:;" class="btn btn-warning w-100">Edit</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-xxl-3">
        <div class="card border-primary border-bottom border-3 border-0">
            <img src="{{ asset('assets-admin/images/gallery/01.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-2 mt-1">
                    <div class="">
                        <p class="text-dark" style="font-weight: 500">
                            Kelas 10
                        </p>
                    </div>
                    <div class="">
                        <p>
                            30 Siswa
                        </p>
                    </div>
                </div>
                <h5 class="card-title text-dark" style="font-weight: 700">XII Multimedia A</h5>
                <p class="card-text mt-2 mb-4">Tahun Ajaran 2024-2025.</p>
                <hr>
                <div class="d-flex align-items-center gap-2">
                    <a href="javascript:;" class="btn btn-inverse-danger w-100">Hapus</a>
                    <a href="javascript:;" class="btn btn-warning w-100">Edit</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-xxl-3">
        <div class="card border-primary border-bottom border-3 border-0">
            <img src="{{ asset('assets-admin/images/gallery/01.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-2 mt-1">
                    <div class="">
                        <p class="text-dark" style="font-weight: 500">
                            Kelas 10
                        </p>
                    </div>
                    <div class="">
                        <p>
                            30 Siswa
                        </p>
                    </div>
                </div>
                <h5 class="card-title text-dark" style="font-weight: 700">XII Multimedia A</h5>
                <p class="card-text mt-2 mb-4">Tahun Ajaran 2024-2025.</p>
                <hr>
                <div class="d-flex align-items-center gap-2">
                    <a href="javascript:;" class="btn btn-inverse-danger w-100">Hapus</a>
                    <a href="javascript:;" class="btn btn-warning w-100">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection