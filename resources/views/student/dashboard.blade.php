@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card w-100">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white card-title">Informasi Data Diri</h4>
                </div>
                <div class="card-body">
                    <p class="card-subtitle mb-7"></p>
                    <div class="position-relative">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset(Auth::user()->photo ? 'storage/' . Auth::user()->photo : 'default.jpg') }}"
                                class="rounded-circle user-profile mb-2" style="object-fit: cover" id="detail-photo"
                                width="150" alt="photo-siswa" height="150" />
                        </div>
                        <div class="text-center">
                            <h3 class="username">{{ Auth::user()->name }}</h3>
                        </div>
                        <div class="ps-auto">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><strong>NISN:</strong></td>
                                        <td>{{ Auth::user()->student->national_student_id }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Jurusan :</strong></td>
                                        <td><span
                                                class="religion">{{ Auth::user()->student->classroom->major->name }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Kelas:</strong></td>
                                        <td><span class="classroom">{{ Auth::user()->student->classroom->name }}</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Jenis Kelamin:</strong></td>
                                        <td><span class="gender">{{ Auth::user()->student->gender }}</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tanggal Lahir :</strong></td>
                                        <td><span class="religion">
                                                {{ \Carbon\Carbon::parse(Auth::user()->student->birth_date)->locale('id_ID')->isoFormat('DD MMMM Y') }}</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="">
                    <div class="card radius-10 border-start border-0 border-4 border-primary">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-dark" style="font-weight: 600">Jumlah Potofolio
                                        Kamu</p>
                                    <h4 class="my-1 text-success mb-4">{{ $countPortofolio }}</h4>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-light-success text-white ms-auto"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"
                                        fill="none">
                                        <path
                                            d="M13.0625 22C16.4798 22 19.25 19.2298 19.25 15.8125C19.25 12.3952 16.4798 9.625 13.0625 9.625C9.64524 9.625 6.875 12.3952 6.875 15.8125C6.875 19.2298 9.64524 22 13.0625 22Z"
                                            fill="#1D9375" />
                                        <path
                                            d="M20.1094 25.4375C17.6894 24.2086 15.0184 23.7188 13.0625 23.7188C9.23141 23.7188 1.375 26.0683 1.375 30.7656V34.375H14.2656V32.994C14.2656 31.3612 14.9531 29.7241 16.1562 28.3594C17.1162 27.2697 18.4602 26.2582 20.1094 25.4375Z"
                                            fill="#1D9375" />
                                        <path
                                            d="M29.2188 24.75C24.744 24.75 15.8125 27.5138 15.8125 33V37.125H42.625V33C42.625 27.5138 33.6935 24.75 29.2188 24.75Z"
                                            fill="#1D9375" />
                                        <path
                                            d="M29.2188 22C33.3954 22 36.7812 18.6142 36.7812 14.4375C36.7812 10.2608 33.3954 6.875 29.2188 6.875C25.0421 6.875 21.6562 10.2608 21.6562 14.4375C21.6562 18.6142 25.0421 22 29.2188 22Z"
                                            fill="#1D9375" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="card radius-10 border-start border-0 border-4 border-warning">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-dark" style="font-weight: 600">Jumlah Potofolio
                                        Kamu</p>
                                    <h4 class="my-1 text-primary mb-4">4805</h4>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-light-primary text-white ms-auto"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44"
                                        fill="none">
                                        <path
                                            d="M22 4.125C12.1284 4.125 4.125 12.1284 4.125 22C4.125 31.8716 12.1284 39.875 22 39.875C31.8716 39.875 39.875 31.8716 39.875 22C39.875 12.1284 31.8716 4.125 22 4.125ZM30.25 24.75H22C21.6353 24.75 21.2856 24.6051 21.0277 24.3473C20.7699 24.0894 20.625 23.7397 20.625 23.375V11C20.625 10.6353 20.7699 10.2856 21.0277 10.0277C21.2856 9.76987 21.6353 9.625 22 9.625C22.3647 9.625 22.7144 9.76987 22.9723 10.0277C23.2301 10.2856 23.375 10.6353 23.375 11V22H30.25C30.6147 22 30.9644 22.1449 31.2223 22.4027C31.4801 22.6606 31.625 23.0103 31.625 23.375C31.625 23.7397 31.4801 24.0894 31.2223 24.3473C30.9644 24.6051 30.6147 24.75 30.25 24.75Z"
                                            fill="#5D87FF" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
