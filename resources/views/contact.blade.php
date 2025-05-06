<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil - ACHMITECH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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

/* Boon Animation Styles */
.boon-animate {
    animation: boon 1s ease infinite;
}

@keyframes boon {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

.contact-card, .location-card {
    transition: all 0.3s ease;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.contact-card:hover, .location-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.15);
}

.location-badge {
    animation: boon 2s ease infinite;
}

/* Custom animate delays */
.animate-delay-1 { animation-delay: 0.2s; }
.animate-delay-2 { animation-delay: 0.4s; }
.animate-delay-3 { animation-delay: 0.6s; }
    </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="images/logo.svg" alt="ACHMITECH" height="60" class="animate__animated animate__bounceIn">
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

<!-- Contenu principal -->
<main style="padding-top: 80px;">
    <div class="container py-5">
        <!-- Section Contact -->
        <section class="contact-section py-5 animate__animated animate__fadeIn">
            <h2 class="section-title text-center animate__animated animate__bounceIn">@lang('Contactez-nous')</h2>
            <p class="text-center mb-5 animate__animated animate__fadeIn animate__delay-1s">
                @lang('Nous apprécions l\'attention que vous portez à ACHMITECH. Pour toute demande, vous trouverez ci-dessous le bon interlocuteur en fonction de vos besoins.')
            </p>
            
            <div class="row justify-content-center g-4">
                <div class="col-md-6 animate__animated animate__fadeInLeft animate-delay-1">
                    <div class="contact-card p-4 h-100 boon-animate">
                        <h3 class="mb-4"><i class="bi bi-geo-alt-fill me-2 text-primary"></i> @lang('ACHMITECH / SERVICEMPOWER / 2HA JOB')</h3>
                       
                        <p><i class="bi bi-building me-2"></i> @lang('IMM 6 B9, Riad Al Fath, Av. Al Majd, Rabat 10150')</p>
                        <p><i class="bi bi-telephone me-2"></i> +212 5 37 79 04 70</p>
                        <p><i class="bi bi-envelope me-2"></i> contact@achmitech.com</p>
                    </div>
                </div>
                
                <div class="col-md-6 animate__animated animate__fadeInRight animate-delay-1">
                    <div class="contact-card p-4 h-100 boon-animate">
                        <h3 class="mb-4"><i class="bi bi-geo-alt-fill me-2 text-primary"></i> @lang('ADELPHATECH France')</h3>
                        <p><i class="bi bi-building me-2"></i> @lang('11 Rue La Fayette 75009 Paris')</p>
                        <p><i class="bi bi-telephone me-2"></i> +33 1 53 64 68 50</p>
                        <p><i class="bi bi-envelope me-2"></i> contact@adelphatechservices.com</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Implantations -->
        <section class="locations-section py-5">
            <h2 class="section-title text-center animate__animated animate__bounceIn">@lang('NOS IMPLANTATIONS')</h2>
            
            <div class="row g-4 justify-content-center mb-5">
                <div class="col-lg-4 animate__animated animate__fadeInUp animate-delay-1">
                    <div class="location-card text-center p-4 h-100 boon-animate">
                        <div class="location-badge bg-danger text-white px-3 py-1 rounded-pill d-inline-block mb-3">
                            @lang('LAUNCHING SOON')
                        </div>
                        <h3><i class="bi bi-globe-americas me-2"></i> @lang('AMÉRIQUE DU NORD')</h3>
                    </div>
                </div>
                
                <div class="col-lg-4 animate__animated animate__fadeInUp animate-delay-2">
                    <div class="location-card text-center p-4 h-100 boon-animate">
                        <h3><i class="bi bi-geo-alt me-2"></i> @lang('PARIS FRANCE')</h3>
                    </div>
                </div>
                
                <div class="col-lg-4 animate__animated animate__fadeInUp animate-delay-3">
                    <div class="location-card text-center p-4 h-100 boon-animate">
                        <h3><i class="bi bi-geo-alt me-2"></i> @lang('RABAT MAROC')</h3>
                    </div>
                </div>
            </div>
            
            <div class="map-container animate__animated animate__fadeIn animate-delay-3">
                <img src="images/map.png" alt="@lang('Nos implantations')" class="img-fluid w-100 animate__animated animate__pulse animate__infinite animate__slower">
            </div>
        </section>
    </div>
</main>

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

    // Initialize animations when elements are in viewport
    document.addEventListener('DOMContentLoaded', function() {
        // Add scroll animations
        const animateOnScroll = function() {
            const elements = document.querySelectorAll('.animate__animated');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.3;
                
                if (elementPosition < screenPosition) {
                    element.classList.add('animate__fadeIn');
                }
            });
        };
        
        window.addEventListener('scroll', animateOnScroll);
        animateOnScroll(); // Run once on load
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