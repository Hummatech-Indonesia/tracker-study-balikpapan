@extends('layouts.app')
@section('content')
    <h4 class="mb-3">
        Data Alumni
    </h4>
    <div class="d-flex justify-content-between">
        <div class="position-relative mb-3 col-lg-3">
            <input type="text" class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
            <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
        </div>
    </div>
    <div class="row">
        @forelse ($companies as $company)
            <div class="col-12 col-lg-4 col-xxl-3">
                <div class="card border-primary border-bottom border-3 border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mt-2 mb-4">
                            <img src="{{ asset('kai.png') }}" width="100px" class="user-circle" alt="user">
                        </div>
                        <h5 class="card-title text-dark text-center" style="font-weight: 700">{{ $company->user->name }}
                        </h5>
                        <p style="font-weight: 400" class="card-text text-info mt-2 text-center mb-3">Deskripsi Singkat
                            Perusahaan</p>
                        <p class="text-center px-4 mb-4">
                            {{ $company->description }}
                        </p>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <form action="{{ route('approve.verify.company', $company->id) }}" class="w-100"
                                method="post">
                                @method('PATCH')
                                @csrf
                                <button type="submit" class="btn w-100 text-white" style="background-color:#1D9375 ">
                                    Terima</button>
                            </form>
                            <form action="{{ route('reject.verify.company', $company->id) }}" class="w-100" method="post">
                                @method('PATCH')
                                @csrf
                                <button class="btn btn-inverse-danger w-100">Tolak</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            Data Kosong
        @endforelse
    </div>
@endsection
