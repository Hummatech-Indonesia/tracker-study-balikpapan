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
    @if (session('success'))
    <div class="alert alert-success alert-dismissible mt-3 fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
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
                            <div class=""
                                style="width: 150px; height: 150px; border-radius: 50%; overflow: hidden;border:3px solid #5D87FF">
                                @if ($jobVacancy->company->user->photo)
                                    <img src="{{ asset('storage/' . $jobVacancy->company->user->photo) }}"
                                        class="rounded-circle" style="object-fit: cover; width: 100%; height: 100%;">
                                @else
                                    <div class="rounded-circle bg-secondary"
                                        style="object-fit: cover; width: 100%; height: 100%;">
                                        <img src="{{ asset('default.jpg') }}" class="rounded-circle"
                                            style="object-fit: cover; width: 100%; height: 100%;">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <h5 class="text-dark text-center mt-3" style="font-weight: 600">
                        {{ $jobVacancy->company->user->name }}
                    </h5>
                    <div class="d-flex justify-content-center mb-5">
                        <a href="{{ route('profile-company') }}">
                            <button type="button" class="btn btn-primary">
                                Edit Profile
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row p-2">
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
                            <p>
                                @if ($jobVacancy->work_system == 'contract')
                                    - Kontrak
                                @elseif ($jobVacancy->work_system == 'permanentwork')
                                    - Kerja Tetap
                                @elseif ($jobVacancy->work_system == 'workingparttime')
                                    - Kerja Paruh Waktu
                                @else
                                    - Freelance
                                @endif
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
                            <div class="bg-light-primary col-8 col-xl-5 p-1 rounded mb-5" style="width:60%">
                                <h5 class="text-primary mb-0 text-center" style="font-weight:500">
                                    Rp. {{ number_format($jobVacancy->basic_salary, 0, ',', '.') }}
                                </h5>
                            </div>
                            <p class="fs-6 mb-2" style="font-weight: 600">
                                Data Pelamar
                            </p>
                            <div class="d-flex gap-2 mb-0">
                                <div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Menunggu"
                                        class="bg-light-primary mb-0 col-12 py-2 rounded mb-2">
                                        <h5 class="text-primary mb-0 text-center" style="font-weight:500">
                                            {{ $countPending }}
                                        </h5>
                                    </div>
                                    <p class="text-center">
                                        Menunggu
                                    </p>
                                </div>

                                <div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Diterima"
                                        class="bg-light-success mb-0 col-12 py-2 rounded mb-2">
                                        <h5 class="text-success mb-0 text-center" style="font-weight:500">
                                            {{ $countAccepted }}
                                        </h5>
                                    </div>
                                    <p class="text-center">
                                        Diterima
                                    </p>
                                </div>

                                <div>
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Ditolak"
                                        class="bg-light-danger mb-0 col-12 py-2 rounded mb-2">
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
                                            <img src="{{ asset(auth()->user()->photo == null ? 'default.jpg' : 'storage/' . auth()->user()->photo) }}"
                                                class="user-img" alt="user avatar" style="object-fit: cover">
                                        </div>
                                        <p class="mt-2" style="font-weight:500">
                                            {{ $applyJobVacancy->student->user->name }}
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <p class="mt-2" style="font-weight:500">
                                        {{ $applyJobVacancy->student->user->email }}
                                    </p>
                                </td>
                                <td>
                                    <p class="mt-2" style="font-weight:500">
                                        {{ $applyJobVacancy->student->user->student->gender == 'male' ? 'Laki-Laki' : 'Perempuan' }}
                                    </p>
                                </td>
                                <td>
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
                                <td>
                                    <div class="d-flex justify-content-header gap-2">
                                        @if ($applyJobVacancy->status == 'pending')
                                            <div class="">
                                                <button class="btn btn-sm btn-success btn-accept"
                                                    id="btn-edit-{{ $applyJobVacancy->id }}"
                                                    data-id="{{ $applyJobVacancy->id }}">Terima</button>
                                            </div>
                                            <div class="">
                                                <button class="btn btn-sm btn-danger btn-reject"
                                                    id="btn-edit-{{ $applyJobVacancy->id }}"
                                                    data-id="{{ $applyJobVacancy->id }}">Tolak</button>
                                            </div>
                                            <div class="">
                                                <a
                                                    href="{{ route('detail.applicant', ['apply_job_vacancies' => $applyJobVacancy->id]) }}">
                                                    <button class="btn text-white btn-sm btn-info">Detail</button>
                                                </a>
                                            </div>
                                        @else
                                            <div class="">
                                                <a
                                                    href="{{ route('detail.applicant', ['apply_job_vacancies' => $applyJobVacancy->id]) }}">
                                                    <button class="btn text-white btn-sm btn-info">Detail</button>
                                                </a>
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
    <div class="modal fade" id="modal-update-accept" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <form id="form-update-accept" method="post">
                @csrf
                @method('PATCH')
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="exampleModalLabel">Pesan Di Terima</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="formFile" class="form-label">Pesan Kepada Pelamar</label>
                                <textarea name="message" class="form-control" id="" cols="20" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary text-white">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="modal-update-reject" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <form id="form-update-reject" method="post">
                @csrf
                @method('PATCH')
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="exampleModalLabel">Pesan Di Tolak</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="formFile" class="form-label">Pesan Kepada Pelamar</label>
                                <textarea name="message" class="form-control" id="" cols="20" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary text-white">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('#company').addClass('mm-active')
        $('.btn-accept').click(function() {
            const formData = getDataAttributes($(this).attr('id'))
            var actionUrl = `/accept-job-vacancy/${formData['id']}`;
            $('#form-update-accept').attr('action', actionUrl);

            setFormValues('form-update-accept', formData)
            $('#form-update-accept').data('id', formData['id'])
            $('#form-update-accept').attr('action', );
            $('#modal-update-accept').modal('show')
        });
        $('.btn-reject').click(function() {
            const formData = getDataAttributes($(this).attr('id'))
            var actionUrl = `/reject-job-vacancy/${formData['id']}`;
            $('#form-update-reject').attr('action', actionUrl);

            setFormValues('form-update-reject', formData)
            $('#form-update-reject').data('id', formData['id'])
            $('#form-update-reject').attr('action', );
            $('#modal-update-reject').modal('show')
        });
    </script>
@endsection
