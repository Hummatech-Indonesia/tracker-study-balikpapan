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
                            <img src="{{ asset('company.png') }}" class="mt-4" width="500" alt="" />
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
                                    <h3 class="text-dark mt-3" style="font-weight: 800">Register</h3>
                                    <p class="mb-0 text-dark fs-6 mb-2">Daftarkan Anda Sebagai Perusahaan di SMKN 2 PENAJAM
                                    </p>
                                </div>
                                <div class="form-body">
                                    <form action="{{ route('register.company') }}" method="POST" class="row g-3">
                                        @csrf
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <label for="inputUsername" class="form-label">Nama Perusahaan</label> <label for="" class="text-danger">*</label>
                                            <input type="text" name="name" class="form-control" id="inputUsername"
                                                value="{{ old('name') }}" placeholder="Masukan Nama">
                                            @error('name')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <label for="inputEmailAddress" class="form-label">Alamat Email</label> <label for="" class="text-danger">*</label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ old('email') }}" id="inputEmailAddress"
                                                placeholder="Masukan alamat email">
                                            @error('email')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <label for="inputChoosePassword" class="form-label">Password</label> <label for="" class="text-danger">*</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" name="password" class="form-control border-end-0"
                                                    value="{{ old('password') }}" id="inputChoosePassword"
                                                    placeholder="Masukan Password">
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                        class='bx bx-hide'></i></a>
                                                    </div>
                                                    @error('password')
                                                        <div class="text-danger">{{ $message }}
                                                        </div>
                                                    @enderror
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <label for="inputChoosePassword" class="form-label">Konfirmasi Password</label> <label for="" class="text-danger">*</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" name="password_confirmation"
                                                    value="{{ old('password_confirmation') }}"
                                                    class="form-control border-end-0" id="inputChoosePassword"
                                                    placeholder="Masukan Konfirmasi Password">
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                        class='bx bx-hide'></i></a>
                                                @error('password_confirmation')
                                                    <div class="text-danger">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">No Telephone</label> <label for="" class="text-danger">*</label>
                                            <input type="number" name="phone_number" class="form-control border-end-0"
                                                value="{{ old('phone_number') }}" placeholder="Masukan No telephone">
                                            @error('phone_number')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputSelectCountry" class="form-label">Deskripsi</label> <label for="" class="text-danger">*</label>
                                            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input name="checked" class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckChecked">
                                                <a class="form-check-label" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal" style="cursor: pointer; color:black"
                                                    for="flexSwitchCheckChecked">Kebijakan
                                                    Privasi</a>
                                                @error('checked')
                                                    <div class="text-danger">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-default">Daftar</button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-center ">
                                                <p class="mb-0">Sudah Mempunyai akun? <a href="/login">Masuk</a></p>
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
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <p style="font-size:24px;color:black;text-align:center;line-height:normal;font-weight:500;">
                            Kebijakan Privasi</p>
                        <p>Kebijakan Privasi Tracer Study</p>
                        <p>Terakhir Diperbarui: 12 Januari 2024</p>
                        <div>
                            <ol
                                style="
                         padding-left: 0px;
                         margin-left: 18px;
                     ">
                                <li>
                                    <p style="margin: 0">Informasi yang kami kumpulkan:</p>
                                    <ul>
                                        <li>Kami mengumpulkan informasi pribadi dan otomatis untuk menyediakan dan
                                            meningkatkan
                                            layanan. </li>
                                    </ul>
                                </li>
                                <li>
                                    <p style="margin: 0">Penggunaan Informasi:</p>
                                    <ul>
                                        <li>Informasi digunakan untuk menyampaikan layanan, pembaruan, dan keperluan
                                            analisis internal. </li>
                                    </ul>
                                </li>
                                <li>
                                    <p style="margin: 0">Pemberian Informasi kepada Pihak Ketiga:</p>
                                    <ul>
                                        <li>Informasi pribadi tidak akan dijual atau disewakan kepada pihak ketiga tanpa
                                            persetujuan, kecuali jika diperlukan oleh hukum. </li>
                                    </ul>
                                </li>
                                <li>
                                    <p style="margin: 0">Keamanan Informasi:</p>
                                    <ul>
                                        <li> Kami menerapkan langkah-langkah keamanan untuk melindungi informasi yang
                                            dikumpulkan. </li>
                                    </ul>
                                </li>
                            </ol>

                        </div>
                    </div>
                    <div class="modal-footer" style="display:flex; justify-content:center">
                        <button type="button" class="btn px-5" style="background-color: #5D87FF; color:white;"
                            data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Registrasi berhasil, tunggu email verifikasi untuk langkah selanjutnya. Pastikan untuk memeriksa inbox atau spam Anda. Terima kasih!!',
            }).then((result) => {
                if (result.isConfirmed || result.isDismissed) {
                    window.location.href = '{{ route('login') }}';
                }
            });
        </script>
    @endif
@endsection
