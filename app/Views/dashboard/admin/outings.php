<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="dashboard-admin">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/dashboard') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sorties Scolaires</li>
                </ol>
            </nav>
            <h1 class="h3 mb-0">Gestion des Sorties</h1>
            <p class="text-muted">Organisation et suivi des sorties scolaires</p>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-outline-primary">
                <i class="fas fa-download me-2"></i>Rapport
            </button>
            <a href="<?= site_url('admin/add_schedule') ?>" class="btn btn-primary">
                <i class="fas fa-plus me-2"></i>Nouvelle sortie
            </a>
        </div>
    </div>

    <!-- Statistiques -->
    <div class="row g-4 mb-4">
        <div class="col-xl-3 col-md-6">
            <div class="stat-card-success">
                <div class="stat-icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <div class="stat-content">
                    <h3><?= count($outings) ?></h3>
                    <p>Sorties planifiées</p>
                    <span class="stat-trend positive">
                        <i class="fas fa-arrow-up"></i> +3
                    </span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="stat-card-warning">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-content">
                    <h3>248</h3>
                    <p>Participants total</p>
                    <span class="stat-trend positive">
                        <i class="fas fa-arrow-up"></i> +45
                    </span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="stat-card-info">
                <div class="stat-icon">
                    <i class="fas fa-euro-sign"></i>
                </div>
                <div class="stat-content">
                    <h3>1,240€</h3>
                    <p>Budget utilisé</p>
                    <span class="stat-trend negative">
                        <i class="fas fa-arrow-up"></i> +320€
                    </span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="stat-card-primary">
                <div class="stat-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="stat-content">
                    <h3>92%</h3>
                    <p>Taux de participation</p>
                    <span class="stat-trend positive">
                        <i class="fas fa-arrow-up"></i> +5%
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="row g-3 align-items-end">
                <div class="col-md-3">
                    <label class="form-label">Statut</label>
                    <select class="form-select">
                        <option value="">Tous les statuts</option>
                        <option value="planned">Planifiée</option>
                        <option value="in-progress">En cours</option>
                        <option value="completed">Terminée</option>
                        <option value="cancelled">Annulée</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Date de début</label>
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Date de fin</label>
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-3">
                    <button class="btn btn-primary w-100">
                        <i class="fas fa-filter me-2"></i>Filtrer
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des sorties -->
    <div class="row g-4">
        <?php if (!empty($outings)): ?>
            <?php foreach ($outings as $outing): ?>
                <div class="col-xl-6">
                    <div class="outing-card">
                        <div class="outing-header">
                            <div class="outing-type">
                                <i class="fas fa-bus"></i>
                                Sortie Scolaire
                            </div>
                            <div class="outing-status <?= $outing['status'] ?? 'planned' ?>">
                                <span class="status-badge"><?= $outing['status'] ?? 'Planifiée' ?></span>
                            </div>
                        </div>

                        <div class="outing-body">
                            <h4 class="outing-title"><?= $outing['title'] ?></h4>
                            <p class="outing-description"><?= $outing['description'] ?></p>

                            <div class="outing-details">
                                <div class="detail-item">
                                    <i class="fas fa-calendar"></i>
                                    <div>
                                        <strong>Date</strong>
                                        <span><?= date('d/m/Y', strtotime($outing['date'])) ?></span>
                                    </div>
                                </div>
                                <div class="detail-item">
                                    <i class="fas fa-clock"></i>
                                    <div>
                                        <strong>Horaire</strong>
                                        <span><?= $outing['start_time'] ?> - <?= $outing['end_time'] ?></span>
                                    </div>
                                </div>
                                <div class="detail-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div>
                                        <strong>Lieu</strong>
                                        <span><?= $outing['location'] ?></span>
                                    </div>
                                </div>
                                <div class="detail-item">
                                    <i class="fas fa-user-tie"></i>
                                    <div>
                                        <strong>Responsable</strong>
                                        <span>À définir</span>
                                    </div>
                                </div>
                            </div>

                            <div class="outing-participants">
                                <div class="participants-header">
                                    <h6>Participants</h6>
                                    <span class="participants-count">45/50</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 90%"></div>
                                </div>
                                <small>90% de remplissage</small>
                            </div>

                            <div class="outing-budget">
                                <div class="budget-header">
                                    <h6>Budget</h6>
                                    <span class="budget-amount">850€ / 1,000€</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" style="width: 85%"></div>
                                </div>
                                <small>85% du budget utilisé</small>
                            </div>
                        </div>

                        <div class="outing-footer">
                            <div class="outing-actions">
                                <button class="btn btn-outline-primary btn-sm">
                                    <i class="fas fa-edit me-1"></i>Modifier
                                </button>
                                <button class="btn btn-outline-success btn-sm">
                                    <i class="fas fa-users me-1"></i>Participants
                                </button>
                                <button class="btn btn-outline-info btn-sm">
                                    <i class="fas fa-file-invoice me-1"></i>Budget
                                </button>
                            </div>
                            <div class="outing-more">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>Voir détails</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>Dupliquer</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-times me-2"></i>Annuler</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12">
                <div class="empty-state">
                    <i class="fas fa-bus fa-3x text-muted mb-3"></i>
                    <h4>Aucune sortie planifiée</h4>
                    <p class="text-muted">Commencez par planifier une nouvelle sortie scolaire.</p>
                    <a href="<?= site_url('admin/add_schedule') ?>" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Planifier une sortie
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Prochaines sorties -->
    <div class="card mt-4">
        <div class="card-header">
            <h5 class="card-title mb-0">
                <i class="fas fa-calendar-alt me-2"></i>
                Prochaines sorties
            </h5>
        </div>
        <div class="card-body">
            <div class="upcoming-outings">
                <div class="upcoming-item">
                    <div class="upcoming-date">
                        <div class="date-day">24</div>
                        <div class="date-month">JAN</div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-1">Visite Musée des Sciences</h6>
                        <p class="text-muted mb-1">Départ 08:30 - Retour 17:00</p>
                        <div class="upcoming-meta">
                            <span class="badge bg-light text-dark">
                                <i class="fas fa-users me-1"></i>45 participants
                            </span>
                            <span class="badge bg-light text-dark">
                                <i class="fas fa-euro-sign me-1"></i>25€/personne
                            </span>
                        </div>
                    </div>
                    <div class="upcoming-status">
                        <span class="badge bg-success">Confirmée</span>
                    </div>
                </div>

                <div class="upcoming-item">
                    <div class="upcoming-date">
                        <div class="date-day">15</div>
                        <div class="date-month">FÉV</div>
                    </div>
                    <div class="upcoming-details">
                        <h6 class="mb-1">Journée Sportive</h6>
                        <p class="text-muted mb-1">Stade Municipal - Toute la journée</p>
                        <div class="upcoming-meta">
                            <span class="badge bg-light text-dark">
                                <i class="fas fa-users me-1"></i>120 participants
                            </span>
                            <span class="badge bg-light text-dark">
                                <i class="fas fa-euro-sign me-1"></i>Gratuit
                            </span>
                        </div>
                    </div>
                    <div class="upcoming-status">
                        <span class="badge bg-warning">En préparation</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .outing-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        transition: all 0.3s ease;
        height: 100%;
    }

    .outing-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
    }

    .outing-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 25px;
        background: linear-gradient(135deg, #10b981 0%, #34d399 100%);
        color: white;
    }

    .outing-type {
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: 600;
    }

    .outing-status .status-badge {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.8em;
        font-weight: 600;
    }

    .outing-status.planned .status-badge {
        background: rgba(255, 255, 255, 0.2);
        color: white;
    }

    .outing-status.in-progress .status-badge {
        background: #f59e0b;
        color: white;
    }

    .outing-status.completed .status-badge {
        background: #10b981;
        color: white;
    }

    .outing-body {
        padding: 25px;
    }

    .outing-title {
        color: #1f2937;
        margin-bottom: 10px;
        font-size: 1.3em;
    }

    .outing-description {
        color: #6b7280;
        margin-bottom: 20px;
        line-height: 1.5;
    }

    .outing-details {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
        margin-bottom: 20px;
    }

    .detail-item {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .detail-item i {
        width: 16px;
        color: #667eea;
    }

    .detail-item div {
        flex: 1;
    }

    .detail-item strong {
        display: block;
        font-size: 0.8em;
        color: #374151;
        margin-bottom: 2px;
    }

    .detail-item span {
        font-size: 0.9em;
        color: #6b7280;
    }

    .outing-participants,
    .outing-budget {
        margin-bottom: 20px;
    }

    .participants-header,
    .budget-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 8px;
    }

    .participants-header h6,
    .budget-header h6 {
        margin: 0;
        color: #374151;
        font-size: 0.9em;
    }

    .participants-count,
    .budget-amount {
        font-weight: 600;
        color: #667eea;
        font-size: 0.9em;
    }

    .outing-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 25px;
        background: #f8fafc;
        border-top: 1px solid #e5e7eb;
    }

    .outing-actions {
        display: flex;
        gap: 8px;
    }

    .upcoming-outings {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .upcoming-item {
        display: flex;
        align-items: center;
        padding: 20px;
        background: #f8fafc;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .upcoming-item:hover {
        background: #f1f5f9;
    }

    .upcoming-date {
        text-align: center;
        padding: 12px 15px;
        background: white;
        border-radius: 8px;
        margin-right: 20px;
        min-width: 60px;
    }

    .date-day {
        font-size: 1.5em;
        font-weight: 700;
        color: #667eea;
    }

    .date-month {
        font-size: 0.8em;
        color: #6b7280;
        text-transform: uppercase;
    }

    .upcoming-details {
        flex: 1;
    }

    .upcoming-details h6 {
        margin: 0;
        color: #1f2937;
    }

    .upcoming-meta {
        display: flex;
        gap: 10px;
        margin-top: 8px;
    }

    .upcoming-status {
        margin-left: 15px;
    }

    .empty-state {
        text-align: center;
        padding: 60px 20px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    }

    @media (max-width: 768px) {
        .outing-details {
            grid-template-columns: 1fr;
        }

        .outing-footer {
            flex-direction: column;
            gap: 15px;
            text-align: center;
        }

        .outing-actions {
            justify-content: center;
            flex-wrap: wrap;
        }

        .upcoming-item {
            flex-direction: column;
            text-align: center;
            gap: 15px;
        }

        .upcoming-date {
            margin-right: 0;
        }

        .upcoming-meta {
            justify-content: center;
            flex-wrap: wrap;
        }
    }
</style>
<?= $this->endSection() ?>