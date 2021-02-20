<?php 
    session_start();
    session_unset();
    session_destroy();
    header('Location:/Projet-Universite/admis/index.php');
?>