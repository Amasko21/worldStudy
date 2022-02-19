<?php $title = 'Étudier au Maroc'; ?>
<?php ob_start(); ?> 
    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Études superieures en Ukraine</h2>
            </div>
        </div>
        <div class="row">
            <div  class="col-lg-12">
                <button class="accordion">Présentation</button>
                <div class="panel">
                  <p>
                     Un pays de l'Europe convoité par ses qualités d'enseignements et par dessus tout par a qualité de vie . la scolarité est en fonction de la filière e s'élève à 2000dollars par an  maximum.
                     La procedure prend maximum 2 mois. L'admission et le visa sont garantis à 100%
                     <strong>Date de candidature: fin juillet</strong>
                    </p>
                </div>

                <button class="accordion">Coût</button>
                <div class="panel">
                  <ul>
                        <li>
                            Frais des colarité : 2000 dollars/an
                        </li>
                        <li>
                            Frais de logement : 500 dollars/an
                        </li>
                        <li>
                            Frais d’application : 700.000FCFA
                        </li>
                    </ul>
                </div>
                
                <button class="accordion">Procédure</button>
                <div class="panel">
                    <ul>
                         <li>Paiement des frais d’application 700.000FCFA</li>
                         <li>Obtention de la lettre d’admission officielle en 2 semaines</li>
                        <li>Application pour le visa à Dakar</li>
                        <li>Accueil à l’UKR</li>
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