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
          <div class="onglets active" data-anim="1">Destination</div>
          <div class="onglets" data-anim="2">voiyage</div>
          <div class="onglets" data-anim="3">ailleur</div>
        </div>

        <div class="contenu activeContenu" data-anim="1">
          <h3>111 lorem ipsum dolro amet 1</h3>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="contenu " data-anim="2">
          <h3>222 lorem ipsum dolro amet 1</h3>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="contenu " data-anim="3">
          <h3>333 lorem ipsum dolro amet 1</h3>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

      </div>


    </div>
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
