@extends('layouts.app')
@section('content')
<h5 class="text-dark mb-4" style="font-weight: 550">
    Profil Perusahaan
</h5>
<div class="row">
    <div class="col-lg-4 col-xxl-4 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <h4 class="mb-4">
                        PROFIL
                    </h4>
                    <img src="{{ asset('kai.png') }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                    <div class="mt-3">
                        <h4>PT KAI INDONESIA</h4>
                        <p class="text-secondary mb-4">AdminKAI@gmail.com</p>
                        <button class="btn btn-primary mb-3">Upload</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Nama Perusahaan</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control"  />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control"  />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Bidang Perusahaan</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Website (Opsional)</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control"/>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Alamat </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control"  />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Deskripsi </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <textarea name="" id="" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-end gap-2">
                        <div class="">
                            <button class="btn  btn-success">
                                Ubah Password
                            </button>
                        </div>
                        <div class="">
                            <button class="btn text-white btn-info">
                                Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
