<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil - ACHMITECH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    
    <style>
        :root {
    --primary-blue: #004aad;
    --secondary-blue: #003a8c;
    --accent-red: #e74c3c;
    --light-gray: #f8f9fa;
    --dark-gray: #2c3e50;
}
        /* تخصيص الأنماط لتتناسب مع تصميم ACHMITECH */
        .hero {
            background-image: url('/images/Slider.png'); /* استبدل بالصورة المناسبة */
            background-size: cover;
            background-position: center;
            color: white;
            padding: 150px 0;
            text-align: center;
        }
        .services, .about, .news {
            padding: 60px 0;
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


 

    <div class="main-container">
        <!-- Première section - Image et texte alignés -->
        <div class="first-section">
            <img src="images/Cariere.svg" alt="Nos collaborateurs">
            <div class="first-section-content">
                <h1>Notre force, nos collaborateurs! Lorsque le marché est prêt, nous le sommes aussi.</h1>
                <p>Nous recherchons des talents qui contribuent activement à l'atteinte des objectifs de nos clients, des meneuses et des meneurs de jeu qui désirent explorer de nouvelles possibilités et collaborer avec une vaste gamme de clients du monde entier dans une variété de secteurs. Développeurs passionnés, agitateurs d'idées, chefs de projets, ingénieurs qualifiés ou stagiaires connectés, Rejoignez-nous !</p>
                <a href="{{ route('contact') }}" class="contact-button">Contactez-nous</a>
            </div>
        </div>
        
        <!-- Deuxième section - 5 cartes organisées en 3+2 -->
        <div class="second-section">
        <div class="service-card card-1">
        <h2>Ensemble, construisons votre avenir</h2>
        <p>Les quatre pilliers qui font d'ACHMITECH un lieu de travail inspirant et stimulant</p>
        <a href="/nos-services" class="card-button">Explorer Nos Services</a>
        </div>

        <style>
    .icon-box {
        font-size: 2.5rem;
        margin-bottom: 20px;
        animation: fadeIn 1s ease-in-out;
    }

    .icon-leadership    { color: #e67e22; } /* Orange */
    .icon-collaboration { color: #16a085; } /* Teal */
    .icon-innovation    { color: #9b59b6; } /* Purple */
    .icon-diversity     { color: #2980b9; } /* Blue */

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
  
            <!-- Styles pour les icônes -->
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


    <style>
    /* Reset */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

/* Base */
body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #f9f9f9;
    min-height: 100vh;
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
}

.first-section img {
    width: 50%;
    max-width: 550px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    object-fit: cover;
}

.first-section-content {
    flex: 1;
    min-width: 0;
}

h1 {
    color: #2c3e50;
    font-size: 2.5rem;
    margin-bottom: 20px;
    line-height: 1.3;
}

.intro {
    font-size: 1.3rem;
    color: #555;
    margin-bottom: 25px;
    font-weight: 500;
}
.contact-button {
    display: inline-block;
    padding: 12px 25px;
    font-size: 1.2rem;
    font-weight: bold;
    color: white;
    background-color:rgb(93, 64, 239);
    border: none;
    border-radius: 8px;
    text-decoration: none;
    transition: background-color 0.3s ease, transform 0.2s ease;
    margin-top: 30px;
}

.contact-button:hover {
    background-color:rgb(58, 192, 43);
    transform: translateY(-2px);
}


/* Deuxième section */
.second-section {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    gap: 30px;
}

.service-card {
    background: white;
    padding: 35px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    height: 100%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.card-1 { grid-column: span 4; }
.card-2 { grid-column: span 4; }
.card-3 { grid-column: span 4; }
.card-4 { grid-column: span 6; }
.card-5 { grid-column: span 6; }

h2 {
    color: #3498db;
    font-size: 1.8rem;
    margin-bottom: 20px;
}

p {
    margin-bottom: 0;
    font-size: 1.1rem;
    line-height: 1.7;
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
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.card-button:hover {
    background-color: #2980b9;
    transform: translateY(-2px);
}

</style>







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