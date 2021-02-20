<?php

  if(isset($_POST['nameadmis']) && isset($_POST['passwordadmis']))
  {
    function validate($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $nameadmis = $_POST['nameadmis'];
    $passwordadmis = $_POST['passwordadmis'];
  }else{
    header("Location: /Projet-Universite/admis/index.php");
    exit();
  }
  // session_start();
  // //connetion bd
  // $db = mysqli_connect("localhost", "root", "", "Projet_Universite");
  // $error="";
  // $success="";

  // if(isset($_POST['login_btn']))
  // {
  //     $mailAdmis = htmlspecialchars($_POST['nameadmis']);
  //     $passAdmis = htmlspecialchars($_POST['passwordadmis']);

  //     $passAdmis = md5($passAdmis); //se raelle du mot de ass hashe
  //     $sql = "SELECT * FROM singup_admis WHERE AddressMail='$mailAdmis' AND motDepass='$passAdmis'";
  //     $result = mysqli_query($db, $sql);

  //     if($mailAdmis == "AddressMail")
  //     {
  //       if($passAdmis == "motDepass")
  //       {
  //         $error="";
  //         $success="Welcome Admi!!!";
  //       }else{
  //         $error="echec de connexion";
  //         $success="";
  //       }
  //     }else{
  //       $error="invalide username";
  //         $success="";
  //     }
      // if(mysqli_num_rows($result) == 1)
      // {
      //   $_SESSION['message'] = "vous etess connectez";
      //   $_SESSION['mailAdmis'] = $mailAdmis;
      //   header('Location: /Projet-Universite/admis/Administrateur.php');
      // }else{
      //   $_SESSION['message'] = 'connexion echoue';
      //   header('Location: /Projet-Universite/admis/index.php');
        
      // }
  }
?>