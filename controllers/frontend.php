<?php
require_once('models/frontend/contactManager.php');

function index()
{
    
    require_once('views/frontend/index.php');   
}
function admission()
{
    require_once('views/frontend/admission.php');
}
function about()
{
    require_once('views/frontend/about.php');
}
function services()
{
    require_once('views/frontend/services.php');
}
function maroc()
{
    require_once('views/frontend/maroc.php');
}
function contacter($nom, $email, $subjet, $message)
{
    $sendMessage = new ContactManager();
    $send = $sendMessage->SendAMessage($nom, $email, $subjet, $message);  
}
function sentDocument()
{
    require_once('views/frontend/admission_document.php');
}
function france()
{
    require_once('views/frontend/france.php');
}

function tunisie()
{
    require_once('views/frontend/tunisie.php');
}

function turquie()
{
    require_once('views/frontend/turquie.php');
}

function canada()
{
    require_once('views/frontend/canada.php');
}

function ukraine()
{
    require_once('views/frontend/ukraine.php');
}

function bielorussie()
{
    require_once('views/frontend/bielorussie.php');
}

function russie()
{
    require_once('views/frontend/russie.php');
}

function chypre()
{
    require_once('views/frontend/chypre.php');
}

function australie()
{
    require_once('views/frontend/australie.php');
}