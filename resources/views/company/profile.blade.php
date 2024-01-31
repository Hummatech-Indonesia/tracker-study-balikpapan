@extends('layouts.app')
@section('content')
    <h5 class="text-dark mb-4" style="font-weight: 550">
        Profil Perusahaan
    </h5>
    <div class="row">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible mt-3 fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <div class="col-lg-4 col-xxl-4 col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('update-profile') }}" method="post" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="d-flex flex-column align-items-center text-center">
                            <h4 class="mb-4">
                                PROFIL
                            </h4>
                            <img id="preview"
                                src="{{ asset(auth()->user()->photo == null ? 'default.jpg' : 'storage/' . auth()->user()->photo) }}"
                                alt="Admin" class="rounded-circle avatar-xl" style="object-fit: cover;overflow: hidden;"
                                height="208" width="208">
                            <div class="mt-3">
                                <h4>{{ auth()->user()->name }}</h4>
                                <p class="text-secondary mb-4">{{ auth()->user()->email }}</p>
                                <input type="file" style="display: none" name="photo" id="photo">
                                <button class="btn btn-warning mb-3 btn-upload text-white" id="btn-upload">Ganti</button>
                                <button class="btn btn-primary mb-3 " type="submit">Upload</button>
                                @error('photo')
                                    <div class="text-danger"> <i>{{ $message }}</i>
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </form>
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
                                    class="form-control  @error('name') is-invalid @enderror" />
                                @error('name')
                                    <div class="text-danger"> <i>{{ $message }}</i>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" value="{{ auth()->user()->email }}" name="email"
                                    class="form-control @error('email')
                                        is-invalid
                                    @enderror" />
                                @error('email')
                                    <div class="text-danger"> <i>{{ $message }}</i>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Bidang Perusahaan</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text"
                                    value="{{ auth()->user()->company->company_field ? auth()->user()->company->company_field : '-' }}"
                                    name="company_field"
                                    class="form-control  @error('company_field') is-invalid @enderror" />
                                @error('company_field')
                                    <div class="text-danger"> <i>{{ $message }}</i>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Website (Opsional)</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text"
                                    value="{{ auth()->user()->company->website ? auth()->user()->company->website : '-' }}"
                                    name="website" class="form-control  @error('website') is-invalid @enderror" />
                                @error('website')
                                    <div class="text-danger"> <i>{{ $message }}</i>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Alamat </h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <textarea name="address" id="" class="form-control  @error('address') is-invalid @enderror">{{ auth()->user()->address }}</textarea>
                                @error('address')
                                    <div class="text-danger"> <i>{{ $message }}</i>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Deskripsi</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <textarea name="description" id="" class="form-control  @error('description') is-invalid @enderror">{{ auth()->user()->company->description ? auth()->user()->company->description : '-' }}</textarea>
                                @error('description')
                                    <div class="text-danger"> <i>{{ $message }}</i>
                                    </div>
                                @enderror
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
        </div>
        <div class="card">
            <form action="{{ route('update-password') }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="text-center mb-3">
                        <h5>Ubah Password</h5>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Password Lama</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="password" placeholder="Masukkan Password Lama" name="current_password"
                                placeholder="" class="form-control  @error('current_password') is-invalid @enderror" />
                            @error('current_password')
                                <div class="text-danger"> <i> {{ $message }} </i>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Password Baru</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="password" placeholder="Masukkan Password Baru" name="password"
                                class="form-control  @error('password') is-invalid @enderror" />
                            @error('password')
                                <div class="text-danger"> <i> {{ $message }} </i>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Konfirmasi Password</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="password" placeholder="Konfirmasi Password" name="password_confirmation"
                                class="form-control  @error('password_confirmation') is-invalid @enderror" />
                            @error('password_confirmation')
                                <div class="text-danger">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex justify-content-end gap-2">
                            <div class="">
                                <button type="submit" class="btn text-white btn-info">
                                    Ubah Password
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        document.getElementById('btn-upload').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('photo').click();
        });

        document.getElementById('photo').addEventListener('change', function() {
            displayImage(this);
        });

        function displayImage(input) {
            var file = input.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
