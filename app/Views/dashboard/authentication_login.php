<!DOCTYPE html>
<html dir="ltr">

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
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>plugins/images/favicon.png" />
  <!-- Custom CSS -->
  <link href="<?= base_url() ?>css/style.min.css" rel="stylesheet" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="<?= base_url() ?>https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="<?= base_url() ?>https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <div class="main-wrapper" class="authentication-page">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3 auth-card">
            <div class="card mb-0">
              <div class="card-body">
                <a href="<?= base_url() ?>./dashboard/index" class="text-nowrap logo-img text-center d-block py-3 w-100">
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
                <p class="text-center text-muted font-14">Your Social Campaigns</p>
                <form>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check mb-0">
                      <input class="form-check-input danger" type="checkbox" value="" id="flexCheckChecked">
                      <label class="form-check-label text-dark mb-0" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
                    <a class="text-danger fw-bolder font-14" href="<?= base_url() ?>./dashboard/index">Forgot Password ?</a>
                  </div>
                  <a href="<?= base_url() ?>./dashboard/index" class="btn btn-danger w-100 py-8 mb-4 rounded-2 font-14">Sign In</a>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="mb-0 fw-bolder">New to Ample?</p>
                    <a class="text-danger fw-bolder ms-2 font-14" href="<?= base_url() ?>./dashboard/authentication_register">Create an
                      account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- All Required js -->
  <!-- ============================================================== -->
  <script src="<?= base_url() ?>plugins/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="<?= base_url() ?>bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- ============================================================== -->
  <!-- This page plugin js -->
  <!-- ============================================================== -->
  <script>
    $(".preloader").fadeOut();
  </script>
</body>

</html>