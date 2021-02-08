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

      <div class="cadre-profil">
      <div class="d-flex position-relative">
        <img src="/Projet-Universite/multi-media/profil.png" class="flex-shrink-0 me-3" style="height:100px;width:100px;border-radius: 50%;border: 1px solid grey;">
        <div><br>
          <output name="..." class="cont">Nom complet de l'admis</output><br>
          <output name="..." class="cont">address mail de l'aadmis</output><br><br>
          <output name="..." class="cont">numero de l'admis</output><br><br>
          <a onclick="myFunction()" class="btn btn-success" >Editer votre profil</a>
        </div>
      </div>
      </div>
    </div>
    <script>
    function myFunction() {
      var myWindow = window.open("/Projet-Universite/admis/vueProfil.html","", "width=450,height=320");
    }
    </script>
  </body>
</html>
