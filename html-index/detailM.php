<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="icon" href="/Projet-Universite/multi-media/ico-uni.png"/>
    <?php require_once '../styleCss/style3.php'; ?>
    <script type="text/javascript">
      function gallery(element_img)
      {
        var imgPreview = document.getElementById('imgPreview');
        console.log(element_img);
        imgPreview.src = element_img.firstElementChild.src;
      }
    </script>

  </head>
  <body>
    <?php
      require_once '../insert-php/head.php';
    ?>
    <!-- Main -->
    <div class="box90">


      <div class="gallery">
        <div class="boutton">
          <img src="/Projet-Universite/multi-media/dow.png" alt="">
          <a href="#" class="tele-img">Télécharger</a>
        </div>
        <div class="full">
            <img src="/Projet-Universite/multi-media/f-scream.png" alt="">
        </a>
        </div>

        <div class="img-preview">
            <img src="/Projet-Universite/multi-media/drapeau.jpg" id="imgPreview"/>
        </div>
        <br>
        <br>
        <hr class="l1" width="70%">
        <br>
        <div class="sous-img">

          <div class="sous-img-ga" id="img1" onclick="gallery(img1);">
            <img src="/Projet-Universite/multi-media/drapeau.jpg" alt=""/>
          </div>
          <div class="sous-img-ga" id="img2" onclick="gallery(img2);">
            <img src="/Projet-Universite/multi-media/div-main2.jpg" alt=""/>
          </div>
          <div class="sous-img-ga" id="img3" onclick="gallery(img3);">
            <img src="/Projet-Universite/multi-media/drapeau.jpg" alt=""/>
          </div>
          <div class="sous-img-ga" id="img4" onclick="gallery(img4);">
            <img src="/Projet-Universite/multi-media/div-main2.jpg" alt=""/>
          </div>
          <div class="sous-img-ga" id="img5" onclick="gallery(img5);">
            <video controls="controls">
              <source src="/Projet-Universite/multi-media/video1.mp4" type="video/mp4">
            </video>
          </div>
          <div class="sous-img-ga"id="img6" onclick="gallery(/Projet-Universite/multi-media/video1.mp4);">
            <video controls="controls">
              <source src="/Projet-Universite/multi-media/video2.mp4" type="video/mp4">
            </video>
          </div>

        </div>

      </div>


      <div class="map"></div>
      <output name="result" class="addr">Ave Nubee Staley Camp Levieux Rose hill</output>


      <div class="id-bail">
        <div class="profil-bail">
          <img src="/Projet-Universite/multi-media/profil.png" alt="">
        </div>
        <div class="cord-bail">
          <output name="name-bail">Ntumbabu Tshiteya Joas</output><br>
          <output name="addr-bail">Camp Levieux Rose hill</output><br>
          <img src="/Projet-Universite/multi-media/telephone.png" alt="" id="cordne-tel-img">
          <output name="num-bail" id="cordne-tel">000-000-000</output>
          <img src="/Projet-Universite/multi-media/mail.png" alt="" id="cordne-mail-img">
          <output name="mail-bail" id="cordne-mail">trouverVotreChemin@yohoo.com</output>
        </div>
      </div>
      <br>
      <br>
      <hr class="l2">

      <div class="detail-maison">
        <h6>Détailles sur la maison</h6>
        <ul class="dtt-maison">
          <li>Nombre de chambre : <output name="nbr-chbr"> 3</output></li>
          <li>Nombre de chambre disponible : <output name="nbr-chbr-dispo"> 1</output> </li>
          <li>Prix location de la maison : <output name="prix-loc-M"> Rs 9000 </output> </li>
          <li>Prix location de la chambre : <output name="prix-chbr"> Rs 3000</output> </li>
          <li>Nombre de personne par chambre : <output name="nbr-pers-par-chbr"> 2</output> </li>
          <li>Nombre de chambre pour plus d'une personne : <output name="nbr-chbr-plsr"> 1</output> </li>
          <li>Prix par personne : <output name="prix-par-persn"> Rs 9000</output> </li>
        </ul>
      </div>
      <div class="restric-maison">
        <h6>Note et restriction de la maison</h6>
        <p class="restt-maison">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
          veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
          cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
          id est laborum</p>

      </div>



    </div>


    <!-- footer -->
      <?php require_once '../insert-php/foot.php'; ?>
  </body>
</html>
