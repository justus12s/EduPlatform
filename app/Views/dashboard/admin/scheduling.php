<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="dashboard-admin">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/dashboard') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Programmation</li>
                </ol>
            </nav>
            <h1 class="h3 mb-0">Programmation</h1>
            <p class="text-muted">Gestion des cours, examens et événements</p>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-outline-primary">
                <i class="fas fa-download me-2"></i>Export
            </button>
            <a href="<?= site_url('admin/add_schedule') ?>" class="btn btn-primary">
                <i class="fas fa-plus me-2"></i>Nouvel événement
            </a>
        </div>
    </div>

    <!-- Navigation calendrier -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex gap-2">
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="btn btn-outline-secondary">
                        Aujourd'hui
                    </button>
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>

                <h4 class="mb-0">Janvier 2024</h4>

                <div class="btn-group">
                    <button class="btn btn-primary">Mois</button>
                    <button class="btn btn-outline-primary">Semaine</button>
                    <button class="btn btn-outline-primary">Jour</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Calendrier -->
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body p-0">
                    <div class="calendar-container">
                        <!-- En-tête des jours -->
                        <div class="calendar-header">
                            <div class="calendar-day">Lun</div>
                            <div class="calendar-day">Mar</div>
                            <div class="calendar-day">Mer</div>
                            <div class="calendar-day">Jeu</div>
                            <div class="calendar-day">Ven</div>
                            <div class="calendar-day">Sam</div>
                            <div class="calendar-day">Dim</div>
                        </div>

                        <!-- Corps du calendrier -->
                        <div class="calendar-body">
                            <?php for ($week = 1; $week <= 6; $week++): ?>
                                <div class="calendar-week">
                                    <?php for ($day = 1; $day <= 7; $day++): ?>
                                        <?php
                                        $dayNumber = ($week - 1) * 7 + $day;
                                        $isToday = $dayNumber == 22; // 22 Janvier
                                        $hasEvents = in_array($dayNumber, [22, 23, 24, 26]);
                                        ?>
                                        <div class="calendar-day-cell <?= $isToday ? 'today' : '' ?> <?= $hasEvents ? 'has-events' : '' ?>">
                                            <div class="day-number"><?= $dayNumber ?></div>
                                            <?php if ($hasEvents): ?>
                                                <div class="day-events">
                                                    <?php if ($dayNumber == 22): ?>
                                                        <div class="calendar-event exam" data-bs-toggle="tooltip" title="Examen Mathématiques - 09:00-11:00">
                                                            <i class="fas fa-file-alt"></i>
                                                            Examen
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if ($dayNumber == 23): ?>
                                                        <div class="calendar-event course" data-bs-toggle="tooltip" title="Cours Physique - 14:00-16:00">
                                                            <i class="fas fa-book"></i>
                                                            Cours
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if ($dayNumber == 24): ?>
                                                        <div class="calendar-event outing" data-bs-toggle="tooltip" title="Sortie Musée - Toute la journée">
                                                            <i class="fas fa-bus"></i>
                                                            Sortie
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Liste des événements -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-list me-2"></i>
                        Événements à venir
                    </h5>
                </div>
                <div class="card-body p-0">
                    <div class="events-list">
                        <?php if (!empty($schedules)): ?>
                            <?php foreach (array_slice($schedules, 0, 5) as $schedule): ?>
                                <div class="event-item <?= $schedule['event_type'] ?>">
                                    <div class="event-date">
                                        <div class="event-day"><?= date('d', strtotime($schedule['date'])) ?></div>
                                        <div class="event-month"><?= date('M', strtotime($schedule['date'])) ?></div>
                                    </div>
                                    <div class="event-details">
                                        <h6 class="mb-1"><?= $schedule['title'] ?></h6>
                                        <p class="text-muted mb-1">
                                            <i class="fas fa-clock me-1"></i>
                                            <?= date('H:i', strtotime($schedule['start_time'])) ?> - <?= date('H:i', strtotime($schedule['end_time'])) ?>
                                        </p>
                                        <small class="text-muted">
                                            <i class="fas fa-map-marker-alt me-1"></i>
                                            <?= $schedule['location'] ?>
                                        </small>
                                    </div>
                                    <div class="event-actions">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Modifier</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-trash me-2"></i>Supprimer</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="text-center py-4">
                                <i class="fas fa-calendar-plus fa-2x text-muted mb-3"></i>
                                <p class="text-muted">Aucun événement programmé</p>
                                <a href="<?= site_url('admin/add_schedule') ?>" class="btn btn-primary btn-sm">
                                    <i class="fas fa-plus me-2"></i>Créer un événement
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Statistiques rapides -->
            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-chart-pie me-2"></i>
                        Statistiques
                    </h5>
                </div>
                <div class="card-body">
                    <div class="stats-grid">
                        <div class="stat-item">
                            <div class="stat-value">24</div>
                            <div class="stat-label">Cours cette semaine</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">3</div>
                            <div class="stat-label">Examens programmés</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">2</div>
                            <div class="stat-label">Sorties à venir</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">89%</div>
                            <div class="stat-label">Taux de remplissage</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Événements du jour -->
    <div class="card mt-4">
        <div class="card-header">
            <h5 class="card-title mb-0">
                <i class="fas fa-calendar-day me-2"></i>
                Événements d'aujourd'hui
            </h5>
        </div>
        <div class="card-body">
            <div class="today-events">
                <div class="today-event-item exam">
                    <div class="event-time">09:00 - 11:00</div>
                    <div class="event-details">
                        <h6 class="mb-1">Examen de Mathématiques</h6>
                        <p class="text-muted mb-1">Salle A201 - Dr. Martin</p>
                        <small class="text-muted">45 étudiants inscrits</small>
                    </div>
                    <div class="event-status">
                        <span class="badge bg-warning">En cours</span>
                    </div>
                </div>

                <div class="today-event-item course">
                    <div class="event-time">14:00 - 16:00</div>
                    <div class="event-details">
                        <h6 class="mb-1">Cours de Physique Quantique</h6>
                        <p class="text-muted mb-1">Salle B104 - Prof. Dubois</p>
                        <small class="text-muted">TP n°3 - Mécanique ondulatoire</small>
                    </div>
                    <div class="event-status">
                        <span class="badge bg-success">À venir</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .calendar-container {
        background: white;
        border-radius: 8px;
        overflow: hidden;
    }

    .calendar-header {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        background: #f8fafc;
        border-bottom: 1px solid #e5e7eb;
    }

    .calendar-day {
        padding: 15px;
        text-align: center;
        font-weight: 600;
        color: #374151;
        border-right: 1px solid #e5e7eb;
    }

    .calendar-day:last-child {
        border-right: none;
    }

    .calendar-body {
        padding: 10px;
    }

    .calendar-week {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        min-height: 120px;
    }

    .calendar-day-cell {
        border: 1px solid #e5e7eb;
        padding: 8px;
        position: relative;
        background: white;
        transition: all 0.3s ease;
    }

    .calendar-day-cell:hover {
        background: #f8fafc;
    }

    .calendar-day-cell.today {
        background: #f0f4ff;
        border-color: #667eea;
    }

    .calendar-day-cell.has-events {
        background: #f8fafc;
    }

    .day-number {
        font-weight: 600;
        color: #374151;
        margin-bottom: 5px;
    }

    .calendar-day-cell.today .day-number {
        color: #667eea;
        font-weight: 700;
    }

    .day-events {
        display: flex;
        flex-direction: column;
        gap: 3px;
    }

    .calendar-event {
        font-size: 0.7em;
        padding: 2px 4px;
        border-radius: 4px;
        color: white;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 3px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .calendar-event.course {
        background: #667eea;
    }

    .calendar-event.exam {
        background: #f59e0b;
    }

    .calendar-event.outing {
        background: #10b981;
    }

    .events-list {
        display: flex;
        flex-direction: column;
    }

    .event-item {
        display: flex;
        align-items: center;
        padding: 15px;
        border-bottom: 1px solid #e5e7eb;
        transition: all 0.3s ease;
    }

    .event-item:hover {
        background: #f8fafc;
    }

    .event-item:last-child {
        border-bottom: none;
    }

    .event-date {
        text-align: center;
        padding: 8px 12px;
        background: #f8fafc;
        border-radius: 8px;
        margin-right: 15px;
        min-width: 50px;
    }

    .event-day {
        font-size: 1.2em;
        font-weight: 700;
        color: #667eea;
    }

    .event-month {
        font-size: 0.7em;
        color: #6b7280;
        text-transform: uppercase;
    }

    .event-details {
        flex: 1;
    }

    .event-details h6 {
        margin: 0;
        color: #1f2937;
        font-size: 0.9em;
    }

    .event-details p {
        margin: 2px 0;
        font-size: 0.8em;
    }

    .event-actions {
        margin-left: 10px;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
    }

    .stat-item {
        text-align: center;
        padding: 15px;
        background: #f8fafc;
        border-radius: 8px;
    }

    .stat-value {
        font-size: 1.5em;
        font-weight: 700;
        color: #667eea;
        margin-bottom: 5px;
    }

    .stat-label {
        font-size: 0.8em;
        color: #6b7280;
    }

    .today-events {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .today-event-item {
        display: flex;
        align-items: center;
        padding: 15px;
        background: #f8fafc;
        border-radius: 8px;
        border-left: 4px solid;
    }

    .today-event-item.exam {
        border-left-color: #f59e0b;
    }

    .today-event-item.course {
        border-left-color: #667eea;
    }

    .event-time {
        min-width: 100px;
        font-weight: 600;
        color: #374151;
        margin-right: 15px;
    }

    .today-event-item .event-details {
        flex: 1;
    }

    .today-event-item .event-details h6 {
        font-size: 1em;
    }

    @media (max-width: 768px) {
        .calendar-header {
            font-size: 0.8em;
        }

        .calendar-day-cell {
            min-height: 80px;
        }

        .event-item {
            flex-direction: column;
            text-align: center;
            gap: 10px;
        }

        .event-date {
            margin-right: 0;
        }

        .today-event-item {
            flex-direction: column;
            text-align: center;
            gap: 10px;
        }

        .event-time {
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
    });
</script>
<?= $this->endSection() ?>