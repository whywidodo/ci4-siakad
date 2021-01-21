<?= $this->extend('admin/layout/template', $data); ?>

<?= $this->section('content'); ?>

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?= $this->include('admin/layout/sidebar'); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?= $this->include('admin/layout/topbar'); ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Detail Guru</h1>
                </div>

                <div class="row">

                    <!-- Area -->
                    <div class="col-xl col-lg-8">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-secondary">Edit Pegawai</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <form action="/admin/detail-guru/update/<?= $dataguru['nip']; ?>" method="POST">
                                    <?= csrf_field() ?>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="nip-pegawai" class="font-weight-bold">No Induk Pegawai</label>
                                            <input type="text" class="form-control form-control-sm" name="input-nip" value="<?= $dataguru['nip']; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email-pegawai" class="font-weight-bold">Email</label>
                                            <input type="email" class="form-control form-control-sm" name="input-email" value="">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="nama-lengkap" class="font-weight-bold">Nama Lengkap</label>
                                            <input type="text" class="form-control form-control-sm" name="input-nama" value="<?= $dataguru['nama']; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="agama" class="font-weight-bold">Agama</label>
                                            <input type="text" class="form-control form-control-sm" name="input-agama" value="">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="jk">Jenis Kelamin</label>
                                            <select name="input-jk" class="form-control form-control-sm">
                                                <?php if ($dataguru['gender'] == 'Laki-Laki') {
                                                    echo "
                                                    <option name='L' selected>Laki-Laki</option>
                                                    <option name='P'>Perempuan</option>
                                                    ";
                                                } else if ($dataguru['gender'] == 'Perempuan') {
                                                    echo "
                                                    <option name='L'>Laki-Laki</option>
                                                    <option name='P' selected>Perempuan</option>
                                                    ";
                                                } else {
                                                    echo "
                                                    <option selected></option>
                                                    <option name='L'>Laki-Laki</option>
                                                    <option name='P'>Perempuan</option>
                                                    ";
                                                } ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="tempat-lahir">Tempat Lahir</label>
                                            <input type="text" class="form-control form-control-sm" name="input-tempat" value="">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="tanggal-lahir">Tanggal Lahir</label>
                                            <input type="text" class="form-control form-control-sm datepicker" name="input-tanggal" data-provide="datepicker" data-date-format="dd/mm/yyyy" value="<?= date('d/m/Y', strtotime('2020-02-09'));; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="status-nikah">Status Pernikahan</label>
                                            <input type="text" class="form-control form-control-sm" name="input-status" value="">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="alamat">Alamat Sekarang</label>
                                            <textarea class="form-control form-control-sm" name="input-alamat"><?= $dataguru['alamat']; ?></textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="pendidikan">Pendidikan Terakhir</label>
                                            <input type="tex" class="form-control form-control-sm" name="input-pendidikan" value="">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="foto">Foto Pegawai</label>
                                            <input type="text" class="form-control form-control-sm" name="input-foto">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for=""></label>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="aktif" name="input-aktif" class="custom-control-input">
                                                <label class="custom-control-label " for="aktif">Aktif</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="nonaktif" name="input-nonaktif" class="custom-control-input">
                                                <label class="custom-control-label" for="nonaktif">Tidak Aktif</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm btn-block">Simpan Perubahan</button>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl col-lg-4">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-secondary">Detail Pegawai</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <span><img src="/assets/img/logo-amikom.png" class="img-thumbnail rounded-circle mx-auto d-block" width="15%" height="15%" alt=""></span>
                                <p class="text-center font-weight-bold"><?= $dataguru['nama']; ?></p>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>NIP</td>
                                            <td class="text-right"><?= $dataguru['nip']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td class="text-right">Laki-Laki</td>
                                        </tr>
                                        <tr>
                                            <td>Tempat, Tanggal Lahir</td>
                                            <td class="text-right"><?= 'Purbalingga' . ', ' . date('d F Y', strtotime('2020-05-19')); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td class="text-right"></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td class="text-right"></td>
                                        </tr>
                                        <tr>
                                            <td>Agama</td>
                                            <td class="text-right"></td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td class="text-right"></td>
                                        </tr>
                                        <tr>
                                            <td>Pendidikan</td>
                                            <td class="text-right"></td>
                                        </tr>
                                        <tr>
                                            <td>Status Aktif/Tidak Aktif</td>
                                            <td class="text-right">Aktif</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

        <!-- Footer -->
        <?= $this->include('admin/layout/footer') ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Page Wrapper -->

    <?= $this->endSection(); ?>