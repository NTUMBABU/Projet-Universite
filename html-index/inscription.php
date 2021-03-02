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
    <header>
      <?php require_once '../insert-php/head2.php'; ?>
      <div class="headert">
        <a href="/Projet-Universite/html-index/index.html"><img src="/Projet-Universite/multi-media/mainLogo.png" ></a>
        <a href="/Projet-Universite/html-index/identification.php"><input type="button" name="" class="connect" value="Se connecter"></a>
      </div>
    </header>
    <div class="contenu">
      <!-- <h4>Support des étudiants internationaux</h4> -->
      <div class="div_pg3">
        <form action="../bd/singUp-etudiant.php" class="form_id" method="post">

          <h3 class="titre1">Créez votre compte</h3>
          <table class="tableau1">
            <tr>
              <td align=left>Nom  : <span style="color:red;">*</span> </td>
              <td><input type="text" name="nom" id="nom" placeholder="votre nom"></td>
            </tr>
            <tr>
              <td align=left>Prénom : <span style="color:red;">*</span></td>
              <td><input type="text" name="prenom" id="prenom" placeholder="votre prénom"/></td>
            </tr>
            <tr>
              <td align=left>Adresse e-mail : <span style="color:red;">*</span></td>
              <td> <input type="mail" name="mail" id="prenom" placeholder="votreAdresse@email"> </td>
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
            <td>
              <select name="selectFilier" class="campus">
                <option value="" disabled selected>choisir...</option>
                <optgroup label="Faculté de commerce et de gestion">
                  <option value="Compatabalité et finabce">Compatabalité et finabce</option>
                  <option value="Services bancaires et financiers">Services bancaires et financiers</option>
                  <option value="Gestion des ressources humaines">Gestion des ressources humaines</option>
                  <option value="Marketing">Marketing</option>
                </optgroup>
                <optgroup label="Faculté de développement durable et d'ingénierie">
                  <option value="Génie civil">Génie civil</option>
                  <option value="Génie électique et électronique">Génie électique et électronique</option>
                  <option value="Génie électique et automatisation">Génie électique et automatisation</option>
                </optgroup>
                <optgroup label="Faculté des technologies de l'information et de la communication">
                  <option value="Informatique appliquée">Informatique appliquée</option>
                  <option value="Conception graphique et multimédia">Conception graphique et multimédia</option>
                </optgroup>
            </select>
            </td>
          </tr>
          <tr>
            <td align=left>Date première année  : <span style="color:red;">*</span></td>
            <td><input type="date" name="date" id="date"/></td>
          </tr>
          <tr>
            <td align=left>Sélectionné votre campus : <span style="color:red;">*</span></td>
            <td>
              <select name="selectCamp" class="campus">
                <option value="" disabled selected>choisir...</option>
                <option value="roseHill">Rose Hill Campus</option>
                <option value="pamplemouse">Swami Dayanand Campus</option>
              </select>
            </td>
          </tr>
          <tr>
            <td align=left>Mot de passe : <span style="color:red;">*</span></td>
            <td><input type="password" name="password" id="password" placeholder="mot de passe"/></td>
          </tr>
          <tr>
            <td align=left>Confirme le Mot de passe : <span style="color:red;">*</span></td>
            <td><input type="password" name="password" id="password" placeholder="Confirme le Mot de passe" /></td>
          </tr>
        </table>

        <hr>
        <br>
        <div class="div-confirme">
          <ul class="confirmation">
            <li>Êtes-vous déjà installé à l'ile Maurice ? :&nbsp;&nbsp;<span style="color:red;">*</span></li>
            <li>
              <input type="radio" name="conf" id="yes"  onclick=montre(100)> <label>Oui&nbsp;&nbsp;</label>
            </li>
            <li>
              <input type="radio" name="conf" id="no" onclick=hideme(100)> <label>Non</label>
            </li>
          </ul>
          <br>
          <div id="option1">
            <table>
              <tr>
                <td td align=left>Mail de l'université :</td>
                <td><input type="mail" name="" id="mailUni" placeholder="votreAdresse@mail.com"></td>
              </tr>
              <tr>
                <td td align=left>matricule :<span style="color:red;">*</span></td>
                <td> <input type="text" name="" value="" id="matUni" placeholder="votre matricule ici"> </td>
              </tr>
              <tr>
                <td td align=left>
                  <span style="text-align: justify;">Souhaite-vous vous faire contacter par les étudiants nouvellement
                  inscrits à l'université de MASCAREIGNES mais n'étant pas à Maurice <span style="color:red;">*</span></span>
                </td>
              </tr>
              <tr>
                <td td align=left>
                    <input type="radio" name="confirme" id="oui"> <label>Oui</label>
                </td>
                <td>
                    <input type="radio" name="confirme" id="non"><label>Non</label>
              </td>
              </tr>
            </table>
          </div>
          <div id="option2">
            <table>
              <tr>
                <td td align=left><span>Insérer le numéro de matricule inclut sur votre lettre de confirmation à l'université : <span style="color:red;">*</span></span></td>
                <td><input type="text" name="numMat" id="numMat" placeholder="Exemple: 5696652"></td>
              </tr>
            </table>
          </div>
        </div>

        <br>
          <hr>
          <br>
          <div class="boutton_soumetre"><input type="submit" name="button" id="button" value="Valider" onclick="togglePopup()"></input></div>

        </form>
      </div>
<p style="margin-bottom:50px;"></p>
</div>
    <?php require_once '../insert-php/foot.php';?>
  </body>
  <script type="text/javascript" src="jquery.js">
	</script>
	<script>
  //var numMat= document.getElementById("numMat").value;
		function hideme()
		{
			$("#option1").fadeOut();
			$("#option2").fadeIn();
      document.getElementById("mailUni").value="";
      document.getElementById("matUni").value="";
		}
		function montre()
		{
			$("#option1").fadeIn();
			$("#option2").fadeOut();
      document.getElementById("numMat").value="";
		}
	</script>
</html>
