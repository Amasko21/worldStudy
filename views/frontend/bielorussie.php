<?php $title = 'Étudier au Maroc'; ?>
<?php ob_start(); ?> 
    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Études superieures en Biélorussie</h2>
            </div>
        </div>
        <div class="row">
            <div  class="col-lg-12">
                <button class="accordion">Présentation</button>
                <div class="panel">
                  <p>
                     Un pays de l'Europe de l'Est où les diplômes sont reconnus et de renommé international avec un coup de vie moins cher et les études dispensés par excellence sont aussi moins chères. Les langues parlées sont le russe et l'anglais.
                      Nous possédons des admissions garanties à 100% à moindre frais et tout le reste se règle à l'aéroport c'est à dire une fois en Biélorussie en présentant la somme value s au service de l'immigration le visa se fait sur place et est garantie. Pas de caution bancaire ni de grandes dépenses. La procédure est d'une durée de trois semaines maximum.<br/>
                      <strong>Date limite de candidature: début janvier </strong>

                    </p>
                </div>

                <button class="accordion">Coût</button>
                <div class="panel">
                  <ul>
                        <li>
                            Frais de dossiers : 150.000FCFA
                        </li>
                        <li>
                            Frais de logement : 400 dollars/an
                        </li>
                        <li>
                            Frais d’application : 4.500dollars (2.986.000FCFA) pour une année de
                            scolarité, une année de logement, une année d’assurance maladie, frais de
                            visa ainsi que les honoraires de l’agence.
                        </li>
                        <li>
                            Les jobs étudiants sont possibles etle visa est garantis à 100%
                        </li>
                    </ul>
                </div>
                
                <button class="accordion">Procédure</button>
                <div class="panel">
                    <ul>
                        <li>Paiement des frais de dossiers 150.000FCFA</li>
                        <li>Obtention de la lettre d’invitation en 3 semaines maximum</li>
                        <li>Reste de paiement de 4500 dollars une fois en Biélorussie</li>
                        <li>Le visa se fait sur place en présentant la dite somme</li>
                        <li>Accueil à Minsk</li>
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