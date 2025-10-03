<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords"
    content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template" />
  <meta name="description"
    content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
  <meta name="robots" content="noindex,nofollow" />
  <title>EduPlatform | Système de Gestion Universitaire</title>
  <link rel="canonical" href="<?= base_url() ?>https://www.wrappixel.com/templates/ample-admin-lite/" />
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>plugins/images/favicon1.png" />
  <!-- Custom CSS -->
  <link href="<?= base_url() ?>plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url() ?>plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" />
  <!-- Custom CSS -->
  <link href="<?= base_url() ?>css/style.min.css" rel="stylesheet" />
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
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin6">
          <!-- ============================================================== -->
          <!-- Logo -->
          <!-- ============================================================== -->
          <a class="navbar-brand" href="<?= site_url() ?>dashboard/index">
            <!-- Logo icon -->
            <b class="favicon">
              <!-- Dark Logo icon -->
              <img src="<?= base_url() ?>plugins/images/favicon.png" width="40px" height="40px" alt="homepage" />
            </b>
            <!--End Logo icon -->
            <!-- Logo text -->
            <span class="logo-text">
              <!-- dark Logo text -->
              <img src="<?= base_url() ?>plugins/images/logo-text.png" width="180px" height="80px" alt="homepage" />
            </span>
          </a>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <a class="
                nav-toggler
                waves-effect waves-light
                text-dark
                d-block d-md-none
              " href="<?= base_url() ?>javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <div class="navbar-collapse collapse bg-light" id="navbarSupportedContent" data-navbarbg="skin5">
          <ul class="navbar-nav ms-auto d-flex align-items-center">
            <li>
              <a class="profile-pic" href="<?= base_url() ?>#">
                <span
                  class="text-white font-medium">Jonh Doe</span>
                <img src="<?= base_url() ?>plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle" /></a>
            </li>
            <li>
              <a href="#" class="btn btn-light">
                <i class="fa fa-sign-out-alt"></i> Déconnexion
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <aside class="left-sidebar" data-sidebarbg="skin6">
      <div class="scroll-sidebar">
        <nav class="sidebar-nav">
          <ul id="sidebarnav">
            <li class="sidebar-item pt-2">
              <a class="sidebar-link waves-effect waves-dark sidebar-link bg-dark rounded-3 text-white" href="<?= site_url() ?>dashboard/index" aria-expanded="false">
                <i class="far fa-clock" aria-hidden="true"></i>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= site_url() ?>dashboard/profile" aria-expanded="false">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span class="hide-menu">Profile</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= site_url() ?>dashboard/basic_table"
                aria-expanded="false">
                <i class="fa fa-table" aria-hidden="true"></i>
                <span class="hide-menu">My courses</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= site_url() ?>dashboard/fontawesome"
                aria-expanded="false">
                <i class="fa fa-font" aria-hidden="true"></i>
                <span class="hide-menu">My notes</span>
              </a>
            </li>
            <li class="sidebar-item">
              <div class="bg-info opacity-25 m-2 p-2 rounded-3">
                <h4>UNSTIM Abomey</h4>
                <p>Année académique : 2025-2026</p>
                <p>Semestre 5</p>
                <p>Période : Octobre 2025</p>
              </div>
            </li>
            <li class="sidebar-item">
              <a href="#" class="sidebar-link waves-effect waves-dark sidebar-link">
                <i class="fa fa-sign-out-alt"></i> Déconnexion
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <div class="page-wrapper">
      <div class="bg-primary rounded-3 pt-5 p-3 mx-3 text-white">
        <div class="row">
          <div class="col-lg-9 col-md-6 col-8">
            <h2>Marie Dubois</h2>
            <p>ID : 81020STI24</p>
            <p>Ingénieur GMM 1 Semestre 5</p>
          </div>
          <div class="col-lg-3 col-md-6 col-4">
            <h4>Moyenne générale</h4>
            <h2>15.6/20</h2>
          </div>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <div class="container-fluid text-center">
        <div class="row">
          <div class="col-lg-3 col-md-12">
            <div class="white-box analytics-info">
              <p>Cours actifs</p>
              <h1 class="box-title">6</h1>
            </div>
          </div>
          <div class="col-lg-3 col-md-12">
            <div class="white-box analytics-info">
              <p>Crédits obtenus</p>
              <h1 class="box-title">45/60</h1>
            </div>
          </div>
          <div class="col-lg-3 col-md-12">
            <div class="white-box analytics-info">
              <p>Cours aujourd'hui</p>
              <h1 class="box-title">2</h1>
            </div>
          </div>
          <div class="col-lg-3 col-md-12">
            <div class="white-box analytics-info">
              <p>Devoirs en retard</p>
              <h1 class="box-title">3</h1>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- PRODUCTS YEARLY SALES -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
              <h3 class="box-title">Products Yearly Sales</h3>
              <div class="d-md-flex">
                <ul class="list-inline d-flex ms-auto">
                  <li class="ps-3">
                    <h5><i class="fa fa-circle me-1 text-info"></i>Mac</h5>
                  </li>
                  <li class="ps-3">
                    <h5>
                      <i class="fa fa-circle me-1 text-inverse"></i>Windows
                    </h5>
                  </li>
                </ul>
              </div>
              <div id="ct-visits" style="height: 405px">
                <div class="chartist-tooltip" style="top: -17px; left: -12px">
                  <span class="chartist-tooltip-value">6</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- RECENT SALES -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
              <div class="d-md-flex mb-3">
                <h3 class="box-title mb-0">Recent sales</h3>
                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                  <select class="form-select shadow-none row border-top">
                    <option>March 2024</option>
                    <option>April 2024</option>
                    <option>May 2024</option>
                    <option>June 2024</option>
                    <option>July 2024</option>
                  </select>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table no-wrap">
                  <thead>
                    <tr>
                      <th class="border-top-0">#</th>
                      <th class="border-top-0">Name</th>
                      <th class="border-top-0">Status</th>
                      <th class="border-top-0">Date</th>
                      <th class="border-top-0">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td class="txt-oflo">Elite admin</td>
                      <td>SALE</td>
                      <td class="txt-oflo">April 18, 2024</td>
                      <td><span class="text-success">$24</span></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td class="txt-oflo">Real Homes WP Theme</td>
                      <td>EXTENDED</td>
                      <td class="txt-oflo">April 19, 2024</td>
                      <td><span class="text-info">$1250</span></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td class="txt-oflo">Ample Admin</td>
                      <td>EXTENDED</td>
                      <td class="txt-oflo">April 19, 2024</td>
                      <td><span class="text-info">$1250</span></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td class="txt-oflo">Medical Pro WP Theme</td>
                      <td>TAX</td>
                      <td class="txt-oflo">April 20, 2024</td>
                      <td><span class="text-danger">-$24</span></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td class="txt-oflo">Hosting press html</td>
                      <td>SALE</td>
                      <td class="txt-oflo">April 21, 2024</td>
                      <td><span class="text-success">$24</span></td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td class="txt-oflo">Digital Agency PSD</td>
                      <td>SALE</td>
                      <td class="txt-oflo">April 23, 2024</td>
                      <td><span class="text-danger">-$14</span></td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td class="txt-oflo">Helping Hands WP Theme</td>
                      <td>MEMBER</td>
                      <td class="txt-oflo">April 22, 2024</td>
                      <td><span class="text-success">$64</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- Recent Comments -->
        <!-- ============================================================== -->
        <div class="row">
          <!-- .col -->
          <div class="col-md-12 col-lg-8 col-sm-12">
            <div class="card white-box p-0">
              <div class="card-body">
                <h3 class="box-title mb-0">Recent Comments</h3>
              </div>
              <div class="comment-widgets">
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row p-3 mt-0">
                  <div class="p-2">
                    <img src="<?= base_url() ?>plugins/images/users/varun.jpg" alt="user" width="50" class="rounded-circle" />
                  </div>
                  <div class="comment-text ps-2 ps-md-3 w-100">
                    <h5 class="font-medium">James Anderson</h5>
                    <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and
                      type setting industry.It has survived not only five
                      centuries.
                    </span>
                    <div class="comment-footer d-md-flex align-items-center">
                      <span class="badge bg-primary rounded">Pending</span>

                      <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">
                        April 14, 2024
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row p-3">
                  <div class="p-2">
                    <img src="<?= base_url() ?>plugins/images/users/genu.jpg" alt="user" width="50" class="rounded-circle" />
                  </div>
                  <div class="comment-text ps-2 ps-md-3 active w-100">
                    <h5 class="font-medium">Michael Jorden</h5>
                    <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and
                      type setting industry.It has survived not only five
                      centuries.
                    </span>
                    <div class="comment-footer d-md-flex align-items-center">
                      <span class="badge bg-success rounded">Approved</span>

                      <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">
                        April 14, 2024
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row p-3">
                  <div class="p-2">
                    <img src="<?= base_url() ?>plugins/images/users/ritesh.jpg" alt="user" width="50" class="rounded-circle" />
                  </div>
                  <div class="comment-text ps-2 ps-md-3 w-100">
                    <h5 class="font-medium">Johnathan Doeting</h5>
                    <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and
                      type setting industry.It has survived not only five
                      centuries.
                    </span>
                    <div class="comment-footer d-md-flex align-items-center">
                      <span class="badge rounded bg-danger">Rejected</span>

                      <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">
                        April 14, 2024
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card white-box p-0">
              <div class="card-heading">
                <h3 class="box-title mb-0">Chat Listing</h3>
              </div>
              <div class="card-body">
                <ul class="chatonline">
                  <li>
                    <div class="call-chat">
                      <button class="btn btn-success text-white btn-circle btn" type="button">
                        <i class="fas fa-phone"></i>
                      </button>
                      <button class="btn btn-info btn-circle btn" type="button">
                        <i class="far fa-comments text-white"></i>
                      </button>
                    </div>
                    <a href="<?= base_url() ?>javascript:void(0)" class="d-flex align-items-center"><img
                        src="plugins/images/users/varun.jpg" alt="user-img" class="img-circle" />
                      <div class="ms-2">
                        <span class="text-dark">Varun Dhavan
                          <small class="d-block text-success d-block">online</small></span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="call-chat">
                      <button class="btn btn-success text-white btn-circle btn" type="button">
                        <i class="fas fa-phone"></i>
                      </button>
                      <button class="btn btn-info btn-circle btn" type="button">
                        <i class="far fa-comments text-white"></i>
                      </button>
                    </div>
                    <a href="<?= base_url() ?>javascript:void(0)" class="d-flex align-items-center"><img
                        src="plugins/images/users/genu.jpg" alt="user-img" class="img-circle" />
                      <div class="ms-2">
                        <span class="text-dark">Genelia Deshmukh
                          <small class="d-block text-warning">Away</small></span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="call-chat">
                      <button class="btn btn-success text-white btn-circle btn" type="button">
                        <i class="fas fa-phone"></i>
                      </button>
                      <button class="btn btn-info btn-circle btn" type="button">
                        <i class="far fa-comments text-white"></i>
                      </button>
                    </div>
                    <a href="<?= base_url() ?>javascript:void(0)" class="d-flex align-items-center"><img
                        src="plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle" />
                      <div class="ms-2">
                        <span class="text-dark">Ritesh Deshmukh
                          <small class="d-block text-danger">Busy</small></span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="call-chat">
                      <button class="btn btn-success text-white btn-circle btn" type="button">
                        <i class="fas fa-phone"></i>
                      </button>
                      <button class="btn btn-info btn-circle btn" type="button">
                        <i class="far fa-comments text-white"></i>
                      </button>
                    </div>
                    <a href="<?= base_url() ?>javascript:void(0)" class="d-flex align-items-center"><img
                        src="plugins/images/users/arijit.jpg" alt="user-img" class="img-circle" />
                      <div class="ms-2">
                        <span class="text-dark">Arijit Sinh
                          <small class="d-block text-muted">Offline</small></span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="call-chat">
                      <button class="btn btn-success text-white btn-circle btn" type="button">
                        <i class="fas fa-phone"></i>
                      </button>
                      <button class="btn btn-info btn-circle btn" type="button">
                        <i class="far fa-comments text-white"></i>
                      </button>
                    </div>
                    <a href="<?= base_url() ?>javascript:void(0)" class="d-flex align-items-center"><img
                        src="plugins/images/users/govinda.jpg" alt="user-img" class="img-circle" />
                      <div class="ms-2">
                        <span class="text-dark">Govinda Star
                          <small class="d-block text-success">online</small></span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="call-chat">
                      <button class="btn btn-success text-white btn-circle btn" type="button">
                        <i class="fas fa-phone"></i>
                      </button>
                      <button class="btn btn-info btn-circle btn" type="button">
                        <i class="far fa-comments text-white"></i>
                      </button>
                    </div>
                    <a href="<?= base_url() ?>javascript:void(0)" class="d-flex align-items-center"><img
                        src="plugins/images/users/hritik.jpg" alt="user-img" class="img-circle" />
                      <div class="ms-2">
                        <span class="text-dark">John Abraham<small class="d-block text-success">online</small></span>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      <footer class="footer text-center">
        2024 © Ample Admin brought to you by
        <a href="<?= base_url() ?>https://www.wrappixel.com/">wrappixel.com</a>
      </footer>
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
  <script src="<?= base_url() ?>plugins/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="<?= base_url() ?>bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>js/app-style-switcher.js"></script>
  <script src="<?= base_url() ?>plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
  <!--Wave Effects -->
  <script src="<?= base_url() ?>js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="<?= base_url() ?>js/sidebarmenu.js"></script>
  <!--Custom JavaScript -->
  <script src="<?= base_url() ?>js/custom.js"></script>
  <!--This page JavaScript -->
  <!--chartis chart-->
  <script src="<?= base_url() ?>plugins/bower_components/chartist/dist/chartist.min.js"></script>
  <script src="<?= base_url() ?>plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
  <script src="<?= base_url() ?>js/pages/dashboards/dashboard1.js"></script>
</body>

</html>