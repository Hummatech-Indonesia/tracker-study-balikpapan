@extends('layouts.app')
@section('content')
    <h5 class="text-dark mb-4" style="font-weight: 550">
        Profil Perusahaan
    </h5>
    <div class="row">
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
                                alt="Admin" class="rounded-circle p-1 bg-primary" style="object-fit: cover"
                                width="50%">
                            <div class="mt-3">
                                <h4>{{ auth()->user()->name }}</h4>
                                <p class="text-secondary mb-4">{{ auth()->user()->email }}</p>
                                <input type="file" style="display: none" name="photo" id="photo">
                                <button class="btn btn-warning mb-3 btn-upload text-white" id="btn-upload">Ganti</button>
                                <button class="btn btn-primary mb-3 " type="submit">Upload</button>
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
                                <input type="text"
                                    value="{{ auth()->user()->company->company_field ? auth()->user()->company->company_field : '-' }}"
                                    name="company_field" class="form-control" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Website (Opsional)</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text"
                                    value="{{ auth()->user()->company->website ? auth()->user()->company->website : '-' }}"
                                    name="website" class="form-control" />
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
@section('script')
    <script>
        document.getElementById('btn-upload').addEventListener('click', function(e) {
            e.preventDefault(); // Prevent the default form submission behavior
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
