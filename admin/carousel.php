<?php
include "../admin/inc/fonctions.php";
$f=new fonctions();
$carsItems=$f->get_car_item();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Lancers Admin Panel</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="carousel.php">Carousel</a>
                        <a class="collapse-item" href="contactdet.php">Contact details/footer</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Pages</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active" href="home.php">Home</a>
                        <a class="collapse-item" href="contact.php">Contact</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Carousel</h1>
                        <a href="" data-toggle="modal" data-target="#addcar" class="bg-gradient-primary" style="color:white; border-radius: 12.5%;padding: 10px  10px ;">Ajouter <i class="fa fa-plus"></i></a>

                    </div>
                    <div class="container" style="margin-bottom: 50px;">

                        <div class="modal fade" id="addcar" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">Nouvelle image</h4>
                                    </div>
                                    <form id="addC" action="inc/forms.php" enctype="multipart/form-data" onsubmit="return submit_form(this)" method="post">
                                        <div class="modal-body mx-3">
                                            <div class="container-fluid">
                                                <div class="row mb-1">
                                                    <div class="col-5 offset-1">
                                                        <div class="form-group">
                                                            <div style="text-align: center;"><label for="titre" class="control-label mb-1">Titre</label></div>
                                                            <input id="nom_ass" name="titre" type="text"  class="form-control" value="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="form-group">
                                                            <div style="text-align: center;"><label for="slogan" class="control-label mb-1">Slogan</label></div>
                                                            <input id="pre_ass" name="slogan" type="text" class="form-control" value="" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div style="text-align: center;"><label for="img" class="control-label mb-1">Image</label></div>
                                                            <input id="pre_ass" name="img" type="file" class="form-control" value="" placeholder="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div style="text-align: center;"><label for="ord" class="control-label mb-1">Order</label></div>
                                                            <input id="pre_ass" name="ord" type="number" class="form-control" value="" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <div class="modal-footer d-flex justify-content-center">
                                            <input type="submit" class="btn btn-outline-success" value="Ajouter">
                                            <input type="hidden" name="form" value="addCar">
                                            <input type="button" class="btn btn-outline-danger" data-dismiss="modal" aria-label="Close"  value="Annuler">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->

                        <?php
                        $x=1;
                        foreach ($carsItems as $item)
                        {
                            echo'
                            <div class="row">
                            <div class="col-12">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                <h3>'.$item["titre"].'</h3></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">'.$item["slogan"].'</div>
                                        </div>
                                        <div class="col-auto">
                                            <img width="100%" src="../img/slides/'.$item["image"].'" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-3">
                                            <a href="" data-toggle="modal" data-target="#edit'.$x.'" ><i class="fa fa-edit" ></i> edit</a>
                                        </div>
                                        <div class="modal fade" id="edit'.$x.'" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">Modifier </h4>
                                    </div>
                                    <form id="addC" action="inc/forms.php" enctype="multipart/form-data" onsubmit="return submit_form(this)" method="post">
                                        <div class="modal-body mx-3">
                                            <div class="container-fluid">
                                                <div class="row mb-1">
                                                    <div class="col-5 offset-1">
                                                        <div class="form-group">
                                                            <div style="text-align: center;"><label for="titre" class="control-label mb-1">Titre</label></div>
                                                            <input id="nom_ass" name="titre" type="text"  class="form-control" value="'.$item["titre"].'" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="form-group">
                                                            <div style="text-align: center;"><label for="slogan" class="control-label mb-1">Slogan</label></div>
                                                            <input id="pre_ass" name="slogan" type="text" class="form-control" value="'.$item["slogan"].'" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div style="text-align: center;"><label for="ord" class="control-label mb-1">Order</label></div>
                                                            <input id="pre_ass" name="ord" type="number" class="form-control" value="'.$item["num"].'" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div style="text-align: center;"><label for="img" class="control-label mb-1">Image</label></div>
                                                            <input id="pre_ass" name="img" type="file" class="form-control" value="'.$item["image"].'" placeholder="" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <div class="modal-footer d-flex justify-content-center">
                                            <input type="submit" class="btn btn-outline-success" value="Ajouter">
                                            <input type="hidden" name="form" value="editCar">
                                            <input type="hidden" name="id" value="'.$item["id"].'">
                                            <input type="button" class="btn btn-outline-danger" data-dismiss="modal" aria-label="Close"  value="Annuler">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                                        <div class="col-3">
                                            <a href="" data-toggle="modal" data-target="#del'.$x.'"> <i class="fa fa-trash"></i> supprimer</a>
                                        </div>
                                        <div class="modal fade" id="del'.$x.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Supprimer Image</h4>
                                          </div>
                                          <form action="inc/forms.php" method="post">
                                            <div class="modal-body mx-3">
                                            <div class="md-form mb-5">
                                              <input type="text" id="orangeForm-name" name="" class="form-control validate text-center" value="" disabled>
                                            </div>
                                            <div class="md-form mb-5">
                                              <p class="text-center text-danger">Voulez-vous vraiment supprimer cette image?</p>
                                            </div>
                                            <input type="hidden" name="id" value="'.$item["id"].'">
                                            <input type="hidden" name="form" value="delCar">

                                          </div>
                                          <div class="modal-footer d-flex justify-content-center">
                                            <input type="button" class="btn btn-outline-success" data-dismiss="modal" aria-label="Close" value="Annuler">
                                            <input type="submit" class="btn btn-outline-danger" value="Confirmer">

                                          </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                            ';
                            $x++;
                        }
                        ?>




                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright 2020 © Design & Developed with <i style="color:#e01e39;" class="fa fa-heart"></i> by <a href="https://lancersent.tn/" target="_blank">Lancers Entreprise</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>