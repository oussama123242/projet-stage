<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil - ACHMITECH</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
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
      padding: 120px 0;
      background-color: var(--light-gray);
    }

    /* Service Cards */
    .service-card {
      transition: all 0.3s ease;
      border-top: 3px solid var(--primary-blue);
    }

    .service-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 74, 173, 0.1) !important;
    }

    /* Footer Styles */
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
  
  </style>
</head>
<body>
<!-- Navbar -->
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
<br><br><br>
<!-- Hero Section -->
<!-- Hero Section -->
<section class="hero-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <h1 class="mb-4">@lang('Une offre de service différenciante')</h1>
        <p class="lead">
          @lang('Forts de nos années d\'expertise dans la conception de stratégies de services digitaux dans les secteurs les plus prometteurs, nous mobilisons des équipes de spécialistes pour intervenir sur l\'ensemble du cycle de vie des projets de nos clients à travers le monde.')
        </p>
      </div>
      <div class="col-lg-6 text-center">
        <img src="images/A_propos.svg" alt="@lang('Services digitaux ACHMITECH')" class="img-fluid rounded">
      </div>
    </div>
  </div>
</section>

<!-- Découvrez Achmitech -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center section-title animate__animated animate__fadeInDown">@lang('Découvrez Achmitech, l\'expert en transformation digitale')</h2>
    <p class="text-center mb-5 animate__animated animate__fadeIn animate__delay-1s">
      @lang('Notre engagement envers l\'innovation et l\'efficacité opérationnelle nous distingue sur la scène numérique mondiale.')
    </p>
    <div class="row justify-content-center g-4">
      <!-- Card 1 -->
      <div class="col-sm-10 col-md-6 col-lg-3 animate__animated animate__fadeInUp animate__delay-2s">
        <div class="service-card p-4 mx-auto h-100 shadow-sm rounded-3">
          <div class="text-center mb-3">
            <img src="images/client-1.svg" alt="@lang('Consulting')" class="img-fluid" style="height: 40px;">
          </div>
          <h3 class="service-title text-center mb-3 fw-bold">@lang('Consulting')</h3>
          <p class="text-center mb-0">
            @lang('Nous offrons des conseils et des solutions informatiques sur mesure pour optimiser les opérations de nos clients.')
          </p>
        </div>
      </div>
      
      <!-- Card 2 -->
      <div class="col-sm-10 col-md-6 col-lg-3 animate__animated animate__fadeInUp animate__delay-3s">
        <div class="service-card p-4 mx-auto h-100 shadow-sm rounded-3">
          <div class="text-center mb-3">
            <img src="images/logo.svg" alt="@lang('Recrutement')" class="img-fluid" style="height: 40px;">
          </div>
          <h3 class="service-title text-center mb-3 fw-bold">@lang('Recrutement')</h3>
          <p class="text-center mb-0">
            @lang('Notre expertise garantit l\'identification et l\'embauche des talents les plus qualifiés.')
          </p>
        </div>
      </div>
      
      <!-- Card 3 -->
      <div class="col-sm-10 col-md-6 col-lg-3 animate__animated animate__fadeInUp animate__delay-4s">
        <div class="service-card p-4 mx-auto h-100 shadow-sm rounded-3">
          <div class="text-center mb-3">
            <img src="images/client-2.svg" alt="@lang('Intérim')" class="img-fluid" style="height: 40px;">
          </div>
          <h3 class="service-title text-center mb-3 fw-bold">@lang('Intérim')</h3>
          <p class="text-center mb-0">
            @lang('Nous proposons des services d\'intérim flexibles avec un haut niveau de performance.')
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
<script>
  $("#selectLocale").on('change',function(){
    var locale = $(this).val();
    window.location.href="/changeLocale/"+locale;
  })
</script>
</body>
</html>