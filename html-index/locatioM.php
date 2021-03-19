<?php
  session_start();
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_universite','root', '');

  if(isset($_SESSION['id']))
  {
?>
<?php
  $annonce = $bdd->query('SELECT * FROM annonce_annonceur ORDER BY date_publication DESC');

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Les options</title>
    <link rel="icon" href="/Projet-Universite/multi-media/ico-uni.png"/>
    <?php require_once '../styleCss/style2.php'; ?>
  </head>
  <body>
    <header>
      <?php require_once '../insert-php/head2.php'; ?>
      <div class="headert">
        <a href="/Projet-Universite/html-index/index.html"><img src="/Projet-Universite/multi-media/mainLogo.png" ></a>
        <?php $home = $_SESSION['id'];?>
          <a href="/Projet-Universite/html-index/optionU.php?id=<?= $home['id']?>"><input type="button" class="edition_profil" value="Home"></a>
        <a href="/Projet-Universite/bd/deconnexionEtd.php"><input type="button" name="" class="connect" value="Se déconnecter"></a>
      </div>
    </header>
    <div class="boxCont2">
      <!-- le heder  -->
      <h4 class="titre11">Liste des maisons disponibles</h4>
      <div class="id-user">

      </div>

      <!-- les maison -->
      <?php while($a = $annonce->fetch()){?>
      <a href="detailM.php?id=<?= $a['id']?>">
          <div class="maison1">
            <div class="presentation">
              <img src="/Projet-Universite/multi-media/test.jpg" alt="première image">
            </div>
            <div class="info-M">
              <span><?= $a['tag']?></spant><br>
              <output name="prix" style="color:red;">Rs <?= $a['prix_maison']?></output>
              <span>Maison</span>
              <br>
              <output name="prix" style="color:red;">Rs <?= $a['prix_chambre']?></output>
              <span>Chambre</span>
              <br>
              <span><?= $a['ville']?></span>
            </div>
            <div align="right" class="temp">
              <span><?= $a['date_publication']?></span>
            </div>
          </div>
        </a>

  <?php }?>
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
