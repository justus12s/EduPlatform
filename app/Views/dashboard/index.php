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
    .present {
      background-color: rgba(135, 122, 170, 0.1);
      border-radius: 20px;
      padding: 10px;
      margin: 5px;
      width: 23%;
    }

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

    .present p {
      margin: 0;
      font-size: 16px;
      font-weight: 600;
    }

    .present:hover {
      transform: translateY(-5px);
    }

    .info {
      background-color: rgba(99, 54, 223, 0.5);
      border-radius: 20px;
      color: white;
      margin: 20px 10px 10px 10px;
      padding: 20px 10px 0 20px;
      font-family: "Manrope", sans-serif;
      font-size: large;
      font-weight: bold;
    }

    .coul {
      background-color: rgba(80, 78, 85, 0.1);
      border-radius: 10px;
    }

    .coul:hover {
      background-color: rgba(80, 78, 85, 0.3);
      transform: translateY(-5px);
    }

    .note {
      background-color: rgba(156, 190, 241, 0.1);
      border-radius: 10px;
    }

    .note:hover {
      background-color: rgba(60, 199, 241, 0.3);
      transform: translateY(-5px);
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

    @media (max-width: 1170px) {
      aside.left-sidebar {
        display: none !important;
      }

      .present {
        width: 100%;
      }

      .hear {
        display: block !important;
      }

      header.topbar {
        display: none;
      }

      .page-wrapper {
        margin-left: 0 !important;
        padding-left: 0 !important;
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
          <a class="logo-text" href="<?= site_url() ?>dashboard/index">
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
                  <a href="<?= site_url() ?>dashboard/profile"><img src="<?= base_url() ?>plugins/images/users/varun.jpg" width="70" class="img-fluid rounded-circle" /></a>
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
          <a class="navbar-brand fw-bold" href="<?= site_url() ?>dashboard/index">
            <i class="far fa-clock me-1"></i> Tableau de bord
          </a>

          <button class="navbar-toggler d-block d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbarMobile"
            aria-controls="mainNavbarMobile" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
          </button>

          <div class="collapse navbar-collapse" id="mainNavbarMobile">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url() ?>dashboard/profile">
                  <i class="fa fa-user me-1"></i> Profil
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url() ?>dashboard/cours">
                  <i class="fa fa-book me-1"></i> Mes cours
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url() ?>dashboard/notes">
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
                href="<?= site_url() ?>dashboard/index" aria-expanded="false">
                <i class="far fa-clock" aria-hidden="true"></i>
                <span class="hide-menu">Tableau de bord</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link"
                href="<?= site_url() ?>dashboard/profile" aria-expanded="false">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span class="hide-menu">Profil</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link"
                href="<?= site_url() ?>dashboard/cours" aria-expanded="false">
                <i class="fa fa-table" aria-hidden="true"></i>
                <span class="hide-menu">Mes cours</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link"
                href="<?= site_url() ?>dashboard/notes" aria-expanded="false">
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
      <div class="info">
        <div class="row">
          <div class="col-lg-9 col-md-8 col-8">
            <h2>Marie Dubois</h2>
            <p>ID : 81020STI24</p>
            <p>Ingénieur GMM 1 Semestre 5</p>
          </div>
          <div class="col-lg-3 col-md-4 col-4">
            <h3>Moyenne générale</h3>
            <h1>15.6/20</h1>
          </div>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <div class="container-fluid w-100 text-center">
        <div class="row">
          <div class="col-lg-3 col-md-12 present">
            <div class="row">
              <div class="col-lg-2 col-4 d-flex align-items-center"><i class="bi px-2 icon-big text-primary bi-book"></i></div>
              <div class="col-lg-10 col-8">
                <p class="d-flex align-items-center justify-content-end">Cours actifs</p>
                <h1 class="box-title d-flex align-items-center justify-content-end me-5">6</h1>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-12 present">
            <div class="row">
              <div class="col-lg-2 col-4 d-flex align-items-center"><i class="bi px-2 icon-big text-success bi-trophy"></i></div>
              <div class="col-lg-10 col-8">
                <p class="d-flex align-items-center justify-content-end">Crédits obtenus</p>
                <h1 class="box-title d-flex align-items-center justify-content-end me-3">45/60</h1>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-12 present">
            <div class="row">
              <div class="col-lg-2 col-4 d-flex align-items-center"><i class="bi px-2 icon-big text-blue bi-calendar-date"></i></div>
              <div class="col-lg-10 col-8">
                <p class="d-flex align-items-center justify-content-end">Cours aujourd'hui</p>
                <h1 class="box-title d-flex align-items-center justify-content-end me-5">2</h1>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-12 present">
            <div class="row">
              <div class="col-lg-2 col-4 d-flex align-items-center"><i class="bi px-2 icon-big text-danger bi-clock"></i></div>
              <div class="col-lg-10 col-8">
                <p class="d-flex align-items-center justify-content-end">Devoirs en retard</p>
                <h1 class="box-title d-flex align-items-center justify-content-end me-5">3</h1>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 col-lg-6 col-sm-12 mt-2 bg-light border border-1 border-secondary" style="border-radius: 10px;">
            <div class="px-2 py-3">
              <div class="row align-items-center">
                <div class="col-3 d-flex align-items-center">
                  <i class="bi px-2 fs-5 fw-bold bi-calendar-date"></i>
                </div>
                <div class="col-5">
                  <h1 class="fs-5 fw-bold mb-0">Cours d'aujourd'hui</h1>
                </div>
                <div class="col-4">
                  <select class="form-select shadow-none">
                    <option>Octobre 2025</option>
                    <option>Novembre 2025</option>
                    <option>Décembre 2025</option>
                    <option>Janvier 2025</option>
                    <option>Février 2025</option>
                    <option>Mars 2025</option>
                    <option>Avril 2025</option>
                    <option>Mai 2025</option>
                    <option>Juin 2025</option>
                    <option>Juillet 2025</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="">
              <div class="col">
                <div class="row coul p-1 mx-2 mb-2">
                  <div class="col-8 text-start">
                    <h1 class="fs-5 fw-bold">Mathématiques Appliquées</h1>
                    <p>Cours Magistral</p>
                  </div>
                  <div class="col-4 text-end">
                    <h1 class="fs-5 fw-bold">08:00-12:00</h1>
                    <p>Amphi A</p>
                  </div>
                </div>
                <div class="row coul p-1 mx-2 mb-2">
                  <div class="col-8 text-start">
                    <h1 class="fs-5 fw-bold">Physique Qantique</h1>
                    <p>Travaux Pratiques</p>
                  </div>
                  <div class="col-4 text-end">
                    <h1 class="fs-5 fw-bold">14:00-15:45</h1>
                    <p>Salle 205</p>
                  </div>
                </div>
                <div class="row coul p-1 mx-2 mb-2">
                  <div class="col-8 text-start">
                    <h1 class="fs-5 fw-bold">Algorithmique</h1>
                    <p>Travaux Dirigés</p>
                  </div>
                  <div class="col-4 text-end">
                    <h1 class="fs-5 fw-bold">16:00-18:00</h1>
                    <p>Salle Info 1</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col w-75"></div>
          <div class="col-md-12 col-lg-5 col-sm-12 mt-2 bg-light border border-1 border-secondary" style="border-radius: 10px;">
            <div class="px-2 py-3">
              <div class="row align-items-center">
                <div class="col-3 d-flex align-items-center">
                  <i class="bi px-2 fs-5 fw-bold bi-trophy"></i>
                </div>
                <div class="col-9">
                  <h1 class="fs-5 fw-bold mb-0">Notes récentes</h1>
                </div>
              </div>
            </div>
            <div class="">
              <div class="col">
                <div class="row note p-1 mx-2 mb-2">
                  <div class="col-8 text-start">
                    <h1 class="fs-5 fw-bold">Mathématiques</h1>
                    <p>Examen final</p>
                  </div>
                  <div class="col-4 text-end">
                    <h1 class="text-success fs-5 fw-bold">16/20</h1>
                    <p>12/09/25</p>
                  </div>
                </div>
                <div class="row note p-1 mx-2 mb-2">
                  <div class="col-8 text-start">
                    <h1 class="fs-5 fw-bold">Physique</h1>
                    <p>Projet</p>
                  </div>
                  <div class="col-4 text-end">
                    <h1 class="text-success fs-5 fw-bold">18/20</h1>
                    <p>09/09/25</p>
                  </div>
                </div>
                <div class="row note p-1 mx-2 mb-2">
                  <div class="col-8 text-start">
                    <h1 class="fs-5 fw-bold">Informatique</h1>
                    <p>TP Java</p>
                  </div>
                  <div class="col-4 text-end">
                    <h1 class="text-danger fs-5 fw-bold">15/20</h1>
                    <p>05/09/25</p>
                  </div>
                </div>
                <div class="row note p-1 mx-2 mb-2">
                  <div class="col-8 text-start">
                    <h1 class="fs-5 fw-bold">Anglais</h1>
                    <p>Oral</p>
                  </div>
                  <div class="col-4 text-end">
                    <h1 class="text-danger fs-5 fw-bold">14/20</h1>
                    <p>01/09/25</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 mt-2 bg-light border border-1 border-secondary" style="border-radius: 10px;">
            <div class="px-2 py-3">
              <div class="row">
                <h1 class="text-start fs-5 fw-bold mb-0">Progression du semestre</h1>
              </div>
            </div>
            <div class="">
              <div class="row p-2">
                <div class="col-md-6 col-12 py-2 mb-3">
                  <div class="row">
                    <h1 class="text-start fs-5 fs-bold">Physique</h1>
                  </div>
                  <div class="progress" style="height: 10px; border-radius:5px;">
                    <div class="progress-bar bg-dark" role="progressbar" style="width: 75%;" aria-valuenow="75"
                      aria-valuemin="0" aria-valuemax="100">
                      75%
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-12 py-2 mb-3">
                  <div class="row">
                    <h1 class="text-start fs-5 fs-bold">Mathématiques</h1>
                  </div>
                  <div class="progress" style="height: 10px; border-radius:5px;">
                    <div class="progress-bar bg-dark" role="progressbar" style="width: 60%;" aria-valuenow="60"
                      aria-valuemin="0" aria-valuemax="100">
                      60%
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-12 py-2 mb-3">
                  <div class="row">
                    <h1 class="text-start fs-5 fs-bold">Anglais</h1>
                  </div>
                  <div class="progress" style="height: 10px; border-radius:5px;">
                    <div class="progress-bar bg-dark" role="progressbar" style="width: 80%;" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100">
                      80%
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-12 py-2 mb-3">
                  <div class="row">
                    <h1 class="text-start fs-5 fs-bold">Algorithmique</h1>
                  </div>
                  <div class="progress" style="height: 10px; border-radius:5px;">
                    <div class="progress-bar bg-dark" role="progressbar" style="width: 50%;" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100">
                      50%
                    </div>
                  </div>
                </div>
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