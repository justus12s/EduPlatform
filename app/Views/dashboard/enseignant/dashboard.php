<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="dashboard-enseignant">
  <!-- Header avec informations -->
  <div class="teacher-header mb-4">
    <div class="row align-items-center">
      <div class="col-md-8">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('enseignant/dashboard') ?>">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tableau de bord</li>
          </ol>
        </nav>
        <h1 class="h3 mb-1">Bonjour, <?= explode(' ', $user['name'])[0] ?> ! 👨‍🏫</h1>
        <p class="text-muted mb-0">Vue d'ensemble de vos activités d'enseignement</p>
      </div>
      <div class="col-md-4 text-md-end">
        <div class="teacher-badge">
          <i class="fas fa-chalkboard-teacher me-2"></i>
          Enseignant - Mathématiques & Physique
        </div>
        <small class="text-muted">5 cours actifs cette semaine</small>
      </div>
    </div>
  </div>

  <!-- Cartes de statistiques -->
  <div class="row g-4 mb-4">
    <div class="col-xl-3 col-md-6">
      <div class="teacher-stat-card primary">
        <div class="stat-icon">
          <i class="fas fa-book-open"></i>
        </div>
        <div class="stat-content">
          <h3>5</h3>
          <p>Cours assignés</p>
          <span class="stat-trend positive">
            <i class="fas fa-arrow-up"></i> +1
          </span>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="teacher-stat-card success">
        <div class="stat-icon">
          <i class="fas fa-user-graduate"></i>
        </div>
        <div class="stat-content">
          <h3>142</h3>
          <p>Étudiants total</p>
          <span class="stat-trend positive">
            <i class="fas fa-arrow-up"></i> +12
          </span>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="teacher-stat-card warning">
        <div class="stat-icon">
          <i class="fas fa-tasks"></i>
        </div>
        <div class="stat-content">
          <h3>8</h3>
          <p>Devoirs à corriger</p>
          <span class="stat-trend negative">
            <i class="fas fa-arrow-up"></i> +3
          </span>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="teacher-stat-card info">
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
  </div>

  <div class="row g-4">
    <!-- Prochaines sessions -->
    <div class="col-xl-8">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="card-title mb-0">
            <i class="fas fa-calendar-alt text-primary me-2"></i>
            Prochaines sessions de cours
          </h5>
          <a href="<?= site_url('enseignant/emploi_du_temps') ?>" class="btn btn-sm btn-outline-primary">Voir tout</a>
        </div>
        <div class="card-body">
          <div class="sessions-list">
            <div class="session-item urgent">
              <div class="session-time">
                <div class="time">09:00 - 11:00</div>
                <div class="date">Aujourd'hui</div>
              </div>
              <div class="session-details">
                <h6 class="mb-1">Mathématiques Avancées</h6>
                <p class="text-muted mb-1">Chapitre 4: Les intégrales multiples</p>
                <div class="session-meta">
                  <span class="badge bg-light text-dark">
                    <i class="fas fa-users me-1"></i>28 étudiants
                  </span>
                  <span class="badge bg-light text-dark">
                    <i class="fas fa-map-marker-alt me-1"></i>Salle A201
                  </span>
                </div>
              </div>
              <div class="session-actions">
                <button class="btn btn-primary btn-sm">
                  <i class="fas fa-play me-1"></i>Commencer
                </button>
              </div>
            </div>

            <div class="session-item">
              <div class="session-time">
                <div class="time">14:00 - 16:00</div>
                <div class="date">Aujourd'hui</div>
              </div>
              <div class="session-details">
                <h6 class="mb-1">Physique Quantique</h6>
                <p class="text-muted mb-1">TP n°3: Mécanique ondulatoire</p>
                <div class="session-meta">
                  <span class="badge bg-light text-dark">
                    <i class="fas fa-users me-1"></i>22 étudiants
                  </span>
                  <span class="badge bg-light text-dark">
                    <i class="fas fa-map-marker-alt me-1"></i>Lab B104
                  </span>
                </div>
              </div>
              <div class="session-actions">
                <button class="btn btn-outline-primary btn-sm">
                  <i class="fas fa-eye me-1"></i>Préparer
                </button>
              </div>
            </div>

            <div class="session-item">
              <div class="session-time">
                <div class="time">10:00 - 12:00</div>
                <div class="date">Demain</div>
              </div>
              <div class="session-details">
                <h6 class="mb-1">Mathématiques Discrètes</h6>
                <p class="text-muted mb-1">Théorie des graphes - Partie 2</p>
                <div class="session-meta">
                  <span class="badge bg-light text-dark">
                    <i class="fas fa-users me-1"></i>35 étudiants
                  </span>
                  <span class="badge bg-light text-dark">
                    <i class="fas fa-map-marker-alt me-1"></i>Salle C305
                  </span>
                </div>
              </div>
              <div class="session-actions">
                <button class="btn btn-outline-primary btn-sm">
                  <i class="fas fa-eye me-1"></i>Préparer
                </button>
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
          <div class="quick-actions-list">
            <a href="<?= site_url('enseignant/mes_cours') ?>" class="quick-action-item">
              <div class="action-icon bg-primary">
                <i class="fas fa-book"></i>
              </div>
              <div class="action-content">
                <h6 class="mb-1">Mes Cours</h6>
                <small class="text-muted">Gérer vos cours et ressources</small>
              </div>
            </a>

            <a href="<?= site_url('enseignant/notes') ?>" class="quick-action-item">
              <div class="action-icon bg-success">
                <i class="fas fa-edit"></i>
              </div>
              <div class="action-content">
                <h6 class="mb-1">Saisir les notes</h6>
                <small class="text-muted">8 devoirs en attente</small>
              </div>
            </a>

            <a href="<?= site_url('enseignant/emploi_du_temps') ?>" class="quick-action-item">
              <div class="action-icon bg-info">
                <i class="fas fa-calendar-plus"></i>
              </div>
              <div class="action-content">
                <h6 class="mb-1">Emploi du temps</h6>
                <small class="text-muted">Voir le planning</small>
              </div>
            </a>

            <a href="<?= site_url('enseignant/ressources') ?>" class="quick-action-item">
              <div class="action-icon bg-warning">
                <i class="fas fa-file-upload"></i>
              </div>
              <div class="action-content">
                <h6 class="mb-1">Ressources</h6>
                <small class="text-muted">Partager des documents</small>
              </div>
            </a>
          </div>
        </div>
      </div>

      <!-- Devoirs à corriger -->
      <div class="card mt-4">
        <div class="card-header">
          <h5 class="card-title mb-0">
            <i class="fas fa-clock text-danger me-2"></i>
            Devoirs à corriger
          </h5>
        </div>
        <div class="card-body p-0">
          <div class="assignments-list">
            <div class="assignment-item urgent">
              <div class="assignment-info">
                <h6 class="mb-1">Devoir de Mathématiques</h6>
                <small class="text-muted">Échéance: Demain</small>
              </div>
              <div class="assignment-progress">
                <span class="progress-text">12/28</span>
                <div class="progress">
                  <div class="progress-bar bg-warning" style="width: 43%"></div>
                </div>
              </div>
            </div>

            <div class="assignment-item">
              <div class="assignment-info">
                <h6 class="mb-1">Projet Physique</h6>
                <small class="text-muted">Échéance: 3 jours</small>
              </div>
              <div class="assignment-progress">
                <span class="progress-text">8/22</span>
                <div class="progress">
                  <div class="progress-bar bg-info" style="width: 36%"></div>
                </div>
              </div>
            </div>

            <div class="assignment-item">
              <div class="assignment-info">
                <h6 class="mb-1">Exercices Algèbre</h6>
                <small class="text-muted">Échéance: 5 jours</small>
              </div>
              <div class="assignment-progress">
                <span class="progress-text">5/35</span>
                <div class="progress">
                  <div class="progress-bar bg-success" style="width: 14%"></div>
                </div>
              </div>
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
            <i class="fas fa-chart-bar text-success me-2"></i>
            Performance des cours
          </h5>
        </div>
        <div class="card-body">
          <div class="course-performance">
            <div class="performance-item">
              <div class="course-name">
                <h6>Mathématiques Avancées</h6>
                <small>28 étudiants - Semestre 1</small>
              </div>
              <div class="performance-stats">
                <div class="stat">
                  <span class="value">16.2</span>
                  <small class="label">Moyenne</small>
                </div>
                <div class="stat">
                  <span class="value">92%</span>
                  <small class="label">Réussite</small>
                </div>
              </div>
              <div class="performance-trend positive">
                <i class="fas fa-arrow-up"></i>
                <span>+2.1%</span>
              </div>
            </div>

            <div class="performance-item">
              <div class="course-name">
                <h6>Physique Quantique</h6>
                <small>22 étudiants - Semestre 1</small>
              </div>
              <div class="performance-stats">
                <div class="stat">
                  <span class="value">14.8</span>
                  <small class="label">Moyenne</small>
                </div>
                <div class="stat">
                  <span class="value">85%</span>
                  <small class="label">Réussite</small>
                </div>
              </div>
              <div class="performance-trend positive">
                <i class="fas fa-arrow-up"></i>
                <span>+1.3%</span>
              </div>
            </div>

            <div class="performance-item">
              <div class="course-name">
                <h6>Mathématiques Discrètes</h6>
                <small>35 étudiants - Semestre 2</small>
              </div>
              <div class="performance-stats">
                <div class="stat">
                  <span class="value">13.5</span>
                  <small class="label">Moyenne</small>
                </div>
                <div class="stat">
                  <span class="value">78%</span>
                  <small class="label">Réussite</small>
                </div>
              </div>
              <div class="performance-trend negative">
                <i class="fas fa-arrow-down"></i>
                <span>-0.8%</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Activités récentes -->
    <div class="col-xl-6">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">
            <i class="fas fa-history text-secondary me-2"></i>
            Activités récentes
          </h5>
        </div>
        <div class="card-body">
          <div class="activities-timeline">
            <div class="activity-item">
              <div class="activity-icon success">
                <i class="fas fa-check-circle"></i>
              </div>
              <div class="activity-content">
                <p class="mb-1">Vous avez soumis les notes de Mathématiques</p>
                <small class="text-muted">Il y a 2 heures</small>
              </div>
            </div>

            <div class="activity-item">
              <div class="activity-icon primary">
                <i class="fas fa-file-upload"></i>
              </div>
              <div class="activity-content">
                <p class="mb-1">Nouvelle ressource partagée: "TP Physique n°3"</p>
                <small class="text-muted">Il y a 5 heures</small>
              </div>
            </div>

            <div class="activity-item">
              <div class="activity-icon warning">
                <i class="fas fa-exclamation-circle"></i>
              </div>
              <div class="activity-content">
                <p class="mb-1">Rappel: Devoir de Mathématiques à corriger</p>
                <small class="text-muted">Il y a 1 jour</small>
              </div>
            </div>

            <div class="activity-item">
              <div class="activity-icon info">
                <i class="fas fa-comment"></i>
              </div>
              <div class="activity-content">
                <p class="mb-1">Nouveau message de Jean Dupont</p>
                <small class="text-muted">Il y a 2 jours</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .dashboard-enseignant {
    padding: 20px 0;
  }

  .teacher-header {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    color: white;
    padding: 30px;
    border-radius: 15px;
    margin-bottom: 30px;
  }

  .teacher-badge {
    background: rgba(255, 255, 255, 0.2);
    padding: 8px 15px;
    border-radius: 20px;
    display: inline-block;
    margin-bottom: 5px;
  }

  .teacher-stat-card {
    background: white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    border-left: 4px solid;
    transition: all 0.3s ease;
  }

  .teacher-stat-card.primary {
    border-left-color: #667eea;
  }

  .teacher-stat-card.success {
    border-left-color: #10b981;
  }

  .teacher-stat-card.warning {
    border-left-color: #f59e0b;
  }

  .teacher-stat-card.info {
    border-left-color: #3b82f6;
  }

  .teacher-stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  }

  .teacher-stat-card .stat-icon {
    font-size: 2.5em;
    margin-bottom: 15px;
    opacity: 0.8;
  }

  .teacher-stat-card.primary .stat-icon {
    color: #667eea;
  }

  .teacher-stat-card.success .stat-icon {
    color: #10b981;
  }

  .teacher-stat-card.warning .stat-icon {
    color: #f59e0b;
  }

  .teacher-stat-card.info .stat-icon {
    color: #3b82f6;
  }

  .teacher-stat-card .stat-content h3 {
    font-size: 2em;
    font-weight: 700;
    margin-bottom: 5px;
    color: #1f2937;
  }

  .teacher-stat-card .stat-content p {
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

  .sessions-list {
    display: flex;
    flex-direction: column;
    gap: 15px;
  }

  .session-item {
    display: flex;
    align-items: center;
    padding: 20px;
    background: #f8fafc;
    border-radius: 10px;
    border-left: 4px solid #667eea;
    transition: all 0.3s ease;
  }

  .session-item.urgent {
    border-left-color: #ef4444;
    background: #fef2f2;
  }

  .session-item:hover {
    background: #f1f5f9;
    transform: translateX(5px);
  }

  .session-time {
    text-align: center;
    padding: 10px 15px;
    background: white;
    border-radius: 8px;
    margin-right: 20px;
    min-width: 100px;
  }

  .session-time .time {
    font-weight: 700;
    color: #667eea;
    font-size: 1.1em;
  }

  .session-time .date {
    font-size: 0.8em;
    color: #6b7280;
    margin-top: 5px;
  }

  .session-item.urgent .session-time .time {
    color: #ef4444;
  }

  .session-details {
    flex: 1;
  }

  .session-details h6 {
    margin: 0;
    color: #1f2937;
  }

  .session-meta {
    display: flex;
    gap: 10px;
    margin-top: 8px;
  }

  .session-actions {
    margin-left: 15px;
  }

  .quick-actions-list {
    display: flex;
    flex-direction: column;
  }

  .quick-action-item {
    display: flex;
    align-items: center;
    padding: 20px;
    text-decoration: none;
    color: inherit;
    border-bottom: 1px solid #e5e7eb;
    transition: all 0.3s ease;
  }

  .quick-action-item:hover {
    background: #f8fafc;
    color: inherit;
    transform: translateX(5px);
  }

  .quick-action-item:last-child {
    border-bottom: none;
  }

  .action-icon {
    width: 45px;
    height: 45px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.2em;
    margin-right: 15px;
  }

  .action-content h6 {
    margin: 0;
    color: #1f2937;
  }

  .assignments-list {
    display: flex;
    flex-direction: column;
  }

  .assignment-item {
    display: flex;
    align-items: center;
    padding: 20px;
    border-bottom: 1px solid #e5e7eb;
    transition: all 0.3s ease;
  }

  .assignment-item.urgent {
    background: #fef2f2;
  }

  .assignment-item:hover {
    background: #f8fafc;
  }

  .assignment-item:last-child {
    border-bottom: none;
  }

  .assignment-info {
    flex: 1;
  }

  .assignment-info h6 {
    margin: 0;
    color: #1f2937;
  }

  .assignment-progress {
    text-align: center;
    min-width: 100px;
  }

  .progress-text {
    display: block;
    font-weight: 600;
    color: #667eea;
    margin-bottom: 5px;
    font-size: 0.9em;
  }

  .progress {
    height: 6px;
    background: #e5e7eb;
    border-radius: 3px;
    overflow: hidden;
  }

  .course-performance {
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
  }

  .course-name {
    flex: 1;
  }

  .course-name h6 {
    margin: 0;
    color: #1f2937;
  }

  .performance-stats {
    display: flex;
    gap: 20px;
    margin: 0 20px;
  }

  .performance-stats .stat {
    text-align: center;
  }

  .performance-stats .value {
    display: block;
    font-weight: 700;
    color: #667eea;
    font-size: 1.1em;
  }

  .performance-stats .label {
    font-size: 0.8em;
    color: #6b7280;
  }

  .performance-trend {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 0.8em;
    font-weight: 600;
    padding: 6px 10px;
    border-radius: 12px;
  }

  .performance-trend.positive {
    background: #d1fae5;
    color: #065f46;
  }

  .performance-trend.negative {
    background: #fee2e2;
    color: #991b1b;
  }

  .activities-timeline {
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .activity-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
  }

  .activity-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    flex-shrink: 0;
  }

  .activity-icon.success {
    background: #10b981;
  }

  .activity-icon.primary {
    background: #667eea;
  }

  .activity-icon.warning {
    background: #f59e0b;
  }

  .activity-icon.info {
    background: #3b82f6;
  }

  .activity-content {
    flex: 1;
    padding-bottom: 20px;
    border-bottom: 1px solid #e5e7eb;
  }

  .activity-item:last-child .activity-content {
    border-bottom: none;
    padding-bottom: 0;
  }

  .activity-content p {
    margin: 0;
    color: #374151;
  }

  @media (max-width: 768px) {
    .dashboard-enseignant {
      padding: 15px 0;
    }

    .teacher-header {
      padding: 20px;
      text-align: center;
    }

    .session-item {
      flex-direction: column;
      text-align: center;
      gap: 15px;
    }

    .session-time {
      margin-right: 0;
    }

    .session-meta {
      justify-content: center;
      flex-wrap: wrap;
    }

    .performance-item {
      flex-direction: column;
      text-align: center;
      gap: 15px;
    }

    .performance-stats {
      margin: 0;
    }

    .activity-item {
      flex-direction: column;
      text-align: center;
    }
  }
</style>
<?= $this->endSection() ?>