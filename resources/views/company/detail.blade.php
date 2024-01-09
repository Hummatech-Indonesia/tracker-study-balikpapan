@extends('layouts.app')
@section('content')
@if ($errors->any())
@foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible mt-3 fade show" role="alert">
        {{ $error }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endforeach
@endif
<div class="d-flex justify-content-between">
    <div class="">
        <h5 class="text-dark" style="font-weight: 500">
            Lowongan Pekerjaan
        </h5>
    </div>
    <div class="">
        <button class="text-white btn btn-warning" onclick="history.back()">
            Kembali
        </button>
    </div>
</div>
<div class="row mt-3">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <div class="reviewer-thumb mt-3">
                        <div class="border-custom"
                            style="width: 150px; height: 150px; border-radius: 50%; overflow: hidden;">
                                <div class="rounded-circle bg-secondary" style="object-fit: cover; width: 100%; height: 100%;">
                                    <img src="{{ asset('default.jpg') }}"
                                    class="rounded-circle" style="object-fit: cover; width: 100%; height: 100%;">
                                </div>
                        </div>
                    </div>
                </div>
                <h5 class="text-dark text-center mt-3" style="font-weight: 600">
                    PT KAI INDONESIA
                </h5>
                <p class="text-center">
                    www.ptkai.id
                </p>
                <div class="d-flex justify-content-center mb-5">
                    <button type="button" class="btn btn-primary">
                        Edit Profile
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row mb-5 mt-3">
                    <div class="col">
                        <p class="fs-6 mb-2" style="font-weight: 600">
                            Lowongan Pada Bagian
                        </p>
                        <h5 class="text-primary" style="font-weight:500">
                            Ketua PT KAI Indonesia
                        </h5>
                        <p class="fs-6 mb-2 mt-3" style="font-weight: 600">
                            Sistem Kerja
                        </p>
                        <p class="text-primary">
                            - Kontrak
                        </p>
                        <p class="fs-6 mb-2 mt-3" style="font-weight: 600">
                            Deskripsi Sistem Kerja
                        </p>
                        <p>
                            Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Ipsum Dolor Sit Amet Lorem Ipsum Lorem Ipsum Dolor Sit Amet Ipsum Dolor Sit Amet Lorem
                        </p>
                        <p class="fs-6 mb-2 mt-3" style="font-weight: 600">
                            Kualifikasi / Syarat Syarat
                        </p>
                        <ul>
                            <li>
                                Membawa KTP Asli
                            </li>
                            <li>
                                Membawa CV Yang Bagus dan Benar
                            </li>
                            <li>
                                Membawa Portofolio Diri
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <p class="fs-6 mb-2" style="font-weight: 600">
                            Gaji Pokok
                        </p>
                        <div class="bg-light-primary col-5 py-1 rounded mb-5">
                            <h5 class="text-primary mb-0 text-center" style="font-weight:500">
                                Rp. 300.000.000
                            </h5>
                        </div>
                        <p class="fs-6 mb-2" style="font-weight: 600">
                            Gaji Pokok
                        </p>
                        <div class="d-flex gap-2">
                            <div class="bg-light-primary col-2 py-2 rounded mb-5">
                                <h5 class="text-primary mb-0 text-center" style="font-weight:500">
                                    20
                                </h5>
                            </div>
                            <div class="bg-light-success col-2 py-2 rounded mb-5">
                                <h5 class="text-success mb-0 text-center" style="font-weight:500">
                                    20
                                </h5>
                            </div>
                            <div class="bg-light-danger col-2 py-2 rounded mb-5">
                                <h5 class="text-danger mb-0 text-center" style="font-weight:500">
                                    20
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h5>
            Daftar Pelamar  
        </h5>
        <div class="position-relative mb-3 col-lg-3">
            <input type="text" class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
            <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-white" style="background-color: #5D87FF">
                            No
                        </th>
                        <th class="text-white" style="background-color: #5D87FF">
                            Nama 
                        </th>
                        <th class="text-white" style="background-color: #5D87FF">
                            Email
                        </th>
                        <th class="text-white" style="background-color: #5D87FF">
                            Jenis Kelamin
                        </th>
                        <th class="text-white" style="background-color: #5D87FF">
                            Status
                        </th>
                        <th class="text-white" style="background-color: #5D87FF">
                            Aksi
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection