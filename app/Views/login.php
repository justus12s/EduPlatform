<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | EduPlatform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .login-hero {
            background: linear-gradient(135deg, rgba(172, 196, 231, 0.9) 0%, rgba(40, 120, 201, 0.9) 100%);
            background-size: cover;
            background-position: center;
            color: white;
            padding: 4rem 0;
            margin-bottom: 2rem;
            border-radius: 0 0 20px 20px;
        }
    </style>
</head>

<body>
    <main>
        <section class="login-hero">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center animate-fade-in">
                        <h1 class="display-5 fw-bold mb-3">Connexion</h1>
                        <p class="lead mb-4">Connectez-vous à votre compte</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="container animate-fade-in delay-1 col-11 col-sm-10 col-md-7 col-lg-5 my-5 py-3 bg-light border border-info border-3 shadow-lg rounded-3 d-flex justify-content-center align-items-center">
            <div class="form-container">
                <div class="container text-center">
                    <h2 class="h4 fw-bold text-primary"><i class="fas fa-book me-2"></i>EduPlatform</h2>
                    <p>Plateforme de gestion universitaire et scolaire</p>
                </div>
                <div class="container">
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show mb-4">
                            <?= session()->getFlashdata('error') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show mb-4">
                            <?= session()->getFlashdata('success') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>
                    <form class="form g-3 row" action="<?= site_url('dashboard/index') ?>" method="POST"> <?= csrf_field() ?>
                        <div>
                            <label class="form-label" for="">Statut : </label>
                            <select class="form-control" name="statut" id="statut">
                                <option value="etudiant">Etudiant</option>
                                <option value="Enseignant">Enseignant</option>
                                <option value="Administration">Administration</option>
                            </select>
                        </div>
                        <div>
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Votre email" name="email" value="<?= old('email') ?>" required>
                        </div>
                        <div>
                            <label class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" placeholder="Votre mot de passe" name="password" required>
                        </div>
                        <div class="col-6 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember"> <label class="form-check-label" for="remember">Se souvenir de moi</label>
                        </div>
                        <div class="col-6">
                            <a href="<?= site_url('forgot-password') ?>">Mot de passe oublié ?</a>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mb-3"> <i class="fas fa-sign-in-alt me-2"></i>Se connecter </button>
                        <div class="text-center">
                            <p>Pas encore inscrit ? <a href="<?= site_url('register') ?>">Créer un compte</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>