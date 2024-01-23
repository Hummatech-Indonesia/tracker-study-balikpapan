@extends('layouts.landing-page.app-landing')
@section('style')
    <style>
        @media only screen and (min-width: 768px) and (max-width: 834px) {
            .foto-welcome {
                display: none;
            }
        }
    </style>
@endsection
@section('content')
    <!-- ***** Welcome Area Start ***** -->
    <section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <!-- Welcome Intro Start -->
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="welcome-intro">
                        <h2 class="text-white fs-6">SELAMAT DATANG DI TRACKER STUDY SMK 2 PENAJAM</h2>
                        <p class="text-white my-4">Nikmati pengalaman eksklusif melalui situs web kami, Tracer Study, yang
                            dirancang khusus untuk membantu Anda melacak dan memahami perjalanan karir alumni kami.
                            Menyajikan informasi yang komprehensif, platform ini memungkinkan Anda menjelajahi prestasi dan
                            perkembangan mereka setelah meninggalkan lembaga pendidikan.</p>
                    </div>
                    <div class="">
                        <a href="/pilih-role" class="btn text-white py-2 py-1"
                            style="background-color:#FFAE1F; width:25% ; height:25%">
                            Daftar
                        </a>
                    </div>
                </div>
                <div class="col-0 col-md-0 col-lg-1"></div>
                <div class="col-12 col-md-3 col-lg-4"><img class="foto-welcome" src="logo-welcome.png" alt=""></div>
            </div>
        </div>
        <!-- Shape Bottom -->
        <div class="shape-bottom">
            <svg viewBox="0 0 1920 310" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" class="svg replaced-svg">
                <title>sApp Shape</title>
                <desc>Created with Sketch</desc>
                <defs></defs>
                <g id="sApp-Landing-Page" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="sApp-v1.0" transform="translate(0.000000, -554.000000)" fill="#FFFFFF">
                        <path
                            d="M-3,551 C186.257589,757.321118 319.044414,856.322454 395.360475,848.004007 C509.834566,835.526337 561.525143,796.329212 637.731734,765.961549 C713.938325,735.593886 816.980646,681.910577 1035.72208,733.065469 C1254.46351,784.220361 1511.54925,678.92359 1539.40808,662.398665 C1567.2669,645.87374 1660.9143,591.478574 1773.19378,597.641868 C1848.04677,601.75073 1901.75645,588.357675 1934.32284,557.462704 L1934.32284,863.183395 L-3,863.183395"
                            id="sApp-v1.0"></path>
                    </g>
                </g>
            </svg>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Counter Area Start ***** -->
    <section class="section counter-area ptb_50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5 col-sm-2 single-counter text-center">
                    <div class="counter-inner p-3 p-md-0">
                        <!-- Counter Item -->
                        <div class="counter-item d-inline-block mb-3">
                            <span class="counter fw-7">{{ $countAlumni }}</span>
                        </div>
                        <h5>Jumlah Alumni</h5>
                    </div>
                </div>
                <div class="col-5 col-sm-2 single-counter text-center">
                    <div class="counter-inner p-3 p-md-0">
                        <!-- Counter Item -->
                        <div class="counter-item d-inline-block mb-3">
                            <span class="counter fw-7">{{ $countAlumniSubmitSurvey }}</span>
                        </div>
                        <h5>Alumni Mengisi Survey</h5>
                    </div>
                </div>
                <div class="col-5 col-sm-2 single-counter text-center">
                    <div class="counter-inner p-3 p-md-0">
                        <!-- Counter Item -->
                        <div class="counter-item d-inline-block mb-3">
                            <span class="counter fw-7">{{ $countAlumniStudy }}</span>
                        </div>
                        <h5>Kuliah</h5>
                    </div>
                </div>
                <div class="col-5 col-sm-2 single-counter text-center">
                    <div class="counter-inner p-3 p-md-0">
                        <!-- Counter Item -->
                        <div class="counter-item d-inline-block mb-3">
                            <span class="counter fw-7">{{ $countAlumniBusinnes }}</span>
                        </div>
                        <h5>Berwirausaha</h5>
                    </div>
                </div>
                <div class="col-5 col-sm-2 single-counter text-center">
                    <div class="counter-inner p-3 p-md-0">
                        <!-- Counter Item -->
                        <div class="counter-item d-inline-block mb-3">
                            <span class="counter fw-7">{{ $countAlumniWork }}</span>
                        </div>
                        <h5>Pekerja</h5>
                    </div>
                </div>
                <div class="col-5 col-sm-2 single-counter text-center">
                    <div class="counter-inner p-3 p-md-0">
                        <!-- Counter Item -->
                        <div class="counter-item d-inline-block mb-3">
                            <span class="counter fw-7">{{ $countAlumniNotWork }}</span>
                        </div>
                        <h5>Menganggur</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Counter Area End ***** -->

    <section class="section counter-area ptb_50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <img src="smkn-2-penajam.png" class="rounded" alt="" srcset="">
                </div>
                <div class="col-12 col-lg-6">
                    <div class="mb-5">
                        <h3 class="text-center my-4">SMKN 2 PENAJAM</h3>
                        <p style="font-size: 16px; color:black; ">SMK Negeri 2 Penajam Paser Utara sebagai lembaga
                            pendidikan terus berupaya meningkatkan mutu dengan mengupayakan dan memanfaatkan setiap sarana
                            dan prasana termasuk melalui layanan Online ini. Besar harapan, sarana ini dapat memberi manfaat
                            bagi semua pihak yang ada dilingkup pendidikan dan bagi pemerhati pendidikan secara khusus bagi
                            SMK Negeri 2 Penajam Paser Utara.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="features" class="section features-area style-two overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-9">
                    <!-- Section Heading -->
                    <div class="text-center mb-5">
                        <h2>Perusahaan Yang Bekerja Sama Dengan SMKN 2 Penajam</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @forelse ($companies as $company)
                    <div class="col-12 col-md-6 col-lg-4" style="margin-bottom: 4rem">
                        <!-- Image Box -->
                        <div class="image-box text-center icon-1 p-5 wow fadeInLeft" data-wow-delay="0.4s">
                            <!-- Featured Image -->
                            <div class="featured-img mb-3">
                                <img class="rounded-circle" style="height:6rem;width:6rem;"
                                    src="{{ asset($company->user->photo == null ? 'default.jpg' : 'storage/' . $company->user->photo) }}"
                                    alt="">
                            </div>
                            <!-- Icon Text -->
                            <div class="icon-text">
                                <h3 class="mb-2">{{ $company->user->name }}</h3>
                                <p>{{ $company->description }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="d-flex mb-4" style="min-height:16rem">
                        <div class="my-auto">
                            <img src="{{ asset('showNoData.png') }}" width="350" height="350" />
                            <h4 class="text-center mt-4">Data Perusahaan Kosong!!</h4>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- ***** Features Area End ***** -->

    <!-- ***** Review Area Start ***** -->
    <section id="review" class="review-area mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <!-- Section Heading -->
                    <div class="text-center">
                        <h3 class="text-capitalize">Lowongan Pekerjaan</h3>
                        <div class="text-capitalize ">Berikut Merupakan Lowongan pekerjaan dari beberapa instansi</div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
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
                                style="font-weight: 500; color:black; font-size:14px; font-style: normal;">Menerima
                                Lowongan
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
                    <div class="d-flex mb-4" style="min-height:16rem">
                        <div class="my-auto">
                            <img src="{{ asset('showNoData.png') }}" width="350" height="350" />
                            <h4 class="text-center mt-4">Data Lowongan Pekerjaan Kosong!!</h4>
                        </div>
                    </div>
                @endforelse
            </div>
            @if (count($jobVacancys) >= 4 )
                <div class="row justify-content-center">
                    <a href="{{ route('lowongan') }}"
                        style="font-size: 1rem;
                font-weight: 500;
                color: #fff;
                line-height: 1;
                background-color: #5D87FF;
                padding: 10px 10px;
                border-radius: 6px;
                outline: 0 none;
                position: relative;
                z-index: 1;margin-top:40px;margin-bottom:40px;">Lowongan
                        Lainnya</a>
                </div>
            @else
            @endif

        </div>
    </section>
    <!-- ***** Review Area End ***** -->

    <!--====== Height Emulator Area Start ======-->
    <div class="height-emulator d-none d-lg-block"></div>
    <!--====== Height Emulator Area End ======-->
@endsection
