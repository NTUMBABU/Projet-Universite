<?php
  session_start();
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_universite','root', '');

  if(isset($_GET['id']) AND $_GET['id'] > 0)
  {
    $getid = intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM tbl_etudiant WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Les options disponibles</title>
    <link rel="icon" href="/Projet-Universite/multi-media/ico-uni.png"/>
    <?php require_once '../styleCss/style2.php'; ?>
  </head>
  <body>
    <header>
      <?php require_once '../insert-php/head2.php'; ?>
      <div class="headert">
        <a href="/Projet-Universite/html-index/index.html"><img src="/Projet-Universite/multi-media/mainLogo.png" ></a>
        <h5>Vous êtes connecté en tant que <?php echo $userinfo['nom'];?> </h5>
        <a href="/Projet-Universite/html-index/edition_profil.php"><input type="button" class="edition_profil" value="Editer votre profil"></a>
        <a href="/Projet-Universite/bd/deconnexionEtd.php"><input type="button" class="connect" value="Se déconnecter"></a>
      </div>
    </header>
    <!-- le heder  -->
    <div class="boxCont1">
      <h4 class="titre11">Les options disponibles</h4>

      <!-- les option -->
      <a href="locatioM.php"><div class="option1">
        <h5>Chercher une maison</h5>
        <p>Dans cette option vous avez la possibilité de trouver
        une maison  selon vôtres choix, il est recommandé de surtout
      en choisir celle qui se trouve non loin du campus à quel vous suivez
      (Suivre) vos cours.</p>
    </div></a>
      <a href="chercheCt.php"><div class="option2">
      <h5>Chercher des contacts</h5>
        <p>Cette option vous permettra de se trouver
       Un ou plusieurs contacts au sein de l'Universite des Mascareignes
      elle recommande surtout pour les étudiants n'étant pas à Maurice
      mais ayant reçu une lettre d'admission de l'université.</p>
    </div></a>
  </div>

    <!-- le footer -->
    <?php require_once '../insert-php/foot.php'; ?>


  </body>
</html>
<?php
}
else{
  header("Location:/Projet-Universite/html-index/identification.php");
}
?>
