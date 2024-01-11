@extends('layouts.app')
@section('content')
    <h5 class="text-dark mb-3" style="font-weight: 500">
        Dashboard
    </h5>
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-dark" style="font-weight: 600">Lowongan Dibuat</p>
                            <h4 class="my-1 text-success mb-4">4805</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i
                                class='bx bxs-cart'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-warning">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-dark" style="font-weight: 600">Jumlah Pelamar</p>
                            <h4 class="my-1 text-warning mb-4">5</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-orange text-white ms-auto">
                            <i class='bx bxs-wallet'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-dark" style="font-weight: 600">Pelamar Yang Diterima</p>
                            <h4 class="my-1 text-success mb-4">3</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto">
                            <i class='bx bxs-bar-chart-alt-2'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-danger">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-dark" style="font-weight: 600">Pelamar Yang Ditolak</p>
                            <h4 class="my-1 text-danger mb-4">8</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-burning text-white ms-auto"><i
                                class='bx bxs-group'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h5 class="text-dark mb-3" style="font-weight: 500">
        Lowongan Dibuat
    </h5>
    <div class="row">
        @forelse ($jobVacancys as $jobVacancy)
            <div class="col-12 col-lg-4 col-xxl-3">
                <div class="card border-primary border-bottom border-3 border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mt-2 mb-4">
                            <img src="{{ asset($jobVacancy->company->user->photo == null ? 'default.jpg' : 'storage/' . $jobVacancy->company->user->photo) }}"
                                style="border: solid 4px #5D87FF" width="100px" class="user-circle" alt="user">
                        </div>
                    </div>
                    <div style="background-color: #5D87FF" class="mb-0">
                        <p class="text-white text-center mb-0 py-2 fs-5" style="font-weight: 500">
                            {{ $jobVacancy->company->user->name }}
                        </p>
                    </div>
                    <div class="card-body">
                        <p class="text-center">
                            Menerima Lowongan
                        </p>
                        <div class="d-flex justify-content-center">
                            <div class="bg-light-info col-8">
                                <p class="text-center text-info mb-0 py-1 rounded" style="font-weight:600">
                                    {{ $jobVacancy->job_title }}
                                </p>
                            </div>
                        </div>
                        <p class="text-center mt-2 px-4 mb-4">
                            Data Pelamar
                        </p>
                        <div class="row">
                            <div class="col-4">
                                <div class="bg-light-info">
                                    <p class="text-center py-2 rounded fs-5 mb-1" style="color: #5D87FF; font-weight:700">
                                        {{ $jobVacancy->applyJobVacancy->count() }}
                                    </p>
                                </div>
                                <p class="text-center" style="font-weight: 400">
                                    Jumlah
                                </p>
                            </div>
                            <div class="col-4">
                                <div class="bg-light-success">
                                    <p class="text-center py-2 rounded fs-5 mb-1" style="color: #1D9375; font-weight:700">
                                        {{ $jobVacancy->applyJobVacancy->where('status', 'accepted')->count() }}
                                    </p>
                                </div>
                                <p class="text-center" style="font-weight: 400">
                                    Diterima
                                </p>
                            </div>
                            <div class="col-4">
                                <div class="bg-light-danger">
                                    <p class="text-center py-2 rounded fs-5 mb-1" style="color: #FA896B; font-weight:700">
                                        {{ $jobVacancy->applyJobVacancy->where('status', 'rejected')->count() }}
                                    </p>
                                </div>
                                <p class="text-center" style="font-weight: 400">
                                    Ditolak
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <button class="btn btn-info btn-edit text-white text-center w-100"
                                data-id="{{ $jobVacancy->id }}" id="btn-edit-{{ $jobVacancy->id }}"
                                data-job_title="{{ $jobVacancy->job_title }}"
                                data-basic_salary="{{ $jobVacancy->basic_salary }}"
                                data-work_system="{{ $jobVacancy->work_system }}"
                                data-description_working_system="{{ $jobVacancy->description_working_system }}"
                                data-qualifications="{{ $jobVacancy->qualifications }}">
                                Edit
                            </button>
                            <a class="btn btn-warning text-white text-center w-100"
                                href="{{ route('detail.job-vacancy.company', ['job_vacancy' => $jobVacancy->id]) }}">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="d-flex justify-content-center">
                <div>
                    <img src="{{ asset('showNoData.png') }}" alt="">
                    <h4 class="text-center">Tidak Lowongan Yang Di Buat!!</h4>
                </div>
            </div>
        @endforelse

    </div>
@endsection
