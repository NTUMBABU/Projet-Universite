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
      <h3>Ajouter un administrateur</h3>
      <hr>
      <form action="../bd/singUp_admis.php" method="post" onsubmit="return Validate()" name="Vform">
        <table>
          <tr>
            <td>Nom :</td>
            <td><input type="text" name="nameAdmis" value="" required></td>
            <td> <div class="val_error" id="name_error"></div> </td>
          </tr>
          <tr>
            <td>Prénom :</td>
            <td><input type="text" name="prenomAdmis" value="" required></td>
            <td> <div class="val_error" id="prenom_error"></div> </td>
          </tr>
          <tr>
            <td>numéro de telephone :</td>
            <td><input type="number" name="numAdmis" value="" required></td>
            <td> <div class="val_error" id="num_erro"></div> </td>
          </tr>
          <tr>
            <td>Address mail :</td>
            <td><input type="email" name="mailAdmis" value="" required></td>
            <td> <div class="val_error" id="mail_erro"></div> </td>
          </tr>
          <tr>
            <td>Mot de passe :</td>
            <td><input type="password" name="passAdmis" value="" required></td>
            <td> <div class="val_error" id="pass_erro"></div> </td>
            <td>Confirme le mot de passe :</td>
            <td><input type="password" name="confpassAdmis" id="" required></td>
            <td> <div class="val_error" id="confpass_erro"></div> </td>
          </tr>
          </table>
          <input type="Submit" value="Soumettre" name="btn_register" style="margin-top:40px;background:#3498DB;width:20%;border:none;color:#fff;">

      </form>

    </div>

  </body>
  <script type="text/javascript">
    var nameAdmis = document.forms["Vform"]["nameAdmis"];
    var prenomAdmis = document.forms["Vform"]["prenomAdmis"];
    var numAdmis = document.forms["Vform"]["numAdmis"];
    var mailAdmis = document.forms["Vform"]["mailAdmis"];
    var passAdmis = document.forms["Vform"]["passAdmis"];
    var confpassAdmis = document.forms["Vform"]["passAdmis"];

    //retour des eurreur
    var name_error = document.getElementById("name_error");
    var prenom_error = document.getElementById("prenom_error");
    var num_erro = document.getElementById("num_erro");
    var mail_erro = document.getElementById("mail_erro");
    var pass_erro = document.getElementById("pass_erro");

    //les evenement
    nameAdmis.addEventListener("blur", nameVerify, true);
    prenomAdmis.addEventListener("blur", prenomVerify, true);
    numAdmis.addEventListener("blur", numVerify, true);
    mailAdmis.addEventListener("blur", mailVerify, true);
    passAdmis.addEventListener("blur", passVerify, true);

    //fonction des validation
    function Validate()
    {
      if(nameAdmis.value == "")
      {
        nameAdmis.style.border = "1px solid red";
        name_error.textContent = "Username is required";
        nameAdmis.focus();
        return false;
      }

      //prenom validation
      if(prenomAdmis.value == "")
      {
        prenomAdmis.style.border = "1px solid red";
        prenom_error.textContent = "Username is required";
        prenomAdmis.focus();
        return false;
      }

      //numero validation
      if(numAdmis.value == "")
      {
        numAdmis.style.border = "1px solid red";
        num_erro.textContent = "Username is required";
        numAdmis.focus();
        return false;
      }
      //mail validation
      if(mailAdmis.value == "")
      {
        numAdmis.style.border = "1px solid red";
        num_erro.textContent = "Username is required";
        numAdmis.focus();
        return false;
      }
    }

  </script>
</html>
