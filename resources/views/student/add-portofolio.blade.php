@extends('layouts.app')
@section('style')
    <link href="{{ asset('assets-admin/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
    <form action="{{ route('portofolio.store') }}" method="post">
        @csrf
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
                <button type="submit" class="btn btn-primary text-white">
                    Kirim
                </button>
            </div>
        </div>
        <div class="card form-body">
            <div class="card-body row g-3">
                <div class="col-12">
                    <label for="">Judul</label>
                    <input type="text" name="name" class="form-control mt-2">
                    @error('name')
                        <div class="text-danger">{{ $message }}
                        </div>
                    @enderror

                </div>
                <div class="col-6">
                    <label for="" class="mt-2">Tanggal Mulai</label>
                    <input type="date" name="start_at" class="form-control mt-2">
                </div>
                <div class="col-6">
                    <label for="" class="mt-2">Tanggal Berakhir</label>
                    <input type="date" name="end_at" class="form-control mt-2">
                </div>
                <div class="col-12">
                    <label for="" class="mt-2">Deskripsi Project</label>
                    <textarea name="description" class="form-control mt-2" cols="30" rows="5"></textarea>
                </div>
            </div>
        </div>
        <h5 class="text-dark" style="font-weight: 550">
            Foto Project
        </h5>
        <div class="card">
            <div class="card-body">
                <input id="image-uploadify" type="file" name="photo[]"
                    accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
            </div>
        </div>
    </form>
@endsection
@section('script')
    <script src="{{ asset('assets-admin/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#image-uploadify').imageuploadify();
        })
    </script>
@endsection
