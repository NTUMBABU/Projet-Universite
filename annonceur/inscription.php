<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/Projet-Universite/multi-media/ico-ad.png" height="10" width="10"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>Inscriptoi dans le site</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">UNIVERSITE DES MASCAREIGNES</a>
          <div class="d-flex " id="navbarText">
              <ul class="navbar-nav">
                  <li class="nav-item">
                  <button class="btn btn-outline-success me-2" type="button">
                    <a class="nav-link active" aria-current="page" href="../admis/index.php">S'identifier</a>
                  </button>
                  </li>
              </ul>
          </div>
      </div>
    </nav>
  <div class="container">

      <div class="row mt-5">
            <form action="/Projet-Universite/bd/singUp-annonceur.php" method="post" class="row h-100 g-3 border border-bg-secondaire mb-5 p-5"><!---->
              <h1 class="pb-3 fs-1 fw-bold text-primary">Créez votre compte</h1>
              <div class="col-md-4">
                  <label for="" class="form-label">Nom</label>
                  <input type="text" class="form-control" name="nameAnnonceur">
              </div>
              <div class="col-md-4">
                  <label for="" class="form-label">Prénom</label>
                  <input type="text" class="form-control" name="prenomAnnonceur">
              </div>

              <div class="col-md-3">
                  <label for="" class="form-label">Numéro de carte d'identité</label>
                  <div class="input-group has-validation">
                      <input type="number" class="form-control" name="numIdAnn">
                  </div>
              </div>
              <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" name="mailAnnonceur">
              </div>
              <div class="col-md-5">
                  <label for="inputNum" class="form-label">Numéro telephone</label>
                  <input type="number" class="form-control" name="numTelAnn">
              </div>
              <div class="col-sm-2">
                <label for="" class="form-label">Districts</label>
                  <select class="form-select" name="districAnn">
                    <option selected disabled>Choisir...</option>
                    <option value="Rivière du Rempart">Rivière du Rempart</option>
                    <option value="Pamplemousses">Pamplemousses</option>
                    <option value="Port-Louis">Port-Louis</option>
                    <option value="Moka">Moka</option>
                    <option value="Flack">Flack</option>
                    <option value="Grand Port">Grand Port</option>
                    <option value="Plaines Wilhems">Plaines Wilhems</option>
                    <option value="Rivière Noire">Rivière Noire</option>
                    <option value="Savanne">Savanne</option>
                  </select>

              </div>
              <div class="col-md-2">
                  <label for="" class="form-label">Ville</label>
                  <!-- <input type="text" class="form-control" id="" required> -->
                  <select class="form-select" name="villeAnn">
                    <option selected disabled value="">Choisir...</option>
                      <optgroup label="Rivière du Rempart">
                        <option value="Goodlands">Goodlands</option>
                        <option value="Grand Baie">Grand Baie</option>
                        <option value="Petit Faffray">Petit Faffray</option>
                        <option value="Rivière du Rempart">Rivière du Rempart</option>
                      </optgroup>
                      <optgroup label="Pamplemousses">
                        <option value="Baie du Tombeau">Baie du Tombeau</option>
                        <option value="Le Hochet">Le Hochet</option>
                        <option value="Pamplemousses">Pamplemousses</option>
                        <option value="Terre Rouge">Terre Rouge</option>
                        <option value="Trou-aux-Biches">Trou-aux-Biches</option>
                      </optgroup>
                      <optgroup label="Port-Louis">
                        <option value="Port-Louis">Port-Louis</option>
                      </optgroup>
                      <optgroup label="Moka">
                        <option value="Moka">Moka</option>
                        <option value="Montagne Blanche">Montagne Blanche</option>
                        <option value="Pailles">Pailles</option>
                        <option value="Saint-Pierre">Saint-Pierre</option>
                      </optgroup>
                      <optgroup label="Flack">
                        <option value="Centre de Flack">Centre de Flack</option>
                        <option value="Bel Air">Bel Air</option>
                        <option value="Lalmatie">Lalmatie</option>
                      </optgroup>
                      <optgroup label="Grand Port">
                        <option value="L'Escalier">L'Escalier</option>
                        <option value="Mahébourg">Mahébourg</option>
                        <option value="Plaine Magnien">Plaine Magnien</option>
                        <option value="New Grove">New Grove</option>
                        <option value="Plaine Magnien">Plaine Magnien</option>
                      </optgroup>
                      <optgroup label="Plaines Wilhems">
                        <option value="Beau-Bassin Rose-Hill">Beau-Bassin Rose-Hill</option>
                        <option value="Curepipe">Curepipe</option>
                        <option value="Quatre Bornes">Quatre Bornes</option>
                        <option value="Vacoas-Phœnix">Vacoas-Phœnix</option>
                      </optgroup>
                      <optgroup label="Rivière Noire">
                        <option value="Bambous">Bambous</option>
                      </optgroup>
                      <optgroup label="Savanne">
                        <option value="Chemin Grenier">Chemin Grenier</option>
                        <option value="Rivière des Anguilles">Rivière des Anguilles</option>
                        <option value="Surinam">Surinam</option>
                      </optgroup>
                  </select>


              </div>
              <div class="col-md-2">
                  <label for="" class="form-label">Quartier</label>
                  <input type="text" class="form-control" name="quartierAnn">

              </div>
              <div class="col-md-2">
                  <label for="" class="form-label">Rue</label>
                  <input type="text" class="form-control" name="rueAnnonceur">

              </div>
              <div class="col-sm-1">
                  <label for="validationServer03" class="form-label">N° maison</label>
                  <input type="number" class="form-control " name="numMaisonAnn">

              </div>
              <div class="col-sm-1">
                    <label for="" class="form-label">Code postale</label>
                    <input type="text" class="form-control " name="codepostAnn">

              </div>
              <div class="col-md-3">
                <label for="inputPassword4" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="passAnn">
              </div>
              <div class="col-md-3">
                <label for="inputPassword4" class="form-label">Confirme le mot de passe</label>
                <input type="password" class="form-control" name="confPassAnn">
              </div>
              <div class="col-12">
                  <input class="btn btn-primary" type="submit" name="btn_register_ann" value='Soumettre'>
              </div>
        </form>
      </div>
    </div>

  <footer class="footer py-4 px-5 d-flex justify-content-center bg-dark text-white mt-5"> <!--justify-content-center-->
    <div class="container">
      <div class="row">
        <div class="col-8 "> <!--align-items-center-->
          <img src="/Projet-Universite/multi-media/footerLogo.png" class="my-0">
        </div>
        <div class="col-4">
          <ul class="nav tex-center">
            <li class="nav-item">
              <a href="#" class="nav-link text-white">A propos de nous</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-white">Nous contacter</a>
            </li>
          </ul>
        </div>
      </div>

    </div>

  </footer>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
