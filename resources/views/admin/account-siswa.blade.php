@extends('layouts.app')
@section('content')
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
            });
        </script>
    @endif
    <h4 class="mb-3">
        Data Alumni
    </h4>
    <div class="d-flex justify-content-between">
        <div class="">
            <h4 class="mb-3">
                Verifikasi Siswa
            </h4>
        </div>
        <div class="position-relative mb-3 col-lg-3">
            <input type="text" class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
            <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
        </div>

    </div>
    <div class="row">
        @forelse ($students as $student)
            <div class="col-12 col-lg-4 col-xxl-3">
                <div class="card border-primary border-bottom border-3 border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mt-2 mb-4">
                            <img src="{{ asset('assets-admin/images/avatars/avatar-2.png') }}" width="100px"
                                class="user-circle" alt="user">
                        </div>
                        <h5 class="card-title text-dark text-center" style="font-weight: 700">XII Multimedia A</h5>
                        <p class="card-text mt-2 text-center mb-5">Tahun Ajaran 2024-2025.</p>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <button class="btn btn-warning w-100 text-white">Detail</button>
                            <form action="{{ route('reject.verification.student', $student->id) }}" class=" w-100"
                                method="post">
                                @method('PATCH')
                                @csrf
                                <button type="submit" class="btn btn-inverse-danger w-100">Tolak</button>
                            </form>
                        </div>
                        <form action="{{ route('verification.student', $student->id) }}" method="post">
                            @method('PATCH')
                            @csrf
                            <button type="submit" class="btn w-100 text-white"
                                style="background-color: #1D9375">Terima</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p>Data Kosong</p>
        @endforelse
    </div>
@endsection
