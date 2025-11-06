<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="dashboard-enseignant">
  <!-- Header -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= site_url('enseignant/dashboard') ?>">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Gestion des Notes</li>
        </ol>
      </nav>
      <h1 class="h3 mb-0">Gestion des Notes</h1>
      <p class="text-muted">Saisie et suivi des notes des étudiants</p>
    </div>
    <div class="d-flex gap-2">
      <button class="btn btn-outline-primary">
        <i class="fas fa-download me-2"></i>Export
      </button>
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addGradeModal">
        <i class="fas fa-plus me-2"></i>Nouvelle note
      </button>
    </div>
  </div>

  <!-- Statistiques -->
  <div class="row g-4 mb-4">
    <div class="col-xl-3 col-md-6">
      <div class="grade-stat-card primary">
        <div class="stat-icon">
          <i class="fas fa-check-circle"></i>
        </div>
        <div class="stat-content">
          <h3>142</h3>
          <p>Notes saisies</p>
          <span class="stat-trend positive">
            <i class="fas fa-arrow-up"></i> +15
          </span>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="grade-stat-card warning">
        <div class="stat-icon">
          <i class="fas fa-clock"></i>
        </div>
        <div class="stat-content">
          <h3>8</h3>
          <p>En attente</p>
          <span class="stat-trend negative">
            <i class="fas fa-arrow-up"></i> +3
          </span>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="grade-stat-card success">
        <div class="stat-icon">
          <i class="fas fa-chart-line"></i>
        </div>
        <div class="stat-content">
          <h3>14.8</h3>
          <p>Moyenne générale</p>
          <span class="stat-trend positive">
            <i class="fas fa-arrow-up"></i> +0.3
          </span>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="grade-stat-card info">
        <div class="stat-icon">
          <i class="fas fa-users"></i>
        </div>
        <div class="stat-content">
          <h3>85%</h3>
          <p>Taux de validation</p>
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
          <label class="form-label">Cours</label>
          <select class="form-select">
            <option value="">Tous les cours</option>
            <option value="math">Mathématiques Avancées</option>
            <option value="physics">Physique Quantique</option>
            <option value="discrete">Mathématiques Discrètes</option>
          </select>
        </div>
        <div class="col-md-3">
          <label class="form-label">Type d'évaluation</label>
          <select class="form-select">
            <option value="">Tous les types</option>
            <option value="exam">Examen</option>
            <option value="assignment">Devoir</option>
            <option value="project">Projet</option>
            <option value="participation">Participation</option>
          </select>
        </div>
        <div class="col-md-3">
          <label class="form-label">Statut</label>
          <select class="form-select">
            <option value="">Tous les statuts</option>
            <option value="draft">Brouillon</option>
            <option value="submitted">Soumis</option>
            <option value="approved">Validé</option>
            <option value="rejected">Rejeté</option>
          </select>
        </div>
        <div class="col-md-3">
          <button class="btn btn-primary w-100">
            <i class="fas fa-filter me-2"></i>Filtrer
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Liste des évaluations -->
  <div class="card">
    <div class="card-header">
      <h5 class="card-title mb-0">Évaluations et notes</h5>
    </div>
    <div class="card-body p-0">
      <div class="evaluations-list">
        <!-- Évaluation 1 -->
        <div class="evaluation-item">
          <div class="evaluation-header">
            <div class="evaluation-info">
              <h6 class="mb-1">Examen de Mi-Session - Mathématiques</h6>
              <div class="evaluation-meta">
                <span class="badge bg-primary">Examen</span>
                <span class="text-muted">Créé le 15/01/2024</span>
                <span class="text-muted">• 28 étudiants</span>
              </div>
            </div>
            <div class="evaluation-stats">
              <div class="stat">
                <span class="value">16.2</span>
                <small class="label">Moyenne</small>
              </div>
              <div class="stat">
                <span class="value">92%</span>
                <small class="label">Validé</small>
              </div>
            </div>
            <div class="evaluation-status">
              <span class="status-badge approved">Validé</span>
            </div>
          </div>

          <div class="evaluation-actions">
            <button class="btn btn-outline-primary btn-sm">
              <i class="fas fa-eye me-1"></i>Voir les notes
            </button>
            <button class="btn btn-outline-secondary btn-sm">
              <i class="fas fa-download me-1"></i>Export
            </button>
            <button class="btn btn-outline-info btn-sm">
              <i class="fas fa-chart-bar me-1"></i>Statistiques
            </button>
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
                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Supprimer</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Évaluation 2 -->
        <div class="evaluation-item">
          <div class="evaluation-header">
            <div class="evaluation-info">
              <h6 class="mb-1">Devoir n°3 - Physique Quantique</h6>
              <div class="evaluation-meta">
                <span class="badge bg-warning">Devoir</span>
                <span class="text-muted">Créé le 18/01/2024</span>
                <span class="text-muted">• 22 étudiants</span>
              </div>
            </div>
            <div class="evaluation-stats">
              <div class="stat">
                <span class="value">14.5</span>
                <small class="label">Moyenne</small>
              </div>
              <div class="stat">
                <span class="value">45%</span>
                <small class="label">Validé</small>
              </div>
            </div>
            <div class="evaluation-status">
              <span class="status-badge pending">En attente</span>
            </div>
          </div>

          <div class="evaluation-progress">
            <div class="progress-info">
              <span>Correction en cours</span>
              <span>12/22</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-warning" style="width: 55%"></div>
            </div>
          </div>

          <div class="evaluation-actions">
            <button class="btn btn-primary btn-sm">
              <i class="fas fa-edit me-1"></i>Continuer la saisie
            </button>
            <button class="btn btn-outline-primary btn-sm">
              <i class="fas fa-paper-plane me-1"></i>Soumettre
            </button>
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
                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Supprimer</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Évaluation 3 -->
        <div class="evaluation-item">
          <div class="evaluation-header">
            <div class="evaluation-info">
              <h6 class="mb-1">Projet Final - Mathématiques Discrètes</h6>
              <div class="evaluation-meta">
                <span class="badge bg-success">Projet</span>
                <span class="text-muted">Créé le 20/01/2024</span>
                <span class="text-muted">• 35 étudiants</span>
              </div>
            </div>
            <div class="evaluation-stats">
              <div class="stat">
                <span class="value">-</span>
                <small class="label">Moyenne</small>
              </div>
              <div class="stat">
                <span class="value">0%</span>
                <small class="label">Validé</small>
              </div>
            </div>
            <div class="evaluation-status">
              <span class="status-badge draft">Brouillon</span>
            </div>
          </div>

          <div class="evaluation-actions">
            <button class="btn btn-primary btn-sm">
              <i class="fas fa-plus me-1"></i>Commencer la saisie
            </button>
            <button class="btn btn-outline-secondary btn-sm" disabled>
              <i class="fas fa-paper-plane me-1"></i>Soumettre
            </button>
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
                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Supprimer</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Graphique des performances -->
  <div class="card mt-4">
    <div class="card-header">
      <h5 class="card-title mb-0">
        <i class="fas fa-chart-bar me-2"></i>
        Distribution des notes
      </h5>
    </div>
    <div class="card-body">
      <div class="grade-distribution">
        <div class="distribution-chart">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-center">
              <i class="fas fa-chart-bar fa-3x text-muted mb-3"></i>
              <p class="text-muted">Graphique de distribution des notes</p>
              <small>Histogramme des résultats par intervalle</small>
            </div>
          </div>
        </div>
        <div class="distribution-stats">
          <div class="stat-item">
            <div class="stat-label">Moyenne générale</div>
            <div class="stat-value">14.8/20</div>
          </div>
          <div class="stat-item">
            <div class="stat-label">Écart-type</div>
            <div class="stat-value">2.3</div>
          </div>
          <div class="stat-item">
            <div class="stat-label">Note maximale</div>
            <div class="stat-value">19.5/20</div>
          </div>
          <div class="stat-item">
            <div class="stat-label">Note minimale</div>
            <div class="stat-value">8.0/20</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal ajout de note -->
<div class="modal fade" id="addGradeModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ajouter une nouvelle évaluation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Cours</label>
              <select class="form-select" required>
                <option value="">Sélectionner un cours</option>
                <option value="math">Mathématiques Avancées</option>
                <option value="physics">Physique Quantique</option>
                <option value="discrete">Mathématiques Discrètes</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Type d'évaluation</label>
              <select class="form-select" required>
                <option value="">Sélectionner un type</option>
                <option value="exam">Examen</option>
                <option value="assignment">Devoir</option>
                <option value="project">Projet</option>
                <option value="participation">Participation</option>
              </select>
            </div>
            <div class="col-12">
              <label class="form-label">Titre de l'évaluation</label>
              <input type="text" class="form-control" placeholder="Ex: Examen de Mi-Session" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Date de l'évaluation</label>
              <input type="date" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Note maximale</label>
              <input type="number" class="form-control" value="20" required>
            </div>
            <div class="col-12">
              <label class="form-label">Description (optionnel)</label>
              <textarea class="form-control" rows="3" placeholder="Description de l'évaluation..."></textarea>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary">Créer l'évaluation</button>
      </div>
    </div>
  </div>
</div>

<style>
  .grade-stat-card {
    background: white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    border-left: 4px solid;
    transition: all 0.3s ease;
  }

  .grade-stat-card.primary {
    border-left-color: #667eea;
  }

  .grade-stat-card.warning {
    border-left-color: #f59e0b;
  }

  .grade-stat-card.success {
    border-left-color: #10b981;
  }

  .grade-stat-card.info {
    border-left-color: #3b82f6;
  }

  .grade-stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  }

  .grade-stat-card .stat-icon {
    font-size: 2.5em;
    margin-bottom: 15px;
    opacity: 0.8;
  }

  .grade-stat-card.primary .stat-icon {
    color: #667eea;
  }

  .grade-stat-card.warning .stat-icon {
    color: #f59e0b;
  }

  .grade-stat-card.success .stat-icon {
    color: #10b981;
  }

  .grade-stat-card.info .stat-icon {
    color: #3b82f6;
  }

  .grade-stat-card .stat-content h3 {
    font-size: 2em;
    font-weight: 700;
    margin-bottom: 5px;
    color: #1f2937;
  }

  .grade-stat-card .stat-content p {
    color: #6b7280;
    margin-bottom: 8px;
    font-size: 0.9em;
  }

  .evaluations-list {
    display: flex;
    flex-direction: column;
  }

  .evaluation-item {
    padding: 25px;
    border-bottom: 1px solid #e5e7eb;
    transition: all 0.3s ease;
  }

  .evaluation-item:hover {
    background: #f8fafc;
  }

  .evaluation-item:last-child {
    border-bottom: none;
  }

  .evaluation-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    margin-bottom: 15px;
    flex-wrap: wrap;
    gap: 15px;
  }

  .evaluation-info {
    flex: 1;
    min-width: 300px;
  }

  .evaluation-info h6 {
    margin: 0;
    color: #1f2937;
  }

  .evaluation-meta {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 8px;
    flex-wrap: wrap;
  }

  .evaluation-stats {
    display: flex;
    gap: 20px;
    margin: 0 20px;
  }

  .evaluation-stats .stat {
    text-align: center;
  }

  .evaluation-stats .value {
    display: block;
    font-weight: 700;
    color: #667eea;
    font-size: 1.2em;
  }

  .evaluation-stats .label {
    font-size: 0.8em;
    color: #6b7280;
  }

  .evaluation-status {
    margin-left: auto;
  }

  .status-badge {
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.8em;
    font-weight: 600;
  }

  .status-badge.approved {
    background: #d1fae5;
    color: #065f46;
  }

  .status-badge.pending {
    background: #fef3c7;
    color: #92400e;
  }

  .status-badge.draft {
    background: #e5e7eb;
    color: #374151;
  }

  .evaluation-progress {
    margin-bottom: 15px;
  }

  .evaluation-progress .progress-info {
    display: flex;
    justify-content: space-between;
    margin-bottom: 8px;
    font-size: 0.9em;
    color: #64748b;
  }

  .evaluation-progress .progress {
    height: 6px;
    background: #e2e8f0;
    border-radius: 3px;
  }

  .evaluation-actions {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
  }

  .grade-distribution {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 30px;
  }

  .distribution-chart {
    height: 200px;
    background: #f8fafc;
    border-radius: 8px;
    border: 2px dashed #e5e7eb;
  }

  .distribution-stats {
    display: flex;
    flex-direction: column;
    gap: 15px;
  }

  .stat-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
    background: #f8fafc;
    border-radius: 8px;
  }

  .stat-label {
    color: #64748b;
    font-size: 0.9em;
  }

  .stat-value {
    font-weight: 700;
    color: #667eea;
    font-size: 1.1em;
  }

  @media (max-width: 768px) {
    .evaluation-header {
      flex-direction: column;
      text-align: center;
    }

    .evaluation-stats {
      margin: 0;
      justify-content: center;
    }

    .evaluation-status {
      margin-left: 0;
    }

    .evaluation-actions {
      justify-content: center;
    }

    .grade-distribution {
      grid-template-columns: 1fr;
    }

    .distribution-stats {
      grid-template-columns: 1fr 1fr;
    }
  }
</style>
<?= $this->endSection() ?>