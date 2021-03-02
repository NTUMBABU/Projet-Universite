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
        <a href=""><input type="button" name="" class="connect" value="Se déconnecter"></a>
      </div>
    </header>
    <div class="boxCont2">
      <!-- le heder  -->
      <h4 class="titre11">Liste des maisons disponibles</h4>
      <div class="id-user">

      </div>

      <!-- les maison -->
      <a href="detailM.php">

          <div class="maison1">
            <div class="presentation">
              <img src="/Projet-Universite/multi-media/test.jpg" alt="première image">
            </div>
            <div class="info-M">
              <output name="adrr">Rose-Hill</output><br>
              <output name="prix" style="color:red;">Rs 00000</output>
              <output name="type">Maison</output>
            </div>
          </div>
    </a>

    <a href="#">

          <div class="maison2">
            <div class="presentation">
              <img src="/Projet-Universite/multi-media/test.jpg" alt="première image">
            </div>
            <div class="info-M">
              <output name="adrr">Quatre-Borne</output><br>
              <output name="prix" style="color:red;">Rs 00000</output>
              <output name="type">Maison</output>
            </div>
          </div>

    </a>

    <a href="#">

          <div class="maison3">
            <div class="presentation">
              <img src="/Projet-Universite/multi-media/test.jpg" alt="première image">
            </div>
            <div class="info-M">
              <output name="adrr">Port-Luis</output><br>
              <output name="prix" style="color:red;"> Rs 0000</font> </output>
              <output name="type">Chambre</output>
            </div>
          </div>
        </div>
  </a>
    <!-- le footer -->
    <?php require_once '../insert-php/foot.php'; ?>


  </body>
</html>
