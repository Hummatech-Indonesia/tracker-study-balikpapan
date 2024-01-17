@extends('layouts.app')
@section('style')
    <style>
        .photo-stack {
            position: relative;
            margin: auto;
            width: 200px;
            height: 200px;
            z-index: 2;

        }

        .photo-stack>p {
            position: absolute;
            width: 100%;
            bottom: 0;
            left: 0;
            text-align: center;
            font-weight: bold;
            z-index: 2;
        }

        .photo-stack img {
            position: absolute;
            top: 0;
            left: 0;
            border: 1px solid white;
            box-shadow: 0 1px 3px -2px rgba(0, 0, 0, .5);
            transition: all 0.3s ease-out;
            z-index: 2;

        }

        .photo-stack img:nth-child(1) {
            z-index: 999;
        }

        .photo-stack img:nth-child(2) {
            transform: rotate3d(0, 0, 1, 3deg);
        }

        .photo-stack img:nth-child(3) {
            transform: rotate3d(0, 0, 1, -3deg);
        }

        .photo-stack img:nth-child(4) {
            transform: rotate3d(0, 0, 1, 2deg);
        }

        .photo-stack:hover img:nth-child(1) {
            transform: scale(1.02);
        }

        .photo-stack:hover img:nth-child(2) {
            transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 3deg);
        }

        .photo-stack:hover img:nth-child(3) {
            transform: translate3d(-10%, 0, 0) rotate3d(0, 0, 1, -3deg);
        }

        .photo-stack:hover img:nth-child(4) {
            transform: translate3d(2%, -5%, 0) rotate3d(0, 0, 1, 2deg);
        }

        .photo-stack:hover img:nth-child(5) {
            transform: translate3d(-5%, -2%, 0) rotate3d(0, 0, 1, 2deg);
        }
    </style>
@endsection
@section('content')
    <h5>
        Dashboard
    </h5>
    <div class="row">
        <div class="col-12 col-md-12 col-xl-4">
            <div class="card radius-10 border-start border-warning">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Jumlah Project</p>
                            <h4 class="my-1 text-warning">{{ $countPortofolio }}</h4>
                        </div>
                        <div class="widgets-icons bg-light-warning text-success ms-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                <path d="M22 31.6254C21.7606 31.6254 21.5254 31.5629 21.3177 31.4441L9.28125 24.5648C9.17666 24.5044 9.05801 24.4726 8.93725 24.4727C8.81648 24.4727 8.69785 24.5046 8.59331 24.565C8.48877 24.6255 8.402 24.7124 8.34173 24.8171C8.28146 24.9217 8.24982 25.0404 8.25 25.1612V31.6254C8.2498 31.8708 8.31528 32.1118 8.43965 32.3234C8.56401 32.5349 8.74274 32.7093 8.95727 32.8285L21.3323 39.7035C21.5365 39.817 21.7663 39.8765 22 39.8765C22.2337 39.8765 22.4635 39.817 22.6677 39.7035L35.0427 32.8285C35.2573 32.7093 35.436 32.5349 35.5604 32.3234C35.6847 32.1118 35.7502 31.8708 35.75 31.6254V25.1612C35.7502 25.0404 35.7185 24.9217 35.6583 24.8171C35.598 24.7124 35.5112 24.6255 35.4067 24.565C35.3021 24.5046 35.1835 24.4727 35.0628 24.4727C34.942 24.4726 34.8233 24.5044 34.7188 24.5648L22.6823 31.4441C22.4746 31.5629 22.2394 31.6254 22 31.6254Z" fill="#FA896B"/>
                                <path d="M42.6181 16.371C42.6181 16.371 42.6181 16.3641 42.6181 16.3616C42.5959 16.1436 42.5219 15.9341 42.4023 15.7506C42.2827 15.567 42.121 15.4147 41.9306 15.3063L22.6806 4.30625C22.4728 4.18748 22.2376 4.125 21.9983 4.125C21.7589 4.125 21.5237 4.18748 21.3159 4.30625L2.06594 15.3063C1.85555 15.4265 1.68069 15.6003 1.55908 15.8099C1.43746 16.0195 1.37341 16.2576 1.37341 16.4999C1.37341 16.7423 1.43746 16.9803 1.55908 17.1899C1.68069 17.3996 1.85555 17.5733 2.06594 17.6936L21.3159 28.6936C21.5237 28.8124 21.7589 28.8748 21.9983 28.8748C22.2376 28.8748 22.4728 28.8124 22.6806 28.6936L39.6172 19.0162C39.6434 19.0011 39.6731 18.9931 39.7033 18.9931C39.7335 18.9932 39.7632 19.0012 39.7894 19.0163C39.8155 19.0315 39.8372 19.0533 39.8522 19.0795C39.8673 19.1058 39.8751 19.1355 39.875 19.1657V31.5863C39.875 32.3262 40.4439 32.9613 41.1838 32.9982C41.3697 33.0072 41.5555 32.9783 41.73 32.9133C41.9044 32.8483 42.0638 32.7486 42.1985 32.6202C42.3333 32.4918 42.4406 32.3374 42.5139 32.1663C42.5872 31.9952 42.625 31.8111 42.625 31.6249V16.4999C42.6249 16.4569 42.6226 16.4138 42.6181 16.371Z" fill="#FA896B"/>
                              </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-xl-4">
            <div class="card radius-10 border-start border-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Jumlah Lowongan</p>
                            <h4 class="my-1 text-success">{{ $countVacancy }}</h4>
                        </div>
                        <div class="widgets-icons bg-light-success text-success ms-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 44 44" fill="none">
                                <path d="M37.8048 9.625H35.7577C35.7557 9.625 35.7537 9.62581 35.7523 9.62727C35.7508 9.62872 35.75 9.63068 35.75 9.63273V35.75C35.75 36.4793 36.0397 37.1788 36.5555 37.6945C37.0712 38.2103 37.7707 38.5 38.5 38.5C39.2293 38.5 39.9288 38.2103 40.4445 37.6945C40.9603 37.1788 41.25 36.4793 41.25 35.75V13.0702C41.25 12.1565 40.887 11.2802 40.2409 10.6341C39.5948 9.98798 38.7185 9.625 37.8048 9.625Z" fill="#1D9375"/>
                                <path d="M33 35.75V6.1875C33 5.73608 32.9111 5.28908 32.7383 4.87203C32.5656 4.45497 32.3124 4.07602 31.9932 3.75682C31.674 3.43762 31.295 3.18441 30.878 3.01166C30.4609 2.83891 30.0139 2.75 29.5625 2.75H6.1875C5.27582 2.75 4.40148 3.11216 3.75682 3.75682C3.11216 4.40148 2.75 5.27582 2.75 6.1875V36.4375C2.75 37.7139 3.25703 38.9379 4.15955 39.8405C5.06207 40.743 6.28615 41.25 7.5625 41.25H37.0262C37.0392 41.2501 37.0521 41.2476 37.0641 41.2427C37.0762 41.2378 37.0871 41.2305 37.0963 41.2213C37.1055 41.2121 37.1128 41.2012 37.1177 41.1891C37.1226 41.1771 37.1251 41.1642 37.125 41.1512C37.125 41.1296 37.1178 41.1086 37.1046 41.0915C37.0913 41.0744 37.0728 41.0621 37.052 41.0566C35.8888 40.7376 34.8625 40.0456 34.1306 39.087C33.3986 38.1284 33.0014 36.9561 33 35.75ZM8.25 11C8.25 10.6353 8.39487 10.2856 8.65273 10.0277C8.91059 9.76987 9.26033 9.625 9.625 9.625H15.125C15.4897 9.625 15.8394 9.76987 16.0973 10.0277C16.3551 10.2856 16.5 10.6353 16.5 11V16.5C16.5 16.8647 16.3551 17.2144 16.0973 17.4723C15.8394 17.7301 15.4897 17.875 15.125 17.875H9.625C9.26033 17.875 8.91059 17.7301 8.65273 17.4723C8.39487 17.2144 8.25 16.8647 8.25 16.5V11ZM26.125 34.375H9.66367C8.92375 34.375 8.28867 33.8061 8.25172 33.0662C8.24276 32.8803 8.27164 32.6945 8.33661 32.52C8.40158 32.3456 8.50129 32.1862 8.62969 32.0515C8.75809 31.9167 8.91251 31.8094 9.0836 31.7361C9.25468 31.6628 9.43887 31.625 9.625 31.625H26.0863C26.8262 31.625 27.4613 32.1939 27.4983 32.9338C27.5072 33.1197 27.4784 33.3055 27.4134 33.48C27.3484 33.6544 27.2487 33.8138 27.1203 33.9485C26.9919 34.0833 26.8375 34.1906 26.6664 34.2639C26.4953 34.3372 26.3111 34.375 26.125 34.375ZM26.125 28.875H9.66367C8.92375 28.875 8.28867 28.3061 8.25172 27.5662C8.24276 27.3803 8.27164 27.1945 8.33661 27.02C8.40158 26.8456 8.50129 26.6862 8.62969 26.5515C8.75809 26.4167 8.91251 26.3094 9.0836 26.2361C9.25468 26.1628 9.43887 26.125 9.625 26.125H26.0863C26.8262 26.125 27.4613 26.6939 27.4983 27.4338C27.5072 27.6197 27.4784 27.8055 27.4134 27.98C27.3484 28.1544 27.2487 28.3138 27.1203 28.4485C26.9919 28.5833 26.8375 28.6906 26.6664 28.7639C26.4953 28.8372 26.3111 28.875 26.125 28.875ZM26.125 23.375H9.66367C8.92375 23.375 8.28867 22.8061 8.25172 22.0662C8.24276 21.8803 8.27164 21.6945 8.33661 21.52C8.40158 21.3456 8.50129 21.1862 8.62969 21.0515C8.75809 20.9167 8.91251 20.8094 9.0836 20.7361C9.25468 20.6628 9.43887 20.625 9.625 20.625H26.0863C26.8262 20.625 27.4613 21.1939 27.4983 21.9338C27.5072 22.1197 27.4784 22.3055 27.4134 22.48C27.3484 22.6544 27.2487 22.8138 27.1203 22.9485C26.9919 23.0833 26.8375 23.1906 26.6664 23.2639C26.4953 23.3372 26.3111 23.375 26.125 23.375ZM26.125 17.875H20.6637C19.9237 17.875 19.2887 17.3061 19.2517 16.5662C19.2428 16.3803 19.2716 16.1945 19.3366 16.02C19.4016 15.8456 19.5013 15.6862 19.6297 15.5515C19.7581 15.4167 19.9125 15.3094 20.0836 15.2361C20.2547 15.1628 20.4389 15.125 20.625 15.125H26.0863C26.8262 15.125 27.4613 15.6939 27.4983 16.4338C27.5072 16.6197 27.4784 16.8055 27.4134 16.98C27.3484 17.1544 27.2487 17.3138 27.1203 17.4485C26.9919 17.5833 26.8375 17.6906 26.6664 17.7639C26.4953 17.8372 26.3111 17.875 26.125 17.875ZM26.125 12.375H20.6637C19.9237 12.375 19.2887 11.8061 19.2517 11.0662C19.2428 10.8803 19.2716 10.6945 19.3366 10.52C19.4016 10.3456 19.5013 10.1862 19.6297 10.0515C19.7581 9.91671 19.9125 9.80943 20.0836 9.73613C20.2547 9.66282 20.4389 9.62502 20.625 9.625H26.0863C26.8262 9.625 27.4613 10.1939 27.4983 10.9338C27.5072 11.1197 27.4784 11.3055 27.4134 11.48C27.3484 11.6544 27.2487 11.8138 27.1203 11.9485C26.9919 12.0833 26.8375 12.1906 26.6664 12.2639C26.4953 12.3372 26.3111 12.375 26.125 12.375Z" fill="#1D9375"/>
                              </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-xl-4">
            <div class="card radius-10 border-start border-danger">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Lowongan Yang Kamu Lamar</p>
                            <h4 class="my-1 text-danger">{{ $countApplyJobVacancy }}</h4>
                        </div>
                        <div class="widgets-icons bg-light-danger text-danger ms-auto"><svg
                                xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"
                                fill="none">
                                <path
                                    d="M22.0001 2.75C20.5414 2.75 19.1424 3.32946 18.111 4.36091C17.0795 5.39236 16.5001 6.79131 16.5001 8.25V13.75H13.7501V8.25C13.7501 6.06196 14.6192 3.96354 16.1664 2.41637C17.7136 0.869194 19.812 0 22.0001 0C24.1881 0 26.2865 0.869194 27.8337 2.41637C29.3809 3.96354 30.2501 6.06196 30.2501 8.25V13.75H27.5001V8.25C27.5001 6.79131 26.9206 5.39236 25.8891 4.36091C24.8577 3.32946 23.4587 2.75 22.0001 2.75ZM13.7501 13.75H9.24005C8.25246 13.7502 7.29772 14.1048 6.54934 14.7492C5.80096 15.3936 5.30863 16.2851 5.1618 17.2617L2.33755 36.1075C2.19122 37.0854 2.25753 38.0833 2.53195 39.0332C2.80638 39.9831 3.28246 40.8626 3.92773 41.6117C4.573 42.3609 5.37226 42.9621 6.271 43.3742C7.16975 43.7864 8.14681 43.9998 9.13555 44H34.8618C35.8508 44.0002 36.8282 43.787 37.7272 43.3751C38.6263 42.9631 39.4259 42.362 40.0715 41.6128C40.717 40.8636 41.1934 39.9839 41.468 39.0338C41.7425 38.0837 41.8089 37.0856 41.6626 36.1075L38.8356 17.2617C38.6888 16.2856 38.1969 15.3944 37.4491 14.7501C36.7013 14.1057 35.7472 13.7509 34.7601 13.75H30.2501V17.875C30.2501 18.2397 30.1052 18.5894 29.8473 18.8473C29.5895 19.1051 29.2397 19.25 28.8751 19.25C28.5104 19.25 28.1606 19.1051 27.9028 18.8473C27.6449 18.5894 27.5001 18.2397 27.5001 17.875V13.75H16.5001V17.875C16.5001 18.2397 16.3552 18.5894 16.0973 18.8473C15.8395 19.1051 15.4897 19.25 15.1251 19.25C14.7604 19.25 14.4106 19.1051 14.1528 18.8473C13.8949 18.5894 13.7501 18.2397 13.7501 17.875V13.75Z"
                                    fill="#FA896B" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h5>
        Pengalaman Project
    </h5>
    <div class="row">
        @forelse ($portofolios as $portofolio)
            <div class="col-md-12 col-lg-6 col-sm-12">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <div class="photo-stack mt-4">
                                @foreach ($portofolio->photoPortofolios as $photoPortofolio)
                                    <img src="{{ asset('storage/' . $photoPortofolio->photo) }}" width="200"
                                        height="200" style="object-fit: cover" />
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="text-primary text-end ">
                                    {{ $portofolio->year }}
                                </h5>
                                <h5 class="card-title">{{ $portofolio->name }}</h5>
                                <p class="card-text">
                                    {{ Illuminate\Support\Str::limit($portofolio->description, $limit = 230, $end = '...') }}
                                </p>
                            </div>
                        </div>
                        <div class="card-body">
                            <a class="btn btn-primary justify-content-center d-flex"
                                href="{{ route('detail.portofolio', ['portofolio' => $portofolio->id]) }}">
                                Lihat Project
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class=" d-flex justify-content-center">
                <div>
                    <img src="{{ asset('showNoData.png') }}" alt="">
                    <h5 class="text-center">Portofolio Anda Masih Kosong!!</h5>
                </div>
            </div>
        @endforelse
    </div>
    <h5>
        Lowongan Kerja
    </h5>
    <div class="row">
        @forelse ($jobVacancys as $jobVacancy)
            <div class="col-12 col-md-6 col-lg-4 res-margin my-4">
                <!-- Single Price Plan -->
                <div class="single-price-plan card text-center py-3 wow fadeInLeft" data-aos-duration="2s"
                    data-wow-delay="0.4s">
                    <div class="card-top p-4 d-flex justify-content-center align-items-center">
                        @if ($jobVacancy->company->user->photo)
                            <img src="{{ asset('storage/' . $jobVacancy->company->user->photo) }}" class="rounded-circle"
                                style="object-fit: cover;width: 7rem; height:7rem;">
                        @else
                            <div class="rounded-circle bg-secondary" style="object-fit: cover;width: 7rem; height:7rem;">
                                <img src="{{ asset('default.jpg') }}" class="rounded-circle"
                                    style="object-fit: cover;width: 7rem; height:7rem;">
                            </div>
                        @endif
                    </div>

                    <div class="bg-primary p-2 text-white d-flex justify-content-center"
                        style="font-weight: 600; font-size:12px; font-style: normal;">{{ $jobVacancy->job_title }}</div>
                    <p class="d-flex text-black d-flex justify-content-center px-2 pt-2"
                        style="font-weight: 500; color:black; font-size:14px; font-style: normal;">Menerima Lowongan
                    </p>
                    <div style="background-color: #ECF2FF;" class="p-2 mx-4 d-flex justify-content-center mt-3">
                        <p class="fs-5 mb-0" style="color: #5D87FF; font-weight:500">{{ $jobVacancy->position }}</p>
                    </div>
                    <p class="d-flex text-black d-flex justify-content-center p-2"
                        style="font-weight: 500; color:black; font-size:14px; font-style: normal;">Dengan Gaji
                    </p>
                    <p style="color: #5D87FF; font-weight:600" class="d-flex justify-content-center"> Rp.
                        {{ number_format($jobVacancy->basic_salary, 0, ',', '.') }}
                        /bln
                    </p>
                    <p class="d-flex text-black d-flex justify-content-center p-2 mb-0"
                        style="font-weight: bold; color:black; font-size:14px; font-style: normal;">Deskripsi Lowongan
                    </p>
                    <p class="d-flex text-black d-flex justify-content-center p-3 text-center mb-3"
                        style="font-weight: 500; color:black; font-size:12px; font-style: normal;">
                        {{ $jobVacancy->description_working_system }}</p>
                    <!-- Plan Button -->
                    <div class="plan-button position-relative">
                        <a href="{{ route('alumni.detail.lowongan.tersedia', ['job_vacancy' => $jobVacancy->id]) }}"
                            class="p-2 rounded text-white"
                            style="position: absolute; bottom: -1.9rem; left: 50%; transform: translateX(-50%); font-weight:450; background-color:#FFAE1F;">Selengkapnya</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="d-flex justify-content-center">
                <div>
                    <img src="{{ asset('showNoData.png') }}" alt="">
                    <h5 class="text-center">Lowongan Pekerjaan Kosong!!</h5>
                </div>
            </div>
        @endforelse
    </div>
@endsection
