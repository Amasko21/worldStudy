<?php $title = 'Á propos-World Studies'; ?>
<?php ob_start(); ?>
    <section class="about-details" style="margin-top : -10px;">
      <div class="container">

        <div class="about-details-container">

          <div style="margin-top: -20px">
            <img src="../public/img/logo.jpg" class="img-fluid" alt="" height="800">
          </div>

          <div class="about-info">
            <h3>World Studies</h3>
            <ul>
              <li><strong>Inscription et préinscription à l’étranger</strong></li>
              <li><strong>Assistance visa</strong></li>
              <li><strong>Conseil et orientation</strong></li>
              <li><strong>Accueil et logement à l’étranger</strong></li>
              <li><strong>Vente de billets d’avion</strong></li>
            </ul>
          </div>

        </div>

        <div class="about-description">
          <h2>Présentation</h2>
          <p>
            World studies est un cabinet d’orientation scolaire
            créé par une ancienne étudiante de l’étranger; vous facilitant les obtentions
            d’admission et des bourses d’études dans les quatre coins du monde; vous
            fournit une assistance visa de A à Z pour tout type de profils étudiants et
            professionnels; coaching pour les entretiens pédagogiques et consulaires; choix de
            formation et de pays selon vos moyens.
          </p>
        </div>
          <div class="about-description">
          <h2>Motivation</h2>
          <p>
            Ayant étudié à l'étranger et soucieuse de voir tous ces etudiants à la quête d'opportunités. Ma motivation principale est de promouvoir une meilleure qualité d'éducation et d'aider les étudiants à saisir les opportunités de bourse et du cadre du privé dans les pays avec les quels nous collaborons notamment le Canada, la Turquie, le Maroc, la Russie, la Biélorussie, l'Ukraine et Chypre du Nord, France, Turquie, Tunisie, Australie.
          </p>
        </div>
          <div class="about-description">
          <h2>Notre mission</h2>
          <p>
            Placement universitaire, assistance visa de A à Z pour tout type de profil étudiants
              Conseil et orientation, accueil à l'étranger, vente de billets.
              Nous avons pour but de vous fournir une assistance de premier plan.

          </p>
        </div>
          <div class="about-description">
          <h2>Nos destinations</h2>
          <p>
            Canada , Maroc ,Turquie ,Russie ,Biélorussie, Ukraine ,Chypre du Nord, France, Turquie, Tunisie, Australie 
          </p>
        </div>
          <div class="about-description">
          <h2>Notre vision</h2>
          <p>
            Nos valeurs fondatrices sont basées sur la conviction qu'il ne peut y avoir de progrès economiques sans social. Notre groupe partage une même vision celle d'une éducation fondée sur des valeurs humanisme entreprenariat et professionnalisme et sur une pédagogie de l'encouragement et de l'accompagnement.
            Étudiants ,tuteurs et collaborateurs nous sommes tous persuadés d'une chose: au delà des connaissances ,au delà des compétences ,la confiance est essentielle au développement des talents des individus, les individus sont au cœur de la performance de l'entreprise et l'entreprise est au cœur du progrès.

          </p>
        </div>
      </div>
    </section>
<?php $content = ob_get_clean(); ?>
<?php ob_start(); ?>
<?php $autreScript = ob_get_clean(); ?>
<?php
    require_once('template.php');
?>