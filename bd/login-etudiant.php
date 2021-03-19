<?php
  session_start();

  $bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_universite','root', '');

  if(isset($_POST['button']))
  {
    $identifiant = htmlspecialchars($_POST['identifiant']);
    $password = sha1($_POST['password']);

    if(!empty($identifiant) AND !empty($password))
    {
      $requser = $bdd->prepare("SELECT * FROM tbl_etudiant WHERE addr_mail = ? AND motDePass = ?");
      $requser->execute(array($identifiant, $password));

      $userexist = $requser->rowCount();
      if($userexist == 1)
      {
        $userinfo = $requser->fetch();
        $_SESSION['id'] = $userinfo['id'];
        $_SESSION['nom'] = $userinfo['nom'];
        $_SESSION['addr_mail'] = $userinfo['addr_mail'];
        header("Location: /Projet-Universite/html-index/optionU.php?id=".$_SESSION['id']);
      }
      else
      {
        header("Location: /Projet-Universite/html-index/identification.php?error=connexion echoue!");
      }
    }
    else
    {
      header("Location: /Projet-Universite/html-index/identification.php?error=connexion echoue!");
    }
  }
 ?>
