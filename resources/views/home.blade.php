<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - ACHMITECH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
     :root {
            --primary-blue: rgb(0, 0, 0);
            --secondary-blue: #003a8c;
            --accent-red: #e74c3c;
            --light-gray: #f8f9fa;
            --dark-gray: #2c3e50;
            --vers:#19b69e;
        } 
         /* Navbar styles */
         .navbar {
            transition: all 0.5s ease;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }

        .navbar.scrolled {
            padding: 10px 0;
            background-color: white !important;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
            animation: fadeInDown 0.5s ease;
        }

        .nav-link {
            position: relative;
            padding: 8px 0;
            margin: 0 10px;
            font-weight: 500;
            transition: all 0.3s ease;
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
        
        .hover-scale {
            transition: transform 0.3s;
        }
        .hover-scale:hover {
            transform: scale(1.2);
        }
        .hover-underline {
            position: relative;
            display: inline-block;
        }
        .hover-underline::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: white;
            transition: width 0.3s;
        }
        .hover-underline:hover::after {
            width: 100%;
        }
        .group:hover .group-hover\:translate-x-1 {
            transform: translateX(0.25rem);
        }
        .group:hover .group-hover\:-translate-y-1 {
            transform: translateY(-0.25rem);
        }
        .transition-all {
            transition-property: all;
        }
        .duration-300 {
            transition-duration: 300ms;
        }
        .scrolled {
            background-color: white !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .scrolled .nav-link {
            color: #333 !important;
        }
        .scrolled .navbar-brand img {
            filter: brightness(0) saturate(100%) invert(0%) sepia(0%) saturate(0%) hue-rotate(0deg) brightness(0%) contrast(100%);
        }
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
      display: inline-flex;
      width: 36px;
      height: 36px;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      background-color: rgba(255, 255, 255, 0.1);
      transition: all 0.3s ease;
    }

    .social-icons a:hover {
      background-color: rgba(255, 255, 255, 0.2);
      transform: translateY(-2px);
    }

    .footer-logo {
      filter: brightness(0) invert(1);
    }

    .subsidiary-img {
      transition: transform 0.3s ease;
    }

    .subsidiary-img:hover {
      transform: scale(1.05);
    }

    /* Responsive adjustments */
    @media (max-width: 991.98px) {
      .hero-section {
        padding: 80px 0;
      }
      
      .footer .col-md-6 {
        margin-bottom: 2rem;
      }
    }
    @media (max-width: 991.98px) {
    .navbar-collapse {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .nav-item.active .nav-link {
        background-color: rgba(0, 0, 0, 0.05);
        border-radius: 4px;
    }
}
    </style>
</head>
<body>

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
<section class="hero-section position-relative" style="background-image: url('images/Slider.png'); background-size: cover; background-position: center; height: 700px;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center text-white">
                <h1 class="display-3 fw-bold mb-3">ACHMITECH</h1>
                <h2 class="display-5 mb-4">Votre Partenaire</h2>
                <p class="display-6 fw-bold mb-5">En Transformation Digitale !</p>
                <a href="/nos-services" class="btn btn-light text-primary fw-bold py-3 px-5 rounded">Découvrir nos services</a>
            </div>
        </div>
    </div>
</section>

<!-- Services Highlights -->
<section class="py-5 bg-white">
    <div class="container py-5">
        <h2 class="text-center display-5 fw-bold mb-5">Chez ACHMITECH, votre avenir vous appartient</h2>
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="bg-light p-4 rounded shadow-sm h-100 position-relative group">
                    
                    <h3 class="text-center fs-4 fw-semibold mb-3">Votre carrière chez ACHMITECH</h3>
                    <p class="text-muted">Expert reconnu de la transformation et de l'innovation digitale, ACHMITECH vous offre la possibilité d'exprimer toutes vos capacités, de relever les défis les plus variés et de participer à l'invention des solutions transformantes de l'avenir.</p>
                    <div class="position-absolute bottom-3 end-3">
                        <a href="/carrieres" class="text-primary transition-all duration-300">
                            <i class="bi bi-arrow-up-right-circle fs-4 group-hover:translate-x-1 group-hover:-translate-y-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="bg-light p-4 rounded shadow-sm h-100 position-relative group">
                    
                    <h3 class="text-center fs-4 fw-semibold mb-3">Ensemble, construisons votre avenir</h3>
                    <p class="text-muted">Retrouvez plus d'information sur notre environnement de travail stimulant et les opportunités que nous proposons à nos collaborateurs pour accélérer leur développement professionnel et personnel. Chez ACHMITECH, nous sommes guidés par 4 pilliers pour bâtir des relations.</p>
                    <div class="position-absolute bottom-3 end-3">
                        <a href="/carrieres" class="text-primary transition-all duration-300">
                            <i class="bi bi-arrow-up-right-circle fs-4 group-hover:translate-x-1 group-hover:-translate-y-1"></i>
                        </a>
                    </div><br><br>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="bg-light p-4 rounded shadow-sm h-100 position-relative group">
                    <h3 class="text-center fs-4 fw-semibold mb-3">La culture d'ACHMITECH</h3>
                    <p class="text-muted">Notre culture est essentielle au succès de nos projets et à la pérennité de notre entreprise. Nous sommes animés par nos valeurs et engagés dans chacune de nos missions. Elles guident nos actions et nous permettent d'aller de l'avant, découvrez nos valeurs.</p>
                    <div class="position-absolute bottom-3 end-3">
                        <a href="/carrieres" class="text-primary transition-all duration-300">
                            <i class="bi bi-arrow-up-right-circle fs-4 group-hover:translate-x-1 group-hover:-translate-y-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Text content column -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="display-6 fw-bold mb-4">Qui sommes-nous ?</h2>
                <p class="text-muted mb-3">ACHMITECH est une entreprise innovante spécialisée dans la transformation digitale des entreprises.</p>
                <p class="text-muted mb-4">Fondée en 2021, nous accompagnons nos clients dans leur transition numérique avec des solutions sur-mesure et des technologies de pointe.</p>
                <a href="/a-propos" class="btn btn-primary px-4 py-2">En savoir plus</a>
            </div>
            
            <!-- Image column -->
            <div class="col-lg-6">
                <div class="d-flex justify-content-center">
                    <img src="images/WhatsApp Image 2025-05-02 à 19.55.25_0eae4795.jpg" 
                         alt="Équipe ACHMITECH" 
                         class="img-fluid rounded shadow"
                         style="max-width: 900px; width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="py-5 bg-white">
    <div class="container py-5">
        <h2 class="text-center display-5 fw-bold mb-5">Nos Dernières Actualités</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="bg-white rounded shadow-sm overflow-hidden">
                    <img src="{{ asset('images/WhatsApp Image 2025-05-02 à 19.55.52_d0d42fec.jpg') }}" alt="Actualité 1" class="img-fluid w-100 " style="height: 300px; object-fit: cover;">
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white rounded shadow-sm overflow-hidden">
                    <img src="{{ asset('images/WhatsApp Image 2025-05-02 à 19.56.19_2e669813.jpg') }}" alt="Actualité 2" class="img-fluid w-100" style="height: 300px; object-fit: cover;">
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white  rounded shadow-sm overflow-hidden">
                    <img src="{{ asset('images/WhatsApp Image 2025-05-02 à 19.56.17_e95dc39a.jpg') }}" alt="Actualité 3" class="img-fluid w-100" style="height: 300px; object-fit: cover;">
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="/actualites" class="btn btn-primary px-4 py-2">Voir toutes les actualités</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container py-5 text-center">
        <h2 class="display-6 fw-bold mb-4">Vous souhaitez rejoindre notre équipe ?</h2>
        <p class="fs-5 mb-5 mx-auto" style="max-width: 600px;">Nous recherchons des talents passionnés pour accompagner notre croissance.</p>
        <a href="/rejoignez-nous" class="btn btn-light text-primary fw-bold px-5 py-3">Voir nos offres d'emploi</a>
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

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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