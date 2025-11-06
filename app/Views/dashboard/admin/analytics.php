<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="dashboard-admin">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/dashboard') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Analytics</li>
                </ol>
            </nav>
            <h1 class="h3 mb-0">Analytics & Rapports</h1>
            <p class="text-muted">Statistiques détaillées et analyses de performance</p>
        </div>
        <div class="d-flex gap-2">
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    <i class="fas fa-calendar me-2"></i>Ce mois-ci
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Cette semaine</a></li>
                    <li><a class="dropdown-item" href="#">Ce mois-ci</a></li>
                    <li><a class="dropdown-item" href="#">Ce trimestre</a></li>
                    <li><a class="dropdown-item" href="#">Cette année</a></li>
                </ul>
            </div>
            <button class="btn btn-primary">
                <i class="fas fa-download me-2"></i>Export complet
            </button>
        </div>
    </div>

    <!-- KPI Principaux -->
    <div class="row g-4 mb-4">
        <div class="col-xl-3 col-md-6">
            <div class="kpi-card primary">
                <div class="kpi-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="kpi-content">
                    <h3>1,248</h3>
                    <p>Utilisateurs actifs</p>
                    <div class="kpi-trend positive">
                        <i class="fas fa-arrow-up"></i>
                        <span>12.5% vs mois dernier</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="kpi-card success">
                <div class="kpi-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="kpi-content">
                    <h3>87.3%</h3>
                    <p>Taux de réussite</p>
                    <div class="kpi-trend positive">
                        <i class="fas fa-arrow-up"></i>
                        <span>3.2% vs trimestre dernier</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="kpi-card warning">
                <div class="kpi-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div class="kpi-content">
                    <h3>94%</h3>
                    <p>Taux d'engagement</p>
                    <div class="kpi-trend positive">
                        <i class="fas fa-arrow-up"></i>
                        <span>5.1% vs mois dernier</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="kpi-card info">
                <div class="kpi-icon">
                    <i class="fas fa-book"></i>
                </div>
                <div class="kpi-content">
                    <h3>156</h3>
                    <p>Heures de cours/mois</p>
                    <div class="kpi-trend negative">
                        <i class="fas fa-arrow-down"></i>
                        <span>2.3% vs mois dernier</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Graphique principal -->
        <div class="col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-chart-line me-2"></i>
                        Activité de la plateforme
                    </h5>
                </div>
                <div class="card-body">
                    <div class="chart-container-large">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-center">
                                <i class="fas fa-chart-area fa-3x text-muted mb-3"></i>
                                <p class="text-muted">Graphique d'activité en temps réel</p>
                                <small>Visualisation des connexions, cours créés, notes soumises</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Répartition par rôle -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-chart-pie me-2"></i>
                        Répartition des utilisateurs
                    </h5>
                </div>
                <div class="card-body">
                    <div class="chart-container-small">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-center">
                                <i class="fas fa-chart-pie fa-2x text-muted mb-3"></i>
                                <p class="text-muted">Graphique circulaire</p>
                            </div>
                        </div>
                    </div>
                    <div class="distribution-legend">
                        <div class="legend-item">
                            <div class="legend-color bg-primary"></div>
                            <span>Étudiants (78%)</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color bg-warning"></div>
                            <span>Enseignants (15%)</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color bg-success"></div>
                            <span>Administrateurs (7%)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mt-2">
        <!-- Performance des cours -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-trophy me-2"></i>
                        Top 5 des cours
                    </h5>
                </div>
                <div class="card-body">
                    <div class="performance-list">
                        <div class="performance-item">
                            <div class="course-rank">1</div>
                            <div class="course-info">
                                <h6 class="mb-1">Mathématiques Avancées</h6>
                                <small class="text-muted">Dr. Martin - 45 étudiants</small>
                            </div>
                            <div class="course-stats">
                                <div class="stat">
                                    <span class="value">16.2</span>
                                    <small class="label">Moyenne</small>
                                </div>
                                <div class="stat">
                                    <span class="value">95%</span>
                                    <small class="label">Réussite</small>
                                </div>
                            </div>
                        </div>

                        <div class="performance-item">
                            <div class="course-rank">2</div>
                            <div class="course-info">
                                <h6 class="mb-1">Physique Quantique</h6>
                                <small class="text-muted">Prof. Dubois - 38 étudiants</small>
                            </div>
                            <div class="course-stats">
                                <div class="stat">
                                    <span class="value">14.8</span>
                                    <small class="label">Moyenne</small>
                                </div>
                                <div class="stat">
                                    <span class="value">88%</span>
                                    <small class="label">Réussite</small>
                                </div>
                            </div>
                        </div>

                        <div class="performance-item">
                            <div class="course-rank">3</div>
                            <div class="course-info">
                                <h6 class="mb-1">Chimie Organique</h6>
                                <small class="text-muted">Dr. Lefebvre - 32 étudiants</small>
                            </div>
                            <div class="course-stats">
                                <div class="stat">
                                    <span class="value">13.5</span>
                                    <small class="label">Moyenne</small>
                                </div>
                                <div class="stat">
                                    <span class="value">76%</span>
                                    <small class="label">Réussite</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistiques de validation -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-check-circle me-2"></i>
                        Validation des notes
                    </h5>
                </div>
                <div class="card-body">
                    <div class="validation-stats">
                        <div class="stat-row">
                            <div class="stat-label">Notes soumises</div>
                            <div class="stat-value">156</div>
                            <div class="stat-progress">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="stat-row">
                            <div class="stat-label">Notes approuvées</div>
                            <div class="stat-value">142</div>
                            <div class="stat-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width: 91%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="stat-row">
                            <div class="stat-label">En attente</div>
                            <div class="stat-value">8</div>
                            <div class="stat-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-warning" style="width: 5%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="stat-row">
                            <div class="stat-label">Rejetées</div>
                            <div class="stat-value">6</div>
                            <div class="stat-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-danger" style="width: 4%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Taux d'engagement -->
            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-chart-bar me-2"></i>
                        Engagement par filière
                    </h5>
                </div>
                <div class="card-body">
                    <div class="engagement-stats">
                        <div class="engagement-item">
                            <div class="filiere">Sciences</div>
                            <div class="engagement-bar">
                                <div class="bar-fill" style="width: 92%"></div>
                            </div>
                            <div class="engagement-value">92%</div>
                        </div>
                        <div class="engagement-item">
                            <div class="filiere">Lettres</div>
                            <div class="engagement-bar">
                                <div class="bar-fill" style="width: 85%"></div>
                            </div>
                            <div class="engagement-value">85%</div>
                        </div>
                        <div class="engagement-item">
                            <div class="filiere">Économie</div>
                            <div class="engagement-bar">
                                <div class="bar-fill" style="width: 78%"></div>
                            </div>
                            <div class="engagement-value">78%</div>
                        </div>
                        <div class="engagement-item">
                            <div class="filiere">Droit</div>
                            <div class="engagement-bar">
                                <div class="bar-fill" style="width: 88%"></div>
                            </div>
                            <div class="engagement-value">88%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rapports téléchargeables -->
    <div class="card mt-4">
        <div class="card-header">
            <h5 class="card-title mb-0">
                <i class="fas fa-file-alt me-2"></i>
                Rapports disponibles
            </h5>
        </div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="report-card">
                        <div class="report-icon bg-primary">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="report-content">
                            <h6>Rapport des étudiants</h6>
                            <p class="text-muted">Performances et statistiques des étudiants</p>
                            <button class="btn btn-outline-primary btn-sm">
                                <i class="fas fa-download me-1"></i>Télécharger
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="report-card">
                        <div class="report-icon bg-success">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="report-content">
                            <h6>Rapport des enseignants</h6>
                            <p class="text-muted">Activité et performance des enseignants</p>
                            <button class="btn btn-outline-success btn-sm">
                                <i class="fas fa-download me-1"></i>Télécharger
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="report-card">
                        <div class="report-icon bg-info">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="report-content">
                            <h6>Rapport financier</h6>
                            <p class="text-muted">Budget et dépenses de l'établissement</p>
                            <button class="btn btn-outline-info btn-sm">
                                <i class="fas fa-download me-1"></i>Télécharger
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .kpi-card {
        background: white;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        border-left: 4px solid;
        transition: all 0.3s ease;
    }

    .kpi-card.primary {
        border-left-color: #667eea;
    }

    .kpi-card.success {
        border-left-color: #10b981;
    }

    .kpi-card.warning {
        border-left-color: #f59e0b;
    }

    .kpi-card.info {
        border-left-color: #3b82f6;
    }

    .kpi-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .kpi-icon {
        font-size: 2.5em;
        margin-bottom: 15px;
        opacity: 0.8;
    }

    .kpi-card.primary .kpi-icon {
        color: #667eea;
    }

    .kpi-card.success .kpi-icon {
        color: #10b981;
    }

    .kpi-card.warning .kpi-icon {
        color: #f59e0b;
    }

    .kpi-card.info .kpi-icon {
        color: #3b82f6;
    }

    .kpi-content h3 {
        font-size: 2em;
        font-weight: 700;
        margin-bottom: 5px;
        color: #1f2937;
    }

    .kpi-content p {
        color: #6b7280;
        margin-bottom: 8px;
        font-size: 0.9em;
    }

    .kpi-trend {
        display: flex;
        align-items: center;
        gap: 5px;
        font-size: 0.8em;
        font-weight: 600;
    }

    .kpi-trend.positive {
        color: #10b981;
    }

    .kpi-trend.negative {
        color: #ef4444;
    }

    .chart-container-large {
        height: 300px;
        background: #f8fafc;
        border-radius: 8px;
        border: 2px dashed #e5e7eb;
    }

    .chart-container-small {
        height: 200px;
        background: #f8fafc;
        border-radius: 8px;
        border: 2px dashed #e5e7eb;
        margin-bottom: 20px;
    }

    .distribution-legend {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .legend-item {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .legend-color {
        width: 16px;
        height: 16px;
        border-radius: 4px;
    }

    .performance-list {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .performance-item {
        display: flex;
        align-items: center;
        padding: 15px;
        background: #f8fafc;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .performance-item:hover {
        background: #f1f5f9;
        transform: translateX(5px);
    }

    .course-rank {
        width: 30px;
        height: 30px;
        background: #667eea;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        margin-right: 15px;
    }

    .performance-item:nth-child(2) .course-rank {
        background: #f59e0b;
    }

    .performance-item:nth-child(3) .course-rank {
        background: #10b981;
    }

    .course-info {
        flex: 1;
    }

    .course-info h6 {
        margin: 0;
        color: #1f2937;
    }

    .course-stats {
        display: flex;
        gap: 20px;
    }

    .stat {
        text-align: center;
    }

    .stat .value {
        display: block;
        font-weight: 700;
        color: #667eea;
        font-size: 1.1em;
    }

    .stat .label {
        font-size: 0.8em;
        color: #6b7280;
    }

    .validation-stats {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .stat-row {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .stat-label {
        flex: 1;
        color: #374151;
        font-weight: 500;
    }

    .stat-value {
        width: 50px;
        text-align: right;
        font-weight: 700;
        color: #667eea;
    }

    .stat-progress {
        flex: 2;
    }

    .progress {
        height: 8px;
        background: #e5e7eb;
        border-radius: 4px;
        overflow: hidden;
    }

    .engagement-stats {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .engagement-item {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .filiere {
        width: 80px;
        font-weight: 500;
        color: #374151;
        font-size: 0.9em;
    }

    .engagement-bar {
        flex: 1;
        height: 8px;
        background: #e5e7eb;
        border-radius: 4px;
        overflow: hidden;
    }

    .bar-fill {
        height: 100%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 4px;
        transition: width 0.3s ease;
    }

    .engagement-value {
        width: 40px;
        text-align: right;
        font-weight: 700;
        color: #667eea;
        font-size: 0.9em;
    }

    .report-card {
        display: flex;
        align-items: center;
        padding: 20px;
        background: #f8fafc;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .report-card:hover {
        background: #f1f5f9;
        transform: translateY(-2px);
    }

    .report-icon {
        width: 50px;
        height: 50px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2em;
        margin-right: 15px;
    }

    .report-content {
        flex: 1;
    }

    .report-content h6 {
        margin: 0 0 5px 0;
        color: #1f2937;
    }

    @media (max-width: 768px) {
        .kpi-content h3 {
            font-size: 1.5em;
        }

        .performance-item {
            flex-direction: column;
            text-align: center;
            gap: 15px;
        }

        .course-stats {
            justify-content: center;
        }

        .stat-row {
            flex-direction: column;
            text-align: center;
            gap: 8px;
        }

        .engagement-item {
            flex-direction: column;
            text-align: center;
            gap: 8px;
        }

        .report-card {
            flex-direction: column;
            text-align: center;
        }

        .report-icon {
            margin-right: 0;
            margin-bottom: 15px;
        }
    }
</style>
<?= $this->endSection() ?>