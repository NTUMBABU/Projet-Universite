<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="/Projet-Universite/multi-media/ico-uni.png"/>
    <title>Support des étudiants internationaux</title>
    <?php require_once '../styleCss/style.php';?>
    <script type="text/javascript" src="../JavaScript/main.js"></script>
    <script type="text/javascript" src="main2.js"/>

    </script>
  </head>
  <body>
    <?php require_once '../insert-php/head.php';?>
    <div class="boxp12">
      <h4>Support des étudiants internationaux</h4>

      <div class="div_pg3">
        <form action="../bd/singUp-etudiant.php" class="form_id" method="post">

          <h3 class="titre1">S'inscrire</h3>
          <table class="tableau1">
            <tr>
              <td align=left>Nom  : </td>
              <td><input type="text" name="nom" id="nom" placeholder="votre nom"></td>
            </tr>
            <tr>
              <td align=left>Prénom : </td>
              <td><input type="text" name="prenom" id="prenom" placeholder="votre prénom"/></td>
            </tr>
            <tr>
              <td align=left>Numéro telephone : </td>
              <td><input type="tel" name="tel" id="prenom" placeholder="votre numéro telephone"/></td>
            </tr>
        </table>
        <hr>
        <table class="tableau1">
          <tr>
            <td align=left>Filère  : </td>
            <td><input type="text" name="filier" id="filier" placeholder="votre filère"></td>
          </tr>
          <tr>
            <td align=left>Date première année  : </td>
            <td><input type="date" name="date" id="date"/></td>
          </tr>
          <tr>
            <td align=left>Sélectionné votre campus : </td>
            <td>
              <select name="selectCamp" class="campus">
                <option value="" disabled selected>choisir...</option>
                <option value="roseHill">Rose Hill Campus</option>
                <option value="pamplemouse">Swami Dayanand Campus</option>
                <option value="belAire">Bel air Campus</option>
              </select>
            </td>
          </tr>
          <tr>
            <td align=left>Mot de passe : </td>
            <td><input type="password" name="password" id="password" placeholder="mot de passe"/></td>
          </tr>
          <tr>
            <td align=left>Confirme le Mot de passe : </td>
            <td><input type="password" name="password" id="password" placeholder="Confirme le Mot de passe" /></td>
          </tr>
        </table>

        <hr>
        <br>
        <div class="div-confirme">
          <ul class="confirmation">
            <li>Êtes-vous déjà installé à l'ile Maurice ? :&nbsp;&nbsp;</li>
            <li>
              <input type="radio" name="confirme" id="oui"> <label>Oui&nbsp;&nbsp;</label>
            </li>
            <li>
              <input type="radio" name="confirme" id="non"> <label>Non</label>
            </li>
          </ul>
          <div class="option1">

          </div>
          <div class="option2">

          </div>
        </div>

        <br>
          <hr>
          <br>
          <div class="boutton_soumetre"><input type="submit" name="button" id="button" value="Valider" onclick="togglePopup()"></input></div>


        </form>
      </div>
    </div>

    <!--popup-->
    <div class="popup" id="popup-1">
      <div class="photo_profil">
        <img src="/Projet-Universite/multi-media/profil.png" alt="phpot profil" id="profile">
        <input type="file" id="file">
      </div>
      <div class="min-label">
        <label for="file" id="uploadBtn">Cliquez ici pour insere une photo de profile</label>
      </div>
      <input type="button" name="close" id="close" value="Plus tard">
      <div class="close-popup" onclick="togglePopup()">&times;</div>
    </div>
    <?php
      require_once '../insert-php/foot.php';
     ?>
  </body>
  <!-- ne pas oublie de mettre les petit detail comme enleve
les titre dasn le hedera dasn le h4-->
</html>
