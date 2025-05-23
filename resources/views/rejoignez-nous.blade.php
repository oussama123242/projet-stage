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
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    
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
      .nav-item.active .nav-link {
    color: var(--primary-blue) !important;
    font-weight: 600;
}

.nav-item.active .nav-link::after {
    width: 100% !important;
    background-color: var(--vers) !important;
}

/* Style au clic */
.nav-link:active {
    color: var(--accent-red) !important;
}

.nav-link:active::after {
    background-color: var(--accent-red) !important;
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
            <img src="images/logo.svg" alt="ACHMITECH" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/">@lang("Home")</a></li>
                <li class="nav-item"><a class="nav-link" href="/nos-services">{{trans("Nos Services")}}</a></li>
                <li class="nav-item"><a class="nav-link" href="/a-propos">@lang("A propos")</a></li>
                <li class="nav-item"><a class="nav-link" href="/actualites">@lang("Actualités")</a></li>
                <li class="nav-item"><a class="nav-link" href="/carrieres">@lang("Carrières")</a></li>
                <li class="nav-item"><a class="nav-link" href="/rejoignez-nous">@lang("Rejoignez-nous")</a></li>
            </ul>
            <div class="d-flex align-items-center gap-3">
                <a href="/contact" class="btn btn-primary">@lang("Contactez-nous")</a>
                <select name="selectLocale" id="selectLocale">
              
<option @if(app()->getLocale() == 'fr') selected @endif value="fr">fr</option>
<option @if(app()->getLocale() == 'en') selected @endif value="en">en</option>

</select>
    </div>
</nav>
<br><br><br><br>

<!-- SECTION: Dernières Offres -->
<section class="offres-section py-5" style="background-color: #f8f9fc;">
  <div class="container">
    <h2 class="text-center display-5 fw-bold mb-5 text-primary animate__animated animate__fadeIn">@lang('DERNIÈRES OFFRES')</h2>
    
    <!-- Formulaire qui remplace complètement les offres -->
    <div id="formContainer">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>@lang('Postuler pour'): <span id="offreTitle" class="text-primary"></span></h3>
        <button id="closeForm" class="btn btn-outline-secondary">
          <i class="fas fa-times"></i> @lang('Fermer')
        </button>
      </div>
      
      <form action="{{ route('candidature.store') }}" method="POST" enctype="multipart/form-data" id="multiStepForm">
        @csrf
        <input type="hidden" id="poste" name="poste" value="">
        
        <!-- Étape 1 -->
        <div class="step active" id="step-1">
          <h4>@lang('Informations personnelles')</h4>
          <div class="row mb-3">
            <div class="col">
              <label>@lang('Prénom')</label>
              <input type="text" name="prenom" class="form-control" required>
            </div>
            <div class="col">
              <label>@lang('Nom')</label>
              <input type="text" name="nom" class="form-control" required>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <label>@lang('Email')</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="col">
              <label>@lang('Téléphone')</label>
              <input type="text" name="telephone" class="form-control" required>
            </div>
          </div>

          <div class="mb-3">
            <label>@lang('CV (PDF uniquement)')</label>
            <input type="file" name="cv" class="form-control" required>
          </div>

          <div class="row mb-3">
            <div class="col">
              <label>@lang('Salaire actuel')</label>
              <input type="text" name="salaire_actuel" class="form-control">
            </div>
            <div class="col">
              <label>@lang('Prétention salariale')</label>
              <input type="text" name="pretention" class="form-control">
            </div>
          </div>

          <button type="button" class="btn btn-primary" onclick="nextStep()">@lang('Suivant')</button>
        </div>

        <!-- Étape 2 -->
        <div class="step" id="step-2">
          <h4>@lang('Formation')</h4>
          <div class="row mb-3">
            <div class="col">
              <label>@lang('Diplôme')</label>
              <input type="text" name="diplome" class="form-control" required>
            </div>
            <div class="col">
              <label>@lang('École')</label>
              <input type="text" name="ecole" class="form-control" required>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <label>@lang('Date début formation')</label>
              <input type="date" name="date_debut_formation" class="form-control" required>
            </div>
            <div class="col">
              <label>@lang('Date fin formation')</label>
              <input type="date" name="date_fin_formation" class="form-control" required>
            </div>
          </div>

          <button type="button" class="btn btn-secondary" onclick="prevStep()">@lang('Précédent')</button>
          <button type="button" class="btn btn-primary" onclick="nextStep()">@lang('Suivant')</button>
        </div>

        <!-- Étape 3 -->
        <div class="step" id="step-3">
          <h4>@lang('Expérience')</h4>
          <div class="row mb-3">
            <div class="col">
              <label>@lang('Poste')</label>
              <input type="text" name="poste_experience" class="form-control" required>
            </div>
            <div class="col">
              <label>@lang('Entreprise')</label>
              <input type="text" name="entreprise" class="form-control" required>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <label>@lang('Date début expérience')</label>
              <input type="date" name="date_debut_experience" class="form-control" required>
            </div>
            <div class="col">
              <label>@lang('Date fin expérience')</label>
              <input type="date" name="date_fin_experience" class="form-control" required>
            </div>
          </div>

          <button type="button" class="btn btn-secondary" onclick="prevStep()">@lang('Précédent')</button>
          <button type="submit" class="btn btn-success">@lang('Soumettre la candidature')</button>
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
                <span class="badge-type">@lang('FULL TIME')</span>
                <h5 class="offre-title">@lang('Consultant Path Management')</h5>
                <p class="offre-desc">
                  @lang('Vous êtes passionné par le management de projet et les systèmes complexes ? Intégrez une équipe dynamique pour piloter des solutions de gestion de parcours innovantes.')
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="@lang('Consultant Path Management')">
                  <i class="fas fa-paper-plane me-2"></i> @lang('POSTULER')
                </button>
              </div>
            </li>

            <!-- Offre 2 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-2">
                <span class="badge-type">@lang('FULL TIME')</span>
                <h5 class="offre-title">@lang('Lead Dev VueJS / PHP')</h5>
                <p class="offre-desc">
                  @lang('En tant qu\'expert JS, vous encadrerez le développement front-end VueJS avec des projets backend PHP robustes et évolutifs dans un environnement agile.')
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="@lang('Lead Dev VueJS / PHP')">
                  <i class="fas fa-paper-plane me-2"></i> @lang('POSTULER')
                </button>
              </div>
            </li>

            <!-- Offre 3 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-3">
                <span class="badge-type">@lang('FULL TIME')</span>
                <h5 class="offre-title">@lang('Ingénieur Radio QoS')</h5>
                <p class="offre-desc">
                  @lang('Analyser la qualité du signal radio, mesurer les KPIs et améliorer l\'expérience utilisateur au sein de réseaux mobiles de nouvelle génération.')
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="@lang('Ingénieur Radio QoS')">
                  <i class="fas fa-paper-plane me-2"></i> @lang('POSTULER')
                </button>
              </div>
            </li>

            <!-- Offre 4 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-4">
                <span class="badge-type">@lang('FULL TIME')</span>
                <h5 class="offre-title">@lang('Technicien HelpDesk')</h5>
                <p class="offre-desc">
                  @lang('Premier point de contact pour nos utilisateurs, vous assurez le support technique, la résolution des incidents et l\'assistance à distance.')
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="@lang('Technicien HelpDesk')">
                  <i class="fas fa-paper-plane me-2"></i> @lang('POSTULER')
                </button>
              </div>
            </li>

            <!-- Offre 5 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-5">
                <span class="badge-type">@lang('FULL TIME')</span>
                <h5 class="offre-title">@lang('Ingénieur Réseaux Télécoms')</h5>
                <p class="offre-desc">
                  @lang('Concevez et optimisez des architectures réseaux complexes et performantes pour accompagner la transformation numérique de nos clients.')
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="@lang('Ingénieur Réseaux Télécoms')">
                  <i class="fas fa-paper-plane me-2"></i> @lang('POSTULER')
                </button>
              </div>
            </li>

            <!-- Offre 6 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-1">
                <span class="badge-type">@lang('FULL TIME')</span>
                <h5 class="offre-title">@lang('Développeur Full Stack')</h5>
                <p class="offre-desc">
                  @lang('Rejoignez une équipe agile en tant que développeur Full Stack pour concevoir des applications web scalables en PHP, Laravel et VueJS.')
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="@lang('Développeur Full Stack')">
                  <i class="fas fa-paper-plane me-2"></i> @lang('POSTULER')
                </button>
              </div>
            </li>

            <!-- Offre 7 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-2">
                <span class="badge-type">@lang('FULL TIME')</span>
                <h5 class="offre-title">@lang('Ingénieur Réseau CCIE & JUNIPER Senior')</h5>
                <p class="offre-desc">
                  @lang('Maintenir en condition opérationnelle les fabric CISCO et les infrastructures MPLS JUNIPER, assurer le support N3, optimiser et sécuriser les infrastructures critiques réseau.')
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="@lang('Ingénieur Réseau CCIE & JUNIPER Senior')">
                  <i class="fas fa-paper-plane me-2"></i> @lang('POSTULER')
                </button>
              </div>
            </li>

            <!-- Offre 8 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-3">
                <span class="badge-type">@lang('FULL TIME')</span>
                <h5 class="offre-title">@lang('Développeur Back-End Senior Java / IA')</h5>
                <p class="offre-desc">
                  @lang('Concevoir, développer et maintenir des applications back-end robustes pour les plateformes digitales de Carrefour, tout en intégrant des composants IA.')
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="@lang('Développeur Back-End Senior Java / IA')">
                  <i class="fas fa-paper-plane me-2"></i> @lang('POSTULER')
                </button>
              </div>
            </li>

            <!-- Offre 9 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-4">
                <span class="badge-type">@lang('FULL TIME')</span>
                <h5 class="offre-title">@lang('Développement Mobile – Kotlin')</h5>
                <p class="offre-desc">
                  @lang('Renforcer l\'équipe mobile pour le développement d\'applications Android natives au sein d\'un projet stratégique.')
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="@lang('Développement Mobile – Kotlin')">
                  <i class="fas fa-paper-plane me-2"></i> @lang('POSTULER')
                </button>
              </div>
            </li>

            <!-- Offre 10 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-5">
                <span class="badge-type">@lang('FULL TIME')</span>
                <h5 class="offre-title">@lang('Dev Fullstack Senior Java et VueJS')</h5>
                <p class="offre-desc">
                  @lang('Développement et maintenance des services backend robustes et performants pour Carrefour Assurance, incluant la plateforme de courtage multi-marque/pays et le site assurance.carrefour.fr.')
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="@lang('Dev Fullstack Senior Java et VueJS')">
                  <i class="fas fa-paper-plane me-2"></i> @lang('POSTULER')
                </button>
              </div>
            </li>

            <!-- Offre 11 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-1">
                <span class="badge-type">@lang('FULL TIME')</span>
                <h5 class="offre-title">@lang('Dev Back-end Senior PHP')</h5>
                <p class="offre-desc">
                  @lang('Développement et maintenance des services backend robustes et performants pour Carrefour Assurance, incluant la plateforme de courtage multi-marque/pays et le site assurance.carrefour.fr.')
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="@lang('Dev Back-end Senior PHP')">
                  <i class="fas fa-paper-plane me-2"></i> @lang('POSTULER')
                </button>
              </div>
            </li>

            <!-- Offre 12 -->
            <li class="glide__slide">
              <div class="offre-card shadow-sm animate-slide-in delay-2">
                <span class="badge-type">@lang('FULL TIME')</span>
                <h5 class="offre-title">@lang('Ingénieur(e) Performance Senior')</h5>
                <p class="offre-desc">
                  @lang('Évaluer, tester, analyser et optimiser les performances des applications Cloud pour garantir réactivité et robustesse des livrables. Mise en place de stratégies d\'amélioration continue et intégration de la performance dès la phase de conception.')
                </p>
                <button class="btn btn-primary w-100 postuler-btn" data-offre="@lang('Ingénieur(e) Performance Senior')">
                  <i class="fas fa-paper-plane me-2"></i> @lang('POSTULER')
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
            <p>@lang('Votre partenaire technologique pour l\'innovation et la transformation digitale.')</p>
          </div>
          
          <div class="mt-auto">
            <h5 class="fw-bold mb-3">@lang('NOS FILIALES')</h5>
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
          <h5 class="fw-bold mb-3">@lang('NAVIGATION')</h5>
          <ul class="list-unstyled d-flex flex-column gap-2">
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <a href="/" class="hover-underline">@lang('Accueil')</a>
            </li>
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <a href="/nos-services" class="hover-underline">@lang('Nos Services')</a>
            </li>
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <a href="/a-propos" class="hover-underline">@lang('A propos')</a>
            </li>
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <a href="/actualites" class="hover-underline">@lang('Actualités')</a>
            </li>
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <a href="/carrieres" class="hover-underline">@lang('Carrières')</a>
            </li>
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <a href="/contact" class="hover-underline">@lang('Contact')</a>
            </li>
          </ul>
        </div>
      </div>
      
      <!-- Column 3: Services -->
      <div class="col-lg-3 col-md-6 d-flex flex-column">
        <div class="h-100">
          <h5 class="fw-bold mb-3">@lang('NOS SERVICES')</h5>
          <ul class="list-unstyled d-flex flex-column gap-2">
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <span>@lang('Transformation Digitale')</span>
            </li>
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <span>@lang('IT Outsourcing')</span>
            </li>
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <span>@lang('Data & Cloud')</span>
            </li>
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <span>@lang('Recherche & Innovation')</span>
            </li>
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <span>@lang('Business Process Outsourcing')</span>
            </li>
            <li class="d-flex align-items-center">
              <i class="fas fa-chevron-right me-2" style="width: 16px;"></i>
              <span>@lang('Cybersécurité')</span>
            </li>
          </ul>
        </div>
      </div>
      
      <!-- Column 4: Contact & Social -->
      <div class="col-lg-3 col-md-6 d-flex flex-column">
        <div class="h-100 d-flex flex-column">
          <div class="mb-4">
            <h5 class="fw-bold mb-3">@lang('CONTACTEZ-NOUS')</h5>
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
            <h5 class="fw-bold mb-3">@lang('SUIVEZ-NOUS')</h5>
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
          &copy; 2025 ACHMITECH. @lang('Tous droits réservés.')
        </p>
        <div class="d-flex order-1 order-md-2 mb-3 mb-md-0">
          <a href="#" class="text-white me-3 hover-underline">@lang('Mentions légales')</a>
          <a href="#" class="text-white hover-underline">@lang('Politique de confidentialité')</a>
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

    // Active nav item on click
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function() {
            // Remove active class from all links
            document.querySelectorAll('.nav-link').forEach(l => {
                l.parentElement.classList.remove('active');
            });
            
            // Add active class to clicked link
            this.parentElement.classList.add('active');
        });
    });

    // Set active item based on current page
    document.addEventListener('DOMContentLoaded', function() {
        const currentPath = window.location.pathname;
        document.querySelectorAll('.nav-link').forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.parentElement.classList.add('active');
            }
        });
    });
</script>
<script>
  $("#selectLocale").on('change',function(){
    var locale = $(this).val();
    window.location.href="/changeLocale/"+locale;
  })
</script>
</body>
</html>