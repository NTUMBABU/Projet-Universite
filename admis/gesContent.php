<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <?php require_once '../styleCss/style5.php'?>
    <link rel="icon" href="/Projet-Universite/multi-media/ico-ad.png" height="10" width="10"/>
    <meta charset="utf-8">
    <title>Espace administrateur</title>
  </head>
  <body>
    <?php require_once '../insert-php/espAdmis.php' ?>
    <div class="content-admi">
      <div class="content-ges">

        <h3>Répertoire des contenu du site</h3>
        <hr>
        <h4>Page d'accueil</h4>
        <hr class="barr">
        <h5>Caroussel :</h5>
        <div class="content-Caroussel">
          <div class="carou">
            <div class="img-carou">
              <img src="" alt="">
            </div>
            <div class="option">
              <button type="button" class="btn btn-success">Changer</button>
              <!-- <input type="file" name="" value="" accept="image/*"> -->
              <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
          </div>
          <div class="carou">
            <div class="img-carou">
              <img src="" alt="">
            </div>
            <div class="option">
              <button type="button" class="btn btn-success">Changer</button>
              <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
          </div>
          <div class="carou">
            <div class="img-carou">
              <img src="" alt="">
            </div>
            <div class="option">
              <button type="button" class="btn btn-success">Changer</button>
              <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
          </div>
        </div>
        <h1>Image principale :</h1>
        <h1>Image principale :</h1>
        <h5>Image principale :</h5>
        <h1>Image principale :</h1>
        <h5>Image principale :</h5>
        <h3>Image principale :</h3>
        <br>
        <br>
        <h5>Image principale :</h5>
        <div class="img-principale">
          <div class="img1">
            <img src="" alt="">
          </div>
          <div class="option1">
            <button type="button" class="btn btn-success">Changer</button>
            <button type="button" class="btn btn-danger">Supprimer</button>
          </div>
          <div class="img1">
            <img src="" alt="">
          </div>
          <div class="option2">
            <button type="button" class="btn btn-success">Changer</button>
            <button type="button" class="btn btn-danger">Supprimer</button>
          </div>
        </div>
        <br>
        <br>
        <h5>Titre principale :</h5>
        <textarea name="..." rows="3" cols="80"></textarea>
        <button type="button" class="btn btn-success">Changer</button>
        <br>
        <br>
        <h5>Sommaire :</h5>
        <textarea name="..." rows="6" cols="80"></textarea>
        <button type="button" class="btn btn-success">Changer</button>



      </div>
    </div>
  </body>
</html>
