<?php
  session_start();
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_universite','root', '');

  if(isset($_SESSION['id']))
  {
?>
<?php
  $etd = $bdd->query('SELECT * FROM tbl_etudiant  WHERE aprobationEtd LIKE "oui"');//
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chercher un contact</title>
    <link rel="icon" href="/Projet-Universite/multi-media/ico-uni.png"/>
    <?php require_once '../styleCss/style3.php'; ?>
  </head>
  <body>
    <header>
      <?php require_once '../insert-php/head2.php'; ?>
      <div class="headert">
        <a href="/Projet-Universite/html-index/index.html"><img src="/Projet-Universite/multi-media/mainLogo.png" ></a>
        <?php $home = $_SESSION['id'];?>
          <a href="/Projet-Universite/html-index/optionU.php?id=<?= $home['id']?>"><input type="button" class="edition_profil" value="Home"></a>

        <a href="/Projet-Universite/bd/deconnexionEtd.php"><input type="button" class="connect" value="Se déconnecter"></a>
      </div>
    </header>
    <!-- Main -->
    <div class="box80">
      <h4 class="titre11">Rubrique des étudiants étant à Maurice</h4>
      <div class="cadrage">

      <?php while($a = $etd->fetch()) { ?>
      <div class="contact1">
        <div class="profil-C">
            <img src="/Projet-Universite/multi-media/profil.png" alt="">
        </div>
        <div class="contenu">
            <output name="nom-Ct"><?= $a['nom']?></output><br>
            <output name="campus-Ct"><?= $a['campus']?></output><br>
            <output name="filier-Ct"><?= $a['filiere']?></output>
        </div>
      </div>
      <?php }?>

      </div>

    </div>

    <!-- Footer -->
    <?php require_once '../insert-php/foot.php'; ?>
  </body>
</html>
<?php
}
else{
  header("Location:/Projet-Universite/html-index/identification.php");
}
?>
