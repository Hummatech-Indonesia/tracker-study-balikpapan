@extends('layouts.app')
@section('title', 'students')

@section('content')
    <h4 style="font-weight: 800">
        Data Siswa
    </h4>
    <div class="row">
        <div class="d-flex justify-content-between">
            <div class="">
                <form action="" method="get">
                    <div class="d-flex justify-content-header gap-3">
                        <div class="position-relative mb-3 col-lg-7">
                            <input type="text" name="name" value="{{ request()->name }}"
                                class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
                            <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
                        </div>
                        <div class="col-lg-5">
                            <select name="classroom" id="classroom-filter" class="form-select classroom py-2">
                                <option value="">Filter Kelas</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="">
                <div class="d-flex gap-2 justify-content-end mb-3">
                    <button id="btn-select-change-alumni" class="btn text-white btn-warning">Jadikan Alumni</button>
                    <button class="btn text-white" data-bs-toggle="modal" data-bs-target="#modal-import"
                        style="background-color: #1D9375">Import Siswa</button>
                    <button class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleLargeModal"
                        style="background-color: #5D87FF">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 18 19"
                            fill="none">
                            <path d="M9 2L9 17" stroke="white" stroke-width="3" stroke-linecap="round" />
                            <path d="M1.5 9.5L16.5 9.5" stroke="white" stroke-width="3" stroke-linecap="round" />
                        </svg> Siswa</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">
        <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <p class="text-center fs-5 mt-3" style="font-weight:800">
                        Tambah Siswa
                    </p>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <label for="formFile" class="form-label">Nama <span style="color: red">*</span></label>
                                <input type="text" required placeholder="Masukkan Nama" class="form-control"
                                    value="{{ old('name') }}" name="name">
                            </div>
                            <div class="col-6">
                                <p class="mb-0"><label for="formFile" class="form-label">Email <span
                                            style="color: red">*</span></label></p>
                                <input name="email" required placeholder="Masukkan Email" value="{{ old('email') }}"
                                    class="form-control">
                            </div>
                            <div class="col-6 mt-2">
                                <p class="mb-0"><label for="formFile" class="form-label">Password <span
                                            style="color: red">*</span></label></p>
                                <div class="input-group" id="show_hide_password">
                                    <input type="password" required name="password"
                                        class="form-control inputChoosePassword border-end-0"
                                        placeholder="Masukkan Password">
                                    <a href="javascript:;" class="input-group-text bg-transparent"><i
                                            class="bx bx-hide"></i></a>
                                </div>
                            </div>
                            <div class="col-6 mt-2">
                                <label for="formFile" class="form-label">NISN <span style="color: red">*</span></label>
                                <input type="text" required placeholder="Masukkan NISN" value="{{ old('nisn') }}"
                                    name="national_student_id" class="form-control">
                            </div>
                            <div class="col-6 mt-2">
                                <label for="formFile" class="form-label">Tanggal Lahir <span
                                        style="color: red">*</span></label>
                                <input type="date" value="{{ old('birth_date') }}" class="form-control"
                                    name="birth_date">
                            </div>
                            <div class="col-6 mt-2">
                                <p>
                                    Jenis Kelamin <span style="color: red">*</span>
                                </p>
                                <div class="form-check form-check-inline">
                                    <input required class="form-check-input" type="radio" name="gender"
                                        value="male">
                                    <label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input required class="form-check-input" type="radio" name="gender"
                                        value="female">
                                    <label class="form-check-label" for="inlineRadio1">Perempuan</label>
                                </div>
                            </div>
                            <div class="col-6 mt-2">
                                <label for="formFile" class="form-label">No Telepon <span
                                        style="color: red">*</span></label>
                                <input required type="number" value="{{ old('phone_number') }}"
                                    placeholder="Masukkan No Telepon" class="form-control" name="phone_number">
                            </div>
                            <div class="col-6 mt-2">
                                <label for="formFile" class="form-label">Kelas <span style="color: red">*</span></label>
                                <select required class="form-select classroom mb-3" value="{{ old('classroom_id') }}"
                                    name="classroom_id" aria-label="Default select example">


                                </select>
                            </div>
                            <div class="col-12">
                                <label for="formFile" class="form-label">Foto Profile <span
                                        style="color: red">*</span></label>
                                <input required type="file" placeholder="Masukkan Foto Profile Siswa"
                                    class="form-control mb-3" name="photo">
                            </div>
                            <div class="col-12">
                                <label for="formFile" class="form-label">Alamat <span style="color: red">*</span></label>
                                <textarea required name="address" placeholder="Masukkan Alamat" class="form-control">{{ old('address') }}</textarea>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn text-white" style="background-color: #1D9375">Tambah</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Modal -->
    <div id="modal-import" class="modal fade" tabindex="-1" aria-labelledby="bs-example-modal-md" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="myModalLabel">
                        Import Siswa
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="form-import" action="{{ route('import.student') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <!--begin::Alert-->
                        <div class="alert alert-warning d-flex align-items-center p-4">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2hx svg-icon-primary me-3">
                                <span class="svg-icon svg-icon-2hx svg-icon-warning me-4"><svg width="24"
                                        height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3"
                                            d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </span>
                            <!--end::Icon-->

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column">
                                <!--begin::Title-->
                                <h4 class="mb-1 text-dark">Informasi</h4>
                                <!--end::Title-->
                                <!--begin::Content-->
                                <ul>
                                    <li class="mb-1">
                                        Jika siswa tidak terimport maka kemungkinan email siswa tersebut telah digunakan.
                                    </li>
                                    <li class="mb-1">
                                        File yang dapat diunggah berupa file excel berekstensi xls, xlsx.
                                    </li>
                                    <li class="mb-1">
                                        Password siswa secara default adalah <b>password</b>
                                    </li>
                                    <li class="mb-1">
                                        Format pengisian file excel seperti dibawah ini.
                                    </li>
                                </ul>

                                <!--end::Content-->

                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Alert-->

                        <div class="col-12">
                            <div class="div mb-3">
                                <a href="{{ asset('format-import-student.xlsx') }}" class="btn btn-success"><i
                                        class="fas fa-file-excel"></i> Download
                                    Format Excel
                                </a>
                            </div>
                            <label class="form-label" for="">File Excel <span
                                    class="text-danger">*</span></label>
                            <input type="file" class="form-control mt-3" id="import-import" name="import">
                            <ul class="error-text"></ul>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" id="save-button">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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
                    <div class="d-flex justify-content-center">
                        <img src="" class="rounded-circle mb-2" id="detail-photo" width="150"
                            alt="photo-siswa" height="150" />
                    </div>

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
    <div class="modal fade" id="modal-update" tabindex="-1" aria-hidden="true">
        <form id="form-update" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <p class="text-center fs-5 mt-3" style="font-weight:800">
                        Edit Siswa
                    </p>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <label for="formFile" class="form-label">Nama <span style="color: red">*</span></label>
                                <input type="text" required class="form-control" name="name">
                            </div>
                            <div class="col-6">
                                <p class="mb-0"><label for="formFile" class="form-label">Email <span
                                            style="color: red">*</span></label></p>
                                <input name="email" required class="form-control">
                            </div>
                            <div class="col-6 mt-2">
                                <p class="mb-0"><label for="formFile" class="form-label">Password</label></p>
                                <div class="input-group" id="show_hide_password">
                                    <input type="password" name="password"
                                        class="inputChoosePassword form-control border-end-0" id="inputChoosePassword"
                                        placeholder="Masukkan Password">
                                    <a href="javascript:;" class="input-group-text bg-transparent"><i
                                            class="bx bx-hide"></i></a>
                                </div>
                            </div>
                            <div class="col-6 mt-2">
                                <label for="formFile" class="form-label">NISN <span style="color: red">*</span></label>
                                <input type="text" required name="national_student_id" class="form-control">
                            </div>
                            <div class="col-6 mt-2">
                                <label for="formFile" class="form-label">Tanggal Lahir <span
                                        style="color: red">*</span></label>
                                <input type="date" id="update-birth_date" required class="form-control"
                                    name="birth_date">
                            </div>
                            <div class="col-6 mt-2">
                                <p>
                                    Jenis Kelamin <span style="color: red">*</span>
                                </p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" required type="radio" name="gender"
                                        value="male">
                                    <label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" required type="radio" name="gender"
                                        value="female">
                                    <label class="form-check-label" for="inlineRadio1">Perempuan</label>
                                </div>
                            </div>
                            <div class="col-6 mt-2">
                                <label for="formFile" class="form-label">No Telepon <span
                                        style="color: red">*</span></label>
                                <input type="number" required class="form-control" name="phone_number">
                            </div>
                            <div class="col-6 mt-2">
                                <label for="formFile" class="form-label">Kelas <span style="color: red">*</span></label>
                                <select required class="form-select classroom mb-3" value="{{ old('classroom_id') }}"
                                    name="classroom_id" aria-label="Default select example">


                                </select>
                            </div>
                            <div class="col-12">
                                <label for="formFile" class="form-label">Foto Profile</label>
                                <input type="file" placeholder="Masukkan Foto Profile Siswa" class="form-control mb-3"
                                    name="photo">
                            </div>
                            <div class="col-12">
                                <label for="formFile" class="form-label">Alamat <span style="color: red">*</span></label>
                                <textarea name="address" required class="form-control"></textarea>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn text-white" style="background-color: #1D9375">Edit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    @php
                        $errorReplaced = str_replace('There was an error on row', 'Terjadi kesalahan pada baris', $error);
                    @endphp
                    <div class="alert alert-danger alert-dismissible mt-3 fade show" role="alert">
                        {{ $errorReplaced }}
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
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>
                                <input type="checkbox" name="checkbox" id="select-all"
                                    class="select-all form-check-input">
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
                                No Telephone
                            </td>
                            <td>
                                Kelas
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
        </div>
    </div>
    <x-delete-modal-component />

    <div class="modal fade" id="modal-alumni" tabindex="-1" aria-labelledby="exampleModalLabel2">
        <div class="modal-dialog modal-sm" role="document">
            <form id="form-alumni" method="POST">
                @method('PATCH')
                @csrf
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                        <h5 class="modal-title" id="exampleModalLabel2">
                            Konfirmasi
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-dark fs-7 mb-0">Apakah anda yakin ingin menjadikan akun ini sebagai alumni?
                        </p>
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


        function get(page) {
            $.ajax({
                url: 'get-student?page=' + page,
                method: 'GET',
                data: {
                    classroom: $('#classroom-filter').val(),
                    name: $('#search-name').val()
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
                        student = response
                        $('.btn-edit').click(function() {
                            var studentId = $(this).data('id');
                            var data = student.find(student => student.id === studentId)
                            var actionUrl = `students/${data['id']}`;
                            $('#form-update').attr('action', actionUrl);

                            setFormValues('form-update', data)
                            $('#form-update').data('id', data['id'])
                            $('#form-update').attr('action', );
                            $('#modal-update').modal('show')
                        })
                        $('.btn-detail').click(function() {
                            var studentId = $(this).data('id');
                            var data = student.find(student => student.id === studentId)
                            cek = formatDate(data['birth_date'])
                            handleDetail(data)
                            $('#detail-birth_date').html(cek)
                            const detailPhoto = document.getElementById("detail-photo");
                            detailPhoto.src = data['photo'];
                            $('#modal-detail').modal('show')
                        })
                        $('.btn-delete').click(function() {
                            id = $(this).data('id')
                            var actionUrl = `students/${id}`;
                            $('#form-delete').attr('action', actionUrl);
                            $('#modal-delete').modal('show')
                        })
                        $('.btn-alumni').click(function() {
                            id = $(this).data('id')
                            var actionUrl = `/change-alumni/${id}`;
                            $('#form-alumni').attr('action', actionUrl);
                            $('#modal-alumni').modal('show')
                        })
                    } else {
                        $('#data').html(`
                        <tr>
                            <td colspan="10">
                        <div class="d-flex justify-content-center">
                                            <div>
                                                <img src="{{ asset('showNoData.png') }}" alt="">
                                                <h5 class="text-center">Siswa Masih Kosong!!</h5>
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
                                    value="${data.id_data}">
                            </div>
                                <td>
                                    <p class="mb-0 fw-normal mt-2">
                                        ${index + 1}
                                    </p>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal mt-2">
                                        ${data.name}
                                    </p>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal mt-2">
                                        ${data.email}
                                    </p>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal mt-2">
                                        ${data.national_student_id}
                                    </p>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal mt-2">
                                        ${data.phone_number}
                                    </p>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal mt-2">
                                        ${data.classroom}
                                    </p>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-header gap-2">
                                        <div class="">
                                            <a class="btn text-white btn-detail" data-id="${data.id}" style="background-color: #1D9375" data-toggle="tooltip" data-placement="top" title="Detail">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M12 6.5A9.77 9.77 0 0 0 3.18 12c1.65 3.37 5.02 5.5 8.82 5.5s7.17-2.13 8.82-5.5A9.77 9.77 0 0 0 12 6.5zm0 10c-2.48 0-4.5-2.02-4.5-4.5S9.52 7.5 12 7.5s4.5 2.02 4.5 4.5s-2.02 4.5-4.5 4.5z"
                                                        opacity=".3" />
                                                    <path fill="currentColor"
                                                        d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zm0 13A9.77 9.77 0 0 1 3.18 12C4.83 8.63 8.21 6.5 12 6.5s7.17 2.13 8.82 5.5A9.77 9.77 0 0 1 12 17.5zm0-10c-2.48 0-4.5 2.02-4.5 4.5s2.02 4.5 4.5 4.5s4.5-2.02 4.5-4.5s-2.02-4.5-4.5-4.5zm0 7a2.5 2.5 0 0 1 0-5a2.5 2.5 0 0 1 0 5z" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="">
                                            <button data-id="${data.id}"  class="btn btn-warning btn-edit" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 34 35" fill="none">
                                                    <path
                                                        d="M12.3521 27.2832C12.3542 27.2827 12.3563 27.2822 12.3584 27.2817C12.3819 27.2758 12.4061 27.2698 12.431 27.2637C12.7245 27.1914 13.1093 27.0965 13.4624 26.8966C13.8155 26.6967 14.0949 26.4155 14.3079 26.201C14.3276 26.1812 14.3467 26.162 14.3653 26.1434L24.5569 15.9518C24.5757 15.933 24.5946 15.9141 24.6134 15.8953C25.0364 15.4725 25.453 15.0561 25.7512 14.6652C26.0891 14.2223 26.4129 13.6409 26.4129 12.8877C26.4129 12.1345 26.0891 11.5531 25.7512 11.1102C25.453 10.7193 25.0364 10.3029 24.6134 9.88007C24.5946 9.86125 24.5757 9.84241 24.5569 9.82357L24.3138 9.5805L23.2531 10.6412L24.3138 9.5805C24.2949 9.56165 24.2761 9.5428 24.2573 9.52396C23.8344 9.10093 23.418 8.68436 23.0272 8.38613C22.5843 8.04822 22.0029 7.7245 21.2497 7.7245C20.4964 7.7245 19.9151 8.04822 19.4722 8.38613C19.0813 8.68436 18.6649 9.10095 18.242 9.52399C18.2232 9.54282 18.2044 9.56166 18.1855 9.5805L7.99394 19.7721C7.97539 19.7907 7.95615 19.8098 7.93634 19.8295C7.72187 20.0425 7.44071 20.3218 7.24079 20.6749C7.04087 21.028 6.94602 21.4128 6.87366 21.7063C6.86698 21.7335 6.86049 21.7598 6.85412 21.7852L5.91412 25.5452C5.91012 25.5613 5.90592 25.5779 5.90157 25.5952C5.8497 25.8015 5.77587 26.0951 5.75034 26.3561C5.72084 26.6576 5.70967 27.3297 6.25867 27.8787C6.80766 28.4277 7.47975 28.4165 7.78124 28.387C8.04229 28.3615 8.33585 28.2877 8.54214 28.2358C8.55944 28.2314 8.57612 28.2272 8.59212 28.2232L12.3521 27.2832Z"
                                                        stroke="white" stroke-width="3" />
                                                    <path
                                                        d="M17.708 10.7625L21.958 7.9292L26.208 12.1792L23.3747 16.4292L17.708 10.7625Z"
                                                        stroke="white" stroke-width="2.5" />
                                                </svg> </button>
                                        </div>
                                        <div class="">
                                            <button data-id="${data.id}"class="btn btn-danger btn-delete" data-toggle="tooltip" data-placement="top" title="Hapus"
                                                data-bs-toggle="modal" data-bs-target="#modal-delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 34 34" fill="none">
                                                    <path d="M13.4587 20.5418L13.4587 16.2918" stroke="white"
                                                        stroke-width="3" stroke-linecap="round" />
                                                    <path d="M20.5413 20.5418L20.5413 16.2918" stroke="white"
                                                        stroke-width="3" stroke-linecap="round" />
                                                    <path
                                                        d="M4.25 9.20819H29.75V9.20819C27.7603 9.20819 26.7655 9.20819 26.0509 9.68569C25.7415 9.89241 25.4759 10.158 25.2692 10.4674C24.7917 11.182 24.7917 12.1769 24.7917 14.1665V21.9582C24.7917 24.6295 24.7917 25.9651 23.9618 26.795C23.1319 27.6249 21.7963 27.6249 19.125 27.6249H14.875C12.2037 27.6249 10.8681 27.6249 10.0382 26.795C9.20833 25.9651 9.20833 24.6295 9.20833 21.9582V14.1665C9.20833 12.1769 9.20833 11.182 8.73083 10.4674C8.52411 10.158 8.25849 9.89241 7.94912 9.68569C7.23448 9.20819 6.23965 9.20819 4.25 9.20819V9.20819Z"
                                                        stroke="white" stroke-width="3" stroke-linecap="round" />
                                                    <path
                                                        d="M13.4579 4.95882C13.4579 4.95882 14.1663 3.54181 16.9996 3.54181C19.8329 3.54181 20.5413 4.95848 20.5413 4.95848"
                                                        stroke="white" stroke-width="3" stroke-linecap="round" />
                                                </svg> </button>
                                        </div>
                                        <div class="">
                                            <button data-id="${data.id_data}" class="btn-alumni btn btn-primary" data-toggle="tooltip" data-placement="top" title="Jadikan Alumni">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 448 512"><path fill="currentColor" d="M219.3.5c3.1-.6 6.3-.6 9.4 0l200 40C439.9 42.7 448 52.6 448 64s-8.1 21.3-19.3 23.5L352 102.9V160c0 70.7-57.3 128-128 128S96 230.7 96 160v-57.1l-48-9.6v65.1l15.7 78.4c.9 4.7-.3 9.6-3.3 13.3S52.8 256 48 256H16c-4.8 0-9.3-2.1-12.4-5.9s-4.3-8.6-3.3-13.3L16 158.4V86.6C6.5 83.3 0 74.3 0 64c0-11.4 8.1-21.3 19.3-23.5zM111.9 327.7c10.5-3.4 21.8.4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5c65 20.9 112 81.7 112 153.6c0 17-13.8 30.7-30.7 30.7H30.7C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6"/></svg>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>`;
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

            $("#btn-select-change-alumni").click(function() {
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: 'Anda akan mengubah status menjadi alumni. Tindakan ini tidak bisa dibatalkan.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Iya!',
                    cancelButtonText: 'Tidak, batal!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        // User clicked "Yes", send the AJAX request
                        $.ajax({
                            url: '{{ route('change.alumni.select') }}',
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

            $("#btn-select-change-alumni").click(function() {
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: 'Anda akan mengubah status menjadi alumni. Tindakan ini tidak bisa dibatalkan.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Iya!',
                    cancelButtonText: 'Tidak, batal!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        // User clicked "Yes", send the AJAX request
                        $.ajax({
                            url: '{{ route('change.alumni.select') }}',
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

        // Event listener untuk tombol alumni
        $(document).on('click', '.btn-alumni', function() {
            var id = $(this).data('id');
            var actionUrl = `/change-alumni/${id}`;
            $('#form-alumni').attr('action', actionUrl);
            $('#modal-alumni').modal('show');
        });
        getClassroom()

        function formatDate(dateString) {
            const dateParts = dateString.split('-');
            const day = dateParts[2];
            const month = getMonthName(dateParts[1]);
            const year = dateParts[0];
            const formattedDate = `${day} ${month} ${year}`;
            return formattedDate;
        }

        function getMonthName(monthNumber) {
            const months = {
                '01': 'Januari',
                '02': 'Februari',
                '03': 'Maret',
                '04': 'April',
                '05': 'Mei',
                '06': 'Juni',
                '07': 'Juli',
                '08': 'Agustus',
                '09': 'September',
                '10': 'Oktober',
                '11': 'November',
                '12': 'Desember'
            };
            return months[monthNumber];
        }


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
    </script>
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
@endsection
