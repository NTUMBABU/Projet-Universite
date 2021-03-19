<?php
  session_start();
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_universite','root', '');

  if(isset($_SESSION['id']))
  {
?>
<?php
  if(isset($_GET['id']) AND !empty($_GET['id']))
  {
    $get_id = htmlspecialchars($_GET['id']);

    $an = $bdd->prepare('SELECT * FROM annonce_annonceur WHERE id = ?');
    $an->execute(array($get_id));

    //pour verifier si l'article exite dans le tableau
    if($an->rowCount() == 1)
    {
      $an = $an->fetch();
      $rue = $an['rue'];
      $quartier = $an['quartier'];
      $ville = $an['ville'];
      $district = $an['district'];
      $restriction = $an['note_restriction'];
    }
    else
    {
      die('cette annonce n\'est pas disponible');
    }
  }
  else
  {
    die("Erreur 404");
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="icon" href="/Projet-Universite/multi-media/ico-uni.png"/>
    <?php require_once '../styleCss/style3.php'; ?>
    <!-- API pour la map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
crossorigin=""/>
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
crossorigin=""></script>
  </head>
  <body>
    <header>
      <?php require_once '../insert-php/head2.php'; ?>
      <div class="headert">
        <a href="/Projet-Universite/html-index/index.html"><img src="/Projet-Universite/multi-media/mainLogo.png" ></a>
        <a href="/Projet-Universite/bd/deconnexionEtd.php"><input type="button" name="" class="connect" value="Se déconnecter"></a>
      </div>
    </header>
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


      <div class="map"><div id="mapid"></div></div>
      <output class="addr">Ave <?= $rue ?> <?= $quartier ?> <?= $ville ?> <?= $district ?></output>
      <input type="text" name="" value="">
      <input type="text" name="" value="">

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
        <p class="restt-maison"><?= $restriction ?></p>

      </div>
    </div>
    <!-- footer -->
      <?php require_once '../insert-php/foot.php'; ?>
  </body>
  <script>
 function init()
 {
     const parcThabor = {
         lat: -20.2220221,
         lng: 57.6000000
     }

     const zoomLevel = 10;

     const map = L.map('mapid').setView([parcThabor.lat, parcThabor.lng],zoomLevel);

     const mainLayer = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
         attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
         maxZoom: 18,
         id: 'mapbox/streets-v11',
         tileSize: 512,
         zoomOffset: -1,
         accessToken: 'pk.eyJ1IjoibnR1bWJhYnUiLCJhIjoiY2ttYWtkZG9rMXNzNTJwanhqZnd2cWsxbyJ9.q1TN9ZCwm-Q8z5hfsfOegw'
     });

     mainLayer.addTo(map);
 }
 init();
</script>
  <script type="text/javascript">
    function gallery(element_img)
    {
      var imgPreview = document.getElementById('imgPreview');
      console.log(element_img);
      imgPreview.src = element_img.firstElementChild.src;
    }
  </script>
</html>
<?php
}
else{
  header("Location:/Projet-Universite/html-index/identification.php");
}
?>
