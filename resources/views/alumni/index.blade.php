@extends('layouts.app')
@section('style')
    <style>
        .photo-stack {
            position: relative;
            margin: auto;
            width: 300px;
            height: 200px;
        }

        .photo-stack>p {
            position: absolute;
            width: 100%;
            bottom: 0;
            left: 0;
            text-align: center;
            font-weight: bold;
            z-index: 1000;
        }

        .photo-stack img {
            position: absolute;
            top: 0;
            left: 0;
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
<h5>
    Dashboard
</h5>
<div class="row">
    <div class="col-3">
        <div class="card radius-10 border-start border-primary">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">Jumlah Lulusan</p>
                        <h4 class="my-1 text-primary">6548</h4>
                    </div>
                    <div class="widgets-icons bg-light-primary text-warning ms-auto"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 44 44" fill="none">
                        <path d="M13.0625 22C16.4798 22 19.25 19.2298 19.25 15.8125C19.25 12.3952 16.4798 9.625 13.0625 9.625C9.64524 9.625 6.875 12.3952 6.875 15.8125C6.875 19.2298 9.64524 22 13.0625 22Z" fill="#5D87FF"/>
                        <path d="M20.1094 25.4375C17.6894 24.2086 15.0184 23.7188 13.0625 23.7188C9.23141 23.7188 1.375 26.0683 1.375 30.7656V34.375H14.2656V32.994C14.2656 31.3612 14.9531 29.7241 16.1562 28.3594C17.1162 27.2697 18.4602 26.2582 20.1094 25.4375Z" fill="#5D87FF"/>
                        <path d="M29.2188 24.75C24.744 24.75 15.8125 27.5138 15.8125 33V37.125H42.625V33C42.625 27.5138 33.6935 24.75 29.2188 24.75Z" fill="#5D87FF"/>
                        <path d="M29.2188 22C33.3954 22 36.7812 18.6142 36.7812 14.4375C36.7812 10.2608 33.3954 6.875 29.2188 6.875C25.0421 6.875 21.6562 10.2608 21.6562 14.4375C21.6562 18.6142 25.0421 22 29.2188 22Z" fill="#5D87FF"/>
                      </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card radius-10 border-start border-warning">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">Jumlah Portofolio</p>
                        <h4 class="my-1 text-warning">6548</h4>
                    </div>
                    <div class="widgets-icons bg-light-warning text-success ms-auto"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 44 44" fill="none">
                        <path d="M16.5 22C18.688 22 20.7865 21.1308 22.3336 19.5836C23.8808 18.0365 24.75 15.938 24.75 13.75C24.75 11.562 23.8808 9.46354 22.3336 7.91637C20.7865 6.36919 18.688 5.5 16.5 5.5C14.312 5.5 12.2135 6.36919 10.6664 7.91637C9.11919 9.46354 8.25 11.562 8.25 13.75C8.25 15.938 9.11919 18.0365 10.6664 19.5836C12.2135 21.1308 14.312 22 16.5 22ZM2.75 38.5C2.75 38.5 0 38.5 0 35.75C0 33 2.75 24.75 16.5 24.75C30.25 24.75 33 33 33 35.75C33 38.5 30.25 38.5 30.25 38.5H2.75ZM30.25 9.625C30.25 9.26033 30.3949 8.91059 30.6527 8.65273C30.9106 8.39487 31.2603 8.25 31.625 8.25H42.625C42.9897 8.25 43.3394 8.39487 43.5973 8.65273C43.8551 8.91059 44 9.26033 44 9.625C44 9.98967 43.8551 10.3394 43.5973 10.5973C43.3394 10.8551 42.9897 11 42.625 11H31.625C31.2603 11 30.9106 10.8551 30.6527 10.5973C30.3949 10.3394 30.25 9.98967 30.25 9.625ZM31.625 16.5C31.2603 16.5 30.9106 16.6449 30.6527 16.9027C30.3949 17.1606 30.25 17.5103 30.25 17.875C30.25 18.2397 30.3949 18.5894 30.6527 18.8473C30.9106 19.1051 31.2603 19.25 31.625 19.25H42.625C42.9897 19.25 43.3394 19.1051 43.5973 18.8473C43.8551 18.5894 44 18.2397 44 17.875C44 17.5103 43.8551 17.1606 43.5973 16.9027C43.3394 16.6449 42.9897 16.5 42.625 16.5H31.625ZM37.125 24.75C36.7603 24.75 36.4106 24.8949 36.1527 25.1527C35.8949 25.4106 35.75 25.7603 35.75 26.125C35.75 26.4897 35.8949 26.8394 36.1527 27.0973C36.4106 27.3551 36.7603 27.5 37.125 27.5H42.625C42.9897 27.5 43.3394 27.3551 43.5973 27.0973C43.8551 26.8394 44 26.4897 44 26.125C44 25.7603 43.8551 25.4106 43.5973 25.1527C43.3394 24.8949 42.9897 24.75 42.625 24.75H37.125ZM37.125 33C36.7603 33 36.4106 33.1449 36.1527 33.4027C35.8949 33.6606 35.75 34.0103 35.75 34.375C35.75 34.7397 35.8949 35.0894 36.1527 35.3473C36.4106 35.6051 36.7603 35.75 37.125 35.75H42.625C42.9897 35.75 43.3394 35.6051 43.5973 35.3473C43.8551 35.0894 44 34.7397 44 34.375C44 34.0103 43.8551 33.6606 43.5973 33.4027C43.3394 33.1449 42.9897 33 42.625 33H37.125Z" fill="#FFAE1F"/>
                      </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card radius-10 border-start border-success">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">Jumlah Lowongan</p>
                        <h4 class="my-1 text-primary">6548</h4>
                    </div>
                    <div class="widgets-icons bg-light-primary text-primary ms-auto"><svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                        <path d="M22 4.125C12.1284 4.125 4.125 12.1284 4.125 22C4.125 31.8716 12.1284 39.875 22 39.875C31.8716 39.875 39.875 31.8716 39.875 22C39.875 12.1284 31.8716 4.125 22 4.125ZM30.25 24.75H22C21.6353 24.75 21.2856 24.6051 21.0277 24.3473C20.7699 24.0894 20.625 23.7397 20.625 23.375V11C20.625 10.6353 20.7699 10.2856 21.0277 10.0277C21.2856 9.76987 21.6353 9.625 22 9.625C22.3647 9.625 22.7144 9.76987 22.9723 10.0277C23.2301 10.2856 23.375 10.6353 23.375 11V22H30.25C30.6147 22 30.9644 22.1449 31.2223 22.4027C31.4801 22.6606 31.625 23.0103 31.625 23.375C31.625 23.7397 31.4801 24.0894 31.2223 24.3473C30.9644 24.6051 30.6147 24.75 30.25 24.75Z" fill="#5D87FF"/>
                      </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card radius-10 border-start border-danger">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">Lowongan Yang Kamu Lamar</p>
                        <h4 class="my-1 text-danger">6548</h4>
                    </div>
                    <div class="widgets-icons bg-light-danger text-danger ms-auto"><svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                        <path d="M22.0001 2.75C20.5414 2.75 19.1424 3.32946 18.111 4.36091C17.0795 5.39236 16.5001 6.79131 16.5001 8.25V13.75H13.7501V8.25C13.7501 6.06196 14.6192 3.96354 16.1664 2.41637C17.7136 0.869194 19.812 0 22.0001 0C24.1881 0 26.2865 0.869194 27.8337 2.41637C29.3809 3.96354 30.2501 6.06196 30.2501 8.25V13.75H27.5001V8.25C27.5001 6.79131 26.9206 5.39236 25.8891 4.36091C24.8577 3.32946 23.4587 2.75 22.0001 2.75ZM13.7501 13.75H9.24005C8.25246 13.7502 7.29772 14.1048 6.54934 14.7492C5.80096 15.3936 5.30863 16.2851 5.1618 17.2617L2.33755 36.1075C2.19122 37.0854 2.25753 38.0833 2.53195 39.0332C2.80638 39.9831 3.28246 40.8626 3.92773 41.6117C4.573 42.3609 5.37226 42.9621 6.271 43.3742C7.16975 43.7864 8.14681 43.9998 9.13555 44H34.8618C35.8508 44.0002 36.8282 43.787 37.7272 43.3751C38.6263 42.9631 39.4259 42.362 40.0715 41.6128C40.717 40.8636 41.1934 39.9839 41.468 39.0338C41.7425 38.0837 41.8089 37.0856 41.6626 36.1075L38.8356 17.2617C38.6888 16.2856 38.1969 15.3944 37.4491 14.7501C36.7013 14.1057 35.7472 13.7509 34.7601 13.75H30.2501V17.875C30.2501 18.2397 30.1052 18.5894 29.8473 18.8473C29.5895 19.1051 29.2397 19.25 28.8751 19.25C28.5104 19.25 28.1606 19.1051 27.9028 18.8473C27.6449 18.5894 27.5001 18.2397 27.5001 17.875V13.75H16.5001V17.875C16.5001 18.2397 16.3552 18.5894 16.0973 18.8473C15.8395 19.1051 15.4897 19.25 15.1251 19.25C14.7604 19.25 14.4106 19.1051 14.1528 18.8473C13.8949 18.5894 13.7501 18.2397 13.7501 17.875V13.75Z" fill="#FA896B"/>
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
    <div class="col-md-12 col-lg-6 col-sm-12">
        @forelse ($portofolios as $portofolio)
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
                        <img src="{{ asset('storage/'.$jobVacancy->company->user->photo) }}"
                            class="rounded-circle" style="object-fit: cover;width: 7rem; height:7rem;">
                    @else
                        <div class="rounded-circle bg-secondary" style="object-fit: cover;width: 7rem; height:7rem;">
                            <img src="{{ asset('default.jpg') }}"
                            class="rounded-circle" style="object-fit: cover;width: 7rem; height:7rem;">
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
