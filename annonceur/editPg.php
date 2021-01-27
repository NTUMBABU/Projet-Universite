<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="/Projet-Universite/multi-media/ico-ad.png" height="10" width="10"/>
    <?php require_once '../styleCss/style4.php' ?>
    <title>Edité vos annonce</title>
  </head>
  <body>
    <?php require_once '../insert-php/espAnnonceur.php' ?>
    <div class="contenu">

      <div class="row xl-10">

      <div class="card" style="width: 18rem;">
        <img src="/Projet-Universite/multi-media/test.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Maison 1234</h5>
          <a href="editPg/editer.php" class="btn btn-success">Editer</a>
          <a href="editPg/apercu.php" class="btn btn-info">Aperçu</a>
          <a href="#" class="btn btn-danger" style="margin-top:10px;">Suprimer</a>
        </div>
      </div>



      </div>
    </div>
    </div>
    <footer class="pied">
      <div class="contenu-footer ">
        <p class="p-f">copy right</p>
      </div>
    </footer>
  </body>
</html>
