<?= $this->include('partials/header') ?>
<?= $this->include('partials/navigation') ?>

<div class="auth-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="auth-card">
                    <div class="auth-header text-center mb-4">
                        <div class="profile-badge student-badge mb-3">
                            <i class="fas fa-user-graduate fa-3x"></i>
                        </div>
                        <h1 class="h3 fw-bold">Espace Étudiant</h1>
                        <p class="text-muted">Accès aux cours et ressources</p>
                    </div>

                    <form action="<?= site_url('etudiant/process_login') ?>" method="post" class="auth-form">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label for="studentEmail" class="form-label">Email étudiant</label>
                            <input type="email" class="form-control" id="studentEmail" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="studentPassword" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="studentPassword" name="password" required>
                        </div>

                        <button type="submit" class="btn btn-info w-100 py-3 fw-semibold">
                            <i class="fas fa-sign-in-alt me-2"></i>Accéder à l'espace étudiant
                        </button>
                    </form>

                    <div class="auth-footer text-center mt-4">
                        <a href="<?= site_url('auth/login') ?>" class="text-primary">
                            <i class="fas fa-arrow-left me-1"></i>Retour à la connexion générale
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('partials/footer') ?>

<style>
    .student-badge {
        background: linear-gradient(135deg, #4299e1, #3182ce);
        color: white;
    }
</style>