<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="dashboard-etudiant">
  <!-- Header -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= site_url('etudiant/dashboard') ?>">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Mes Notes</li>
        </ol>
      </nav>
      <h1 class="h3 mb-0">Mes Notes</h1>
      <p class="text-muted">Suivi de vos résultats académiques</p>
    </div>
    <div class="d-flex gap-2">
      <button class="btn btn-outline-primary">
        <i class="fas fa-download me-2"></i>Export PDF
      </button>
      <button class="btn btn-primary">
        <i class="fas fa-print me-2"></i>Imprimer
      </button>
    </div>
  </div>

  <!-- Résumé des performances -->
  <div class="row g-4 mb-4">
    <div class="col-md-3">
      <div class="performance-card primary">
        <div class="performance-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="performance-content">
          <h3>14.5</h3>
          <p>Moyenne générale</p>
          <span class="performance-trend positive">
            <i class="fas fa-arrow-up"></i> +0.5
          </span>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="performance-card success">
        <div class="performance-icon">
          <i class="fas fa-check-circle"></i>
        </div>
        <div class="performance-content">
          <h3>12</h3>
          <p>Notes validées</p>
          <span class="performance-trend positive">
            <i class="fas fa-arrow-up"></i> +2
          </span>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="performance-card warning">
        <div class="performance-icon">
          <i class="fas fa-clock"></i>
        </div>
        <div class="performance-content">
          <h3>3</h3>
          <p>En attente</p>
          <span class="performance-trend neutral">
            <i class="fas fa-minus"></i> 0
          </span>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="performance-card info">
        <div class="performance-icon">
          <i class="fas fa-trophy"></i>
        </div>
        <div class="performance-content">
          <h3>5<small>ème</small></h3>
          <p>Classement</p>
          <span class="performance-trend positive">
            <i class="fas fa-arrow-up"></i> +2
          </span>
        </div>
      </div>
    </div>
  </div>

  <!-- Filtres -->
  <div class="card mb-4">
    <div class="card-body">
      <div class="row g-3 align-items-end">
        <div class="col-md-4">
          <label class="form-label">Matière</label>
          <select class="form-select">
            <option value="">Toutes les matières</option>
            <option value="math">Mathématiques</option>
            <option value="physics">Physique</option>
            <option value="chemistry">Chimie</option>
          </select>
        </div>
        <div class="col-md-3">
          <label class="form-label">Type</label>
          <select class="form-select">
            <option value="">Tous les types</option>
            <option value="exam">Examen</option>
            <option value="assignment">Devoir</option>
            <option value="project">Projet</option>
          </select>
        </div>
        <div class="col-md-3">
          <label class="form-label">Période</label>
          <select class="form-select">
            <option value="">Toute période</option>
            <option value="semester1">Semestre 1</option>
            <option value="semester2">Semestre 2</option>
          </select>
        </div>
        <div class="col-md-2">
          <button class="btn btn-outline-primary w-100">
            <i class="fas fa-filter me-2"></i>Filtrer
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Liste des notes -->
  <div class="card">
    <div class="card-header">
      <h5 class="card-title mb-0">Détail des notes</h5>
    </div>
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-hover mb-0">
          <thead>
            <tr>
              <th>Matière</th>
              <th>Type</th>
              <th>Note</th>
              <th>Moyenne</th>
              <th>Date</th>
              <th>Statut</th>
              <th>Commentaire</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($grades)): ?>
              <?php foreach ($grades as $grade): ?>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="subject-avatar">
                        <?= substr($grade['course_name'], 0, 1) ?>
                      </div>
                      <div>
                        <strong><?= $grade['course_name'] ?></strong>
                        <br>
                        <small class="text-muted"><?= $grade['type'] ?></small>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="badge bg-light text-dark">
                      <?= $grade['type'] ?>
                    </span>
                  </td>
                  <td>
                    <div class="grade-display <?= $grade['grade'] >= 12 ? 'good' : ($grade['grade'] >= 10 ? 'average' : 'poor') ?>">
                      <?= $grade['grade'] ?>/20
                    </div>
                  </td>
                  <td>
                    <small class="text-muted">14.2/20</small>
                  </td>
                  <td>
                    <?= date('d/m/Y', strtotime($grade['date'])) ?>
                  </td>
                  <td>
                    <span class="badge bg-success">
                      <i class="fas fa-check me-1"></i>Validée
                    </span>
                  </td>
                  <td>
                    <span class="comment-tooltip" data-bs-toggle="tooltip" title="<?= $grade['comment'] ?>">
                      <i class="fas fa-comment"></i>
                    </span>
                  </td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-eye"></i>
                      </button>
                      <button class="btn btn-sm btn-outline-secondary">
                        <i class="fas fa-download"></i>
                      </button>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="8" class="text-center py-4">
                  <i class="fas fa-inbox fa-2x text-muted mb-3"></i>
                  <p class="text-muted">Aucune note disponible</p>
                </td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Graphique des performances -->
  <div class="card mt-4">
    <div class="card-header">
      <h5 class="card-title mb-0">
        <i class="fas fa-chart-line me-2"></i>
        Évolution des notes
      </h5>
    </div>
    <div class="card-body">
      <div class="performance-chart">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-center">
            <i class="fas fa-chart-bar fa-3x text-muted mb-3"></i>
            <p class="text-muted">Graphique d'évolution des notes</p>
            <small>Visualisation de votre progression par matière</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .performance-card {
    background: white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    border-left: 4px solid;
    transition: all 0.3s ease;
  }

  .performance-card.primary {
    border-left-color: #667eea;
  }

  .performance-card.success {
    border-left-color: #10b981;
  }

  .performance-card.warning {
    border-left-color: #f59e0b;
  }

  .performance-card.info {
    border-left-color: #3b82f6;
  }

  .performance-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  }

  .performance-icon {
    font-size: 2em;
    margin-bottom: 15px;
  }

  .performance-card.primary .performance-icon {
    color: #667eea;
  }

  .performance-card.success .performance-icon {
    color: #10b981;
  }

  .performance-card.warning .performance-icon {
    color: #f59e0b;
  }

  .performance-card.info .performance-icon {
    color: #3b82f6;
  }

  .performance-content h3 {
    font-size: 2em;
    font-weight: 700;
    margin-bottom: 5px;
    color: #1f2937;
  }

  .performance-content h3 small {
    font-size: 0.6em;
    color: #6b7280;
  }

  .performance-content p {
    color: #6b7280;
    margin-bottom: 8px;
    font-size: 0.9em;
  }

  .performance-trend {
    font-size: 0.8em;
    font-weight: 600;
    padding: 4px 8px;
    border-radius: 12px;
  }

  .performance-trend.positive {
    background: #d1fae5;
    color: #065f46;
  }

  .performance-trend.neutral {
    background: #e5e7eb;
    color: #374151;
  }

  .subject-avatar {
    width: 35px;
    height: 35px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 700;
    margin-right: 10px;
  }

  .grade-display {
    padding: 6px 12px;
    border-radius: 20px;
    font-weight: 700;
    font-size: 0.9em;
    text-align: center;
    min-width: 70px;
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

  .comment-tooltip {
    color: #667eea;
    cursor: pointer;
    padding: 5px;
  }

  .performance-chart {
    height: 200px;
    background: #f8fafc;
    border-radius: 8px;
    border: 2px dashed #e5e7eb;
  }

  .table th {
    background: #f8fafc;
    border-bottom: 1px solid #e5e7eb;
    font-weight: 600;
    color: #374151;
    padding: 15px 20px;
  }

  .table td {
    padding: 15px 20px;
    vertical-align: middle;
    border-bottom: 1px solid #e5e7eb;
  }

  .table tbody tr:hover {
    background: #f8fafc;
  }

  @media (max-width: 768px) {
    .performance-content h3 {
      font-size: 1.5em;
    }

    .table-responsive {
      font-size: 0.85em;
    }

    .btn-group .btn {
      padding: 4px 8px;
    }
  }
</style>

<script>
  // Activation des tooltips
  document.addEventListener('DOMContentLoaded', function() {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
  });
</script>
<?= $this->endSection() ?>