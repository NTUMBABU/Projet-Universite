<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="Projet-Universite/multi-media/ico-ad.png" height="10" width="10"/>
    <?php require_once 'style4.php' ?>
    <title>Edité vos annonce</title>
  </head>
  <body>
    <?php require_once 'espAnnonceur.php' ?>
    <div class="contenu">
    <div class="row mt-0">
        <form action="..." method="post" enctype="multipart/form-data" class="row h-100 g-3 border border-bg-secondaire mb-5 p-5">
            <div class="col-sm-2">
              <img src="../../multi-media/profil.png" class="flex-shrink-0 me-3" id='imgInsrt' style="height:150px;width:150px;border-radius: 50%;border: 1px solid grey;">
            </div>
            <div class="col-sm-2">
              <input type="file" name="" value="" accept="image/*" id="insert">
              <label for="insert">
                <a class="btn btn-success mt-5">Editer le profil</a>
              </label>
            </div>
          <hr>
          <div class="col-md-4">
              <label for="" class="form-label">Nom</label>
              <input type="text" class="form-control" id="" required>
          </div>
          <div class="col-md-4">
              <label for="" class="form-label">Prénom</label>
              <input type="text" class="form-control " id="" required>
          </div>
          <hr>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" required>
          </div>
          <div class="col-md-5">
              <label for="inputNum" class="form-label">Numéro telephone</label>
              <input type="number" class="form-control" id="inputNum" required>
          </div>
          <hr>
          <div class="col-sm-2">
            <label for="" class="form-label">Districts</label>
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

          </div>
          <div class="col-md-2">
              <label for="" class="form-label">Ville</label>
              <!-- <input type="text" class="form-control" id="" required> -->
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


          </div>
          <div class="col-md-2">
              <label for="" class="form-label">Quartier</label>
              <input type="text" class="form-control" id="" required>

          </div>
          <div class="col-md-2">
              <label for="" class="form-label">Rue</label>
              <input type="text" class="form-control" id="" required>

          </div>
          <div class="col-sm-1">
              <label for="validationServer03" class="form-label">N° maison</label>
              <input type="number" class="form-control " id="validationServer03" aria-describedby="validationServer03Feedback" required>

          </div>
          <div class="col-sm-1">
                <label for="" class="form-label">Code postale</label>
                <input type="text" class="form-control " id="">
          </div>
          <hr>
          <div class="col-md-3">
            <label for="inputPassword4" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="inputPassword4">
          </div>
          <div class="col-md-3">
            <label for="inputPassword4" class="form-label">Ancien mot de passe</label>
            <input type="password" class="form-control" id="inputPassword4">
          </div>
          <div class="col-md-3">
            <label for="inputPassword4" class="form-label">Nouveaux mot de passe</label>
            <input type="password" class="form-control" id="inputPassword4">
          </div>
          <hr>
          <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary btn-lg" type="submit">Soumettre</button>
          </div>
        </form>
    </div>
  </div>

    </div>
    </div>


    <footer class="pied">
      <div class="contenu-footer ">
        <p class="p-f">copy right</p>
      </div>
    </footer>
  </body>
  <script type="text/javascript">
    const img = document.querySelector('#imgInsrt');
    const file = document.querySelector('#insert');
   //quand on chopisie une photo
     file.addEventListener('change', function(){
        const choosedFile = this.files[0];
        if(choosedFile)
        {
          const reader = new FileReader();
          reader.addEventListener('load', function()
          {
            img.setAttribute('src',reader.result);
          });
          reader.readAsDataURL(choosedFile);
        }
     });
  </script>
</html>
