<?php $title = 'Étudier au Maroc'; ?>
<?php ob_start(); ?> 
    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Études superieures au Canada</h2>
            </div>
        </div>
        <div class="row">
            <div  class="col-lg-12">
                <button class="accordion">Présentation</button>
                <div class="panel">
                  <p>
                      Au Canada ; les frais de scolarité varient  selon le programme, le cycle d'études ,l'établissement et la province. Tout étudiant non canadien paye les frais de scolarité qui varient entre 8000 à 23000 euros selon le cursus. Il faut aussi environ 700 euros par mois pour votre logement; dépenses quotidiennes. Le payement de ces frais aura lieu une fois au Canada.
                      Obtenir un permis d'études est une étape incontournable .Vous pourrez l'obtenir suite a la présentation de l'attestation de votre acceptation dans une institution supérieure canadienne.
                      Il est possible avec un permis d'étude d'avoir la possibilité de travailler 20H/semaine en même temps une fois arrivé au Canada. 
                      Nous possédons des admissions garanties à 100%  dans un délai de 2 semaines maximum pour des programmes qui font l'objet  d'une à deux ans d'étude au sein d'un établissement canadien. Et vous permettra d'accéder au monde de travail avec un diplôme d'étude professionnel. 
                      Vous aurez également à la fin de cette formation faire une demande de résidentes permanente après une année de travail au Canada pour l'expérience canadienne. 
                      Bourses : Vous aurez des opportunités de bourses une fois sur place pour vous aider à alléger vos charges. Ces bourses ne sont pas disponibes étant à l'extérieur du Canada.<br/>
                      <strong>Date limite de candidature: </strong>
                      <strong>Début Novembre pour la rentrée de janvier</strong>
                      <strong>Début Mars pour la rentrée de septembre</strong>
                    </p>
                </div>

                <button class="accordion">Coût</button>
                <div class="panel">
                  <ul>
                        <li>
                            Frais de scolarité : 10.000 euros/an CAD 4.500.000FCFA
                         </li>
                        <li>
                            Frais de logement : 500 euros/an CAD 300.000FCFA
                         </li>
                        <li>
                             Frais de préinscription : 150.000 FCFA
                        </li>
                        <li>Frais de visa : 114.000 FCFA</li>
                        <li>Frais de l’agence : 500.000 FCF</li>
                    </ul>
                </div>
                
                <button class="accordion">Procédure</button>
                <div class="panel">
                    <ul>
                        <li>Paiement des frais de préinscription</li>
                        <li>Obtention de la lettre d’admission</li>
                        <li>Paiement des frais de l’Agence et procédures d’application pour le visa</li>
                        <li>Accueil à Ottawa</li>
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