<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=Projet_Universite;charset=utf8','root','');
    }catch(Exception $e)
    {
        die('Erreur de connexion'.$e->getMessage());
    }
?>