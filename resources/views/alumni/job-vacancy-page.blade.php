@extends('layouts.app')
@section('title', 'lowongan-tersedia')

@section('content')
    <h5 class="text-dark" style="font-weight: 500">
        Lowongan Pekerjaan
    </h5>
    <div class="position-relative mb-3 col-lg-3 mt-3">
        <input type="text" class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
        <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>
                                No
                            </td>
                            <td>
                                Nama Perusahaan
                            </td>
                            <td>
                                Lowongan
                            </td>
                            <td>
                                Tanggal Melamar
                            </td>
                            <td align="center">
                                Status
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($applyJobVacancies as $applyJobVacancy)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    <div class="d-flex justify-content-header">
                                        <div class="">
                                            <img src="{{ asset($applyJobVacancy->jobVacancy->company->user->photo ? 'storage/' . $applyJobVacancy->jobVacancy->company->user->photo : 'default.jpg') }}"
                                                class="user-img" alt="user avatar">
                                        </div>
                                        <div class="">
                                            <p class="text-dark mt-2 px-2">
                                                {{ $applyJobVacancy->jobVacancy->company->user->name }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="">
                                        <p class="text-dark mt-2 px-2">
                                            {{ $applyJobVacancy->jobVacancy->job_title }}
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($applyJobVacancy->created_at)->locale('id_ID')->isoFormat('DD MMMM Y') }}
                                </td>
                                <td align="center">
                                    @if ($applyJobVacancy->status == 'accepted')
                                        <div class="bg-light-primary col-12">
                                            <p class="text-primary py-1 mb-0 text-center">
                                                Diterima Interview
                                            </p>
                                        </div>
                                    @elseif($applyJobVacancy->status == 'rejected')
                                        <div class="bg-light-danger col-12">
                                            <p class="text-danger py-1 mb-0 text-center">
                                                Ditolak Interview
                                            </p>
                                        </div>
                                    @else
                                        <div class="bg-light-warning col-12">
                                            <p class="text-warning py-1 mb-0 text-center">
                                                Menunggu
                                            </p>
                                        </div>
                                    @endif

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <img src="{{ asset('showNoData.png') }}" alt="">
                                            <h5 class="text-center">Anda belum melamar di perusahaan mana pun!!</h5>
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
