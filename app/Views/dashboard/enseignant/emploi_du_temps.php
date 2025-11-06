<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="dashboard-enseignant">
  <!-- Header -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= site_url('enseignant/dashboard') ?>">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Emploi du temps</li>
        </ol>
      </nav>
      <h1 class="h3 mb-0">Mon Emploi du Temps</h1>
      <p class="text-muted">Planning de vos cours et activités</p>
    </div>
    <div class="d-flex gap-2">
      <button class="btn btn-outline-primary">
        <i class="fas fa-download me-2"></i>Export
      </button>
      <div class="btn-group">
        <button class="btn btn-primary">
          <i class="fas fa-calendar me-2"></i>Semaine
        </button>
        <button class="btn btn-outline-primary">
          Mois
        </button>
      </div>
    </div>
  </div>

  <!-- Navigation semaine -->
  <div class="card mb-4">
    <div class="card-body">
      <div class="d-flex justify-content-between align-items-center">
        <button class="btn btn-outline-secondary">
          <i class="fas fa-chevron-left me-2"></i>Semaine précédente
        </button>

        <div class="text-center">
          <h4 class="mb-1">Semaine du 22 Janvier 2024</h4>
          <p class="text-muted mb-0">22 Jan - 28 Jan 2024</p>
        </div>

        <button class="btn btn-outline-secondary">
          Semaine suivante<i class="fas fa-chevron-right ms-2"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Emploi du temps -->
  <div class="card">
    <div class="card-body p-0">
      <div class="teacher-schedule-container">
        <!-- En-tête des jours -->
        <div class="schedule-header">
          <div class="time-column"></div>
          <div class="day-column <?= date('Y-m-d') == '2024-01-22' ? 'today' : '' ?>">
            <div class="day-name">Lun</div>
            <div class="day-date">22/01</div>
          </div>
          <div class="day-column <?= date('Y-m-d') == '2024-01-23' ? 'today' : '' ?>">
            <div class="day-name">Mar</div>
            <div class="day-date">23/01</div>
          </div>
          <div class="day-column">
            <div class="day-name">Mer</div>
            <div class="day-date">24/01</div>
          </div>
          <div class="day-column">
            <div class="day-name">Jeu</div>
            <div class="day-date">25/01</div>
          </div>
          <div class="day-column">
            <div class="day-name">Ven</div>
            <div class="day-date">26/01</div>
          </div>
          <div class="day-column">
            <div class="day-name">Sam</div>
            <div class="day-date">27/01</div>
          </div>
          <div class="day-column">
            <div class="day-name">Dim</div>
            <div class="day-date">28/01</div>
          </div>
        </div>

        <!-- Corps de l'emploi du temps -->
        <div class="schedule-body">
          <?php for ($hour = 8; $hour <= 18; $hour++): ?>
            <div class="schedule-row">
              <div class="time-slot">
                <?= sprintf('%02d:00', $hour) ?>
              </div>

              <!-- Lundi -->
              <div class="day-slot <?= date('Y-m-d') == '2024-01-22' ? 'today' : '' ?>">
                <?php if ($hour == 9): ?>
                  <div class="schedule-event course"
                    style="height: 120px;"
                    data-bs-toggle="tooltip"
                    title="Mathématiques Avancées - Salle A201">
                    <div class="event-content">
                      <div class="event-title">Mathématiques Avancées</div>
                      <div class="event-time">09:00-11:00</div>
                      <div class="event-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Salle A201
                      </div>
                      <div class="event-students">
                        <i class="fas fa-users"></i>
                        28 étudiants
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
              </div>

              <!-- Mardi -->
              <div class="day-slot <?= date('Y-m-d') == '2024-01-23' ? 'today' : '' ?>">
                <?php if ($hour == 10): ?>
                  <div class="schedule-event course"
                    style="height: 120px;"
                    data-bs-toggle="tooltip"
                    title="Physique Quantique - Lab B104">
                    <div class="event-content">
                      <div class="event-title">Physique Quantique</div>
                      <div class="event-time">10:00-12:00</div>
                      <div class="event-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Lab B104
                      </div>
                      <div class="event-students">
                        <i class="fas fa-users"></i>
                        22 étudiants
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
              </div>

              <!-- Mercredi -->
              <div class="day-slot">
                <?php if ($hour == 10): ?>
                  <div class="schedule-event course"
                    style="height: 120px;"
                    data-bs-toggle="tooltip"
                    title="Mathématiques Discrètes - Salle C305">
                    <div class="event-content">
                      <div class="event-title">Mathématiques Discrètes</div>
                      <div class="event-time">10:00-12:00</div>
                      <div class="event-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Salle C305
                      </div>
                      <div class="event-students">
                        <i class="fas fa-users"></i>
                        35 étudiants
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
              </div>

              <!-- Jeudi -->
              <div class="day-slot">
                <?php if ($hour == 14): ?>
                  <div class="schedule-event course"
                    style="height: 120px;"
                    data-bs-toggle="tooltip"
                    title="Mathématiques Avancées - Salle A201">
                    <div class="event-content">
                      <div class="event-title">Mathématiques Avancées</div>
                      <div class="event-time">14:00-16:00</div>
                      <div class="event-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Salle A201
                      </div>
                      <div class="event-students">
                        <i class="fas fa-users"></i>
                        28 étudiants
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
              </div>

              <!-- Vendredi -->
              <div class="day-slot">
                <?php if ($hour == 9): ?>
                  <div class="schedule-event course"
                    style="height: 120px;"
                    data-bs-toggle="tooltip"
                    title="Physique Quantique - Lab B104">
                    <div class="event-content">
                      <div class="event-title">Physique Quantique</div>
                      <div class="event-time">09:00-11:00</div>
                      <div class="event-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Lab B104
                      </div>
                      <div class="event-students">
                        <i class="fas fa-users"></i>
                        22 étudiants
                      </div>
                    </div>
                  </div>
                <?php endif; ?>

                <?php if ($hour == 16): ?>
                  <div class="schedule-event course"
                    style="height: 120px;"
                    data-bs-toggle="tooltip"
                    title="Mathématiques Discrètes - Salle C305">
                    <div class="event-content">
                      <div class="event-title">Mathématiques Discrètes</div>
                      <div class="event-time">16:00-18:00</div>
                      <div class="event-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Salle C305
                      </div>
                      <div class="event-students">
                        <i class="fas fa-users"></i>
                        35 étudiants
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
              </div>

              <!-- Samedi et Dimanche (vide) -->
              <div class="day-slot"></div>
              <div class="day-slot"></div>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Prochains événements -->
  <div class="row g-4 mt-4">
    <div class="col-xl-8">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">
            <i class="fas fa-calendar-check me-2"></i>
            Prochains cours et événements
          </h5>
        </div>
        <div class="card-body">
          <div class="upcoming-sessions">
            <div class="session-item">
              <div class="session-date">
                <div class="date-day">24</div>
                <div class="date-month">JAN</div>
              </div>
              <div class="session-details">
                <h6 class="mb-1">Réunion département Mathématiques</h6>
                <p class="text-muted mb-1">Salle de conférence - 14:00-16:00</p>
                <div class="session-meta">
                  <span class="badge bg-info">Réunion</span>
                  <span class="text-muted">Avec tous les enseignants</span>
                </div>
              </div>
              <div class="session-actions">
                <button class="btn btn-outline-primary btn-sm">
                  <i class="fas fa-bell me-1"></i>Rappel
                </button>
              </div>
            </div>

            <div class="session-item">
              <div class="session-date">
                <div class="date-day">26</div>
                <div class="date-month">JAN</div>
              </div>
              <div class="session-details">
                <h6 class="mb-1">Correction collective - Devoir Physique</h6>
                <p class="text-muted mb-1">Lab B104 - 16:00-18:00</p>
                <div class="session-meta">
                  <span class="badge bg-warning">Correction</span>
                  <span class="text-muted">Session facultative</span>
                </div>
              </div>
              <div class="session-actions">
                <button class="btn btn-outline-primary btn-sm">
                  <i class="fas fa-bell me-1"></i>Rappel
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">
            <i class="fas fa-chart-pie me-2"></i>
            Charge de travail
          </h5>
        </div>
        <div class="card-body">
          <div class="workload-stats">
            <div class="workload-item">
              <div class="workload-label">Heures de cours/semaine</div>
              <div class="workload-value">18h</div>
              <div class="workload-bar">
                <div class="bar-fill" style="width: 90%"></div>
              </div>
            </div>
            <div class="workload-item">
              <div class="workload-label">Devoirs à corriger</div>
              <div class="workload-value">8</div>
              <div class="workload-bar">
                <div class="bar-fill bg-warning" style="width: 40%"></div>
              </div>
            </div>
            <div class="workload-item">
              <div class="workload-label">Réunions cette semaine</div>
              <div class="workload-value">2</div>
              <div class="workload-bar">
                <div class="bar-fill bg-info" style="width: 20%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .teacher-schedule-container {
    background: white;
    border-radius: 8px;
    overflow: hidden;
  }

  .schedule-header {
    display: flex;
    background: #f8fafc;
    border-bottom: 1px solid #e5e7eb;
  }

  .time-column {
    width: 80px;
    padding: 15px;
    text-align: center;
    font-weight: 600;
    color: #374151;
    background: #f8fafc;
  }

  .day-column {
    flex: 1;
    padding: 15px;
    text-align: center;
    border-left: 1px solid #e5e7eb;
  }

  .day-column.today {
    background: #f59e0b;
    color: white;
  }

  .day-column.today .day-date {
    color: rgba(255, 255, 255, 0.9);
  }

  .day-name {
    font-weight: 600;
    font-size: 0.9em;
    text-transform: uppercase;
  }

  .day-date {
    font-size: 1.2em;
    font-weight: 700;
    color: #6b7280;
  }

  .schedule-body {
    position: relative;
  }

  .schedule-row {
    display: flex;
    border-bottom: 1px solid #e5e7eb;
    min-height: 60px;
  }

  .schedule-row:last-child {
    border-bottom: none;
  }

  .time-slot {
    width: 80px;
    padding: 10px;
    text-align: center;
    font-size: 0.85em;
    color: #6b7280;
    background: #f8fafc;
    display: flex;
    align-items: flex-start;
    justify-content: center;
  }

  .day-slot {
    flex: 1;
    border-left: 1px solid #e5e7eb;
    position: relative;
    padding: 2px;
  }

  .day-slot.today {
    background: #fef3c7;
  }

  .schedule-event {
    position: absolute;
    left: 2px;
    right: 2px;
    background: white;
    border-radius: 6px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    border-left: 4px solid #667eea;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .schedule-event:hover {
    transform: scale(1.02);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
  }

  .schedule-event.course {
    border-left-color: #667eea;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
  }

  .event-content {
    padding: 10px;
    height: 100%;
    display: flex;
    flex-direction: column;
  }

  .event-title {
    font-weight: 600;
    font-size: 0.85em;
    margin-bottom: 4px;
  }

  .event-time {
    font-size: 0.75em;
    opacity: 0.9;
    margin-bottom: 4px;
  }

  .event-location,
  .event-students {
    font-size: 0.75em;
    opacity: 0.9;
    margin-bottom: 4px;
    display: flex;
    align-items: center;
    gap: 4px;
  }

  .upcoming-sessions {
    display: flex;
    flex-direction: column;
    gap: 15px;
  }

  .session-item {
    display: flex;
    align-items: center;
    padding: 20px;
    background: #f8fafc;
    border-radius: 8px;
    transition: all 0.3s ease;
  }

  .session-item:hover {
    background: #f1f5f9;
  }

  .session-date {
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
    align-items: center;
  }

  .session-actions {
    margin-left: 15px;
  }

  .workload-stats {
    display: flex;
    flex-direction: column;
    gap: 15px;
  }

  .workload-item {
    display: flex;
    align-items: center;
    gap: 15px;
  }

  .workload-label {
    flex: 1;
    color: #374151;
    font-size: 0.9em;
  }

  .workload-value {
    width: 50px;
    text-align: right;
    font-weight: 700;
    color: #667eea;
    font-size: 1.1em;
  }

  .workload-bar {
    flex: 2;
    height: 8px;
    background: #e5e7eb;
    border-radius: 4px;
    overflow: hidden;
  }

  .bar-fill {
    height: 100%;
    background: #667eea;
    border-radius: 4px;
    transition: width 0.3s ease;
  }

  .bar-fill.bg-warning {
    background: #f59e0b;
  }

  .bar-fill.bg-info {
    background: #3b82f6;
  }

  @media (max-width: 768px) {
    .schedule-header {
      flex-direction: column;
    }

    .time-column {
      width: 100%;
      text-align: left;
    }

    .day-column {
      border-left: none;
      border-top: 1px solid #e5e7eb;
    }

    .schedule-row {
      flex-direction: column;
    }

    .time-slot {
      width: 100%;
      text-align: left;
      justify-content: flex-start;
    }

    .day-slot {
      border-left: none;
      border-top: 1px solid #e5e7eb;
      min-height: 50px;
    }

    .session-item {
      flex-direction: column;
      text-align: center;
      gap: 15px;
    }

    .session-date {
      margin-right: 0;
    }

    .workload-item {
      flex-direction: column;
      text-align: center;
      gap: 8px;
    }

    .workload-bar {
      width: 100%;
    }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Activation des tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    });

    // Gestion des clics sur les événements
    document.querySelectorAll('.schedule-event').forEach(function(event) {
      event.addEventListener('click', function() {
        const title = this.querySelector('.event-title').textContent;
        const time = this.querySelector('.event-time').textContent;
        const location = this.querySelector('.event-location').textContent;

        alert(`Détails du cours:\n${title}\n${time}\n${location}`);
      });
    });
  });
</script>
<?= $this->endSection() ?>