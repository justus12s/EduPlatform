<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="dashboard-admin">
    <!-- Header avec breadcrumb -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/dashboard') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tableau de bord</li>
                </ol>
            </nav>
            <h1 class="h3 mb-0">Tableau de bord Administrateur</h1>
            <p class="text-muted">Vue d'ensemble de votre plateforme éducative</p>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-outline-primary">
                <i class="fas fa-download me-2"></i>Exporter
            </button>
            <button class="btn btn-primary">
                <i class="fas fa-plus me-2"></i>Nouveau
            </button>
        </div>
    </div>

    <!-- Cartes de statistiques principales -->
    <div class="row g-4 mb-4">
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="stat-card-primary">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-content">
                    <h3><?= $stats['total_users'] ?></h3>
                    <p>Utilisateurs total</p>
                    <span class="stat-trend positive">
                        <i class="fas fa-arrow-up"></i> 12%
                    </span>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="stat-card-warning">
                <div class="stat-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div class="stat-content">
                    <h3><?= $stats['total_teachers'] ?></h3>
                    <p>Enseignants</p>
                    <span class="stat-trend positive">
                        <i class="fas fa-arrow-up"></i> 5%
                    </span>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="stat-card-success">
                <div class="stat-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <div class="stat-content">
                    <h3><?= $stats['total_students'] ?></h3>
                    <p>Étudiants</p>
                    <span class="stat-trend positive">
                        <i class="fas fa-arrow-up"></i> 8%
                    </span>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="stat-card-info">
                <div class="stat-icon">
                    <i class="fas fa-book"></i>
                </div>
                <div class="stat-content">
                    <h3><?= $stats['total_courses'] ?></h3>
                    <p>Cours actifs</p>
                    <span class="stat-trend positive">
                        <i class="fas fa-arrow-up"></i> 3%
                    </span>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="stat-card-danger">
                <div class="stat-icon">
                    <i class="fas fa-tasks"></i>
                </div>
                <div class="stat-content">
                    <h3><?= $stats['pending_grades'] ?></h3>
                    <p>Notes en attente</p>
                    <span class="stat-trend negative">
                        <i class="fas fa-arrow-up"></i> 15%
                    </span>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="stat-card-secondary">
                <div class="stat-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="stat-content">
                    <h3><?= $stats['active_schedules'] ?></h3>
                    <p>Événements à venir</p>
                    <span class="stat-trend positive">
                        <i class="fas fa-arrow-up"></i> 7%
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Graphiques et Analytics -->
        <div class="col-xl-8">
            <div class="card analytics-card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-chart-line text-primary me-2"></i>
                        Activité de la plateforme
                    </h5>
                    <div class="dropdown">
                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            Ce mois-ci
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Cette semaine</a></li>
                            <li><a class="dropdown-item" href="#">Ce mois-ci</a></li>
                            <li><a class="dropdown-item" href="#">Cette année</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-placeholder-large">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-center">
                                <i class="fas fa-chart-bar fa-3x text-muted mb-3"></i>
                                <p class="text-muted">Graphique d'activité en temps réel</p>
                                <small>Intégration avec Chart.js ou ApexCharts</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions rapides -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-bolt text-warning me-2"></i>
                        Actions rapides
                    </h5>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        <a href="<?= site_url('admin/courses') ?>" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center">
                                <div class="quick-action-icon bg-primary">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-1">Gérer les cours</h6>
                                    <small class="text-muted">Ajouter ou modifier des cours</small>
                                </div>
                            </div>
                        </a>
                        <a href="<?= site_url('admin/grade_validation') ?>" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center">
                                <div class="quick-action-icon bg-warning">
                                    <i class="fas fa-check-double"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-1">Valider les notes</h6>
                                    <small class="text-muted"><?= $stats['pending_grades'] ?> notes en attente</small>
                                </div>
                            </div>
                        </a>
                        <a href="<?= site_url('admin/scheduling') ?>" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center">
                                <div class="quick-action-icon bg-success">
                                    <i class="fas fa-calendar-plus"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-1">Programmer</h6>
                                    <small class="text-muted">Cours, examens, événements</small>
                                </div>
                            </div>
                        </a>
                        <a href="<?= site_url('admin/analytics') ?>" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center">
                                <div class="quick-action-icon bg-info">
                                    <i class="fas fa-chart-pie"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-1">Analytics détaillés</h6>
                                    <small class="text-muted">Rapports et statistiques</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mt-2">
        <!-- Activités récentes -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-history text-secondary me-2"></i>
                        Activités récentes
                    </h5>
                    <a href="#" class="btn btn-sm btn-outline-secondary">Voir tout</a>
                </div>
                <div class="card-body">
                    <div class="timeline">
                        <?php if (!empty($recent_activities)): ?>
                            <?php foreach ($recent_activities as $activity): ?>
                                <div class="timeline-item">
                                    <div class="timeline-marker <?= $activity['type'] ?>">
                                        <?php switch ($activity['type']):
                                            case 'user_registration': ?>
                                                <i class="fas fa-user-plus"></i>
                                            <?php break;
                                            case 'grade_submission': ?>
                                                <i class="fas fa-file-upload"></i>
                                            <?php break;
                                            case 'course_creation': ?>
                                                <i class="fas fa-book-medical"></i>
                                            <?php break;
                                            case 'schedule_update': ?>
                                                <i class="fas fa-calendar-check"></i>
                                            <?php break;
                                            default: ?>
                                                <i class="fas fa-bell"></i>
                                        <?php endswitch; ?>
                                    </div>
                                    <div class="timeline-content">
                                        <p class="mb-1"><?= $activity['message'] ?></p>
                                        <small class="text-muted"><?= $activity['time'] ?></small>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="text-center py-4">
                                <i class="fas fa-inbox fa-2x text-muted mb-2"></i>
                                <p class="text-muted">Aucune activité récente</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Performance des cours -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-trophy text-warning me-2"></i>
                        Top cours populaires
                    </h5>
                </div>
                <div class="card-body">
                    <div class="course-ranking">
                        <div class="ranking-item">
                            <div class="rank-number">1</div>
                            <div class="course-info">
                                <h6 class="mb-1">Mathématiques Avancées</h6>
                                <small class="text-muted">Dr. Martin - 45 étudiants</small>
                            </div>
                            <div class="course-stats">
                                <span class="badge bg-success">95%</span>
                            </div>
                        </div>
                        <div class="ranking-item">
                            <div class="rank-number">2</div>
                            <div class="course-info">
                                <h6 class="mb-1">Physique Quantique</h6>
                                <small class="text-muted">Prof. Dubois - 38 étudiants</small>
                            </div>
                            <div class="course-stats">
                                <span class="badge bg-success">88%</span>
                            </div>
                        </div>
                        <div class="ranking-item">
                            <div class="rank-number">3</div>
                            <div class="course-info">
                                <h6 class="mb-1">Chimie Organique</h6>
                                <small class="text-muted">Dr. Lefebvre - 32 étudiants</small>
                            </div>
                            <div class="course-stats">
                                <span class="badge bg-warning">76%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Styles professionnels pour le dashboard admin */
    .dashboard-admin {
        padding: 20px 0;
    }

    .stat-card-primary,
    .stat-card-warning,
    .stat-card-success,
    .stat-card-info,
    .stat-card-danger,
    .stat-card-secondary {
        background: white;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        border-left: 4px solid;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .stat-card-primary {
        border-left-color: #667eea;
    }

    .stat-card-warning {
        border-left-color: #f59e0b;
    }

    .stat-card-success {
        border-left-color: #10b981;
    }

    .stat-card-info {
        border-left-color: #3b82f6;
    }

    .stat-card-danger {
        border-left-color: #ef4444;
    }

    .stat-card-secondary {
        border-left-color: #6b7280;
    }

    .stat-card-primary:hover,
    .stat-card-warning:hover,
    .stat-card-success:hover,
    .stat-card-info:hover,
    .stat-card-danger:hover,
    .stat-card-secondary:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .stat-icon {
        font-size: 2.5em;
        opacity: 0.8;
        margin-bottom: 15px;
    }

    .stat-card-primary .stat-icon {
        color: #667eea;
    }

    .stat-card-warning .stat-icon {
        color: #f59e0b;
    }

    .stat-card-success .stat-icon {
        color: #10b981;
    }

    .stat-card-info .stat-icon {
        color: #3b82f6;
    }

    .stat-card-danger .stat-icon {
        color: #ef4444;
    }

    .stat-card-secondary .stat-icon {
        color: #6b7280;
    }

    .stat-content h3 {
        font-size: 2em;
        font-weight: 700;
        margin-bottom: 5px;
        color: #1f2937;
    }

    .stat-content p {
        color: #6b7280;
        margin-bottom: 8px;
        font-size: 0.9em;
    }

    .stat-trend {
        font-size: 0.8em;
        font-weight: 600;
        padding: 4px 8px;
        border-radius: 12px;
    }

    .stat-trend.positive {
        background: #d1fae5;
        color: #065f46;
    }

    .stat-trend.negative {
        background: #fee2e2;
        color: #991b1b;
    }

    .analytics-card {
        border: none;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    }

    .analytics-card .card-header {
        background: white;
        border-bottom: 1px solid #e5e7eb;
        padding: 20px 25px;
    }

    .chart-placeholder-large {
        height: 300px;
        background: #f8fafc;
        border-radius: 8px;
        border: 2px dashed #e5e7eb;
    }

    .quick-action-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.1em;
    }

    .list-group-item {
        padding: 20px;
        border: none;
        transition: all 0.3s ease;
    }

    .list-group-item:hover {
        background: #f8fafc;
        transform: translateX(5px);
    }

    .timeline {
        position: relative;
    }

    .timeline-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 20px;
        position: relative;
    }

    .timeline-item:last-child {
        margin-bottom: 0;
    }

    .timeline-marker {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        margin-right: 15px;
        flex-shrink: 0;
    }

    .timeline-marker.user_registration {
        background: #10b981;
    }

    .timeline-marker.grade_submission {
        background: #f59e0b;
    }

    .timeline-marker.course_creation {
        background: #3b82f6;
    }

    .timeline-marker.schedule_update {
        background: #8b5cf6;
    }

    .timeline-content {
        flex: 1;
        padding-bottom: 20px;
        border-bottom: 1px solid #e5e7eb;
    }

    .timeline-item:last-child .timeline-content {
        border-bottom: none;
        padding-bottom: 0;
    }

    .course-ranking {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .ranking-item {
        display: flex;
        align-items: center;
        padding: 15px;
        background: #f8fafc;
        border-radius: 10px;
        transition: all 0.3s ease;
    }

    .ranking-item:hover {
        background: #f1f5f9;
        transform: translateX(5px);
    }

    .rank-number {
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

    .ranking-item:nth-child(2) .rank-number {
        background: #f59e0b;
    }

    .ranking-item:nth-child(3) .rank-number {
        background: #10b981;
    }

    .course-info {
        flex: 1;
    }

    .course-info h6 {
        margin: 0;
        color: #1f2937;
    }

    .course-stats .badge {
        font-size: 0.8em;
        padding: 6px 12px;
    }

    .breadcrumb {
        background: none;
        padding: 0;
        margin-bottom: 10px;
    }

    .breadcrumb-item a {
        color: #667eea;
        text-decoration: none;
    }

    .breadcrumb-item.active {
        color: #6b7280;
    }

    .card {
        border: none;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        border-radius: 12px;
    }

    .card-header {
        background: white;
        border-bottom: 1px solid #e5e7eb;
        padding: 20px 25px;
    }

    .card-title {
        color: #1f2937;
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .dashboard-admin {
            padding: 15px 0;
        }

        .stat-content h3 {
            font-size: 1.5em;
        }

        .timeline-item {
            flex-direction: column;
            text-align: center;
        }

        .timeline-marker {
            margin-right: 0;
            margin-bottom: 10px;
        }
    }
</style>
<?= $this->endSection() ?>