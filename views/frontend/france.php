<?php $title = 'Étudier au Maroc'; ?>
<?php ob_start(); ?> 
    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Études superieures en France</h2>
            </div>
        </div>
        <div class="row">
            <div  class="col-lg-12">
                <button class="accordion">Présentation</button>
                <div class="panel">
                  <p>
                      La France est une destination pour tout étudiants désirant continuer ses études en Europe dans des conditions parfaites à un prix abordable pour tous. Les études y coûtent moins chères le coup de vie plus moins cher avec des jobs étudiants disponibles.
                    </p>
                </div>

                <button class="accordion">Coût</button>
                <div class="panel">
                  <ul>
                        <li>
                            Frais de scolarité : 4.000 euros/an - 2.600.000 FCFA
                        </li>
                        <li>
                            Frais de logement : 800 euros/mois - 520.000FCFA
                        </li>
                        <li>
                             Frais de campus : 50.000FCFA
                        </li>
                        <li>
                            Frais de visa : 65.000FCFA
                        </li>
                        <li>
                            Frais d’agence : 500.000FCFA
                        </li>
                    </ul> 
                </div>
                
                <button class="accordion">Procédure</button>
                <div class="panel">
                    <ul>
                        <li>
                            Paiement des frais de constitution de dossier 600 euros déduits des frais
                            scolaires et obtention de la lettre d’admission temporaire
                        </li>
                        <li>
                            Paiement de la caution 3000 euros et obtention de la lettre d’admission
                            officielle
                        </li>
                        <li>
                            Procédure campus France et application pour le visa
                        </li>
                        <li>
                             Accueil à Paris
                        </li>
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
?>