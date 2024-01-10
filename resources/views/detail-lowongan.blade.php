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
                        <h2 class="text-white text-capitalize">DETAIL LOWONGAN KERJA</h2>
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
                    <div class="button text-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
                            fill="none">
                            <path
                                d="M0.292892 7.29289C-0.0976315 7.68342 -0.0976314 8.31658 0.292893 8.70711L6.65686 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928933C7.68054 0.538409 7.04738 0.538409 6.65685 0.928933L0.292892 7.29289ZM18 7L1 7L1 9L18 9L18 7Z"
                                fill="white" />
                        </svg> Kembali
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card shadow p-3 bg-body-tertiary rounded col-12">
                    <div class="card-body d-flex">
                        <img class="rounded-circle"
                            src="{{ asset($jobVacancy->company->user->photo == null ? 'default.jpg' : 'storage/' . $jobVacancy->company->user->photo) }}"
                            style="border: #5D87FF solid;" width="20%" src="assets/img/avatar/avatar-2.png"
                            alt="">
                        <div class="ml-5"> <!-- Adjust margin-left as needed -->
                            <h3>{{ $jobVacancy->company->user->name }}</h3>
                            <h5 style="color: #5D87FF">
                                {{ $jobVacancy->company->company_field ? $jobVacancy->company->company_field : '-' }}
                            </h5>
                            <div class="mb-2 mt-2">{{ $jobVacancy->company->website ? $jobVacancy->company->website : '-' }}
                            </div>
                            <div class="mt-2 mb-2">
                                {{ $jobVacancy->company->user->address ? $jobVacancy->company->user->address : '-' }}
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="button">
                            Kirim CV
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow p-3 bg-body-tertiary rounded mt-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Lowongan Pada Bagian</h4>
                            <h6 class="mt-3 mb-3" style="color: #5D87FF;">{{ $jobVacancy->position }}</h6>
                            <h4>Deskripsi Sistem Kerja</h4>
                            <p class="mt-3 mb-3">
                                {{ $jobVacancy->description_working_system }}
                            </p>
                            <h4 class="mt-3">Sistem Kerja</h4>
                            <ul class="list-unstyled mt-2">
                                <li>@if ($jobVacancy->work_system == 'contract')
                                    - Kontrak
                                    @elseif ($jobVacancy->work_system == 'permanentwork')
                                    - Kerja Tetap
                                    @elseif ($jobVacancy->work_system == 'workingparttime')
                                    - Kerja Paruh Waktu
                                    @else
                                    - Freelance
                                    @endif</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h4 class="mb-3">Kualifikasi / Syarat - syarat</h4>
                            <div class="mb-2">
                                {{ $jobVacancy->qualifications }}
                            </div>
                            <h4 class="mb-3">Gaji Pokok</h4>
                            <button class="button">
                                {{ 'Rp. ' . number_format($jobVacancy->basic_salary, 2, ',', '.') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="height-emulator d-none d-lg-block"></div>
@endsection
