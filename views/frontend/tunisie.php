<?php $title = 'Étudier au Maroc'; ?>
<?php ob_start(); ?> 
    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Études superieures en  Tunisie</h2>
            </div>
        </div>
        <div class="row">
            <div  class="col-lg-12">
                <button class="accordion">Présentation</button>
                <div class="panel">
                  <p>
                      La tunisie est un pays convoité par de nombreux étudiants en raison du coup de frais d'études qui est relativement moins cher par rapport aux autres pays dont l'insertion est beaucoup plus facile.
                      Les qualités d'enseignements irréprochables et les conditions d'études sont à la hauteur de toute attente.
                      Optez pour une bourse d'étude avec un billet d'avion inclu dans les meilleurs établissements de la Tunisie, l'admission garantie à 100% et dans un délai de 2 mois maximum  avec toutes les filières disponibles y compris la médecine.
                    </p>
                </div>

                <button class="accordion">Coût</button>
                <div class="panel">
                  <ul>
                    <li>
                         Frais de scolarité : 3.000.000 FCFA pour 5ans d’études et de logement
                    </li>
                    <li>
                         Frais de vie (nourritures + transport) : 75.000 FCFA
                    </li>
                 </ul>
                </div>
                <button class="accordion">Procédure</button>
                <div class="panel">
                    <ul>
                        <li>Paiement de frais d’avance sur le dossier 2.000.000 FCFA</li>
                        <li>Obtention de la lettre d’admission</li>
                        <li>Paiement du reste des frais</li>
                        <li>Accueil à Tunis</li>
                    </ul>                 
                </div>
                
                <button class="accordion">Dossier á fournir</button>
                <div class="panel">
                    <ul>
                        <li>Extrait d’acte de naissance</li>
                        <li>Attestation de baccalauréat</li>
                        <li>Relevé de notes baccalauréat</li>
                        <li>4 photos d’identité</li>
                        <li>Copie du passeport ou de la carte Nina</li>
                        <li>Attestationde licence pour les candidats de master</li>
                        <li>Relevés de notes de tous les semestres</li>
                        <li>Attestation de stage si disponible</li>
                        <li>Casier judiciaire</li>
                        <li>Visite médicale (pour la Russie et le Canada)</li>
                        <li>Certificat de nationalité</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center" style="margin-top : 50px">
                <div>
                    <a id="post" href="Admission"><i class="far fa-edit"> </i> CANDIDATURE EN LIGNE</a>
                </div>
            </div>
        </div>
    </section>
<?php $content = ob_get_clean(); ?>
<?php ob_start(); ?>
<?php $autreScript = ob_get_clean(); ?>
<?php
    require_once('template.php');
?>