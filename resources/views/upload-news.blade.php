@extends('layouts.app')
@section('content')
    <h4>
        Upload Berita
    </h4>
    <div id="repeater">
        <div class="items" data-group="test">
            <div class="shadow bg-body-tertiary">
                <div class="card">
                    <div class="card-body">
                        <!-- Repeater Content -->
                        <div class="item-content">
                            <h5>
                                Gambar 1
                            </h5>
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Upload Gambar</label>
                                    <input name="test[0][name]" class="form-control"  id="inputfile1" type="file"
                                        id="formFile">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="email" class="form-label">Judul</label>
                                    <input type="text" class="form-control"  id="inputEmail1" id="email" placeholder="Masukkan Judul"
                                        data-skip-name="true" data-name="email" name="email" value="">
                                </div>
                                <div class="col">
                                    <label for="email" class="form-label">Tangal</label>
                                    <input type="date" clasas="form-control"  id="inputDate1" placeholder="Email"
                                        data-skip-name="true" data-name="date" name="date" value="">
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="inputDeskripsi1" placeholder="Masukkan Deskripsi ..." rows="3"></textarea>
                            </div>
                        </div>
                        <!-- Repeater Remove Btn -->
                        <div class="mt-2 d-flex justify-content-end">
                            <button class="btn btn-success repeater-add-btn px-4 btn-md">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
