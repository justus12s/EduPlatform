<?= $this->include('partials/header') ?>
<?= $this->include('partials/navigation') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-body p-5 text-center">
                    <i class="fas fa-eye fa-4x text-primary mb-4"></i>
                    <h2 class="fw-bold mb-3">Démo Gratuite</h2>
                    <p class="text-muted mb-4">
                        Découvrez toutes les fonctionnalités d'EduPlatform avec notre démonstration interactive.
                        Aucune inscription requise.
                    </p>

                    <div class="row g-4 mb-4">
                        <div class="col-md-4">
                            <div class="demo-card p-4 border rounded-3">
                                <i class="fas fa-user-shield fa-2x text-primary mb-3"></i>
                                <h5>Espace Admin</h5>
                                <p class="text-muted small">Gestion complète de l'établissement</p>
                                <a href="#" class="btn btn-outline-primary btn-sm">Voir la démo</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="demo-card p-4 border rounded-3">
                                <i class="fas fa-chalkboard-teacher fa-2x text-success mb-3"></i>
                                <h5>Espace Enseignant</h5>
                                <p class="text-muted small">Création de cours et évaluations</p>
                                <a href="#" class="btn btn-outline-success btn-sm">Voir la démo</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="demo-card p-4 border rounded-3">
                                <i class="fas fa-user-graduate fa-2x text-info mb-3"></i>
                                <h5>Espace Étudiant</h5>
                                <p class="text-muted small">Apprentissage et collaboration</p>
                                <a href="#" class="btn btn-outline-info btn-sm">Voir la démo</a>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>Important :</strong> Cette démo utilise des données fictives et ne nécessite pas de connexion.
                    </div>

                    <div class="d-flex justify-content-center gap-3 mt-4">
                        <a href="<?= site_url('auth/register') ?>" class="btn btn-primary btn-lg">
                            <i class="fas fa-rocket me-2"></i>Commencer l'essai gratuit
                        </a>
                        <a href="<?= site_url('contact') ?>" class="btn btn-outline-primary btn-lg">
                            <i class="fas fa-phone me-2"></i>Nous contacter
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('partials/footer') ?>