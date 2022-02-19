<?php $title = 'Étudier au Maroc'; ?>
<?php ob_start(); ?> 
    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Études superieures en Australie</h2>
            </div>
        </div>
        <div class="row">
            <div  class="col-lg-12">
                <button class="accordion">Présentation</button>
                <div class="panel">
                  <p>
                      Opportunité à saisir, 
                      l'Australie pays en Océanie est une destination de découvertes mondiales et rayonnant de son système éducatif.<br/>
                      <strong>NB: Les cours sont dispensés en Anglais.</strong>
                    </p>
                </div>

                <button class="accordion">Coût</button>
                <div class="panel">
                  <ul>
                        <li>
                            Frais de scolarité: 3000$/an
                         </li>
                        <li>
                            Frais de logement: 150.000f à 200.000fcfa/mois
                         </li>
                        <li>
                             Frais d'application: 2.000.000fcfa pour une payer une partie de la scolarité+ traduction de tous les documents+ réservation de logement+ frais d'admission+ frais de demande de visa en ligne+ frais de légalisation des diplômes ainsi que les honoraires du cabinet
                        </li>
                    </ul>
                </div>
                
                <button class="accordion">Procédure</button>
                <div class="panel">
                    <ul>
                        <li>Dépôt de dossiers ( copie du passeport+ 2 photos d'identité+ relevé bancaire de 11 millions de francs CFA)+ frais d'ouverture de dossiers à 50.000fcfa</li>
                        <li>Paiement partiel de la scolarité 1000dollars -600.0000fcfa</li>
                        <li>Application pour la demande de visa en ligne</li>
                        <li>Paiement de 1.300.000fcfa</li>
                        <li>Accueil à l'aéroport</li>
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
                        <li>Visite médicale</li>
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