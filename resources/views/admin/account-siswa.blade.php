@extends('layouts.app')
@section('content')
    @php
        use Carbon\Carbon;
    @endphp
    <div class="d-flex justify-content-between">
        <div class="">
            <h4 class="mb-3">
                Verifikasi Akun Siswa
            </h4>
        </div>
        <div class="position-relative mb-3 col-lg-3">
            <form action="{{ route('account.siswa') }}" method="get">
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
            <button id="btn-select-change-student" class="btn text-white btn-warning">Tolak Semua</button>
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
                                        @if ($student->gender == 'male') data-jenis_kelamin="Laki-laki"
                                @else
                                data-jenis_kelamin="Perempuan" @endif
                                        data-tanggal_lahir="{{ Carbon::parse($student->birth_date)->locale('id_ID')->isoFormat('DD MMMM Y') }}"
                                        data-major="{{ $student->classroom->major->name }}"
                                        data-nisn="{{ $student->national_student_id }}">
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
                        <div class="name">
                            Nama
                        </div>
                        <div class="name"
                            style="border-bottom: 2px solid solid #00000033; padding-left:10px; padding-top:0.5rem; padding-bottom:0.5rem"
                            id="detail-name">
                        </div>
                    </div>
                    <div class="" style="display: flex; justify-content:space-between">
                        <div class="container-fluid">
                            <div class="classroom">
                                Kelas
                            </div>
                            <div class="classroom"
                                style="border-bottom: 2px solid solid #00000033; padding-left:10px; padding-top:0.5rem; padding-bottom:0.5rem"
                                id="detail-classroom">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="lulusan_tahun _ajaran">
                                Lulusan Tahun Ajaran
                            </div>
                            <div class="name"
                                style="border-bottom: 2px solid solid #00000033; padding-left:10px; padding-top:0.5rem; padding-bottom:0.5rem"
                                id="detail-school_year">
                            </div>
                        </div>
                    </div>
                    <div class="" style="display: flex; justify-content:space-between">
                        <div class="container-fluid">
                            <div class="nisn">
                                NISN
                            </div>
                            <div class="nisn"
                                style="border-bottom: 2px solid solid #00000033; padding-left:10px; padding-top:0.5rem; padding-bottom:0.5rem"
                                id="detail-nisn">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="major">
                                Jurusan
                            </div>
                            <div class="name"
                                style="border-bottom: 2px solid solid #00000033; padding-left:10px; padding-top:0.5rem; padding-bottom:0.5rem"
                                id="detail-major">
                            </div>
                        </div>
                    </div>
                    <div class="" style="display: flex; justify-content:space-between">
                        <div class="container-fluid">
                            <div class="jenis_kelamin">
                                Jenis Kelamin
                            </div>
                            <div class="jenis_kelamin"
                                style="border-bottom: 2px solid solid #00000033; padding-left:10px; padding-top:0.5rem; padding-bottom:0.5rem"
                                id="detail-jenis_kelamin">
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="tanggal_lahir">
                                Tanggal Lahir
                            </div>
                            <div class="tanggal_lahir"
                                style="border-bottom: 2px solid solid #00000033; padding-left:10px; padding-top:0.5rem; padding-bottom:0.5rem"
                                id="detail-tanggal_lahir">
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

            $("#btn-accept-alumni").click(function() {
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
            });

            $("#btn-select-change-student").click(function() {
                $.ajax({
                    url: '{{ route('change.student.select') }}',
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
            });

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
