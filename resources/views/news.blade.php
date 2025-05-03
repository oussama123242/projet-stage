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
      --primary-blue:rgb(0, 0, 0);
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
        /*
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
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
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
                <a href="/contact" class="btn btn-primary">Contactez-nous</a>
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                        FR
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">FR</a></li>
                        <li><a class="dropdown-item" href="#">EN</a></li>
                        <li><a class="dropdown-item" href="#">AR</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<br><br><br><br><br><br><br>
<div class="container">
    <!-- Première section combinée (texte + image) -->
    <div class="combined-section">
        <div class="text-image-pair">
            <div class="text-content">
                <h1>Explorez nos diverses nouvelles et perspectives</h1>
                <p class="intro">Suivez nos nouvelles et bénéficiez de perspectives qui vous aideront à créer des occasions de réelle connexion.</p>
            </div>
            <div class="image-content">
                <img src="images/actua.svg" alt="Nouvelles perspectives" class="feature-image">
            </div>
        </div>
    </div>

    <div class="container">
    <div class="text-section">
        <hr class="divider">
        
        <div class="content-layout">
            <!-- Image réduite à gauche -->
            <div class="compact-image">
                <img src="images/News1.jpg" alt="Salon Recrutement" class="feature-image">
            </div>
            
            <!-- Texte prenant le reste de l'espace -->
            <div class="expanded-text">
                <h1>Nous étions présents au Salon Virtuel du Recrutement</h1>
                
                <h5>Administration du Salon Virtuel du Recrutement : Connectez Talents et Opportunités</h5>
                
                <p>Nous avons eu le plaisir de participer au Salon Virtuel du Recrutement, un événement incontournable réunissant professionnels, recruteurs et talents issus de divers horizons.</p>
                
                <h5>Une Plateforme de Rencontres et d'Échanges</h5>
                
                <p>Cet espace interactif a été une occasion unique de rencontrer des candidats qualifiés et motivés, tout en partageant notre vision et nos opportunités de carrière.</p>
                
                <h5>Mettre l'innovation au Service du Recrutement</h5>
                
                <p>Le format virtuel a permis de connecter un large public en toute simplicité, illustrant comment la technologie transforme également le domaine du recrutement.</p>
                
                <p>Nous sommes toujours à la recherche des meilleurs talents pour rejoindre nos équipes et participer à des projets innovants. Ce salon a été un véritable succès, et nous sommes impatients de collaborer avec les talents rencontrés pour bâtir ensemble l'avenir.</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="text-section">
        <hr class="divider">
        
        <div class="content-layout">
            <!-- Image réduite à gauche -->
          
            
            <!-- Texte prenant le reste de l'espace -->
            <div class="expanded-text">
                <h1>Gitex Africa 2024 - Les Dernières Avancées Technologiques du Continent</h1>
                
                <h5>L'Exploration des Innovations à Gitex Africa 2024 <br>
                Une Immersion dans l'Innovation</h5>
                
                <p>Cette année, notre équipe a eu l’honneur d’assister au GITEX, un véritable carrefour de l’innovation technologique. Ce fut une occasion formidable de rencontrer des leaders de l’industrie et d’explorer des innovations révolutionnaires.</p>
                
                <h5>Découverte des Avancées Technologiques du Continent</h5>
                
                <p>Le GITEX Africa 2024 a été une vitrine impressionnante des dernières avancées technologiques du continent. Des entreprises émergentes aux géants de l'industrie, chacun a présenté des solutions innovantes pour répondre aux défis locaux et mondiaux.</p>
                
                <h5>Les Thèmes Phares de l'Événement</h5>
                
                <p>L'événement a mis en lumière divers domaines, de l'intelligence artificielle à la cybersécurité, en passant par la blockchain et l'Internet des objets. Les discussions ont été enrichissantes, offrant des perspectives sur les tendances émergentes et les opportunités de collaboration.</p>

                <h5>Un GITEX Africa 2024 Mémorable</h5>

                <p>LE GITEX Africa 2024 a une fois de plus démontré le potentiel technologique du continent et nous sommes impatients de voir comment ces innovations façonneront l'avenir.</p>
            </div>
            <div class="compact-image">
                <img src="images/News2.jpg" alt="Salon Recrutement" class="feature-image">
            </div>
        </div>
    </div>
    <div class="container">
    <div class="text-section">
        <hr class="divider">
        
        <div class="content-layout">
            <!-- Image réduite à gauche -->
            <div class="compact-image">
                <img src="images/News3.jpg" alt="Salon Recrutement" class="feature-image">
            </div>
            
            <!-- Texte prenant le reste de l'espace -->
            <div class="expanded-text">
                <h1>Achmitech & EMInov Tech' 2024 !</h1>
                
                <h5>Achmitech au Salon Virtuel du Recrutement : Connecter Talents et Opportunités</h5>
                
                <p>Nous sommes ravis d’avoir assisté à la 3ème édition de la Journée Nationale d'Innovation Technologique en Ingénierie (JNITI & EMInov Tech' 2024). Cet événement exceptionnel a rassemblé étudiants, professionnels et passionnés de technologie pour découvrir et célébrer les dernières avancées en ingénierie.</p>
                
                <h5>Découvertes et Rencontres</h5>
                
                <p>La JNITI & EMInov Tech' nous a offert l'opportunité de découvrir les projets innovants des étudiants en ingénierie, qui ont fait preuve d'une créativité et d'une expertise remarquables. Rencontrer des leaders de l'industrie a également été enrichissant, nous permettant de mieux comprendre les tendances actuelles et les futurs défis technologiques.</p>
                
                <h5>Déroulement de la Journée</h5>
                
                <p>La journée a débuté avec une conférence inspirante, mettant en lumière les défis et opportunités actuels dans le domaine de l'ingénierie. Ensuite, nous avons eu le plaisir de découvrir les innovations des étudiants, présentées de manière interactive. Les étudiants ont ensuite eu l'occasion de présenter en détail leurs projets devant un public attentif. La journée s'est conclue par la remise des prix, récompensant les initiatives les plus prometteuses et innovantes.</p>
                
                <p>Chez Achmitech, nous sommes déterminés à soutenir la prochaine génération de talents technologiques et à promouvoir l'innovation. La JNITI & EMInov Tech' 2024 a été une magnifique illustration de ce potentiel, et nous sommes impatients de voir les développements futurs de ces brillants esprits.</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="text-section">
        <hr class="divider">
        
        <div class="content-layout">
            <!-- Image réduite à gauche -->
           
            <!-- Texte prenant le reste de l'espace -->
            <div class="expanded-text">
                <h1>Achmitech en Visite Chez YouCode !</h1>
                
                <h5>Immersion chez YouCode : La Formation IT Réinventée</h5>
                
                <p>Nous avons eu le privilège de visiter l’un des locaux de YouCode, une école innovante située à Safi, reconnue pour son approche unique dans la formation des talents IT et leur intégration professionnelle.</p>
                
                <h5>Une Vision Moderne de l’Éducation Technologique</h5>
                
                <p>Cette visite nous a permis de découvrir un environnement d’apprentissage dynamique et inspirant, où les étudiants sont accompagnés pour devenir des acteurs clés du secteur technologique. Leur approche centrée sur l’employabilité reflète une volonté forte de répondre aux besoins croissants du marché de l’IT.</p>
                
                <h5>Échanges et Inspiration</h5>
                
                <p>Rencontrer les étudiants de YouCode a été une expérience enrichissante. Ces échanges ont ouvert la porte à des discussions sur les opportunités, les défis et les tendances qui façonnent le monde de la technologie aujourd’hui.</p>
                
                <p>Cette expérience a renforcé notre conviction que les écoles comme YouCode jouent un rôle crucial dans le développement des compétences technologiques et l’émergence des talents de demain.</p>
            </div>
            <div class="compact-image">
                <img src="images/News4.jpg" alt="Salon Recrutement" class="feature-image">
            </div>
            
        </div>
    </div>
</div>
<div class="container">
    <div class="text-section">
        <hr class="divider">
        
        <div class="content-layout">
            <!-- Image réduite à gauche -->
            <div class="compact-image">
                <img src="images/News5.jpg" alt="Salon Recrutement" class="feature-image">
            </div>
            
            <!-- Texte prenant le reste de l'espace -->
            <div class="expanded-text">
                <h1>Africa IT Meeting - L'Innovation en Action !</h1>
                
                <h5>Immersion au cœur de l’Africa IT Meeting : L'Innovation à l’Honneur</h5>
                
                <p>Nous avons eu le privilège d’assister à l’Africa IT Meeting, un événement majeur qui rassemble chaque année plus de 300 décideurs IT issus de grandes entreprises et d’organisations gouvernementales à travers le continent africain.</p>
                
                <h5>Une Exploration de l’Innovation Technologique</h5>
                
                <p>Cette édition a permis de plonger dans un univers où technologie et transformation numérique se rencontrent. Nous avons pu explorer des solutions pionnières et assister à des démonstrations captivantes des dernières avancées qui façonnent l'avenir des entreprises africaines.</p>
                
                <h5>Points Forts de l'Événement</h5>
                
                <p>Des conférences éclairantes ont ouvert le dialogue sur les défis et opportunités liés à la transformation numérique en Afrique. Des sessions interactives ont également mis en avant des technologies disruptives, offrant une perspective inédite sur les possibilités d’évolution des organisations dans des secteurs clés.</p>
                
                <p>Assister à l’Africa IT Meeting nous a permis de mieux appréhender les tendances et d'échanger avec des acteurs visionnaires du secteur technologique. Cet événement illustre la dynamique et l’ambition d’un continent en pleine expansion numérique.</p>
            </div>
        </div>
    </div>
</div>

</div>

</div>

<style>
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.text-section {
    margin-top: 30px;
}

.divider {
    border: 0;
    height: 1px;
    background: #eee;
    margin: 30px 0;
}

.content-layout {
    display: flex;
    gap: 25px;
    align-items: flex-start;
}

.compact-image{
    width: 30%;
    min-width: 200px;
    margin-top: 60px;
    margin-left: 1px;
}

.feature-image {
    width: 100%;
    height: auto;
    border-radius: 6px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}

.expanded-text {
    flex: 1;
    min-width: 0;
  
     /* Permet au texte de bien s'adapter */
}

h2 {
    color: #2c3e50;
    font-size: 1.8rem;
    margin-bottom: 20px;
    margin-top: 0;
}

h5 {
    color: #3498db;
    font-size: 1.3rem;
    margin: 20px 0 12px;
    font-weight: 500;
}

p {
    margin-bottom: 15px;
    font-size: 1.1rem;
    line-height: 1.6;
}

@media (max-width: 768px) {
    .content-layout {
        flex-direction: column;
    }
    
    .compact-image {
        width: 60%;
        margin: 0 auto 20px;
    }
}
</style>
</div>

<style>
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.combined-section {
    margin-bottom: 40px;
}

.text-image-pair {
    display: flex;
    align-items: center;
    gap: 40px;
}

.text-content {
    flex: 1;
    min-width: 50%;
}

.image-content {
    flex: 1;
    min-width: 40%;
}

.feature-image {
    width: 80%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.text-section {
    margin-top: 30px;
}

h1 {
    color: #2c3e50;
    font-size: 2.2rem;
    margin-bottom: 20px;
}

.intro {
    font-size: 1.2rem;
    color: #555;
}

.divider {
    border: 0;
    height: 1px;
    background: #eee;
    margin: 30px 0;
}

@media (max-width: 768px) {
    .text-image-pair {
        flex-direction: column;
    }
    
    .image-content {
        order: -1;
        margin-bottom: 20px;
    }
}
</style>         









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