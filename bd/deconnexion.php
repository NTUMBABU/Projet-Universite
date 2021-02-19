<?php 
    session_start();
    session_destroy();
    $_SESSION['message'] = "vous etes deconnecte";
    header('Location:/Projet-Universite/admis/index.php');
?>