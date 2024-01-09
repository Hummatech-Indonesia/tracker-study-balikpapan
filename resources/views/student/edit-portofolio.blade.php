@extends('layouts.app')
@section('style')
    <link href="{{ asset('assets-admin/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
@if ($errors->any())
@foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible mt-3 fade show" role="alert">
        {{ $error }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endforeach
@endif
    <form action="{{ route('portofolio.update', $portofolio->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="d-flex justify-content-between mb-3">
            <div class="">
                <h5 class="text-dark" style="font-weight: 550">
                    Edit Project
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
                    <input type="text" name="name" class="form-control mt-2" value="{{ $portofolio->name }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="" class="mt-2">Tanggal Mulai</label>
                    <input type="date" name="start_at" class="form-control mt-2" value="{{ $portofolio->start_at }}">
                    @error('start_at')
                        <div class="text-danger">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="" class="mt-2">Tanggal Berakhir</label>
                    <input type="date" name="end_at" class="form-control mt-2" value="{{ $portofolio->end_at }}">
                    @error('end_at')
                        <div class="text-danger">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="" class="mt-2">Deskripsi Project</label>
                    <textarea name="description" class="form-control mt-2" cols="30" rows="5">{{ $portofolio->description }}</textarea>
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
