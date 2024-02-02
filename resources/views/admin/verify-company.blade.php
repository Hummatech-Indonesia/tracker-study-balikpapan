@extends('layouts.app')
@section('title', 'verify-company')

@section('content')
    <div class="d-flex justify-content-between">
        <h4 class="mb-3">
            Verifikasi Akun Perusahaan
        </h4>
        <div class="position-relative mb-3 col-lg-3">
            <form action="{{ route('verify.company') }}" method="get">
                <input type="text" name="name" class="form-control search-chat py-2 ps-5" id="search-name"
                    placeholder="Search">
                <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
                <button type="submit" style="display: none"></button>
            </form>
        </div>
    </div>
    <div class="d-flex justify-content-end gap-3 mb-3">
        <div class="">
            <button id="btn-accept-company" class="btn text-white btn-primary">Terima Semua</button>
        </div>
        <div class="">
            <button id="btn-reject-company" class="btn text-white btn-warning">Tolak Semua</button>
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible mt-3 fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table">
            <thead>
                <th> <input type="checkbox" name="" id="select-all"> </th>
                <th>Nama</th>
                <th>email</th>
                <th>deskripsi</th>
                <th>No Telephone</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                @forelse ($companies as $company)
                    <tr>
                        <td><input type="checkbox" name="select" value="{{ $company->id }}" class="select"></td>
                        <td>{{ $company->user->name }}</td>
                        <td>{{ $company->user->email }}</td>
                        <td>{{ $company->description }}</td>
                        <td>{{ $company->user->phone_number }}</td>
                        <td>
                            <div class="d-flex justify-content-header gap-2">
                                <div class="">
                                    <button class="btn btn-approve w-100 text-white" data-id="{{ $company->id }}"
                                        data-bs-toggle="modal" style="background-color: #1D9375">Terima</button>
                                </div>
                                <div class="">
                                    <button data-id="{{ $company->id }}" data-bs-toggle="modal"
                                        class="btn btn-danger w-100 btn-reject">Tolak</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('showNoData.png') }}" alt="">
                                    <h5 class="text-center">Semua Data Sudah Di Verifikasi!!</h5>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
    <x-confirm-approve-modal-component />
    <x-confirm-reject-modal-component />
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            var selectedValues = [];

            $(".select").change(function() {
                selectedValues = [];
                $(".select:checked").each(function() {
                    selectedValues.push($(this).val());
                });
            });

            $("#btn-reject-company").click(function() {
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: 'Anda akan menolak semua siswa. Tindakan ini tidak bisa dibatalkan.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Iya!',
                    cancelButtonText: 'Tidak, batal!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '{{ route('reject.verify.company.all') }}',
                            method: 'PATCH',
                            data: {
                                select: selectedValues,
                            },
                            success: function(response) {
                                console.log(response.message);
                                location.reload();
                            },
                            error: function(error) {
                                console.error('Error:', error);
                                // Handle error jika diperlukan
                            }
                        });
                    }
                });
            })

            $("#btn-accept-company").click(function() {
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: 'Anda akan menerima semua siswa. Tindakan ini tidak bisa dibatalkan.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Iya!',
                    cancelButtonText: 'Tidak, batal!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '{{ route('approve.verify.company.all') }}',
                            method: 'PATCH',
                            data: {
                                select: selectedValues,
                            },
                            success: function(response) {
                                console.log(response.message);
                                location.reload();
                            },
                            error: function(error) {
                                console.error('Error:', error);
                                // Handle error jika diperlukan
                            }
                        });
                    }
                });
            })


            // Trigger change event of individual checkboxes when "Select All" is clicked
            $("#select-all").change(function() {
                $(".select").prop("checked", $(this).prop("checked")).change();
            });

            $(".select").change(function() {
                if (!$(this).prop("checked")) {
                    $("#select-all").prop("checked", false);
                }
            });
        });
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
