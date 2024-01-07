@extends('layouts.app')
@section('content')
    <h5>
        Lowongan Pekerjaan
    </h5>
    <div class="row">
        @forelse ($jobVacancys as $jobVacancy)    
        <div class="col-12 col-md-6 col-lg-3 res-margin my-4">
            <!-- Single Price Plan -->
            <div class="single-price-plan card text-center py-3 wow fadeInLeft" data-aos-duration="2s" data-wow-delay="0.4s">
                <div class="card-top p-4 d-flex justify-content-center align-items-center">
                    <div class="rounded-circle bg-secondary" style="width: 5.2rem; height:5.2rem;"></div>
                </div>
                <div class="bg-primary p-2 text-white d-flex justify-content-center"
                    style="font-weight: 600; font-size:12px; font-style: normal;">{{ $jobVacancy->job_title }}</div>
                <p class="d-flex text-black d-flex justify-content-center px-2 pt-2"
                    style="font-weight: 500; color:black; font-size:14px; font-style: normal;">Menerima Lowongan
                </p>
                <div style="background-color: #ECF2FF;" class="p-2 mx-4 d-flex justify-content-center mt-3">
                    <p class="fs-5 mb-0" style="color: #5D87FF; font-weight:500">Admin Kecamatan</p>
                </div>
                <p class="d-flex text-black d-flex justify-content-center p-2"
                    style="font-weight: 500; color:black; font-size:14px; font-style: normal;">Dengan Gaji
                </p>
                <p style="color: #5D87FF; font-weight:600" class="d-flex justify-content-center">100.000.000/bln
                </p>
                <p class="d-flex text-black d-flex justify-content-center p-2 mb-0"
                    style="font-weight: bold; color:black; font-size:14px; font-style: normal;">Deskripsi Lowongan
                </p>
                <p class="d-flex text-black d-flex justify-content-center p-3 text-center mb-3"
                    style="font-weight: 500; color:black; font-size:12px; font-style: normal;">{{ $jobVacancy->description_working_system }}</p>
                <!-- Plan Button -->
                <div class="plan-button position-relative">
                    <a href="{{ route('alumni.detail.lowongan.tersedia',['job_vacancy' => $jobVacancy->id]) }}" class="p-2 rounded text-white"
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
