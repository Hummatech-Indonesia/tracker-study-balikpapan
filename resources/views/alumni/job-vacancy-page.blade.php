@extends('layouts.app')
@section('content')
<h5 class="text-dark" style="font-weight: 500">
    Lowongan Pekerjaan
</h5>
<div class="position-relative mb-3 col-lg-3 mt-3">
    <input type="text" class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
    <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
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
                            Nama Perusahaan
                        </td>
                        <td>
                            Tanggal Melamar
                        </td>
                        <td>
                            Status
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            1.
                        </td>
                        <td>
                            <div class="d-flex justify-content-header">
                                <div class="">
                                    <img  src="{{ asset(auth()->user()->photo == null ? 'default.jpg' : 'storage/'. auth()->user()->photo) }}" class="user-img"
                                    alt="user avatar">
                                </div>
                                <div class="">
                                    <p class="text-dark mt-2 px-2">
                                        PT Hummatech
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td>
                            10 September 2023
                        </td>
                        <td>
                            <div class="bg-light-primary col-5">
                                <p class="text-primary py-1 mb-0 text-center">
                                    Diterima Interview
                                </p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection