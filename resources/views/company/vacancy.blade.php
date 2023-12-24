@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between">
    <div class="">
        <h5>
            Buat Lowongan
        </h5>
    </div>
    <div class="">
        <button class="btn btn-info text-white">Tambah Lowongan</button>
    </div>
</div>
<div class="row mt-3">
    <div class="col-12 col-lg-4 col-xxl-3">
        <div class="card border-primary border-bottom border-3 border-0">
            <div class="card-body">
                <div class="d-flex justify-content-center mt-2 mb-4">
                    <img src="{{ asset('kai.png') }}" width="100px" class="user-circle" alt="user">
                </div>
            </div>
            <div style="background-color: #5D87FF" class="mb-0">
                <p class="text-white text-center mb-0 py-2 fs-5" style="font-weight: 500">
                    PT KAI INDONESIA
                </p>
            </div>
            <div class="card-body">
            <p class="text-center">
                Menerima Lowongan
            </p>
                <div class="d-flex justify-content-center">
                    <div class="bg-light-info col-8">
                        <p class="text-center text-info mb-0 py-1 rounded" style="font-weight:600">
                            Ketua PT KAI Indonesia
                        </p>
                    </div>
                </div>
                <p class="text-center mt-2 px-4 mb-4">
                    Data Pelamar
                </p>
                <div class="row">
                    <div class="col-4">
                        <div class="bg-light-info">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #5D87FF; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Jumlah
                        </p>
                    </div>
                    <div class="col-4">
                        <div class="bg-light-success">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #1D9375; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Diterima
                        </p>
                    </div>
                    <div class="col-4">
                        <div class="bg-light-danger">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #FA896B; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Ditolak
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2 mb-2">
                    <button class="btn btn-outline-info text-center w-100">
                        Detail
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-xxl-3">
        <div class="card border-primary border-bottom border-3 border-0">
            <div class="card-body">
                <div class="d-flex justify-content-center mt-2 mb-4">
                    <img src="{{ asset('kai.png') }}" width="100px" class="user-circle" alt="user">
                </div>
            </div>
            <div style="background-color: #5D87FF" class="mb-0">
                <p class="text-white text-center mb-0 py-2 fs-5" style="font-weight: 500">
                    PT KAI INDONESIA
                </p>
            </div>
            <div class="card-body">
            <p class="text-center">
                Menerima Lowongan
            </p>
                <div class="d-flex justify-content-center">
                    <div class="bg-light-info col-8">
                        <p class="text-center text-info mb-0 py-1 rounded" style="font-weight:600">
                            Ketua PT KAI Indonesia
                        </p>
                    </div>
                </div>
                <p class="text-center mt-2 px-4 mb-4">
                    Data Pelamar
                </p>
                <div class="row">
                    <div class="col-4">
                        <div class="bg-light-info">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #5D87FF; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Jumlah
                        </p>
                    </div>
                    <div class="col-4">
                        <div class="bg-light-success">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #1D9375; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Diterima
                        </p>
                    </div>
                    <div class="col-4">
                        <div class="bg-light-danger">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #FA896B; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Ditolak
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2 mb-2">
                    <button class="btn btn-outline-info text-center w-100">
                        Detail
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-xxl-3">
        <div class="card border-primary border-bottom border-3 border-0">
            <div class="card-body">
                <div class="d-flex justify-content-center mt-2 mb-4">
                    <img src="{{ asset('kai.png') }}" width="100px" class="user-circle" alt="user">
                </div>
            </div>
            <div style="background-color: #5D87FF" class="mb-0">
                <p class="text-white text-center mb-0 py-2 fs-5" style="font-weight: 500">
                    PT KAI INDONESIA
                </p>
            </div>
            <div class="card-body">
            <p class="text-center">
                Menerima Lowongan
            </p>
                <div class="d-flex justify-content-center">
                    <div class="bg-light-info col-8">
                        <p class="text-center text-info mb-0 py-1 rounded" style="font-weight:600">
                            Ketua PT KAI Indonesia
                        </p>
                    </div>
                </div>
                <p class="text-center mt-2 px-4 mb-4">
                    Data Pelamar
                </p>
                <div class="row">
                    <div class="col-4">
                        <div class="bg-light-info">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #5D87FF; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Jumlah
                        </p>
                    </div>
                    <div class="col-4">
                        <div class="bg-light-success">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #1D9375; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Diterima
                        </p>
                    </div>
                    <div class="col-4">
                        <div class="bg-light-danger">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #FA896B; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Ditolak
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2 mb-2">
                    <button class="btn btn-outline-info text-center w-100">
                        Detail
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-xxl-3">
        <div class="card border-primary border-bottom border-3 border-0">
            <div class="card-body">
                <div class="d-flex justify-content-center mt-2 mb-4">
                    <img src="{{ asset('kai.png') }}" width="100px" class="user-circle" alt="user">
                </div>
            </div>
            <div style="background-color: #5D87FF" class="mb-0">
                <p class="text-white text-center mb-0 py-2 fs-5" style="font-weight: 500">
                    PT KAI INDONESIA
                </p>
            </div>
            <div class="card-body">
            <p class="text-center">
                Menerima Lowongan
            </p>
                <div class="d-flex justify-content-center">
                    <div class="bg-light-info col-8">
                        <p class="text-center text-info mb-0 py-1 rounded" style="font-weight:600">
                            Ketua PT KAI Indonesia
                        </p>
                    </div>
                </div>
                <p class="text-center mt-2 px-4 mb-4">
                    Data Pelamar
                </p>
                <div class="row">
                    <div class="col-4">
                        <div class="bg-light-info">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #5D87FF; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Jumlah
                        </p>
                    </div>
                    <div class="col-4">
                        <div class="bg-light-success">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #1D9375; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Diterima
                        </p>
                    </div>
                    <div class="col-4">
                        <div class="bg-light-danger">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #FA896B; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Ditolak
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2 mb-2">
                    <button class="btn btn-outline-info text-center w-100">
                        Detail
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-xxl-3">
        <div class="card border-primary border-bottom border-3 border-0">
            <div class="card-body">
                <div class="d-flex justify-content-center mt-2 mb-4">
                    <img src="{{ asset('kai.png') }}" width="100px" class="user-circle" alt="user">
                </div>
            </div>
            <div style="background-color: #5D87FF" class="mb-0">
                <p class="text-white text-center mb-0 py-2 fs-5" style="font-weight: 500">
                    PT KAI INDONESIA
                </p>
            </div>
            <div class="card-body">
            <p class="text-center">
                Menerima Lowongan
            </p>
                <div class="d-flex justify-content-center">
                    <div class="bg-light-info col-8">
                        <p class="text-center text-info mb-0 py-1 rounded" style="font-weight:600">
                            Ketua PT KAI Indonesia
                        </p>
                    </div>
                </div>
                <p class="text-center mt-2 px-4 mb-4">
                    Data Pelamar
                </p>
                <div class="row">
                    <div class="col-4">
                        <div class="bg-light-info">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #5D87FF; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Jumlah
                        </p>
                    </div>
                    <div class="col-4">
                        <div class="bg-light-success">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #1D9375; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Diterima
                        </p>
                    </div>
                    <div class="col-4">
                        <div class="bg-light-danger">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #FA896B; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Ditolak
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2 mb-2">
                    <button class="btn btn-outline-info text-center w-100">
                        Detail
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-xxl-3">
        <div class="card border-primary border-bottom border-3 border-0">
            <div class="card-body">
                <div class="d-flex justify-content-center mt-2 mb-4">
                    <img src="{{ asset('kai.png') }}" width="100px" class="user-circle" alt="user">
                </div>
            </div>
            <div style="background-color: #5D87FF" class="mb-0">
                <p class="text-white text-center mb-0 py-2 fs-5" style="font-weight: 500">
                    PT KAI INDONESIA
                </p>
            </div>
            <div class="card-body">
            <p class="text-center">
                Menerima Lowongan
            </p>
                <div class="d-flex justify-content-center">
                    <div class="bg-light-info col-8">
                        <p class="text-center text-info mb-0 py-1 rounded" style="font-weight:600">
                            Ketua PT KAI Indonesia
                        </p>
                    </div>
                </div>
                <p class="text-center mt-2 px-4 mb-4">
                    Data Pelamar
                </p>
                <div class="row">
                    <div class="col-4">
                        <div class="bg-light-info">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #5D87FF; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Jumlah
                        </p>
                    </div>
                    <div class="col-4">
                        <div class="bg-light-success">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #1D9375; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Diterima
                        </p>
                    </div>
                    <div class="col-4">
                        <div class="bg-light-danger">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #FA896B; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Ditolak
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2 mb-2">
                    <button class="btn btn-outline-info text-center w-100">
                        Detail
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-xxl-3">
        <div class="card border-primary border-bottom border-3 border-0">
            <div class="card-body">
                <div class="d-flex justify-content-center mt-2 mb-4">
                    <img src="{{ asset('kai.png') }}" width="100px" class="user-circle" alt="user">
                </div>
            </div>
            <div style="background-color: #5D87FF" class="mb-0">
                <p class="text-white text-center mb-0 py-2 fs-5" style="font-weight: 500">
                    PT KAI INDONESIA
                </p>
            </div>
            <div class="card-body">
            <p class="text-center">
                Menerima Lowongan
            </p>
                <div class="d-flex justify-content-center">
                    <div class="bg-light-info col-8">
                        <p class="text-center text-info mb-0 py-1 rounded" style="font-weight:600">
                            Ketua PT KAI Indonesia
                        </p>
                    </div>
                </div>
                <p class="text-center mt-2 px-4 mb-4">
                    Data Pelamar
                </p>
                <div class="row">
                    <div class="col-4">
                        <div class="bg-light-info">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #5D87FF; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Jumlah
                        </p>
                    </div>
                    <div class="col-4">
                        <div class="bg-light-success">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #1D9375; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Diterima
                        </p>
                    </div>
                    <div class="col-4">
                        <div class="bg-light-danger">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #FA896B; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Ditolak
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2 mb-2">
                    <button class="btn btn-outline-info text-center w-100">
                        Detail
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-xxl-3">
        <div class="card border-primary border-bottom border-3 border-0">
            <div class="card-body">
                <div class="d-flex justify-content-center mt-2 mb-4">
                    <img src="{{ asset('kai.png') }}" width="100px" class="user-circle" alt="user">
                </div>
            </div>
            <div style="background-color: #5D87FF" class="mb-0">
                <p class="text-white text-center mb-0 py-2 fs-5" style="font-weight: 500">
                    PT KAI INDONESIA
                </p>
            </div>
            <div class="card-body">
            <p class="text-center">
                Menerima Lowongan
            </p>
                <div class="d-flex justify-content-center">
                    <div class="bg-light-info col-8">
                        <p class="text-center text-info mb-0 py-1 rounded" style="font-weight:600">
                            Ketua PT KAI Indonesia
                        </p>
                    </div>
                </div>
                <p class="text-center mt-2 px-4 mb-4">
                    Data Pelamar
                </p>
                <div class="row">
                    <div class="col-4">
                        <div class="bg-light-info">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #5D87FF; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Jumlah
                        </p>
                    </div>
                    <div class="col-4">
                        <div class="bg-light-success">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #1D9375; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Diterima
                        </p>
                    </div>
                    <div class="col-4">
                        <div class="bg-light-danger">
                                <p class="text-center py-2 rounded fs-5 mb-1" style="color: #FA896B; font-weight:700">
                                    20
                                </p>
                        </div>
                        <p class="text-center" style="font-weight: 400">
                            Ditolak
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2 mb-2">
                    <button class="btn btn-outline-info text-center w-100">
                        Detail
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection