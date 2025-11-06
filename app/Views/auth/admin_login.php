<?= $this->include('partials/header') ?>
<?= $this->include('partials/navigation') ?>

<div class="auth-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="auth-card">
                    <div class="auth-header text-center mb-4">
                        <div class="profile-badge admin-badge mb-3">
                            <i class="fas fa-user-shield fa-3x"></i>
                        </div>
                        <h1 class="h3 fw-bold">Espace Administrateur</h1>
                        <p class="text-muted">Gestion complète de votre établissement</p>
                    </div>

                    <form action="<?= site_url('admin/process_login') ?>" method="post" class="auth-form">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label for="adminEmail" class="form-label">Email administrateur</label>
                            <input type="email" class="form-control" id="adminEmail" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="adminPassword" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="adminPassword" name="password" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-3 fw-semibold">
                            <i class="fas fa-sign-in-alt me-2"></i>Accéder à l'administration
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
    .profile-badge {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }

    .admin-badge {
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
    }
</style>