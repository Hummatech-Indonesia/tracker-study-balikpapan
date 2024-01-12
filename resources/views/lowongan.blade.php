@extends('layouts.landing-page.app-landing')
@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('landing-page') }}" class="btn btn-primary btn-md">
                        Kembali
                    </a>
                    <form action="" method="get">
                        <div class="d-flex justify-content-header gap-3">
                            <div class="">
                                <input type="text" name="name" value="{{ request()->name }}" class="form-control"
                                    style="height: 2.4rem;" placeholder="Cari..." aria-label="cari"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="">
                                <select class="form-select" name="company_id" aria-label="Default select example">
                                    <option selected value="">Pilih Perusahaan</option>
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-primary btn-md">
                                    Cari
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                @forelse ($jobVacancys as $jobVacancy)
                    <div class="col-12 col-md-6 col-lg-4 res-margin my-4">
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
                                {{-- <a href="{{ route('detail-lowongan', ['jobVacancy' => $jobVacancy->id]) }}"
                                    class="p-2 rounded text-white"
                                    style="margin-top: -1rem; font-weight:450;background-color:#FFAE1F">Selengkapnya</a> --}}
                                <a href="{{ route('detail-lowongan', ['jobVacancy' => $jobVacancy->id]) }}"
                                    class="btn btn-md text-white"
                                    style="background-color: #FFAE1F; color:white; padding-right:2rem; padding-left:2rem">
                                    Selengkapnya
                                </a>
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
