<!DOCTYPE html>

<head>
    <title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="<?php echo base_url() ?>favicon.png" type="image/gif">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/DataTables/datatables.min.css" />
    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/0a3ad4cd34.js" crossorigin="anonymous"></script>
</head>

<body>
    <style>
        .pagination .page-item.active .page-link {
            background-color: #273c75;
            border-color: #273c75;
        }

        div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-item.active .page-link:focus {
            background-color: #101e42;
        }

        .pagination .page-item.active .page-link:hover {
            background-color: #192a56;
        }
    </style>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <div class="row">
                    <h3 class="col-sm-8">Atlantica Hotel</h3>
                    <div class="col-sm-2">
                        <button id="sidebarCollapse" class="btn btn-lg text-white" style="background-color: #192a56;"><i class="fas fa-align-justify"></i></button>
                    </div>
                </div>
                <strong class="mb-2">A</strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a class="text-white" href="<?php echo base_url() ?>dashboard"><i class="fas fa-home mx-3"></i> Dashboard</a>
                </li>
                <li>
                    <a class="text-white" href=""><i class="fas fa-book-open mx-3"></i> Reservasi</a>
                </li>
                <li>
                    <a class="text-white" href=""><i class="fas fa-person-booth mx-3"></i> Pengunjung</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-white"><i class="fas fa-bed mx-3"></i> Kamar</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a class="text-white" href="">Semua Kamar</a>
                        </li>
                        <li>
                            <a class="text-white" href="">Lantai 1</a>
                        </li>
                        <li>
                            <a class="text-white" href="">Lantai 2</a>
                        </li>
                        <li>
                            <a class="text-white" href="">Lantai 3</a>
                        </li>
                        <li>
                            <a class="text-white" href="">Lantai 4</a>
                        </li>
                        <li>
                            <a class="text-white" href="">Lantai 5</a>
                        </li>
                        <li>
                            <a class="text-white" href="">Lantai 6</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="text-white" href=""><i class="fas fa-user-edit mx-3"></i> Resepsionis</a>
                </li>
            </ul>
        </nav>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #dcdde1;">
                <div class="container-fluid">
                    <button id="sidebarCollapse2" class="btn btn-lg d-inline-block d-lg-none" style="background-color: #40739e;"><i class="fas fa-align-justify"></i></button>

                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-user-circle"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Log out <i class="fas fa-sign-out-alt"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid d-flex px-3">
                <div class="col-sm-12">
                    <?php echo $_content ?>
                </div>

                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Anda yakin ingin menghapus data?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                <a class="btn-ok"><button type="button" class="btn text-white" style="background-color: #c23616;">Hapus</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- DataTables -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/DataTables/datatables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal-dark"
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

            $('#sidebarCollapse2').on('click', function() {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

            $('#deleteModal').on('show.bs.modal', function(e) {
                $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            });

            $('#myTable').DataTable({
                "paging": "false"
            });
        });
    </script>

</body>

</html>