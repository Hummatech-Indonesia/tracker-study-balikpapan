@extends('layouts.auth.app')
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
                            <img src="{{ asset('school.png') }}" width="500" alt="" style="object-fit: cover" />
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-5 col-xxl-5 auth-cover-right align-items-center justify-content-center">
                    <div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
                        <div class="card-body p-sm-4">
                            <div class="mb-3 text-center">
                                <img src="assets/images/logo-icon.png" width="60" alt="">
                            </div>
                            <div class="text-center mb-4">
                                <img src="{{ asset('logo.png') }}" alt="">
                                <h3 class="text-dark mt-3" style="font-weight: 800">Login</h3>
                                <p class="mb-0 text-dark fs-6">Login Untuk Masuk</p>
                            </div>
                            <div class="form-body">
                                <form class="row g-3">
                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="inputEmailAddress"
                                            placeholder="jhon@example.com">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputChoosePassword" class="form-label">Password</label>
                                        <div class="input-group" id="show_hide_password">
                                            <input type="password" class="form-control border-end-0"
                                                id="inputChoosePassword" value="12345678" placeholder="Enter Password">
                                            <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                    class="bx bx-hide"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-end"> <a href="authentication-forgot-password.html">Forgot
                                            Password ?</a>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="text-white btn btn-default ">Login</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="text-center ">
                                            <p class="mb-0">Don't have an account yet? <a
                                                    href="authentication-signup.html">Sign up here</a>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="login-separater text-center mb-5"> <span>OR SIGN IN WITH</span>
                                <hr>
                            </div>
                            <div class="list-inline contacts-social text-center">
                                <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0 rounded-3"><i
                                        class="bx bxl-facebook"></i></a>
                                <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0 rounded-3"><i
                                        class="bx bxl-twitter"></i></a>
                                <a href="javascript:;" class="list-inline-item bg-google text-white border-0 rounded-3"><i
                                        class="bx bxl-google"></i></a>
                                <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0 rounded-3"><i
                                        class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--end row-->
        </div>
    </div>
@endsection
