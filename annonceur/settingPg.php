<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="/Projet-Universite/multi-media/ico-ad.png" height="10" width="10"/>
    <?php require_once '../styleCss/style4.php'?>
    <title>Paramètre</title>
  </head>
  <body>
    <?php require_once '../insert-php/espAnnonceur.php'?>
    <div class="contenu">
      <div class="div1">
        <div class="d-flex position-relative">
          <img src="../multi-media/profil.png" class="flex-shrink-0 me-3" style="height:100px;width:100px;border-radius: 50%;border: 1px solid grey;">
          <div><br>
            <output name="..." class="cont">Nom complet de l'annonceu</output><br>
            <output name="..." class="cont">address mail de l'annonceur</output><br><br>
            <output name="..." class="cont">address de l'annonceur</output><br><br>
            <a href="editProfil/index.php" class="btn btn-success" >Editer votre profil</a>
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
