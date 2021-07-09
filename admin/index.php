<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Xtreme lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Xtreme admin lite design, Xtreme admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta name="description" content="Xtreme Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <title>Zra | Dasboard Admin</title>
        <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="canonical" href="https://www.wrappixel.com/templates/xtreme-admin-lite/" />
    <!-- Custom CSS -->
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.php">
              <!-- Logo icon -->
              <b class="logo-icon">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img src="../assets/img/images/logo-icon.png" alt="homepage" class="dark-logo" />
                <!-- Light Logo icon -->
                <img src="../assets/img/images/logo-light-icon.png" alt="homepage" class="light-logo" />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text">
                <!-- dark Logo text -->
                <img src="../assets/img/images/logo-text.png" alt="homepage" class="dark-logo" />
                <!-- Light Logo text -->
                <img src="../assets/img/images/logo-light-text.png" class="light-logo" alt="homepage" />
              </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
              <i class="ti-menu ti-close"></i></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li class="nav-item search-box">
                <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                  <i class="ti-search"></i></a>
                <form class="app-search position-absolute">
                  <input type="text" class="form-control" placeholder="Search &amp; enter" /> <a class="srh-btn">
                    <i class="ti-close"></i></a>
                </form>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="../assets/img/images/users/1.jpg" alt="user" class="rounded-circle" width="31" />
                </a>
                <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                  <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                  <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <!-- User Profile-->
              <li>
                <!-- User Profile-->
                <div class="user-profile d-flex no-block dropdown m-t-20">
                  <div class="user-pic"><img src="../assets/img/images/users/1.jpg" alt="users" class="rounded-circle" width="40" /></div>
                  <div class="user-content hide-menu m-l-10">
                    <a href="#" class="" id="Userdd" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <h5 class="m-b-0 user-name font-medium">Steave Jobs</h5>
                      <span class="op-5 user-email">varun@gmail.com</span>
                    </a>
                  </div>
                </div>
                <!-- End User Profile-->
              </li>
              <!-- User Profile-->
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false">
                  <i class="mdi mdi-view-dashboard"></i>
                  <span class="hide-menu">Dashboard</span></a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-basic.php" aria-expanded="false">
                  <i class="mdi mdi-border-all"></i>
                  <span class="hide-menu">Table</span></a>
              </li>
              <li class="text-center p-40 upgrade-btn">
                <a href="../login.php" class="btn d-block w-100 btn-danger text-white">Logout</a>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row align-items-center">
            <div class="col-5">
              <h4 class="page-title">Dashboard</h4>
            </div>
            <div class="col-7">
              <div class="text-end upgrade-btn">
                <a href="tambah-produk" class="btn btn-success text-white" target="_blank">Tambah Product</a>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- Table Produk  -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                  <div class="card-body">
                    <h6 class="card-title">
                          <i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Table Product</h6>
                      <div class="table-responsive">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">Gambar</th>
                                      <th scope="col">Nama</th>
                                      <th scope="col">Stok</th>
                                      <th scope="col">Harga</th>
                                      <th scope="col">Deskripsi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <th scope="row">1</th>
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td>@mdo</td>
                                  </tr>
                                  <tr>
                                      <th scope="row">2</th>
                                      <td>Jacob</td>
                                      <td>Thornton</td>
                                      <td>@fat</td>
                                  </tr>
                                  <tr>
                                      <th scope="row">3</th>
                                      <td>Larry</td>
                                      <td>the Bird</td>
                                      <td>@twitter</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <!-- End Table Produk  -->

          <!-- ============================================================== -->
          <!-- Recent comment and chats -->
          <!-- ============================================================== -->
          <div class="row">
            <!-- column -->
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Recent Comments</h4>
                </div>
                <div class="comment-widgets scrollable">
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row m-t-0">
                    <div class="p-2"><img src="../assets/img/images/users/1.jpg" alt="user" width="50" class="rounded-circle" /></div>
                    <div class="comment-text w-100">
                      <h6 class="font-medium">James Anderson</h6>
                      <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                      <div class="comment-footer">
                        <span class="text-muted float-end">April 14, 2021</span> <span class="label label-rounded label-primary">Pending</span>
                        <span class="action-icons">
                          <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                          <a href="javascript:void(0)"><i class="ti-check"></i></a>
                          <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row">
                    <div class="p-2"><img src="../assets/img/images/users/4.jpg" alt="user" width="50" class="rounded-circle" /></div>
                    <div class="comment-text active w-100">
                      <h6 class="font-medium">Michael Jorden</h6>
                      <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                      <div class="comment-footer">
                        <span class="text-muted float-end">April 14, 2021</span>
                        <span class="label label-success label-rounded">Approved</span>
                        <span class="action-icons active">
                          <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                          <a href="javascript:void(0)"><i class="icon-close"></i></a>
                          <a href="javascript:void(0)"><i class="ti-heart text-danger"></i></a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row">
                    <div class="p-2"><img src="../assets/img/images/users/5.jpg" alt="user" width="50" class="rounded-circle" /></div>
                    <div class="comment-text w-100">
                      <h6 class="font-medium">Johnathan Doeting</h6>
                      <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                      <div class="comment-footer">
                        <span class="text-muted float-end">April 14, 2021</span>
                        <span class="label label-rounded label-danger">Rejected</span>
                        <span class="action-icons">
                          <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                          <a href="javascript:void(0)"><i class="ti-check"></i></a>
                          <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- column -->
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Temp Guide</h4>
                  <div class="d-flex align-items-center flex-row m-t-30">
                    <div class="display-5 text-info">
                      <i class="wi wi-day-showers"></i> <span>73<sup>°</sup></span>
                    </div>
                    <div class="m-l-10">
                      <h3 class="m-b-0">Saturday</h3>
                      <small>Ahmedabad, India</small>
                    </div>
                  </div>
                  <table class="table no-border mini-table m-t-20">
                    <tbody>
                      <tr>
                        <td class="text-muted">Wind</td>
                        <td class="font-medium">ESE 17 mph</td>
                      </tr>
                      <tr>
                        <td class="text-muted">Humidity</td>
                        <td class="font-medium">83%</td>
                      </tr>
                      <tr>
                        <td class="text-muted">Pressure</td>
                        <td class="font-medium">28.56 in</td>
                      </tr>
                      <tr>
                        <td class="text-muted">Cloud Cover</td>
                        <td class="font-medium">78%</td>
                      </tr>
                    </tbody>
                  </table>
                  <ul class="row list-style-none text-center m-t-30">
                    <li class="col-3">
                      <h4 class="text-info"><i class="wi wi-day-sunny"></i></h4>
                      <span class="d-block text-muted">09:30</span>
                      <h3 class="m-t-5">70<sup>°</sup></h3>
                    </li>
                    <li class="col-3">
                      <h4 class="text-info"><i class="wi wi-day-cloudy"></i></h4>
                      <span class="d-block text-muted">11:30</span>
                      <h3 class="m-t-5">72<sup>°</sup></h3>
                    </li>
                    <li class="col-3">
                      <h4 class="text-info"><i class="wi wi-day-hail"></i></h4>
                      <span class="d-block text-muted">13:30</span>
                      <h3 class="m-t-5">75<sup>°</sup></h3>
                    </li>
                    <li class="col-3">
                      <h4 class="text-info"><i class="wi wi-day-sprinkle"></i></h4>
                      <span class="d-block text-muted">15:30</span>
                      <h3 class="m-t-5">76<sup>°</sup></h3>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- Recent comment and chats -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">All Rights Reserved by Xtreme Admin. Designed and Developed by <a href="https://www.wrappixel.com">WrapPixel</a>.</footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.js"></script>
  </body>
</html>
