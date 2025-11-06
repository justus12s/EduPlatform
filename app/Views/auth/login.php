<?= $this->include('partials/header') ?>
<?= $this->include('partials/navigation') ?>

<div class="auth-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="auth-card">
                    <div class="auth-header text-center mb-4">
                        <a href="<?= site_url('accueil') ?>" class="auth-logo">
                            <i class="fas fa-graduation-cap text-primary me-2"></i>
                            <span class="fw-bold">EduPlatform</span>
                        </a>
                        <h1 class="h3 fw-bold mt-4">Connexion</h1>
                        <p class="text-muted">Accédez à votre espace personnel</p>
                    </div>

                    <!-- Messages d'alerte -->
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            <?= session()->getFlashdata('error') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i>
                            <?= session()->getFlashdata('success') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>

                    <form action="<?= site_url('auth/process_login') ?>" method="post" class="auth-form">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse email</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="<?= old('email') ?>" placeholder="votre@email.com" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Votre mot de passe" required>
                                <button type="button" class="input-group-text toggle-password">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                <label class="form-check-label" for="remember">
                                    Se souvenir de moi
                                </label>
                            </div>
                            <a href="<?= site_url('auth/forgot_password') ?>" class="text-primary small">
                                Mot de passe oublié ?
                            </a>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-3 fw-semibold">
                            <i class="fas fa-sign-in-alt me-2"></i>Se connecter
                        </button>
                    </form>

                    <div class="auth-divider my-4">
                        <span class="bg-light px-3 text-muted">Ou</span>
                    </div>

                    <!-- Accès rapide par profil -->
                    <div class="quick-access">
                        <h6 class="text-center text-muted mb-3">Accédez directement à votre espace :</h6>
                        <div class="row g-2">
                            <div class="col-4">
                                <a href="<?= site_url('admin/login') ?>" class="btn btn-outline-primary w-100 btn-sm">
                                    <i class="fas fa-user-shield me-1"></i>Admin
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="<?= site_url('enseignant/login') ?>" class="btn btn-outline-success w-100 btn-sm">
                                    <i class="fas fa-chalkboard-teacher me-1"></i>Enseignant
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="<?= site_url('etudiant/login') ?>" class="btn btn-outline-info w-100 btn-sm">
                                    <i class="fas fa-user-graduate me-1"></i>Étudiant
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="auth-footer text-center mt-4">
                        <p class="text-muted mb-0">
                            Vous n'avez pas de compte ?
                            <a href="<?= site_url('auth/register') ?>" class="text-primary fw-semibold">Créer un compte</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('partials/footer') ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle password visibility
        const togglePassword = document.querySelector('.toggle-password');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.innerHTML = type === 'password' ? '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
        });

        // Form validation
        const form = document.querySelector('.auth-form');
        form.addEventListener('submit', function(e) {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (!email || !password) {
                e.preventDefault();
                alert('Veuillez remplir tous les champs obligatoires.');
            }
        });
    });
</script>

<style>
    .auth-container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        padding: 80px 0 40px;
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    }

    .auth-card {
        background: white;
        padding: 40px 30px;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .auth-logo {
        font-size: 1.5rem;
        color: #667eea;
        text-decoration: none;
        font-weight: 700;
    }

    .auth-header h1 {
        color: #2d3748;
    }

    .auth-form .form-control {
        padding: 12px 15px;
        border-radius: 10px;
        border: 1px solid #e2e8f0;
        transition: all 0.3s ease;
    }

    .auth-form .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
    }

    .auth-form .input-group-text {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-right: none;
    }

    .auth-form .input-group .form-control {
        border-left: none;
    }

    .toggle-password {
        cursor: pointer;
        border-left: none !important;
        border: 1px solid #e2e8f0;
        border-left: none;
    }

    .auth-divider {
        position: relative;
        text-align: center;
    }

    .auth-divider::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        height: 1px;
        background: #e2e8f0;
        z-index: 1;
    }

    .auth-divider span {
        position: relative;
        z-index: 2;
        background: white;
    }

    .quick-access .btn {
        border-radius: 8px;
        padding: 8px 5px;
        font-size: 0.8rem;
    }

    @media (max-width: 576px) {
        .auth-card {
            padding: 30px 20px;
            margin: 0 10px;
        }

        .quick-access .btn {
            font-size: 0.75rem;
        }
    }
</style>