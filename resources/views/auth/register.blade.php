@extends('layouts.auth.app')
@section('content')
    <div class="section-authentication-cover">
        <div class="">
            <div class="row g-0">

                <div
                    class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">

                    <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
                        <div class="card-body">
                            <img src="{{ asset('assets-admin/images/login-images/register-cover.svg') }}" class="img-fluid auth-img-cover-login"
                                width="550" alt="" />
                        </div>
                    </div>

                </div>

                <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
                    <div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
                        <div class="card-body p-sm-5">
                            <div class="">
                                <div class=" text-center">
                                    <img src="assets/images/logo-icon.png" width="60" alt="" />
                                </div>
                                <div class="text-center">
                                    <img src="{{ asset('logo.png') }}" alt="">
                                    <h3 class="text-dark mt-3" style="font-weight: 800">Register</h3>
                                    <p class="mb-0 text-dark fs-6">Daftarkan Akun Anda</p>
                                </div>
                                <div class="form-body">
                                    <form class="row g-3">
                                        <div class="col-12">
                                            <label for="inputUsername" class="form-label">Username</label>
                                            <input type="email" class="form-control" id="inputUsername"
                                                placeholder="Jhon">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="inputEmailAddress"
                                                placeholder="example@user.com">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" class="form-control border-end-0"
                                                    id="inputChoosePassword" value="12345678" placeholder="Enter Password">
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                        class='bx bx-hide'></i></a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputSelectCountry" class="form-label">Country</label>
                                            <select class="form-select" id="inputSelectCountry"
                                                aria-label="Default select example">
                                                <option selected>India</option>
                                                <option value="1">United Kingdom</option>
                                                <option value="2">America</option>
                                                <option value="3">Dubai</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                                <label class="form-check-label" for="flexSwitchCheckChecked">I read and
                                                    agree to Terms & Conditions</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Sign up</button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-center ">
                                                <p class="mb-0">Already have an account? <a
                                                        href="authentication-signin.html">Sign in here</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="login-separater text-center mb-5"> <span>OR SIGN UP WITH EMAIL</span>
                                    <hr />
                                </div>
                                <div class="list-inline contacts-social text-center">
                                    <a href="javascript:;"
                                        class="list-inline-item bg-facebook text-white border-0 rounded-3"><i
                                            class="bx bxl-facebook"></i></a>
                                    <a href="javascript:;"
                                        class="list-inline-item bg-twitter text-white border-0 rounded-3"><i
                                            class="bx bxl-twitter"></i></a>
                                    <a href="javascript:;"
                                        class="list-inline-item bg-google text-white border-0 rounded-3"><i
                                            class="bx bxl-google"></i></a>
                                    <a href="javascript:;"
                                        class="list-inline-item bg-linkedin text-white border-0 rounded-3"><i
                                            class="bx bxl-linkedin"></i></a>
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
