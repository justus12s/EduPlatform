<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top nav-blur shadow-sm py-2">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary d-flex align-items-center" href="<?= site_url('accueil') ?>">
            <i class="fas fa-graduation-cap me-2"></i>
            <span>EduPlatform</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link <?= ($page ?? '') === 'accueil' ? 'active text-primary fw-semibold' : 'text-dark' ?>"
                        href="<?= site_url('accueil') ?>">
                        Accueil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($page ?? '') === 'a_propos' ? 'active text-primary fw-semibold' : 'text-dark' ?>"
                        href="<?= site_url('a_propos') ?>">
                        À propos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($page ?? '') === 'fonctionnalites' ? 'active text-primary fw-semibold' : 'text-dark' ?>"
                        href="<?= site_url('fonctionnalites') ?>">
                        Fonctionnalités
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($page ?? '') === 'contact' ? 'active text-primary fw-semibold' : 'text-dark' ?>"
                        href="<?= site_url('contact') ?>">
                        Contact
                    </a>
                </li>
            </ul>

            <div class="navbar-nav ms-lg-3">
                <a class="btn btn-outline-primary btn-sm d-flex align-items-center"
                    href="<?= site_url('auth/login') ?>">
                    <i class="fas fa-sign-in-alt me-2"></i>
                    <span>Connexion</span>
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Espace pour la navigation fixe -->
<div style="height: 76px;"></div>