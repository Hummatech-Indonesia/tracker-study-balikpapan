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
                                    <h3 class="text-dark mt-3" style="font-weight: 800">Register</h3>
                                    <p class="mb-0 text-dark fs-6 mb-2">Daftarkan Anda Sebagai Lulusan SMKN 2 PENAJAM</p>
                                </div>
                                <div class="form-body">
                                    <form action="{{ route('register') }}" method="POST" class="row g-3">
                                        @csrf
                                        <div class="col-6">
                                            <label for="inputUsername" class="form-label">Nama</label>
                                            <input type="text" name="name" class="form-control" id="inputUsername"
                                                value="{{ old('name') }}" placeholder="Jhon">
                                            @error('name')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ old('email') }}" id="inputEmailAddress"
                                                placeholder="example@user.com">
                                            @error('email')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label for="inputChoosePassword" class="form-label">Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" name="password" class="form-control border-end-0"
                                                    value="{{ old('password') }}" id="inputChoosePassword"
                                                    placeholder="Enter Password">
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                        class='bx bx-hide'></i></a>
                                                @error('password')
                                                    <div class="text-danger">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="inputChoosePassword" class="form-label">Konfirmasi Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" name="password_confirmation"
                                                    value="{{ old('password_confirmation') }}"
                                                    class="form-control border-end-0" id="inputChoosePassword"
                                                    placeholder="Enter Password">
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                        class='bx bx-hide'></i></a>
                                                @error('password_confirmation')
                                                    <div class="text-danger">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="inputChoosePassword" class="form-label">No Telephone</label>
                                            <input type="number" name="phone_number" class="form-control border-end-0"
                                                value="{{ old('phone_number') }}" placeholder="Enter No telephone">
                                            @error('phone_number')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label for="inputSelectCountry" class="form-label">NISN</label>
                                            <input type="number" name="national_student_id"
                                                value="{{ old('national_student_id') }}" class="form-control border-end-0"
                                                placeholder="Enter No telephone">
                                            @error('national_student_id')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputSelectCountry" class="form-label">Alamat</label>
                                            <textarea name="address" id="address" class="form-control">{{ old('address') }}</textarea>
                                            @error('address')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputSelectCountry" class="form-label">Tanggal Lahir</label>
                                            <input type="date" name="birth_date" class="form-control border-end-0"
                                                value="{{ old('date') }}" placeholder="Enter No telephone">
                                            @error('birth_date')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputSelectCountry" class="form-label">Jenis Kelamin</label><br>
                                            <input class="form-check-input me-1" type="radio" name="gender"
                                                value="male" id="flexRadioDefault1">Laki Laki<br>
                                            <input class="form-check-input me-1" type="radio" name="gender"
                                                value="female" id="flexRadioDefault1">Perempuan
                                            @error('gender')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Kelas</label>
                                            <select name="classroom_id" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>Pilih Kelas</option>
                                                @foreach ($classrooms as $classroom)
                                                    <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('classroom_id')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputSelectCountry" class="form-label">Pilih Role</label><br>
                                            <input class="form-check-input me-1" type="radio" name="role"
                                                value="alumni" id="flexRadioDefault1">Alumni<br>
                                            <input class="form-check-input me-1" type="radio" name="role"
                                                value="student" id="flexRadioDefault1">Siswa
                                            @error('role')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckChecked">
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Kebijakan
                                                    Privasi</label>
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
    </div>
@endsection
@section('script')
@if (session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Registrasi berhasil, tunggu email verifikasi untuk langkah selanjutnya. Pastikan untuk memeriksa kotak masuk Anda. Terima kasih!!',
    }).then((result) => {
        if (result.isConfirmed || result.isDismissed) {
            window.location.href = '{{ route('login') }}';
        }
    });
</script>
@endif
@endsection
