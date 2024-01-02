@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between">
        <h2>Survey Pekerjaan</h2>
        <div>
            <h5 class="text-light-danger">Tenggat Survei 10 September 2023 - 12 September 2023</h5>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <label for="create-name" class="form-label">Nama ( dengan gelar jika ada )</label>
                    <input type="text" name="name" id="create-name" placeholder="Masukan nama" class="form-control">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <label for="create-email" class="form-label">Nama ( dengan gelar jika ada )</label>
                    <input type="email" name="email" id="create-email" placeholder="Masukan email" class="form-control">
                </div>
                <div class="col-lg-4 col-sm-12 mb-3">
                    <label for="create-tahun-lulus" class="form-label">Tahun Lulus</label>
                    <select name="" class="form-select" id="create-tahun-lulus">
                        <option value="">Pilih Tahun</option>
                    </select>
                </div>
                <div class="col-lg-4 col-sm-12 mb-3">
                    <label for="create-tahun-lulus" class="form-label">Jurusan Saat Lulus</label>
                    <select name="" class="form-select" id="create-tahun-lulus">
                        <option value="">Pilih Jurusan </option>
                    </select>
                </div>
                <div class="col-lg-4 col-sm-12 mb-3">
                    <label for="create-tahun-lulus" class="form-label">No Telepon</label>
                    <input type="number" name="telp_number" class="form-control" id="">
                </div>
                <div class="col-12 mb-3">
                    <label for="" class="form-label">Deskripsi ( Jelaskan Secara Rinci )</label>
                    <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="col-lg-4 col-sm-12 mb-3">
                    <label for="create-tahun-lulus" class="form-label">Status Saat Ini</label>
                    <select name="" class="form-select" id="create-tahun-lulus">
                        <option value="">Pilih status</option>
                    </select>
                </div>
                <div class="col-lg-4 col-sm-12 mb-3">
                    <label for="create-tahun-lulus" class="form-label">Reuni Alumni</label>
                    <select name="" class="form-select" id="create-tahun-lulus">
                        <option value="">hadir </option>
                    </select>
                </div>
                <div class="col-lg-4 col-sm-12 mb-3">
                    <label for="create-tahun-lulus" class="form-label">Tempat Tinggal Saat Ini</label>
                    <input type="text" name="telp_number" class="form-control" id="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <label for="create-name" class="form-label">Alamat Link/ URL ( Link Website atau Lainya )</label>
                    <input type="text" name="name" id="create-name" placeholder="Masukan nama" class="form-control">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <label for="create-email" class="form-label">Akun Facebook </label>
                    <input type="text" name="email" id="create-email" placeholder="Masukan email" class="form-control">
                </div>
            </div>
        </div>
    </div>
@endsection