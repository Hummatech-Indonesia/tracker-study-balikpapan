@extends('layouts.app')
@section('content')
    <h6 style="font-weight: 550" class="mb-0 text-uppercase mb-3">Upload Video</h6>
    <div class="card">
        <form action="{{ route('video.alumni') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="card-body">
                <label for="" class="text-dark mb-1">Upload Video Disini</label>
                <input type="file" name="video" class="form-control" id="">
                @error('video')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                <div class="d-flex justify-content-end mt-2">
                    <div class="">
                        <button type="submit" class="btn btn-primary text-white">
                            Upload
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <h6 style="font-weight: 550" class="mb-0 text-uppercase mb-3">Gambar Slide</h6>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('slider.gallery.alumni') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div id="repeater">
                    <!-- Repeater Heading -->
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h6 class="mb-0">File</h6>
                        <button type="button" class="btn btn-primary repeater-add-btn px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 19 19"
                                fill="none">
                                <path d="M9.5 2L9.5 17" stroke="white" stroke-width="3" stroke-linecap="round" />
                                <path d="M2 9.5L17 9.5" stroke="white" stroke-width="3" stroke-linecap="round" />
                            </svg>
                            Tambah
                        </button>
                    </div>
                    <!-- Repeater Items -->
                    <div class="items mt-2">
                        <!-- Repeater Content -->
                        <div class="item-content">
                            <div class="mb-3 mt-3">
                                <input type="file" name="photo[]" class="form-control">
                                @error('photo')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <!-- Repeater Remove Btn -->
                        <div class="repeater-remove-btn">
                            <button type="button" class="btn btn-danger remove-btn px-4">
                                Hapus
                            </button>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <h6 style="font-weight: 550" class="mb-0 text-uppercase mb-3">Gambar</h6>
    <div class="card">
        <div class="card-body" style="overflow: auto; white-space: nowrap; padding-left: 50px;">
            <div class="d-flex justify-content-center gap-4">
                @forelse ($sliderGalleryAlumnis as $sliderGalleryAlumni)
                    <div style="position: relative; display: flex; justify-content: end; width: 200px; height: 200px;">
                        <img src="{{ asset('storage/' . $sliderGalleryAlumni->photo) }}" style="object-fit: cover"
                            width="200px" alt="">
                        <button style="position: absolute; border-radius: 50%;" data-id="{{ $sliderGalleryAlumni->id }}"
                            id="{{ $sliderGalleryAlumni->id }}" class="btn btn-delete-slider btn-sm mt-2 btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 18 18"
                                fill="none">
                                <path d="M13.1562 4.6709L4.67097 13.1562" stroke="white" stroke-width="2.5"
                                    stroke-linecap="round" />
                                <path d="M4.67188 4.6709L13.1572 13.1562" stroke="white" stroke-width="2.5"
                                    stroke-linecap="round" />
                            </svg>
                        </button>
                    </div>
                @empty
                    <div class="d-flex justify-content-center">
                        <div>
                            <img src="{{ asset('showNoData.png') }}" alt="">
                            <h5 class="text-center">Data Masih Kosong!!</h5>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <h6 style="font-weight: 550" class="mb-0 text-uppercase mb-3">Gambar Dengan Deskripsi</h6>
    <div class="d-flex justify-content-between">
        <div class="position-relative mb-3 col-lg-3">
            <input type="text" class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
            <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
        </div>
        <div class="">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 19 19" fill="none">
                    <path d="M9.5 2L9.5 17" stroke="white" stroke-width="3" stroke-linecap="round" />
                    <path d="M2 9.5L17 9.5" stroke="white" stroke-width="3" stroke-linecap="round" />
                </svg> Gambar
            </button>

            {{-- modal create gambar deskripsi  --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Gambar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('alumni.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <label for="name" class="form-label">Judul</label>
                                    <input type="text" id="name" placeholder="Masukkan Tahun Ajaran"
                                        name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label mt-2 mb-1">File</label>
                                    <input type="file" id="name" placeholder="Masukkan Tahun Ajaran"
                                        name="photo" class="form-control">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-update" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Gambar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="form-update" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name" class="form-label">Judul</label>
                                    <input type="text" id="name" placeholder="Masukkan Tahun Ajaran"
                                        name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label mt-2 mb-1">File</label>
                                    <input type="file" id="name" placeholder="Masukkan Tahun Ajaran"
                                        name="photo" class="form-control">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-detail" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog  modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detail Gambar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="container">
                                    <img src="" id="photo" alt="" class="img-fluid w-100">
                                    <div class="d-flex justify-content-header gap-2">
                                        <div class="">
                                            <p id="title" class="text-dark mt-1">

                                            </p>
                                        </div>
                                        <div class="text-dark mt-1">
                                            <p>
                                                |
                                            </p>
                                        </div>
                                        <div class="">
                                            <p class="text-primary mt-1" id="tanggal"></p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                No
                            </th>
                            <th>
                                Judul Gambar
                            </th>
                            <th>
                                Tanggal Terbit
                            </th>
                            <th>
                                Gambar
                            </th>
                            <th>
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($galleryAlumnis as $index=>$galleryAlumni)
                            <tr>
                                <td>
                                    {{ $index + 1 }}
                                </td>
                                <td>
                                    {{ $galleryAlumni->title }}
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($galleryAlumni->created_at)->isoFormat('D MMMM Y') }}
                                </td>
                                <td>
                                    <img src="{{ asset('storage/' . $galleryAlumni->photo) }}" width="150px"
                                        height="150px" style="object-fit: cover" alt="" srcset="">
                                </td>
                                <td>
                                    <div class="d-flex justify-content-header gap-3">
                                        <div class="">
                                            <button class="btn btn-primary btn-sm btn-detail"
                                                data-id="{{ $galleryAlumni->id }}" id="{{ $galleryAlumni->id }}"
                                                data-title="{{ $galleryAlumni->title }}"
                                                data-created_at="{{ $galleryAlumni->created_at }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 34 34" fill="none">
                                                    <path
                                                        d="M17 21.25C19.3472 21.25 21.25 19.3472 21.25 17C21.25 14.6528 19.3472 12.75 17 12.75C14.6528 12.75 12.75 14.6528 12.75 17C12.75 19.3472 14.6528 21.25 17 21.25Z"
                                                        fill="white" />
                                                    <path
                                                        d="M26.2185 9.37523C23.3152 7.38437 20.2081 6.375 16.9841 6.375C14.0828 6.375 11.2545 7.23828 8.5777 8.93031C5.87828 10.6403 3.23199 13.7461 1.0625 17C2.81695 19.9219 5.21688 22.9261 7.71641 24.6487C10.5838 26.6236 13.7016 27.625 16.9841 27.625C20.238 27.625 23.3491 26.6243 26.2345 24.6507C28.7745 22.9102 31.1917 19.9099 32.9375 17C31.1857 14.116 28.7605 11.1191 26.2185 9.37523ZM17 23.375C15.7391 23.375 14.5066 23.0011 13.4582 22.3006C12.4099 21.6001 11.5928 20.6045 11.1103 19.4396C10.6278 18.2747 10.5015 16.9929 10.7475 15.7563C10.9935 14.5197 11.6006 13.3838 12.4922 12.4922C13.3838 11.6006 14.5197 10.9935 15.7563 10.7475C16.9929 10.5015 18.2747 10.6278 19.4396 11.1103C20.6045 11.5928 21.6001 12.4099 22.3006 13.4582C23.0011 14.5066 23.375 15.7391 23.375 17C23.3731 18.6902 22.7008 20.3105 21.5057 21.5057C20.3105 22.7008 18.6902 23.3731 17 23.375Z"
                                                        fill="white" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="">
                                            <button class="btn btn-warning btn-sm btn-edit"
                                                data-id="{{ $galleryAlumni->id }}" id="{{ $galleryAlumni->id }}"
                                                data-title="{{ $galleryAlumni->title }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 34 35" fill="none">
                                                    <path
                                                        d="M12.3521 27.2832C12.3542 27.2827 12.3563 27.2822 12.3584 27.2817C12.3819 27.2758 12.4061 27.2698 12.431 27.2637C12.7245 27.1914 13.1093 27.0965 13.4624 26.8966C13.8155 26.6967 14.0949 26.4155 14.3079 26.201C14.3276 26.1812 14.3467 26.162 14.3653 26.1434L24.5569 15.9518C24.5757 15.933 24.5946 15.9141 24.6134 15.8953C25.0364 15.4725 25.453 15.0561 25.7512 14.6652C26.0891 14.2223 26.4129 13.6409 26.4129 12.8877C26.4129 12.1345 26.0891 11.5531 25.7512 11.1102C25.453 10.7193 25.0364 10.3029 24.6134 9.88007C24.5946 9.86125 24.5757 9.84241 24.5569 9.82357L24.3138 9.5805L23.2531 10.6412L24.3138 9.5805C24.2949 9.56165 24.2761 9.5428 24.2573 9.52396C23.8344 9.10093 23.418 8.68436 23.0272 8.38613C22.5843 8.04822 22.0029 7.7245 21.2497 7.7245C20.4964 7.7245 19.9151 8.04822 19.4722 8.38613C19.0813 8.68436 18.6649 9.10095 18.242 9.52399C18.2232 9.54282 18.2044 9.56166 18.1855 9.5805L7.99394 19.7721C7.97539 19.7907 7.95615 19.8098 7.93634 19.8295C7.72187 20.0425 7.44071 20.3218 7.24079 20.6749C7.04087 21.028 6.94602 21.4128 6.87366 21.7063C6.86698 21.7335 6.86049 21.7598 6.85412 21.7852L5.91412 25.5452C5.91012 25.5613 5.90592 25.5779 5.90157 25.5952C5.8497 25.8015 5.77587 26.0951 5.75034 26.3561C5.72084 26.6576 5.70967 27.3297 6.25867 27.8787C6.80766 28.4277 7.47975 28.4165 7.78124 28.387C8.04229 28.3615 8.33585 28.2877 8.54214 28.2358C8.55944 28.2314 8.57612 28.2272 8.59212 28.2232L12.3521 27.2832Z"
                                                        stroke="white" stroke-width="3" />
                                                    <path
                                                        d="M17.708 10.7625L21.958 7.9292L26.208 12.1792L23.3747 16.4292L17.708 10.7625Z"
                                                        stroke="white" stroke-width="2.5" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="">
                                            <button class="btn btn-danger btn-sm btn-delete"
                                                data-id="{{ $galleryAlumni->id }}" id="{{ $galleryAlumni->id }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 34 34" fill="none">
                                                    <path d="M13.459 20.5417L13.459 16.2917" stroke="white"
                                                        stroke-width="3" stroke-linecap="round" />
                                                    <path d="M20.541 20.5417L20.541 16.2917" stroke="white"
                                                        stroke-width="3" stroke-linecap="round" />
                                                    <path
                                                        d="M4.25 9.20825H29.75V9.20825C27.7603 9.20825 26.7655 9.20825 26.0509 9.68575C25.7415 9.89247 25.4759 10.1581 25.2692 10.4675C24.7917 11.1821 24.7917 12.1769 24.7917 14.1666V21.9583C24.7917 24.6295 24.7917 25.9652 23.9618 26.7951C23.1319 27.6249 21.7963 27.6249 19.125 27.6249H14.875C12.2037 27.6249 10.8681 27.6249 10.0382 26.7951C9.20833 25.9652 9.20833 24.6295 9.20833 21.9583V14.1666C9.20833 12.1769 9.20833 11.1821 8.73083 10.4675C8.52411 10.1581 8.25849 9.89247 7.94912 9.68575C7.23448 9.20825 6.23965 9.20825 4.25 9.20825V9.20825Z"
                                                        stroke="white" stroke-width="3" stroke-linecap="round" />
                                                    <path
                                                        d="M13.4577 4.95876C13.4577 4.95876 14.166 3.54175 16.9993 3.54175C19.8327 3.54175 20.541 4.95841 20.541 4.95841"
                                                        stroke="white" stroke-width="3" stroke-linecap="round" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr colspan="9">
                                <td colspan="9">
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <img src="{{ asset('showNoData.png') }}" width="300px" alt="">
                                            <h5 class="text-center">Data Masih Kosong!!</h5>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
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
            var actionUrl = `/alumni-gallery-update/${formData['id']}`;
            $('#form-update').attr('action', actionUrl);
            setFormValues('form-update', formData)
            
            $('#form-update').data('id', formData['id'])
            $('#form-update').attr('action', );
            $('#modal-update').modal('show')
        });
        $('.btn-detail').click(function() {
            const formData = getDataAttributes($(this).attr('id'))
            var actionUrl = `/alumni-gallery-update/${formData['id']}`;
            var photo = `${formData['photo']}`;
            var title = `${formData['title']}`;
            var created_at = new Date(formData['created_at']);
            var tanggal = created_at.toLocaleDateString('id-ID', {
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            });
            $('#photo').attr('src', 'storage/' + photo);
            $('#tanggal').text(tanggal)
            $('#title').text(title)
            $('#modal-detail').modal('show')
        });
        $('.btn-delete').click(function() {
            id = $(this).data('id')
            var actionUrl = `/alumni-gallery-delete/${id}`;
            $('#form-delete').attr('action', actionUrl);
            $('#modal-delete').modal('show')
        })
        $('.btn-delete-slider').click(function() {
            id = $(this).data('id')
            var actionUrl = `/slider-gallery-delete/${id}`;
            $('#form-delete').attr('action', actionUrl);
            $('#modal-delete').modal('show')
        })
    </script>
@endsection
