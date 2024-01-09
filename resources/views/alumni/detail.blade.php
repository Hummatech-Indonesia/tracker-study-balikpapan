@extends('layouts.app')
@section('content')
@if ($errors->any())
@foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible mt-3 fade show" role="alert">
        {{ $error }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endforeach
@endif
<div class="d-flex justify-content-between">
    <div class="">
        <h5 class="text-dark" style="font-weight: 500">
            Lowongan Pekerjaan
        </h5>
    </div>
    <div class="">
        <button class="text-white btn btn-warning" onclick="history.back()">
            Kembali
        </button>
    </div>
</div>
<div class="row mt-3">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <div class="reviewer-thumb mt-3">
                        <div class="border-custom"
                            style="width: 150px; height: 150px; border-radius: 50%; overflow: hidden;">

                                @if ($jobVacancy->company->user->photo)
                                <img src="{{ asset('storage/'.$jobVacancy->company->user->photo) }}"
                                    class="rounded-circle" style="object-fit: cover; width: 100%; height: 100%;">
                            @else
                                <div class="rounded-circle bg-secondary" style="object-fit: cover; width: 100%; height: 100%;">
                                    <img src="{{ asset('default.jpg') }}"
                                    class="rounded-circle" style="object-fit: cover; width: 100%; height: 100%;">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <h5 class="text-dark text-center mt-3" style="font-weight: 600">
                    {{ $jobVacancy->company->user->name }}
                </h5>
                <p class="text-center">
                    {{ $jobVacancy->company->website ? $jobVacancy->company->website : '-'}}
                </p>
                <div class="d-flex justify-content-center mb-5">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Kirim CV
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row mb-5 mt-3">
                    <div class="col">
                        <p class="fs-5 mb-2" style="font-weight: 600">
                            Lowongan Pada Bagian
                        </p>
                        <h5 class="text-primary" style="font-weight:600">
                            {{ $jobVacancy->position }}
                        </h5>
                        <p class="fs-5 mb-2 mt-4" style="font-weight: 600">
                            Sistem Kerja
                        </p>
                        <p class="text-primary fs-5" style="font-weight:600">
                            @if ($jobVacancy->work_system == 'contract')
                            Kontrak
                            @elseif ($jobVacancy->work_system == 'permanentwork')
                            Kerja Tetap
                            @elseif ($jobVacancy->work_system == 'workingparttime')
                            Kerja Paruh Waktu
                            @else
                            Freelance
                            @endif
                        </p>
                        <p class="fs-5 mb-2 mt-4" style="font-weight: 600">
                            Gaji Pokok
                        </p>
                        <div class="bg-light-primary col-7 py-1 rounded">
                            <h5 class="text-primary mb-0 text-center" style="font-weight:500">
                                Rp. {{ number_format($jobVacancy->basic_salary, 0, ',', '.') }}
                            </h5>
                        </div>
                    </div>
                    <div class="col">
                        <p class="fs-5 mb-2" style="font-weight: 600">
                            Deskripsi Sistem Kerja
                        </p>
                        <p class="fs-6">
                            {{ $jobVacancy->description_working_system }}
                        </p>
                        <p class="fs-5 mb-2 mt-5" style="font-weight: 600">
                            Kualifikasi / Syarat Syarat
                        </p>
                       <p class="fs-6">{{ $jobVacancy->qualifications }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <form action="{{ route('alumni.send.cv',['jobVacancy' => $jobVacancy->id]) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('POST')
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Upload CV</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="file" name="cv" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary text-white">Tambah</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
