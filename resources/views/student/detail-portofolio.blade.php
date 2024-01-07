@extends('layouts.app')
@section('content')
<h5 class="text-dark" style="font-weight: 550">
    Pengalaman Project
</h5>
<div class="d-flex justify-content-end gap-2">
    <div class="">
        <button class="btn btn-primary">
            Edit Project
        </button>
    </div>
    <div class="">
        <button onclick="history.back()" class="btn btn-warning text-white">
            Kembali
        </button>
    </div>
</div>
<h4 class="mb-3">
    Project Tracer Study Nomer 2 Malang
</h4>
<p class="mt-2">
    Lorem Ipsum is simply dummy text of the printing and the printing and typesetting industry. Lorem Ipsum has been the industry's the industry's standard dummy text ever since the 1500s, when an galley of type and crambled unknown printer took a galley of type and scrambled galley of type and scrambled
</p>
<h4 class="mb-3 mt-5">
    Waktu Pengerjaan
</h4>
<h6 class="text-primary">
    18 September 2023 - 20 September 2023
</h6>
<h4 class="mb-3 mt-5">
    Foto Foto Project
</h4>
<div class="row">
    <div class="col-2 mt-2">
        <img src="{{ asset('1.png') }}" width="200px" alt="">
    </div>
    <div class="col-2 mt-2">
        <img src="{{ asset('1.png') }}" width="200px" alt="">
    </div>
    <div class="col-2 mt-2">
        <img src="{{ asset('1.png') }}" width="200px" alt="">
    </div>
    <div class="col-2 mt-2">
        <img src="{{ asset('1.png') }}" width="200px" alt="">
    </div>
    <div class="col-2 mt-2">
        <img src="{{ asset('1.png') }}" width="200px" alt="">
    </div>
    <div class="col-2 mt-2">
        <img src="{{ asset('1.png') }}" width="200px" alt="">
    </div>
    <div class="col-2 mt-2">
        <img src="{{ asset('1.png') }}" width="200px" alt="">
    </div>
    <div class="col-2 mt-2">
        <img src="{{ asset('1.png') }}" width="200px" alt="">
    </div>
    <div class="col-2 mt-2">
        <img src="{{ asset('1.png') }}" width="200px" alt="">
    </div>
    <div class="col-2 mt-2">
        <img src="{{ asset('1.png') }}" width="200px" alt="">
    </div>
    <div class="col-2 mt-2">
        <img src="{{ asset('1.png') }}" width="200px" alt="">
    </div>
    <div class="col-2 mt-2">
        <img src="{{ asset('1.png') }}" width="200px" alt="">
    </div>
</div>
@endsection