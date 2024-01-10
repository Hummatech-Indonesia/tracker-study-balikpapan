@extends('layouts.auth.app')
@section('style')
    <style>
        .btn:hover {
            color: var(--bs-btn-hover-color);
        }
    </style>
@endsection
@section('content')
    <div class="section-authentication-cover">
        <div class="">
            <div class="row g-0">
                <div
                    class="col-12 col-xl-7 col-xxl-7 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">
                    <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-center mt-4">
                                <div class="">
                                    <h2 class="text-white " style="font-weight: 800">
                                        Selamat Datang
                                    </h2>
                                </div>
                            </div>
                            <div class="mt-1">
                                <h5 class="text-white text-center" style="font-weight: 00">
                                    TRACER STUDY SMKN 2 PENAJAM
                                </h5>
                            </div>
                            <img src="{{ asset('High School-cuate.png') }}" width="550" alt=""
                                style="object-fit: cover" />
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-5 col-xxl-5 align-items-center justify-content-center"
                    style="background-color: #fff">
                    <div class="card rounded-0 m-5 shadow-none bg-transparent mb-0">
                        <div class="card-body p-sm-4">
                            <div class="mb-3 text-center">
                                <img src="assets/images/logo-icon.png" width="60" alt="">
                            </div>
                            <div class="text-center mb-4">
                                <img src="{{ asset('logo.png') }}" alt="">
                                <h3 class="text-dark mt-3" style="font-weight: 800">Masuk</h3>
                                <p class="mb-0 text-dark fs-6">Masukkan Email dan Kata Sandi!!</p>
                            </div>
                            <div class="form-body">
                                @if ($errors->any())
                                    <div>
                                        @foreach ($errors->all() as $error)
                                            <p class="text-danger">{{ $error }}</p>
                                        @endforeach
                                    </div>
                                @endif
                                <form action="{{ route('login') }}" method="post" class="row g-3">
                                    @csrf
                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">Email</label>
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            class="form-control @error('email') is-invalid @enderror" id="inputEmailAddress"
                                            placeholder="Masukkan Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="inputChoosePassword" class="form-label">Password</label>
                                        <div class="input-group" id="show_hide_password">
                                            <input type="password" name="password"
                                                class="form-control border-end-0 @error('password') is-invalid @enderror"
                                                id="inputChoosePassword" placeholder="Masukkan Password">
                                            <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                    class="bx bx-hide"></i></a>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Ingat Saya</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-end"> <a href="/forgot-password">Lupa
                                            Password ?</a>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="text-white btn btn-default ">Login</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="text-center ">
                                            <p class="mb-0">Belum Mempunyai Akun? <span class="fw-semibold">Daftar di
                                                    bawah</span>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex justify-content-end">
                                <a href="{{ route('register.company') }}">
                                    <img width="100%" class="rounded-3" src="{{ asset('perusahaan.png') }}" alt=""
                                        srcset="">
                                    <h6 class="text-center mb-5 mt-2">Perusahaan</h6>
                                </a>
                            </div>
                            <div class="col d-flex justify-content-start">
                                <a href="{{ route('register') }}">
                                    <img width="100%" src="{{ asset('siswa.png') }}" alt="" class="rounded-3">
                                    <h6 class="text-center mb-5 mt-2">Siswa</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--end row-->
        </div>
    </div>
@endsection
