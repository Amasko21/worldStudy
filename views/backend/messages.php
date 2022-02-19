<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>WORDLSTUDIES-Espace administrateur, messages</title>
        <link rel="stylesheet" type="text/css" href="../public/vendor/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <section class="container">
            <div class="row">
                <div class="panel panel-primary">
                    <table class="table table-striped table-condensed">
                        <div class="panel-heading"><h3 class="panel-title"> Les messages envoyés á WorldStudies :</h3></div>
                        <thead>
                            <tr>
                                <th>Nom de la personne</th>
                                <th>Sujets</th>
                                <th>Voir plus sur le message</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($donnees = $messagesRecu->fetch())
                                {
                                    echo '
                                    <tr>
                                        <th>'.$donnees['nom'].'</th>
                                        <th>'.$donnees['sujet'].'</th>
                                        <th>'.$donnees['message'].'</th>
                                        <th>'.$donnees['email'].'</th>
                                    </tr>
                                    ';
                                }
                            ?>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>    
        </section>
            
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>    
    </body>
</html>