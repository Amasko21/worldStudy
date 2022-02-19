<?php $title = 'Étudier au Maroc'; ?>
<?php ob_start(); ?> 
    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Études superieures en Russie</h2>
            </div>
        </div>
        <div class="row">
            <div  class="col-lg-12">
                <button class="accordion">Présentation</button>
                <div class="panel">
                  <p>
                      La Russie est une destination pour tout étudiants désirant continuer ses études en Europe dans des conditions parfaites à un prix abordable pour tous. Les études y coûtent moins chères le coup de vie plus moins cher avec des jobs étudiants disponibles.
                      Les études se font en langue russe ,anglais et français. L'apprentissage de la langue russe et de la culture russe est une opportunité d'ouverture d'esprit et facilite la vie quotidienne.
                      Nous possédons des admissions garanties à 100% pour toutes les filières confondues disponibles dans un délai de 45 jours maximum ,pas de caution bancaire le visa est garanti à 100%.
                      Pour toute une année de logement, d'assurance maladie, de scolarité ,de prolongement visa et les honoraires de l'agence à un prix choquant.<br/>
                      <strong>Date limite de candidature: fin juillet</strong>strong>

                    </p>
                </div>

                <button class="accordion">Coût</button>
                <div class="panel">
                        <ul>
                            <li>
                                <h5>Frais de scolarité :</h5>
                                <ul>
                                    <li>1250 à 1500 dollars/an pour la licence</li>
                                    <li>1700 dollars/an pour le master</li>
                                </ul>
                            </li>
                            <li>
                                 Logement :350 à 400dollars/an
                            </li>
                            <li>
                                Frais de visa : 30.000 FCFA
                            </li>
                            <li>
                                Frais d’application : 2.450.000 FCFA pour une année de scolarité, une année de
                                logement, une année d’assurance maladie,frais de prolongement visa ainsi
                                que les honoraires de l’agence.
                            </li>
                             <li>
                                   Les jobs étudiants sont possibles et le visa est garantis à 100%
                            </li>
                        </ul>                    
                </div>
                
                <button class="accordion">Procédure</button>
                <div class="panel">
                            <ul>
                                <li>Paiement de frais d’avance sur le dossier : 50.000FCFA</li>
                                <li>Obtention de la lettre d’invitation en 45 jours</li>
                                <li>Paiement d’une partie de la scolarité et de logement 1.500.000FCFA</li>
                                <li>Application pour le visa</li>
                                <li>Accueil à Moscou</li>
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