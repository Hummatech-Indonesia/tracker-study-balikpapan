@extends('layouts.app')
@section('content')
    <h5 class="text-dark" style="font-weight: 550">
        Pelamar Kerja
    </h5>
    <div class="d-flex justify-content-header gap-3">
        <div class="position-relative mb-3">
            <input type="text" class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
            <i class="bx bx-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
        </div>
        <div class="col-lg-2">
            <select name="" id="" class="form-select py-2">
                <option value="">Filter</option>
            </select>
        </div>
    </div>
    <div class="table-responsiv">
        <table class="table">
            <thead>
                <tr>
                    <td>
                        No
                    </td>
                    <td>
                        Nama Pelamar
                    </td>
                    <td>
                        Lowongan Yang di Lamar
                    </td>
                    <td>
                        Email
                    </td>
                    <td>
                        Jenis Kelamin
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
                @forelse ($applyJobVacancies as $applyJobVacancie)
                    <tr>
                        <td>
                            <p class="mt-2" style="font-weight:500">
                                {{ $loop->iteration }}
                            </p>
                        </td>
                        <td>
                            <div class="d-flex justify-content-header gap-2">
                                <div class="">
                                    <img src="{{ asset($applyJobVacancie->student->user->photo == null ? 'default.jpg' : 'storage/' . $applyJobVacancie->student->user->photo) }}"
                                        class="user-img" alt="user avatar">
                                </div>
                                <p class="mt-2" style="font-weight:500">
                                    {{ $applyJobVacancie->student->user->name }}
                                </p>
                            </div>
                        </td>
                        <td>
                            <p class="mt-2" style="font-weight:500">
                                {{ $applyJobVacancie->jobVacancy->job_title }}
                            </p>
                        </td>
                        <td>
                            <p class="mt-2" style="font-weight:500">
                                {{ $applyJobVacancie->student->user->email }}
                            </p>
                        </td>
                        <td>
                            <p class="mt-2" style="font-weight:500">
                                {{ $applyJobVacancie->student->gender == 'male' ? 'Laki - Laki' : 'Perempuan' }}
                            </p>
                        </td>
                        <td>
                            @if ($applyJobVacancie->status == 'accepted')
                                <span class="badge bg-gradient-quepal text-white shadow-sm w-100 p-1">Terima</span>
                            @elseif ($applyJobVacancie->status == 'rejected')
                                <span class="badge bg-gradient-bloody text-white shadow-sm w-100 p-1">Tolak</span>
                            @else
                                <span class="badge bg-gradient-blooker text-white shadow-sm w-100 p-1">Menunggu</span>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex justify-content-header gap-2">
                            @if ($applyJobVacancie->status == 'pending')
                            <div class="">
                                <button class="btn btn-sm btn-success btn-accept" id="btn-edit-{{ $applyJobVacancie->id }}" data-id="{{ $applyJobVacancie->id }}">Terima</button>
                            </div>
                            <div class="">
                                <button class="btn btn-sm btn-danger btn-reject" id="btn-edit-{{ $applyJobVacancie->id }}" data-id="{{ $applyJobVacancie->id }}" >Tolak</button>
                            </div>
                            <div class="">
                                <button class="btn text-white btn-sm btn-info">Detail</button>
                            </div>
                            @else
                            <div class="">
                                <button class="btn text-white btn-sm btn-info">Detail</button>
                            </div>
                            @endif
                        </div>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">
                            <div class="d-flex justify-content-center" style="min-height:16rem">
                                <div class="my-auto">
                                    <img src="{{ asset('showNoData.png') }}" width="300" height="300" />
                                    <h4 class="text-center mt-4">Tidak Ada Pelamar!!</h4>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="modal-update-accept" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <form id="form-update-accept" method="post">
                @csrf
                @method('PATCH')
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="exampleModalLabel">Pesan Di Terima</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="formFile" class="form-label">Pesan Kepada Pelamar</label>
                                <textarea name="message" class="form-control" id="" cols="20" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary text-white">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="modal-update-reject" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <form id="form-update-reject" method="post">
                @csrf
                @method('PATCH')
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="exampleModalLabel">Pesan Di Tolak</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="formFile" class="form-label">Pesan Kepada Pelamar</label>
                                <textarea name="message" class="form-control" id="" cols="20" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary text-white">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.btn-accept').click(function() {
            const formData = getDataAttributes($(this).attr('id'))
            var actionUrl = `accept-job-vacancy/${formData['id']}`;
            $('#form-update-accept').attr('action', actionUrl);

            setFormValues('form-update-accept', formData)
            $('#form-update-accept').data('id', formData['id'])
            $('#form-update-accept').attr('action', );
            $('#modal-update-accept').modal('show')
        });
        $('.btn-reject').click(function() {
            const formData = getDataAttributes($(this).attr('id'))
            var actionUrl = `accept-job-vacancy/${formData['id']}`;
            $('#form-update-reject').attr('action', actionUrl);

            setFormValues('form-update-reject', formData)
            $('#form-update-reject').data('id', formData['id'])
            $('#form-update-reject').attr('action', );
            $('#modal-update-reject').modal('show')
        });
    </script>
@endsection
