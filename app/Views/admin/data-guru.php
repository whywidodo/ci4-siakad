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
                    <h1 class="h4 mb-0 text-gray-900">Data Guru</h1>
                    <a href="#" data-toggle="modal" data-target="#tambahguruModal" class="d-sm-inline-block btn btn-sm btn-outline-success"><i class="fas fa-plus fa-sm"></i> Tambah Guru</a>
                </div>
                <?= $this->include('admin/modal-tambahguru'); ?>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="flash-data" data-flashdata="<?= session()->getFlashdata('flash'); ?>"></div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm display nowrap" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Hp</th>
                                        <th>Gender</th>
                                        <th>-</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($dataguru as $d_guru) :
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $i++; ?></td>
                                            <td><?= $d_guru['nip']; ?></td>
                                            <td><?= $d_guru['nama']; ?></td>
                                            <td><?= $d_guru['alamat']; ?></td>
                                            <td><?= $d_guru['hp']; ?></td>
                                            <td><?= $d_guru['gender']; ?></td>
                                            <td class="text-center">
                                                <form action="/admin/detail-guru/<?= $d_guru['nip']; ?>" method="POST" name="detail" class="d-inline-block">
                                                    <?= csrf_field(); ?>
                                                    <button type="submit" name="detail" class="btn btn-sm btn-outline-primary shadow-sm"><i class="fas fa-search fa-sm"></i> Detail</button>
                                                </form>
                                                <form action="/admin/hapus-guru/<?= $d_guru['nip']; ?>" method="POST" name="detail" class="d-inline-block">
                                                    <?= csrf_field(); ?>
                                                    <button type="submit" name="hapus" value="Hapus" class="btn btn-sm btn-outline-danger shadow-sm tombol-hapus-guru"><i class="fas fa-trash fa-sm"></i> Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?= $this->include('admin/layout/footer'); ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?= $this->endsection(); ?>