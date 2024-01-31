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
            <h5>
                Buat Lowongan
            </h5>
        </div>
        <div class="">
            <button class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#exampleLargeModal">Tambah
                Lowongan</button>
        </div>
    </div>
    <div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="{{ route('job-vacancy.store') }}" method="post">
                @csrf
                @method('POST')
                <div class="modal-content">
                    <p class="text-center fs-5 mt-3" style="font-weight:800">
                        Tambah Lowongan
                    </p>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="formFile" class="form-label">Judul Lowongan</label>
                                <input type="text" value="{{ old('job_title') }}" placeholder="Masukkan Judul Lowongan"
                                    class="form-control" name="job_title" id="">
                            </div>
                            <div class="col-6 mb-2">
                                <label for="formFile" class="form-label">Gaji Pokok</label>
                                <input name="basic_salary" value="{{ old('basic_salary') }}"
                                    placeholder="Masukkan Gaji Pokok" type="number" id="" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="formFile" class="form-label">Sistem Kerja</label>
                                <select class="form-select form-select-md" name="work_system"
                                    aria-label="Default select example">
                                    <option value="" {{ old('work_system') == '' ? 'selected' : '' }}>Pilih Sistem
                                        Kerja</option>
                                    <option value="contract" {{ old('work_system') == 'contract' ? 'selected' : '' }}>
                                        Kontrak</option>
                                    <option value="permanentwork"
                                        {{ old('work_system') == 'permanentwork' ? 'selected' : '' }}>Kerja Tetap</option>
                                    <option value="workingparttime"
                                        {{ old('work_system') == 'workingparttime' ? 'selected' : '' }}>Kerja Paruh Waktu
                                    </option>
                                    <option value="freelance" {{ old('work_system') == 'freelance' ? 'selected' : '' }}>
                                        Freelance</option>
                                </select>
                            </div>

                            <div class="col-6 mb-3">
                                <label for="" class="form-label">Posisi</label>
                                <input type="text" value="{{ old('position') }}" name="position" class="form-control">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="formFile" class="form-label">Deskripsi Sistem Kerja</label>
                                <textarea placeholder="Masukkan Deskripsi Sistem Kerja" name="description_working_system" id=""
                                    class="form-control">{{ old('description_working_system') }}</textarea>
                            </div>
                            <div class="col-12">
                                <label for="formFile" class="form-label">Kualifikasi / Syarat - Syarat</label>
                                <textarea placeholder="Masukkan Kulifikasi / Syarat - Syarat" class="form-control" name="qualifications" id=""
                                    cols="15" rows="5">{{ old('qualifications') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn text-white" style="background-color: #1D9375">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="modal-update" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form id="form-update" method="post">
                @csrf
                @method('PUT')
                <div class="modal-content">
                    <p class="text-center fs-5 mt-3" style="font-weight:800">
                        Edit Lowongan
                    </p>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="formFile" class="form-label">Judul Lowongan</label>
                                <input type="text" placeholder="Masukkan Judul Lowongan" class="form-control"
                                    name="job_title" id="">
                            </div>
                            <div class="col-6 mb-2">
                                <label for="formFile" class="form-label">Gaji Pokok</label>
                                <input name="basic_salary" placeholder="Masukkan Gaji Pokok" type="number"
                                    id="" class="form-control"></input>
                            </div>
                            <div class="col-6">
                                <label for="formFile" class="form-label">Sistem Kerja</label>
                                <select class="form-select form-select-md" name="work_system"
                                    aria-label="Default select example">
                                    <option value="">Pilih Sistem Kerja</option>
                                    <option value="contract">Kontrak</option>
                                    <option value="permanentwork">Kerja Tetap</option>
                                    <option value="workingparttime">Kerja Paruh Waktu</option>
                                    <option value="freelance">Freelance</option>
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="" class="form-label">Posisi</label>
                                <input type="text" name="position" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="formFile" class="form-label">Deskripsi Sistem Kerja</label>
                                <textarea placeholder="Masukkan Deskripsi Sistem Kerja" name="description_working_system" id=""
                                    class="form-control"></textarea>
                            </div>
                            <div class="col-12">
                                <label for="formFile" class="form-label">Kualifikasi / Syarat - Syarat</label>
                                <textarea placeholder="Masukkan Kulifikasi / Syarat - Syarat" class="form-control" name="qualifications"
                                    id="" cols="15" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn text-white" style="background-color: #1D9375">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        @forelse ($jobVacancys as $jobVacancy)
            <div class="col-12 col-lg-4 col-xxl-3">
                <div class="card border-primary border-bottom border-3 border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mt-2 mb-4">
                            <img src="{{ asset($jobVacancy->company->user->photo == null ? 'default-male.png' : 'storage/' . $jobVacancy->company->user->photo) }}"
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
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <button class="btn btn-info btn-edit text-white text-center w-100"
                                data-id="{{ $jobVacancy->id }}" id="btn-edit-{{ $jobVacancy->id }}"
                                data-job_title="{{ $jobVacancy->job_title }}"
                                data-basic_salary="{{ $jobVacancy->basic_salary }}"
                                data-work_system="{{ $jobVacancy->work_system }}"
                                data-description_working_system="{{ $jobVacancy->description_working_system }}"
                                data-qualifications="{{ $jobVacancy->qualifications }}"data-position="{{ $jobVacancy->position }}">
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
@section('script')
    <script>
        $('.btn-edit').click(function() {
            const formData = getDataAttributes($(this).attr('id'))
            var actionUrl = `job-vacancy/${formData['id']}`;
            $('#form-update').attr('action', actionUrl);

            setFormValues('form-update', formData)
            $('#form-update').data('id', formData['id'])
            $('#form-update').attr('action', );
            $('#modal-update').modal('show')
        })
        $('.btn-delete').click(function() {
            id = $(this).data('id')
            var actionUrl = `job-vacancy/${id}`;
            $('#form-delete').attr('action', actionUrl);
            $('#modal-delete').modal('show')
        })
    </script>
@endsection
