<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Les options</title>
    <link rel="icon" href="/Projet-Universite/multi-media/ico-uni.png"/>
    <?php require_once '../styleCss/style2.php'; ?>
  </head>
  <body>
    <?php
      require_once '../insert-php/head.php';
    ?>
    <div class="boxCont2">
      <!-- le heder  -->
      <h4>Support des étudiants internationaux</h4>
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
              <output name="prix" style="color:red;">Rs 10000</output>
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
              <output name="prix" style="color:red;">Rs 120000</output>
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
              <output name="prix" style="color:red;"> Rs 4000</font> </output>
              <output name="type">Chambre</output>
            </div>
          </div>
        </div>
  </a>
    <!-- le footer -->
    <?php require_once '../insert-php/foot.php'; ?>


  </body>
</html>
