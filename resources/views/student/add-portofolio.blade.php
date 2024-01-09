@extends('layouts.app')
@section('style')
    <link href="{{ asset('assets-admin/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
    <form action="{{ route('portofolio.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="d-flex justify-content-between mb-3">
            <div class="">
                <h5 class="text-dark" style="font-weight: 550">
                    Buat Project
                </h5>
            </div>
            <div class="">
                <a href="{{ route('portofolio') }}" class="btn btn-warning text-white">
                    Kembali
                </a>
                
            </div>
        </div>

        <div class="card form-body">
            <div class="card-body row g-3">
                <div class="col-12">
                    <label for="">Judul</label>
                    <input type="text" name="name" class="form-control mt-2" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="" class="mt-2">Tanggal Mulai</label>
                    <input type="date" name="start_at" class="form-control mt-2" value="{{ old('start_at') }}">
                    @error('start_at')
                        <div class="text-danger">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="" class="mt-2">Tanggal Berakhir</label>
                    <input type="date" name="end_at" class="form-control mt-2" value="{{ old('end_at') }}">
                    @error('end_at')
                        <div class="text-danger">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="" class="mt-2">Deskripsi Project</label>
                    <textarea name="description" class="form-control mt-2" cols="30" rows="5">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}
                        </div>
                    @enderror
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
                @error('photo')
                    <div class="text-danger">{{ $message }}
                    </div>
                @enderror
                @error('photo.*')
                    <div class="text-danger">{{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-end mt-4 mb-5">
            <button type="submit" class="btn btn-primary text-white">
                Kirim
            </button>
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
