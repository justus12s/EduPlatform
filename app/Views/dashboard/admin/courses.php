<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="dashboard-admin">
    <div class="dashboard-header">
        <h1><?= $page_title ?></h1>
        <p>Gérez tous les cours de l'université</p>
    </div>

    <div class="dashboard-actions">
        <a href="<?= site_url('admin/add_course') ?>" class="btn btn-primary">➕ Ajouter un cours</a>
    </div>

    <div class="content-section">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Nom du cours</th>
                        <th>Crédits</th>
                        <th>Enseignant</th>
                        <th>Emploi du temps</th>
                        <th>Salle</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($courses)): ?>
                        <?php foreach ($courses as $course): ?>
                            <tr>
                                <td><?= $course['course_code'] ?></td>
                                <td><strong><?= $course['course_name'] ?></strong></td>
                                <td><?= $course['credits'] ?></td>
                                <td>
                                    <?php
                                    // À remplacer par le nom de l'enseignant via relation
                                    echo "Enseignant ID: " . $course['teacher_id'];
                                    ?>
                                </td>
                                <td><?= $course['schedule'] ?></td>
                                <td><?= $course['classroom'] ?></td>
                                <td>
                                    <span class="badge badge-<?= $course['status'] == 'active' ? 'success' : 'secondary' ?>">
                                        <?= $course['status'] == 'active' ? 'Actif' : 'Inactif' ?>
                                    </span>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info">Modifier</a>
                                    <a href="#" class="btn btn-sm btn-danger">Supprimer</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8" class="text-center">Aucun cours trouvé</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .dashboard-actions {
        margin-bottom: 20px;
    }

    .table-responsive {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn {
        padding: 8px 15px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-primary {
        background: #667eea;
        color: white;
        border: none;
    }

    .btn-primary:hover {
        background: #5a6fd8;
        transform: translateY(-2px);
    }

    .btn-sm {
        padding: 5px 10px;
        font-size: 0.8em;
    }

    .btn-info {
        background: #17a2b8;
        color: white;
    }

    .btn-danger {
        background: #dc3545;
        color: white;
    }

    .badge {
        padding: 5px 10px;
        border-radius: 15px;
        font-size: 0.8em;
    }

    .badge-success {
        background: #28a745;
        color: white;
    }

    .badge-secondary {
        background: #6c757d;
        color: white;
    }
</style>
<?= $this->endSection() ?>