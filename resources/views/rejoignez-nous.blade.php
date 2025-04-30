<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil - ACHMITECH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <style>
      :root {
          --primary-blue: #004aad;
          --secondary-blue: #003a8c;
          --accent-red: #e74c3c;
          --light-gray: #f8f9fa;
          --dark-gray: #2c3e50;
      }
      
      /* Navbar styles */
      .navbar {
          transition: all 0.3s ease;
          box-shadow: 0 2px 15px rgba(0,0,0,0.1);
      }
      
      .navbar.scrolled {
          padding: 10px 0;
          background-color: white !important;
          box-shadow: 0 4px 20px rgba(0,0,0,0.15);
      }
      
      .nav-link {
          position: relative;
          padding: 8px 0;
          margin: 0 10px;
          font-weight: 500;
      }
      
      .nav-link::after {
          content: '';
          position: absolute;
          width: 0;
          height: 2px;
          bottom: 0;
          left: 0;
          background-color: var(--primary-blue);
          transition: width 0.3s ease;
      }
      
      .nav-link:hover::after {
          width: 100%;
      }
      
      /* Hero section */
      .hero {
          background-image: url('/images/Slider.png');
          background-size: cover;
          background-position: center;
          color: white;
          padding: 150px 0;
          text-align: center;
      }
      
      /* Offres cards */
      .offre-card {
          background: #ffffff;
          border-radius: 16px;
          padding: 24px;
          transition: transform 0.3s ease, box-shadow 0.3s ease;
          border: 1px solid #e3e6f0;
      }
      
      .offre-card:hover {
          transform: translateY(-8px);
          box-shadow: 0 8px 20px rgba(0, 123, 255, 0.2);
      }
      
      .badge-type {
          background-color: #0d6efd;
          color: white;
          padding: 6px 14px;
          border-radius: 20px;
          font-size: 0.8rem;
          display: inline-block;
          margin-bottom: 15px;
      }
      
      .offre-title {
          font-weight: 600;
          color: #343a40;
          font-size: 1.2rem;
          margin-bottom: 10px;
      }
      
      .offre-desc {
          font-size: 0.95rem;
          color: #6c757d;
          margin-bottom: 20px;
      }
      
      /* Form section - initially hidden */
      #formContainer {
          display: none;
          background-color: white;
          border-radius: 10px;
          box-shadow: 0 5px 15px rgba(0,0,0,0.1);
          padding: 30px;
          margin: 30px 0;
          animation: fadeIn 0.3s ease-out;
      }
      
      @keyframes fadeIn {
          from { opacity: 0; transform: translateY(-20px); }
          to { opacity: 1; transform: translateY(0); }
      }
      
      /* Footer styles */
      .footer {
          background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
          position: relative;
          overflow: hidden;
      }
      
      .footer::before {
          content: '';
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 4px;
          background: var(--accent-red);
      }
      
      .hover-underline {
          position: relative;
          transition: all 0.3s ease;
      }
      
      .hover-underline:hover {
          color: #fff !important;
      }
      
      .hover-underline::after {
          content: '';
          position: absolute;
          width: 0;
          height: 1px;
          bottom: 0;
          left: 0;
          background-color: #fff;
          transition: width 0.3s ease;
      }
      
      .hover-underline:hover::after {
          width: 100%;
      }
      
      .hover-scale {
          transition: transform 0.3s ease;
      }
      
      .hover-scale:hover {
          transform: scale(1.2);
          color: var(--accent-red) !important;
      }
      
      .social-icons a {
          display: inline-block;
          width: 36px;
          height: 36px;
          line-height: 36px;
          text-align: center;
          border-radius: 50%;
          background-color: rgba(255, 255, 255, 0.1);
          transition: all 0.3s ease;
      }
      
      .social-icons a:hover {
          background-color: rgba(255, 255, 255, 0.2);
      }
    </style>
</head>
<body>

<!-- شريط التنقل -->
<nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="images/logo.svg" alt="ACHMITECH" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="/">Accueil</a></li>
        <li class="nav-item"><a class="nav-link" href="/nos-services">Nos Services</a></li>
        <li class="nav-item"><a class="nav-link" href="/a-propos">A propos</a></li>
        <li class="nav-item"><a class="nav-link" href="/actualites">Actualités</a></li>
        <li class="nav-item"><a class="nav-link" href="/carrieres">Carrières</a></li>
        <li class="nav-item"><a class="nav-link" href="/rejoignez-nous">Rejoignez-nous</a></li>
      </ul>
      <div class="d-flex align-items-center gap-3">
        <a href="/contact" class="nav-link text-dark">Contactez-nous</a>
        <div class="dropdown">
          <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
            {{ strtoupper(app()->getLocale()) }}
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="{{ url('fr') }}">FR</a></li>
            <li><a class="dropdown-item" href="{{ url('en') }}">EN</a></li>
            <li><a class="dropdown-item" href="{{ url('ar') }}">AR</a></li>
            <li><a class="dropdown-item" href="{{ url('de') }}">DE</a></li>
            <li><a class="dropdown-item" href="{{ url('it') }}">IT</a></li>
            <li><a class="dropdown-item" href="{{ url('es') }}">ES</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>

<!-- قسم البطل -->
<section class="hero">
  <div class="container">
   
  </div>
</section>

<!-- SECTION: Dernières Offres -->
<section class="offres-section py-5" style="background-color: #f8f9fc;">
  <div class="container">
    <h2 class="text-center display-5 fw-bold mb-5 text-primary">DERNIÈRES OFFRES</h2>
    
    <!-- Formulaire qui remplace complètement les offres -->
    <div id="formContainer">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Postuler pour: <span id="offreTitle" class="text-primary"></span></h3>
        <button id="closeForm" class="btn btn-outline-secondary">
          <i class="fas fa-times"></i> Fermer
        </button>
      </div>
      
      <form action="{{ route('candidature.store') }}" method="POST" enctype="multipart/form-data" id="multiStepForm">
        @csrf
        <input type="hidden" id="poste" name="poste" value="">
        
        <!-- Étape 1 -->
        <div class="step active" id="step-1">
          <h4>Informations personnelles</h4>
          <div class="row mb-3">
            <div class="col">
              <label>Prénom</label>
              <input type="text" name="prenom" class="form-control" required>
            </div>
            <div class="col">
              <label>Nom</label>
              <input type="text" name="nom" class="form-control" required>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <label>Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="col">
              <label>Téléphone</label>
              <input type="text" name="telephone" class="form-control" required>
            </div>
          </div>

          <div class="mb-3">
            <label>CV (PDF uniquement)</label>
            <input type="file" name="cv" class="form-control" required>
          </div>

          <div class="row mb-3">
            <div class="col">
              <label>Salaire actuel</label>
              <input type="text" name="salaire_actuel" class="form-control">
            </div>
            <div class="col">
              <label>Prétention salariale</label>
              <input type="text" name="pretention" class="form-control">
            </div>
          </div>

          <button type="button" class="btn btn-primary" onclick="nextStep()">Suivant</button>
        </div>

        <!-- Étape 2 -->
        <div class="step" id="step-2">
          <h4>Formation</h4>
          <div class="row mb-3">
            <div class="col">
              <label>Diplôme</label>
              <input type="text" name="diplome" class="form-control" required>
            </div>
            <div class="col">
              <label>École</label>
              <input type="text" name="ecole" class="form-control" required>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <label>Date début formation</label>
              <input type="date" name="date_debut_formation" class="form-control" required>
            </div>
            <div class="col">
              <label>Date fin formation</label>
              <input type="date" name="date_fin_formation" class="form-control" required>
            </div>
          </div>

          <button type="button" class="btn btn-secondary" onclick="prevStep()">Précédent</button>
          <button type="button" class="btn btn-primary" onclick="nextStep()">Suivant</button>
        </div>

        <!-- Étape 3 -->
        <div class="step" id="step-3">
          <h4>Expérience</h4>
          <div class="row mb-3">
            <div class="col">
              <label>Poste</label>
              <input type="text" name="poste_experience" class="form-control" required>
            </div>
            <div class="col">
              <label>Entreprise</label>
              <input type="text" name="entreprise" class="form-control" required>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <label>Date début expérience</label>
              <input type="date" name="date_debut_experience" class="form-control" required>
            </div>
            <div class="col">
              <label>Date fin expérience</label>
              <input type="date" name="date_fin_experience" class="form-control" required>
            </div>
          </div>

          <button type="button" class="btn btn-secondary" onclick="prevStep()">Précédent</button>
          <button type="submit" class="btn btn-success">Soumettre la candidature</button>
        </div>
      </form>
    </div>
    
    <!-- Les offres d'emploi (section qui sera cachée quand le formulaire est visible) -->
    <div class="row g-4" id="offresGrid">
      <!-- Offre 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="offre-card shadow-sm animate__animated animate__fadeInUp">
          <span class="badge-type">FULL TIME</span>
          <h5 class="offre-title">Consultant Path Management</h5>
          <p class="offre-desc">
            Vous êtes passionné par le management de projet et les systèmes complexes ? Intégrez une équipe dynamique pour piloter des solutions de gestion de parcours innovantes.
          </p>
          <button class="btn btn-primary w-100 postuler-btn" data-offre="Consultant Path Management">
            <i class="fas fa-paper-plane me-2"></i> POSTULER
          </button>
        </div>
      </div>

      <!-- Offre 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="offre-card shadow-sm animate__animated animate__fadeInUp animate__delay-1s">
          <span class="badge-type">FULL TIME</span>
          <h5 class="offre-title">Lead Dev VueJS / PHP</h5>
          <p class="offre-desc">
            En tant qu'expert JS, vous encadrerez le développement front-end VueJS avec des projets backend PHP robustes et évolutifs dans un environnement agile.
          </p>
          <button class="btn btn-primary w-100 postuler-btn" data-offre="Lead Dev VueJS / PHP">
            <i class="fas fa-paper-plane me-2"></i> POSTULER
          </button>
        </div>
      </div>

      <!-- Offre 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="offre-card shadow-sm animate__animated animate__fadeInUp animate__delay-2s">
          <span class="badge-type">FULL TIME</span>
          <h5 class="offre-title">Ingénieur Radio QoS</h5>
          <p class="offre-desc">
            Analyser la qualité du signal radio, mesurer les KPIs et améliorer l'expérience utilisateur au sein de réseaux mobiles de nouvelle génération.
          </p>
          <button class="btn btn-primary w-100 postuler-btn" data-offre="Ingénieur Radio QoS">
            <i class="fas fa-paper-plane me-2"></i> POSTULER
          </button>
        </div>
      </div>

      <!-- Offre 4 -->
      <div class="col-md-6 col-lg-4">
        <div class="offre-card shadow-sm animate__animated animate__fadeInUp">
          <span class="badge-type">FULL TIME</span>
          <h5 class="offre-title">Technicien HelpDesk</h5>
          <p class="offre-desc">
            Premier point de contact pour nos utilisateurs, vous assurez le support technique, la résolution des incidents et l'assistance à distance.
          </p>
          <button class="btn btn-primary w-100 postuler-btn" data-offre="Technicien HelpDesk">
            <i class="fas fa-paper-plane me-2"></i> POSTULER
          </button>
        </div>
      </div>

      <!-- Offre 5 -->
      <div class="col-md-6 col-lg-4">
        <div class="offre-card shadow-sm animate__animated animate__fadeInUp animate__delay-1s">
          <span class="badge-type">FULL TIME</span>
          <h5 class="offre-title">Ingénieur Réseaux Télécoms</h5>
          <p class="offre-desc">
            Concevez et optimisez des architectures réseaux complexes et performantes pour accompagner la transformation numérique de nos clients.
          </p>
          <button class="btn btn-primary w-100 postuler-btn" data-offre="Ingénieur Réseaux Télécoms">
            <i class="fas fa-paper-plane me-2"></i> POSTULER
          </button>
        </div>
      </div>

      <!-- Offre 6 -->
      <div class="col-md-6 col-lg-4">
        <div class="offre-card shadow-sm animate__animated animate__fadeInUp animate__delay-2s">
          <span class="badge-type">FULL TIME</span>
          <h5 class="offre-title">Développeur Full Stack</h5>
          <p class="offre-desc">
            Rejoignez une équipe agile en tant que développeur Full Stack pour concevoir des applications web scalables en PHP, Laravel et VueJS.
          </p>
          <button class="btn btn-primary w-100 postuler-btn" data-offre="Développeur Full Stack">
            <i class="fas fa-paper-plane me-2"></i> POSTULER
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- تذييل الصفحة -->
<footer class="footer text-white pt-5 pb-4">
    <div class="container">
        <div class="row g-4">
            <!-- Colonne Logo et Filiales -->
            <div class="col-lg-3 col-md-6 text-center text-md-start">
                <img src="images/logo-Achmitech-Blanc.svg" alt="ACHMITECH" height="60" class="mb-3">
                <p class="mb-3">Votre partenaire technologique pour l'innovation et la transformation digitale.</p>
                
                <h5 class="fw-bold mb-3">NOS FILIALES</h5>
                <div class="d-flex flex-wrap justify-content-center justify-content-md-start gap-3">
                    <img src="images/Service-Empower-Blanc.png" alt="SERVICE EMPOWER" height="30">
                    <img src="images/2HAJOB-Blanc.png" alt="2HAJOB" height="30">
                </div>
            </div>
            
            <!-- Colonne Liens rapides -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold mb-3">NAVIGATION</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/" class="text-white text-decoration-none hover-underline">Accueil</a></li>
                    <li class="mb-2"><a href="/nos-services" class="text-white text-decoration-none hover-underline">Nos Services</a></li>
                    <li class="mb-2"><a href="/a-propos" class="text-white text-decoration-none hover-underline">A propos</a></li>
                    <li class="mb-2"><a href="/actualites" class="text-white text-decoration-none hover-underline">Actualités</a></li>
                    <li class="mb-2"><a href="/carrieres" class="text-white text-decoration-none hover-underline">Carrières</a></li>
                    <li class="mb-2"><a href="/contact" class="text-white text-decoration-none hover-underline">Contact</a></li>
                </ul>
            </div>
            
            <!-- Colonne Services -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold mb-3">NOS SERVICES</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-chevron-right me-2 small"></i> Transformation Digitale</li>
                    <li class="mb-2"><i class="fas fa-chevron-right me-2 small"></i> IT Outsourcing</li>
                    <li class="mb-2"><i class="fas fa-chevron-right me-2 small"></i> Data & Cloud</li>
                    <li class="mb-2"><i class="fas fa-chevron-right me-2 small"></i> Recherche & Innovation</li>
                    <li class="mb-2"><i class="fas fa-chevron-right me-2 small"></i> Business Process Outsourcing</li>
                    <li class="mb-2"><i class="fas fa-chevron-right me-2 small"></i> Cybersécurité</li>
                </ul>
            </div>
            
            <!-- Colonne Contact -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold mb-3">CONTACTEZ-NOUS</h5>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fas fa-map-marker-alt me-2"></i> Adresse, Ville, Pays</li>
                    <li class="mb-3"><i class="fas fa-phone-alt me-2"></i> +212 5XX XXX XXX</li>
                    <li class="mb-3"><i class="fas fa-envelope me-2"></i> contact@achmitech.com</li>
                </ul>
                
                <h5 class="fw-bold mb-3">SUIVEZ-NOUS</h5>
                <div class="social-icons">
                    <a href="#" class="text-white me-3"><i class="bi bi-linkedin fs-5 hover-scale"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-facebook fs-5 hover-scale"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-twitter-x fs-5 hover-scale"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-instagram fs-5 hover-scale"></i></a>
                </div>
            </div>
        </div>
        
        <div class="border-top border-light mt-4 pt-4 d-flex flex-column flex-md-row justify-content-between align-items-center">
            <p class="mb-3 mb-md-0">&copy; 2025 ACHMITECH. Tous droits réservés.</p>
            <div class="d-flex">
                <a href="#" class="text-white text-decoration-none me-3 hover-underline">Mentions légales</a>
                <a href="#" class="text-white text-decoration-none hover-underline">Politique de confidentialité</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Gestion du formulaire multi-étapes
    let currentStep = 1;
    
    function showStep(step) {
        document.querySelectorAll('.step').forEach((el) => {
            el.classList.remove('active');
            el.style.display = 'none';
        });
        document.getElementById('step-' + step).classList.add('active');
        document.getElementById('step-' + step).style.display = 'block';
        currentStep = step;
    }
    
    function nextStep() {
        if (currentStep < 3) {
            currentStep++;
            showStep(currentStep);
        }
    }
    
    function prevStep() {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
        }
    }
    
    // Initialiser les étapes
    document.addEventListener('DOMContentLoaded', function() {
        showStep(1);
        document.getElementById('formContainer').style.display = 'none';
    });
    
    // Gestion de l'affichage du formulaire
    document.querySelectorAll('.postuler-btn').forEach(button => {
        button.addEventListener('click', function() {
            const offreTitle = this.getAttribute('data-offre');
            document.getElementById('offreTitle').textContent = offreTitle;
            document.getElementById('poste').value = offreTitle;
            
            // Afficher le formulaire et cacher les offres
            document.getElementById('formContainer').style.display = 'block';
            document.getElementById('offresGrid').style.display = 'none';
            
            // Scroll vers le haut de la section
            document.querySelector('.offres-section').scrollIntoView({ behavior: 'smooth' });
            
            // Réinitialiser le formulaire
            document.getElementById('multiStepForm').reset();
            currentStep = 1;
            showStep(1);
        });
    });
    
    // Fermer le formulaire
    document.getElementById('closeForm').addEventListener('click', function() {
        document.getElementById('formContainer').style.display = 'none';
        document.getElementById('offresGrid').style.display = 'grid';
    });
    
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>

</body>
</html>