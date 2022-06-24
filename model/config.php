<?php 
    
    $host = 'localhost';
    $dbname = 'moving_art_coaching';
    $dblogin = 'root';
    $dbpassword = 'root';

    try 
    {
        $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$dblogin,$dbpassword);
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }

