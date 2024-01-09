@extends('layouts.app')
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
                            Tanggal Melamar
                        </td>
                        <td align="center">
                            Status
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @forelse ($applyJobVacancies as $applyJobVacancy)
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            <div class="d-flex justify-content-header">
                                <div class="">
                                    <img src="{{ asset($applyJobVacancy->jobVacancy->company->user->photo ? 'storage/'.$applyJobVacancy->jobVacancy->company->user->photo : 'default.jpg') }}"
                                    class="user-img"
                                    alt="user avatar">
                                </div>
                                <div class="">
                                    <p class="text-dark mt-2 px-2">
                                        {{ $applyJobVacancy->jobVacancy->company->user->name }}
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td>
                            {{ \Carbon\Carbon::parse( $applyJobVacancy->created_at )->locale('id_ID')->isoFormat('DD MMMM Y') }}
                        </td>
                        <td align="center">
                            @if ($applyJobVacancy->status == "accepted")
                            <div class="bg-light-primary col-5">
                                <p class="text-primary py-1 mb-0 text-center">
                                    Diterima Interview
                                </p>
                            </div>
                            @elseif($applyJobVacancy->status == "rejected")
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
                           
                        </td>
                        @empty
                            
                        @endforelse
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection