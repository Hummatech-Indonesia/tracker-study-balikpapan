@extends('layouts.app')

@section('style')
    <style>
        .photo-stack {
            position: relative;
            margin: auto;
            width: 200px;
            height: 250px;
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
            z-index: 2;

            border: 1px solid white;
            box-shadow: 0 1px 3px -2px rgba(0, 0, 0, .5);
            transition: all 0.3s ease-out;
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
    <h4>
        Dashboard
    </h4>
    <div class="row">
        <div class="col-md-12 col-lg-8 col-sm-12">
            <div class="row">
                <div class="col-md-12 col-lg-6 col-sm-12">
                    <div class="card radius-10 border-start border-0 border-4 border-primary">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-dark" style="font-weight: 600">Jumlah Pengalaman Project
                                        Kamu</p>
                                    <h4 class="my-1 text-primary mb-4">{{ $countPortofolio }}</h4>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-light-primary text-white ms-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 44 44" fill="none">
                                        <path
                                            d="M25.6429 21.3123C25.7106 21.3123 25.7768 21.2924 25.8333 21.2549C25.8897 21.2175 25.9338 21.1642 25.9601 21.1018C25.9863 21.0394 25.9935 20.9706 25.9808 20.9041C25.9681 20.8375 25.9361 20.7763 25.8887 20.7279L19.1512 13.877C19.1033 13.8283 19.042 13.7951 18.9752 13.7814C18.9083 13.7677 18.8389 13.7742 18.7758 13.8001C18.7127 13.826 18.6587 13.8701 18.6207 13.9268C18.5827 13.9835 18.5624 14.0502 18.5625 14.1184V20.281C18.5625 20.5545 18.6711 20.8168 18.8645 21.0102C19.0579 21.2036 19.3202 21.3123 19.5938 21.3123H25.6429Z"
                                            fill="#5D87FF" />
                                        <path
                                            d="M16.9297 22.9453C16.5767 22.5971 16.2962 22.1823 16.1045 21.7251C15.9127 21.2678 15.8135 20.7771 15.8125 20.2812V12.375H9.625C8.16763 12.3793 6.77119 12.9602 5.74067 13.9907C4.71015 15.0212 4.12931 16.4176 4.125 17.875V37.125C4.125 38.5837 4.70446 39.9826 5.73591 41.0141C6.76736 42.0455 8.16631 42.625 9.625 42.625H22C23.4587 42.625 24.8576 42.0455 25.8891 41.0141C26.9205 39.9826 27.5 38.5837 27.5 37.125V24.0625H19.5938C19.0979 24.0618 18.6071 23.9627 18.1497 23.7709C17.6924 23.5791 17.2778 23.2985 16.9297 22.9453V22.9453Z"
                                            fill="#5D87FF" />
                                        <path
                                            d="M31.9688 10.3123H38.0179C38.0856 10.3123 38.1518 10.2924 38.2083 10.2549C38.2647 10.2175 38.3088 10.1642 38.3351 10.1018C38.3613 10.0394 38.3685 9.97059 38.3558 9.90407C38.3431 9.83755 38.3111 9.77626 38.2637 9.7279L31.5262 2.87696C31.4783 2.82835 31.417 2.79508 31.3502 2.7814C31.2833 2.76771 31.2139 2.77424 31.1508 2.80013C31.0877 2.82603 31.0337 2.87013 30.9957 2.92682C30.9577 2.9835 30.9374 3.05021 30.9375 3.11845V9.28103C30.9375 9.55453 31.0461 9.81683 31.2395 10.0102C31.4329 10.2036 31.6952 10.3123 31.9688 10.3123Z"
                                            fill="#5D87FF" />
                                        <path
                                            d="M31.9688 13.0625C30.9683 13.0549 30.0109 12.654 29.3034 11.9466C28.596 11.2391 28.1951 10.2817 28.1875 9.28125V1.375H18.9062C17.5392 1.37659 16.2286 1.92035 15.262 2.88699C14.2953 3.85363 13.7516 5.16422 13.75 6.53125V9.625H17.3697C17.8317 9.62685 18.2888 9.71997 18.7147 9.89901C19.1406 10.078 19.527 10.3395 19.8516 10.6683L29.2325 20.2073C29.887 20.8714 30.2524 21.7672 30.2491 22.6995V34.375H34.8081C37.602 34.375 39.8741 32.0616 39.8741 29.2188V13.0625H31.9688Z"
                                            fill="#5D87FF" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-sm-12">
                    <div class="card radius-10 border-start border-0 border-4 border-warning">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-dark" style="font-weight: 600">Jumlah Semua Siswa</p>
                                    <h4 class="my-1 text-warning mb-4">{{ $countStudent }}</h4>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-light-warning text-white ms-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 44 44" fill="none">
                                        <path
                                            d="M13.0625 22C16.4798 22 19.25 19.2298 19.25 15.8125C19.25 12.3952 16.4798 9.625 13.0625 9.625C9.64524 9.625 6.875 12.3952 6.875 15.8125C6.875 19.2298 9.64524 22 13.0625 22Z"
                                            fill="#FFAE1F" />
                                        <path
                                            d="M20.1094 25.4375C17.6894 24.2086 15.0184 23.7188 13.0625 23.7188C9.23141 23.7188 1.375 26.0683 1.375 30.7656V34.375H14.2656V32.994C14.2656 31.3612 14.9531 29.7241 16.1562 28.3594C17.1162 27.2697 18.4602 26.2582 20.1094 25.4375Z"
                                            fill="#FFAE1F" />
                                        <path
                                            d="M29.2188 24.75C24.744 24.75 15.8125 27.5138 15.8125 33V37.125H42.625V33C42.625 27.5138 33.6935 24.75 29.2188 24.75Z"
                                            fill="#FFAE1F" />
                                        <path
                                            d="M29.2188 22C33.3954 22 36.7812 18.6142 36.7812 14.4375C36.7812 10.2608 33.3954 6.875 29.2188 6.875C25.0421 6.875 21.6562 10.2608 21.6562 14.4375C21.6562 18.6142 25.0421 22 29.2188 22Z"
                                            fill="#FFAE1F" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <h4>
                        Portofolio
                    </h4>
                    @forelse ($portofolios as $portofolio)
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <div class="photo-stack mt-4 d-flex jus">
                                        @foreach ($portofolio->photoPortofolios as $photoPortofolio)
                                            <img src="{{ asset('storage/' . $photoPortofolio->photo) }}" width="200px"
                                                height="200px" style="object-fit: cover" />
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="text-primary text-end ">
                                            {{ $portofolio->year }}
                                        </h5>
                                        <h5 class="card-title">{{ $portofolio->name }}</h5>
                                        <p class="card-text">
                                            {{ Illuminate\Support\Str::limit($portofolio->description, $limit = 325, $end = '...') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-4 px-5">
                                    <a class="btn btn-primary justify-content-center d-flex" href="{{ route('detail.portofolio', ['portofolio' => $portofolio->id]) }}">
                                        Lihat Project
                                    </a>
                                </div>
                            </div>
                        </div>

                    @empty
                        <div class="d-flex justify-content-center">
                            <div>
                                <img src="{{ asset('showNoData.png') }}" alt="">
                                <h5 class="text-center">Portofolio Anda Masih Kosong!!</h5>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 col-sm-12">
            <div class="card w-100">
                <div class="card-body">
                    <p class="card-subtitle mb-7"></p>
                    <div class="position-relative">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset(Auth::user()->photo ? 'storage/' . Auth::user()->photo : 'default.jpg') }}"
                                class="rounded-circle user-profile mb-2" style="object-fit: cover;border:4px solid #5D87FF;"
                                id="detail-photo" width="100" alt="photo-siswa" height="100" />
                        </div>
                        <div class="text-center">
                            <h5 class="username">{{ Auth::user()->name }}</h5>
                        </div>
                        <div class="text-center">
                            <div class="mb-2 fs-6 fw-light">
                                {{ auth()->user()->email }}
                            </div>
                            <div class="mb-2 fs-6">
                                {{ auth()->user()->student->national_student_id }}
                            </div>
                            <div class="mb-2 fs-6">
                                {{ auth()->user()->phone_number }}
                            </div>
                            <div class="mb-2 fw-medium" style="font-size: 14px;">
                                {{ auth()->user()->address }}
                            </div>
                        </div>
                        <a href="{{ route('profile') }}" class="btn btn-primary d-flex justify-content-center">
                            Lihat Profil
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
