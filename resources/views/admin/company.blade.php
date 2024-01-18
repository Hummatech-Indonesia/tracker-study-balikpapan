@extends('layouts.app')
@section('content')
<h4 style="font-weight: 800">
    Data Perusahaan
</h4>
<div class="row">
    <div class="col-12 col-md-9">
        <form action="" method="get">
            <div class="d-flex justify-content-header gap-3">
                <div class="position-relative mb-3 col-lg-5">
                    <input type="text" name="name" value="{{ request()->name }}"
                        class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
                    <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
                </div>
                <div class="col-lg-3">
                    <select name="status" id="" class="form-select py-2">
                        <option value="">Filter Status</option>
                        <option value="active">Aktif</option>
                        <option value="nonactive">Tidak Aktif</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <button type="submit" class="btn btn-primary btn-md">
                        Cari
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <td>
                            No
                        </td>
                        <td>
                            Nama Perusahaan
                        </td>
                        <td>
                            Email
                        </td>
                        <td>
                            Bidang Perusahaan
                        </td>
                        <td>
                            Website
                        </td>
                        <td>
                            Status
                        </td>
                        <td>
                            Aksi
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($companies as $companie)
                        <tr>
                            <td>
                                <p class="mb-0 fw-normal mt-2">
                                    {{ $loop->iteration }}
                                </p>
                            </td>
                            <td>
                                <p class="mb-0 fw-normal mt-2">
                                    {{ $companie->user->name }}
                                </p>
                            </td>
                            <td>
                                <p class="mb-0 fw-normal mt-2">
                                    {{ $companie->user->email }}
                                </p>
                            </td>
                            <td>
                                <p class="mb-0 fw-normal mt-2">
                                    {{ $companie->company_field }}
                                </p>
                            </td>
                            <td>
                                <p class="mb-0 fw-normal mt-2">
                                    {{ $companie->website }}
                                </p>
                            </td>
                            <td>
                                <p class="mb-0 fw-normal mt-2">
                                    @if ( $companie->status == 'active' )
                                    <span class="badge text-bg-success">Aktif</span>
                                    @else
                                    <span class="badge text-bg-danger">TIdak Aktif</span>
                                    @endif
                                </p>
                            </td>
                            <td>
                                <div class="d-flex justify-content-header gap-2">
                                    <div class="">
                                        <button class="btn btn-detail" style="background-color: #1D9375" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                                <path fill="#fff" d="M12 6.5A9.77 9.77 0 0 0 3.18 12c1.65 3.37 5.02 5.5 8.82 5.5s7.17-2.13 8.82-5.5A9.77 9.77 0 0 0 12 6.5zm0 10c-2.48 0-4.5-2.02-4.5-4.5S9.52 7.5 12 7.5s4.5 2.02 4.5 4.5s-2.02 4.5-4.5 4.5z" opacity=".3"></path>
                                                <path fill="#fff" d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zm0 13A9.77 9.77 0 0 1 3.18 12C4.83 8.63 8.21 6.5 12 6.5s7.17 2.13 8.82 5.5A9.77 9.77 0 0 1 12 17.5zm0-10c-2.48 0-4.5 2.02-4.5 4.5s2.02 4.5 4.5 4.5s4.5-2.02 4.5-4.5s-2.02-4.5-4.5-4.5zm0 7a2.5 2.5 0 0 1 0-5a2.5 2.5 0 0 1 0 5z"></path>
                                            </svg>
                                        </button>
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
                                        <h4 class="text-center mt-4">Data Perusahaan Kosong!!</h4>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $companies->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
