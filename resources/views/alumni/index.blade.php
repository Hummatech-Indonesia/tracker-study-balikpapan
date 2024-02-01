@extends('layouts.app')
@section('title', 'dashboard')

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
                            <p class="mb-0 text-secondary">Jumlah Portofolio</p>
                            <h4 class="my-1 text-warning">{{ $countPortofolio }}</h4>
                        </div>
                        <div class="widgets-icons bg-light-warning text-success ms-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 44 44" fill="none">
                                <path d="M25.6429 21.3133C25.7106 21.3133 25.7768 21.2934 25.8333 21.2559C25.8897 21.2185 25.9338 21.1652 25.9601 21.1028C25.9863 21.0404 25.9935 20.9716 25.9808 20.905C25.9681 20.8385 25.9361 20.7772 25.8887 20.7289L19.1512 13.8779C19.1033 13.8293 19.042 13.7961 18.9752 13.7824C18.9083 13.7687 18.8389 13.7752 18.7758 13.8011C18.7127 13.827 18.6587 13.8711 18.6207 13.9278C18.5827 13.9845 18.5624 14.0512 18.5625 14.1194V20.282C18.5625 20.5555 18.6711 20.8178 18.8645 21.0112C19.0579 21.2046 19.3202 21.3133 19.5938 21.3133H25.6429Z" fill="#FFAE1F"/>
                                <path d="M16.9297 22.9453C16.5767 22.5971 16.2962 22.1823 16.1045 21.7251C15.9127 21.2678 15.8135 20.7771 15.8125 20.2812V12.375H9.625C8.16763 12.3793 6.77119 12.9602 5.74067 13.9907C4.71015 15.0212 4.12931 16.4176 4.125 17.875V37.125C4.125 38.5837 4.70446 39.9826 5.73591 41.0141C6.76736 42.0455 8.16631 42.625 9.625 42.625H22C23.4587 42.625 24.8576 42.0455 25.8891 41.0141C26.9205 39.9826 27.5 38.5837 27.5 37.125V24.0625H19.5938C19.0979 24.0618 18.6071 23.9627 18.1497 23.7709C17.6924 23.5791 17.2778 23.2985 16.9297 22.9453Z" fill="#FFAE1F"/>
                                <path d="M31.9688 10.3133H38.0179C38.0856 10.3133 38.1518 10.2934 38.2083 10.2559C38.2647 10.2185 38.3088 10.1652 38.3351 10.1028C38.3613 10.0403 38.3685 9.97156 38.3558 9.90504C38.3431 9.83853 38.3111 9.77724 38.2637 9.72888L31.5262 2.87794C31.4783 2.82932 31.417 2.79605 31.3502 2.78237C31.2833 2.76869 31.2139 2.77521 31.1508 2.80111C31.0877 2.82701 31.0337 2.87111 30.9957 2.92779C30.9577 2.98448 30.9374 3.05119 30.9375 3.11943V9.282C30.9375 9.55551 31.0461 9.81781 31.2395 10.0112C31.4329 10.2046 31.6952 10.3133 31.9688 10.3133Z" fill="#FFAE1F"/>
                                <path d="M31.9688 13.0625C30.9683 13.0549 30.0109 12.654 29.3034 11.9466C28.596 11.2391 28.1951 10.2817 28.1875 9.28125V1.375H18.9062C17.5392 1.37659 16.2286 1.92035 15.262 2.88699C14.2953 3.85363 13.7516 5.16422 13.75 6.53125V9.625H17.3697C17.8317 9.62685 18.2888 9.71997 18.7147 9.899C19.1406 10.078 19.527 10.3395 19.8516 10.6683L29.2325 20.2073C29.887 20.8714 30.2524 21.7672 30.2491 22.6995V34.375H34.8081C37.602 34.375 39.8741 32.0616 39.8741 29.2188V13.0625H31.9688Z" fill="#FFAE1F"/>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 44 44" fill="none">
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
                        <div class="widgets-icons bg-light-danger text-danger ms-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="#FA896B" d="m17 21l-2.75-3l1.16-1.16L17 18.43l3.59-3.59l1.16 1.41M12.8 21H5c-1.11 0-2-.89-2-2V5c0-1.11.89-2 2-2h14c1.11 0 2 .89 2 2v7.8c-.61-.35-1.28-.6-2-.72V5H5v14h7.08c.12.72.37 1.39.72 2m-.8-4H7v-2h5m2.68-2H7v-2h10v1.08c-.85.14-1.63.46-2.32.92M17 9H7V7h10"/></svg>
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
