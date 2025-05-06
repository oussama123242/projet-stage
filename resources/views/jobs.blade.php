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
    
    <style>
        :root {
            --primary-blue: rgb(0, 0, 0);
            --secondary-blue: #003a8c;
            --accent-red: #e74c3c;
            --light-gray: #f8f9fa;
            --dark-gray: #2c3e50;
        }

        /* Animations personnalisées */
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

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        /* Base */
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            min-height: 100vh;
            overflow-x: hidden;
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
  
        /* Hero section */
        .hero {
            background-image: url('/images/Slider.png');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 150px 0;
            text-align: center;
            animation: fadeIn 1s ease;
        }

        /* Container */
        .main-container {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* Première section */
        .first-section {
            display: flex;
            align-items: center;
            gap: 50px;
            margin-bottom: 60px;
            width: 100%;
            animation: fadeIn 1s ease;
        }

        .first-section img {
            width: 50%;
            max-width: 550px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            object-fit: cover;
            animation: fadeInLeft 1s ease, float 6s ease-in-out infinite;
        }

        .first-section-content {
            flex: 1;
            min-width: 0;
            animation: fadeInRight 1s ease;
        }

        h1 {
            color: #2c3e50;
            font-size: 2.5rem;
            margin-bottom: 20px;
            line-height: 1.3;
            animation: fadeInUp 1s ease;
        }

        .intro {
            font-size: 1.3rem;
            color: #555;
            margin-bottom: 25px;
            font-weight: 500;
            animation: fadeInUp 1s ease 0.2s forwards;
            opacity: 0;
        }

        .contact-button {
            display: inline-block;
            padding: 12px 25px;
            font-size: 1.2rem;
            font-weight: bold;
            color: white;
            background-color: rgb(93, 64, 239);
            border: none;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
            margin-top: 30px;
            animation: fadeInUp 1s ease 0.4s forwards;
            opacity: 0;
            position: relative;
            overflow: hidden;
        }

        .contact-button:hover {
            background-color: rgb(58, 192, 43);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(58, 192, 43, 0.3);
        }

        .contact-button::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 5px;
            height: 5px;
            background: rgba(255, 255, 255, 0.5);
            opacity: 0;
            border-radius: 100%;
            transform: scale(1, 1) translate(-50%);
            transform-origin: 50% 50%;
        }

        .contact-button:focus:not(:active)::after {
            animation: ripple 1s ease-out;
        }

        @keyframes ripple {
            0% {
                transform: scale(0, 0);
                opacity: 0.5;
            }
            100% {
                transform: scale(20, 20);
                opacity: 0;
            }
        }

        /* Deuxième section */
        .second-section {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 30px;
            animation: fadeIn 1s ease;
        }

        .service-card {
            background: white;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            height: 100%;
            transition: all 0.5s ease;
            opacity: 0;
            transform: translateY(30px);
        }

        .service-card.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .service-card:hover {
            transform: translateY(-10px) !important;
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .card-1 { 
            grid-column: span 4;
            animation: fadeInUp 0.8s ease 0.2s forwards;
        }
        .card-2 { 
            grid-column: span 4;
            animation: fadeInUp 0.8s ease 0.4s forwards;
        }
        .card-3 { 
            grid-column: span 4;
            animation: fadeInUp 0.8s ease 0.6s forwards;
        }
        .card-4 { 
            grid-column: span 6;
            animation: fadeInUp 0.8s ease 0.8s forwards;
        }
        .card-5 { 
            grid-column: span 6;
            animation: fadeInUp 0.8s ease 1s forwards;
        }

        h2 {
            color: #3498db;
            font-size: 1.8rem;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .service-card:hover h2 {
            color: var(--primary-blue);
        }

        p {
            margin-bottom: 0;
            font-size: 1.1rem;
            line-height: 1.7;
        }

        /* Icon styles */
        .icon-box {
            font-size: 2.5rem;
            margin-bottom: 20px;
            display: inline-block;
            transition: all 0.5s ease;
        }

        .service-card:hover .icon-box {
            animation: pulse 1s ease;
        }

        .icon-leadership    { color: #e67e22; }
        .icon-collaboration { color: #16a085; }
        .icon-innovation    { color: #9b59b6; }
        .icon-diversity     { color: #2980b9; }

        .card-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: 600;
            color: white;
            background-color: #3498db;
            border-radius: 6px;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .card-button:hover {
            background-color: #2980b9;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(41, 128, 185, 0.3);
        }

        /* Footer styles */
        .footer {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            position: relative;
            overflow: hidden;
            animation: fadeInUp 1s ease;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--accent-red);
            animation: expandLine 1.5s ease;
        }

        @keyframes expandLine {
            from { width: 0; }
            to { width: 100%; }
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
            transition: all 0.3s ease;
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
            transform: translateY(-3px);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .first-section {
                flex-direction: column;
                gap: 30px;
            }

            .first-section img {
                width: 100%;
                max-width: 100%;
                animation: fadeInUp 1s ease, float 6s ease-in-out infinite;
            }

            .first-section-content {
                animation: fadeInUp 1s ease;
            }

            .card-1, .card-2, .card-3, .card-4, .card-5 {
                grid-column: span 12;
            }
        }

        @media (max-width: 768px) {
            .main-container {
                padding: 30px 15px;
            }

            h1 {
                font-size: 2rem;
            }

            .intro {
                font-size: 1.1rem;
            }

            .service-card {
                padding: 25px;
            }
        }
    </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="images/logo.svg" alt="ACHMITECH" height="60" class="animate__animated animate__fadeInLeft">
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

<!-- Main Content -->
<div class="main-container">
    <!-- Première section - Image et texte alignés -->
    <div class="first-section">
        <img src="images/Cariere.svg" alt="Nos collaborateurs">
        <div class="first-section-content">
            <h1 class="animate__animated animate__fadeInUp">Notre force, nos collaborateurs! Lorsque le marché est prêt, nous le sommes aussi.</h1>
            <p class="intro">Nous recherchons des talents qui contribuent activement à l'atteinte des objectifs de nos clients, des meneuses et des meneurs de jeu qui désirent explorer de nouvelles possibilités et collaborer avec une vaste gamme de clients du monde entier dans une variété de secteurs. Développeurs passionnés, agitateurs d'idées, chefs de projets, ingénieurs qualifiés ou stagiaires connectés, Rejoignez-nous !</p>
            <a href="{{ route('contact') }}" class="contact-button animate__animated animate__pulse animate__infinite animate__slower">Contactez-nous</a>
        </div>
    </div>
    
    <!-- Deuxième section - 5 cartes organisées en 3+2 -->
    <div class="second-section">
        <div class="service-card card-1">
            <h2>Ensemble, construisons votre avenir</h2>
            <p>Les quatre piliers qui font d'ACHMITECH un lieu de travail inspirant et stimulant</p>
            <a href="/nos-services" class="card-button">Explorer Nos Services</a>
        </div>

        <div class="service-card card-2">
            <div class="icon-box icon-leadership"><i class="fas fa-user-tie"></i></div>
            <h2>Leadership</h2>
            <p>Que vous commenciez tout juste votre carrière ou que vous souhaitiez la propulser à un niveau supérieur, rejoindre ACHMITECH vous donne la possibilité de vous forger une carrière sur mesure.</p>
        </div>

        <div class="service-card card-3">
            <div class="icon-box icon-collaboration"><i class="fas fa-handshake"></i></div>
            <h2>La collaboration avec les clients</h2>
            <p>Nous aidons nos clients à renforcer l'économie sociale grâce à nos solutions conçues pour répondre aux besoins des générations futures.</p>
        </div>

        <div class="service-card card-4">
            <div class="icon-box icon-innovation"><i class="fas fa-lightbulb"></i></div>
            <h2>La culture de l'innovation</h2>
            <p>Les collaborateurs d'ACHMITECH sont invités à proposer leurs idées pour des solutions plus intelligentes et sont encouragés à initier des pratiques innovantes et efficaces.</p>
        </div>

        <div class="service-card card-5">
            <div class="icon-box icon-diversity"><i class="fas fa-globe"></i></div>
            <h2>La diversité</h2>
            <p>Chez ACHMITECH, nous nous engageons à respecter les différences et à appliquer des pratiques de rémunération équitable ainsi que des programmes d'avantages sociaux.</p>
        </div>
    </div>
</div>

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

    // Animation au défilement
    document.addEventListener('DOMContentLoaded', function() {
        // Animate cards on scroll
        const serviceCards = document.querySelectorAll('.service-card');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });

        serviceCards.forEach(card => {
            observer.observe(card);
        });

        // Animation for contact button
        const contactBtn = document.querySelector('.contact-button');
        contactBtn.addEventListener('mouseenter', () => {
            contactBtn.classList.remove('animate__pulse');
            contactBtn.classList.add('animate__rubberBand');
            setTimeout(() => {
                contactBtn.classList.remove('animate__rubberBand');
                contactBtn.classList.add('animate__pulse');
            }, 1000);
        });

        // Floating animation for the image
        const floatingImg = document.querySelector('.first-section img');
        function floatImage() {
            floatingImg.style.animation = 'float 6s ease-in-out infinite';
        }
        floatImage();
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