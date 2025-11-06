<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="dashboard-admin">
    <div class="dashboard-header">
        <h1><?= $page_title ?></h1>
        <p>Ajouter un nouveau cours à l'université</p>
    </div>

    <div class="content-section">
        <form method="post" action="<?= site_url('admin/add_course') ?>">
            <div class="form-group">
                <label for="course_code">Code du cours *</label>
                <input type="text" class="form-control" id="course_code" name="course_code" required>
            </div>

            <div class="form-group">
                <label for="course_name">Nom du cours *</label>
                <input type="text" class="form-control" id="course_name" name="course_name" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="credits">Crédits *</label>
                    <input type="number" class="form-control" id="credits" name="credits" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="teacher_id">Enseignant *</label>
                    <select class="form-control" id="teacher_id" name="teacher_id" required>
                        <option value="">Sélectionner un enseignant</option>
                        <?php foreach ($teachers as $teacher): ?>
                            <option value="<?= $teacher['id'] ?>"><?= $teacher['first_name'] . ' ' . $teacher['last_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="schedule">Emploi du temps</label>
                <input type="text" class="form-control" id="schedule" name="schedule" placeholder="Ex: Lundi 10h-12h, Mercredi 14h-16h">
            </div>

            <div class="form-group">
                <label for="classroom">Salle de classe</label>
                <input type="text" class="form-control" id="classroom" name="classroom">
            </div>

            <div class="form-group">
                <label for="max_students">Nombre maximum d'étudiants</label>
                <input type="number" class="form-control" id="max_students" name="max_students">
            </div>

            <button type="submit" class="btn btn-primary">Créer le cours</button>
            <a href="<?= site_url('admin/courses') ?>" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</div>

<style>
    .content-section {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1em;
    }

    .form-row {
        display: flex;
        gap: 15px;
    }

    .form-row .form-group {
        flex: 1;
    }

    label {
        font-weight: 600;
        color: #333;
        margin-bottom: 5px;
        display: block;
    }

    .btn-secondary {
        background: #6c757d;
        color: white;
        margin-left: 10px;
    }
</style>
<?= $this->endSection() ?>