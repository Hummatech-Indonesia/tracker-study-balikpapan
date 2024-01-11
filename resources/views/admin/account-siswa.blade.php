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
            <form action="{{ route('account.siswa') }}" method="get">
                <input type="text" name="name" value="{{ Request::get('name') }}"
                    class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
                <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3">
                </i>
                <button type="submit" style="display: none;"></button>
            </form>
        </div>
    </div>
    <div class="row">
        @forelse ($students as $student)
            <div class="col-12 col-lg-4 col-xxl-3">
                <div class="card border-primary border-bottom border-3 border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mt-2 mb-4">
                            <img src="{{ asset($student->user->photo == null ? 'default.jpg' : 'storage/' . $student->user->photo) }}"
                                width="100px" class="user-circle" alt="user">
                        </div>
                        <h5 class="card-title text-dark text-center" style="font-weight: 700">
                            {{ $student->user->name }}</h5>
                        <p class="card-text mt-2 text-center mb-5">Tahun Ajaran {{ $student->classroom->schoolYear->name }}.
                        </p>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <button class="btn btn-warning w-100 text-white">Detail</button>

                            <button data-id="{{ $student->id }}" data-bs-toggle="modal"
                                class="btn btn-inverse-danger w-100 btn-reject">Tolak</button>
                        </div>
                        <button class="btn btn-approve w-100 text-white" data-id="{{ $student->id }}"
                            data-bs-toggle="modal" style="background-color: #1D9375">Terima</button>
                    </div>
                </div>
            </div>
            <x-confirm-approve-modal-component />
            <x-confirm-reject-modal-component />
        @empty
            <div class="d-flex justify-content-center">
                <div>
                    <img src="{{ asset('showNoData.png') }}" alt="">
                    <h5 class="text-center">Semua Data Sudah Di Verifikasi!!</h5>
                </div>
            </div>
        @endforelse
    </div>
@endsection
@section('script')
    <script>
        $('.btn-approve').click(function() {
            id = $(this).data('id')
            var actionUrl = `verification-student/${id}`;
            $('#form-approve').attr('action', actionUrl);
            $('#modal-approve').modal('show')
        })
        $('.btn-reject').click(function() {
            id = $(this).data('id')
            var actionUrl = `reject-verification-student/${id}`;
            $('#form-reject').attr('action', actionUrl);
            $('#modal-reject').modal('show')
        })
    </script>
@endsection
