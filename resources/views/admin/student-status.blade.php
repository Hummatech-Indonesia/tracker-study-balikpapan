@extends('layouts.app')
@section('title', 'detail-student-status')

@section('content')
    <h3>
        Status Siswa & Alumni
    </h3>
    <div class="row">
        <div class=" col-12 col-md-9 ">
            <div class="position-relative mb-3 col-12 col-md-4 col-lg-4">
                <form action="{{ route('student.classroom.status', $classroom->id) }}" method="get">
                    <input type="text" name="name" value="{{ Request::get('name') }}"
                        class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
                    <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
                    <button type="submit" hidden></button>
                </form>
            </div>
        </div>
        <div class=" col-12 col-md-3 mb-3">
            <div class="d-flex justify-content-end gap-3">
                <div class="">
                    <button id="btn-select-change-alumni" class="btn text-white btn-primary">Jadikan Alumni</button>
                </div>
                <div class="">
                    <button id="btn-select-change-student" class="btn text-white btn-warning">Jadikan Siswa</button>
                </div>
            </div>
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
                <tr>
                    <td>
                        <input type="checkbox" name="checkbox" id="select-all" class="select-all form-check-input">
                    </td>
                    <td>
                        No
                    </td>
                    <td>
                        Nama Siswa
                    </td>
                    <td>
                        Email
                    </td>
                    <td>
                        NISN
                    </td>
                    <td>
                        Kelas
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
                @forelse ($students as $index => $student)
                    <tr>
                        <td>
                            <div class="d-flex align-item-center mt-2">
                                <input type="checkbox" name="select" class="form-check-input select"
                                    value="{{ $student->id }}">
                            </div>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal mt-2">
                                {{ $index + 1 }}
                            </p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal mt-2">
                                {{ $student->user->name }}
                            </p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal mt-2">
                                {{ $student->user->email }}
                            </p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal mt-2">
                                {{ $student->national_student_id }}
                            </p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal mt-2">
                                {{ $student->classroom->name }}
                            </p>
                        </td>
                        <td>

                            @if ($student->is_graduate == 0)
                                <p class="mb-0 fs-6 mt-2">
                                    <span class="badge bg-light-warning text-warning">Siswa</span>
                                </p>
                            @else
                                <p class="mb-0 fs-6 mt-2">
                                    <span class="badge bg-light-primary text-primary">Alumni</span>
                                </p>
                            @endif
                        </td>
                        <td>
                            @if ($student->is_graduate == 0)
                                <button data-id="{{ $student->id }}" data-bs-toggle="modal"
                                    class="btn btn-alumni text-white btn-primary">Jadikan Alumni</button>
                            @else
                                <button class="btn btn-student text-white btn-warning" data-id="{{ $student->id }}"
                                    data-bs-toggle="modal">Jadikan Siswa</button>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" class="text-center">
                            <div class="d-flex justify-content-center" style="min-height:16rem">
                                <div class="my-auto">
                                    <img src="{{ asset('showNoData.png') }}" width="300" height="300" />
                                    <h4 class="text-center mt-4">Data Siswa Kosong!!</h4>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="modal-student" tabindex="-1" aria-labelledby="exampleModalLabel2">
        <div class="modal-dialog modal-sm" role="document">
            <form id="form-student" method="POST">
                @method('PATCH')
                @csrf
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title" id="exampleModalLabel2">
                            Konfirmasi
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6>Apakah anda yakin ingin menolak menjadikan akun ini menjadi siswa?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger text-white font-medium waves-effect"
                            data-bs-dismiss="modal">
                            Tutup
                        </button>
                        <button style="background-color: #1B3061" type="submit" class="btn text-white btn-create">
                            Yakin
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="modal-alumni" tabindex="-1" aria-labelledby="exampleModalLabel2">
        <div class="modal-dialog modal-sm" role="document">
            <form id="form-alumni" method="POST">
                @method('PATCH')
                @csrf
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title" id="exampleModalLabel2">
                            Konfirmasi
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5>Apakah anda yakin ingin menolak menjadikan akun ini menjadi alumni?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger text-white font-medium waves-effect"
                            data-bs-dismiss="modal">
                            Tutup
                        </button>
                        <button style="background-color: #1B3061" type="submit" class="btn text-white btn-create">
                            Yakin
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('#student-status').addClass('mm-active')
        $(document).ready(function() {
            var selectedValues = [];

            $(".select").change(function() {
                selectedValues = [];
                $(".select:checked").each(function() {
                    selectedValues.push($(this).val());
                });
            });

            $("#btn-select-change-alumni").click(function() {
                $.ajax({
                    url: '{{ route('change.alumni.select') }}',
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

        $('.btn-student').click(function() {
            id = $(this).data('id')
            var actionUrl = `/change-student/${id}`;
            $('#form-student').attr('action', actionUrl);
            $('#modal-student').modal('show')
        })

        $('.btn-alumni').click(function() {
            id = $(this).data('id')
            var actionUrl = `/change-alumni/${id}`;
            $('#form-alumni').attr('action', actionUrl);
            $('#modal-alumni').modal('show')
        })
    </script>
@endsection
