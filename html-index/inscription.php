<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="/Projet-Universite/multi-media/ico-uni.png"/>
    <title>Support des étudiants internationaux</title>
    <?php require_once '../styleCss/style.php';?>
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
      <div class="div_pg3">
        <form action="../bd/singUp-etudiant.php" class="form_id" method="post" onsubmit="return Validate()" name="Vform">

          <h3 class="titre1">Créez votre compte</h3>
          <table class="tableau1">
            <tr>
              <td align=left>Nom  : <span style="color:red;">*</span> </td>
              <td><input type="text" name="nom" id="nom" placeholder="votre nom"></td>
              <td> <div class="val_error" id="name_error" style="color:red;font-size:12px;"></div> </td>
            </tr>
            <tr>
              <td align=left>Prénom : <span style="color:red;">*</span></td>
              <td><input type="text" name="prenom" id="prenom" placeholder="votre prénom"/></td>
              <td> <div id="prenom_error" style="color:red;font-size:12px;"></div> </td>
            </tr>
            <tr>
              <td align=left>Adresse e-mail : <span style="color:red;">*</span></td>
              <td> <input type="mail" name="mail" id="mail" placeholder="votreAdresse@email"> </td>
              <td> <div id="mail_erro" style="color:red;font-size:12px;"></div> </td>
            </tr>
            <tr>
              <td align=left>Numéro telephone : </td>
              <td><input type="tel" name="tel" placeholder="votre numéro telephone"/></td>
            </tr>
        </table>
        <hr>
        <table class="tableau1">
          <tr>
            <td align=left>Filière  : </td>
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
            <td><input type="date" name="date" id="date"/> <div id="date_erro" style="color:red;font-size:12px;"></div></td>
          </tr>
          <tr>
            <td align=left>Sélectionné votre campus : <span style="color:red;">*</span></td>
            <td>
              <select name="selectCamp" id="selectCamp" class="campus">
                <option value=" " disabled selected>choisir...</option>
                <option value="roseHill">Rose Hill Campus</option>
                <option value="pamplemouse">Swami Dayanand Campus</option>
              </select>
              <div id="camp_erro" style="color:red;font-size:12px;"></div>
            </td>
          </tr>
          <tr>
            <td align=left>Mot de passe : <span style="color:red;">*</span></td>
            <td><input type="password" name="password" id="password" placeholder="mot de passe"/><br> <div id="password_erro" style="color:red;font-size:12px;"></div></td>
          </tr>
          <tr>
            <td align=left>Confirme le Mot de passe : <span style="color:red;">*</span></td>
            <td><input type="password" name="confPassword" id="confPassword" placeholder="Confirme le Mot de passe" /></td>
          </tr>
        </table>

        <hr>
        <br>
        <div class="div-confirme">
          <ul class="confirmation">
            <li>Êtes-vous déjà installé à l'ile Maurice ? :&nbsp;&nbsp;<span style="color:red;">*</span></li>
            <li>
              <input type="radio" name="conf" id="yes" value="oui" onclick=montre(100)> <label>Oui&nbsp;&nbsp;</label>
            </li>
            <li>
              <input type="radio" name="conf" id="no" value="non" onclick=hideme(100)> <label>Non</label>
            </li>
            <div id="confirme_option" style="color:red;font-size:12px;"></div>
          </ul>
          <br>
          <div id="option1">
            <table>
              <!-- <tr>
                <td td align=left>Mail de l'université :</td>
                <td><input type="mail" name="" id="mailUni" placeholder="votreAdresse@mail.com"></td>
              </tr> -->
              <tr>
                <td>matricule :<span style="color:red;">*</span></td>
                <td align="Left"> <input type="text" name="matUni" id="matUni" placeholder="votre matricule ici"> <div id="confirme_option1" style="color:red;font-size:12px;"></div></td>
              </tr>
            </table>
            <table>
              <tr>
                <td td align="left">
                  <span style="text-align: justify;">Souhaite-vous vous faire contacter par les étudiants nouvellement
                  inscrits à l'université de MASCAREIGNES mais n'étant pas à Maurice<span style="color:red;">*</span></span>
                </td>
              </tr>
              <tr>
                <td td align="left">
                    <input type="radio" name="confirme" value="oui"> <label>Oui</label>
                    &nbsp;
                    <input type="radio" name="confirme" value="non"><label>Non</label>
                </td>
              </tr>
            </table>
          </div>
          <div id="option2">
            <table>
              <tr>
                <td td align="left"><span>Insérer le numéro de matricule inclut sur votre lettre de confirmation à l'université : <span style="color:red;">*</span></span><div id="confirme_option2" style="color:red;font-size:12px;"></div></td>
                <td><input type="text" name="numMat" id="numMat" placeholder="Exemple: 5696652"></td>
              </tr>
            </table>
          </div>
        </div>

        <br>
          <hr>
          <br>
          <div class="boutton_soumetre"><input type="submit" name="button" value="Valider"></input></div>
        </form>
        <?php if(isset($_GET['error'])){ ?>
          <div align="center" style="margin-top:20px;color:red;font-size:15px;">Adresse mail déjà existant !</div>
        <?php }?>
        <?php if(isset($_GET['success'])){ ?>
          <div align="center" style="margin-top:20px;color:#34DB39;font-size:15px;">Votre compte a bien été créé ! veuillez cliquer sur le bouton "se connecter" pour pouvoir vous connecter</div>
        <?php }?>
      </div>
<p style="margin-bottom:50px;"></p>
</div>
    <?php require_once '../insert-php/foot.php';?>
  </body>
  <script type="text/javascript" src="jquery.js"></script>
	<script>
		function hideme()
		{
			$("#option1").fadeOut();
			$("#option2").fadeIn();
      // document.getElementById("mailUni").value="";
      document.getElementById("matUni").value="";
		}
		function montre()
		{
			$("#option1").fadeIn();
			$("#option2").fadeOut();
      document.getElementById("numMat").value="";
		}
	</script>
  <!-- ****************************** -->
  <!-- deuxieme <script -->
  <!-- ********************************** -->
  <script type="text/javascript">
    var nom = document.forms["Vform"]["nom"];
    var prenom = document.forms["Vform"]["prenom"];
    var mail = document.forms["Vform"]["mail"];
    var date = document.forms["Vform"]["date"];
    var selectCamp = document.forms["Vform"]["selectCamp"];

    var password = document.getElementById('password');
    var confPassword = document.getElementById('confPassword');

    let myRegex = /^[a-zA-Z-\s]+$/;
    //retour des eurreur
    var name_error = document.getElementById("name_error");
    var prenom_error = document.getElementById("prenom_error");
    var mail_erro = document.getElementById("mail_erro");
    var date_erro = document.getElementById("date_erro");
    var camp_erro = document.getElementById("camp_erro");
    var confirme_option = document.getElementById("confirme_option");
    //les evenement
    nom.addEventListener("blur", nameVerify, true);
    prenom.addEventListener("blur", prenomVerify, true);
    mail.addEventListener("blur", mailVerify, true);
    date.addEventListener("blur", dateVerify, true);
    selectCamp.addEventListener("blur", selectCampVerify, true);
    password.addEventListener("blur", passVerify, true);
    confPassword.addEventListener("blur", passVerify1, true);

    //fonction des validation
    function Validate()
    {
      if(nom.value == "")
      {
        nom.style.border = "1px solid red";
        name_error.textContent = "le nom est obligatoire";
        nom.focus();
        return false;
      }
      else if(myRegex.test(nom.value) == false)
      {
         nom.style.border = "1px solid red";
         name_error.textContent = "le nom n'est pas valide";
         name_error.style.color = 'red';
         nom.focus();
         return false;
      }
      //prenom validation
      if(prenom.value == "")
      {
        prenom.style.border = "1px solid red";
        prenom_error.textContent = "le prenom est obligatoire";
        prenom.focus();
        return false;
      }
      else if(myRegex.test(prenom.value) == false)
      {
         prenom.style.border = "1px solid red";
         prenom_error.textContent = "le prenom n'est pas valide";
         prenom_error.style.color = 'red';
         prenom.focus();
         return false;
      }
      //mail validation
      if(mail.value == "")
      {
        mail.style.border = "1px solid red";
        mail_erro.textContent = "Adresse e-mail est obligatoire";
        mail.focus();
        return false;
      }
      //verification de la date
      if(date.value == false)
      {
        date.style.border = "1px solid red";
        date_erro.textContent = "la date est obligatoire";
        date.focus();
        return false;
      }
      //varification de Campus
      if(selectCamp.value == " ")
      {
        selectCamp.style.border = "1px solid red";
        camp_erro.textContent = "le choix du campus est obligatoire";
        selectCamp.focus();
        return false;
      }
    ///verification de mot de pass\\\\\\\\\\\
      // var password = document.getElementById('password');
      // var confPassword = document.getElementById('confPassword');
      if(password.value == "")
      {
        document.getElementById('password_erro').innerHTML="le mot de passe est obligatoire";
        document.getElementById('password').style.border = "1px solid red";
        return false;
      }
      else if(password.value.length < 8)
      {
        document.getElementById('password_erro').innerHTML="le mot de passe doit avoir plus de huit character";
        document.getElementById('password').style.border = "1px solid red";
        document.getElementById("confPassword").value="";
        return false;
      }
      else if(password.value != confPassword.value)
      {
        document.getElementById('password_erro').innerHTML="les mot de passe ne correspondent pas";
        document.getElementById('password').style.border = "1px solid red";
        document.getElementById('confPassword').style.border = "1px solid red";
        document.getElementById("confPassword").value="";
        return false;
      }
      /////verification de la confirmation de presence
     var valid = false;
     var rdio = document.Vform.conf;
    //
     for(var i=0; i < rdio.length; i++)
     {
        if(rdio[i].checked)
        {
          valid=true;
          break;
        }
     }
      if(valid)
      {
        confirme_option.textContent = "";
      }
      else
      {
        confirme_option.textContent = "Ce champ est obligatoire";
        return false;
      }
    }
    ////////////event handler function\\\\\\\\\\\\\\\\\\\\\\\
    function nameVerify()
    {
      if(nom.value != "")
      {
        nom.style.border = "1px solid #34DB39";
        name_error.innerHTML = " ";
        return true;
      }
    }
    function prenomVerify()
    {
      if(prenom.value != "")
      {
        prenom.style.border = "1px solid #34DB39";
        prenom_error.innerHTML = " ";
        return true;
      }
    }

    function mailVerify()
    {
      if(mail.value != "")
      {
        mail.style.border = "1px solid #34DB39";
        mail_erro.innerHTML = " ";
        return true;
      }
    }
    function dateVerify()
    {
      if(date.value != false)
      {
        date.style.border = "1px solid #34DB39";
        date_erro.innerHTML = " ";
        return true;
      }
    }
    function selectCampVerify()
    {
      if(selectCamp.value != " ")
      {
        selectCamp.style.border = "1px solid #34DB39";
        camp_erro.innerHTML = " ";
        return true;
      }
    }
    function passVerify()
    {
      if(password.value != "")
      {
        password.style.border = "1px solid #34DB39";
        document.getElementById('password_erro').innerHTML="";
        return true;
      }
    }
    function passVerify1()
    {
      if(confPassword.value != "")
      {
        password.style.border = "1px solid #34DB39";
        confPassword.style.border = "1px solid #34DB39";
        document.getElementById('password_erro').innerHTML="";
        return true;
      }
    }
    </script>
</html>
