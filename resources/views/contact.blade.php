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

<!-- Navigation -->
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

<!-- Contenu principal -->
<main style="padding-top: 80px;">
    <div class="container py-5">
        <!-- Section Contact -->
        <section class="contact-section py-5 animate__animated animate__fadeIn">
            <h2 class="section-title text-center animate__animated animate__fadeInDown">Contactez-nous</h2>
            <p class="text-center mb-5 animate__animated animate__fadeIn animate__delay-1s">Nous apprécions l'attention que vous portez à ACHMITECH. Pour toute demande, vous trouverez ci-dessous le bon interlocuteur en fonction de vos besoins.</p>
            
            <div class="row justify-content-center g-4">
                <div class="col-md-6 animate__animated animate__fadeInLeft animate-delay-1">
                    <div class="contact-card p-4 h-100">
                        <h3 class="mb-4"><i class="bi bi-geo-alt-fill me-2 text-primary"></i> ACHMITECH / SERVICEMPOWER / 2HA JOB</h3>
                       
                        <p><i class="bi bi-building me-2"></i> IMM 6 B9, Riad Al Fath, Av. Al Majd, Rabat 10150</p>
                        <p><i class="bi bi-telephone me-2"></i> +212 5 37 79 04 70</p>
                        <p><i class="bi bi-envelope me-2"></i> contact@achmitech.com</p>
                    </div>
                </div>
                
                <div class="col-md-6 animate__animated animate__fadeInRight animate-delay-1">
                    <div class="contact-card p-4 h-100">
                        <h3 class="mb-4"><i class="bi bi-geo-alt-fill me-2 text-primary"></i> ADELPHATECH France</h3>
                        <p><i class="bi bi-building me-2"></i> 11 Rue La Fayette 75009 Paris</p>
                        <p><i class="bi bi-telephone me-2"></i> +33 1 53 64 68 50</p>
                        <p><i class="bi bi-envelope me-2"></i> contact@adelphatechservices.com</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Implantations -->
        <section class="locations-section py-5">
            <h2 class="section-title text-center animate__animated animate__fadeInDown">NOS IMPLANTATIONS</h2>
            
            <div class="row g-4 justify-content-center mb-5">
                <div class="col-lg-4 animate__animated animate__fadeInUp animate-delay-1">
                    <div class="location-card text-center p-4 h-100">
                        <div class="location-badge bg-danger text-white px-3 py-1 rounded-pill d-inline-block mb-3">LAUNCHING SOON</div>
                        <h3><i class="bi bi-globe-americas me-2"></i> AMÉRIQUE DU NORD</h3>
                    </div>
                </div>
                
                <div class="col-lg-4 animate__animated animate__fadeInUp animate-delay-2">
                    <div class="location-card text-center p-4 h-100">
                        <h3><i class="bi bi-geo-alt me-2"></i> PARIS FRANCE</h3>
                    </div>
                </div>
                
                <div class="col-lg-4 animate__animated animate__fadeInUp animate-delay-3">
                    <div class="location-card text-center p-4 h-100">
                        <h3><i class="bi bi-geo-alt me-2"></i> RABAT MAROC</h3>
                    </div>
                </div>
            </div>
            
            <div class="map-container animate__animated animate__fadeIn animate-delay-3">
                <img src="images/map.png" alt="Nos implantations" class="img-fluid w-100">
            </div>
        </section>
    </div>
</main>

<!-- Footer (identique à votre premier code) -->
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