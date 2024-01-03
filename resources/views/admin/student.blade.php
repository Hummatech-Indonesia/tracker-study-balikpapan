@extends('layouts.app')
@section('content')
    <h4 style="font-weight: 800">
        Tambah Siswa
    </h4>
    <div class="d-flex justify-content-between">
        <div class="position-relative mb-3 col-lg-3">
            <form action="" method="get">
                <input type="text" value="{{ request()->name }}" name="name" class="form-control search-chat py-2 ps-5" id="search-name"
                    placeholder="Search">
                <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
            </form>
        </div>
        <div class="">
            <button class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleLargeModal"
                style="background-color: #1D9375">Tambah Siswa</button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">
        <form action="{{ route('students.store') }}" method="post">
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
                                <label for="formFile" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="name" id="">
                            </div>
                            <div class="col-6">
                                <p class="mb-0"><label for="formFile" class="form-label">Email</label></p>
                                <input name="email" id="" class="form-control"></input>
                            </div>
                            <div class="col-6 mt-2">
                                <label for="formFile" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="">
                            </div>
                            <div class="col-6 mt-2">
                                <label for="formFile" class="form-label">NISN</label>
                                <input type="text" name="national_student_id" id=""
                                    class="form-control"></input>
                            </div>
                            <div class="col-6 mt-2">
                                <label for="formFile" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="birth_date" id="">
                            </div>
                            <div class="col-6 mt-2">
                                <p>
                                    Jenis Kelamin
                                </p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                                        value="male">
                                    <label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                                        value="female">
                                    <label class="form-check-label" for="inlineRadio1">Perempuan</label>
                                </div>
                            </div>
                            <div class="col-6 mt-2">
                                <label for="formFile" class="form-label">No Telepon</label>
                                <input type="number" class="form-control" name="phone_number" id="">
                            </div>
                            <div class="col-6 mt-2">
                                <label for="formFile" class="form-label">Kelas</label>
                                <select class="form-select mb-3" name="classroom_id" aria-label="Default select example">
                                    <option>Pilih Kelas</option>
                                    @foreach ($classrooms as $classroom)
                                        <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="formFile" class="form-label">Alamat</label>
                                <textarea name="address" id="" class="form-control"></textarea>
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
    <div class="modal fade" id="modal-update" tabindex="-1" aria-hidden="true">
        <form id="form-update" method="post">
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
                                <label for="formFile" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="name" id="">
                            </div>
                            <div class="col-6">
                                <p class="mb-0"><label for="formFile" class="form-label">Email</label></p>
                                <input name="email" id="" class="form-control"></input>
                            </div>
                            <div class="col-6 mt-2">
                                <label for="formFile" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="">
                            </div>
                            <div class="col-6 mt-2">
                                <label for="formFile" class="form-label">NISN</label>
                                <input type="text" name="national_student_id" id=""
                                    class="form-control"></input>
                            </div>
                            <div class="col-6 mt-2">
                                <label for="formFile" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="birth_date" id="">
                            </div>
                            <div class="col-6 mt-2">
                                <p>
                                    Jenis Kelamin
                                </p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                                        value="male">
                                    <label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                                        value="female">
                                    <label class="form-check-label" for="inlineRadio1">Perempuan</label>
                                </div>
                            </div>
                            <div class="col-6 mt-2">
                                <label for="formFile" class="form-label">No Telepon</label>
                                <input type="number" class="form-control" name="phone_number" id="">
                            </div>
                            <div class="col-6 mt-2">
                                <label for="formFile" class="form-label">Kelas</label>
                                <select class="form-select mb-3" name="classroom_id" aria-label="Default select example">
                                    <option>Pilih Kelas</option>
                                    @foreach ($classrooms as $classroom)
                                        <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="formFile" class="form-label">Alamat</label>
                                <textarea name="address" id="" class="form-control"></textarea>
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
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
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
                                No Telepon
                            </td>
                            <td>
                                Jenis Kelamin
                            </td>
                            <td>
                                Aksi
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($students as $student)
                            <tr>
                                <td>
                                    <p class="mb-0 fw-normal mt-2">
                                        {{ $loop->iteration }}
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
                                    <p class="mb-0 fw-normal mt-2">
                                        {{ $student->user->phone_number }}
                                    </p>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal mt-2">
                                        {{ $student->gender == 'male' ? 'Laki - Laki' : 'Perempuan' }}
                                    </p>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-header gap-2">
                                        <div class="">
                                            <a href="{{ route('detail.job.vacancy') }}" class="btn text-white"
                                                style="background-color: #1D9375">
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
                                            <button class="btn btn-warning btn-edit" data-id="{{ $student->user->id }}" id="btn-edit-{{ $student->user->id }}" data-name="{{ $student->user->name }}" data-email="{{ $student->user->email }}" data-national_student_id={{ $student->national_student_id }} data-gender="{{ $student->gender }}" data-birth_date="{{ $student->birth_date }}" data-phone_number="{{ $student->user->phone_number }}" data-classroom_id="{{ $student->classroom->id }}" data-address="{{ $student->user->address }}">
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
                                            <button class="btn btn-danger btn-delete" data-id="{{ $student->user->id }}"
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
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    <div class="d-flex justify-content-center" style="min-height:16rem">
                                        <div class="my-auto">
                                            <img src="{{ asset('no-data.png') }}" width="300" height="300" />
                                            <h4 class="text-center mt-4">Tidak Ada Paket!!</h4>
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
    </div>
    <x-delete-modal-component />
@endsection
@section('script')
    <script>
        $('.btn-edit').click(function() {
            const formData = getDataAttributes($(this).attr('id'))
            var actionUrl = `students/${formData['id']}`;
            $('#form-update').attr('action', actionUrl);

            setFormValues('form-update', formData)
            $('#form-update').data('id', formData['id'])
            $('#form-update').attr('action', );
            $('#modal-update').modal('show')
        })
        $('.btn-delete').click(function() {
            id = $(this).data('id')
            var actionUrl = `students/${id}`;
            $('#form-delete').attr('action', actionUrl);
            $('#modal-delete').modal('show')
        })
    </script>
@endsection
