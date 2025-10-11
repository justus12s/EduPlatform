<!DOCTYPE html>
<html dir="ltr" lang="fr">

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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .icon-big {
      font-size: 40px;
      font-weight: 700;
      border-radius: 20%;
      padding: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: rgba(137, 226, 214, 0.2);
      transition: 0.3s;
    }

    .icon-big:hover {
      background-color: rgba(84, 225, 230, 0.4);
    }

    .box-title {
      font-size: 28px;
      font-weight: 700;
      margin: 0;
    }

    .sidebar-info {
      background-color: rgba(69, 5, 247, 0.2);
      border-radius: 15px;
      font-family: "Montserrat", sans-serif;
      font-weight: bold;
      font-size: 12px;
      padding: 10px;
      margin: 10px auto;
      max-width: 220px;
    }

    .hear {
      display: none;
    }

    .navbar-toggler-icon {
      background-image: none;
    }

    .navbar-toggler span {
      display: block;
      width: 25px;
      height: 10px;
      margin: 4px;
      background-color: #f4f6faff;
      border-radius: 2px;
    }

    .descript {
      width: 31%;
      margin: 10px;
    }

    .note {
      width: 48%;
      margin: 5px;
    }

    .descript h1 {
      font-size: 1.7rem;
      font-weight: bold;
      margin-left: 15px;
    }

    .descript:hover {
      transform: translateY(-10px);
    }


    @media (max-width: 1170px) {
      aside.left-sidebar {
        display: none !important;
      }

      .hear {
        display: block !important;
      }

      header.topbar {
        display: none;
      }

      .descript {
        width: 100%;
        margin: 0;
      }

      .note {
        width: 100%;
        margin: 0;
      }
    }
  </style>
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
      <nav class="navbar top-navbar navbar-expand-lg">
        <div class="navbar-header d-flex justify-content-between align-items-center w-100" data-logobg="skin6">
          <!-- ============================================================== -->
          <!-- Logo -->
          <!-- ============================================================== -->
          <a class="logo-text" href="<?= site_url() ?>dashboard/etudiant/index">
            <!-- Logo icon -->
            <b class="favicon">
              <!-- Dark Logo icon -->
              <img src="<?= base_url() ?>plugins/images/favicon.png" width="40px" height="40px" alt="homepage" />
            </b>
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
          <ul class="navbar-nav ms-auto d-flex align-items-center">
            <li>
              <div class="row g-0">
                <div class="col">
                  <h2 class="text-black fw-bold fs-5 pt-3">Marie Dubois</h2>
                </div>
                <div class="col">
                  <a href=""><img src="<?= base_url() ?>plugins/images/users/varun.jpg" width="70" class="img-fluid rounded-circle" /></a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="hear">
      <nav class="navbar navbar-expand-lg bg-secondary shadow-sm">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold" href="<?= site_url() ?>dashboard/etudiant/index">
            <i class="far fa-clock me-1"></i> Tableau de bord
          </a>

          <button class="navbar-toggler d-block d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbarMobile"
            aria-controls="mainNavbarMobile" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
          </button>

          <div class="collapse navbar-collapse" id="mainNavbarMobile">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url() ?>dashboard/etudiant/profile">
                  <i class="fa fa-user me-1"></i> Profil
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url() ?>dashboard/etudiant/cours">
                  <i class="fa fa-book me-1"></i> Mes cours
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url() ?>dashboard/etudiant/notes">
                  <i class="fa fa-font me-1"></i> Mes notes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger" href="<?= site_url() ?>auth/logout">
                  <i class="fa fa-sign-out-alt me-1"></i> Déconnection
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <aside class="left-sidebar collapse d-md-block bg-light" data-sidebarbg="skin6">
      <div class="scroll-sidebar">
        <nav class="sidebar-nav">
          <ul id="sidebarnav">
            <li class="sidebar-item pt-2">
              <a class="sidebar-link waves-effect waves-dark sidebar-link"
                href="<?= site_url() ?>dashboard/etudiant/index" aria-expanded="false">
                <i class="far fa-clock" aria-hidden="true"></i>
                <span class="hide-menu">Tableau de bord</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link"
                href="<?= site_url() ?>dashboard/etudiant/profile" aria-expanded="false">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span class="hide-menu">Profil</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link"
                href="<?= site_url() ?>dashboard/etudiant/cours" aria-expanded="false">
                <i class="fa fa-table" aria-hidden="true"></i>
                <span class="hide-menu">Mes cours</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link"
                href="<?= site_url() ?>dashboard/etudiant/notes" aria-expanded="false">
                <i class="fa fa-font" aria-hidden="true"></i>
                <span class="hide-menu">Mes notes</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link"
                href="<?= site_url() ?>auth/logout" aria-expanded="false">
                <i class="fa fa-sign-out-alt" aria-hidden="true"></i>
                <span class="hide-menu">Déconnection</span>
              </a>
            </li>
            <li class="sidebar-item">
              <div class="sidebar-info">
                <h4 class="fs-5 fw-bold text-dark">UNSTIM Abomey</h4>
                <p>Année académique : 2025-2026</p>
                <p>Semestre 5</p>
                <p>Période : Octobre 2025</p>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <div class="page-wrapper">
      <div class="container-fluid">
        <div class="row" class="h-100 fs-5">
          <div class="col">
            <h1 class="fw-bold">Mes notes</h1>
            <p class="text-secondary fs-4">Consultez vos résultats et votre progression académique</p>
          </div>
          <div class="col-3 d-flex justify-content-end align-items-center">
            <p class="fs-5 text-dark fw-bold">Semestre 5</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-3 col-sm-12 mt-1 bg-light border border-3 descript" style="border-radius: 10px;">
            <div class="row">
              <div class="col-8">
                <p class="text-secondary fs-4">Moyenne générale</p>
                <h1 class="text-dark">15.6/20</h1>
              </div>
              <div class="col-4 d-flex align-items-center justify-content-end"><i class="bi icon-big text-success bi-graph-up-arrow"></i></div>
            </div>
          </div>
          <div class="col-md-12 col-lg-3 col-sm-12 mt-1 p-2 bg-light border border-3 descript" style="border-radius: 10px;">
            <div class="row">
              <div class="col">
                <p class="text-secondary fs-4">Matières suivies</p>
                <h1 class="text-dark">4</h1>
              </div>
              <div class="col-4 d-flex align-items-center justify-content-end"><i class="bi icon-big text-primary bi-bar-chart"></i></div>
            </div>
          </div>
          <div class="col-md-12 col-lg-3 col-sm-12 mt-1 p-2 bg-light border border-3 descript" style="border-radius: 10px;">
            <div class="row">
              <div class="col">
                <p class="text-secondary fs-4">Matières suivies</p>
                <h1 class="text-dark">6</h1>
              </div>
              <div class="col-4 d-flex align-items-center justify-content-end"><i class="bi icon-big text-purple bi-graph-up-arrow"></i></div>
            </div>
          </div>
        </div>
        <div class="row g-3 p-4 mt-3 bg-light border border-1" style="border-color: rgba(137, 226, 214, 0.5);border-radius: 10px;">
          <h1 class="fs-4 fw-bold">Moyennes par matière</h1>
          <div class="col-12 col-lg-6 note border my-2 p-2 pb-0" style="border-color: rgba(137, 226, 214, 0.5);border-radius: 10px;">
            <div class="row">
              <div class="col-8">
                <h3 class="fs-5 fw-bold">Mathématiques Appliquées</h3>
                <p>2 évaluations</p>
              </div>
              <div class="col-4">
                <h3 class="fs-5 fw-bold d-flex justify-content-end align-items-center text-danger">15.5/20</h3>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 note border my-2 p-2 pb-0" style="border-color: rgba(137, 226, 214, 0.5);border-radius: 10px;">
            <div class="row">
              <div class="col-8">
                <h3 class="fs-5 fw-bold">Physique Quantique</h3>
                <p>2 évaluations</p>
              </div>
              <div class="col-4">
                <h3 class="fs-5 fw-bold d-flex justify-content-end align-items-center text-success">17.0/20</h3>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 note border my-2 p-2 pb-0" style="border-color: rgba(137, 226, 214, 0.5);border-radius: 10px;">
            <div class="row">
              <div class="col-8">
                <h3 class="fs-5 fw-bold">Algorithmique</h3>
                <p>1 évaluation</p>
              </div>
              <div class="col-4">
                <h3 class="fs-5 fw-bold d-flex justify-content-end align-items-center text-success">17.0/20</h3>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 note border my-2 p-2 pb-0" style="border-color: rgba(137, 226, 214, 0.5);border-radius: 10px;">
            <div class="row">
              <div class="col-8">
                <h3 class="fs-5 fw-bold">Base de Données</h3>
                <p>1 évaluation</p>
              </div>
              <div class="col-4">
                <h3 class="fs-5 fw-bold d-flex justify-content-end align-items-center text-danger">13.5/20</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      <footer class="footer h-100 text-dark text-center fw-bold">
        2025 © DevJustus
        <a href="<?= base_url() ?>https://www.wrappixel.com/">EduPlatform</a>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>plugins/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
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