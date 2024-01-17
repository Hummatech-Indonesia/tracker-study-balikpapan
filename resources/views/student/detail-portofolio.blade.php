@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between">
    <h5 class="text-dark" style="font-weight: 550">
        Pengalaman Project
    </h5>
    <div class="d-flex justify-content-end gap-2">
        <div class="">
           <a href="{{ route('edit.portofolio',['portofolio'=>$portofolio->id]) }}"><button class="btn btn-primary">
            Edit Project
        </button></a>
        </div>
        <div class="">
            <button onclick="history.back()" class="btn btn-warning text-white">
                Kembali
            </button>
        </div>
    </div>
</div>
<div class="card mt-4">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div>
                <h3 class="mb-3 fw-semibold">
                    {{ $portofolio->name }}
                </h3>
            </div>
            <div class="me-4 fw-semibold">
                <h3>{{ $portofolio->year }}</h3>
            </div>
        </div>
       
        <h3 class="mb-3 mt-5 fw-semibold">
            Foto Foto Project
        </h3>
        <div class="row">
            @foreach ($portofolio->photoPortofolios as $photo)
            <div class="col-sm-6 col-lg-3 col-md-6 mt-3">
                <img src="{{ asset('storage/'.$photo->photo) }}" style="width:100%" alt="">
            </div>
            @endforeach
           
        </div>
        <h3 class="mb-3 mt-5 fw-semibold">Deskripsi</h3>
        <p class="mt-2 fs-4 fw-normal">
           {{$portofolio->description}}
        </p>
       
        
    </div>
</div>
@endsection
@section('script')
    <script>
        $('#portofolio-alumni').addClass('mm-active')
        $('#portofolio-student').addClass('mm-active')
    </script>
@endsection
