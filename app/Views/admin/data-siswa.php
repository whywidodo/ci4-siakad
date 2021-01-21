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
                    <h1 class="h4 mb-0 text-gray-900">Data Siswa</h1>
                    <a href="#" data-toggle="modal" data-target="#tambahsiswaModal" class="d-sm-inline-block btn btn-sm btn-outline-success"><i class="fas fa-plus fa-sm"></i> Tambah Siswa</a>
                    <a href="/admin/print-siswa" class="d-sm-inline-block btn btn-sm btn-outline-primary"><i class="fas fa-print fa-sm"></i> Print</a>
                </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="flash-data" data-flashdata="<?= session()->getFlashdata('flash'); ?>"></div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm display nowrap" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>Nama Siswa</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Kelas</th>
                                        <th>-</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($datasiswa as $d_siswa) :
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $i++; ?></td>
                                            <td><?= $d_siswa['nis']; ?></td>
                                            <td><?= $d_siswa['nama']; ?></td>
                                            <td><?= $d_siswa['gender']; ?></td>
                                            <td><?= $d_siswa['alamat']; ?></td>
                                            <td><?= $d_siswa['kelas']; ?></td>
                                            <td class="text-center">
                                                <form action="/admin/detail/<?= $d_siswa['nis']; ?>" method="POST" name="detail" class="d-inline-block">
                                                    <?= csrf_field(); ?>
                                                    <button type="submit" name="detail" class="btn btn-sm btn-outline-primary shadow-sm"><i class="fas fa-search fa-sm"></i> Detail</button>
                                                </form>
                                                <form action="/admin/hapus/<?= $d_siswa['nis']; ?>" method="POST" name="detail" class="d-inline-block">
                                                    <?= csrf_field(); ?>
                                                    <button type="submit" name="opsi-guru" value="Hapus" class="btn btn-sm btn-outline-danger shadow-sm tombol-hapus-siswa"><i class="fas fa-trash fa-sm"></i> Hapus</button>
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