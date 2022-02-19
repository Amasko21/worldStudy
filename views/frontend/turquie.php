<?php $title = 'Étudier au Maroc'; ?>
<?php ob_start(); ?> 
    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Études superieures en Turquie</h2>
            </div>
        </div>
        <div class="row">
            <div  class="col-lg-12">
                <button class="accordion">Présentation</button>
                <div class="panel">
                  <p>
                      La Turquie est un pays connu par les étudiants pour la qualité de ses formations et les conditions d'études qu'elle offre et notamment son ouverture aux étudiants étrangers.
                      Nous possédons des admissions garanties dans toutes les filières confondues dans l'Université d'Istanbul sehir University.
                      Les frais de scolarité sont renouvelés chaque année. Et la procédure prend maximum 3 mois.<br/>
                      <strong>Date limite de candidature: fin juin</strong>

                    </p>
                </div>

                <button class="accordion">Coût</button>
                <div class="panel">
                  <ul>
                    <li>
                        Frais de scolarité : 500 dollars/an
                    </li>
                    <li>
                        Frais de logement : 700 dollars/an
                    </li>
                    <li>
                        Frais d’application : 1.900.000 FCFA pour 3 mois de logement, d’assurance
                        maladie, de scolarité, ainsi que les honoraires de l’agence.
                    </li>
                    <li>
                        Frais de visa : 20.000FCFA
                    </li>
                 </ul>
                </div>
                
                <button class="accordion">Procédure</button>
                <div class="panel">
                    <ul>
                        <li>Paiement de frais d’admission à 250.000FCFA</li>
                        <li>Obtention de la lettre d’admission en 2 semaines</li>
                        <li>Paiement des frais de la scolarité et de logement 1.750.000FCFA</li>
                        <li>Application pour le visa</li>
                        <li>Accueil à Istanbul</li>
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
                        <li>Certificat de nationalité</li>
                        <li>Relevé bancaire des 3 derniers mois du garant</li>
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