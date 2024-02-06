@extends('layouts.app')
@section('title', 'account-siswa')

@section('content')
    @php
        use Carbon\Carbon;
    @endphp
    <div class="d-flex justify-content-between">
        <div class="">
            <h4 class="mb-3">
                Verifikasi Akun
            </h4>
        </div>
        <div class="position-relative mb-3 col-lg-3">
            <form action="{{ route('account.verification') }}" method="get">
                <input type="text" name="name" value="{{ Request::get('name') }}"
                    class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
                <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3">
                </i>
                <button type="submit" style="display: none;"></button>
            </form>
        </div>
    </div>
    <div class="row">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible mt-3 fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <ul class="nav nav-pills mb-3" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="pill" href="#primary-pills-home" role="tab"
                            aria-selected="true">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class="bx bx-user font-18 me-1"></i>
                                </div>
                                <div class="tab-title">Siswa</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="pill" href="#primary-pills-profile" role="tab"
                            aria-selected="false" tabindex="-1">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" viewBox="0 0 36 36" fill="none">
                                        <path
                                            d="M16.1998 10.8004C16.1998 13.7827 13.7821 16.2004 10.7998 16.2004C7.81747 16.2004 5.3998 13.7827 5.3998 10.8004C5.3998 7.81805 7.81747 5.40039 10.7998 5.40039C13.7821 5.40039 16.1998 7.81805 16.1998 10.8004Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M30.5998 10.8004C30.5998 13.7827 28.1821 16.2004 25.1998 16.2004C22.2175 16.2004 19.7998 13.7827 19.7998 10.8004C19.7998 7.81805 22.2175 5.40039 25.1998 5.40039C28.1821 5.40039 30.5998 7.81805 30.5998 10.8004Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M23.2722 30.6004C23.3563 30.0125 23.3998 29.4115 23.3998 28.8004C23.3998 25.8571 22.3906 23.1494 20.6994 21.0047C22.0233 20.2388 23.5604 19.8004 25.1998 19.8004C30.1704 19.8004 34.1998 23.8298 34.1998 28.8004V30.6004H23.2722Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M10.7998 19.8004C15.7704 19.8004 19.7998 23.8298 19.7998 28.8004V30.6004H1.7998V28.8004C1.7998 23.8298 5.82924 19.8004 10.7998 19.8004Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                                <div class="tab-title mt-1">Alumni</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="pill" href="#primary-pills-contact" role="tab"
                            aria-selected="false" tabindex="-1">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M19 3v18h-6v-3.5h-2V21H5V3zm-4 4h2V5h-2zm-4 0h2V5h-2zM7 7h2V5H7zm8 4h2V9h-2zm-4 0h2V9h-2zm-4 0h2V9H7zm8 4h2v-2h-2zm-4 0h2v-2h-2zm-4 0h2v-2H7zm8 4h2v-2h-2zm-8 0h2v-2H7zM21 1H3v22h18z">
                                        </path>
                                    </svg></i>
                                </div>
                                <div class="tab-title mt-1 ms-1">Perusahaan</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade active show" id="primary-pills-home" role="tabpanel">
                    <div class="d-flex justify-content-end gap-3 mb-3">
                        <div class="">
                            <button id="btn-accept-student" class="btn text-white btn-primary">Terima Semua</button>
                        </div>
                        <div class="">
                            <button id="btn-reject-student" class="btn text-white btn-warning">Tolak Semua</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th> <input type="checkbox" name="" class="select-all"> </th>
                                <th>Nama</th>
                                <th>Nisn</th>
                                <th>Tahun Ajaran</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @forelse ($students as $student)
                                    <tr>
                                        <td><input type="checkbox" name="select" value="{{ $student->id }}"
                                                class="select"></td>
                                        <td>{{ $student->user->name }}</td>
                                        <td>{{ $student->national_student_id }}</td>
                                        <td>{{ $student->classroom->schoolYear->name }}</td>
                                        <td>{{ $student->classroom->name }}</td>
                                        <td>
                                            <div class="d-flex justify-content-header gap-2">
                                                <div class="">
                                                    <a class="btn btn-detail btn-warning w-100 text-white"
                                                        data-id="${data.id}" data-id="{{ $student->user->id }}"
                                                        id="btn-detail-{{ $student->user->id }}"
                                                        data-name="{{ $student->user->name }}"
                                                        data-email="{{ $student->user->email }}"
                                                        data-school_year ="{{ $student->classroom->schoolYear->name }}"
                                                        data-classroom="{{ $student->classroom->name }}"
                                                        @if ($student->gender == 'male') data-gender="Laki-laki"
                                                @else
                                                data-gender="Perempuan" @endif
                                                        data-birth_date="{{ Carbon::parse($student->birth_date)->locale('id_ID')->isoFormat('DD MMMM Y') }}"
                                                        data-major="{{ $student->classroom->major->name }}"
                                                        data-phone_number="{{ $student->user->phone_number }}"
                                                        data-address="{{ $student->user->address }}"
                                                        data-national_student_id="{{ $student->national_student_id }}">
                                                        Detail
                                                    </a>
                                                </div>
                                                <div class="">
                                                    <button class="btn btn-approve w-100 text-white"
                                                        data-id="{{ $student->id }}" data-bs-toggle="modal"
                                                        style="background-color: #1D9375">Terima</button>
                                                </div>
                                                <div class="">
                                                    <button data-id="{{ $student->id }}" data-bs-toggle="modal"
                                                        class="btn btn-danger w-100 btn-reject">Tolak</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10">
                                            <div class="d-flex justify-content-center">
                                                <div>
                                                    <img src="{{ asset('showNoData.png') }}" alt="">
                                                    <h5 class="text-center">Semua Data Sudah Di Verifikasi!!</h5>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                    {{ $students->links('pagination::bootstrap-5') }}
                </div>
                <div class="tab-pane fade" id="primary-pills-profile" role="tabpanel">
                    <div class="d-flex justify-content-end gap-3 mb-3">
                        <div class="">
                            <button id="btn-accept-student" class="btn text-white btn-primary">Terima Semua</button>
                        </div>
                        <div class="">
                            <button id="btn-reject-student" class="btn text-white btn-warning">Tolak Semua</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th> <input type="checkbox" name="" class="select-all"> </th>
                                <th>Nama</th>
                                <th>Nisn</th>
                                <th>Tahun Ajaran</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @forelse ($alumnis as $alumni)
                                    <tr>
                                        <td><input type="checkbox" name="select" value="{{ $alumni->id }}"
                                                class="select"></td>
                                        <td>{{ $alumni->user->name }}</td>
                                        <td>{{ $alumni->national_student_id }}</td>
                                        <td>{{ $alumni->classroom->schoolYear->name }}</td>
                                        <td>{{ $alumni->classroom->name }}</td>
                                        <td>
                                            <div class="d-flex justify-content-header gap-2">
                                                <div class="">
                                                    <a class="btn btn-detail btn-warning w-100 text-white"
                                                        data-id="${data.id}" data-id="{{ $alumni->user->id }}"
                                                        id="btn-detail-{{ $alumni->user->id }}"
                                                        data-name="{{ $alumni->user->name }}"
                                                        data-email="{{ $alumni->user->email }}"
                                                        data-school_year ="{{ $alumni->classroom->schoolYear->name }}"
                                                        data-classroom="{{ $alumni->classroom->name }}"
                                                        @if ($alumni->gender == 'male') data-gender="Laki-laki"
                                                @else
                                                data-gender="Perempuan" @endif
                                                        data-birth_date="{{ Carbon::parse($alumni->birth_date)->locale('id_ID')->isoFormat('DD MMMM Y') }}"
                                                        data-major="{{ $alumni->classroom->major->name }}"
                                                        data-phone_number="{{ $alumni->user->phone_number }}"
                                                        data-address="{{ $alumni->user->address }}"
                                                        data-national_student_id="{{ $alumni->national_student_id }}">
                                                        Detail
                                                    </a>
                                                </div>
                                                <div class="">
                                                    <button class="btn btn-approve w-100 text-white"
                                                        data-id="{{ $alumni->id }}" data-bs-toggle="modal"
                                                        style="background-color: #1D9375">Terima</button>
                                                </div>
                                                <div class="">
                                                    <button data-id="{{ $alumni->id }}" data-bs-toggle="modal"
                                                        class="btn btn-danger w-100 btn-reject">Tolak</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10">
                                            <div class="d-flex justify-content-center">
                                                <div>
                                                    <img src="{{ asset('showNoData.png') }}" alt="">
                                                    <h5 class="text-center">Semua Data Sudah Di Verifikasi!!</h5>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                    {{ $alumnis->links('pagination::bootstrap-5') }}
                </div>
                <div class="tab-pane fade" id="primary-pills-contact" role="tabpanel">
                    <div class="d-flex justify-content-end gap-3 mb-3">
                        <div class="">
                            <button id="btn-accept-company" class="btn text-white btn-primary">Terima Semua</button>
                        </div>
                        <div class="">
                            <button id="btn-reject-company" class="btn text-white btn-warning">Tolak Semua</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th> <input type="checkbox" name="" class="select-all"> </th>
                                <th>Nama Perusahaan</th>
                                <th>email</th>
                                <th>deskripsi</th>
                                <th>No Telephone</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @forelse ($companies as $company)
                                    <tr>
                                        <td><input type="checkbox" name="select" value="{{ $company->id }}"
                                                class="select"></td>
                                        <td>{{ $company->user->name }}</td>
                                        <td>{{ $company->user->email }}</td>
                                        <td
                                            style="text-overflow: ellipsis;overflow: hidden ;max-width: 300px ;white-space: nowrap">
                                            {{ $company->description }}</td>
                                        <td>{{ $company->user->phone_number }}</td>
                                        <td>
                                            <div class="d-flex justify-content-header gap-2">
                                                <div class="">
                                                    <button class="btn btn-approve-company w-100 text-white"
                                                        data-id="{{ $company->id }}" data-bs-toggle="modal"
                                                        style="background-color: #1D9375">Terima</button>
                                                </div>
                                                <div class="">
                                                    <button data-id="{{ $company->id }}" data-bs-toggle="modal"
                                                        class="btn btn-danger w-100 btn-reject-company">Tolak</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10">
                                            <div class="d-flex justify-content-center">
                                                <div>
                                                    <img src="{{ asset('showNoData.png') }}" alt="">
                                                    <h5 class="text-center">Semua Data Sudah Di Verifikasi!!</h5>
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
        </div>
    </div>

    <div class="modal fade" id="modal-detail" tabindex="-1" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title-detail" id="myModalLabel">
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="font-weight: bold;">Nama : <span id="detail-name"
                                            style="font-weight: normal;"></span>
                                    </li>
                                    <li class="list-group-item" style="font-weight: bold;">Email: <span id="detail-email"
                                            style="font-weight: normal;"></span>
                                    </li>
                                    <li class="list-group-item" style="font-weight: bold;">Jenis Kelamin : <span
                                            id="detail-gender" style="font-weight: normal;"></span></li>
                                    <li class="list-group-item" style="font-weight: bold;">NISN: <span
                                            id="detail-national_student_id" style="font-weight: normal;"></span></li>
                                    <li class="list-group-item" style="font-weight: bold;">Tanggal Lahir: <span
                                            id="detail-birth_date" style="font-weight: normal;"></span></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="font-weight: bold;">Tahun Ajaran: <span
                                            id="detail-school_year" style="font-weight: normal;"></span></li>
                                    <li class="list-group-item" style="font-weight: bold;">Jurusan: <span
                                            id="detail-major" style="font-weight: normal;"></span></li>
                                    <li class="list-group-item" style="font-weight: bold;">Kelas: <span
                                            id="detail-classroom" style="font-weight: normal;"></span></li>
                                    <li class="list-group-item" style="font-weight: bold;">No Telepon: <span
                                            id="detail-phone_number" style="font-weight: normal;"></span></li>
                                    <li class="list-group-item" style="font-weight: bold;">Alamat: <span
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

    <x-confirm-approve-modal-component />
    <x-confirm-reject-modal-component />
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            var selectedValues = [];

            $(".select").change(function() {
                selectedValues = [];
                $(".select:checked").each(function() {
                    selectedValues.push($(this).val());
                });
            });

            $("#primary-pills-home").click(function() {
                $('.modal-title-detail').html("Detail Siswa");
            });

            $("#primary-pills-profile").click(function() {
                $('.modal-title-detail').html("Detail Alumni");
            });

            $("#btn-reject-student").click(function() {
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: 'Anda akan menolak semua siswa. Tindakan ini tidak bisa dibatalkan.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Iya!',
                    cancelButtonText: 'Tidak, batal!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '{{ route('reject.student.all') }}',
                            method: 'PATCH',
                            data: {
                                select: selectedValues,
                            },
                            success: function(response) {
                                console.log(response.message);
                                location.reload();
                            },
                            error: function(error) {
                                console.error('Error:', error);
                                // Handle error jika diperlukan
                            }
                        });
                    }
                });
            })

            $("#btn-accept-student").click(function() {
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: 'Anda akan menerima semua siswa. Tindakan ini tidak bisa dibatalkan.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Iya!',
                    cancelButtonText: 'Tidak, batal!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '{{ route('verification.student.all') }}',
                            method: 'PATCH',
                            data: {
                                select: selectedValues,
                            },
                            success: function(response) {
                                console.log(response.message);
                                location.reload();
                            },
                            error: function(error) {
                                console.error('Error:', error);
                                // Handle error jika diperlukan
                            }
                        });
                    }
                });
            })

            $("#btn-reject-company").click(function() {
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: 'Anda akan menolak semua siswa. Tindakan ini tidak bisa dibatalkan.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Iya!',
                    cancelButtonText: 'Tidak, batal!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '{{ route('reject.verify.company.all') }}',
                            method: 'PATCH',
                            data: {
                                select: selectedValues,
                            },
                            success: function(response) {
                                console.log(response.message);
                                location.reload();
                            },
                            error: function(error) {
                                console.error('Error:', error);
                                // Handle error jika diperlukan
                            }
                        });
                    }
                });
            })

            $("#btn-accept-company").click(function() {
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: 'Anda akan menerima semua siswa. Tindakan ini tidak bisa dibatalkan.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Iya!',
                    cancelButtonText: 'Tidak, batal!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '{{ route('approve.verify.company.all') }}',
                            method: 'PATCH',
                            data: {
                                select: selectedValues,
                            },
                            success: function(response) {
                                console.log(response.message);
                                location.reload();
                            },
                            error: function(error) {
                                console.error('Error:', error);
                                // Handle error jika diperlukan
                            }
                        });
                    }
                });
            })

            // Trigger change event of individual checkboxes when "Select All" is clicked
            $(".select-all").change(function() {
                $(".select").prop("checked", $(this).prop("checked")).change();
            });

            $(".select").change(function() {
                if (!$(this).prop("checked")) {
                    $(".select-all").prop("checked", false);
                }
            });
        });
        $('.btn-approve').click(function() {
            id = $(this).data('id')
            var actionUrl = `verification-student/${id}`;
            $('#form-approve').attr('action', actionUrl);
            $('#modal-approve').modal('show')
        })
        $('.btn-detail').click(function() {
            const data = getDataAttributes($(this).attr('id'))
            handleDetail(data)
            $('#modal-detail').modal('show')
        })
        $('.btn-reject').click(function() {
            id = $(this).data('id')
            var actionUrl = `reject-verification-student/${id}`;
            $('#form-reject').attr('action', actionUrl);
            $('#modal-reject').modal('show')
        })

        $('.btn-approve-company').click(function() {
            id = $(this).data('id')
            var actionUrl = `approve-verify-company/${id}`;
            $('#form-approve').attr('action', actionUrl);
            $('#modal-approve').modal('show')
        })
        $('.btn-reject-company').click(function() {
            id = $(this).data('id')
            var actionUrl = `reject-verify-company/${id}`;
            $('#form-reject').attr('action', actionUrl);
            $('#modal-reject').modal('show')
        })
    </script>
@endsection
