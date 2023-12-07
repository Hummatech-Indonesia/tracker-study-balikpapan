@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between">
    <div>
        <h5 style="font-weight: 600" class="mb-4 mt-2">
            Detail Lowongan kerja
        </h5>
    </div>
    <div class="">
        <a href="{{ route('job-vacancy') }}" class="btn btn-warning text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="m7.825 13l4.9 4.9q.3.3.288.7t-.313.7q-.3.275-.7.288t-.7-.288l-6.6-6.6q-.15-.15-.213-.325T4.425 12q0-.2.063-.375T4.7 11.3l6.6-6.6q.275-.275.688-.275t.712.275q.3.3.3.713t-.3.712L7.825 11H19q.425 0 .713.288T20 12q0 .425-.288.713T19 13H7.825Z"/></svg>
            Kembali
        </a>
    </div>
</div>
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-center mt-3">
                    <img src="{{ asset('assets-admin/images/avatars/avatar-1.png') }}"
                        class="rounded-circle p-1 border border-success" width="100" height="100" alt="...">
                </div>
                <div class="text-center mt-3 fs-7 text-dark" style="font-weight: 800">
                    PT HUMMATECH DIGITAL INDONESIA
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <div class="badge bg-light-success text-success">
                        <p class="mb-0 py-1 px-3 fs-7">
                            Pekerja Tetap
                        </p>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <div class="col-5 text-white rounded text-center py-2" style="background-color: #1D9375">
                        <p class="mb-0 " style="font-weight: 500">
                            Web Developper
                        </p>
                    </div>
                </div>
                <p class="fs-5 text-center mt-2" style="color: #1D9375">
                    RP 3.250.000.000
                </p>
                <p class="fs-5 text-center mt-2 text-dark mb-1" style="font-weight:500">
                    Deskripsi Perusahaan
                </p>
                <div class="px-5 mb-5">
                    <p class="text-center text-dark ">
                        Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Ipsum Dolor Sit Amet Lorem Ipsum Lorem Ipsum Dolor Sit Amet Ipsum Dolor Sit Amet Lorem Ipsum
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <p class="fs-6 mt-2" style="font-weight: 600">
                    Syarat dan Ketentuan
                </p>
                <div class="row mt-3 mb-4">
                    <div class="col-4">
                        <li style="font-weight: 500">
                            Lorem Ipsum Dolor Sit Amet
                        </li>
                    </div>
                    <div class="col-4">
                        <li style="font-weight: 500">
                            Lorem Ipsum Dolor Sit Amet
                        </li>
                    </div>
                    <div class="col-4">
                        <li style="font-weight: 500">
                            Lorem Ipsum Dolor Sit Amet
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
