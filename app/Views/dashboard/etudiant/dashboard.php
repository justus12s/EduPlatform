<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="dashboard-etudiant">
  <!-- Header avec animations améliorées -->
  <div class="student-header mb-4 animated-header">
    <div class="header-background"></div>
    <div class="row align-items-center position-relative">
      <div class="col-md-8">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-2">
            <li class="breadcrumb-item"><a href="<?= site_url('etudiant/dashboard') ?>">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tableau de bord</li>
          </ol>
        </nav>
        <h1 class="h3 mb-2 welcome-text">Bonjour, <?= explode(' ', $user['name'])[0] ?> ! 👋</h1>
        <p class="text-muted mb-0">Voici votre progression académique en temps réel</p>
      </div>
      <div class="col-md-4 text-md-end">
        <div class="student-badge animated-badge">
          <i class="fas fa-user-graduate me-2"></i>
          Étudiant en Licence
        </div>
        <small class="text-muted d-block mt-1">Promotion 2024</small>
      </div>
    </div>
  </div>

  <!-- Cartes de progression avec espacements améliorés -->
  <div class="row g-3 mb-4">
    <div class="col-xl-3 col-md-6">
      <div class="progress-card primary animated-card" data-delay="0">
        <div class="progress-icon">
          <i class="fas fa-book-open"></i>
        </div>
        <div class="progress-content">
          <h3 class="counter" data-count="<?= $stats['total_courses'] ?>">0</h3>
          <p class="mb-2">Cours suivis</p>
          <div class="progress mb-2">
            <div class="progress-bar" style="width: 75%"></div>
          </div>
          <small class="text-muted">75% du semestre</small>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="progress-card success animated-card" data-delay="100">
        <div class="progress-icon">
          <i class="fas fa-chart-line"></i>
        </div>
        <div class="progress-content">
          <h3><span class="counter" data-count="<?= $stats['average_grade'] ?>">0</span>/20</h3>
          <p>Moyenne générale</p>
          <div class="progress">
            <div class="progress-bar" style="width: <?= ($stats['average_grade'] / 20) * 100 ?>%"></div>
          </div>
          <small>Au-dessus de la moyenne</small>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="progress-card warning animated-card" data-delay="200">
        <div class="progress-icon">
          <i class="fas fa-tasks"></i>
        </div>
        <div class="progress-content">
          <h3 class="counter" data-count="<?= $stats['pending_assignments'] ?>">0</h3>
          <p>Devoirs en attente</p>
          <div class="progress">
            <div class="progress-bar" style="width: 30%"></div>
          </div>
          <small>Échéance cette semaine</small>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="progress-card info animated-card" data-delay="300">
        <div class="progress-icon">
          <i class="fas fa-calendar-check"></i>
        </div>
        <div class="progress-content">
          <h3><?= $stats['attendance_rate'] ?></h3>
          <p>Taux de présence</p>
          <div class="progress">
            <div class="progress-bar" style="width: 92%"></div>
          </div>
          <small>Excellent assiduité</small>
        </div>
      </div>
    </div>
  </div>

  <!-- Contenu principal avec meilleure structure -->
  <div class="row g-3">
    <!-- Graphique de progression -->
    <div class="col-xl-8">
      <div class="card animated-card h-100">
        <div class="card-header d-flex justify-content-between align-items-center pb-2">
          <h5 class="card-title mb-0">
            <i class="fas fa-chart-bar text-primary me-2"></i>
            Progression académique
          </h5>
          <div class="dropdown">
            <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
              Ce semestre
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item period-filter" href="#" data-period="semester">Ce semestre</a></li>
              <li><a class="dropdown-item period-filter" href="#" data-period="year">Cette année</a></li>
              <li><a class="dropdown-item period-filter" href="#" data-period="all">Tout</a></li>
            </ul>
          </div>
        </div>
        <div class="card-body pt-3">
          <div class="performance-chart" id="performanceChart">
            <canvas id="progressChart" height="250"></canvas>
          </div>
        </div>
      </div>
    </div>

    <!-- Prochaines échéances -->
    <div class="col-xl-4">
      <div class="card animated-card h-100">
        <div class="card-header pb-2">
          <h5 class="card-title mb-0">
            <i class="fas fa-clock text-warning me-2"></i>
            Prochaines échéances
          </h5>
        </div>
        <div class="card-body p-0">
          <div class="deadline-list">
            <div class="deadline-item urgent countdown-item" data-deadline="2024-01-23T14:00:00">
              <div class="deadline-icon">
                <i class="fas fa-exclamation-circle"></i>
              </div>
              <div class="deadline-content">
                <h6>Devoir de Physique</h6>
                <small class="countdown-text">Chargement...</small>
              </div>
              <span class="badge bg-danger countdown-badge">Urgent</span>
            </div>
            <div class="deadline-item countdown-item" data-deadline="2024-01-25T23:59:00">
              <div class="deadline-icon">
                <i class="fas fa-file-alt"></i>
              </div>
              <div class="deadline-content">
                <h6>Projet Mathématiques</h6>
                <small class="countdown-text">Chargement...</small>
              </div>
              <span class="badge bg-warning">Important</span>
            </div>
            <div class="deadline-item countdown-item" data-deadline="2024-01-27T08:00:00">
              <div class="deadline-icon">
                <i class="fas fa-book"></i>
              </div>
              <div class="deadline-content">
                <h6>Révision Chimie</h6>
                <small class="countdown-text">Chargement...</small>
              </div>
              <span class="badge bg-info">À planifier</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Deuxième ligne de contenu -->
  <div class="row g-3 mt-3">
    <div class="col-xl-6">
      <div class="card animated-card h-100">
        <div class="card-header d-flex justify-content-between align-items-center pb-2">
          <h5 class="card-title mb-0">
            <i class="fas fa-book text-success me-2"></i>
            Mes cours récents
          </h5>
          <a href="<?= site_url('etudiant/mes_cours') ?>" class="btn btn-sm btn-outline-primary">Voir tout</a>
        </div>
        <div class="card-body">
          <div class="course-grid">
            <?php if (!empty($courses)): ?>
              <?php foreach (array_slice($courses, 0, 3) as $index => $course): ?>
                <div class="course-item animated-item" data-delay="<?= $index * 100 ?>">
                  <div class="course-header">
                    <div class="course-avatar pulse-animation">
                      <?= substr($course['course_name'], 0, 2) ?>
                    </div>
                    <div class="course-info">
                      <h6 class="mb-1"><?= $course['course_name'] ?></h6>
                      <small class="text-muted"><?= $course['teacher_name'] ?></small>
                    </div>
                  </div>
                  <div class="course-meta">
                    <span class="badge bg-light text-dark">
                      <i class="fas fa-clock me-1"></i><?= $course['schedule'] ?>
                    </span>
                    <span class="badge bg-light text-dark">
                      <i class="fas fa-map-marker-alt me-1"></i><?= $course['classroom'] ?>
                    </span>
                  </div>
                  <div class="course-progress">
                    <div class="progress">
                      <div class="progress-bar progress-animation" style="width: 65%"></div>
                    </div>
                    <small>65% complété</small>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php else: ?>
              <div class="text-center py-4">
                <i class="fas fa-book-open fa-2x text-muted mb-2"></i>
                <p class="text-muted">Aucun cours pour le moment</p>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-6">
      <div class="card animated-card h-100">
        <div class="card-header d-flex justify-content-between align-items-center pb-2">
          <h5 class="card-title mb-0">
            <i class="fas fa-star text-warning me-2"></i>
            Dernières notes
          </h5>
          <a href="<?= site_url('etudiant/mes_notes') ?>" class="btn btn-sm btn-outline-primary">Voir tout</a>
        </div>
        <div class="card-body">
          <div class="grades-list">
            <?php if (!empty($grades)): ?>
              <?php foreach (array_slice($grades, 0, 4) as $index => $grade): ?>
                <div class="grade-item animated-item" data-delay="<?= $index * 100 ?>">
                  <div class="grade-subject">
                    <h6 class="mb-1"><?= $grade['course_name'] ?></h6>
                    <small class="text-muted"><?= $grade['type'] ?> - <?= date('d/m/Y', strtotime($grade['date'])) ?></small>
                  </div>
                  <div class="grade-score <?= $grade['grade'] >= 12 ? 'good' : ($grade['grade'] >= 10 ? 'average' : 'poor') ?> pulse-on-hover">
                    <span class="score"><?= $grade['grade'] ?></span>
                    <small>/20</small>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php else: ?>
              <div class="text-center py-4">
                <i class="fas fa-star fa-2x text-muted mb-2"></i>
                <p class="text-muted">Aucune note disponible</p>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .dashboard-etudiant {
    padding: 1rem 0;
  }

  /* Amélioration des espacements */
  .student-header {
    padding: 2rem !important;
    margin-bottom: 1.5rem !important;
  }

  .progress-card {
    padding: 1.5rem;
    margin-bottom: 0;
  }

  .card {
    margin-bottom: 1rem;
  }

  .card-header {
    padding: 1rem 1.25rem;
  }

  .card-body {
    padding: 1.25rem;
  }

  /* Responsive amélioré */
  @media (max-width: 768px) {
    .dashboard-etudiant {
      padding: 0.5rem 0;
    }

    .student-header {
      padding: 1.5rem !important;
      margin-bottom: 1rem !important;
    }

    .progress-card {
      padding: 1.25rem;
      margin-bottom: 0.75rem;
    }

    .row.g-3 {
      margin-left: -0.5rem;
      margin-right: -0.5rem;
    }

    .row.g-3>[class*="col-"] {
      padding-left: 0.5rem;
      padding-right: 0.5rem;
    }
  }

  /* Animation plus subtile pour site éducatif */
  .animated-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }

  .animated-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  }
</style>

<!-- Scripts conservés intacts -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    function animateCounters() {
      const counters = document.querySelectorAll('.counter');
      counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-count'));
        const increment = target / 60;
        let current = 0;

        const timer = setInterval(() => {
          current += increment;
          if (current >= target) {
            counter.textContent = target;
            clearInterval(timer);
          } else {
            counter.textContent = Math.floor(current);
          }
        }, 30);
      });
    }

    // Compte à rebours pour les échéances
    function updateCountdowns() {
      const countdownItems = document.querySelectorAll('.countdown-item');

      countdownItems.forEach(item => {
        const deadline = new Date(item.getAttribute('data-deadline')).getTime();
        const now = new Date().getTime();
        const distance = deadline - now;

        if (distance < 0) {
          item.querySelector('.countdown-text').textContent = 'Échéance passée';
          return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

        item.querySelector('.countdown-text').textContent =
          `${days}j ${hours}h ${minutes}m`;
      });
    }

    // Graphique de progression
    function initProgressChart() {
      const ctx = document.getElementById('progressChart').getContext('2d');
      const chart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Sem 1', 'Sem 2', 'Sem 3', 'Sem 4', 'Sem 5', 'Sem 6'],
          datasets: [{
            label: 'Moyenne générale',
            data: [12.5, 13.2, 14.0, 14.5, 15.2, 14.8],
            borderColor: '#667eea',
            backgroundColor: 'rgba(102, 126, 234, 0.1)',
            borderWidth: 3,
            fill: true,
            tension: 0.4
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false
            }
          },
          scales: {
            y: {
              beginAtZero: false,
              min: 10,
              max: 20,
              grid: {
                color: 'rgba(0, 0, 0, 0.1)'
              }
            },
            x: {
              grid: {
                display: false
              }
            }
          }
        }
      });
    }

    // Animation au scroll
    function initScrollAnimations() {
      const animatedElements = document.querySelectorAll('.animated-card, .animated-item');

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const delay = entry.target.getAttribute('data-delay') || 0;
            setTimeout(() => {
              entry.target.style.animationDelay = delay + 'ms';
              entry.target.classList.add('animate-in');
            }, delay);
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
      });

      animatedElements.forEach(el => observer.observe(el));
    }

    // Filtrage des périodes
    document.querySelectorAll('.period-filter').forEach(filter => {
      filter.addEventListener('click', function(e) {
        e.preventDefault();
        const period = this.getAttribute('data-period');
        // Implémenter la logique de filtrage ici
        console.log('Filtrage période:', period);
      });
    });
    animateCounters();
    updateCountdowns();
    initProgressChart();
    initScrollAnimations();
  });
</script>
<?= $this->endSection() ?>