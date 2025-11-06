<?= $this->include('partials/header') ?>
<?= $this->include('partials/navigation') ?>

<div class="auth-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="auth-card">
                    <div class="auth-header text-center mb-4">
                        <a href="<?= site_url('accueil') ?>" class="auth-logo">
                            <i class="fas fa-graduation-cap text-primary me-2"></i>
                            <span class="fw-bold">EduPlatform</span>
                        </a>
                        <h1 class="h3 fw-bold mt-4">Créer un compte</h1>
                        <p class="text-muted">Rejoignez la communauté EduPlatform</p>
                    </div>

                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            <?= session()->getFlashdata('error') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>

                    <form action="<?= site_url('auth/process_register') ?>" method="post" class="auth-form" id="registerForm">
                        <?= csrf_field() ?>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="firstName" class="form-label">Prénom *</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </span>
                                        <input type="text" class="form-control" id="firstName" name="firstName"
                                            value="<?= old('firstName') ?>" placeholder="Votre prénom" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="lastName" class="form-label">Nom *</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </span>
                                        <input type="text" class="form-control" id="lastName" name="lastName"
                                            value="<?= old('lastName') ?>" placeholder="Votre nom" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse email *</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="<?= old('email') ?>" placeholder="votre@email.com" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="userType" class="form-label">Je suis *</label>
                            <select class="form-select" id="userType" name="userType" required>
                                <option value="">Choisissez votre profil</option>
                                <option value="admin" <?= old('userType') == 'admin' ? 'selected' : '' ?>>Administrateur</option>
                                <option value="teacher" <?= old('userType') == 'teacher' ? 'selected' : '' ?>>Enseignant</option>
                                <option value="student" <?= old('userType') == 'student' ? 'selected' : '' ?>>Étudiant</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="institution" class="form-label">Établissement *</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-school"></i>
                                </span>
                                <input type="text" class="form-control" id="institution" name="institution"
                                    value="<?= old('institution') ?>" placeholder="Nom de votre établissement" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="password" class="form-label">Mot de passe *</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Minimum 8 caractères" required minlength="8">
                                        <button type="button" class="input-group-text toggle-password">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                    <div class="form-text">
                                        <small>Minimum 8 caractères avec majuscule, minuscule et chiffre</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="confirmPassword" class="form-label">Confirmation *</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                                            placeholder="Confirmez le mot de passe" required>
                                        <button type="button" class="input-group-text toggle-password">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                                <label class="form-check-label" for="terms">
                                    J'accepte les <a href="#" class="text-primary">conditions d'utilisation</a>
                                    et la <a href="#" class="text-primary">politique de confidentialité</a> *
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter">
                                <label class="form-check-label" for="newsletter">
                                    Je souhaite recevoir les actualités et offres spéciales d'EduPlatform
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-3 fw-semibold">
                            <i class="fas fa-user-plus me-2"></i>Créer mon compte
                        </button>
                    </form>

                    <div class="auth-footer text-center mt-4">
                        <p class="text-muted mb-0">
                            Vous avez déjà un compte ?
                            <a href="<?= site_url('auth/login') ?>" class="text-primary fw-semibold">Se connecter</a>
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
        const toggleButtons = document.querySelectorAll('.toggle-password');

        toggleButtons.forEach(button => {
            button.addEventListener('click', function() {
                const input = this.closest('.input-group').querySelector('input');
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                this.innerHTML = type === 'password' ? '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
            });
        });

        // Password validation
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirmPassword');

        function validatePassword() {
            if (password.value !== confirmPassword.value) {
                confirmPassword.setCustomValidity("Les mots de passe ne correspondent pas");
            } else {
                confirmPassword.setCustomValidity("");
            }
        }

        password.addEventListener('change', validatePassword);
        confirmPassword.addEventListener('keyup', validatePassword);

        // Form validation
        const form = document.getElementById('registerForm');
        form.addEventListener('submit', function(e) {
            if (!form.checkValidity()) {
                e.preventDefault();
                e.stopPropagation();
            }
            form.classList.add('was-validated');
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

    .auth-form .form-control,
    .auth-form .form-select {
        padding: 12px 15px;
        border-radius: 10px;
        border: 1px solid #e2e8f0;
        transition: all 0.3s ease;
    }

    .auth-form .form-control:focus,
    .auth-form .form-select:focus {
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

    .password-strength {
        height: 4px;
        border-radius: 2px;
        margin-top: 5px;
        transition: all 0.3s ease;
    }

    .strength-weak {
        background: #e53e3e;
        width: 25%;
    }

    .strength-medium {
        background: #dd6b20;
        width: 50%;
    }

    .strength-strong {
        background: #38a169;
        width: 75%;
    }

    .strength-very-strong {
        background: #25855a;
        width: 100%;
    }

    @media (max-width: 768px) {
        .auth-card {
            padding: 30px 20px;
            margin: 0 10px;
        }
    }
</style>