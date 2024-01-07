@extends('layouts.app')
@section('content')
    <h3>
        Status Siswa & Alumni
    </h3>
    <div class="d-flex justify-content-between mb-2">
        <div class="d-flex justify-content-header gap-3">
            <div class="position-relative mb-3 col-lg-8">
                <input type="text" class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
                <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
            </div>
            <div class="col-lg-5">
                <select name="" id="" class="form-select py-2">
                    <option value="10">Tampilkan 10</option>
                    <option value="20">Tampilkan 20 </option>
                    <option value="">Tampilkan 30</option>
                    <option value="10">Tampilkan 40</option>
                    <option value="10">Tampilkan 50</option>
                  
                </select>
            </div>
        </div>
        <div class="">
            <button class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleModal"
                style="background-color: #5D87FF">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 18 19" fill="none">
                    <path d="M9 2L9 17" stroke="white" stroke-width="3" stroke-linecap="round" />
                    <path d="M1.5 9.5L16.5 9.5" stroke="white" stroke-width="3" stroke-linecap="round" />
                </svg>
                Tambah Kelas</button>
        </div>
    </div>
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
                        Status
                    </td>
                    <td>
                        Aksi
                    </td>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>
                            <p class="mb-0 fw-normal mt-2">
                                1
                            </p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal mt-2">
                                Anjasmoro
                            </p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal mt-2">
                                pokokok@gmail.com
                            </p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal mt-2">
                                89767676709
                            </p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal mt-2">
                                RPL 2
                            </p>
                        </td>
                        <td>
                            <p class="mb-0 fs-6 mt-2">
                                <span class="badge bg-light-warning text-warning">Siswa</span>
                            </p>
                        </td>
                        <td>
                           <button class="btn text-white btn-primary">Jadikan Alumni</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="mb-0 fw-normal mt-2">
                                1
                            </p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal mt-2">
                                Anjasmoro
                            </p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal mt-2">
                                pokokok@gmail.com
                            </p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal mt-2">
                                89767676709
                            </p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal mt-2">
                                RPL 2
                            </p>
                        </td>
                        <td>
                            <p class="mb-0 fs-6 mt-2">
                                <span class="badge bg-light-primary text-primary">Alumni</span>
                            </p>
                        </td>
                        <td>
                           <button class="btn text-white btn-warning">Jadikan Siswa</button>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div>
@endsection