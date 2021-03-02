<?php
  session_start();
  //connetion bd
  //$db = mysqli_connect("localhost", "root", "", "Projet_Universite");
  
  $connection = mysqli_connect("localhost","root","");
  if(!$connection){echo "connection failed!";}
  $bd = mysqli_select_db($connection,'Projet_Universite');
  if(!$bd){echo "connection failed!";}
  
  if(isset($_POST['btn_register_ann']))
  {
    //
    $nameAnnonceur = htmlspecialchars($_POST['nameAnnonceur']);
    $prenomAnnonceur = htmlspecialchars($_POST['prenomAnnonceur']);
    $numIdAnn = htmlspecialchars($_POST['numIdAnn']);
    $mailAnnonceur = htmlspecialchars($_POST['mailAnnonceur']);
    $numTelAnn = htmlspecialchars($_POST['numTelAnn']);
    $districAnn = htmlspecialchars($_POST['districAnn']);
    $villeAnn = htmlspecialchars($_POST['villeAnn']);
    $quartierAnn = htmlspecialchars($_POST['quartierAnn']);
    $rueAnnonceur = htmlspecialchars($_POST['rueAnnonceur']);
    $numMaisonAnn = htmlspecialchars($_POST['numMaisonAnn']);
    $codepostAnn = htmlspecialchars($_POST['codepostAnn']);
    $passAnn = htmlspecialchars($_POST['passAnn']);
    $confPassAnn = htmlspecialchars($_POST['confPassAnn']);//htmlspecialchars()
    
    $passAnn = md5($passAnn); //hash le mot de $passAdmis avant le stockage a la bd 
    
    $sql = "INSERT INTO `tbl_annonceur`(`nom`,`prenom`,`numCarteId`,`AddressMail`,`numTelephone`,`districs`,`ville`,`quartier`,`rue`,`numMaison`,`code_postal`,`motDepass`)
            VALUES('$nameAnnonceur','$prenomAnnonceur','$numIdAnn','$mailAnnonceur','$numTelAnn','$districAnn','$villeAnn', $quartierAnn','$rueAnnonceur','$numMaisonAnn','$codepostAnn','$passAnn')";//SELECT * FROM `tbl_annonceur
    $query_run = mysqli_query($bd,$sql);
    echo "hello";
    if($query_run)
    {
      echo '<script type="text/javascript">alert("DATA SAVED")</script>';
    }
    else
    {
      echo '<script type="text/javascript">alert("DATA NO SAVED")</script>';
    }
    header('Location: /Projet-Universite/annonceur/addPg.php');
  }
?>
