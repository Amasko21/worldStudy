<?php $title = 'World Studies-Admission'; ?>
<?php ob_start(); ?> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="margin-top : 40px"><h2 class="text-center">Dossier d'admisssion</h2></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="container-form">
                    <div id="form-content">
                        <div class="form-content-container">
                            <iframe width="900px" height= "480px" src= "https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAMAADCQB49UMzFTWThHSldLWUJUVThIQVg0TERDS1NZUS4u&embed=true" frameborder= "0" marginwidth= "0" marginheight= "0" style= "border: none; max-width:100%; max-height:100vh" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen> </iframe>
                        </div>
                    </div>
                </div>     
            </div>
    </div>
<?php $content = ob_get_clean(); ?>
<?php ob_start(); ?>
<?php $autreScript = ob_get_clean(); ?>
<?php
    require_once('template.php');
?>