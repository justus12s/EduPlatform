<?= $this->include('partials/header') ?>
<?= $this->include('partials/navigation') ?>

<div class="auth-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="auth-card">
                    <div class="auth-header text-center mb-4">
                        <div class="profile-badge teacher-badge mb-3">
                            <i class="fas fa-chalkboard-teacher fa-3x"></i>
                        </div>
                        <h1 class="h3 fw-bold">Espace Enseignant</h1>
                        <p class="text-muted">Gestion des cours et des étudiants</p>
                    </div>

                    <form action="<?= site_url('enseignant/process_login') ?>" method="post" class="auth-form">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label for="teacherEmail" class="form-label">Email enseignant</label>
                            <input type="email" class="form-control" id="teacherEmail" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="teacherPassword" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="teacherPassword" name="password" required>
                        </div>

                        <button type="submit" class="btn btn-success w-100 py-3 fw-semibold">
                            <i class="fas fa-sign-in-alt me-2"></i>Accéder à l'espace enseignant
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
    .teacher-badge {
        background: linear-gradient(135deg, #48bb78, #38a169);
        color: white;
    }
</style>