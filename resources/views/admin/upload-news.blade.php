@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between mb-4">
        <div class="">
            <h4>
            Berita
            </h4>
        </div>
        <div class="">
            <button class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleModal"
                style="background-color: #5D87FF">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 18 19" fill="none">
                    <path d="M9 2L9 17" stroke="white" stroke-width="3" stroke-linecap="round" />
                    <path d="M1.5 9.5L16.5 9.5" stroke="white" stroke-width="3" stroke-linecap="round" />
                </svg>
                Tambah Berita</button>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col" class="text-center">Gambar</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $news)
                    <tr>
                        <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $news->title }}</td>
                        <td style="text-overflow: ellipsis;overflow: hidden ;max-width: 250px ;white-space: nowrap">{{ $news->content }}</td>
                        <td width="30%" class="text-center"><img width="50%" src="{{ asset('storage/'. $news->thumbnail) }}" alt="" srcset=""></td>
                        <td>
                            <div class="d-flex gap-1">
                                <button class="btn btn-primary btn-sm btn-detail" id="btn-detail-{{ $news->id }}" data-title="{{ $news->title }}"
                                    data-content="{{ $news->content }}"
                                    data-thumbnail="{{ asset('storage/'. $news->thumbnail) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5"/></svg>
                                </button>
                                <button class="btn btn-warning btn-edit btn-sm" id="btn-edit-{{ $news->id }}"
                                    data-id="{{ $news->id }}" data-title="{{ $news->title }}"
                                    data-content={{ $news->content }}>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="white" d="M5 3c-1.11 0-2 .89-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7h-2v7H5V5h7V3zm12.78 1a.69.69 0 0 0-.48.2l-1.22 1.21l2.5 2.5L19.8 6.7c.26-.26.26-.7 0-.95L18.25 4.2c-.13-.13-.3-.2-.47-.2m-2.41 2.12L8 13.5V16h2.5l7.37-7.38z"/></svg>
                                </button>
                                <button class="btn btn-danger btn-delete btn-sm" data-id="{{ $news->id }}"
                                    data-bs-toggle="modal" data-bs-target="#modal-delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6z"/></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">
                            <div class="d-flex justify-content-center" style="min-height:16rem">
                                <div class="my-auto">
                                    <img src="{{ asset('showNoData.png') }}" width="300" height="300" />
                                    <h4 class="text-center mt-4">Berita Kosong!!</h4>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Berita</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="formFile" class="form-label">Judul Berita</label>
                                <input type="text" placeholder="Masukkan Berita" class="form-control" name="title"
                                    id="">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="formFile" class="form-label">Foto Berita</label>
                                <input type="file" class="form-control" name="thumbnail"
                                    id="">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="formFile" class="form-label">Deskripsi Berita</label>
                                <textarea name="content" class="form-control" id="" cols="10" rows="7"></textarea>
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
                        <h5 class="modal-title" id="exampleModalLabel">Edit Berita</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="formFile" class="form-label">Judul Berita</label>
                                <input type="text" placeholder="Masukkan Berita" class="form-control" name="title"
                                    id="">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="formFile" class="form-label">Foto Berita</label>
                                <input type="file" class="form-control" name="thumbnail"
                                    id="">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="formFile" class="form-label">Deskripsi Berita</label>
                                <textarea name="content" class="form-control" id="" cols="10" rows="7"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary text-white">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade bs-example-modal-md" id="modal-detail" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #5D87FF">
                    <h5 class="modal-title text-white text-center" id="myExtraLargeModalLabel">Detail Berita</h5>
                    <button type="button" class="btn-close" style="background-color: white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="detail-file-thumbnail" width="100%" alt="Thumbnail Image">

                    <div id="detail-title" class="mt-2 mb-2 fw-bold fs-5 text-black">

                    </div>
                    <div id="detail-content">

                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div>
    <x-delete-modal-component />
@endsection
@section('script')
    <script>
        $('.btn-detail').click(function() {
            const data = getDataAttributes($(this).attr('id'))
            handleDetail(data)
            handleFile(data)
            $('#modal-detail').modal('show')
        })

        $('.btn-edit').click(function() {
            const formData = getDataAttributes($(this).attr('id'))
            var actionUrl = `news/${formData['id']}`;
            $('#form-update').attr('action', actionUrl);

            setFormValues('form-update', formData)
            $('#form-update').data('id', formData['id'])
            $('#form-update').attr('action', );
            $('#modal-update').modal('show')
        });
        $('.btn-delete').click(function() {
            id = $(this).data('id')
            var actionUrl = `news/${id}`;
            $('#form-delete').attr('action', actionUrl);
            $('#modal-delete').modal('show')
        })
    </script>
@endsection
