@extends('layouts.app')
@section('content')
    <h3>Pilih Kelas</h3>
    <div class="position-relative mb-3 col-lg-2">
        <input type="text" class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
        <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
    </div>
    <div class="row">
        @foreach ($classrooms as $index => $classroom)
            <div class="col-6 col-lg-3 col-xxl-3">
                <div class="card border-primary border-bottom border-3 border-0">
                    @if ($index % 2 == 0)
                        <img src="{{ asset('Biru JPG.jpg') }}" class="card-img-top" alt="...">
                    @else
                        <img src="{{ asset('Hijau JPG.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title text-dark" style="font-weight: 700">{{ $classroom->name }}</h5>
                        <p class="card-text mt-2 mb-3">Tahun Ajaran {{ $classroom->schoolYear->name }}</p>
                        <div class="d-flex justify-content-center gap-5">
                            <div class="text-center me-3">
                                <span
                                    class="badge bg-light-primary text-primary fs-4">{{ $classroom->students->where('is_graduate', 1)->count() }}</span>
                                <p class="m-0">Alumni</p>
                            </div>
                            <div class="text-center">
                                <span
                                    class="badge bg-light-warning text-warning fs-4">{{ $classroom->students->where('is_graduate', 0)->count() }}</span>
                                <p class="m-0">Siswa</p>
                            </div>
                        </div>

                        <hr>
                        <div class="d-flex align-items-center gap-2">
                            <a class="btn btn-primary btn-delete text-white w-100"
                                href="{{ route('student.classroom.status', $classroom->id) }}">Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="" style="display:flex; justify-content:center">
        {{ $classrooms->links('pagination::bootstrap-5') }}
    </div>
@endsection
