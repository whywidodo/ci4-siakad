<!-- Tambah Guru Modal-->
<div class="flash-data" data-flashdata="<?= session()->getFlashdata('flash'); ?>"></div>
<div class="modal fade" id="tambahguruModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog mw-100 w-50 align-items-center" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahguru">Tambah Data Guru</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-sm">
                    <form action="/admin/simpan-guru" method="POST" autocomplete="off">
                        <?= csrf_field(); ?>
                        <h4 class="small font-weight-bold">NIP</h4>
                        <div class="mb-3">
                            <input type="text" name="nip" class="form-control form-control-sm" autofocus="autofocus">
                        </div>
                        <h4 class="small font-weight-bold">Nama Lengkap</h4>
                        <div class="mb-3">
                            <input type="text" name="nama" class="form-control form-control-sm">
                        </div>
                        <h4 class="small font-weight-bold">Alamat</h4>
                        <div class="mb-3">
                            <textarea class="form-control form-control-sm" name="alamat" rows="5"></textarea>
                        </div>
                        <h4 class="small font-weight-bold">Gender</h4>
                        <div class="mb-3">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="lakilaki" name="gender" value="Laki-Laki">
                                <label class="custom-control-label" for="lakilaki">Laki - Laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="perempuan" name="gender" value="Perempuan">
                                <label class="custom-control-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>
                        <h4 class="small font-weight-bold">Hp</h4>
                        <div class="mb-3">
                            <input type="tel" name="hp" class="form-control form-control-sm">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary btn-sm btn-block"><i class="fas fa-check-circle fa-sm"></i> Simpan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>