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
            width: 69%;
            margin-right: 10px;
        }

        .descrip {
            width: 39%;
            margin-left: 10px;
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

            .descrip {
                width: 100%;
                margin: 0;
                margin-top: 10px;
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
                <div class="row d-flex align-items-center" class="h-100 fs-5">
                    <div class="col-lg-2 col-3">
                        <a href="<?= base_url() ?>dashboard/etudiant/cours" type="button" class="btn btn-light fs-5 fw-bold border border-dark rounded-3"><i class="bi bi-arrow-left"></i> Retour</a>
                    </div>
                    <div class="col-lg-10 col-9">
                        <h1 class="fw-bold">Mathématiques appliquées</h1>
                        <p class="text-secondary fs-4">MATH301</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col descript">
                        <div class="row border border-secondary p-2" style="border-radius: 20px;">
                            <h1 class="fs-5 fw-bold">Informations générales</h1>
                            <p class="text-secondary fs-3 pt-2 opacity-50">Cours avancé de mathématiques courant l'analyse numérique et les équations différentielles.</p>
                            <div class="row">
                                <div class="col fs-5"><i class="bi bi-people"></i> Dr François Martin</div>
                                <div class="col fs-5"><i class="bi bi-book"></i> 6 crédits</div>
                            </div>
                            <div class="row mt-3">
                                <h1 class="text-start fs-3">Progression du cours</h1>
                                <div class="progress mx-2 p-0" style="height: 10px; border-radius:10px;">
                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100">
                                        75%
                                    </div>
                                </div>
                                <p class="fs-2 fw-bold">75% complèté</p>
                            </div>
                        </div>
                        <div class="row border border-secondary mt-2 p-3 pb-4" style="border-radius: 20px;">
                            <h1 class="fs-5 fw-bold">Planning des cours</h1>
                            <div class="row m-2 py-3" style="background-color:rgba(174, 166, 201, 0.5); border-radius: 10px;">
                                <div class="col fs-5 fw-bold">
                                    <i class="bi bi-calendar"></i>
                                    Lundi
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col"><i class="bi bi-clock"></i> 08:00-10:00</div>
                                        <div class="col"><i class="bi bi-geo-alt"></i> Amphi A</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-2 py-3" style="background-color:rgba(174, 166, 201, 0.5); border-radius: 10px;">
                                <div class="col fs-5 fw-bold">
                                    <i class="bi bi-calendar"></i>
                                    Mercredi
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col"><i class="bi bi-clock"></i> 14:00-16:00</div>
                                        <div class="col"><i class="bi bi-geo-alt"></i> Salle 205</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-secondary mt-2 p-3" style="border-radius: 20px;">
                            <h1 class="fs-5 fw-bold">Ressources pédagogiques</h1>
                            <div class="col-12 p-2 mx-2 my-1 border fs-4" style="border-color: rgba(137, 226, 214, 0.4); border-radius: 5px;"><i class="bi bi-book"></i> Livre : Analyse numérique</div>
                            <div class="col-12 p-2 mx-2 my-1 border fs-4" style="border-color: rgba(137, 226, 214, 0.4); border-radius: 5px;"><i class="bi bi-book"></i> Support de cours PDF</div>
                            <div class="col-12 p-2 mx-2 my-1 border fs-4" style="border-color: rgba(137, 226, 214, 0.4); border-radius: 5px;"><i class="bi bi-book"></i> Exercices corrigés</div>
                        </div>
                    </div>
                    <div class="descrip">
                        <div class="row border border-secondary p-3" style="border-radius: 20px;">
                            <h1 class="fs-5 fw-bold">Devoirs à rendre</h1>
                            <div class="row m-2 p-1 border" style="border-color: rgba(137, 226, 214, 0.4); border-radius: 5px;">
                                <div class="col">
                                    <h1 class="fs-4 fw-bold">Devoir Maison 3</h1>
                                    <p class="text-secondary fs-4">Echéance : 15/02/2025</p>
                                </div>
                                <div class="col d-flex justify-content-end align-items-center">
                                    <h1 class="fs-3 fw-bold p-1" style="background-color: rgba(233, 207, 123, 0.5); border-radius: 10px;">À rendre</h1>
                                </div>
                            </div>
                            <div class="row m-2 p-1 border" style="border-color: rgba(137, 226, 214, 0.4); border-radius: 5px;">
                                <div class="col">
                                    <h1 class="fs-4 fw-bold">Projet Final</h1>
                                    <p class="text-secondary fs-4">Echéance : 01/03/2025</p>
                                </div>
                                <div class="col d-flex justify-content-end align-items-center">
                                    <h1 class="fs-3 fw-bold p-1" style="background-color: rgba(233, 207, 123, 0.5);border-radius: 10px;">À rendre</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row border border-secondary mt-2 p-3" style="border-radius: 20px;">
                            <h1 class="fs-5 fw-bold">Statistiques</h1>
                            <div class="row">
                                <div class="col">
                                    <p class="text-secondary fs-4">Etudiants inscrits</p>
                                </div>
                                <div class="col d-flex justify-content-end align-items-center">
                                    <h1 class="fs-4 fw-bold">45/50</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="text-secondary fs-4">Prochain cours</p>
                                </div>
                                <div class="col d-flex justify-content-end align-items-center">
                                    <h1 class="fs-4 fw-bold">Lundi 08:00</h1>
                                </div>
                            </div>
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