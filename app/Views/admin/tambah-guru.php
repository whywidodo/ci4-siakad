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
                <h1 class="h4 mb-4 text-gray-800">Tambah Data Guru</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="row card-body">
                        <div class="col-lg-6 ">
                            <h4 class="small font-weight-bold">NIP</h4>
                            <div class="mb-3">
                                <input type="text" class="form-control" autofocus="autofocus">
                            </div>
                            <h4 class="small font-weight-bold">Nama Lengkap</h4>
                            <div class="mb-3">
                                <input type="text" class="form-control">
                            </div>
                            <h4 class="small font-weight-bold">Alamat</h4>
                            <div class="mb-3">
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>
                            <h4 class="small font-weight-bold">Gender</h4>
                            <div class="mb-3">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="lakilaki" name="example1" value="customEx">
                                    <label class="custom-control-label" for="lakilaki">Laki - Laki</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="perempuan" name="example1" value="customEx">
                                    <label class="custom-control-label" for="perempuan">Perempuan</label>
                                </div>
                            </div>
                            <h4 class="small font-weight-bold">Hp</h4>
                            <div class="mb-3">
                                <input type="tel" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="button" class="btn btn-primary btn-lg btn-block"><i class="fas fa-check-circle fa-sm"></i> Simpan</button>
                            </div>
                        </div>

                        <div class="col-lg-5 ml-auto">
                            <div class="card-body">
                                <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                    CSS bloat and poor page performance. Custom CSS classes are used to create
                                    custom components and custom utility classes.</p>
                                <p class="mb-0">Before working with this theme, you should become familiar with the
                                    Bootstrap framework, especially the utility classes.</p>
                            </div>
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