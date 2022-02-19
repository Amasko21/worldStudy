<?php
require_once("models/Manager.php");

class ContactManager extends Manager
{
    public function SendAMessage($nom, $email,  $subject, $message)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO messages(nom, email, sujet, message, date_envoi) VALUES(?, ?, ?, ?, NOW()) ');
        $reqexc = $req->execute(array($nom, $email, $subject, $message));
        var_dump($reqexc);
        return $reqexc;
    }
}

