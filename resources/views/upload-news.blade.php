@extends('layouts.app')
@section('content')
<h4>
    Upload Berita
</h4>
<div class="card">
    <div class="card-body">
        <!-- Repeater Content -->
        <div class="item-content">
            <div class="mb-3">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Gambar</label>
                    <input name="test[0][name]" class="form-control" id="test_0_name" type="file"
                        id="formFile">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="email" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="email" placeholder="Masukkan Judul"
                        data-skip-name="true" data-name="email" name="email" value="">
                </div>
                <div class="col">
                    <label for="email" class="form-label">Tangal</label>
                    <input type="date" class="form-control" id="date" placeholder="Email"
                        data-skip-name="true" data-name="date" name="date" value="">
                </div>
            </div>
            <div class="mt-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea class="form-control" id="input11" placeholder="Masukkan alamat ..." rows="3"></textarea>
            </div>
        </div>
        <!-- Repeater Remove Btn -->
        <div class="repeater-remove-btn mt-2 d-flex justify-content-end">
            <button class="btn btn-success repeater-add-btn px-4 btn-md">Tambah</button>
        </div>
    </div>
</div>
@endsection
