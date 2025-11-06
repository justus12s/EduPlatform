<?= $this->include('partials/header') ?>
<?= $this->include('partials/navigation') ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container mt-0 position-relative">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">
                    Révolutionnez l'éducation avec
                    <span class="text-warning">EduPlatform</span>
                </h1>
                <p class="lead mb-4 opacity-90">
                    Plateforme intelligente de gestion éducative qui transforme la
                    façon d'enseigner et d'apprendre dans les établissements modernes.
                </p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="<?= site_url('auth/register') ?>" class="btn btn-light btn-lg px-4 py-3 fw-semibold">
                        <i class="fas fa-rocket me-2"></i>Commencer gratuitement
                    </a>
                    <a href="<?= site_url('fonctionnalites') ?>" class="btn btn-outline-light btn-lg px-4 py-3 fw-semibold">
                        <i class="fas fa-play-circle me-2"></i>Voir la démo
                    </a>
                </div>
                <div class="mt-4 d-flex align-items-center text-light opacity-90">
                    <i class="fas fa-check-circle text-success me-2"></i>
                    <small class="fw-medium">Aucune carte de crédit requise • Essai de 30 jours</small>
                </div>
            </div>
            <div class="col-lg-6 text-center mt-5 mt-lg-0">
                <div class="hero-image-wrapper position-relative">
                    <img
                        src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Éducation moderne - EduPlatform"
                        class="img-fluid rounded-3 shadow-lg" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistiques -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-number" data-count="50">0</div>
                    <p class="text-muted fw-medium">Établissements partenaires</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-number" data-count="10000">0</div>
                    <p class="text-muted fw-medium">Étudiants actifs</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-number" data-count="500">0</div>
                    <p class="text-muted fw-medium">Enseignants</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-number" data-count="99">0</div>
                    <p class="text-muted fw-medium">Satisfaction</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Profils Utilisateurs -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-primary-soft text-primary mb-3">ACCÈS PLATEFORME</span>
            <h2 class="fw-bold mb-3">Accédez à votre espace</h2>
            <p class="text-muted">
                Choisissez votre profil pour accéder à la plateforme
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="profile-card">
                    <div class="profile-icon-wrapper mb-4">
                        <i class="fas fa-user-shield fa-3x text-primary"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Administrateur</h4>
                    <p class="text-muted mb-4">
                        Gestion complète de l'établissement, des utilisateurs, des ressources
                        et analytics détaillés.
                    </p>
                    <ul class="list-unstyled text-muted mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Gestion des utilisateurs</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Analytics et rapports</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Configuration système</li>
                    </ul>
                    <a href="<?= site_url('admin/login') ?>" class="btn btn-primary w-100 py-3 fw-semibold">
                        <i class="fas fa-sign-in-alt me-2"></i>Accéder à l'espace
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="profile-card">
                    <div class="profile-icon-wrapper mb-4">
                        <i class="fas fa-chalkboard-teacher fa-3x text-success"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Enseignant</h4>
                    <p class="text-muted mb-4">
                        Création de cours, évaluations, suivi des étudiants et outils
                        de collaboration avancés.
                    </p>
                    <ul class="list-unstyled text-muted mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Création de cours</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Évaluations et notes</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Suivi des étudiants</li>
                    </ul>
                    <a href="<?= site_url('enseignant/login') ?>" class="btn btn-success w-100 py-3 fw-semibold">
                        <i class="fas fa-sign-in-alt me-2"></i>Accéder à l'espace
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="profile-card">
                    <div class="profile-icon-wrapper mb-4">
                        <i class="fas fa-user-graduate fa-3x text-info"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Étudiant</h4>
                    <p class="text-muted mb-4">
                        Accès aux cours, ressources pédagogiques, résultats et outils
                        d'apprentissage collaboratif.
                    </p>
                    <ul class="list-unstyled text-muted mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Cours et ressources</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Résultats et progrès</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Collaboration</li>
                    </ul>
                    <a href="<?= site_url('etudiant/login') ?>" class="btn btn-info w-100 py-3 fw-semibold">
                        <i class="fas fa-sign-in-alt me-2"></i>Accéder à l'espace
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-primary-soft text-primary mb-3">FONCTIONNALITÉS</span>
            <h2 class="fw-bold mb-3">Pourquoi choisir EduPlatform ?</h2>
            <p class="text-muted">
                Découvrez les fonctionnalités qui font la différence
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card card h-100 border-0">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon-wrapper mb-4">
                            <i class="fas fa-brain fa-3x text-primary"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Intelligence Artificielle</h5>
                        <p class="text-muted">
                            Recommandations personnalisées et analytics avancés pour
                            optimiser l'apprentissage de chaque étudiant.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card card h-100 border-0">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon-wrapper mb-4">
                            <i class="fas fa-mobile-alt fa-3x text-success"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Multi-plateforme</h5>
                        <p class="text-muted">
                            Accédez à la plateforme depuis n'importe quel appareil,
                            à tout moment, avec une expérience optimisée.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card card h-100 border-0">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon-wrapper mb-4">
                            <i class="fas fa-shield-alt fa-3x text-warning"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Sécurité Maximale</h5>
                        <p class="text-muted">
                            Vos données sont protégées avec les standards de sécurité
                            les plus élevés et conformité RGPD.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-0">
            <div class="col-md-4">
                <div class="feature-card card h-100 border-0">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon-wrapper mb-4">
                            <i class="fas fa-chart-line fa-3x text-info"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Analytics en Temps Réel</h5>
                        <p class="text-muted">
                            Suivez les performances et l'engagement avec des tableaux
                            de bord détaillés et personnalisables.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card card h-100 border-0">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon-wrapper mb-4">
                            <i class="fas fa-users fa-3x text-purple"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Collaboration</h5>
                        <p class="text-muted">
                            Outils de collaboration avancés pour faciliter les échanges
                            entre étudiants et enseignants.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card card h-100 border-0">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon-wrapper mb-4">
                            <i class="fas fa-cloud-upload-alt fa-3x text-danger"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Cloud Sécurisé</h5>
                        <p class="text-muted">
                            Stockage illimité et sécurisé pour tous vos documents
                            pédagogiques et ressources éducatives.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Témoignages -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-primary-soft text-primary mb-3">TÉMOIGNAGES</span>
            <h2 class="fw-bold mb-3">Ce qu'ils disent de nous</h2>
            <p class="text-muted">
                Découvrez les retours de notre communauté éducative
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="testimonial-card card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="testimonial-header d-flex align-items-center mb-3">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                                alt="Directeur" class="rounded-circle me-3" width="60" height="60">
                            <div>
                                <h6 class="fw-bold mb-1">Pierre Martin</h6>
                                <p class="text-muted small mb-0">Directeur, Lycée Descartes</p>
                            </div>
                        </div>
                        <p class="text-muted mb-3">
                            "EduPlatform a transformé la gestion de notre établissement.
                            Gain de temps considérable et meilleur suivi des étudiants."
                        </p>
                        <div class="stars text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="testimonial-card card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="testimonial-header d-flex align-items-center mb-3">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                                alt="Enseignante" class="rounded-circle me-3" width="60" height="60">
                            <div>
                                <h6 class="fw-bold mb-1">Marie Lambert</h6>
                                <p class="text-muted small mb-0">Enseignante de Mathématiques</p>
                            </div>
                        </div>
                        <p class="text-muted mb-3">
                            "La plateforme simplifie considérablement la création de cours
                            et le suivi des élèves. Interface intuitive et complète."
                        </p>
                        <div class="stars text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="testimonial-card card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="testimonial-header d-flex align-items-center mb-3">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                                alt="Étudiant" class="rounded-circle me-3" width="60" height="60">
                            <div>
                                <h6 class="fw-bold mb-1">Thomas Dubois</h6>
                                <p class="text-muted small mb-0">Étudiant en Licence</p>
                            </div>
                        </div>
                        <p class="text-muted mb-3">
                            "J'adore pouvoir accéder à mes cours et ressources depuis
                            n'importe où. L'application mobile est géniale !"
                        </p>
                        <div class="stars text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 text-white cta-section">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">
            Prêt à transformer votre expérience éducative ?
        </h2>
        <p class="lead mb-4 opacity-90">
            Rejoignez des milliers d'établissements qui font confiance à EduPlatform
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="<?= site_url('contact') ?>" class="btn btn-light btn-lg px-4 py-3 fw-semibold">
                <i class="fas fa-phone me-2"></i>Nous contacter
            </a>
            <a href="<?= site_url('auth/demo') ?>" class="btn btn-outline-light btn-lg px-4 py-3 fw-semibold">
                <i class="fas fa-eye me-2"></i>Démo gratuite
            </a>
        </div>
        <p class="mt-4 text-light opacity-75">
            <i class="fas fa-clock me-1"></i>Essai gratuit de 30 jours •
            <i class="fas fa-credit-card me-1 ms-2"></i>Aucune carte de crédit requise
        </p>
    </div>
</section>

<?= $this->include('partials/footer') ?>

<script>
    // Animation des statistiques
    document.addEventListener("DOMContentLoaded", function() {
        // Animation au scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";

                    // Animer les statistiques si c'est la section stats
                    if (entry.target.classList.contains('stat-card')) {
                        animateStats();
                    }
                }
            });
        }, observerOptions);

        // Observer les éléments à animer
        document.querySelectorAll('.feature-card, .profile-card, .testimonial-card').forEach(el => {
            el.style.opacity = "0";
            el.style.transform = "translateY(30px)";
            el.style.transition = "all 0.6s ease";
            observer.observe(el);
        });

        // Animation des statistiques
        function animateStats() {
            const statNumbers = document.querySelectorAll('.stat-number');

            statNumbers.forEach(stat => {
                const target = parseInt(stat.getAttribute('data-count'));
                const suffix = stat.textContent.replace(/[0-9]/g, '');
                let current = 0;
                const increment = target / 60;
                const duration = 2000;
                const stepTime = duration / (target / increment);

                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        stat.textContent = target + suffix;
                        clearInterval(timer);
                    } else {
                        stat.textContent = Math.floor(current) + suffix;
                    }
                }, stepTime);
            });
        }

        // Observer les statistiques
        document.querySelectorAll('.stat-card').forEach(card => {
            observer.observe(card);
        });
    });
</script>

<style>
    /* Correction du décalage */
    body {
        padding-top: 0 !important;
    }

    .hero-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 120px 0 80px;
        margin-top: 0;
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="rgba(255,255,255,0.05)" points="0,1000 1000,0 1000,1000"/></svg>');
    }

    .bg-primary-soft {
        background-color: rgba(102, 126, 234, 0.1) !important;
    }

    .profile-card {
        background: white;
        border-radius: 15px;
        padding: 30px 25px;
        text-align: center;
        transition: all 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.05);
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .profile-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .profile-icon-wrapper {
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .feature-card {
        transition: all 0.3s ease;
        border-radius: 15px;
        background: white;
        height: 100%;
        border: 1px solid rgba(0, 0, 0, 0.05) !important;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
    }

    .feature-icon-wrapper {
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .testimonial-card {
        transition: all 0.3s ease;
        border-radius: 15px;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1) !important;
    }

    .stat-number {
        font-size: 2.5rem;
        font-weight: 700;
        background: linear-gradient(135deg, #667eea, #764ba2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: block;
    }

    .stat-card {
        padding: 15px;
    }

    .cta-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        position: relative;
        overflow: hidden;
    }

    .cta-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="rgba(255,255,255,0.05)" points="0,0 1000,1000 0,1000"/></svg>');
    }

    .text-purple {
        color: #6f42c1 !important;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .hero-section {
            padding: 100px 0 60px;
            text-align: center;
        }

        .display-4 {
            font-size: 2.2rem;
        }

        .hero-section .btn-lg {
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
        }

        .stat-number {
            font-size: 2rem;
        }

        .profile-card,
        .feature-card {
            margin-bottom: 1.5rem;
        }
    }

    @media (max-width: 576px) {
        .hero-section {
            padding: 80px 0 40px;
        }

        .display-4 {
            font-size: 1.8rem;
        }

        .lead {
            font-size: 1rem;
        }
    }
</style>