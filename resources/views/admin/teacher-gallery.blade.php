@extends('layouts.app')
<link href="{{ asset('assets-admin/plugins/fancy-file-uploader/fancy_fileupload.css') }}" rel="stylesheet" />
<link href="{{ asset('assets-admin/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />
@section('content')
    <h4 class="mb-3">
        Upload Video
    </h4>
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <label for="formFile" class="form-label">Upload Video Disini</label>
                <input class="form-control" accept=".mp4, .webm, video/mp4, video/webm" type="file" id="formFile">
            </div>
        </div>
    </div>

    <h4>
        Gambar Slide
    </h4>
    <div class="card">
        <div class="card-body">
            <form>
                <input id="image-uploadify" type="file" accept=".jpg, .png, image/jpeg, image/png" multiple=""
                    style="display: none;">
                <div class="imageuploadify well">
                    <div class="imageuploadify-overlay"><i class="fa fa-picture-o"></i></div>
                    <div class="imageuploadify-images-list text-center"><i class="bx bxs-cloud-upload"></i><span
                            class=""></span><button type="button" class="btn btn-default"
                            style="background: white; color: rgb(58, 160, 255);">Pilih Gambar Untuk di Upload</button></div>
                </div>
            </form>
        </div>
    </div>

    <h4>
        Gambar Dengan Judul
    </h4>
    <div class="repeater">
        <div class="items" data-index="0">
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
                    </div>
                    <!-- Repeater Remove Btn -->
                    <div class="repeater-remove-btn mt-2 d-flex justify-content-end">
                        <button class="btn btn-success repeater-add-btn px-4 btn-md">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="{{ asset('assets-admin/plugins/fancy-file-uploader/jquery.ui.widget.js') }}"></script>
<script src="{{ asset('assets-admin/plugins/fancy-file-uploader/jquery.fileupload.js') }}"></script>
<script src="{{ asset('assets-admin/plugins/fancy-file-uploader/jquery.iframe-transport.js') }}"></script>
<script src="{{ asset('assets-admin/plugins/fancy-file-uploader/jquery.fancy-fileupload.js') }}"></script>
<script src="{{ asset('assets-admin/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
<script src="{{ asset('assets-admin/plugins/form-repeater/repeater.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#image-uploadify').imageuploadify();
    })

    $("#repeater").createRepeater({
        showFirstItemToDefault: true,
    });
</script>
