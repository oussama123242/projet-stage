<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil - ACHMITECH</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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
<!-- Navbar -->
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

<!-- Hero Section -->
<section class="hero-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <h1 class="mb-4">Une offre de service différenciante</h1>
        <p class="lead">
          Forts de nos années d'expertise dans la conception de stratégies de services digitaux dans les secteurs les plus prometteurs, nous mobilisons des équipes de spécialistes pour intervenir sur l'ensemble du cycle de vie des projets de nos clients à travers le monde.
        </p>
      </div>
      <div class="col-lg-6 text-center">
        <img src="images/A_propos.svg" alt="Services digitaux ACHMITECH" class="img-fluid rounded">
      </div>
    </div>
  </div>
</section>

<!-- Découvrez Achmitech -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center section-title">Découvrez Achmitech, l'expert en transformation digitale</h2>
    <p class="text-center mb-5">
      Notre engagement envers l'innovation et l'efficacité opérationnelle nous distingue sur la scène numérique mondiale.
    </p>
    <div class="row justify-content-center">
      <div class="col-sm-10 col-md-6 col-lg-3">
        <div class="service-card p-4 mx-auto">
          <div class="text-center mb-3">
            <img src="images/client-1.svg" alt="Consulting" class="img-fluid" style="height: 40px;">
          </div>
          <h3 class="service-title text-center mb-3">Consulting</h3>
          <p class="text-center mb-0">
            Nous offrons des conseils et des solutions informatiques sur mesure pour optimiser les opérations de nos clients.
          </p>
        </div>
      </div>
      <div class="col-sm-10 col-md-6 col-lg-3">
        <div class="service-card p-4 mx-auto">
          <div class="text-center mb-3">
            <img src="images/logo.svg" alt="Recrutement" class="img-fluid" style="height: 40px;">
          </div>
          <h3 class="service-title text-center mb-3">Recrutement</h3>
          <p class="text-center mb-0">
            Notre expertise garantit l'identification et l'embauche des talents les plus qualifiés.
          </p>
        </div>
      </div>
      <div class="col-sm-10 col-md-6 col-lg-3">
        <div class="service-card p-4 mx-auto">
          <div class="text-center mb-3">
            <img src="images/client-2.svg" alt="Intérim" class="img-fluid" style="height: 40px;">
          </div>
          <h3 class="service-title text-center mb-3">Intérim</h3>
          <p class="text-center mb-0">
            Nous proposons des services d'intérim flexibles avec un haut niveau de performance.
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
