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

      <div class="container">

        <div class="container-onglet">
          <div class="onglets active" data-anim="1" style="border-left: 1px solid #333;">Annonceur</div>
          <div class="onglets" data-anim="2">Etudiant</div>
        </div>

        <div class="contenu activeContenu" data-anim="1">
          <h3>Liste des annonceurs</h3>
          <hr>
          <div class="card mb-3" style="max-width: 840px;">
              <div class="row g-0">
                <div class="col-md-3">
                  <img src="../multi-media/profil.png" height="140" width="140" style="border-radius:50%;border:1px solid grey;margin-left:40px;position:absolute;top:10%;">
                </div>
                <div class="col-5">
                  <div class="card-body">
                    <h5 class="card-title">Nom prenom de l'annonceurs</h5>
                    <output name="...">Mail de l'annonceur</output> <br>
                    <output name="...">numero de l'annonceur</output>
                    <output name="...">address de l'annonceur</output>
                    <p class="card-text"><small class="text-muted">date d'inscription de l'annonceur </small></p>
                    <a href="editPg/apercu.php">Voir ces annonces</a>
                    <a class="btn btn-info">Aperçu</a>
                    <a class="btn btn-danger">Suprimer</a>

                  </div>
                </div>
              </div>
          </div>

        </div>
        <div class="contenu" data-anim="2">
          <h3>Liste des étudiants</h3>
          <hr>
          <div class="card mb-3" style="max-width: 840px;">
              <div class="row g-0">
                <div class="col-md-3">
                  <img src="../multi-media/profil.png" height="140" width="140" style="border-radius:50%;border:1px solid grey;margin-left:40px;position:absolute;top:10%;">
                </div>
                <div class="col-5">
                  <div class="card-body">
                    <h5 class="card-title">Nom prenom de l'Etudiant</h5>
                    <output name="...">Mail de l'etudiant</output> <br>
                    <output name="...">numero de l'annonceur</output>
                    <output name="...">address de l'etudiant</output>
                    <p class="card-text"><small class="text-muted">date d'inscription de l'annonceur </small></p>
                    <a type="button" class="btn btn-secondary">Bloquer</a>
                    <a type="button" class="btn btn-danger">Suprimer</a>
                  </div>
                </div>
              </div>
          </div>
        </div>

      </div>

    </div>
    <!--
    pour changer le text du boutton
    <a href="#">
      <button type="link" name="button" id="changEll" onclick="change()">change le contenus</button>
    </a>
  <script type="text/javascript">
      function change()
      {
        document.getElementById("changEll").innerHTML=("change");
      }
  </script> -->

    <script type="text/javascript">
        const onglets = document.querySelectorAll('.onglets');
        const contenu = document.querySelectorAll('.contenu');
        let index = 0;

        onglets.forEach(onglet => {

          onglet.addEventListener('click', () => {
              if(onglet.classList.contains('active'))
              {
                return;
              }
              else {
                onglet.classList.add('active');
              }

              index = onglet.getAttribute('data-anim');
              console.log(index);

              for(i = 0; i < onglets.length; i++)
              {
                if(onglets[i].getAttribute('data-anim') != index)
                {
                  onglets[i].classList.remove('active');
                }
              }

              for(j = 0; j < contenu.length; j++)
              {
                if(contenu[j].getAttribute('data-anim') == index)
                {
                  contenu[j].classList.add('activeContenu');
                }
                else {
                  contenu[j].classList.remove('activeContenu');
                }
              }
          })

        } )
    </script>
  </body>
</html>
