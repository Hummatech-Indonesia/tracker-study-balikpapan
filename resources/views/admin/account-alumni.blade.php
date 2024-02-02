@extends('layouts.app')
@section('content')
    @php
        use Carbon\Carbon;
    @endphp
    <div class="d-flex justify-content-between">
        <div class="">
            <h4 class="mb-3">
                Verifikasi Akun Alumni
            </h4>
        </div>

        <div class="position-relative mb-3 col-lg-3">
            <form action="{{ route('account.alumni') }}" method="get">
                <input type="text" name="name" value="{{ Request::get('name') }}"
                    class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
                <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3">
                </i>
                <button type="submit" style="display: none;"></button>
            </form>
        </div>
    </div>
    <div class="d-flex justify-content-end gap-3 mb-3">
        <div class="">
            <button id="btn-accept-alumni" class="btn text-white btn-primary">Terima Semua</button>
        </div>
        <div class="">
            <button id="btn-reject-student" class="btn text-white btn-warning">Tolak Semua</button>
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible mt-3 fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table">
            <thead>
                <th> <input type="checkbox" name="" id="select-all"> </th>
                <th>Nama</th>
                <th>Nisn</th>
                <th>Tahun Ajaran</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                @forelse ($students as $student)
                    <tr>
                        <td><input type="checkbox" name="select" value="{{ $student->id }}" class="select"></td>
                        <td>{{ $student->user->name }}</td>
                        <td>{{ $student->national_student_id }}</td>
                        <td>{{ $student->classroom->schoolYear->name }}</td>
                        <td>{{ $student->classroom->name }}</td>
                        <td>
                            <div class="d-flex justify-content-header gap-2">
                                <div class="">
                                    <a class="btn btn-detail btn-warning w-100 text-white" data-id="${data.id}"
                                        data-id="{{ $student->user->id }}" id="btn-detail-{{ $student->user->id }}"
                                        data-name="{{ $student->user->name }}" data-email="{{ $student->user->email }}"
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
                                    <button class="btn btn-approve w-100 text-white" data-id="{{ $student->id }}"
                                        data-bs-toggle="modal" style="background-color: #1D9375">Terima</button>
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

    <div class="modal fade" id="modal-detail" tabindex="-1" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="myModalLabel">
                        Detail Siswa
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

            $("#btn-accept-alumni").click(function() {
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


            // Trigger change event of individual checkboxes when "Select All" is clicked
            $("#select-all").change(function() {
                $(".select").prop("checked", $(this).prop("checked")).change();
            });

            $(".select").change(function() {
                if (!$(this).prop("checked")) {
                    $("#select-all").prop("checked", false);
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
    </script>
@endsection
