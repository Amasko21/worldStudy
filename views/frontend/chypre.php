<?php $title = 'Étudier au Maroc'; ?>
<?php ob_start(); ?> 
    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Études superieures au Chypre du nord</h2>
            </div>
        </div>
        <div class="row">
            <div  class="col-lg-12">
                <button class="accordion">Présentation</button>
                <div class="panel">
                  <p>
                      C'est un pays sous la domination Turque mais vivant en mode Européen où les jobs étudiants sont permis et disponibles pour tout étudiants .les cours sont dispensés en anglais dont les 6 premiers mois sont gratuits.
                      Les frais de scolarité payés en avance prendront effet à partir du second semestre.
                      Le coup de vie et d'études sont moins chers , optez pour cette destination avec une admission garantie à 100% et un visa accessible sur place à l'aéroport . Toutes les filières sont disponibles et la procédure ne prend que 1mois et demi.<br/>
                      <strong>Date limite de candidature: début janvier</strong>

                    </p>
                </div>

                <button class="accordion">Coût</button>
                <div class="panel">
                  <ul>
                    <li>
                        Frais d’application : 2.400.000 FCFA pour une année de logement; une année
                        de scolarité, une année d’assurance maladie, une année de frais de visa ainsi
                        que les honoraires de l’agence.
                    </li>
                    <li>
                        Frais de langue : (anglais) gratuit pour 6mois
                    </li>
                    <li>
                        Frais de logement : 770 dollars /an
                    </li>
                    <li>
                        Les jobs étudiants sont disponibles et le visa est garantis à 100%
                    </li>
                 </ul>
                </div>
                
                <button class="accordion">Procédure</button>
                <div class="panel">
                    <ul>
                        <li>Paiement de frais d’admission 100.000 FCFA</li>
                        <li>Obtention de la lettre d’admission provisoire</li>
                        <li>Paiement des frais scolaires pour une année à 1000.000 FCFA</li>
                        <li>Obtention de la lettre d’admission officielle en 2 semaines maximum</li>
                        <li>Accueil à Chypre</li>
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
?>