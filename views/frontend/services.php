<?php $title = 'Services-World Studies'; ?>
<?php ob_start(); ?> 
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Services</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bxs-layer"></i></div>
              <h4 class="title"><a href="">Inscription et préinscription á l'etranger</a></h4>
              <p class="description">Aide dans le choix de la filière et du pays selon les moyens de l'étudiant concerné </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxs-info-square"></i></div>
              <h4 class="title"><a href="">Assistance visa, conseil et orientation</a></h4>
              <p class="description">Aide dans les demarches d'obtention de visas d'etudes, coaching pour un entretien pédagogique et consulaire</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bxs-home-smile"></i></div>
              <h4 class="title"><a href="">Accueil et logement á l'etranger</a></h4>
                <p>Des anciens étudiants vous attentent sur place dans chaque pays</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bxs-plane"></i></div>
              <h4 class="title"><a href="">Vente de billes d'avion</a></h4>
              <p class="description">En partenariat et représentant officiel de pacifique expert voyage</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
<?php $content = ob_get_clean(); ?>
<?php ob_start(); ?>
<?php $autreScript = ob_get_clean(); ?>
<?php
    require_once('template.php');
?>