@extends('layouts.app')
@section('title', 'Company')

@section('content')
    <h4 style="font-weight: 800">
        Data Perusahaan
    </h4>
    <div class="row">
        <div class="col-12 col-md-9">
            <form action="" method="get">
                <div class="d-flex justify-content-header gap-3">
                    <div class="position-relative mb-3 col-lg-5">
                        <input type="text" name="name" value="{{ request()->name }}"
                            class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
                        <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
                    </div>
                    <div class="col-lg-3">
                        <select name="status" id="" class="form-select py-2">
                            <option value="">Filter Status</option>
                            <option value="active" {{ request()->status == 'active' ? 'selected' : '' }}>Aktif</option>
                            <option value="nonactive" {{ request()->status == 'nonactive' ? 'selected' : '' }}>Tidak Aktif
                            </option>
                            <option value="not_verified" {{ request()->status == 'not_verified' ? 'selected' : '' }}>Email
                                Belum Terverifikasi</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-primary btn-md">
                            Cari
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible mt-3 fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
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
                                Email
                            </td>
                            <td>
                                Bidang Perusahaan
                            </td>
                            <td>
                                Website
                            </td>
                            <td>
                                Status
                            </td>
                            <td>
                                Aksi
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($companies as $company)
                            <tr>
                                <td>
                                    <p class="mb-0 fw-normal mt-2">
                                        {{ $loop->iteration }}
                                    </p>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal mt-2">
                                        {{ $company->user->name }}
                                    </p>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal mt-2">
                                        {{ $company->user->email }}
                                    </p>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal mt-2">
                                        {{ $company->company_field }}
                                    </p>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal mt-2">
                                        {{ $company->website }}
                                    </p>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal mt-2">
                                        @if ($company->status == 'active' && $company->user->email_verified_at != null)
                                            <span class="badge text-bg-success">Aktif</span>
                                        @elseif ($company->status == 'active' && $company->user->email_verified_at == null)
                                            <span class="badge text-bg-warning text-white">Belum Verfikasi Akun</span>
                                        @else
                                            <span class="badge text-bg-danger">Tidak Aktif</span>
                                        @endif
                                    </p>
                                </td>
                                <td>
                                    <a class="d-flex justify-content-header gap-2 btn-detail"
                                        data-id="{{ $company->user->id }}" id="btn-detail-{{ $company->user->id }}"
                                        data-photo="{{ $company->user->photo ? 'storage/' . $company->user->photo : 'default.jpg' }}"
                                        data-name="{{ $company->user->name }}" data-email="{{ $company->user->email }}"
                                        data-company_field="{{ $company->company_field ? $company->company_field : 'Belum diisi' }}"
                                        data-phone_number="{{ $company->user->phone_number }}"
                                        data-address="{{ $company->user->address ? $company->user->address : 'Belum diisi' }}"
                                        data-description="{{ $company->description }}">
                                        <div class="">
                                            <button class="btn btn-detail" style="background-color: #1D9375">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24">
                                                    <path fill="#fff"
                                                        d="M12 6.5A9.77 9.77 0 0 0 3.18 12c1.65 3.37 5.02 5.5 8.82 5.5s7.17-2.13 8.82-5.5A9.77 9.77 0 0 0 12 6.5zm0 10c-2.48 0-4.5-2.02-4.5-4.5S9.52 7.5 12 7.5s4.5 2.02 4.5 4.5s-2.02 4.5-4.5 4.5z"
                                                        opacity=".3"></path>
                                                    <path fill="#fff"
                                                        d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zm0 13A9.77 9.77 0 0 1 3.18 12C4.83 8.63 8.21 6.5 12 6.5s7.17 2.13 8.82 5.5A9.77 9.77 0 0 1 12 17.5zm0-10c-2.48 0-4.5 2.02-4.5 4.5s2.02 4.5 4.5 4.5s4.5-2.02 4.5-4.5s-2.02-4.5-4.5-4.5zm0 7a2.5 2.5 0 0 1 0-5a2.5 2.5 0 0 1 0 5z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    <div class="d-flex justify-content-center" style="min-height:16rem">
                                        <div class="my-auto">
                                            <img src="{{ asset('showNoData.png') }}" width="300" height="300" />
                                            <h4 class="text-center mt-4">Data Perusahaan Kosong!!</h4>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $companies->links('pagination::bootstrap-5') }}
        </div>
    </div>
    <div class="modal fade" id="modal-detail" tabindex="-1" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="myModalLabel">
                        Detail Perusahaan
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center">
                        <img src="" class="rounded-circle mb-2" id="detail-photo" width="150" alt="photo-siswa"
                            height="150" />
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="font-weight: bold;">Nama : <span id="detail-name"
                                            style="font-weight: normal;"></span>
                                    </li>
                                    <li class="list-group-item" style="font-weight: bold;">Bidang Perusahaan : <span
                                            id="detail-company_field" style="font-weight: normal;"></span></li>
                                    <li class="list-group-item" style="font-weight: bold;">Deskripsi Perusahaan : <span
                                            id="detail-description" style="font-weight: normal;"></span></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="font-weight: bold;">Email : <span
                                            id="detail-email" style="font-weight: normal;"></span></li>
                                    <li class="list-group-item" style="font-weight: bold;">No Telepon : <span
                                            id="detail-phone_number" style="font-weight: normal;"></span></li>
                                    <li class="list-group-item" style="font-weight: bold;">Alamat Perusahaan : <span
                                            id="detail-address" style="font-weight: normal;"></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger font-medium waves-effect"
                        data-bs-dismiss="modal">Tutup</button>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection
@section('script')
    <script>
        $('.btn-detail').click(function() {
            const data = getDataAttributes($(this).attr('id'))
            handleDetail(data)
            const detailPhoto = document.getElementById("detail-photo");
            detailPhoto.src = data['photo'];
            $('#modal-detail').modal('show')
        })
    </script>
@endsection
