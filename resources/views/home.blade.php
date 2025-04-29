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
.hero {
            background-image: url('/images/Slider.png'); /* استبدل بالصورة المناسبة */
            background-size: cover;
            background-position: center;
            color: white;
            padding: 150px 0;
            text-align: center;
        } /* Navbar styles */
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



<!-- قسم البطل -->
<section class="hero">
  <div class="container">
  <h1 class="display-2 fw-bold text-center py-3 my-4" style="font-size: 5rem; line-height: 1.2;">
    ACHMITECH <br>
    Votre Partenaire <br>
    En Transformation Digitale !
</h1>
   
  </div>
</section>

<!-- قسم الخدمات -->
<section class="services">
  <div class="container">
    <h2 class="text-center mb-5 " style="font-size: 3rem">Chez ACHMITECH, votre avenir vous appartient</h2>
    <div class="row g-4">  <!-- Added gutter between columns -->
    <div class="row g-4">
    <div class="row g-4"> <!-- g-4 pour espacement entre colonnes -->
  
    <div class="row g-4 mt-2">

<!-- Colonne 1 -->
<div class="col-md-4">
  <div class="h-100 p-4 border rounded-3 bg-light" style="
       box-shadow: 0 4px 8px rgba(0, 74, 173, 0.1);
       margin-top: -15px;
       border-top: 3px solid #004aad;">
    <h4 class="mb-3" style="color: #004aad;">
      <i class="bi bi-person-workspace me-2"></i>
      Votre carrière chez ACHMITECH
    </h4>
    <p class="text-justify mb-4">
      Expert reconnu de la transformation et de l'innovation digitale, ACHMITECH vous offre la possibilité d'exprimer toutes vos capacités, de relever les défis les plus variés et de participer à l'invention des solutions transformantes de l'avenir.
    </p>
    <div class="text-end">
      <a href="#" class="btn btn-sm" style="
         background-color: #004aad; 
         color: white;
         margin-top: -10px;">
        <i class="bi bi-chevron-right"></i>
      </a>
    </div>
  </div>
</div>

<!-- Colonne 2 -->
<div class="col-md-4">
  <div class="h-100 p-4 border rounded-3 bg-light" style="
       box-shadow: 0 4px 8px rgba(0, 74, 173, 0.1);
       margin-top: -10px;
       border-top: 3px solid #004aad;">
    <h4 class="mb-3" style="color: #004aad;">
      <i class="bi bi-building me-2"></i>
      Ensemble, construisons votre avenir
    </h4>
    <p class="text-justify mb-4">
      Retrouvez plus d'information sur notre environnement de travail stimulant et les opportunités que nous proposons à nos collaborateurs pour accélérer leur développement professionnel et personnel.
    </p>
    <div class="text-end">
      <a href="#" class="btn btn-sm" style="
         background-color: #004aad; 
         color: white;
         margin-top: -10px;">
        <i class="bi bi-chevron-right"></i>
      </a>
    </div>
  </div>
</div>

<!-- Colonne 3 -->
<div class="col-md-4">
  <div class="h-100 p-4 border rounded-3 bg-light" style="
       box-shadow: 0 4px 8px rgba(0, 74, 173, 0.1);
       margin-top: -5px;
       border-top: 3px solid #004aad;">
    <h4 class="mb-3" style="color: #004aad;">
      <i class="bi bi-people me-2"></i>
      La culture d'ACHMITECH
    </h4>
    <p class="text-justify mb-4">
      Notre culture est essentielle au succès de nos projets et à la pérennité de notre entreprise. Nous sommes animés par nos valeurs et engagés dans chacune de nos missions.
    </p>
    <div class="text-end">
      <a href="#" class="btn btn-sm" style="
         background-color: #004aad; 
         color: white;
         margin-top: -10px;">
        <i class="bi bi-chevron-right"></i>
      </a>
    </div>
  </div>
</div>

</div>
  </div>
</section>

<!-- قسم من نحن -->
<section class="about bg-light">
<div class="container py-5">
    <!-- Titre principal centré et agrandi -->
    <h1 class="text-center mb-5 display-4 fw-bold" style="color: #004aad;">NOS FILIALES</h1>
    
    <!-- Conteneur des logos avec espacement et style amélioré -->
    <div class="d-flex justify-content-center align-items-center gap-5 my-4 p-4 rounded-3" 
         style="background-color: #f8f9fa; border: 1px solid #e0e0e0;">
        
        <!-- Logo Service Empower -->
        <div style="width: 300px; height: 200px;" class="d-flex justify-content-center align-items-center p-3">
            <img src="images/client-1.svg" 
                 alt="Service Empower" 
                 class="img-fluid h-100"
                 style="object-fit: contain; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));">
        </div>

        <!-- Logo 2HAJOB -->
        <div style="width: 300px; height: 200px;" class="d-flex justify-content-center align-items-center p-3">
            <img src="images/client-2.svg" 
                 alt="2HA Job" 
                 class="img-fluid h-100"
                 style="object-fit: contain; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));">
        </div>
    </div>
</div>
</section>

<!-- قسم الأخبار -->
<section class="news">
<div class="container my-5">
    <h2 class="text-center mb-4 display-5 fw-bold" style="color: #004aad;">ACTUALITÉS</h2>
    
    <div class="row g-4">
        <!-- Article 1 -->
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="ratio ratio-16x9">
                    <img src="images/News1.png"  alt="Article 1">
                </div>
            </div>
        </div>

        <!-- Article 2 -->
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="ratio ratio-16x9">
                    <img src="images/News2.png"  alt="Article 2">
                </div>
            </div>
        </div>

        <!-- Article 3 -->
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="ratio ratio-16x9">
                    <img src="images/News3.png"  alt="Article 3">
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<style>
        :root {
            --primary-color: #004aad;
            --secondary-color: #f8f9fa;
        }
        
        .offres-section {
            background:#004aad;
            padding: 5rem 0;
            position: relative;
            overflow: hidden;
        }
        
        .section-title {
            color: #f8f9fa;
            margin-bottom: 3rem;
            position: relative;
            display: inline-block;
            
            
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--primary-color);
        }
        
        .offre-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 74, 173, 0.08);
            padding: 2rem;
            height: 100%;
            transition: all 0.4s ease;
            border: 1px solid rgba(0, 74, 173, 0.1);
            margin: 0 15px;
        }
        
        .offre-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 74, 173, 0.15);
        }
        
        .offre-badge {
            background-color: var(--primary-color);
            color: white;
            padding: 0.4rem 1.2rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
            display: inline-block;
            margin-bottom: 1.2rem;
        }
        
        .offre-title {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 1.2rem;
            min-height: 60px;
            
        }
        
        .offre-description {
            color: #555;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }
        
        .postuler-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 0.6rem 1.8rem;
            border-radius: 30px;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .postuler-btn:hover {
            background-color: #003b8a;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 74, 173, 0.2);
        }
        
        .slider-container {
            position: relative;
            padding: 0 50px;
        }
        
        .slider-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            pointer-events: none;
            z-index: 1;
        }
        
        .slider-btn {
            background: white;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-size: 1.2rem;
            cursor: pointer;
            pointer-events: all;
            transition: all 0.3s ease;
        }
        
        .slider-btn:hover {
            background: var(--primary-color);
            color: white;
        }
        
        .slick-dots {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            list-style: none;
            padding: 0;
        }
        
        .slick-dots li {
            margin: 0 5px;
        }
        
        .slick-dots button {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            border: none;
            background: #ccc;
            text-indent: -9999px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .slick-dots .slick-active button {
            background: var(--primary-color);
            width: 30px;
            border-radius: 6px;
        }
        .h2{
            text-align: center;
        }
        
        @media (max-width: 768px) {
            .offres-section {
                padding: 3rem 0;
            }
            
            .slider-container {
                padding: 0 20px;
            }
            
            .offre-card {
                margin: 0 5px;
            }
        }
    </style>

    <section class="offres-section">
        <div class="container">
            <h2 class="text-center section-title display-4 fw-bold">DERNIÈRES OFFRES</h2>
            
            <div class="slider-container">
                <div class="offres-slider">
                    <!-- Offre 1 -->
                    <div class="offre-card">
                        <span class="offre-badge">FULL TIME</span>
                        <h3 class="offre-title">Path Management Consultant</h3>
                        <p class="offre-description">
                            Vous êtes expert en développement JS et souhaitez encadrer des projets ? Devenez Lead Développeur JS / VueJS / PHP et pilotez des solutions innovantes dans des environnements dynamiques.
                        </p>
                        <button class="btn postuler-btn">
                            <i class="fas fa-paper-plane"></i> POSTULER
                        </button>
                    </div>
                    
                    <!-- Offre 2 -->
                    <div class="offre-card">
                        <span class="offre-badge">FULL TIME</span>
                        <h3 class="offre-title">Senior Développeur JS / Lead Dev VueJS / PHP</h3>
                        <p class="offre-description">
                            Vous avez l'esprit de service et aimez résoudre des problèmes techniques ? Rejoignez-nous en tant que Technicien HelpDesk et devenez le point de contact essentiel pour offrir une assistance technique de qualité.
                        </p>
                        <button class="btn postuler-btn">
                            <i class="fas fa-paper-plane"></i> POSTULER
                        </button>
                    </div>
                    
                    <!-- Offre 3 -->
                    <div class="offre-card">
                        <span class="offre-badge">FULL TIME</span>
                        <h3 class="offre-title">Ingénieur Radio QoS</h3>
                        <p class="offre-description">
                            Vous avez un goût pour la qualité des services radio ? Rejoignez-nous comme Ingénieur Radio QoS pour analyser et optimiser les performances des réseaux.
                        </p>
                        <button class="btn postuler-btn">
                            <i class="fas fa-paper-plane"></i> POSTULER
                        </button>
                    </div>
                    
                    <!-- Offre 4 - Exemple supplémentaire -->
                    <div class="offre-card">
                        <span class="offre-badge">FULL TIME</span>
                        <h3 class="offre-title">Ingénieur Réseaux Télécoms</h3>
                        <p class="offre-description">
                            Expertise en réseaux télécoms ? Contribuez à la conception et à l'optimisation des infrastructures réseau pour nos clients.
                        </p>
                        <button class="btn postuler-btn">
                            <i class="fas fa-paper-plane"></i> POSTULER
                        </button>
                    </div>
                </div>
                
                <div class="position-relative"> <!-- Conteneur parent relatif -->
  <!-- Slider content here -->
  
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    
    <script>
        $(document).ready(function(){
            $('.offres-slider').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: true,
                arrows: true,
                prevArrow: $('.prev-btn'),
                nextArrow: $('.next-btn'),
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>

<section class="services-section">
<style>
        :root {
            --primary-color: #004aad;
            --secondary-color: #f8f9fa;
        }
        
        .services-section {
            padding: 5rem 0;
            background-color: var(--secondary-color);
        }
        
        .section-title {
            color: #f8f9fa;
            margin-bottom: 3rem;
            position: relative;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 80px;
            height: 3px;
            background: var(--primary-color);
        }
        
        .service-card {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            height: 100%;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 74, 173, 0.1);
            margin-bottom: 30px;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 74, 173, 0.15);
        }
        
        .service-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }
        
        .service-title {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .service-description {
            color: #555;
            line-height: 1.6;
        }
        
        @media (max-width: 768px) {
            .services-section {
                padding: 3rem 0;
            }
        }
    </style>
        <div class="container">
            <h2 class="section-title display-5 fw-bold " style="color: #004aad;">NOS SERVICES</h2>
            
            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-digital-tachograph"></i>
                        </div>
                        <h3 class="service-title">Transformation Digitale</h3>
                        <p class="service-description">
                        ACHMITECH offre des solutions personnalisées qui permettent aux entreprises de transformer leurs processus et technologies, optimisant ainsi la gestion des ressources numériques. Grâce à nos outils avancés, nous aidons les organisations à moderniser leurs systèmes, à améliorer leur efficacité et à accélérer leur transformation numérique pour rester compétitives dans un environnement en constante évolution.

                        </p>
                    </div>
                </div>
                
                <!-- Service 2 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="service-title">Information Technology Outsourcing</h3>
                        <p class="service-description">
                        Notre équipe allie les connaissances juridiques à l’expertise dans les Technologies de l’Information, ce qui permet de développer un travail conjoint avec d’autres spécialistes du secteur : responsables de systèmes d’information, ingénieurs informatiques, gestionnaires, chercheurs et consultants en technologie et en gestion. Grâce à cette vision pragmatique, il est pour nous possible de couvrir un éventail plus large de domaines et de réaliser un travail axé sur les résultats.
                        </p>
                    </div>
                </div>
                
                <!-- Service 3 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h3 class="service-title">Data & Cloud</h3>
                        <p class="service-description">
                        Nous évaluons votre maturité DATA actuelle et identifions vos besoins pour accroître ou maintenir votre avantage concurrentiel. Nous vous proposons diverses solutions Cloud et vous aidons à opter pour la meilleure architecture. Des solutions adaptées au Cloud qui aident votre entreprise à s'adapter.
                        </p>
                    </div>
                </div>
                
                <!-- Service 4 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3 class="service-title">Recherche & Innovation</h3>
                        <p class="service-description">
                        L’innovation n’a plus de limites. Nous vous aidons à vous réinventer pour vous orienter dans le monde d’aujourd’hui et construire votre trajectoire vers les évolutions futures et ce grâce à des concepts modernes et agiles et des expériences omnicanales complètes.
                        </p>
                    </div>
                </div>
                
                <!-- Service 5 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <h3 class="service-title">Business Process Outsourcing</h3>
                        <p class="service-description">
                        Vous cherchez à gagner en agilité et à réduire vos coûts de service ? Grâce à notre vaste expérience dans le domaine de l’externalisation des processus métiers, nous vous accompagnons pour atteindre l’excellence opérationnelle tout en optimisant la valeur pour vos actionnaires.
                        </p>
                    </div>
                </div>
                
                <!-- Service 6 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h3 class="service-title">Agilité & DevOps</h3>
                        <p class="service-description">
                        ACHMITECH accompagne ses clients à la fois dans la mise en place d’organisations agiles et dans l’application des concepts DevOps. Nous participons à la création de systèmes adaptables et résilients pour passer d’un environnement orienté IT à des préoccupations orientées clients.
                        </p>
                    </div>
                </div>
                
                <!-- Service 7 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="service-title">Cybersécurité</h3>
                        <p class="service-description">
                        La transformation dépend d’une sécurité sans faille, voilà pourquoi nous mettons l’étendue de notre expertise pour en faire une force et un avantage concurrentiel.
                        </p>
                    </div>
                </div>
                
                <!-- Service 8 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <h3 class="service-title">Télécom et Infra des Réseaux</h3>
                        <p class="service-description">
                        ACHMITECH propose des solutions personnalisées qui aident les sociétés de télécommunications à contrôler leurs réseaux et l’efficacité du matériel informatique pour améliorer leur performance.
                        </p>
                    </div>
                </div>
                
                <!-- Service 9 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="service-title">Gouvernance & Pilotage</h3>
                        <p class="service-description">
                        Simplifiez l'informatique avec des services de modernisation, de protection et de gestion.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
