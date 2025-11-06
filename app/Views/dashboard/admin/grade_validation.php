<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="dashboard-admin">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/dashboard') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Validation des Notes</li>
                </ol>
            </nav>
            <h1 class="h3 mb-0">Validation des Notes</h1>
            <p class="text-muted">Approbation des notes soumises par les enseignants</p>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-outline-primary">
                <i class="fas fa-download me-2"></i>Export
            </button>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    <i class="fas fa-cog me-2"></i>Actions
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="fas fa-check-circle me-2"></i>Tout approuver</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-sync me-2"></i>Actualiser</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Statistiques de validation -->
    <div class="row g-4 mb-4">
        <div class="col-xl-3 col-md-6">
            <div class="stat-card-warning">
                <div class="stat-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="stat-content">
                    <h3><?= count($pending_grades) ?></h3>
                    <p>En attente</p>
                    <span class="stat-trend negative">
                        <i class="fas fa-arrow-up"></i> +5
                    </span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="stat-card-success">
                <div class="stat-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="stat-content">
                    <h3>142</h3>
                    <p>Approuvées</p>
                    <span class="stat-trend positive">
                        <i class="fas fa-arrow-up"></i> +12
                    </span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="stat-card-danger">
                <div class="stat-icon">
                    <i class="fas fa-times-circle"></i>
                </div>
                <div class="stat-content">
                    <h3>8</h3>
                    <p>Rejetées</p>
                    <span class="stat-trend neutral">
                        <i class="fas fa-minus"></i> 0
                    </span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="stat-card-info">
                <div class="stat-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="stat-content">
                    <h3>92%</h3>
                    <p>Taux de validation</p>
                    <span class="stat-trend positive">
                        <i class="fas fa-arrow-up"></i> +2%
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
                    <label class="form-label">Matière</label>
                    <select class="form-select">
                        <option value="">Toutes les matières</option>
                        <option value="math">Mathématiques</option>
                        <option value="physics">Physique</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Enseignant</label>
                    <select class="form-select">
                        <option value="">Tous les enseignants</option>
                        <option value="1">Dr. Martin</option>
                        <option value="2">Prof. Dubois</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Date</label>
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

    <!-- Liste des notes en attente -->
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">
                <i class="fas fa-tasks me-2"></i>
                Notes en attente de validation
            </h5>
        </div>
        <div class="card-body p-0">
            <?php if (!empty($pending_grades)): ?>
                <div class="validation-list">
                    <?php foreach ($pending_grades as $grade): ?>
                        <div class="validation-item">
                            <div class="validation-main">
                                <div class="student-info">
                                    <div class="student-avatar">
                                        <?= substr($grade['first_name'], 0, 1) . substr($grade['last_name'], 0, 1) ?>
                                    </div>
                                    <div>
                                        <h6 class="mb-1"><?= $grade['first_name'] ?> <?= $grade['last_name'] ?></h6>
                                        <small class="text-muted">Étudiant</small>
                                    </div>
                                </div>

                                <div class="course-info">
                                    <h6 class="mb-1"><?= $grade['course_name'] ?></h6>
                                    <small class="text-muted">Soumis le <?= date('d/m/Y H:i', strtotime($grade['submitted_at'])) ?></small>
                                </div>

                                <div class="grade-info">
                                    <div class="grade-display <?= $grade['grade'] >= 12 ? 'good' : ($grade['grade'] >= 10 ? 'average' : 'poor') ?>">
                                        <?= $grade['grade'] ?>/20
                                    </div>
                                    <small class="text-muted">Note proposée</small>
                                </div>

                                <div class="teacher-info">
                                    <div class="teacher-avatar">
                                        <i class="fas fa-user-tie"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">Enseignant</h6>
                                        <small class="text-muted">A soumis la note</small>
                                    </div>
                                </div>
                            </div>

                            <div class="validation-details">
                                <div class="comment-section">
                                    <strong>Commentaire :</strong>
                                    <p class="mb-0"><?= $grade['comment'] ?: 'Aucun commentaire' ?></p>
                                </div>

                                <div class="validation-actions">
                                    <button class="btn btn-success btn-sm" onclick="approveGrade(<?= $grade['id'] ?>)">
                                        <i class="fas fa-check me-1"></i>Approuver
                                    </button>
                                    <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#rejectModal<?= $grade['id'] ?>">
                                        <i class="fas fa-times me-1"></i>Rejeter
                                    </button>
                                    <button class="btn btn-outline-secondary btn-sm">
                                        <i class="fas fa-eye me-1"></i>Détails
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal de rejet -->
                        <div class="modal fade" id="rejectModal<?= $grade['id'] ?>" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Rejeter la note</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Êtes-vous sûr de vouloir rejeter cette note ?</p>
                                        <div class="mb-3">
                                            <label class="form-label">Raison du rejet</label>
                                            <textarea class="form-control" rows="3" placeholder="Expliquez pourquoi vous rejetez cette note..."></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                        <button type="button" class="btn btn-danger" onclick="rejectGrade(<?= $grade['id'] ?>)">Confirmer le rejet</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="text-center py-5">
                    <i class="fas fa-check-circle fa-3x text-success mb-3"></i>
                    <h4>Aucune note en attente</h4>
                    <p class="text-muted">Toutes les notes ont été validées.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Historique récent -->
    <div class="card mt-4">
        <div class="card-header">
            <h5 class="card-title mb-0">
                <i class="fas fa-history me-2"></i>
                Historique des validations
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Étudiant</th>
                            <th>Matière</th>
                            <th>Note</th>
                            <th>Statut</th>
                            <th>Validé par</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jean Dupont</td>
                            <td>Mathématiques</td>
                            <td>16.5/20</td>
                            <td><span class="badge bg-success">Approuvée</span></td>
                            <td>Admin System</td>
                            <td>20/01/2024 14:30</td>
                        </tr>
                        <tr>
                            <td>Marie Martin</td>
                            <td>Physique</td>
                            <td>14.0/20</td>
                            <td><span class="badge bg-success">Approuvée</span></td>
                            <td>Admin System</td>
                            <td>20/01/2024 11:15</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .validation-list {
        display: flex;
        flex-direction: column;
    }

    .validation-item {
        border-bottom: 1px solid #e5e7eb;
        padding: 25px;
        transition: all 0.3s ease;
    }

    .validation-item:hover {
        background: #f8fafc;
    }

    .validation-item:last-child {
        border-bottom: none;
    }

    .validation-main {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 15px;
        flex-wrap: wrap;
        gap: 20px;
    }

    .student-info,
    .teacher-info {
        display: flex;
        align-items: center;
        gap: 12px;
        min-width: 200px;
    }

    .student-avatar,
    .teacher-avatar {
        width: 45px;
        height: 45px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        color: white;
    }

    .student-avatar {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .teacher-avatar {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    }

    .course-info {
        flex: 1;
        min-width: 250px;
    }

    .course-info h6 {
        margin: 0;
        color: #1f2937;
    }

    .grade-info {
        text-align: center;
        min-width: 100px;
    }

    .grade-display {
        padding: 8px 16px;
        border-radius: 20px;
        font-weight: 700;
        font-size: 1.1em;
    }

    .grade-display.good {
        background: #d1fae5;
        color: #065f46;
    }

    .grade-display.average {
        background: #fef3c7;
        color: #92400e;
    }

    .grade-display.poor {
        background: #fee2e2;
        color: #991b1b;
    }

    .validation-details {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 20px;
    }

    .comment-section {
        flex: 1;
        background: #f8fafc;
        padding: 15px;
        border-radius: 8px;
        border-left: 4px solid #667eea;
    }

    .comment-section strong {
        color: #374151;
        font-size: 0.9em;
    }

    .comment-section p {
        margin: 5px 0 0 0;
        color: #6b7280;
        font-size: 0.9em;
    }

    .validation-actions {
        display: flex;
        gap: 10px;
        flex-shrink: 0;
    }

    @media (max-width: 768px) {
        .validation-main {
            flex-direction: column;
            align-items: flex-start;
        }

        .validation-details {
            flex-direction: column;
        }

        .validation-actions {
            width: 100%;
            justify-content: space-between;
        }

        .validation-actions .btn {
            flex: 1;
        }
    }
</style>

<script>
    function approveGrade(gradeId) {
        if (confirm('Êtes-vous sûr de vouloir approuver cette note ?')) {
            window.location.href = '<?= site_url('admin/approve_grade/') ?>' + gradeId;
        }
    }

    function rejectGrade(gradeId) {
        // Implémentation du rejet
        alert('Note ' + gradeId + ' rejetée');
        $('#rejectModal' + gradeId).modal('hide');
    }
</script>
<?= $this->endSection() ?>