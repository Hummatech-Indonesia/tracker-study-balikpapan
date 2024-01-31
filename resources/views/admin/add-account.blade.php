@extends('layouts.app')
@section('content')
    <h4 style="font-weight: 800">
        Tambah Akun Admin Atau Staff
    </h4>
    <div class="row">
        <div class="position-relative mb-3 col-md-9 col-sm-12">
            <div class="col-md-7 col-lg-4 col-sm-12">
                <form action="">
                    <input type="text" name="name" value="{{ request()->name }}"
                        class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
                    <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
                </form>
            </div>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="d-flex justify-content-end mb-3">
                <button class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleLargeModal"
                    style="background-color: #5D87FF">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 18 19"
                        fill="none">
                        <path d="M9 2L9 17" stroke="white" stroke-width="3" stroke-linecap="round" />
                        <path d="M1.5 9.5L16.5 9.5" stroke="white" stroke-width="3" stroke-linecap="round" />
                    </svg> Akun</button>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">
        <form action="{{ route('users.store') }}" method="post">
            @csrf
            @method('POST')
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <p class="text-center fs-5 mt-3" style="font-weight:800">
                        Tambah Akun
                    </p>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <label for="formFile" class="form-label">Nama</label>
                                <input type="text" placeholder="Masukkan Nama" class="form-control"
                                    value="{{ old('name') }}" name="name" id="">
                            </div>
                            <div class="col-6">
                                <p class="mb-0"><label for="formFile" class="form-label">Email</label></p>
                                <input name="email" placeholder="Masukkan Email" id=""
                                    value="{{ old('email') }}" class="form-control"></input>
                            </div>
                            <div class="col-6 mt-2">
                                <label for="formFile" class="form-label">Password</label>
                                <input type="password" placeholder="Masukkan Password" value="{{ old('password') }}"
                                    class="form-control" name="password" id="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn text-white" style="background-color: #1D9375">Tambah</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="modal fade" id="modal-update" tabindex="-1" aria-hidden="true">
        <form id="form-update" method="post">
            @csrf
            @method('PUT')
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <p class="text-center fs-5 mt-3" style="font-weight:800">
                        Edit Akun
                    </p>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <label for="formFile" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="name" id="">
                            </div>
                            <div class="col-6">
                                <p class="mb-0"><label for="formFile" class="form-label">Email</label></p>
                                <input name="email" id="" class="form-control"></input>
                            </div>
                            <div class="col-6 mt-2">
                                <label for="formFile" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn text-white" style="background-color: #1D9375">Edit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible mt-3 fade show" role="alert">
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            @endif
            @if (session('success'))
                <div class="alert alert-success alert-dismissible mt-3 fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>
                                No
                            </td>
                            <td>
                                Nama
                            </td>
                            <td>
                                Email
                            </td>
                            <td>
                                Aksi
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($accounts as $account)
                            <tr>
                                <td>
                                    <p class="mb-0 fw-normal mt-2">
                                        {{ $loop->iteration }}
                                    </p>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal mt-2">
                                        {{ $account->name }}
                                    </p>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal mt-2">
                                        {{ $account->email }}
                                    </p>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-header gap-2">
                                        <div class="">
                                            <button class="btn btn-warning btn-edit" data-id="{{ $account->id }}"
                                                id="btn-edit-{{ $account->id }}" data-name="{{ $account->name }}"
                                                data-email="{{ $account->email }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 34 35" fill="none">
                                                    <path
                                                        d="M12.3521 27.2832C12.3542 27.2827 12.3563 27.2822 12.3584 27.2817C12.3819 27.2758 12.4061 27.2698 12.431 27.2637C12.7245 27.1914 13.1093 27.0965 13.4624 26.8966C13.8155 26.6967 14.0949 26.4155 14.3079 26.201C14.3276 26.1812 14.3467 26.162 14.3653 26.1434L24.5569 15.9518C24.5757 15.933 24.5946 15.9141 24.6134 15.8953C25.0364 15.4725 25.453 15.0561 25.7512 14.6652C26.0891 14.2223 26.4129 13.6409 26.4129 12.8877C26.4129 12.1345 26.0891 11.5531 25.7512 11.1102C25.453 10.7193 25.0364 10.3029 24.6134 9.88007C24.5946 9.86125 24.5757 9.84241 24.5569 9.82357L24.3138 9.5805L23.2531 10.6412L24.3138 9.5805C24.2949 9.56165 24.2761 9.5428 24.2573 9.52396C23.8344 9.10093 23.418 8.68436 23.0272 8.38613C22.5843 8.04822 22.0029 7.7245 21.2497 7.7245C20.4964 7.7245 19.9151 8.04822 19.4722 8.38613C19.0813 8.68436 18.6649 9.10095 18.242 9.52399C18.2232 9.54282 18.2044 9.56166 18.1855 9.5805L7.99394 19.7721C7.97539 19.7907 7.95615 19.8098 7.93634 19.8295C7.72187 20.0425 7.44071 20.3218 7.24079 20.6749C7.04087 21.028 6.94602 21.4128 6.87366 21.7063C6.86698 21.7335 6.86049 21.7598 6.85412 21.7852L5.91412 25.5452C5.91012 25.5613 5.90592 25.5779 5.90157 25.5952C5.8497 25.8015 5.77587 26.0951 5.75034 26.3561C5.72084 26.6576 5.70967 27.3297 6.25867 27.8787C6.80766 28.4277 7.47975 28.4165 7.78124 28.387C8.04229 28.3615 8.33585 28.2877 8.54214 28.2358C8.55944 28.2314 8.57612 28.2272 8.59212 28.2232L12.3521 27.2832Z"
                                                        stroke="white" stroke-width="3" />
                                                    <path
                                                        d="M17.708 10.7625L21.958 7.9292L26.208 12.1792L23.3747 16.4292L17.708 10.7625Z"
                                                        stroke="white" stroke-width="2.5" />
                                                </svg> </button>
                                        </div>
                                        <div class="">
                                            <button class="btn btn-danger btn-delete" data-id="{{ $account->id }}"
                                                data-bs-toggle="modal" data-bs-target="#modal-delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 34 34" fill="none">
                                                    <path d="M13.4587 20.5418L13.4587 16.2918" stroke="white"
                                                        stroke-width="3" stroke-linecap="round" />
                                                    <path d="M20.5413 20.5418L20.5413 16.2918" stroke="white"
                                                        stroke-width="3" stroke-linecap="round" />
                                                    <path
                                                        d="M4.25 9.20819H29.75V9.20819C27.7603 9.20819 26.7655 9.20819 26.0509 9.68569C25.7415 9.89241 25.4759 10.158 25.2692 10.4674C24.7917 11.182 24.7917 12.1769 24.7917 14.1665V21.9582C24.7917 24.6295 24.7917 25.9651 23.9618 26.795C23.1319 27.6249 21.7963 27.6249 19.125 27.6249H14.875C12.2037 27.6249 10.8681 27.6249 10.0382 26.795C9.20833 25.9651 9.20833 24.6295 9.20833 21.9582V14.1665C9.20833 12.1769 9.20833 11.182 8.73083 10.4674C8.52411 10.158 8.25849 9.89241 7.94912 9.68569C7.23448 9.20819 6.23965 9.20819 4.25 9.20819V9.20819Z"
                                                        stroke="white" stroke-width="3" stroke-linecap="round" />
                                                    <path
                                                        d="M13.4579 4.95882C13.4579 4.95882 14.1663 3.54181 16.9996 3.54181C19.8329 3.54181 20.5413 4.95848 20.5413 4.95848"
                                                        stroke="white" stroke-width="3" stroke-linecap="round" />
                                                </svg> </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    <div class="d-flex justify-content-center" style="min-height:16rem">
                                        <div class="my-auto">
                                            <img src="{{ asset('showNoData.png') }}" width="300" height="300" />
                                            <h4 class="text-center mt-4">Data Akun Kosong!!</h4>
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
            var actionUrl = `users/${formData['id']}`;
            $('#form-update').attr('action', actionUrl);

            setFormValues('form-update', formData)
            $('#form-update').data('id', formData['id'])
            $('#form-update').attr('action', );
            $('#modal-update').modal('show')
        })
        $('.btn-delete').click(function() {
            id = $(this).data('id')
            var actionUrl = `students/${id}`;
            $('#form-delete').attr('action', actionUrl);
            $('#modal-delete').modal('show')
        })
    </script>
@endsection
