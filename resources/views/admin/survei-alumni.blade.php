@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between mt-2">
        <div class="">
            <h4>
                Survei Alumni
            </h4>
        </div>
        <div class="">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 19 19" fill="none">
                    <path d="M9.5 2L9.5 17" stroke="white" stroke-width="3" stroke-linecap="round" />
                    <path d="M2 9.5L17 9.5" stroke="white" stroke-width="3" stroke-linecap="round" />
                </svg>
                Tambah Survey
            </button>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row mt-4">
        @forelse ($survies as $survey)
            <div class="col-12 col-lg-5 col-xxl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <h5 class="text-dark" style="font-weight: 500">
                                    {{ $survey->name }}
                                </h5>
                            </div>
                            <div class="">
                                <div class="dropdown ms-auto">
                                    <a class="dropdown-toggle dropdown-toggle-nocaret" href="#"
                                        data-bs-toggle="dropdown"><i
                                            class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item btn-edit" data-id="{{ $survey->id }}"
                                                id="btn-edit-{{ $survey->id }}" data-name="{{ $survey->name }}"
                                                data-start_at="{{ \Carbon\Carbon::parse($survey->start_at)->format('Y-m-d') }}"
                                                data-end_at="{{ \Carbon\Carbon::parse($survey->end_at)->format('Y-m-d') }}"
                                                data-description="{{ $survey->description }}">Edit</a>
                                        </li>
                                        <li><a class="dropdown-item btn-delete" data-id="{{ $survey->id }}"
                                                href="javascript:;">Hapus</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="text-primary">
                            {{ \Carbon\Carbon::parse($survey->start_at)->translatedFormat('d F Y') }} -
                            {{ \Carbon\Carbon::parse($survey->end_at)->translatedFormat('d F Y') }}
                        </p>
                        <p>
                            {{ Str::limit($survey->description, 100) }}
                        </p>
                        <div class="d-flex justify-content-end gap-2">
                            <div class="">
                                <a href="{{ route('survey-results', ['survey' => $survey->id]) }}" class="btn text-white" style="background-color: #1D9375">Hasil Survei</a>

                            </div>
                            <div class="">
                                <button data-id="{{ $survey->id }}" id="btn-detail-{{ $survey->id }}"
                                    data-start_at="{{ \Carbon\Carbon::parse($survey->start_at)->translatedFormat('d F Y') }}"
                                    data-name="{{ $survey->name }}"
                                    data-end_at="{{ \Carbon\Carbon::parse($survey->end_at)->translatedFormat('d F Y') }}"
                                    data-description="{{ $survey->description }}"
                                    class="btn btn-detail btn-primary">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="d-flex justify-content-center">
                <div>
                    <img src="{{ asset('showNoData.png') }}" alt="">
                    <h5 class="text-center">Belum Ada Survei Ditambahkan!!</h5>
                </div>
            </div>
        @endforelse

    </div>
    <div class="modal fade" id="modal-create" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <form action="{{ route('survey.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Survei</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="major" class="form-label">Judul Survei</label>
                                <input type="text" placeholder="Masukkan Judul Survei" class="form-control"
                                    name="name" id="">
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="major" class="form-label">Tanggal Mulai</label>
                                <input type="date" placeholder="Masukkan Nama Guru" class="form-control" name="start_at"
                                    id="">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="major" class="form-label">Tanggal Selesai</label>
                                <input type="date" placeholder="Masukkan Nama Guru" class="form-control" name="end_at"
                                    id="">
                            </div>
                            <div class="col-12">
                                <label for="major" class="form-label">Deskripsi</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary text-white">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="modal-update" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <form id="form-update" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Survei</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="major" class="form-label">Judul Survei</label>
                                <input type="text" placeholder="Masukkan Judul Survei" class="form-control"
                                    name="name" id="">
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="major" class="form-label">Tanggal Mulai</label>
                                <input type="date" placeholder="Masukkan Nama Guru" class="form-control"
                                    name="start_at" id="update-date">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="major" class="form-label">Tanggal Selesai</label>
                                <input type="date" placeholder="Masukkan Nama Guru" class="form-control"
                                    name="end_at" id="update-date-end">
                            </div>
                            <div class="col-12">
                                <label for="major" class="form-label">Deskripsi</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary text-white">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="modal-detail" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal-lg">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Survei</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <h4><span id="detail-name"></span></h4>
                        <div class="col-6">
                            <p>Tanggal Mulai : <span id="detail-start_at"></span></p>
                            <p>Tanggal Berakhir : <span id="detail-end_at"></span></p>
                        </div>
                        <div class="col-6">
                            Deskripsi : <span id="detail-description"></span>
                        </div>
                        <div>
                            <h4>Isi Survei</h4>
                            <table>
                                <tr>
                                    <td>Kegiatan Saat Ini</td>
                                    <td>:</td>
                                    <td>(Contoh) Bekerja di Pt Rekayasa Perangkat Lunak dan menjadi staff programmer</td>
                                </tr>
                                <tr>
                                    <td>Tempat Tinggal Sekarang</td>
                                    <td>:</td>
                                    <td>(Contoh) Karanglposo, Malang, Jawa Timur, Indonesia</td>
                                </tr>
                                <tr>
                                    <td>Temu Alumni</td>
                                    <td>:</td>
                                    <td>(Contoh) Hadir/Tidak</td>
                                </tr>
                                <tr>
                                    <td>Alamat Link/URL</td>
                                    <td>:</td>
                                    <td>(Contoh) https//:LoremIpsum</td>
                                </tr>
                                <tr>
                                    <td>Akun Facebook</td>
                                    <td>:</td>
                                    <td>(Contoh) https//:LoremIpsum</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    </div>
            </div>
        </div>
    </div>
    <x-delete-modal-component />
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
        $('.btn-edit').click(function() {
            const formData = getDataAttributes($(this).attr('id'))
            var actionUrl = `survey/${formData['id']}`;
            $('#form-update').attr('action', actionUrl);
            $('#update-date').val(formData['start_at'])

            setFormValues('form-update', formData)

            $('#form-update').data('id', formData['id'])
            $('#form-update').attr('action', actionUrl);
            $('#modal-update').modal('show')
        })
        $('.btn-delete').click(function() {
            id = $(this).data('id')
            var actionUrl = `survey/${id}`;
            $('#form-delete').attr('action', actionUrl);
            $('#modal-delete').modal('show')
        })
        $('.btn-detail').click(function() {
            const data = getDataAttributes($(this).attr('id'))
            handleDetail(data)
            handleFile(data)
            $('#modal-detail').modal('show')
            $('#modal-detail').modal('show')
        })
    </script>
@endsection
