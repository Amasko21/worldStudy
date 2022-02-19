<!DOCTYPE html>
<html lang="en">

<head>
  <base href="/">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?></title>
  <meta content="World-Studies-Services" name="descriptison">
  <meta content="World-Studies" name="keywords">
  
  <!-- Favicons -->
  <link href="../public/img/favicon" rel="icon">
  <link href="../public/img/apple-icon" rel="apple-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
  <!-- Vendor CSS Files -->
  <link href="../public/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="../public/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../public/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../public/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../public/vendor/aos/aos.css" rel="stylesheet">
  <link href="/../public/vendor/bootstrap/css/bootstrap.min.css">
  <!-- Template Main CSS File -->
  <link href="../public/css/style.css" rel="stylesheet">
    <link href="../public/css/jquery.dm-uploader.min.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <a href="Accueil"><img src="../public/img/logo.jpg" alt="logo" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="<?php if($_SERVER['PHP_SELF']="/worldstudies/index.php" and !isset($_GET['action']))  echo " active "; if(isset($_GET['action'])) {if($_GET['action'] == 'index') echo "active";} ?> "><a href="Accueil">Accueil</a></li>
          <li class="<?php if(isset($_GET['action'])) {if($_GET['action'] == 'about') echo "active";} ?> "><a href="A-propos">A propos</a></li>
          <li class="<?php if(isset($_GET['action'])) {if($_GET['action'] == 'services') echo "active";} ?> "><a href="Services">Services</a></li>
          <li class="drop-down"><a href="">Etudes</a>
            <ul>
              <li class="drop-down"><a href="#">Afrique</a>
                    <ul>
                        <li><a href="Étudier-au-Maroc">MAROC</a></li>
                        <li><a href="Étudier-en-Tunisie">TUNISIE</a></li>
                    </ul>
                </li>
              <li class="drop-down"><a href="#">Europe</a>
                <ul>
                  <li><a href="Étudier-en-France">FRANCE</a></li>
                  <li><a href="Étudier-en-Ukraine">UKRAINE</a></li>
                  <li><a href="Étudier-en-Biélorussie">BIÉLORUSSIE</a></li>
                </ul>
              </li>
                <li class="drop-down"><a href="#">Amérique et autres</a>
                    <ul>
                        <li><a href="Étudier-au-Canada">CANADA</a></li>
                        <li><a href="Étudier-au-Chypre-du-nord">CHYPRE DU NORD</a></li>
                        <li><a href="Étudier-en-Russie">RUSSIE</a></li>
                        <li><a href="Étudier-en-Turquie">TURQUIE</a></li>
                        <li><a href="Étudier-en-Australie">AUSTRALIE</a></li>
                    </ul>
                </li>
            </ul>
          </li>
            <li>
                <a href="Admission">
                    <strong style="color:#e95b83;border:solid 1.5px;padding: 0.1em 0.5em;">Admission</strong>
                </a>
            </li>
          <li><a href="#contact">Nous Contacter</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
   <main id="main"> 
    
    <?= $content ?>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Contact</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Adresse</h3>
              <p>Lafiabougou rue 298 immeuble lycée privé Défi</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3> Adresse Email</h3>
              <p>info.worldstudies@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Nous appeler</h3>
              <p>(+223) 70 39 55 38/(+223) 76 51 06 79</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">


          <div class="col-lg-12">
            <form action="Contacter" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Entrer au moins 4 caractères " />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre adresse mail" data-rule="email" data-msg="Enter une  adresse email valide" />
                  <div class="validate"></div>  
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Entrer au moins 8 caractères" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="S'il vous plait ecrivez quelque chose pour nous" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Chargement</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message a été envoyé. Merci!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info" data-aos="fade-up" data-aos-delay="50">
              <h3>WorldStudies</h3>
              <p class="pb-3"><em>Au cœur de vos ambitions</em></p>
              <p>
                Lafiabougou rue 298 immeuble lycée privé Défi<br><br>
                <strong>Téléphone:</strong> (+223) 70395538/(+223) 76510679<br>
                <strong>Email:</strong> info.worldstudies@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="150">
            <h4>Liens Utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="Accueil">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Admission">Admission</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="A-propos">A propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Services">Services</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="250">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="Admission">Inscription et préinscription à l’étranger</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Services">Assistance visa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Services">Conseil et orientation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Services">Accueil et logement à l’étranger</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Services">Vente de billet d’avion</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter" data-aos="fade-up" data-aos-delay="350">
            <div class="row">
                <h4 class="col-lg-12">Nos partenaires</h4>
            </div>
              <div class="row" id="partenaire"> 
                <img class="col-lg-6" src="../public/img/partenaires/pacific.JPG" alt="PACIFIC-EXPERT-VOYAGE" width="100" height="120"> 
              </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>WORLDSTUDIES</span></strong>. Tout droit reservé
      </div>
      <div class="credits">
        Designed by  <a href="mailto:amasko4321@gmail.com" target="_blank">DIARRA Amadou</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../public/vendor/jquery/jquery.min.js"></script>
  <script src="../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../public/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../public/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../public/vendor/php-email-form/validate.js"></script>
  <script src="../public/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../public/vendor/counterup/counterup.min.js"></script>
  <script src="../public/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../public/vendor/venobox/venobox.min.js"></script>
  <script src="../public/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../public/vendor/aos/aos.js"></script>
    

  <!-- Template Main JS File -->
  <script src="../public/js/main.js"></script>
    <script src="../public/js/jquery.dm-uploader.min.js"></script>
    <script src="../public/js/custom.js"></script>
    <script src="../public/js/custom-ui.js"></script>
    
    <?= $autreScript ?>

</body>

</html>