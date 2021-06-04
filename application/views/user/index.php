<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets'); ?> /vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets'); ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img class="img-thumbnail" src="<?= base_url('assets/img/profile_picture/') . $user['image']; ?>" alt="">
                </div>
                <div class="sidebar-brand-text mx-3"> <?= $user['name']; ?></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li>
                <center>
                    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#logoutModal">
                        Logout
                    </button>
                </center>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-3 text-gray-800 mt-3 text-center">Welcome <?= $user['name']; ?> </h1>
                    <div class="row">
                        <div class="col-6 border rounded" style="background-color: #d8e3e7; ">
                            <h5 class=" text-white mt-2 bg-secondary w-50 text-center rounded" style="opacity: 0.9;"><u>Basic Information</u></h5>
                            <div class="table-responsive">
                                <table class="table">

                                    <tr>
                                        <td scope="col">Nama</td>
                                        <td><?= $user['name']; ?></td>
                                    </tr>

                                    <tr>
                                        <td scope="col">Email</td>
                                        <td><?= $user['email']; ?></td>
                                    </tr>

                                    <tr>
                                        <td scope="col">Foto Profil</td>
                                        <td><img src="<?= base_url('assets/img/profile_picture/') . $user['image']; ?>" width="150px"></td>
                                    </tr>

                                    <tr>
                                        <td scope="col">Status</td>
                                        <td><?php if ($user['is_active'] == 1) {
                                                echo "Aktif";
                                            } else {
                                                echo "Tidak Aktif";
                                            } ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="col-6">
                            <img src="<?= base_url('assets/img/landing_page2.png') ?>" class="w-100" alt="">
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Triadi Kurniawan 2021</span>
                        <br>
                        <span>Test for Coralis Studio</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>