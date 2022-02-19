<?php
require_once("models/Manager.php");

class Messages extends Manager
{
    public function getMessages()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, nom, email, sujet, message
                            FROM messages ORDER BY date_envoi DESC');
        return $req;
    }
}