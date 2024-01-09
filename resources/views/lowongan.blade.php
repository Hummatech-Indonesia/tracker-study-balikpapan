@extends('layouts.landing-page.app-landing')
@section('style')
    <style>
        .button {
            font-size: 1rem;
            font-weight: 500;
            color: #fff;
            line-height: 1;
            background-color: #5D87FF;
            padding: 10px 10px;
            border-radius: 6px;
            outline: 0 none;
            position: relative;
            z-index: 1;
        }
    </style>
@endsection
@section('content')
    <!-- ***** Welcome Area Start ***** -->
    <section class="section breadcrumb-area bg-overlay d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Breamcrumb Content -->
                    <div class="breadcrumb-content text-center">
                        <h2 class="text-white text-capitalize">DAFTAR LOWONGAN KERJA</h2>
                        <ol class="breadcrumb d-flex justify-content-center">
                            <li class="breadcrumb-item text-white">TRACER STUDY SMKN 2 PENAJAM </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <section id="blog" class="section blog-area ptb_100">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-2">
                    <a href="{{ route('landing-page') }}" class="button text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
                            fill="none">
                            <path
                                d="M0.292892 7.29289C-0.0976315 7.68342 -0.0976314 8.31658 0.292893 8.w70711L6.65686 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928933C7.68054 0.538409 7.04738 0.538409 6.65685 0.928933L0.292892 7.29289ZM18 7L1 7L1 9L18 9L18 7Z"
                                fill="white" />
                        </svg> Kembali
                    </a>
                </div>
                <div class="col-4">
                    <form action="" method="get">
                        <input type="text" class="form-control" name="job_title" placeholder="Cari Lowongan"
                            value="{{ request()->job_title }}">
                    </form>
                </div>
            </div>
            <div class="row">
                @forelse ($jobVacancys as $jobVacancy)
                    <div class="col-12 col-md-6 col-lg-3 res-margin my-4">
                        <!-- Single Price Plan -->
                        <div class="single-price-plan text-center py-3 wow fadeInLeft" data-aos-duration="2s"
                            data-wow-delay="0.4s">

                            <div class="card-top p-4 d-flex justify-content-center align-items-center">
                                <img class="rounded-circle bg-secondary"
                                    style="width: 8rem; height:8rem;border:#5D87FF solid;"
                                    src="{{ asset($jobVacancy->company->user->photo == null ? 'default.jpg' : 'storage/' . $jobVacancy->company->user->photo) }}"
                                    alt="">
                            </div>
                            <div class="bg-primary p-2 text-white d-flex justify-content-center"
                                style="font-weight: 600; font-size:12px; font-style: normal;">
                                {{ $jobVacancy->company->user->name }}</div>
                            <p class="d-flex text-black d-flex justify-content-center px-2 pt-2"
                                style="font-weight: 500; color:black; font-size:14px; font-style: normal;">Menerima Lowongan
                            </p>
                            <div style="background-color: #ECF2FF;" class="p-2 mx-4 d-flex justify-content-center mt-3">
                                <p style="color: #5D87FF; font-weight:600">{{ $jobVacancy->job_title }}</p>
                            </div>
                            <p class="d-flex text-black d-flex justify-content-center p-2"
                                style="font-weight: 500; color:black; font-size:14px; font-style: normal;">Dengan Gaji
                            </p>
                            <p style="color: #5D87FF; font-weight:600" class="d-flex justify-content-center">
                                {{ 'Rp. ' . number_format($jobVacancy->basic_salary, 2, ',', '.') }}/bln
                            </p>
                            <p class="d-flex text-black d-flex justify-content-center p-2"
                                style="font-weight: bold; color:black; font-size:14px; font-style: normal;">Deskripsi
                                Lowongan
                            </p>
                            <p class="d-flex text-black d-flex justify-content-center p-3 text-center mb-3"
                                style="font-weight: 500; color: black; font-size: 12px; font-style: normal;">
                                {{ Str::limit($jobVacancy->description_working_system, 100, '...') }}
                            </p>


                            <!-- Plan Button -->
                            <div class="plan-button">
                                <a href="{{ route('detail-lowongan', ['jobVacancy' => $jobVacancy->id]) }}"
                                    class="p-2 rounded text-white"
                                    style="margin-top: -1rem; font-weight:450;background-color:#FFAE1F">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
            {{ $jobVacancys->links('pagination::bootstrap-5') }}
        </div>
    </section>

    <div class="height-emulator d-none d-lg-block"></div>
@endsection
