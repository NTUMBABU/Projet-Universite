<?php
    //echo "hello";
  session_start();
  //connetion bd
  $db = mysqli_connect("localhost", "root", "", "Projet_Universite");

  if(isset($_POST['btn_register']))
  {
      //session_start();
      $nameAdmis = htmlspecialchars($_POST['nameAdmis']);
      $prenomAdmis = htmlspecialchars($_POST['prenomAdmis']);
      $numAdmis = htmlspecialchars($_POST['numAdmis']);
      $mailAdmis = htmlspecialchars($_POST['mailAdmis']);
      $passAdmis = htmlspecialchars($_POST['passAdmis']);
      $confpassAdmis = htmlspecialchars($_POST['confpassAdmis']);

      if($passAdmis == $confpassAdmis)
      {
          //creation d'utilisateur
          $passAdmis = md5($passAdmis); //hash le mot de $passAdmis avant le stockage a la bd
          $sql = "INSERT INTO singup_admis(nom, prenom, numTelephone, AddressMail, motDepass)
                        VALUES('$nameAdmis', '$prenomAdmis', '$numAdmis', '$mailAdmis', '$passAdmis')";
          mysqli_query($db, $sql);
          $_SESSION['message'] = "vous etes actuellement inscrit";
          $_SESSION['nameAdmis'] = $nameAdmis;
          header('Location: /Projet-Universite/admis/Administrateur.php');
      }else{
          $_SESSION['message'] = "le deux mot de  passe ne correspond ppas";
          echo "<div class='alert alert-danger'>".$_SESSION['message']."</div>";
        }
  }
?>
