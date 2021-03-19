<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="/Projet-Universite/multi-media/ico-uni.png"/>
    <title>Support des étudiants internationaux</title>
    <?php
      require_once '../styleCss/style.php';
    ?>

  </head>
  <body>
    <header>
      <?php require_once '../insert-php/head2.php'; ?>
      <div class="headert">
        <a href="/Projet-Universite/html-index/index.html"><img src="/Projet-Universite/multi-media/mainLogo.png" ></a>
      </div>
    </header>
    <div class="boxp11">
      <!-- <h4>Support des étudiants internationaux</h4> -->

      <div class="div_pg2">
        <?php if(isset($_GET['error'])){ ?>
          <div align="center" style="margin-bottom:20px;color:red;font-size:15px;">Échec de la connexion, veuillez réessayer</div>
        <?php }?>
        <form action="../bd/login-etudiant.php" class="form_id" method="post">
          <h3 class="titre1">S'identifier</h3>
          <table class="tableau1">
            <tr>
              <td align=left>Mail : </td>
              <td><input type="text" name="identifiant" id="identifiant" placeholder="numéro telephone/adresse mail"></td>
            </tr>
            <tr>
              <td align=left>Mot de passe : </td>
              <td><input type="password" name="password" id="password" placeholder="mot de passe"/></td>
          </tr>
          <tr>
            <td>  </td>
            <td><input type="submit" name="button" id="button" value="se connecter"></input></td>
          </tr>
          </table>
        </form>
        <br/>
        <hr>

        <ul class="autre">
          <li> <a href="#">Mot de passe oubliait&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>
          <li> | </li>
          <li> <a href="inscription.php">&nbsp;&nbsp;&nbsp;&nbsp;S'inscrire</a> </li>
        </ul>
      </div>
    </div>
    <!-- <?php require_once '../insert-php/foot.php'; ?> -->
  </body>
  <!-- ne pas oublie de mettre les petit detail comme enleve
les titre dasn le hedera dasn le h4-->
</html>
