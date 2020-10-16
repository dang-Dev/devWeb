
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - ETG Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">ETG SERVER</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                   
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">  
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="dash.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-laptop"></i></div>
                                Vendo List
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="javascript:void(0)" id="ven1">Vendo 1</a>
                                    <a class="nav-link" href="javascript:void(0)" id="ven2">Vendo 2</a>
                                    <a class="nav-link" href="javascript:void(0)" id="ven3">Vendo 3</a>
                                    <a class="nav-link" href="javascript:void(0)" id="ven4">Vendo 4</a>
                                    <a class="nav-link" href="javascript:void(0)" id="ven5">Vendo 5</a>
                                    <a class="nav-link" href="javascript:void(0)" id="ven6">Vendo 6</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                #######
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        ###
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">###</a>
                                            <a class="nav-link" href="#">###</a>
                                            <a class="nav-link" href="#">###</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        ####
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">#</a>
                                            <a class="nav-link" href="##">##</a>
                                            <a class="nav-link" href="###">###</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main id="main-content">
                <div id="main-content">
                    <div class="container-fluid">
                        <h6>&nbsp</h6>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">DASHBOARD</li>
                        </ol> 
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">
                                        <h1>35.7'C</h1>
                                        <p>Temperature</p>
                                        <i class="fa fa-thermometer-half mylogo" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                        <h1><span>₱</span>256</h1>
                                        <p>Earnings Today</p>
                                        <i class="fa fa-money-bill-alt mylogo" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">
                                        <h1>12</h1>
                                        <p>Connected Users</p>
                                        <i class="fa fa-users mylogo" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">
                                        <h1>20</h1>
                                        <p>Users On Pause</p>
                                        <i class="fa fa-pause mylogo"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5>Total Disk:</h5>
                                <div>
                                    Used:
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-purple" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">50%</div>
                                </div>
                                <div>
                                    Remaining:
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-purple" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5>Total CPU:</h5>
                                <div>
                                    Used:
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">50%</div>
                                </div>
                                <div>
                                    Remaining:
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5>Total RAM:</h5>
                                <div>
                                    Used:
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 20%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">50%</div>
                                </div>
                                <div>
                                    Remaining:
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header bg-primary">
                                <h5 style="color: white;"><i class="fas fa-users"></i> CONNECTED USERS</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Device Name</th>
                                                <th>Username</th>
                                                <th>Ip Address</th>
                                                <th>Mac Address</th>
                                                <th>Pause</th>
                                                <th>Time</th>
                                                <th>Vendo</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                            </tr>
                                            <tr>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header bg-primary">
                                <h5 style="color: white;"><i class="fas fa-users"></i> USERS ON PAUSE</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Device Name</th>
                                                <th>Username</th>
                                                <th>Ip Address</th>
                                                <th>Mac Address</th>
                                                <th>Pause</th>
                                                <th>Time</th>
                                                <th>Vendo</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                            </tr>
                                            <tr>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                                <th>--</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
         <script src="js/scripts.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    </body>
</html>
