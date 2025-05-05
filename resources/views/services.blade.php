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
      --primary-blue:rgb(0, 0, 0);
      --secondary-blue: #003a8c;
      --accent-red: #e74c3c;
      --light-gray: #f8f9fa;
      --dark-gray: #2c3e50;
    }
        
        /* Navigation (identique à votre premier code) */
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
        /* Style pour le lien actif */
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
        
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(0, 74, 173, 0.8), rgba(0, 58, 140, 0.8)), 
                        url('/images/Slider.png') no-repeat center center;
            background-size: cover;
            height: 600px;
            color: white;
            padding: 120px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
            animation: fadeInDown 1s ease;
        }
        
        .hero-section p {
            font-size: 1.3rem;
            max-width: 800px;
            margin: 0 auto 30px;
            animation: fadeIn 1.5s ease;
        }
        
        /* Services Section */
        .services-section {
            padding: 80px 0;
            background-color: var(--light-gray);
        }
        
        .section-title {
            color: var(--primary-blue);
            font-weight: 700;
            margin-bottom: 50px;
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 4px;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--accent-red);
            border-radius: 2px;
        }
        
        .service-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            height: 100%;
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border: 1px solid rgba(0, 74, 173, 0.1);
            margin-bottom: 30px;
            overflow: hidden;
            position: relative;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 74, 173, 0.15);
        }
        
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--primary-blue);
        }
        
        .service-icon {
            font-size: 2.5rem;
            color: var(--primary-blue);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        
        .service-card:hover .service-icon {
            transform: scale(1.1);
        }
        
        .service-title {
            color: var(--primary-blue);
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 1.4rem;
        }
        
        .service-description {
            color: #555;
            line-height: 1.7;
            font-size: 1rem;
        }
        
        .footer {
            background: linear-gradient(135deg, var(--primary-color), #003a8c);
            position: relative;
            overflow: hidden;
        }
        
        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--accent-color);
        }
        
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-delay-1 { animation-delay: 0.2s; }
        .animate-delay-2 { animation-delay: 0.4s; }
        .animate-delay-3 { animation-delay: 0.6s; }
        
        /* Responsive */
        @media (max-width: 992px) {
            .hero-section {
                padding: 100px 0;
            }
            
            .hero-section h1 {
                font-size: 2.5rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding: 80px 0;
            }
            
            .hero-section h1 {
                font-size: 2rem;
            }
            
            .hero-section p {
                font-size: 1.1rem;
            }
            
            .services-section {
                padding: 60px 0;
            }
        }
    </style>
</head>
<body>

<!-- Navigation (identique à votre premier code) -->
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
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <br><br><br><br><br>
        <h1 class="animate__animated animate__fadeInDown">Accédez au meilleur de la technologie</h1>
        <p class="animate__animated animate__fadeIn animate__delay-1s">ACHMITECH propose une large gamme de services clés en main. Bénéficiez de l'expertise de nos équipes ou choisissez-nous comme partenaire privilégié pour vos projets.</p>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <h2 class="section-title text-center animate__animated animate__fadeIn" style="color: #3498db;">NOS SERVICES</h2>
        
        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-md-4 animate__animated animate__fadeInUp animate-delay-1">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-digital-tachograph"></i>
                    </div>
                    <h3 class="service-title" style="color: #3498db;">Transformation Digitale</h3>
                    <p class="service-description">
                        ACHMITECH offre des solutions personnalisées qui permettent aux entreprises de transformer leurs processus et technologies, optimisant ainsi la gestion des ressources numériques.
                    </p>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="col-md-4 animate__animated animate__fadeInUp animate-delay-2">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="service-title" style="color: #3498db;">Information Technology Outsourcing</h3>
                    <p class="service-description">
                        Notre équipe allie les connaissances juridiques à l'expertise dans les Technologies de l'Information, ce qui permet de développer un travail conjoint avec d'autres spécialistes du secteur.
                    </p>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="col-md-4 animate__animated animate__fadeInUp animate-delay-3">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3 class="service-title" style="color: #3498db;">Data & Cloud</h3>
                    <p class="service-description">
                        Nous évaluons votre maturité DATA actuelle et identifions vos besoins pour accroître ou maintenir votre avantage concurrentiel.
                    </p>
                </div>
            </div>
            
            <!-- Service 4 -->
            <div class="col-md-4 animate__animated animate__fadeInUp">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="service-title" style="color: #3498db;">Recherche & Innovation</h3>
                    <p class="service-description">
                        L'innovation n'a plus de limites. Nous vous aidons à vous réinventer pour vous orienter dans le monde d'aujourd'hui.
                    </p>
                </div>
            </div>
            
            <!-- Service 5 -->
            <div class="col-md-4 animate__animated animate__fadeInUp">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3 class="service-title" style="color: #3498db;">Business Process Outsourcing</h3>
                    <p class="service-description">
                        Vous cherchez à gagner en agilité et à réduire vos coûts de service ? Nous vous accompagnons pour atteindre l'excellence opérationnelle.
                    </p>
                </div>
            </div>
            
            <!-- Service 6 -->
            <div class="col-md-4 animate__animated animate__fadeInUp">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3 class="service-title" style="color: #3498db;">Agilité & DevOps</h3>
                    <p class="service-description">
                        ACHMITECH accompagne ses clients dans la mise en place d'organisations agiles et dans l'application des concepts DevOps.
                    </p>
                </div>
            </div>
            
            <!-- Service 7 -->
            <div class="col-md-4 animate__animated animate__fadeInUp">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="service-title" style="color: #3498db;">Cybersécurité</h3>
                    <p class="service-description">
                        La transformation dépend d'une sécurité sans faille, voilà pourquoi nous mettons l'étendue de notre expertise pour en faire une force.
                    </p>
                </div>
            </div>
            
            <!-- Service 8 -->
            <div class="col-md-4 animate__animated animate__fadeInUp">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3 class="service-title" style="color: #3498db;">Télécom et Infra des Réseaux</h3>
                    <p class="service-description">
                        ACHMITECH propose des solutions personnalisées qui aident les sociétés de télécommunications à contrôler leurs réseaux.
                    </p>
                </div>
            </div>
            
            <!-- Service 9 -->
            <div class="col-md-4 animate__animated animate__fadeInUp">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="service-title" style="color: #3498db;">Gouvernance & Pilotage</h3>

                    <p class="service-description">
                        Simplifiez l'informatique avec des services de modernisation, de protection et de gestion.
                    </p>
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

<style>
    /* Ajoutez ce style dans votre balise <style> */
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
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
</body>
</html>