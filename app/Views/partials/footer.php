<footer class="bg-dark text-white pt-5">
    <div class="container">
        <div class="row">
            <!-- Colonne 1: Logo et description -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="footer-brand mb-3">
                    <h4 class="fw-bold text-primary">
                        <i class="fas fa-graduation-cap me-2"></i>EduPlatform
                    </h4>
                </div>
                <p class="text-light opacity-75 mb-4">
                    Plateforme éducative innovante qui révolutionne l'enseignement et l'apprentissage
                    grâce à des technologies modernes et une approche centrée sur l'utilisateur.
                </p>
                <div class="social-links">
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle me-2" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle me-2" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle me-2" title="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle me-2" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle" title="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>

            <!-- Colonne 2: Liens rapides -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="fw-bold mb-3 text-white text-uppercase small">Navigation</h6>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="<?= site_url('accueil') ?>" class="text-light opacity-75 text-decoration-none footer-link">
                            <i class="fas fa-chevron-right me-2 small"></i>Accueil
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="<?= site_url('a_propos') ?>" class="text-light opacity-75 text-decoration-none footer-link">
                            <i class="fas fa-chevron-right me-2 small"></i>À propos
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="<?= site_url('fonctionnalites') ?>" class="text-light opacity-75 text-decoration-none footer-link">
                            <i class="fas fa-chevron-right me-2 small"></i>Fonctionnalités
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="<?= site_url('contact') ?>" class="text-light opacity-75 text-decoration-none footer-link">
                            <i class="fas fa-chevron-right me-2 small"></i>Contact
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="<?= site_url('auth/demo') ?>" class="text-light opacity-75 text-decoration-none footer-link">
                            <i class="fas fa-chevron-right me-2 small"></i>Démo gratuite
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Colonne 3: Accès par profil -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h6 class="fw-bold mb-3 text-white text-uppercase small">Accès Plateforme</h6>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="<?= site_url('admin/login') ?>" class="text-light opacity-75 text-decoration-none footer-link">
                            <i class="fas fa-user-shield me-2 text-primary"></i>Espace Administrateur
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="<?= site_url('enseignant/login') ?>" class="text-light opacity-75 text-decoration-none footer-link">
                            <i class="fas fa-chalkboard-teacher me-2 text-success"></i>Espace Enseignant
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="<?= site_url('etudiant/login') ?>" class="text-light opacity-75 text-decoration-none footer-link">
                            <i class="fas fa-user-graduate me-2 text-info"></i>Espace Étudiant
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="<?= site_url('auth/login') ?>" class="text-light opacity-75 text-decoration-none footer-link">
                            <i class="fas fa-sign-in-alt me-2 text-warning"></i>Connexion Générale
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="<?= site_url('auth/register') ?>" class="text-light opacity-75 text-decoration-none footer-link">
                            <i class="fas fa-user-plus me-2 text-secondary"></i>Créer un compte
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Colonne 4: Contact et newsletter -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h6 class="fw-bold mb-3 text-white text-uppercase small">Contact & Newsletter</h6>
                <ul class="list-unstyled text-light opacity-75 mb-4">
                    <li class="mb-3">
                        <i class="fas fa-envelope me-2 text-primary"></i>
                        <span>contact@eduplatform.com</span>
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-phone me-2 text-success"></i>
                        <span>+33 1 23 45 67 89</span>
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-map-marker-alt me-2 text-danger"></i>
                        <span>123 Avenue de l'Éducation<br>75000 Paris, France</span>
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-clock me-2 text-warning"></i>
                        <span>Lun - Ven: 9h00 - 18h00</span>
                    </li>
                </ul>

                <!-- Newsletter -->
                <div class="newsletter">
                    <h6 class="fw-bold mb-2 text-white small">Newsletter</h6>
                    <p class="text-light opacity-75 small mb-3">Recevez nos actualités</p>
                    <form class="d-flex">
                        <input type="email" class="form-control form-control-sm me-2" placeholder="Votre email" required>
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Séparateur -->
        <hr class="my-4 bg-light opacity-25">

        <!-- Ligne inférieure -->
        <div class="row align-items-center py-3">
            <div class="col-md-6 text-center text-md-start">
                <p class="text-light opacity-75 mb-0 small">
                    &copy; <?= date('Y') ?> EduPlatform. Tous droits réservés.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <div class="footer-legals">
                    <a href="#" class="text-light opacity-75 text-decoration-none small me-3 footer-link">
                        Politique de confidentialité
                    </a>
                    <a href="#" class="text-light opacity-75 text-decoration-none small me-3 footer-link">
                        Conditions d'utilisation
                    </a>
                    <a href="#" class="text-light opacity-75 text-decoration-none small footer-link">
                        Mentions légales
                    </a>
                </div>
            </div>
        </div>

        <!-- Badge de sécurité -->
        <div class="row">
            <div class="col-12 text-center">
                <div class="security-badge mt-3 pt-3 border-top border-light opacity-25">
                    <span class="badge bg-success me-2">
                        <i class="fas fa-shield-alt me-1"></i>SSL Sécurisé
                    </span>
                    <span class="badge bg-info me-2">
                        <i class="fas fa-graduation-cap me-1"></i>Certifié Éducation
                    </span>
                    <span class="badge bg-warning text-dark">
                        <i class="fas fa-lock me-1"></i>RGPD Compliant
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>