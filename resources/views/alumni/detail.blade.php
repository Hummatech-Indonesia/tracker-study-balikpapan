@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between">
    <div class="">
        <h5 class="text-dark" style="font-weight: 500">
            Lowongan Pekerjaan
        </h5>
    </div>
    <div class="">
        <button class="text-white btn btn-warning" onclick="history.back()">
            Kembali
        </button>
    </div>
</div>
<div class="row mt-3">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <div class="reviewer-thumb mt-3">
                        <div class="border-custom"
                            style="width: 150px; height: 150px; border-radius: 50%; overflow: hidden;">
                            <img style="object-fit: cover; width: 100%; height: 100%;"
                                src="{{ asset('1.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <h5 class="text-dark text-center mt-3" style="font-weight: 600">
                    PT KAI INDONESIA
                </h5>
                <p class="text-center">
                    www.ptkai.id
                </p>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-primary">
                        Kirim CV
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <p >
                    Lowongan Pada Bagian
                </p>
            </div>
        </div>
    </div>
</div>
@endsection