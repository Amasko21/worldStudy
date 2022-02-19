<?php
require_once('controllers/frontend.php');
require_once('controllers/backend.php');

if(isset($_GET['action']))
{
    switch($_GET['action'])
    {
        case 'index' :
            {
                index();
                break;
            }
        case 'admission' :
            {
                admission();
                break;
            }
        case 'about' :
            {
                about();
                break;
            }
        case 'services' :
            {
                services();
                break;
            }
        case 'maroc' :
            {
                maroc();
                break;
            }
        case 'contacter' :
            {
                if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']))
                {
                    contacter($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']);   
                }
                break;
            }
        case 'sentDocument' :
            {
                sentDocument();
                break;
            }
        case 'france' :
            {
                france();
                break;
            }
        case 'tunisie' :
            {
                tunisie();
                break;
            }
        case 'canada' :
            {
                canada();
                break;
            }
        case 'turquie' :
            {
                turquie();
                break;
            }
        case 'chypre' :
            {
                chypre();
                break;
            }
        case 'ukraine' :
            {
                ukraine();
                break;
            }
        case 'bielorussie' :
            {
                bielorussie();
                break;
            }
        case 'russie' :
            {
                russie();
                break;
            }
        case 'australie' :
            {
                australie();
                break;
            }
        case 'admin' :
            {
                adminIndex();
                break;
            }
        case 'voirMessages' :
            {
                seeMessages();
                break;
            }
    }
}
else
{
    index();
}