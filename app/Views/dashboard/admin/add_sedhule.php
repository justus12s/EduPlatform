<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="dashboard-admin">
    <div class="dashboard-header">
        <h1><?= $page_title ?></h1>
        <p>Programmer un nouveau cours, examen ou sortie</p>
    </div>

    <div class="content-section">
        <form method="post" action="<?= site_url('admin/add_schedule') ?>">
            <div class="form-group">
                <label for="event_type">Type d'événement *</label>
                <select class="form-control" id="event_type" name="event_type" required>
                    <option value="">Sélectionner un type</option>
                    <option value="course">Cours</option>
                    <option value="exam">Examen</option>
                    <option value="outing">Sortie</option>
                </select>
            </div>

            <div class="form-group">
                <label for="title">Titre *</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="course_id">Cours (optionnel)</label>
                    <select class="form-control" id="course_id" name="course_id">
                        <option value="">Sélectionner un cours</option>
                        <?php foreach ($courses as $course): ?>
                            <option value="<?= $course['id'] ?>"><?= $course['course_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="teacher_id">Enseignant (optionnel)</label>
                    <select class="form-control" id="teacher_id" name="teacher_id">
                        <option value="">Sélectionner un enseignant</option>
                        <?php foreach ($teachers as $teacher): ?>
                            <option value="<?= $teacher['id'] ?>"><?= $teacher['first_name'] . ' ' . $teacher['last_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="date">Date *</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>

                <div class="form-group col-md-3">
                    <label for="start_time">Heure de début *</label>
                    <input type="time" class="form-control" id="start_time" name="start_time" required>
                </div>

                <div class="form-group col-md-3">
                    <label for="end_time">Heure de fin *</label>
                    <input type="time" class="form-control" id="end_time" name="end_time" required>
                </div>
            </div>

            <div class="form-group">
                <label for="location">Lieu</label>
                <input type="text" class="form-control" id="location" name="location">
            </div>

            <button type="submit" class="btn btn-primary">Programmer</button>
            <a href="<?= site_url('admin/scheduling') ?>" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</div>
<?= $this->endSection() ?>