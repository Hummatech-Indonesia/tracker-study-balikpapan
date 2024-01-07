@extends('layouts.app')
@section('style')
<link href="{{ asset('assets-admin/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
<div class="d-flex justify-content-between mb-3">
    <div class="">
        <h5 class="text-dark" style="font-weight: 550">
            Buat Project
        </h5>
    </div>
    <div class="">
        <button onclick="history.back()" class="btn btn-warning text-white">
            Kembali
        </button>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <label for="">Judul</label>
        <input type="text" class="form-control mt-2">
        <label for="" class="mt-2">Deskripsi Project</label>
        <textarea name="" id="" class="form-control mt-2" cols="30" rows="5"></textarea>
    </div>
</div>
<h5 class="text-dark" style="font-weight: 550">
    Foto Project
</h5>
<div class="card">
    <div class="card-body">
        <form>
            <input id="image-uploadify" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
        </form>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('assets-admin/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
<script>
    $(document).ready(function () {
			$('#image-uploadify').imageuploadify();
		})
</script>
@endsection