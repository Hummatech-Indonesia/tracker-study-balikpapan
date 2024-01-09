@extends('layouts.app')
@section('content')
    <h3>
        Status Siswa & Alumni
    </h3>
    <div class="d-flex justify-content-between mb-2">
        <div class="d-flex justify-content-header gap-3">
            <div class="position-relative mb-3 col-lg-8">
                <form action="{{ route('student.classroom.status', $classroom->id) }}" method="get">
                    <input type="text" name="name" value="{{ Request::get('name') }}"
                        class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
                    <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
                    <button type="submit" hidden></button>
                </form>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <td>
                        <input type="checkbox" name="checkbox" id="select-all" class="form-check-input">
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
                @foreach ($students as $index => $student)
                    <tr>
                        <td>
                            <input type="checkbox" name="checkbox" class="form-check-input select" value="{{ $student->id }}">
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
                @endforeach
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
                        <h5>Apakah anda yakin ingin menolak menjadikan akun ini menjadi siswa?</h5>
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
          $(document).ready(function() {
        $("#select-all").change(function() {
            $(".select").prop("checked", $(this).prop("checked"));
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
