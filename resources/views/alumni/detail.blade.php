@extends('layouts.app')
@section('content')
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
                            <img style="object-fit: cover; width: 100%; height: 100%;"
                                src="{{ asset('1.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <h5 class="text-dark text-center mt-3" style="font-weight: 600">
                    PT KAI INDONESIA
                </h5>
                <p class="text-center">
                    www.ptkai.id
                </p>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-primary">
                        Kirim CV
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <p class="fs-6 mb-2" style="font-weight: 600">
                            Lowongan Pada Bagian
                        </p>
                        <h5 class="text-primary" style="font-weight:500">
                            Ketua PT KAI Indonesia
                        </h5>
                        <p class="fs-6 mb-2 mt-5" style="font-weight: 600">
                            Lowongan Pada Bagian
                        </p>
                        <p class="text-primary">
                            - Kontrak
                        </p>
                        <p class="fs-6 mb-2 mt-5" style="font-weight: 600">
                            Gaji Pokok
                        </p>
                        <div class="bg-light-primary col-5 py-1 rounded">
                            <h5 class="text-primary mb-0 text-center" style="font-weight:500">
                                Rp. 300.000.000
                            </h5>
                        </div>
                    </div>
                    <div class="col">
                        <p class="fs-6 mb-2" style="font-weight: 600">
                            Deskripsi Sistem Kerja
                        </p>
                        <p>
                            Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Ipsum Dolor Sit Amet Lorem Ipsum Lorem Ipsum Dolor Sit Amet Ipsum Dolor Sit Amet Lorem
                        </p>
                        <p class="fs-6 mb-2 mt-5" style="font-weight: 600">
                            Kualifikasi / Syarat Syarat
                        </p>
                        <ul>
                            <li>
                                Membawa KTP Asli
                            </li>
                            <li>
                                Membawa KTP Asli
                            </li>
                            <li>
                                Membawa KTP Asli
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection