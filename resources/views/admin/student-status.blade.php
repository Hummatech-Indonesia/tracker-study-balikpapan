@extends('layouts.app')
@section('title', 'detail-student-status')

@section('content')
    <h3>
        Data Alumni
    </h3>
    <div class="row">
        <div class=" col-12 col-md-8">
            <form action="" method="get">
                <div class="d-flex justify-content-header gap-3">
                    <div class="position-relative mb-3 col-lg-5">
                        <input type="text" name="name" value="{{ request()->name }}"
                            class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
                        <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
                    </div>
                    <div class="col-lg-3">
                        <select name="classroom" id="classroom-filter" class="form-select classroom py-2">
                            <option value="">Filter Kelas</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <select name="schoolYear" id="schoolYear-filter" class="form-select schoolYear py-2">
                            @foreach ($schoolYears as $schoolYear)
                                <option value="{{ $schoolYear->id }}">{{ $schoolYear->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <div class=" col-12 col-md-4">
            <div class="d-flex justify-content-end gap-3">
                <div class="">
                    <button id="btn-select-change-student" class="btn text-white btn-warning">Jadikan Siswa</button>
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
                            <input type="checkbox" name="checkbox" id="select-all" class="form-check-input select-all">
                        </td>
                        <td>
                            No
                        </td>
                        <td>
                            Nama Alumni
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
                            Tahun lulus
                        </td>
                        <td>
                            Aksi
                        </td>
                    </tr>
                </thead>
                <tbody id="data">

                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                <nav id="pagination">
                </nav>
            </div>
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
                            <p class="text-dark fs-7 mb-0">Apakah anda yakin ingin menjadikan akun ini menjadi siswa?</p>
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
            let debounceTimer;
            $('#search-name').keyup(function() {
                clearTimeout(debounceTimer);

                debounceTimer = setTimeout(function() {
                    get(1)
                }, 500);
            });
            get(1)


            $('#classroom-filter').change(function() {
                get(1);
            });

            $('#schoolYear-filter').change(function() {
                get(1);
            });

            function get(page) {
                $.ajax({
                    url: '/alumni-be?page=' + page,
                    method: 'GET',
                    data: {
                        name: $('#search-name').val(),
                        classroom: $('#classroom-filter').val(),
                        schoolYear: $('#schoolYear-filter').val(),
                    },
                    dataType: 'JSON',
                    beforeSend: function() {
                        $('#pagination').html('')
                        $('#data').html('')
                    },
                    success: function(response) {
                        if (response.data.data.length > 0) {
                            $('#pagination').html(handlePaginate(response.data.paginate))
                            response = response.data.data
                            $.each(response, function(index, data) {
                                $('#data').append(studentRow(index, data))
                            })
                            $('[data-toggle="tooltip"]').tooltip();
                        } else {
                            $('#data').html(`
                        <tr>
                            <td colspan="11">
                        <div class="d-flex justify-content-center">
                                            <div>
                                                <img src="{{ asset('showNoData.png') }}" alt="">
                                                <h5 class="text-center">Data Alumni Masih Kosong!!</h5>
                                            </div>
                                        </div>
                                        </td>
                        </tr>`)
                        }
                    }
                })
            }

            function studentRow(index, data) {
                return `
            <tr>
                        <td>
                            <div class="d-flex align-item-center mt-2">
                                <input type="checkbox" name="select" class="form-check-input select"
                                    value="${data.id}">
                            </div>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal mt-2">
                                ${index + 1}
                            </p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal mt-2">
                                ${data.name }
                            </p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal mt-2">
                                ${data.email }
                            </p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal mt-2">
                                ${ data.national_student_id}
                            </p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal mt-2">
                                ${data.classroom}
                            </p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal mt-2">
                                ${data.schoolYear}
                            </p>
                        </td>
        <td>
            <button data-id="${data.id}" data-toggle="tooltip" data-placement="top" title="Jadikan Siswa" class="btn btn-${data.is_graduate == 0 ? 'alumni' : 'student'} text-white ${data.is_graduate == 0 ? 'btn-primary' : 'btn-warning'}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg></button>
        </td>
                    </tr>`
            }

            $('#student-status').addClass('mm-active')

            $(document).on('click', '#select-all', function() {

                var selectedValues = [];

                $(".select").change(function() {
                    selectedValues = [];
                    $(".select:checked").each(function() {
                        selectedValues.push($(this).val());
                    });
                });

                $("#btn-select-change-student").click(function() {
                    Swal.fire({
                        title: 'Apakah Kamu Yakin?',
                        text: 'Anda akan mengubah status menjadi siswa. Tindakan ini tidak bisa dibatalkan.',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Iya!',
                        cancelButtonText: 'Tidak, batal!',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // User clicked "Yes", send the AJAX request
                            $.ajax({
                                url: '{{ route('change.student.select') }}',
                                method: 'PATCH',
                                data: {
                                    select: selectedValues,
                                },
                                success: function(response) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Berhasil',
                                        text: response.message,
                                        confirmButtonText: 'OK',
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.reload();
                                        }
                                    });
                                },
                                error: function(error) {
                                    console.error('Error:', error);
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Gagal',
                                        text: 'An error occurred',
                                        confirmButtonText: 'OK',
                                    });
                                }
                            });
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

            $(document).on('click', '.select', function() {

                var selectedValues = [];

                $(".select").change(function() {
                    selectedValues = [];
                    $(".select:checked").each(function() {
                        selectedValues.push($(this).val());
                    });
                });

                $("#btn-select-change-student").click(function() {
                    Swal.fire({
                        title: 'Apakah Kamu Yakin?',
                        text: 'Anda akan mengubah status menjadi siswa. Tindakan ini tidak bisa dibatalkan.',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Iya!',
                        cancelButtonText: 'Tidak, batal!',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // User clicked "Yes", send the AJAX request
                            $.ajax({
                                url: '{{ route('change.student.select') }}',
                                method: 'PATCH',
                                data: {
                                    select: selectedValues,
                                },
                                success: function(response) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Berhasil',
                                        text: response.message,
                                        confirmButtonText: 'OK',
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.reload();
                                        }
                                    });
                                },
                                error: function(error) {
                                    console.error('Error:', error);
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Gagal',
                                        text: 'An error occurred',
                                        confirmButtonText: 'OK',
                                    });
                                }
                            });
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

            function getClassroom() {
                $.ajax({
                    url: "get-classroom",
                    type: 'GET',
                    success: function(response) {
                        $('.classroom').html('');
                        $('.classroom').append('<option value="" selected>Semua Kelas</option>')
                        $.each(response.data, function(index, item) {
                            var option = $('<option>');
                            option.val(item.id);
                            option.text(item.name);
                            $('.classroom').append(option);
                        });
                    }
                });
            }

            getClassroom()

            // Event listener untuk tombol siswa
            $(document).on('click', '.btn-student', function() {
                var id = $(this).data('id');
                var actionUrl = `/change-student/${id}`;
                $('#form-student').attr('action', actionUrl);
                $('#modal-student').modal('show');
            });

            // Event listener untuk tombol alumni
            $(document).on('click', '.btn-alumni', function() {
                var id = $(this).data('id');
                var actionUrl = `/change-alumni/${id}`;
                $('#form-alumni').attr('action', actionUrl);
                $('#modal-alumni').modal('show');
            });
        </script>
    @endsection
