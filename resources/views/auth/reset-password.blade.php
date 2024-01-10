@extends('layouts.auth.app')
@section('content')
    <div class="section-authentication-cover">
        <div class="">
            <div class="row g-0">

                <div
                    class="col-12 col-xl-7 col-xxl-7 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">

                    <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
                        <div class="card-body">
                            <h2 class="text-center text-white" style="font-weight: 700">
                                Daftar Untuk Masuk
                            </h2>
                            <h5 class="text-center text-white mb-5 mt-2" style="font-weight: 00">
                                TRACER STUDY SMKN 2 PENAJAM
                            </h5>
                            <img src="{{ asset('High School-amico.png') }}" class="mt-4" width="500" alt="" />
                        </div>
                    </div>

                </div>

                <div class="col-12 col-xl-5 col-xxl-5 auth-cover-right align-items-center justify-content-center">
                    <div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
                        <div class="card-body p-sm-5">
                            <div class="">
                                <div class=" text-center">
                                    <img src="assets/images/logo-icon.png" width="60" alt="" />
                                </div>
                                <div class="text-center">
                                    <img src="{{ asset('logo.png') }}" alt="">
                                    <h3 class="text-dark mt-3" style="font-weight: 800">Reset Password</h3>
                                    <p class="mb-0 text-dark fs-6 mb-2">Masukkan password baru</p>
                                </div>
                                <div class="form-body">
                                    <form action="{{ route('reset.password.user', $userId) }}" method="POST"
                                        class="row g-3">
                                        @csrf
                                        <div class="col-12">
                                            <label for="inputSelectCountry" class="form-label">Password</label>
                                            <input type="password" name="password" id="email" class="form-control">
                                            @error('password')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputSelectCountry" class="form-label">Konfirmasi Password</label>
                                            <input type="password" name="password_confirmation" id="email-confirmation"
                                                class="form-control">
                                            @error('password_confirmation')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-default">Kirim</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--end row-->
        </div>
    </div>
@endsection
