<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="dashboard-etudiant">
  <!-- Header avec animations -->
  <div class="page-header animated-header mb-4">
    <div class="header-background"></div>
    <div class="d-flex justify-content-between align-items-center position-relative">
      <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('etudiant/dashboard') ?>">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mes Cours</li>
          </ol>
        </nav>
        <h1 class="h3 mb-0 welcome-text">Mes Cours</h1>
        <p class="text-muted">Explorez et gérez vos inscriptions aux cours</p>
      </div>
      <div class="d-flex gap-2">
        <button class="btn btn-outline-primary animated-btn" data-delay="100">
          <i class="fas fa-download me-2"></i>Export
        </button>
        <button class="btn btn-primary animated-btn" data-delay="200" data-bs-toggle="modal" data-bs-target="#inscriptionModal">
          <i class="fas fa-plus me-2"></i>S'inscrire
        </button>
      </div>
    </div>
  </div>

  <!-- Filtres et recherche avec animations -->
  <div class="card mb-4 animated-card" data-delay="0">
    <div class="card-body">
      <div class="row g-3">
        <div class="col-md-6">
          <div class="search-box">
            <i class="fas fa-search search-icon"></i>
            <input type="text" class="form-control search-input" placeholder="Rechercher un cours, un professeur...">
            <div class="search-results" id="searchResults"></div>
          </div>
        </div>
        <div class="col-md-3">
          <select class="form-select animated-select" id="semesterFilter">
            <option value="">Tous les semestres</option>
            <option value="1">Semestre 1</option>
            <option value="2">Semestre 2</option>
            <option value="3">Semestre 3</option>
            <option value="4">Semestre 4</option>
          </select>
        </div>
        <div class="col-md-3">
          <select class="form-select animated-select" id="statusFilter">
            <option value="">Tous les statuts</option>
            <option value="active">En cours</option>
            <option value="upcoming">À venir</option>
            <option value="completed">Terminé</option>
          </select>
        </div>
      </div>

      <!-- Filtres avancés -->
      <div class="advanced-filters mt-3" id="advancedFilters" style="display: none;">
        <div class="row g-3">
          <div class="col-md-4">
            <label class="form-label">Crédits</label>
            <select class="form-select" id="creditsFilter">
              <option value="">Tous les crédits</option>
              <option value="3">3 crédits</option>
              <option value="6">6 crédits</option>
              <option value="9">9 crédits</option>
            </select>
          </div>
          <div class="col-md-4">
            <label class="form-label">Niveau</label>
            <select class="form-select" id="levelFilter">
              <option value="">Tous les niveaux</option>
              <option value="L1">Licence 1</option>
              <option value="L2">Licence 2</option>
              <option value="L3">Licence 3</option>
            </select>
          </div>
          <div class="col-md-4">
            <label class="form-label">Disponibilité</label>
            <select class="form-select" id="availabilityFilter">
              <option value="">Toutes</option>
              <option value="available">Places disponibles</option>
              <option value="full">Complet</option>
            </select>
          </div>
        </div>
      </div>

      <div class="d-flex justify-content-between align-items-center mt-3">
        <button class="btn btn-sm btn-outline-secondary" id="toggleFilters">
          <i class="fas fa-sliders-h me-1"></i>Filtres avancés
        </button>
        <div class="filter-results">
          <span id="resultsCount"><?= count($courses) ?> cours trouvés</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Liste des cours avec animations -->
  <div class="row g-4" id="coursesGrid">
    <?php if (!empty($courses)): ?>
      <?php foreach ($courses as $index => $course): ?>
        <div class="col-xl-4 col-md-6 course-col" data-semester="1" data-status="active" data-credits="6">
          <div class="course-card animated-card" data-delay="<?= $index * 100 ?>">
            <!-- Badge statut -->
            <div class="course-status-badge <?= $course['status'] ?? 'active' ?>">
              <i class="fas fa-circle me-1"></i>
              <?= $course['status'] ?? 'En cours' ?>
            </div>

            <div class="course-header">
              <div class="course-avatar pulse-animation" style="background: <?= $course['color'] ?? 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)' ?>">
                <?= substr($course['course_name'], 0, 2) ?>
              </div>
              <div class="course-info">
                <h5 class="course-title"><?= $course['course_name'] ?></h5>
                <span class="course-code"><?= $course['course_code'] ?></span>
              </div>
              <div class="course-actions">
                <div class="dropdown">
                  <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    <i class="fas fa-ellipsis-v"></i>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item course-action" href="#" data-action="view"><i class="fas fa-eye me-2"></i>Voir détails</a></li>
                    <li><a class="dropdown-item course-action" href="#" data-action="resources"><i class="fas fa-download me-2"></i>Ressources</a></li>
                    <li><a class="dropdown-item course-action" href="#" data-action="schedule"><i class="fas fa-calendar me-2"></i>Planning</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-danger course-action" href="#" data-action="unsubscribe"><i class="fas fa-times me-2"></i>Se désinscrire</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Métadonnées du cours -->
            <div class="course-meta">
              <div class="meta-item">
                <i class="fas fa-user-tie"></i>
                <span><?= $course['teacher_name'] ?></span>
              </div>
              <div class="meta-item">
                <i class="fas fa-clock"></i>
                <span><?= $course['schedule'] ?></span>
              </div>
              <div class="meta-item">
                <i class="fas fa-map-marker-alt"></i>
                <span><?= $course['classroom'] ?></span>
              </div>
            </div>

            <!-- Progression avec animation -->
            <div class="course-progress">
              <div class="progress-info">
                <span>Progression</span>
                <span class="progress-percent">65%</span>
              </div>
              <div class="progress">
                <div class="progress-bar progress-animation" style="width: 65%"></div>
              </div>
            </div>

            <!-- Statistiques interactives -->
            <div class="course-stats">
              <div class="stat" data-toggle="tooltip" title="Devoirs en cours">
                <i class="fas fa-file-alt"></i>
                <span class="stat-value">3</span>
              </div>
              <div class="stat" data-toggle="tooltip" title="Moyenne actuelle">
                <i class="fas fa-star"></i>
                <span class="stat-value">14.5</span>
              </div>
              <div class="stat" data-toggle="tooltip" title="Étudiants inscrits">
                <i class="fas fa-users"></i>
                <span class="stat-value">28</span>
              </div>
            </div>

            <!-- Actions rapides -->
            <div class="course-footer">
              <a href="#" class="btn btn-primary btn-sm course-quick-action" data-action="access">
                <i class="fas fa-door-open me-1"></i>Accéder
              </a>
              <a href="#" class="btn btn-outline-secondary btn-sm course-quick-action" data-action="schedule">
                <i class="fas fa-calendar me-1"></i>Planning
              </a>
            </div>

            <!-- Overlay d'information au hover -->
            <div class="course-overlay">
              <div class="overlay-content">
                <h6>Informations détaillées</h6>
                <p>Crédits: 6 ECTS</p>
                <p>Semestre: 1</p>
                <p>Prochain cours: Lundi 08:00</p>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <!-- État vide avec animation -->
      <div class="col-12">
        <div class="empty-state animated-card" data-delay="0">
          <div class="empty-icon">
            <i class="fas fa-book-open fa-4x text-muted mb-3"></i>
          </div>
          <h4>Aucun cours trouvé</h4>
          <p class="text-muted mb-4">Vous n'êtes inscrit à aucun cours pour le moment.</p>
          <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#inscriptionModal">
            <i class="fas fa-plus me-2"></i>Découvrir les cours disponibles
          </button>
        </div>
      </div>
    <?php endif; ?>
  </div>

  <!-- Pagination améliorée -->
  <nav aria-label="Page navigation" class="mt-4">
    <ul class="pagination justify-content-center animated-card" data-delay="300">
      <li class="page-item disabled">
        <a class="page-link pagination-btn" href="#" tabindex="-1">
          <i class="fas fa-chevron-left me-1"></i>Précédent
        </a>
      </li>
      <li class="page-item active"><a class="page-link pagination-btn" href="#">1</a></li>
      <li class="page-item"><a class="page-link pagination-btn" href="#">2</a></li>
      <li class="page-item"><a class="page-link pagination-btn" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link pagination-btn" href="#">
          Suivant<i class="fas fa-chevron-right ms-1"></i>
        </a>
      </li>
    </ul>
  </nav>
</div>

<!-- Modal d'inscription amélioré -->
<div class="modal fade" id="inscriptionModal" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
          <i class="fas fa-book me-2 text-primary"></i>
          Inscription aux cours
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8">
            <div class="available-courses">
              <h6 class="mb-3">Cours disponibles</h6>
              <!-- Liste des cours disponibles -->
            </div>
          </div>
          <div class="col-md-4">
            <div class="selection-summary">
              <h6 class="mb-3">Résumé de sélection</h6>
              <!-- Résumé des cours sélectionnés -->
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary" id="confirmInscription">
          <i class="fas fa-check me-2"></i>Confirmer l'inscription
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Styles améliorés -->
<style>
  .page-header {
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 30px;
    border-radius: 15px;
    margin-bottom: 30px;
  }

  .search-box {
    position: relative;
  }

  .search-icon {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #6b7280;
    z-index: 2;
  }

  .search-input {
    padding-left: 45px;
    border-radius: 10px;
    border: 2px solid #e5e7eb;
    transition: all 0.3s ease;
  }

  .search-input:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
  }

  .search-results {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: white;
    border: 1px solid #e5e7eb;
    border-radius: 0 0 10px 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-height: 200px;
    overflow-y: auto;
    z-index: 1000;
    display: none;
  }

  .animated-select {
    border-radius: 10px;
    border: 2px solid #e5e7eb;
    transition: all 0.3s ease;
  }

  .animated-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
  }

  .course-card {
    background: white;
    border-radius: 15px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    padding: 25px;
    transition: all 0.4s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
    border: 1px solid #f1f5f9;
  }

  .course-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(102, 126, 234, 0.05), transparent);
    transition: left 0.6s;
  }

  .course-card:hover::before {
    left: 100%;
  }

  .course-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    border-color: #667eea;
  }

  .course-status-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 0.75em;
    font-weight: 600;
    z-index: 2;
  }

  .course-status-badge.active {
    background: #d1fae5;
    color: #065f46;
  }

  .course-status-badge.upcoming {
    background: #fef3c7;
    color: #92400e;
  }

  .course-status-badge.completed {
    background: #e0e7ff;
    color: #3730a3;
  }

  .course-avatar {
    width: 60px;
    height: 60px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 700;
    font-size: 1.2em;
    margin-right: 15px;
    flex-shrink: 0;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
  }

  .course-title {
    font-size: 1.2em;
    font-weight: 600;
    margin: 0 0 8px 0;
    color: #1f2937;
    line-height: 1.3;
  }

  .course-code {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 0.8em;
    font-weight: 500;
    display: inline-block;
  }

  .course-meta {
    margin: 20px 0;
    padding: 15px;
    background: #f8fafc;
    border-radius: 10px;
  }

  .meta-item {
    display: flex;
    align-items: center;
    margin-bottom: 8px;
    color: #64748b;
    font-size: 0.9em;
  }

  .meta-item:last-child {
    margin-bottom: 0;
  }

  .meta-item i {
    width: 16px;
    margin-right: 10px;
    color: #667eea;
  }

  .course-progress {
    margin: 20px 0;
  }

  .progress-info {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
    font-size: 0.9em;
    color: #64748b;
    font-weight: 500;
  }

  .progress-percent {
    color: #667eea;
    font-weight: 700;
  }

  .progress {
    height: 8px;
    background: #e2e8f0;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
  }

  .progress-bar {
    background: linear-gradient(135deg, #10b981, #34d399);
    border-radius: 10px;
    position: relative;
  }

  .progress-bar::after {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
    animation: shimmer 2s infinite;
  }

  .course-stats {
    display: flex;
    justify-content: space-between;
    margin: 20px 0;
    padding: 20px;
    background: linear-gradient(135deg, #f8fafc, #e2e8f0);
    border-radius: 12px;
    border: 1px solid #e2e8f0;
  }

  .stat {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 10px;
    border-radius: 8px;
    transition: all 0.3s ease;
    cursor: pointer;
  }

  .stat:hover {
    background: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .stat i {
    color: #667eea;
    margin-bottom: 8px;
    font-size: 1.3em;
  }

  .stat-value {
    font-weight: 700;
    color: #1f2937;
    font-size: 1.1em;
  }

  .course-footer {
    display: flex;
    gap: 10px;
    margin-top: auto;
  }

  .course-footer .btn {
    flex: 1;
    padding: 10px 16px;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .course-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.95), rgba(118, 75, 162, 0.95));
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.3s ease;
    border-radius: 15px;
  }

  .course-card:hover .course-overlay {
    opacity: 1;
  }

  .overlay-content {
    text-align: center;
    padding: 20px;
  }

  .overlay-content h6 {
    margin-bottom: 15px;
    font-weight: 600;
  }

  .empty-state {
    text-align: center;
    padding: 80px 40px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    border: 2px dashed #e5e7eb;
  }

  .empty-icon {
    margin-bottom: 20px;
  }

  .pagination-btn {
    border-radius: 8px;
    margin: 0 4px;
    border: 1px solid #e5e7eb;
    transition: all 0.3s ease;
  }

  .pagination-btn:hover {
    background: #667eea;
    color: white;
    border-color: #667eea;
  }

  @keyframes shimmer {
    0% {
      left: -100%;
    }

    100% {
      left: 100%;
    }
  }

  /* Animations responsives */
  @media (max-width: 768px) {
    .course-card {
      padding: 20px;
    }

    .course-header {
      flex-direction: column;
      text-align: center;
    }

    .course-avatar {
      margin-right: 0;
      margin-bottom: 15px;
    }

    .course-stats {
      flex-direction: column;
      gap: 15px;
    }

    .course-footer {
      flex-direction: column;
    }
  }
</style>

<!-- Scripts pour l'interactivité -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Recherche en temps réel
    const searchInput = document.querySelector('.search-input');
    const searchResults = document.getElementById('searchResults');

    searchInput.addEventListener('input', function() {
      const query = this.value.toLowerCase();
      if (query.length > 2) {
        // Simuler les résultats de recherche
        showSearchResults(query);
      } else {
        hideSearchResults();
      }
    });

    function showSearchResults(query) {
      const results = [
        'Mathématiques Avancées',
        'Physique Quantique',
        'Chimie Organique',
        'Algorithmes et Programmation'
      ].filter(course => course.toLowerCase().includes(query));

      searchResults.innerHTML = results.map(course =>
        `<div class="search-result-item">${course}</div>`
      ).join('');
      searchResults.style.display = 'block';
    }

    function hideSearchResults() {
      searchResults.style.display = 'none';
    }

    // Filtres avancés
    const toggleFilters = document.getElementById('toggleFilters');
    const advancedFilters = document.getElementById('advancedFilters');

    toggleFilters.addEventListener('click', function() {
      const isVisible = advancedFilters.style.display === 'block';
      advancedFilters.style.display = isVisible ? 'none' : 'block';
      this.innerHTML = isVisible ?
        '<i class="fas fa-sliders-h me-1"></i>Filtres avancés' :
        '<i class="fas fa-times me-1"></i>Masquer les filtres';
    });

    // Filtrage des cours
    const filters = ['semesterFilter', 'statusFilter', 'creditsFilter', 'levelFilter', 'availabilityFilter'];
    const coursesGrid = document.getElementById('coursesGrid');
    const resultsCount = document.getElementById('resultsCount');

    filters.forEach(filterId => {
      const filter = document.getElementById(filterId);
      if (filter) {
        filter.addEventListener('change', applyFilters);
      }
    });

    function applyFilters() {
      const courseCols = document.querySelectorAll('.course-col');
      let visibleCount = 0;

      courseCols.forEach(col => {
        const semesterMatch = !filters.semesterFilter || filters.semesterFilter.value === '' || col.dataset.semester === filters.semesterFilter.value;
        const statusMatch = !filters.statusFilter || filters.statusFilter.value === '' || col.dataset.status === filters.statusFilter.value;

        if (semesterMatch && statusMatch) {
          col.style.display = 'block';
          visibleCount++;

          // Animation d'apparition
          col.style.animation = 'fadeInUp 0.5s ease-out';
        } else {
          col.style.display = 'none';
        }
      });

      resultsCount.textContent = `${visibleCount} cours trouvés`;

      // Afficher l'état vide si aucun résultat
      if (visibleCount === 0) {
        showEmptyState();
      }
    }

    function showEmptyState() {
      // Implémenter l'affichage de l'état vide
    }

    // Actions sur les cours
    document.querySelectorAll('.course-action, .course-quick-action').forEach(button => {
      button.addEventListener('click', function(e) {
        e.preventDefault();
        const action = this.dataset.action;
        const courseCard = this.closest('.course-card');
        const courseTitle = courseCard.querySelector('.course-title').textContent;

        switch (action) {
          case 'view':
            showCourseDetails(courseTitle);
            break;
          case 'access':
            accessCourse(courseTitle);
            break;
          case 'resources':
            showCourseResources(courseTitle);
            break;
          case 'schedule':
            showCourseSchedule(courseTitle);
            break;
          case 'unsubscribe':
            confirmUnsubscribe(courseTitle);
            break;
        }
      });
    });

    function showCourseDetails(courseTitle) {
      // Implémenter l'affichage des détails du cours
      console.log('Voir détails:', courseTitle);
    }

    function accessCourse(courseTitle) {
      // Implémenter l'accès au cours
      console.log('Accéder au cours:', courseTitle);
    }

    // Animation au scroll
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const delay = entry.target.getAttribute('data-delay') || 0;
          setTimeout(() => {
            entry.target.style.animation = `fadeInUp 0.6s ease-out ${delay}ms forwards`;
          }, delay);
        }
      });
    }, {
      threshold: 0.1
    });

    document.querySelectorAll('.animated-card').forEach(card => observer.observe(card));
  });
</script>
<?= $this->endSection() ?>


