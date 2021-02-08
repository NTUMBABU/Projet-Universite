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
          <div class="onglets active" data-anim="1">Annonceur</div>
          <div class="onglets" data-anim="2">Etudiant</div>
          <div class="onglets" data-anim="3">Administrateur</div>
        </div>

        <div class="contenu activeContenu" data-anim="1">
          <h3>Ajouter un annonceur</h3>
          <hr>
          <form class="..." action="..." method="post">
            <table>
        			<tr>
        				<td>Nom :</td>
        				<td> <input type="text" name="..."required> </td>
                <td style="padding-left:50px;">Districts :</td>
                <td>
                  <select class="form-select" id="" required>
                    <option selected disabled value="">Choisir...</option>
                    <option value="">Rivière du Rempart</option>
                    <option value="">Pamplemousses</option>
                    <option value="">Port-Louis</option>
                    <option value="">Moka</option>
                    <option value="">Flack</option>
                    <option value="">Grand Port</option>
                    <option value="">Plaines Wilhems</option>
                    <option value="">Rivière Noire</option>
                    <option value="">Savanne</option>
                  </select>
                </td>
        			</tr>
        			<tr>
        				<td>Prénom :</td>
        				<td><input type="text" name="..." required></td>
                <td style="padding-left:50px;">Ville :</td>
                <td>
                  <select class="form-select" name="" required>
                    <option selected disabled value="">Choisir...</option>
                      <optgroup label="Rivière du Rempart">
                        <option value="">Goodlands</option>
                        <option value="">Grand Baie</option>
                        <option value="">Petit Faffray</option>
                        <option value="">Rivière du Rempart</option>
                      </optgroup>
                      <optgroup label="Pamplemousses">
                        <option value="">Baie du Tombeau</option>
                        <option value="">Le Hochet</option>
                        <option value="">Pamplemousses</option>
                        <option value="">Terre Rouge</option>
                        <option value="">Trou-aux-Biches</option>
                      </optgroup>
                      <optgroup label="Port-Louis">
                        <option value="">Port-Louis</option>
                      </optgroup>
                      <optgroup label="Moka">
                        <option value="">Moka</option>
                        <option value="">Montagne Blanche</option>
                        <option value="">Pailles</option>
                        <option value="">Saint-Pierre</option>
                      </optgroup>
                      <optgroup label="Flack">
                        <option value="">Centre de Flack</option>
                        <option value="">Bel Air</option>
                        <option value="">Lalmatie</option>
                      </optgroup>
                      <optgroup label="Grand Port">
                        <option value="">L'Escalier</option>
                        <option value="">Mahébourg</option>
                        <option value="">Plaine Magnien</option>
                        <option value="">New Grove</option>
                        <option value="">Plaine Magnien</option>
                      </optgroup>
                      <optgroup label="Plaines Wilhems">
                        <option value="">Beau-Bassin Rose-Hill</option>
                        <option value="">Curepipe</option>
                        <option value="">Quatre Bornes</option>
                        <option value="">Vacoas-Phœnix</option>
                      </optgroup>
                      <optgroup label="Rivière Noire">
                        <option value="">Bambous</option>
                      </optgroup>
                      <optgroup label="Savanne">
                        <option value="">Chemin Grenier</option>
                        <option value="">Rivière des Anguilles</option>
                        <option value="">Surinam</option>
                      </optgroup>
                  </select>
                </td>
        			</tr>
        			<tr>
        				<td>Numéro de carte d'identité :</td>
        				<td><input type="number" name="..." required></td>
                <td style="padding-left:50px;">Quartier :</td>
                <td><input type="text" name="..." value="..." required></td>
        			</tr>
              <tr>
        				<td>Email :</td>
        				<td><input type="email" name="..." required></td>
                <td style="padding-left:50px;">Rue :</td>
                <td><input type="text" name="" value="" required></td>
        			</tr>
              <tr>
        				<td>Numéro de telephone :</td>
        				<td><input type="number" name="..." required></td>
                <td style="padding-left:50px;">N° maison :</td>
                <td><input type="number" name="" value=""></td>
        			</tr>
              <tr>
        				<td>Mot de passe :</td>
        				<td><input type="password" name="..." required></td>
                <td style="padding-left:50px;">Code postale :</td>
                <td><input type="number" name="" value=""></td>
        			</tr>
              <tr>
        				<td>Confirmer le mot de passe :</td>
        				<td><input type="password" name="..." required></td>
        			</tr>


		       </table>

           <input type="Submit" value="Soumettre" style="margin-top:40px;background:#3498DB;width:20%;border:none;color:#fff;">
          </form>
        </div>
        <div class="contenu " data-anim="2">
          <h3>Ajouter un étudiant</h3>
          <hr>
          <form class="" action="..." method="post">
            <table>
              <tr>
                <td>Nom :</td>
                <td><input type="text" name="" value="" required></td>
              </tr>
              <tr>
                <td>Prénom :</td>
                <td><input type="text" name="" value="" required></td>
              </tr>
              <tr>
                <td>numéro de telephone :</td>
                <td><input type="number" name="" value="" required></td>
              </tr>
              <tr>
                <td>Address mail :</td>
                <td><input type="email" name="" value="" required></td>
              </tr>
              <tr>
                <td>Filère :</td>
                <td><input type="text" name="" value="" required></td>
              </tr>
              <tr>
                <td>Date première année :</td>
                <td><input type="date" name="" value=""></td>
              </tr>
              <tr>
                <td align=left>Sélectionné le campus : </td>
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
                <td>Mot de passe :</td>
                <td><input type="password" name="" value="" required></td>
                <td>Confirme le mot de passe :</td>
                <td><input type="password" name="" value="" required></td>
              </tr>

            </table>
            <div class="div-select">
              <ul class="select">
                <li>Est-il déjà installé à l'ile Maurice ? :&nbsp;&nbsp;</li>
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

            <input type="Submit" value="Soumettre" style="margin-top:40px;background:#3498DB;width:20%;border:none;color:#fff;">
          </form>
        </div>
        <div class="contenu " data-anim="3">
          <h3>Ajouter un administrateur</h3>
          <hr>
          <form class="" action="" method="post">
            <table>
              <tr>
                <td>Nom :</td>
                <td><input type="text" name="" value="" required></td>
              </tr>
              <tr>
                <td>Prénom :</td>
                <td><input type="text" name="" value="" required></td>
              </tr>
              <tr>
                <td>numéro de telephone :</td>
                <td><input type="number" name="" value="" required></td>
              </tr>
              <tr>
                <td>Address mail :</td>
                <td><input type="email" name="" value="" required></td>
              </tr>
              <tr>
                <td>Mot de passe :</td>
                <td><input type="password" name="" value="" required></td>
                <td>Confirme le mot de passe :</td>
                <td><input type="password" name="" value="" required></td>
              </tr>
              </table>
              <input type="Submit" value="Soumettre" style="margin-top:40px;background:#3498DB;width:20%;border:none;color:#fff;">

          </form>

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
