<?php session_start();
  if(isset($_SESSION['ameadmis']) && isset($_SESSION['passwordadmis']))
  {

  }else{
    header("Location: /Projet-Universite/admis/index.php");
    exit();
  }
?>
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
    <div class="tab1">
      <img src="../multi-media/anno.png" height="60" width="60">
      <span class="spanTab">Nombre des annonceur</span>
      <output class="outputTab"name="...">80</output>
    </div>
    <div class="tab2">

    </div>
    <div class="tab3">
      <img src="../multi-media/student.png" height="60" width="60">
      <span class="spanTab">Nombre des étudiant étant à Maurice</span>
      <output class="outputTab"name="...">80</output>
    </div>
    <div class="tab4">
      <img src="../multi-media/student.png" height="60" width="60">
      <span class="spanTab">Nombre des étudiant n'étant pas à Maurice</span>
      <output class="outputTab"name="...">80</output>
    </div>
    <div class="tab5">
      <img src="../multi-media/posteAnn.png" height="60" width="60">
      <span class="spanTab">Nombre des poste des annonceur</span>
      <output class="outputTab"name="...">80</output>
    </div>
    <div class="grpBtn">
      <a href="liste-annonceur.php"><button type="button" class="button-liste">Liste des annonceur</button></a>
      <a href="liste-etd-maurice.php"><button type="button" class="button-liste">Liste des étudiant étant à Maurice</button></a>
      <a href="liste-etd-maurice.php"><button type="button" class="button-liste">Liste des étudiant n'étant pas à Maurice</button></a>
    </div>
    </div>

  </body>
</html>
