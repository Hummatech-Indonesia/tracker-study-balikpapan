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
                <h4 class="mb-3">
                    {{ $portofolio->name }}
                </h4>
            </div>
            <div class="me-4">
                <h4>{{ $portofolio->year }}</h4>
            </div>
        </div>
       
        <h4 class="mb-3 mt-5">
            Foto Foto Project
        </h4>
        <div class="row">
            @foreach ($portofolio->photoPortofolios as $photo)
            <div class="col-2 mt-2">
                <img src="{{ asset('storage/'.$photo->photo) }}" width="200px" alt="">
            </div>
            @endforeach
           
        </div>
        <h4 class="mb-3 mt-5">Deskripsi</h4>
        <p class="mt-2">
           {{$portofolio->description}}
        </p>
       
        
    </div>
</div>
@endsection
