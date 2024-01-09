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
        <div class="col-12 col-lg-6 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <div class="reviewer-thumb mt-3">
                            <div class="border-custom"
                                style="width: 150px; height: 150px; border-radius: 50%; overflow: hidden;">
                                <div class="rounded-circle bg-secondary"
                                    style="object-fit: cover; width: 100%; height: 100%;">
                                    <img src="{{ asset('default.jpg') }}" class="rounded-circle"
                                        style="object-fit: cover; width: 100%; height: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="text-dark text-center mt-3" style="font-weight: 600">
                        {{ $jobVacancy->company->user->name }}
                    </h5>
                    <div class="d-flex justify-content-center mb-5">
                        <button type="button" class="btn btn-primary">
                            Edit Profile
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
                            <p class="fs-6 mb-2" style="font-weight: 600">
                                Lowongan Pada Bagian
                            </p>
                            <h5 class="text-primary" style="font-weight:500">
                                {{ $jobVacancy->position }}
                            </h5>
                            <p class="fs-6 mb-2 mt-3" style="font-weight: 600">
                                Sistem Kerja
                            </p>
                            <p class="text-primary">
                                {{ $jobVacancy->work_system }}
                            </p>
                            <p class="fs-6 mb-2 mt-3" style="font-weight: 600">
                                Deskripsi Sistem Kerja
                            </p>
                            <p>
                                {{ $jobVacancy->description_working_system }}
                            </p>
                            <p class="fs-6 mb-2 mt-3" style="font-weight: 600">
                                Kualifikasi / Syarat Syarat
                            </p>
                            <p>
                                {{ $jobVacancy->qualifications }}
                            </p>
                        </div>
                        <div class="col">
                            <p class="fs-6 mb-2" style="font-weight: 600">
                                Gaji Pokok
                            </p>
                            <div class="bg-light-primary col-8 col-xl-5 py-1 rounded mb-5">
                                <h5 class="text-primary mb-0 text-center" style="font-weight:500">
                                    Rp. {{ number_format($jobVacancy->basic_salary, 0, ',', '.') }}
                                </h5>
                            </div>
                            <p class="fs-6 mb-2" style="font-weight: 600">
                                Data Pelamar
                            </p>
                            <div class="d-flex gap-2 mb-0">
                                <div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Menunggu" class="bg-light-primary mb-0 col-12 py-2 rounded mb-2">
                                        <h5 class="text-primary mb-0 text-center" style="font-weight:500">
                                            {{ $countPending }}
                                        </h5>
                                    </div>
                                    <p class="text-center">
                                        Menunggu
                                    </p>
                                </div>
                                
                                <div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Diterima" class="bg-light-success mb-0 col-12 py-2 rounded mb-2">
                                        <h5 class="text-success mb-0 text-center" style="font-weight:500">
                                            {{ $countAccepted }}
                                        </h5>
                                    </div>
                                    <p class="text-center">
                                        Diterima
                                    </p>
                                </div>
                                
                                <div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Ditolak" class="bg-light-danger mb-0 col-12 py-2 rounded mb-2">
                                        <h5 class="text-danger mb-0 text-center" style="font-weight:500">
                                            {{ $countRejected }}
                                        </h5>
                                    </div>
                                    <p class="text-center">
                                        Ditolak
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5>
                Daftar Pelamar
            </h5>
            <div class="position-relative mb-3 col-lg-3">
                <input type="text" class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
                <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-white" style="background-color: #5D87FF">
                                No
                            </th>
                            <th class="text-white" style="background-color: #5D87FF">
                                Nama
                            </th>
                            <th class="text-white" style="background-color: #5D87FF">
                                Email
                            </th>
                            <th class="text-white" style="background-color: #5D87FF">
                                Jenis Kelamin
                            </th>
                            <th class="text-white" style="background-color: #5D87FF">
                                Status
                            </th>
                            <th class="text-white" style="background-color: #5D87FF">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($applyJobVacancies as $applyJobVacancy)
                            <tr>
                                <td>
                                    <p class="mt-2" style="font-weight:500">
                                        {{ $loop->iteration }}
                                    </p>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-header gap-2">
                                        <div class="">
                                            <img src="{{ asset('assets-admin/images/avatars/avatar-2.png') }}"
                                                class="user-img" alt="user avatar">
                                        </div>
                                        <p class="mt-2" style="font-weight:500">
                                            {{ $applyJobVacancy->user->name }}
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <p class="mt-2" style="font-weight:500">
                                        {{ $applyJobVacancy->user->email }}
                                    </p>
                                </td>
                                <td>
                                    <p class="mt-2" style="font-weight:500">
                                        {{ $applyJobVacancy->user->student->gender == 'male' ? 'Laki-Laki' : 'Perempuan' }}
                                    </p>
                                </td>
                                <td>
                                    <p class="mt-2" style="font-weight:500">
                                        @if ($applyJobVacancy->status == 'accepted')
                                            <div class="bg-light-primary col-5">
                                                <p class="text-primary py-1 mb-0 text-center">
                                                    Diterima Interview
                                                </p>
                                            </div>
                                        @elseif($applyJobVacancy->status == 'rejected')
                                            <div class="bg-light-danger col-5">
                                                <p class="text-danger py-1 mb-0 text-center">
                                                    Ditolak Interview
                                                </p>
                                            </div>
                                        @else
                                            <div class="bg-light-warning col-5">
                                                <p class="text-warning py-1 mb-0 text-center">
                                                    Menunggu
                                                </p>
                                            </div>
                                        @endif
                                    </p>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-header gap-2">
                                        @if ($applyJobVacancy->status == pending)
                                            <div class="">
                                                <button class="btn btn-sm btn-success">Terima</button>
                                            </div>
                                            <div class="">
                                                <button class="btn btn-sm btn-danger">Tolak</button>
                                            </div>
                                            <div class="">
                                                <button class="btn text-white btn-sm btn-info">Detail</button>
                                            </div>
                                        @else
                                            <div class="">
                                                <button class="btn text-white btn-sm btn-info">Detail</button>
                                            </div>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="7">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img src="{{ asset('showNoData.png') }}" alt="">
                                        <h5 class="text-center">Tidak Ada Pelamar!!</h5>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
