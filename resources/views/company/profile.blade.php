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
                        <img src="{{ asset(auth()->user()->photo == null ? 'default.jpg' : 'storage/' . auth()->user()->photo) }}"
                            alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                        <div class="mt-3">
                            <h4>{{ auth()->user()->name }}</h4>
                            <p class="text-secondary mb-4">{{ auth()->user()->email }}</p>
                            <button class="btn btn-primary mb-3">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('update-company-profile', ['user' => auth()->user()->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nama Perusahaan</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" value="{{ auth()->user()->name }}" name="name" placeholder=""
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" value="{{ auth()->user()->email }}" name="email"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Bidang Perusahaan</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" value="{{ auth()->user()->company->company_field ? auth()->user()->company->company_field : '-' }}" name="company_field" class="form-control" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Website (Opsional)</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" value="{{ auth()->user()->company->website ? auth()->user()->company->website : '-' }}" name="website" class="form-control" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Alamat </h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <textarea name="address" id="" class="form-control">{{ auth()->user()->address }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Deskripsi </h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <textarea name="description" id="" class="form-control">{{ auth()->user()->company->description ? auth()->user()->company->description : '-' }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-end gap-2">
                                <div class="">
                                    <button type="submit" class="btn text-white btn-info">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <h5>Ubah Password</h5>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Password Lama</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="password" placeholder="" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Password Baru</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="password" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Konfirmasi Password</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="password" class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex justify-content-end gap-2">
                            <div class="">
                                <button class="btn text-white btn-info">
                                    Ubah Password
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
