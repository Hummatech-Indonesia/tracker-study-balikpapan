@extends('layouts.app')
@section('content')
    <h4 class="mb-3">
        Data Perusahaan
    </h4>
    <div class="d-flex justify-content-between">
        <div class="position-relative mb-3 col-lg-3">
            <form action="{{ route('verify.company') }}" method="get">
                <input type="text" name="name" class="form-control search-chat py-2 ps-5" id="search-name"
                    placeholder="Search">
                <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
                <button type="submit" style="display: none"></button>
            </form>
        </div>
    </div>

    <div class="row">
        @forelse ($companies as $company)
            <div class="col-12 col-lg-4 col-xxl-3">
                <div class="card border-primary border-bottom border-3 border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mt-2 mb-4">
                            <img src="{{ asset(auth()->user()->photo == null ? 'default.jpg' : 'storage/' . auth()->user()->photo) }}"
                                width="100px" height="100px" class="user-circle" alt="user">
                        </div>
                        <h5 class="card-title text-dark text-center" style="font-weight: 700">{{ $company->user->name }}
                        </h5>
                        <p style="font-weight: 400" class="card-text text-info mt-2 text-center mb-3">Deskripsi Singkat
                            Perusahaan</p>
                        <p class="text-center px-4 mb-4">
                            {{ $company->description }}
                        </p>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <button class="btn btn-approve w-100 text-white" data-id="{{ $company->id }}"
                                data-bs-toggle="modal" style="background-color: #1D9375">Terima</button>
                            <button class="btn btn-reject btn-inverse-danger w-100" data-id="{{ $company->id }}"
                                data-bs-toggle="modal">Tolak</button>

                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="d-flex justify-content-center" style="min-height:16rem">
                <div class="my-auto">
                    <img src="{{ asset('showNoData.png') }}" width="350" height="350" />
                    <h4 class="text-center mt-4">Belum ada perusahaan terdaftar!!</h4>
                </div>
            </div>
        @endforelse
    </div>
    <x-confirm-approve-modal-component />
    <x-confirm-reject-modal-component />
@endsection
@section('script')
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
            });
        </script>
    @endif
    <script>
        $('.btn-approve').click(function() {
            id = $(this).data('id')
            var actionUrl = `approve-verify-company/${id}`;
            $('#form-approve').attr('action', actionUrl);
            $('#modal-approve').modal('show')
        })
        $('.btn-reject').click(function() {
            id = $(this).data('id')
            var actionUrl = `reject-verify-company/${id}`;
            $('#form-reject').attr('action', actionUrl);
            $('#modal-reject').modal('show')
        })
    </script>
@endsection
