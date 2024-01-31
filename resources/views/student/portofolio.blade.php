@extends('layouts.app')
@section('style')
    <style>
        .photo-stack {
            position: relative;
            margin: auto;
            width: 200px;
            height: 200px;
            z-index: 2;

        }

        .photo-stack>p {
            position: absolute;
            width: 100%;
            bottom: 0;
            left: 0;
            text-align: center;
            font-weight: bold;
            z-index: 2;
        }

        .photo-stack img {
            position: absolute;
            top: 0;
            left: 0;
            border: 1px solid white;
            box-shadow: 0 1px 3px -2px rgba(0, 0, 0, .5);
            transition: all 0.3s ease-out;
            z-index: 2;

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
    <div class="row">
        <div class="col-12 col-lg-2 col-xl-10 mt-2 mb-3">
            <div class="col-xl-2 col-12">
                <select name="" class="form-select " id="">
                    <option value="">Pilih Filter</option>
                    <option value="">Terbaru ke Terlama</option>
                    <option value="">Terlama ke Terbaru</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-lg-2 col-xl-2 mt-2 mb-3">
            <a href="{{ route('add.portofolio') }}" class="btn btn-primary text-white w-100">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 19 19" fill="none">
                    <path d="M9.5 2L9.5 17" stroke="white" stroke-width="3" stroke-linecap="round" />
                    <path d="M2 9.5L17 9.5" stroke="white" stroke-width="3" stroke-linecap="round" />
                </svg>
                Tambah Project
            </a>
        </div>
    </div>
    @if (session('success'))
    <div class="alert alert-success alert-dismissible mt-3 fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    @forelse ($portofolios as $portofolio)
        <div class="card">
            <div class="row g-0">
                <div class="col-12 col-mc-12 col-xl-3">
                    <div class="photo-stack mt-4">
                        @foreach ($portofolio->photoPortofolios as $photoPortofolio)
                            <img src="{{ asset('storage/' . $photoPortofolio->photo) }}" width="200" height="200"
                                style="object-fit: cover" />
                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-mc-12 col-xl-9">
                    <div class="card-body">
                        <h5 class="text-primary text-end ">
                            {{ $portofolio->year }}
                        </h5>
                        <h5 class="card-title">{{ $portofolio->name }}</h5>
                        <p class="card-text">
                            {{ Illuminate\Support\Str::limit($portofolio->description, $limit = 325, $end = '...') }}</p>
                    </div>
                </div>
                <div class="d-flex justify-content-end mb-4 gap-3 px-4">
                    <div class="">
                        <button class="btn btn-danger btn-delete" data-id="{{ $portofolio->id }}" data-bs-toggle="modal"
                            data-bs-target="#modal-delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 34 34"
                                fill="none">
                                <path d="M13.4587 20.5418L13.4587 16.2918" stroke="white" stroke-width="3"
                                    stroke-linecap="round" />
                                <path d="M20.5413 20.5418L20.5413 16.2918" stroke="white" stroke-width="3"
                                    stroke-linecap="round" />
                                <path
                                    d="M4.25 9.20819H29.75V9.20819C27.7603 9.20819 26.7655 9.20819 26.0509 9.68569C25.7415 9.89241 25.4759 10.158 25.2692 10.4674C24.7917 11.182 24.7917 12.1769 24.7917 14.1665V21.9582C24.7917 24.6295 24.7917 25.9651 23.9618 26.795C23.1319 27.6249 21.7963 27.6249 19.125 27.6249H14.875C12.2037 27.6249 10.8681 27.6249 10.0382 26.795C9.20833 25.9651 9.20833 24.6295 9.20833 21.9582V14.1665C9.20833 12.1769 9.20833 11.182 8.73083 10.4674C8.52411 10.158 8.25849 9.89241 7.94912 9.68569C7.23448 9.20819 6.23965 9.20819 4.25 9.20819V9.20819Z"
                                    stroke="white" stroke-width="3" stroke-linecap="round" />
                                <path
                                    d="M13.4579 4.95882C13.4579 4.95882 14.1663 3.54181 16.9996 3.54181C19.8329 3.54181 20.5413 4.95848 20.5413 4.95848"
                                    stroke="white" stroke-width="3" stroke-linecap="round" />
                            </svg> </button>
                    </div>
                    <div class="">
                        <a href="{{ route('edit.portofolio', $portofolio->id) }}" class="btn btn-warning"><svg
                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 38 38"
                                fill="none">
                                <path
                                    d="M6.84778 28.4972L8.30299 28.861L6.84778 28.4972C6.84378 28.5132 6.83958 28.5299 6.83523 28.5472C6.78335 28.7535 6.70953 29.047 6.68399 29.3081C6.6545 29.6096 6.64333 30.2817 7.19232 30.8307L8.25298 29.77L7.19233 30.8307C7.74132 31.3797 8.41342 31.3685 8.71489 31.339C8.97594 31.3135 9.26951 31.2396 9.47581 31.1878C9.4931 31.1834 9.50978 31.1792 9.52577 31.1752L13.8951 30.0829C13.8974 30.0823 13.8997 30.0817 13.902 30.0811C13.9253 30.0753 13.9493 30.0694 13.974 30.0633C14.2675 29.991 14.6523 29.8961 15.0054 29.6962C15.3585 29.4963 15.6378 29.2151 15.8509 29.0007C15.8706 28.9809 15.8897 28.9616 15.9082 28.9431L27.4708 17.3805L27.4708 17.3805L26.4101 16.3198L27.4708 17.3805C27.4897 17.3616 27.5085 17.3428 27.5273 17.324C27.9504 16.9011 28.367 16.4847 28.6652 16.0938C29.0031 15.651 29.3268 15.0696 29.3268 14.3164C29.3268 13.5631 29.0031 12.9818 28.6652 12.5389C28.3669 12.148 27.9504 11.7316 27.5273 11.3087C27.5085 11.2899 27.4897 11.2711 27.4708 11.2522L26.7708 10.5522L25.7101 11.6128L26.7708 10.5522C26.7519 10.5333 26.7331 10.5145 26.7143 10.4957C26.2914 10.0726 25.875 9.65604 25.4841 9.35781C25.0412 9.0199 24.4599 8.69618 23.7066 8.69618C22.9534 8.69618 22.372 9.0199 21.9291 9.35781C21.5383 9.65604 21.1219 10.0726 20.699 10.4957C20.6802 10.5145 20.6613 10.5333 20.6425 10.5522L9.07993 22.1148C9.06137 22.1333 9.04213 22.1524 9.02232 22.1721C8.80785 22.3852 8.5267 22.6645 8.32677 23.0176C8.12685 23.3707 8.032 23.7555 7.95965 24.049C7.95296 24.0761 7.94647 24.1024 7.94011 24.1279L6.84778 28.4972Z"
                                    stroke="white" stroke-width="3" />
                                <path d="M19.7842 11.9622L24.4912 8.82422L29.1982 13.5312L26.0602 18.2382L19.7842 11.9622Z"
                                    stroke="white" stroke-width="2.5" />
                            </svg>
                        </a>
                    </div>
                    <div class="">
                        <a href="{{ route('detail.portofolio', ['portofolio' => $portofolio->id]) }}"
                            class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 38 38" fill="none">
                                <path
                                    d="M19.0968 23.579C21.6964 23.579 23.8037 21.4716 23.8037 18.872C23.8037 16.2724 21.6964 14.165 19.0968 14.165C16.4972 14.165 14.3898 16.2724 14.3898 18.872C14.3898 21.4716 16.4972 23.579 19.0968 23.579Z"
                                    fill="white" />
                                <path
                                    d="M29.3065 10.4273C26.0911 8.2224 22.6498 7.10449 19.0791 7.10449C15.8659 7.10449 12.7335 8.0606 9.76884 9.93457C6.77916 11.8284 3.84833 15.2682 1.44556 18.872C3.38866 22.108 6.04664 25.4353 8.81494 27.3431C11.9907 29.5303 15.4437 30.6394 19.0791 30.6394C22.6829 30.6394 26.1286 29.5311 29.3242 27.3453C32.1373 25.4176 34.8144 22.0948 36.748 18.872C34.8078 15.6778 32.1219 12.3587 29.3065 10.4273ZM19.0968 25.9324C17.7003 25.9324 16.3353 25.5184 15.1742 24.7425C14.0131 23.9667 13.1081 22.864 12.5737 21.5739C12.0393 20.2838 11.8995 18.8641 12.1719 17.4945C12.4444 16.1249 13.1168 14.8669 14.1042 13.8794C15.0917 12.892 16.3497 12.2196 17.7193 11.9471C19.0889 11.6747 20.5086 11.8145 21.7987 12.3489C23.0888 12.8833 24.1915 13.7883 24.9673 14.9494C25.7432 16.1105 26.1572 17.4755 26.1572 18.872C26.1551 20.7439 25.4105 22.5385 24.0869 23.8621C22.7633 25.1857 20.9687 25.9303 19.0968 25.9324Z"
                                    fill="white" />
                            </svg>
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
        $('.btn-delete').click(function() {
            id = $(this).data('id')
            var actionUrl = `portofolio/${id}`;
            $('#form-delete').attr('action', actionUrl);
            $('#modal-delete').modal('show')
        })
    </script>
@endsection
