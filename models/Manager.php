<?php
class Manager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=musixvdx_worldstudies;charset=utf8', 'musixvdx_Amadou', 'MaRiaMtraore21');
        return $db;
    }
}
?>