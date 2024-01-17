@extends('layouts.app')
@section('style')
    <style>
        .photo-stack {
            position: relative;
            margin: auto;
            width: 300px;
            height: 250px;
        }

        .photo-stack>p {
            position: absolute;
            width: 100%;
            bottom: 0;
            left: 0;
            text-align: center;
            font-weight: bold;
            z-index: 1000;
        }

        .photo-stack img {
            position: absolute;
            top: 0;
            left: 0;
            border: 1px solid white;
            box-shadow: 0 1px 3px -2px rgba(0, 0, 0, .5);
            transition: all 0.3s ease-out;
        }

        .photo-stack img:nth-child(1) {
            z-index: 999;
        }

        .photo-stack img:nth-child(2) {
            transform: rotate3d(0, 0, 1, 3deg);
        }

        .photo-stack img:nth-child(3) {
            transform: rotate3d(0, 0, 1, -3deg);
        }

        .photo-stack img:nth-child(4) {
            transform: rotate3d(0, 0, 1, 2deg);
        }

        .photo-stack:hover img:nth-child(1) {
            transform: scale(1.02);
        }

        .photo-stack:hover img:nth-child(2) {
            transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 3deg);
        }

        .photo-stack:hover img:nth-child(3) {
            transform: translate3d(-10%, 0, 0) rotate3d(0, 0, 1, -3deg);
        }

        .photo-stack:hover img:nth-child(4) {
            transform: translate3d(2%, -5%, 0) rotate3d(0, 0, 1, 2deg);
        }

        .photo-stack:hover img:nth-child(5) {
            transform: translate3d(-5%, -2%, 0) rotate3d(0, 0, 1, 2deg);
        }
    </style>
@endsection
@php
    use Carbon\Carbon;
@endphp
@section('content')
    <h4 class="mb-3">
        Pengalaman Project
    </h4>
    <div class="d-flex justify-content-between mb-4">
        <div class="">
            <select name="" class="form-select" id="">
                <option value="">Pilih Filter</option>
                <option value="">Terbaru ke Terlama</option>
                <option value="">Terlama ke Terbaru</option>
            </select>
        </div>
    </div>
    @forelse ($portofolios as $portofolio)
        <div class="card">
            <div class="row g-0">
                <div class="col-md-3">
                    <div class="photo-stack mt-4">
                        @foreach ($portofolio->photoPortofolios as $photoPortofolio)
                            <img src="{{ asset('storage/' . $photoPortofolio->photo) }}" width="250" height="250"
                                style="object-fit: cover" />
                        @endforeach
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="text-primary text-end ">
                            {{ $portofolio->year }}
                        </h5>
                        <h5 class="card-title">{{ $portofolio->name }}</h5>
                        <p class="card-text">
                            {{ Illuminate\Support\Str::limit($portofolio->description, $limit = 325, $end = '...') }}
                        </p>
                    </div>
                </div>
                <div class="d-flex justify-content-end mb-4 gap-3 px-4">
                    <div class="">
                        <a href="{{ route('detail.portofolio', ['portofolio' => $portofolio->id]) }}" class="btn btn-primary">
                            Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="d-flex justify-content-center">
            <div>
                <img src="{{ asset('showNoData.png') }}" alt="">
                <h5 class="text-center">Portofolio Anda Masih Kosong!!</h5>
            </div>
        </div>
    @endforelse


    <x-delete-modal-component />
@endsection
@section('script')
    <script>
        $('#company').addClass('mm-active')

        $('.btn-delete').click(function() {
            id = $(this).data('id')
            var actionUrl = `portofolio/${id}`;
            $('#form-delete').attr('action', actionUrl);
            $('#modal-delete').modal('show')
        })
    </script>
@endsection
