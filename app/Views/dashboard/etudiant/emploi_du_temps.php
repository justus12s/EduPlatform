<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="dashboard-etudiant">
  <!-- Header -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= site_url('etudiant/dashboard') ?>">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Emploi du temps</li>
        </ol>
      </nav>
      <h1 class="h3 mb-0">Mon Emploi du Temps</h1>
      <p class="text-muted">Planning de vos cours et événements</p>
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
      <div class="schedule-container">
        <!-- En-tête des jours -->
        <div class="schedule-header">
          <div class="time-column"></div>
          <?php foreach ($schedule as $day): ?>
            <div class="day-column <?= date('Y-m-d') == $day['date'] ? 'today' : '' ?>">
              <div class="day-name"><?= $day['day'] ?></div>
              <div class="day-date"><?= date('d/m', strtotime($day['date'])) ?></div>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Corps de l'emploi du temps -->
        <div class="schedule-body">
          <!-- Créneaux horaires -->
          <?php for ($hour = 8; $hour <= 18; $hour++): ?>
            <div class="schedule-row">
              <div class="time-slot">
                <?= sprintf('%02d:00', $hour) ?>
              </div>

              <?php foreach ($schedule as $day): ?>
                <div class="day-slot <?= date('Y-m-d') == $day['date'] ? 'today' : '' ?>">
                  <?php foreach ($day['events'] as $event): ?>
                    <?php
                    $eventStart = (int)substr($event['time'], 0, 2);
                    $eventEnd = (int)substr($event['time'], 6, 2);
                    ?>
                    <?php if ($eventStart <= $hour && $eventEnd > $hour): ?>
                      <?php if ($eventStart == $hour): ?>
                        <div class="schedule-event <?= $event['type'] ?>"
                          style="height: <?= ($eventEnd - $eventStart) * 60 ?>px;"
                          data-bs-toggle="tooltip"
                          title="<?= $event['course'] ?> - <?= $event['classroom'] ?>">
                          <div class="event-content">
                            <div class="event-title"><?= $event['course'] ?></div>
                            <div class="event-time"><?= $event['time'] ?></div>
                            <div class="event-location">
                              <i class="fas fa-map-marker-alt"></i>
                              <?= $event['classroom'] ?>
                            </div>
                            <div class="event-type">
                              <span class="badge <?= $event['type'] == 'cours' ? 'bg-primary' : 'bg-success' ?>">
                                <?= $event['type'] ?>
                              </span>
                            </div>
                          </div>
                        </div>
                      <?php endif; ?>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Légende -->
  <div class="card mt-4">
    <div class="card-body">
      <h6 class="card-title mb-3">Légende</h6>
      <div class="row g-3">
        <div class="col-auto">
          <div class="legend-item">
            <div class="legend-color bg-primary"></div>
            <span>Cours</span>
          </div>
        </div>
        <div class="col-auto">
          <div class="legend-item">
            <div class="legend-color bg-success"></div>
            <span>TP/TD</span>
          </div>
        </div>
        <div class="col-auto">
          <div class="legend-item">
            <div class="legend-color bg-warning"></div>
            <span>Examen</span>
          </div>
        </div>
        <div class="col-auto">
          <div class="legend-item">
            <div class="legend-color bg-info"></div>
            <span>Événement</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Prochains événements -->
  <div class="card mt-4">
    <div class="card-header">
      <h5 class="card-title mb-0">
        <i class="fas fa-calendar-alt me-2"></i>
        Prochains événements
      </h5>
    </div>
    <div class="card-body">
      <div class="upcoming-events">
        <div class="event-item">
          <div class="event-date">
            <div class="event-day">24</div>
            <div class="event-month">JAN</div>
          </div>
          <div class="event-details">
            <h6 class="mb-1">Examen de Mathématiques</h6>
            <p class="text-muted mb-1">Salle A201 - 09:00-11:00</p>
            <small class="text-warning"><i class="fas fa-clock me-1"></i>Dans 2 jours</small>
          </div>
          <div class="event-actions">
            <button class="btn btn-sm btn-outline-primary">
              <i class="fas fa-bell"></i>
            </button>
          </div>
        </div>

        <div class="event-item">
          <div class="event-date">
            <div class="event-day">26</div>
            <div class="event-month">JAN</div>
          </div>
          <div class="event-details">
            <h6 class="mb-1">Devoir de Physique</h6>
            <p class="text-muted mb-1">À rendre avant 23:59</p>
            <small class="text-danger"><i class="fas fa-exclamation-circle me-1"></i>Échéance</small>
          </div>
          <div class="event-actions">
            <button class="btn btn-sm btn-outline-primary">
              <i class="fas fa-bell"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .schedule-container {
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
    background: #667eea;
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
    background: #f0f4ff;
  }

  .schedule-event {
    position: absolute;
    left: 2px;
    right: 2px;
    background: white;
    border-radius: 6px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    border-left: 4px solid;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .schedule-event:hover {
    transform: scale(1.02);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
  }

  .schedule-event.cours {
    border-left-color: #667eea;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
  }

  .schedule-event.tp {
    border-left-color: #10b981;
    background: linear-gradient(135deg, #10b981 0%, #34d399 100%);
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

  .event-location {
    font-size: 0.75em;
    opacity: 0.9;
    margin-bottom: 4px;
  }

  .event-type {
    margin-top: auto;
  }

  .legend-item {
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .legend-color {
    width: 16px;
    height: 16px;
    border-radius: 4px;
  }

  .upcoming-events {
    display: flex;
    flex-direction: column;
    gap: 15px;
  }

  .event-item {
    display: flex;
    align-items: center;
    padding: 15px;
    background: #f8fafc;
    border-radius: 8px;
    transition: all 0.3s ease;
  }

  .event-item:hover {
    background: #f1f5f9;
  }

  .event-date {
    text-align: center;
    padding: 10px 15px;
    background: white;
    border-radius: 8px;
    margin-right: 15px;
    min-width: 60px;
  }

  .event-day {
    font-size: 1.5em;
    font-weight: 700;
    color: #667eea;
  }

  .event-month {
    font-size: 0.8em;
    color: #6b7280;
    text-transform: uppercase;
  }

  .event-details {
    flex: 1;
  }

  .event-details h6 {
    margin: 0;
    color: #1f2937;
  }

  .event-actions {
    margin-left: 15px;
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

    .event-item {
      flex-direction: column;
      text-align: center;
      gap: 15px;
    }

    .event-date {
      margin-right: 0;
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
        alert('Détails de l\'événement: ' + this.getAttribute('title'));
      });
    });
  });
</script>
<?= $this->endSection() ?>