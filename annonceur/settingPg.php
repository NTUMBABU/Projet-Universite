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
              <button class="btn btn-danger" onclick="showModal();">Supprimer le compte</button>
          </div>
        </div>
      </div>
    </div>

    <footer class="pied">
      <div class="contenu-footer ">
        <p class="p-f">Copyright (c) 2018 Copyright Holder All Rights Reserved.</p>
      </div>
    </footer>
    <script type="text/javascript">
      var modalWrap = null;
      const showModal = () => {
      if(modalWrap !== null)
      {
        modalWrap.remove();
      }
      modalWrap = document.createElement('div');
      modalWrap.innerHTML = `
      <div class="modal fade" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Vous le vous vraiment Supprimer voutre compte ?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger">Supprimer</button>
          </div>
        </div>
      </div>
      </div>
      `;
      document.body.append(modalWrap);
      var modal = new bootstrap.Modal(modalWrap.querySelector('.modal'))
      modal.show();
      }
    </script>
  </body>
</html>
