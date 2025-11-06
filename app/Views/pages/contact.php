<?= $this->include('partials/header') ?>
<?= $this->include('partials/navigation') ?>

<!-- Hero Section -->
<section class="page-hero-section bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">Contactez-nous</h1>
                <p class="lead mb-4">
                    Une question ? Un projet ? Notre équipe est à votre écoute
                    pour vous accompagner dans votre transformation numérique.
                </p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="https://images.unsplash.com/photo-1534533983688-c7b8e13fd3b6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                    alt="Contact EduPlatform" class="img-fluid rounded-3">
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Info -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Formulaire de contact -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="fw-bold mb-4">Envoyez-nous un message</h3>
                        <form id="contactForm">
                            <?= csrf_field() ?>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">Prénom *</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Nom *</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Téléphone</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="col-12">
                                    <label for="company" class="form-label">Établissement / Organisation</label>
                                    <input type="text" class="form-control" id="company" name="company">
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label">Sujet *</label>
                                    <select class="form-select" id="subject" name="subject" required>
                                        <option value="">Choisissez un sujet</option>
                                        <option value="demo">Demande de démonstration</option>
                                        <option value="pricing">Tarifs et abonnements</option>
                                        <option value="technical">Support technique</option>
                                        <option value="partnership">Partenariat</option>
                                        <option value="other">Autre</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Message *</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="consent" required>
                                        <label class="form-check-label small" for="consent">
                                            J'accepte que mes données personnelles soient traitées conformément
                                            à la <a href="#" class="text-primary">politique de confidentialité</a>.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg px-4">
                                        <i class="fas fa-paper-plane me-2"></i>Envoyer le message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Informations de contact -->
            <div class="col-lg-4">
                <div class="contact-info">
                    <h4 class="fw-bold mb-4">Nos coordonnées</h4>

                    <div class="contact-item d-flex mb-4">
                        <div class="contact-icon me-3">
                            <i class="fas fa-map-marker-alt text-primary fa-lg"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Adresse</h6>
                            <p class="text-muted mb-0">
                                123 Avenue de l'Éducation<br>
                                75000 Paris, France
                            </p>
                        </div>
                    </div>

                    <div class="contact-item d-flex mb-4">
                        <div class="contact-icon me-3">
                            <i class="fas fa-phone text-success fa-lg"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Téléphone</h6>
                            <p class="text-muted mb-0">+33 1 23 45 67 89</p>
                        </div>
                    </div>

                    <div class="contact-item d-flex mb-4">
                        <div class="contact-icon me-3">
                            <i class="fas fa-envelope text-info fa-lg"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Email</h6>
                            <p class="text-muted mb-0">contact@eduplatform.com</p>
                        </div>
                    </div>

                    <div class="contact-item d-flex mb-4">
                        <div class="contact-icon me-3">
                            <i class="fas fa-clock text-warning fa-lg"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Horaires</h6>
                            <p class="text-muted mb-0">
                                Lundi - Vendredi: 9h00 - 18h00<br>
                                Samedi: 9h00 - 12h00
                            </p>
                        </div>
                    </div>

                    <!-- Carte -->
                    <div class="mt-5">
                        <h6 class="fw-bold mb-3">Nous trouver</h6>
                        <div class="map-placeholder bg-light rounded-3 p-4 text-center">
                            <i class="fas fa-map-marked-alt fa-2x text-muted mb-3"></i>
                            <p class="text-muted small mb-0">Carte interactive</p>
                            <small class="text-muted">(Intégration Google Maps)</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Questions fréquentes</h2>
            <p class="text-muted">Trouvez rapidement des réponses à vos questions</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Combien coûte EduPlatform ?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Nous proposons plusieurs formules adaptées à la taille de votre établissement.
                                Contactez-nous pour une démonstration personnalisée et un devis sur mesure.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Quelle est la durée de l'essai gratuit ?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                L'essai gratuit dure 30 jours, sans engagement et sans carte de crédit requise.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Proposez-vous une formation ?
                            </button>
                        </h2>
                        <div id="faq3" <div class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Oui, nous proposons des formations complètes pour vos équipes,
                                ainsi qu'un support technique dédié.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->include('partials/footer') ?>

<style>
    .page-hero-section {
        padding: 120px 0 80px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .contact-item {
        padding: 20px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    }

    .contact-icon {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(102, 126, 234, 0.1);
        border-radius: 50%;
    }

    .map-placeholder {
        height: 200px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .form-control,
    .form-select {
        border: 1px solid #e2e8f0;
        padding: 0.75rem 1rem;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
    }
</style>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Simulation d'envoi
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;

        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Envoi en cours...';
        submitBtn.disabled = true;

        setTimeout(() => {
            alert('Message envoyé avec succès ! Nous vous recontacterons rapidement.');
            this.reset();
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        }, 2000);
    });
</script>