<div class="modal fade" id="modal-reject" tabindex="-1" aria-labelledby="exampleModalLabel2">
    <div class="modal-dialog modal-sm" role="document">
        <form id="form-reject" method="POST">
            @method('PATCH')
            @csrf
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="exampleModalLabel2">
                        Verifikasi Akun
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Apakah anda yakin ingin menolak verifikasi akun ini?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger text-white font-medium waves-effect"
                        data-bs-dismiss="modal">
                        Tutup
                    </button>
                    <button style="background-color: #1B3061" type="submit" class="btn text-white btn-create">
                        Yakin
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
