<?php $title = 'Documents-World Studies'; ?>

<?php ob_start(); ?> 
    <section class="container-fluid">
         <div class="row">
            <div class="col-lg-12" style="margin-top : 10px; margin-bottom : 30px;">
                <h2 class="text-center">Dossier d'admisssion</h2>
                <p>Veuillez renseigner une nouvelle fois votre nom complet ainsi que votre adresse mail afin de charger vos documents </p>
             </div>
        </div>
            <form action="Envoie_document" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Entrer au moins 4 caractères " required />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre adresse mail" data-rule="email" data-msg="Enter une  adresse email valide" required />
                  <div class="validate"></div>  
                </div>
              </div>
            <div class="form-row">
                <div class="col-md-6 col-sm-12">

                  <!-- Our markup, the important part here! -->
                  <div id="drag-and-drop-zone" class="dm-uploader p-5">
                    <h3 class="mb-5 mt-5 text-muted">Drag &amp; drop files here</h3>

                    <div class="btn btn-primary btn-block mb-5">
                        <span>Open the file Browser</span>
                        <input type="file" title='Click to add Files' />
                    </div>
                  </div><!-- /uploader -->
                </div>
                <div class="col-md-6 col-sm-12">
                      <div class="card h-100" style="width : 700px;">
                        <div class="card-header">
                          File List
                        </div>

                        <ul class="list-unstyled p-2 d-flex flex-column col" id="files">
                          <li class="text-muted text-center empty">No files uploaded.</li>
                        </ul>
                      </div>
                </div>
            </div>
            <div class="form-row">
                <input id="btnApiStart" type="submit" value="Envoyer">        
            </div>
        </form>
    </section>
<?php $content = ob_get_clean(); ?>
<?php ob_start(); ?>
 <!-- File item template -->
    <script type="text/html" id="files-template">
      <?php
        echo '
        <li class="media">
        <div class="media-body mb-1">
          <p class="mb-2">
            <strong>%%filename%%</strong> - Status: <span class="text-muted">Waiting</span>
          </p>
          <div class="progress mb-2">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" 
              role="progressbar"
              style="width: 0%" 
              aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
          <hr class="mt-1 mb-1" />
        </div>
      </li>
        ';
      ?>
    </script>

    <!-- Debug item template -->
    <script type="text/html" id="debug-template">
      <?php 
        echo '
        <li class="list-group-item text-%%color%%"><strong>%%date%%</strong>: %%message%%</li>
        ';
      ?>
    </script>
<?php $autreScript = ob_get_clean(); ?>
<?php
    require_once('template.php');
?>