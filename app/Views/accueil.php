<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil | EduPlatform</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>plugins/images/favicon1.png" />
    <style>
        .profile-card {
            border: 3px solid transparent;
            border-radius: 1rem;
            padding: 20px;
            transition: background-color 0.3s, transform 0.3s;
            cursor: pointer;
        }

        .admin:hover {
            transform: translateY(-10px);
            background-color: rgba(231, 116, 116, 0.2);
        }

        .student:hover {
            transform: translateY(-20px);
            background-color: rgba(102, 137, 233, 0.2);
        }

        .teacher:hover {
            transform: translateY(15px);
            background-color: rgba(116, 231, 126, 0.2);
        }

        .icon-circle {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.05);
            margin-bottom: 15px;
            font-size: 36px;
        }

        .icon-admin {
            color: #dc3545;
            background-color: white;
        }

        .icon-student {
            color: #0d6efd;
            background-color: white;
        }

        .icon-teacher {
            color: #198754;
            background-color: white;
        }
    </style>
</head>

<body class="pt-5">
    <div class="container text-center mt-5">
        <h1>Système de Gestion Universitaire</h1>
        <p>Choisissez votre profil pour accéder à votre compte</p>

        <div class="row mt-4 g-3 justify-content-center">
            <div class="col-12 col-md-4 col-lg-4">
                <div class="profile-card admin">
                    <div class="icon-circle icon-admin">
                        <i class="bi bi-shield-fill-check"></i>
                    </div>
                    <h4 class="h1">Administrateur</h4>
                    <p>Gestion complète de l'établissement</p>
                    <a href="<?= site_url('login') ?>" class="btn btn-dark w-100">Se connecter</a>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="profile-card student">
                    <div class="icon-circle icon-student">
                        <i class="bi bi-mortarboard"></i>
                    </div>
                    <h4 class="h1">Étudiants</h4>
                    <p>Gestion des cours et évaluation étudiants</p>
                    <a href="<?= site_url('login') ?>" class="btn btn-dark w-100">Se connecter</a>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="profile-card teacher">
                    <div class="icon-circle icon-teacher">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h4 class="h1">Enseignants</h4>
                    <p>Consultation des cours et des notes</p>
                    <a href="<?= site_url('login') ?>" class="btn btn-dark w-100">Se connecter</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>