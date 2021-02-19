<?php
  session_start();
  //connetion bd
  $db = mysqli_connect("localhost", "root", "", "Projet_Universite");

  if(isset($_POST['login_btn']))
  {
      //session_start();
      $mailAdmis = htmlspecialchars($_POST['nameadmis']);
      $passAdmis = htmlspecialchars($_POST['passwordadmis']);

      $passAdmis = md5($passAdmis); //se raelle du mot de ass hashe
      $sql = "SELECT * FROM singup_admis WHERE AddressMail='$mailAdmis' AND motDepass='$passAdmis'";
      $result = mysqli_query($db, $sql);
      if(mysqli_num_rows($result) == 1)
      {
        $_SESSION['message'] = "vous etess connectez";
        $_SESSION['mailAdmis'] = $mailAdmis;
        header('Location: /Projet-Universite/admis/Administrateur.php');
      }else{
        $_SESSION['message'] = 'connexion echoue';
        header('Location: /Projet-Universite/admis/index.php');
        
      }
  }
?>