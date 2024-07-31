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
                                TRACER STUDY Hummatech
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
                                    <p class="mb-0 text-dark fs-6 mb-2">Daftarkan Anda Sebagai Lulusan Hummatech</p>
                                </div>
                                <div class="form-body">
                                    <form action="{{ route('register') }}" method="POST" class="row g-3">
                                        @csrf
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <label for="inputUsername" class="form-label">Nama</label> <label for=""
                                                class="text-danger">*</label>
                                            <input type="text" name="name" class="form-control" id="inputUsername"
                                                value="{{ old('name') }}" placeholder="Masukan Nama Anda">
                                            @error('name')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <label for="inputEmailAddress" class="form-label">Email</label> <label
                                                for="" class="text-danger">*</label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ old('email') }}" id="inputEmailAddress"
                                                placeholder="Masukan Email Anda">
                                            @error('email')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <label for="inputChoosePassword" class="form-label">Password</label> <label
                                                for="" class="text-danger">*</label>
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
                                            <label for="inputChoosePassword" class="form-label">Konfirmasi Password</label>
                                            <label for="" class="text-danger">*</label>
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
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <label for="inputChoosePassword" class="form-label">No Telephone</label> <label
                                                for="" class="text-danger">*</label>
                                            <input type="number" name="phone_number" class="form-control border-end-0"
                                                value="{{ old('phone_number') }}" placeholder="Masukkan No. HP Anda">
                                            @error('phone_number')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <label for="inputSelectCountry" class="form-label">NISN</label>
                                            <input type="number" name="national_student_id"
                                                value="{{ old('national_student_id') }}"
                                                class="form-control border-end-0" placeholder="Masukkan NISN Anda">
                                            @error('national_student_id')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputSelectCountry" class="form-label">Alamat</label> <label
                                                for="" class="text-danger">*</label>
                                            <textarea name="address" id="address" class="form-control">{{ old('address') }}</textarea>
                                            @error('address')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputSelectCountry" class="form-label">Tanggal Lahir</label>
                                            <label for="" class="text-danger">*</label>
                                            <input type="date" name="birth_date" class="form-control border-end-0"
                                                value="{{ old('birth_date') }}" placeholder="Enter No telephone">
                                            @error('birth_date')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputSelectCountry" class="form-label">Jenis Kelamin</label>
                                            <label for="" class="text-danger">*</label><br>
                                            <input class="form-check-input me-1" type="radio" name="gender"
                                                value="male" {{ old('gender') == 'male' ? 'checked' : '' }}
                                                id="laki-laki">Laki Laki<br>
                                            <input class="form-check-input me-1" type="radio" name="gender"
                                                value="female" {{ old('gender') == 'female' ? 'checked' : '' }}
                                                id="perempuan">Perempuan
                                            @error('gender')
                                                <div class="text-danger">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputSelectCountry" class="form-label">Pilih Role</label> <label
                                                for="" class="text-danger">*</label><br>
                                            <input class="form-check-input me-1" type="radio" name="role"
                                                value="student" {{ old('role') == 'student' ? 'checked' : '' }}
                                                id="flexRadioDefault2" onclick="handleRoleChange()">Siswa
                                            <input class="form-check-input me-1" type="radio" name="role"
                                                value="alumni" {{ old('role') == 'alumni' ? 'checked' : '' }}
                                                id="flexRadioDefault1" onclick="handleRoleChange()">Alumni<br>
                                            @error('role')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12" id="classroom" style="display: none;">
                                            <label class="form-check-label label-classroom mb-2"
                                                for="flexSwitchCheckChecked"></label>
                                            <label for="" class="text-danger">*</label>
                                            <select name="classroom_id" class="form-select"
                                                aria-label="Default select example">
                                                <option value="">Pilih Kelas</option>
                                                @foreach ($classrooms as $classroom)
                                                    <option value="{{ $classroom->id }}"
                                                        {{ $classroom->id == old('classroom_id') ? 'selected' : '' }}>
                                                        {{ $classroom->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('classroom_id')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12" id="school_year" style="display: none;">
                                            <label class="form-check-label mb-2" for="flexSwitchCheckChecked">Tahun
                                                Lulus</label> <label for="" class="text-danger">*</label>
                                            <select name="school_year_id" class="form-select"
                                                aria-label="Default select example">
                                                <option value="">Pilih Tahun Lulus</option>
                                                @foreach ($schoolYears as $schoolYear)
                                                    <option value="{{ $schoolYear->id }}"
                                                        {{ $schoolYear->id == old('school_year_id') ? 'selected' : '' }}>
                                                        {{ $schoolYear->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('school_year_id')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" name="checked" value="1"
                                                    type="checkbox"id="flexSwitchCheckChecked">
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
    <script>
        function handleRoleChange() {
            const alumniRadio = document.getElementById("flexRadioDefault1");
            const classroomDiv = document.getElementById("classroom");
            const schoolYearDiv = document.getElementById("school_year");

            if (alumniRadio.checked) {
                $('.label-classroom').html('Lulus dari Kelas');
                classroomDiv.style.display = "block";
                schoolYearDiv.style.display = "block";
            } else {
                $('.label-classroom').html('Kelas');
                classroomDiv.style.display = "block";
                schoolYearDiv.style.display = "none";
            }
        }
    </script>
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
