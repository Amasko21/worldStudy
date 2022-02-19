<?php

require_once('models/backend/Messages.php');

function adminIndex()
{
    header('Location: /Admin/');
}


function seeMessages()
{
    $messages = new Messages();
    $messagesRecu = $messages->getMessages();
    require_once('views/backend/messages.php');
}