<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?? 'EduPlatform' ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Style personnalisé -->
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard.css') ?>" />
</head>

<body class="dashboard-body">
    <!-- Sidebar -->
    <nav class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <a href="<?= site_url('dashboard') ?>" class="sidebar-brand">
                <i class="fas fa-graduation-cap me-2"></i>
                <span class="fw-bold">EduPlatform</span>
            </a>
            <button class="sidebar-toggle" id="sidebarToggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <div class="sidebar-content">
            <ul class="sidebar-nav">
                <?php if (isset($sidebar_items)): ?>
                    <?php foreach ($sidebar_items as $item): ?>
                        <li class="sidebar-item <?= $item['active'] ? 'active' : '' ?>">
                            <a href="<?= site_url($item['url']) ?>" class="sidebar-link">
                                <i class="<?= $item['icon'] ?> me-3"></i>
                                <span><?= $item['text'] ?></span>
                                <?php if (isset($item['badge'])): ?>
                                    <span class="sidebar-badge"><?= $item['badge'] ?></span>
                                <?php endif; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>

        <div class="sidebar-footer">
            <div class="user-info">
                <div class="user-avatar">
                    <img src="<?= $user->avatar ?? 'https://ui-avatars.com/api/?name=' . urlencode($user->name ?? 'Utilisateur') . '&background=667eea&color=fff' ?>"
                        alt="<?= $user->name ?? 'Utilisateur' ?>">
                </div>
                <div class="user-details">
                    <div class="user-name"><?= $user->name ?? 'Utilisateur' ?></div>
                    <div class="user-role"><?= $user->role ?? 'Profil' ?></div>
                </div>
            </div>
            <a href="<?= site_url('auth/logout') ?>" class="sidebar-logout">
                <i class="fas fa-sign-out-alt me-2"></i>Déconnexion
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <!-- Top Bar -->
        <header class="top-bar">
            <div class="top-bar-left">
                <button class="menu-toggle" id="menuToggle">
                    <i class="fas fa-bars"></i>
                </button>
                <h1 class="page-title"><?= $page_title ?? 'Tableau de bord' ?></h1>
            </div>
            <div class="top-bar-right">
                <div class="top-bar-actions">
                    <!-- Notifications -->
                    <div class="dropdown">
                        <button class="btn btn-icon" data-bs-toggle="dropdown">
                            <i class="fas fa-bell"></i>
                            <span class="notification-badge">3</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <h6 class="dropdown-header">Notifications</h6>
                            <a class="dropdown-item" href="#">
                                <div class="notification-item">
                                    <i class="fas fa-user-plus text-success"></i>
                                    <div class="notification-content">
                                        <div class="notification-text">Nouvel étudiant inscrit</div>
                                        <small class="text-muted">Il y a 5 min</small>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item" href="#">
                                <div class="notification-item">
                                    <i class="fas fa-exclamation-triangle text-warning"></i>
                                    <div class="notification-content">
                                        <div class="notification-text">Devoir à corriger</div>
                                        <small class="text-muted">Il y a 1 heure</small>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-center" href="#">
                                Voir toutes les notifications
                            </a>
                        </div>
                    </div>

                    <!-- User Menu -->
                    <div class="dropdown">
                        <button class="btn btn-user" data-bs-toggle="dropdown">
                            <img src="<?= $user->avatar ?? 'https://ui-avatars.com/api/?name=' . urlencode($user->name ?? 'Utilisateur') . '&background=667eea&color=fff' ?>"
                                alt="<?= $user->name ?? 'Utilisateur' ?>" class="user-avatar-sm">
                            <span class="user-name-sm"><?= $user->name ?? 'Utilisateur' ?></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="<?= site_url('profile') ?>">
                                <i class="fas fa-user me-2"></i>Mon profil
                            </a>
                            <a class="dropdown-item" href="<?= site_url('settings') ?>">
                                <i class="fas fa-cog me-2"></i>Paramètres
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= site_url('auth/logout') ?>">
                                <i class="fas fa-sign-out-alt me-2"></i>Déconnexion
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main class="page-content">
            <?= $this->renderSection('content') ?>
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/js/dashboard.js') ?>"></script>
</body>

</html>