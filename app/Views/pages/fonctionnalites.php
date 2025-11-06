<?= $this->include('partials/header') ?>
<?= $this->include('partials/navigation') ?>

<!-- Hero Section -->
<section class="page-hero-section bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">Fonctionnalités</h1>
                <p class="lead mb-4">
                    Découvrez toutes les fonctionnalités conçues pour répondre
                    aux besoins spécifiques de chaque acteur de l'éducation.
                </p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                    alt="Fonctionnalités EduPlatform" class="img-fluid rounded-3">
            </div>
        </div>
    </div>
</section>

<!-- Navigation des fonctionnalités -->
<section class="py-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills justify-content-center" id="featuresTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="admin-tab" data-bs-toggle="tab" data-bs-target="#admin" type="button">
                            <i class="fas fa-user-shield me-2"></i>Administrateur
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="teacher-tab" data-bs-toggle="tab" data-bs-target="#teacher" type="button">
                            <i class="fas fa-chalkboard-teacher me-2"></i>Enseignant
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="student-tab" data-bs-toggle="tab" data-bs-target="#student" type="button">
                            <i class="fas fa-user-graduate me-2"></i>Étudiant
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Contenu des fonctionnalités -->
<section class="py-5">
    <div class="container">
        <div class="tab-content" id="featuresTabContent">
            <!-- Admin -->
            <div class="tab-pane fade show active" id="admin" role="tabpanel">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <h2 class="fw-bold mb-4">Espace Administrateur</h2>
                        <p class="text-muted mb-4">
                            Gestion complète de votre établissement avec des outils
                            puissants et une vue d'ensemble en temps réel.
                        </p>
                        <ul class="list-unstyled">
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Gestion centralisée des utilisateurs</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Tableaux de bord analytics</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Gestion des plannings et ressources</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Rapports détaillés et exportables</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Admin Features" class="img-fluid rounded-3 shadow">
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="feature-detail-card text-center p-4">
                            <i class="fas fa-users-cog fa-2x text-primary mb-3"></i>
                            <h5>Gestion des Utilisateurs</h5>
                            <p class="text-muted small">
                                Créez et gérez les comptes enseignants, étudiants et personnels en quelques clics.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-detail-card text-center p-4">
                            <i class="fas fa-chart-bar fa-2x text-success mb-3"></i>
                            <h5>Analytics Avancés</h5>
                            <p class="text-muted small">
                                Suivez les indicateurs clés de performance de votre établissement.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-detail-card text-center p-4">
                            <i class="fas fa-cog fa-2x text-info mb-3"></i>
                            <h5>Configuration</h5>
                            <p class="text-muted small">
                                Personnalisez la plateforme selon les besoins spécifiques de votre établissement.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enseignant -->
            <div class="tab-pane fade" id="teacher" role="tabpanel">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <h2 class="fw-bold mb-4">Espace Enseignant</h2>
                        <p class="text-muted mb-4">
                            Outils pédagogiques complets pour créer, animer et évaluer
                            vos cours en toute simplicité.
                        </p>
                        <ul class="list-unstyled">
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Création de cours interactifs</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Évaluations et corrections</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Suivi individualisé des étudiants</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Ressources pédagogiques partagées</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Teacher Features" class="img-fluid rounded-3 shadow">
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="feature-detail-card text-center p-4">
                            <i class="fas fa-book fa-2x text-primary mb-3"></i>
                            <h5>Création de Cours</h5>
                            <p class="text-muted small">
                                Conception de cours multimédias avec intégration de vidéos, quiz et ressources.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-detail-card text-center p-4">
                            <i class="fas fa-tasks fa-2x text-success mb-3"></i>
                            <h5>Évaluations</h5>
                            <p class="text-muted small">
                                Créez des évaluations variées avec correction automatique et manuelle.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-detail-card text-center p-4">
                            <i class="fas fa-comments fa-2x text-info mb-3"></i>
                            <h5>Communication</h5>
                            <p class="text-muted small">
                                Échangez avec vos étudiants via messagerie intégrée et forums.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Étudiant -->
            <div class="tab-pane fade" id="student" role="tabpanel">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <h2 class="fw-bold mb-4">Espace Étudiant</h2>
                        <p class="text-muted mb-4">
                            Environnement d'apprentissage personnalisé et collaboratif
                            pour progresser à votre rythme.
                        </p>
                        <ul class="list-unstyled">
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Accès aux cours et ressources</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Suivi des progrès et résultats</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Outils de collaboration</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Application mobile dédiée</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Student Features" class="img-fluid rounded-3 shadow">
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="feature-detail-card text-center p-4">
                            <i class="fas fa-laptop fa-2x text-primary mb-3"></i>
                            <h5>Cours en Ligne</h5>
                            <p class="text-muted small">
                                Accédez à tous vos cours, où que vous soyez, sur n'importe quel appareil.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-detail-card text-center p-4">
                            <i class="fas fa-chart-line fa-2x text-success mb-3"></i>
                            <h5>Suivi des Progrès</h5>
                            <p class="text-muted small">
                                Visualisez votre progression et identifiez les points à améliorer.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-detail-card text-center p-4">
                            <i class="fas fa-mobile-alt fa-2x text-info mb-3"></i>
                            <h5>Application Mobile</h5>
                            <p class="text-muted small">
                                Apprenez où vous voulez avec notre application mobile optimisée.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Prêt à découvrir toutes nos fonctionnalités ?</h2>
        <p class="lead mb-4">
            Demandez une démonstration personnalisée adaptée à vos besoins
        </p>
        <a href="<?= site_url('contact') ?>" class="btn btn-light btn-lg px-4 me-3">
            <i class="fas fa-calendar me-2"></i>Démo personnalisée
        </a>
        <a href="<?= site_url('auth/register') ?>" class="btn btn-outline-light btn-lg px-4">
            <i class="fas fa-rocket me-2"></i>Essai gratuit
        </a>
    </div>
</section>

<?= $this->include('partials/footer') ?>

<style>
    .page-hero-section {
        padding: 120px 0 80px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .nav-pills .nav-link {
        padding: 12px 24px;
        margin: 0 10px;
        border-radius: 25px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .nav-pills .nav-link.active {
        background: linear-gradient(135deg, #667eea, #764ba2);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .nav-pills .nav-link:not(.active) {
        background: white;
        color: #667eea;
        border: 2px solid #667eea;
    }

    .feature-detail-card {
        border: 1px solid rgba(0, 0, 0, 0.05);
        border-radius: 15px;
        transition: all 0.3s ease;
        height: 100%;
    }

    .feature-detail-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .tab-pane {
        animation: fadeIn 0.5s ease-in;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
</style>