<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil - ACHMITECH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.theme.min.css">
    
    <style>
      :root {
      --primary-blue:rgb(0, 0, 0);
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
          height: 100%;
          margin: 0 10px;
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
      
      /* Slider styles */
      .glide__slides {
          padding: 20px 0;
      }
      
      .glide__slide {
          transition: transform 0.3s ease;
      }
      
      .glide__slide--active {
          transform: scale(1.02);
      }
      
      .glide__arrows {
          position: relative;
      }
      
      .glide__arrow {
          position: absolute;
          top: 50%;
          transform: translateY(-50%);
          background: rgba(255,255,255,0.8);
          border: none;
          width: 40px;
          height: 40px;
          border-radius: 50%;
          box-shadow: 0 2px 10px rgba(0,0,0,0.1);
          transition: all 0.3s ease;
      }
      
      .glide__arrow:hover {
          background: var(--primary-blue);
          color: white;
      }
      
      .glide__arrow--left {
          left: -20px;
      }
      
      .glide__arrow--right {
          right: -20px;
      }
      
      /* Bullet indicators */
      .glide__bullets {
          display: flex;
          justify-content: center;
          margin-top: 20px;
      }
      
      .glide__bullet {
          width: 12px;
          height: 12px;
          background: rgba(0,0,0,0.2);
          border-radius: 50%;
          margin: 0 5px;
          border: none;
          transition: all 0.3s ease;
      }
      
      .glide__bullet--active {
          background: var(--primary-blue);
          transform: scale(1.2);
      }
      
      /* Animation for cards */
      @keyframes slideIn {
          from {
              opacity: 0;
              transform: translateY(30px);
          }
          to {
              opacity: 1;
              transform: translateY(0);
          }
      }
      
      .animate-slide-in {
          animation: slideIn 0.6s ease-out forwards;
      }
      
      /* Delay classes for staggered animation */
      .delay-1 { animation-delay: 0.1s; }
      .delay-2 { animation-delay: 0.2s; }
      .delay-3 { animation-delay: 0.3s; }
      .delay-4 { animation-delay: 0.4s; }
      .delay-5 { animation-delay: 0.5s; }
    </style>
</head>
<body>

<!-- شريط التنقل -->
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
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
                <a href="/contact" class="btn btn-primary">Contactez-nous</a>
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                        FR
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">FR</a></li>
                        <li><a class="dropdown-item" href="#">EN</a></li>
                        <li><a class="dropdown-item" href="#">AR</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<br><br><br><br>

<!-- SECTION: Dernières Offres -->
<section class="offres-section py-5" style="background-color: #f8f9fc;">
  <div class="container">
    <h2 class="text-center display-5 fw-bold mb-5 text-primary animate__animated animate__fadeIn">DERNIÈRES OFFRES</h2>
    
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
    
    <!-- Slider pour les offres d'emploi -->
    <div id="offresGrid">
      <div class="glide">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <!-- Offre 1 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-1">
                <span class="badge-type">FULL TIME</span>
                <h5 class="offre-title">Consultant Path Management</h5>
                <p class="offre-desc">
                  Vous êtes passionné par le management de projet et les systèmes complexes ? Intégrez une équipe dynamique pour piloter des solutions de gestion de parcours innovantes.
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="Consultant Path Management">
                  <i class="fas fa-paper-plane me-2"></i> POSTULER
                </button>
              </div>
            </li>

            <!-- Offre 2 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-2">
                <span class="badge-type">FULL TIME</span>
                <h5 class="offre-title">Lead Dev VueJS / PHP</h5>
                <p class="offre-desc">
                  En tant qu'expert JS, vous encadrerez le développement front-end VueJS avec des projets backend PHP robustes et évolutifs dans un environnement agile.
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="Lead Dev VueJS / PHP">
                  <i class="fas fa-paper-plane me-2"></i> POSTULER
                </button>
              </div>
            </li>

            <!-- Offre 3 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-3">
                <span class="badge-type">FULL TIME</span>
                <h5 class="offre-title">Ingénieur Radio QoS</h5>
                <p class="offre-desc">
                  Analyser la qualité du signal radio, mesurer les KPIs et améliorer l'expérience utilisateur au sein de réseaux mobiles de nouvelle génération.
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="Ingénieur Radio QoS">
                  <i class="fas fa-paper-plane me-2"></i> POSTULER
                </button>
              </div>
            </li>

            <!-- Offre 4 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-4">
                <span class="badge-type">FULL TIME</span>
                <h5 class="offre-title">Technicien HelpDesk</h5>
                <p class="offre-desc">
                  Premier point de contact pour nos utilisateurs, vous assurez le support technique, la résolution des incidents et l'assistance à distance.
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="Technicien HelpDesk">
                  <i class="fas fa-paper-plane me-2"></i> POSTULER
                </button>
              </div>
            </li>

            <!-- Offre 5 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-5">
                <span class="badge-type">FULL TIME</span>
                <h5 class="offre-title">Ingénieur Réseaux Télécoms</h5>
                <p class="offre-desc">
                  Concevez et optimisez des architectures réseaux complexes et performantes pour accompagner la transformation numérique de nos clients.
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="Ingénieur Réseaux Télécoms">
                  <i class="fas fa-paper-plane me-2"></i> POSTULER
                </button>
              </div>
            </li>

            <!-- Offre 6 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-1">
                <span class="badge-type">FULL TIME</span>
                <h5 class="offre-title">Développeur Full Stack</h5>
                <p class="offre-desc">
                  Rejoignez une équipe agile en tant que développeur Full Stack pour concevoir des applications web scalables en PHP, Laravel et VueJS.
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="Développeur Full Stack">
                  <i class="fas fa-paper-plane me-2"></i> POSTULER
                </button>
              </div>
            </li>

            <!-- Offre 7 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-2">
                <span class="badge-type">FULL TIME</span>
                <h5 class="offre-title">Ingénieur Réseau CCIE & JUNIPER Senior</h5>
                <p class="offre-desc">
                  Maintenir en condition opérationnelle les fabric CISCO et les infrastructures MPLS JUNIPER, assurer le support N3, optimiser et sécuriser les infrastructures critiques réseau.
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="Ingénieur Réseau CCIE & JUNIPER Senior">
                  <i class="fas fa-paper-plane me-2"></i> POSTULER
                </button>
              </div>
            </li>

            <!-- Offre 8 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-3">
                <span class="badge-type">FULL TIME</span>
                <h5 class="offre-title">Développeur Back-End Senior Java / IA</h5>
                <p class="offre-desc">
                  Concevoir, développer et maintenir des applications back-end robustes pour les plateformes digitales de Carrefour, tout en intégrant des composants IA.
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="Développeur Back-End Senior Java / IA">
                  <i class="fas fa-paper-plane me-2"></i> POSTULER
                </button>
              </div>
            </li>

            <!-- Offre 9 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-4">
                <span class="badge-type">FULL TIME</span>
                <h5 class="offre-title">Développement Mobile – Kotlin</h5>
                <p class="offre-desc">
                  Renforcer l'équipe mobile pour le développement d'applications Android natives au sein d'un projet stratégique.
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="Développement Mobile – Kotlin">
                  <i class="fas fa-paper-plane me-2"></i> POSTULER
                </button>
              </div>
            </li>

            <!-- Offre 10 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-5">
                <span class="badge-type">FULL TIME</span>
                <h5 class="offre-title">Dev Fullstack Senior Java et VueJS</h5>
                <p class="offre-desc">
                  Développement et maintenance des services backend robustes et performants pour Carrefour Assurance, incluant la plateforme de courtage multi-marque/pays et le site assurance.carrefour.fr.
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="Dev Fullstack Senior Java et VueJS">
                  <i class="fas fa-paper-plane me-2"></i> POSTULER
                </button>
              </div>
            </li>

            <!-- Offre 11 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-1">
                <span class="badge-type">FULL TIME</span>
                <h5 class="offre-title">Dev Back-end Senior PHP</h5>
                <p class="offre-desc">
                  Développement et maintenance des services backend robustes et performants pour Carrefour Assurance, incluant la plateforme de courtage multi-marque/pays et le site assurance.carrefour.fr.
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="Dev Back-end Senior PHP">
                  <i class="fas fa-paper-plane me-2"></i> POSTULER
                </button>
              </div>
            </li>

            <!-- Offre 12 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-2">
                <span class="badge-type">FULL TIME</span>
                <h5 class="offre-title">Ingénieur(e) Performance Senior</h5>
                <p class="offre-desc">
                  Évaluer, tester, analyser et optimiser les performances des applications Cloud pour garantir réactivité et robustesse des livrables. Mise en place de stratégies d'amélioration continue et intégration de la performance dès la phase de conception.
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="Ingénieur(e) Performance Senior">
                  <i class="fas fa-paper-plane me-2"></i> POSTULER
                </button>
              </div>
            </li>
          </ul>
        </div>
        
        <!-- Contrôles du slider -->
        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
            <i class="fas fa-chevron-left"></i>
          </button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
        
        <!-- Indicateurs de position -->
        <div class="glide__bullets" data-glide-el="controls[nav]">
          <button class="glide__bullet" data-glide-dir="=0"></button>
          <button class="glide__bullet" data-glide-dir="=1"></button>
          <button class="glide__bullet" data-glide-dir="=2"></button>
          <button class="glide__bullet" data-glide-dir="=3"></button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer text-white pt-5 pb-4">
  <div class="container">
    <div class="row g-4">
      <!-- Column 1: Logo & Subsidiaries -->
      <div class="col-lg-3 col-md-6 d-flex flex-column">
        <div class="d-flex flex-column text-center text-md-start h-100">
          <div class="mb-4">
            <img src="images/logo-Achmitech-Blanc.svg" alt="ACHMITECH" class="footer-logo mb-3" height="50">
            <p>Votre partenaire technologique pour l'innovation et la transformation digitale.</p>
          </div>
          
          <div class="mt-auto">
            <h5 class="fw-bold mb-3">NOS FILIALES</h5>
            <div class="d-flex flex-wrap justify-content-center justify-content-md-start gap-3">
              <img src="images/Service-Empower-Blanc.png" alt="SERVICE EMPOWER" class="subsidiary-img" height="25">
              <img src="images/2HAJOB-Blanc.png" alt="2HAJOB" class="subsidiary-img" height="25">
            </div>
          </div>
        </div>
      </div>
      
      <!-- Column 2: Navigation -->
      <div class="col-lg-3 col-md-6 d-flex flex-column">
        <div class="h-100">
          <h5 class="fw-bold mb-3">NAVIGATION</h5>
          <ul class="list-unstyled d-flex flex-column gap-2">
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <a href="/" class="hover-underline">Accueil</a>
            </li>
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <a href="/nos-services" class="hover-underline">Nos Services</a>
            </li>
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <a href="/a-propos" class="hover-underline">A propos</a>
            </li>
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <a href="/actualites" class="hover-underline">Actualités</a>
            </li>
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <a href="/carrieres" class="hover-underline">Carrières</a>
            </li>
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <a href="/contact" class="hover-underline">Contact</a>
            </li>
          </ul>
        </div>
      </div>
      
      <!-- Column 3: Services -->
      <div class="col-lg-3 col-md-6 d-flex flex-column">
        <div class="h-100">
          <h5 class="fw-bold mb-3">NOS SERVICES</h5>
          <ul class="list-unstyled d-flex flex-column gap-2">
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <span>Transformation Digitale</span>
            </li>
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <span>IT Outsourcing</span>
            </li>
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <span>Data & Cloud</span>
            </li>
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <span>Recherche & Innovation</span>
            </li>
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <span>Business Process Outsourcing</span>
            </li>
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <span>Cybersécurité</span>
            </li>
          </ul>
        </div>
      </div>
      
      <!-- Column 4: Contact & Social -->
      <div class="col-lg-3 col-md-6 d-flex flex-column">
        <div class="h-100 d-flex flex-column">
          <div class="mb-4">
            <h5 class="fw-bold mb-3">CONTACTEZ-NOUS</h5>
            <ul class="list-unstyled d-flex flex-column gap-3">
              <li class="d-flex">
                <i class="fas fa-map-marker-alt me-2 mt-1" style="width: 16px;"></i>
                <span>IMM 6 B9, Riad Al Fath, Av. Al Majd, Rabat 10150</span>
              </li>
              <li class="d-flex align-items-center">
                <i class="fas fa-phone-alt me-2" style="width: 16px;"></i>
                <span>+212 5 37 79 04 70</span>
              </li>
              <li class="d-flex align-items-center">
                <i class="fas fa-envelope me-2" style="width: 16px;"></i>
                <span>contact@achmitech.com</span>
              </li>
            </ul>
          </div>
          
          <div class="mt-auto">
            <h5 class="fw-bold mb-3">SUIVEZ-NOUS</h5>
            <div class="social-icons d-flex">
              <a href="https://www.linkedin.com/company/achmitech" class="hover-scale">
                <i class="bi bi-linkedin fs-5"></i>
              </a>
              <a href="https://www.facebook.com/achmitech" class="hover-scale">
                <i class="bi bi-facebook fs-5"></i>
              </a>
              <a href="https://www.instagram.com/achmitech_official" class="hover-scale">
                <i class="bi bi-instagram fs-5"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Footer Bottom -->
    <div class="border-top border-secondary mt-4 pt-4">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
        <p class="mb-3 mb-md-0 order-2 order-md-1 text-center text-md-start">
          &copy; 2025 ACHMITECH. Tous droits réservés.
        </p>
        <div class="d-flex order-1 order-md-2 mb-3 mb-md-0">
          <a href="#" class="text-white me-3 hover-underline">Mentions légales</a>
          <a href="#" class="text-white hover-underline">Politique de confidentialité</a>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/glide.min.js"></script>
<script>
    // Initialisation du slider
    new Glide('.glide', {
        type: 'carousel',
        perView: 3,
        gap: 20,
        autoplay: 3000,
        hoverpause: true,
        breakpoints: {
            992: {
                perView: 2
            },
            768: {
                perView: 1
            }
        }
    }).mount();
    
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
        document.getElementById('offresGrid').style.display = 'block';
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
    
    // Animation des cartes au chargement
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.animate-slide-in');
        cards.forEach((card, index) => {
            // Délai progressif pour l'animation en cascade
            card.style.animationDelay = `${index * 0.1}s`;
        });
    });
</script>

</body>
</html>