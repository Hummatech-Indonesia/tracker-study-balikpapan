@extends('layouts.app')
@section('content')
    <h5 class="text-dark" style="font-weight: 550">
        Pelamar Kerja
    </h5>
    <div class="d-flex justify-content-header gap-3">
        <div class="position-relative mb-3">
            <input type="text" class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
            <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
        </div>
        <div class="col-lg-2">
            <select name="" id="" class="form-select py-2">
                <option value="">Filter</option>
            </select>
        </div>
    </div>
    <div class="table-responsiv">
        <table class="table">
            <thead>
                <tr>
                    <td>
                        No
                    </td>
                    <td>
                        Nama Pelamar
                    </td>
                    <td>
                        Lowongan Yang di Lamar
                    </td>
                    <td>
                        Email
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
                <tr>
                    <td>
                        <p class="mt-2" style="font-weight:500">
                            1
                        </p>
                    </td>
                    <td>
                        <div class="d-flex justify-content-header gap-2">
                            <div class="">
                                <img src="{{ asset('assets-admin/images/avatars/avatar-2.png') }}" class="user-img"
                                    alt="user avatar">
                            </div>
                            <p class="mt-2" style="font-weight:500">
                                Nindya Yunita
                            </p>
                        </div>
                    </td>
                    <td>
                        <p class="mt-2" style="font-weight:500">
                            Kepala PT Kai Indonesia
                        </p>
                    </td>
                    <td>
                        <p class="mt-2" style="font-weight:500">
                            nindya@gmail.com
                        </p>
                    </td>
                    <td>
                        <p class="mt-2" style="font-weight:500">
                            Laki Laki
                        </p>
                    </td>
                    <td>
                        <div class="d-flex justify-content-header gap-2">
                            <div class="">
                                <button class="btn btn-sm btn-success">Terima</button>
                            </div>
                            <div class="">
                                <button class="btn btn-sm btn-danger">Tolak</button>
                            </div>
                            <div class="">
                                <button class="btn text-white btn-sm btn-info">Detail</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
