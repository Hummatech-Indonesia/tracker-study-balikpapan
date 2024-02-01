@extends('layouts.app')
@section('content')
<h4 class="mb-3">
    Data Alumni
</h4>
<div class="row mt-3">
    @forelse ($jobVacancys as $jobVacancy)
        <div class="col-12 col-lg-4 col-xxl-3">
            <div class="card border-primary border-bottom border-3 border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-center mt-2 mb-4">
                        <img src="{{ asset($jobVacancy->company->user->photo == null ? 'default.jpg' : 'storage/' . $jobVacancy->company->user->photo) }}"
                            style="border: solid 4px #5D87FF;object-fit:cover" height="100px" width="100px"
                            class="user-circle" alt="user">
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
