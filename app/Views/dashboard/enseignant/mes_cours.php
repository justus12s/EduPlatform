<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="dashboard-enseignant">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url('enseignant/dashboard') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Mes Cours</li>
                </ol>
            </nav>
            <h1 class="h3 mb-0">Mes Cours</h1>
            <p class="text-muted">Gestion de vos cours et ressources pédagogiques</p>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-outline-primary">
                <i class="fas fa-download me-2"></i>Export
            </button>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createCourseModal">
                <i class="fas fa-plus me-2"></i>Nouveau cours
            </button>
        </div>
    </div>

    <!-- Filtres -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="row g-3 align-items-end">
                <div class="col-md-4">
                    <label class="form-label">Semestre</label>
                    <select class="form-select">
                        <option value="">Tous les semestres</option>
                        <option value="1">Semestre 1</option>
                        <option value="2">Semestre 2</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Statut</label>
                    <select class="form-select">
                        <option value="">Tous les statuts</option>
                        <option value="active">Actif</option>
                        <option value="completed">Terminé</option>
                        <option value="draft">Brouillon</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary w-100">
                        <i class="fas fa-filter me-2"></i>Filtrer
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des cours -->
    <div class="row g-4">
        <!-- Cours Mathématiques Avancées -->
        <div class="col-xl-4 col-md-6">
            <div class="teacher-course-card">
                <div class="course-header">
                    <div class="course-avatar math">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <div class="course-info">
                        <h5 class="course-title">Mathématiques Avancées</h5>
                        <span class="course-code">MATH301</span>
                    </div>
                    <div class="course-status active">
                        <span class="status-badge">Actif</span>
                    </div>
                </div>

                <div class="course-meta">
                    <div class="meta-item">
                        <i class="fas fa-users"></i>
                        <span>28 étudiants</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-clock"></i>
                        <span>Lun 9h-11h, Jeu 14h-16h</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Salle A201</span>
                    </div>
                </div>

                <div class="course-progress">
                    <div class="progress-info">
                        <span>Progression du semestre</span>
                        <span>65%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" style="width: 65%"></div>
                    </div>
                </div>

                <div class="course-stats">
                    <div class="stat">
                        <div class="stat-value">16.2</div>
                        <div class="stat-label">Moyenne</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">92%</div>
                        <div class="stat-label">Réussite</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">3</div>
                        <div class="stat-label">Devoirs</div>
                    </div>
                </div>

                <div class="course-actions">
                    <a href="#" class="btn btn-primary btn-sm">
                        <i class="fas fa-door-open me-1"></i>Accéder
                    </a>
                    <a href="#" class="btn btn-outline-secondary btn-sm">
                        <i class="fas fa-chart-bar me-1"></i>Stats
                    </a>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Modifier</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>Dupliquer</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-archive me-2"></i>Archiver</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cours Physique Quantique -->
        <div class="col-xl-4 col-md-6">
            <div class="teacher-course-card">
                <div class="course-header">
                    <div class="course-avatar physics">
                        <i class="fas fa-atom"></i>
                    </div>
                    <div class="course-info">
                        <h5 class="course-title">Physique Quantique</h5>
                        <span class="course-code">PHY401</span>
                    </div>
                    <div class="course-status active">
                        <span class="status-badge">Actif</span>
                    </div>
                </div>

                <div class="course-meta">
                    <div class="meta-item">
                        <i class="fas fa-users"></i>
                        <span>22 étudiants</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-clock"></i>
                        <span>Mar 10h-12h, Ven 9h-11h</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Lab B104</span>
                    </div>
                </div>

                <div class="course-progress">
                    <div class="progress-info">
                        <span>Progression du semestre</span>
                        <span>45%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" style="width: 45%"></div>
                    </div>
                </div>

                <div class="course-stats">
                    <div class="stat">
                        <div class="stat-value">14.8</div>
                        <div class="stat-label">Moyenne</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">85%</div>
                        <div class="stat-label">Réussite</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">2</div>
                        <div class="stat-label">Devoirs</div>
                    </div>
                </div>

                <div class="course-actions">
                    <a href="#" class="btn btn-primary btn-sm">
                        <i class="fas fa-door-open me-1"></i>Accéder
                    </a>
                    <a href="#" class="btn btn-outline-secondary btn-sm">
                        <i class="fas fa-chart-bar me-1"></i>Stats
                    </a>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Modifier</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>Dupliquer</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-archive me-2"></i>Archiver</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cours Mathématiques Discrètes -->
        <div class="col-xl-4 col-md-6">
            <div class="teacher-course-card">
                <div class="course-header">
                    <div class="course-avatar math">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div class="course-info">
                        <h5 class="course-title">Mathématiques Discrètes</h5>
                        <span class="course-code">MATH202</span>
                    </div>
                    <div class="course-status draft">
                        <span class="status-badge">Brouillon</span>
                    </div>
                </div>

                <div class="course-meta">
                    <div class="meta-item">
                        <i class="fas fa-users"></i>
                        <span>35 étudiants</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-clock"></i>
                        <span>Mer 10h-12h, Jeu 16h-18h</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Salle C305</span>
                    </div>
                </div>

                <div class="course-progress">
                    <div class="progress-info">
                        <span>Progression du semestre</span>
                        <span>25%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" style="width: 25%"></div>
                    </div>
                </div>

                <div class="course-stats">
                    <div class="stat">
                        <div class="stat-value">13.5</div>
                        <div class="stat-label">Moyenne</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">78%</div>
                        <div class="stat-label">Réussite</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">1</div>
                        <div class="stat-label">Devoirs</div>
                    </div>
                </div>

                <div class="course-actions">
                    <a href="#" class="btn btn-primary btn-sm">
                        <i class="fas fa-door-open me-1"></i>Accéder
                    </a>
                    <a href="#" class="btn btn-outline-secondary btn-sm">
                        <i class="fas fa-chart-bar me-1"></i>Stats
                    </a>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Modifier</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>Dupliquer</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-archive me-2"></i>Archiver</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <nav aria-label="Page navigation" class="mt-4">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Précédent</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Suivant</a>
            </li>
        </ul>
    </nav>
</div>

<!-- Modal création de cours -->
<div class="modal fade" id="createCourseModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Créer un nouveau cours</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nom du cours</label>
                            <input type="text" class="form-control" placeholder="Ex: Mathématiques Avancées">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Code du cours</label>
                            <input type="text" class="form-control" placeholder="Ex: MATH301">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3" placeholder="Description du cours..."></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Semestre</label>
                            <select class="form-select">
                                <option value="1">Semestre 1</option>
                                <option value="2">Semestre 2</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Crédits</label>
                            <input type="number" class="form-control" value="4">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Créer le cours</button>
            </div>
        </div>
    </div>
</div>

<style>
    .teacher-course-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        padding: 25px;
        transition: all 0.3s ease;
        height: 100%;
    }

    .teacher-course-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
    }

    .course-header {
        display: flex;
        align-items: flex-start;
        margin-bottom: 20px;
    }

    .course-avatar {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5em;
        margin-right: 15px;
        flex-shrink: 0;
    }

    .course-avatar.math {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .course-avatar.physics {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    }

    .course-info {
        flex: 1;
    }

    .course-title {
        font-size: 1.2em;
        font-weight: 600;
        margin: 0 0 5px 0;
        color: #1f2937;
    }

    .course-code {
        background: #f1f5f9;
        color: #64748b;
        padding: 3px 8px;
        border-radius: 6px;
        font-size: 0.8em;
        font-weight: 500;
    }

    .course-status {
        margin-left: 10px;
    }

    .status-badge {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.8em;
        font-weight: 600;
    }

    .course-status.active .status-badge {
        background: #d1fae5;
        color: #065f46;
    }

    .course-status.draft .status-badge {
        background: #fef3c7;
        color: #92400e;
    }

    .course-meta {
        margin-bottom: 20px;
    }

    .meta-item {
        display: flex;
        align-items: center;
        margin-bottom: 8px;
        color: #64748b;
        font-size: 0.9em;
    }

    .meta-item i {
        width: 16px;
        margin-right: 8px;
        color: #94a3b8;
    }

    .course-progress {
        margin-bottom: 20px;
    }

    .progress-info {
        display: flex;
        justify-content: space-between;
        margin-bottom: 8px;
        font-size: 0.9em;
        color: #64748b;
    }

    .progress {
        height: 6px;
        background: #e2e8f0;
        border-radius: 3px;
        overflow: hidden;
    }

    .progress-bar {
        background: linear-gradient(135deg, #10b981 0%, #34d399 100%);
        border-radius: 3px;
    }

    .course-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
        margin-bottom: 20px;
    }

    .stat {
        text-align: center;
        padding: 15px;
        background: #f8fafc;
        border-radius: 8px;
    }

    .stat-value {
        font-size: 1.3em;
        font-weight: 700;
        color: #667eea;
        margin-bottom: 5px;
    }

    .stat-label {
        font-size: 0.8em;
        color: #6b7280;
    }

    .course-actions {
        display: flex;
        gap: 8px;
    }

    .course-actions .btn {
        flex: 1;
    }

    .course-actions .dropdown {
        flex: 0;
    }

    @media (max-width: 768px) {
        .course-header {
            flex-direction: column;
            text-align: center;
        }

        .course-avatar {
            margin-right: 0;
            margin-bottom: 15px;
        }

        .course-status {
            margin-left: 0;
            margin-top: 10px;
        }

        .course-stats {
            grid-template-columns: 1fr;
        }

        .course-actions {
            flex-direction: column;
        }
    }
</style>
<?= $this->endSection() ?>