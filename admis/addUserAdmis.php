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
         <!-- onsubmit="return Validate()" name="Vform"  id="myform"-->
        <table>
          <tr>
            <td>Nom :</td>
            <td><input type="text" name="nameAdmis" id="nameAdmis"></td>
            <td> <div class="val_error" id="name_error"></div> </td>
            <!-- <td> <span id="erro"></span> </td> -->
          </tr>
          <tr>
            <td>Prénom :</td>
            <td><input type="text" name="prenomAdmis"></td>
            <td> <div class="val_error" id="prenom_error"></div> </td>
          </tr>
          <tr>
            <td>numéro de telephone :</td>
            <td><input type="number" name="numAdmis"></td>
            <td> <div class="val_error" id="num_erro"></div> </td>
          </tr>
          <tr>
            <td>Address mail :</td>
            <td><input type="email" name="mailAdmis"></td>
            <td> <div class="val_error" id="mail_erro"></div> </td>
          </tr>
          <tr>
            <td>Mot de passe :</td>
            <td><input type="password" name="passAdmis" id="passAdmis"></td>
            <td> <div class="val_error" id="pass_erro"></div> </td>
            <td>Confirme le mot de passe :</td>
            <td><input type="password" name="confpassAdmis" id="confpassAdmis"></td>
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

    let myRegex = /^[a-zA-Z-\s]+$/;
    //retour des eurreur
    var name_error = document.getElementById("name_error");
    var prenom_error = document.getElementById("prenom_error");
    var num_erro = document.getElementById("num_erro");
    var mail_erro = document.getElementById("mail_erro");

    //les evenement
    nameAdmis.addEventListener("blur", nameVerify, true);
    prenomAdmis.addEventListener("blur", prenomVerify, true);
    numAdmis.addEventListener("blur", numVerify, true);
    mailAdmis.addEventListener("blur", mailVerify, true);
    //passAdmis.addEventListener("blur", passVerify, true);

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
      else if(myRegex.test(nameAdmis.value) == false)
      {
         nameAdmis.style.border = "1px solid red";
         name_error.textContent = "le nom n'est pas valide";
         name_error.style.color = 'red';
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
      else if(myRegex.test(prenomAdmis.value) == false)
      {
         prenomAdmis.style.border = "1px solid red";
         prenom_error.textContent = "le nom n'est pas valide";
         prenom_error.style.color = 'red';
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
        mailAdmis.style.border = "1px solid red";
        mail_erro.textContent = "Username is required";
        mailAdmis.focus();
        return false;
      }
    ///verification de mot de pass\\\\\\\\\\\\||
      var passAdmis = document.getElementById('passAdmis').value;
      var confpassAdmis = document.getElementById('confpassAdmis').value;

      if(passAdmis == "")
      {
        document.getElementById('pass_erro').innerHTML="* fill password";
        document.getElementById('passAdmis').style.border = "1px solid red";
        return false;
      }
      else if(passAdmis.length < 8)
      {
        document.getElementById('pass_erro').innerHTML="* password must 8";
        document.getElementById('passAdmis').style.border = "1px solid red";
        return false;
      }
      else if(passAdmis != confpassAdmis)
      {
        document.getElementById('pass_erro').innerHTML="* password not same";
        document.getElementById('passAdmis').style.border = "1px solid red";
        document.getElementById('confpassAdmis').style.border = "1px solid red";
        return false;
      }
    }
    ////////////event handler function\\\\\\\\\\\\\\\\\\\\\\\
    function nameVerify()
    {
      if(nameAdmis.value != "")
      {
        nameAdmis.style.border = "1px solid #34DB39";
        name_error.innerHTML = " ";
        return true;
      }
    }
    function prenomVerify()
    {
      if(prenomAdmis.value != "")
      {
        prenomAdmis.style.border = "1px solid #34DB39";
        prenom_error.innerHTML = " ";
        return true;
      }
    }
    function numVerify()
    {
      if(numAdmis.value != "")
      {
        numAdmis.style.border = "1px solid #34DB39";
        num_erro.innerHTML = " ";
        return true;
      }
    }
    function mailVerify()
    {
      if(mailAdmis.value != "")
      {
        mailAdmis.style.border = "1px solid #34DB39";
        mail_erro.innerHTML = " ";
        return true;
      }
    }
  </script>
</html>
