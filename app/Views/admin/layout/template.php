<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIAKAD - SMP Negeri 1 Bukateja</title>
    <link rel="icon" type="image/x-icon" href="/siakad/img/favicon.ico" />
    <!-- Custom fonts for this template-->
    <link href="/siakad/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/siakad/css/sb-admin-2.css" rel="stylesheet">
    <link href="/siakad/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Memuat Content -->
    <?= $this->renderSection('content'); ?>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/login">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/siakad/vendor/jquery/jquery.min.js"></script>
    <script src="/siakad/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/siakad/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/siakad/js/sb-admin-2.js"></script>

    <!-- Page level plugins -->
    <?php if ($data == "Charts" || $data == "") { ?>
        <script src="/siakad/vendor/chart.js/Chart.min.js"></script>
    <?php } else if ($data == "Tables" || $data = "Guru") { ?>
        <script src="/siakad/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="/siakad/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <?php } ?>
    <!-- Page level custom scripts -->
    <?php if ($data == "" || $data == "Charts") { ?>
        <script src="/siakad/js/demo/chart-area-demo.js"></script>
        <script src="/siakad/js/demo/chart-pie-demo.js"></script>
    <?php } ?>
    <?php if ($data == "Charts") { ?>
        <script src="/siakad/js/demo/chart-bar-demo.js"></script>
    <?php } else if ($data == "Tables" || $data == "Guru") { ?>
        <script src="/siakad/js/demo/datatables-demo.js"></script>
    <?php } ?>

    <!-- Sweet Alert -->
    <script src="/siakad/vendor/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="/siakad/vendor/sweetalert2/custom-alert.js"></script>

</body>

</html>