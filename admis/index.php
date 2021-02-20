
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
    <title>Les Connexion</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">UNIVERSITE DES MASCAREIGNES</a>
          <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span> </button>-->
          <div class="d-flex " id="navbarText">
              <ul class="navbar-nav">
                  <li class="nav-item">
                  <button class="btn btn-outline-success me-2" type="button">
                    <a class="nav-link active" aria-current="page" href="../annonceur/inscription.php">S'inscrire</a>
                  </button>
                  </li>
              </ul>
          </div>
      </div>
    </nav>
  <div class="container">
  <div class="row mt-5">
    <div class="col mt-5">

      <div class=" h-100 border border-bg-secondaire mt-1 ms-5 p-5" style="width:85%;">
        <?php if(isset($_GET['error'])){ ?>
          <div class='alert alert-danger'>Connexion non valide, veuillez réessayer</div>
        <?php }?>
        <h3 class="pb-3 fs-4 fw-bold text-primary">CONNECTEZ-VOUS EN TANT QU'ADMINISTRATEUR</h3>
        <!-- <div class='alert alert-danger' name='message'> -->
        <form action="../bd/login-admis.php" method="post"><!--action="../bd/login-admis.php"-->
          <div class="form-group">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address ou Numéro de telephone</label>
              <input type="text" class="form-control form-control-lg" aria-describedby="emailHelp" placeholder="exempl@demail.com" name="nameadmis" >
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
              <input type="password" class="form-control form-control-lg"  placeholder="votre mot de passe" name="passwordadmis" >
            </div>
            <button type="submit" class="btn btn-primary" name="login_btn">Connexion</button>
          </div>
        </form>
      </div>
    </div>

    <div class="col mt-5">
      <div class=" h-100 border border-bg-secondaire mt-1 p-5" style="width:85%;">
        <h3 class="pb-3 fs-4 fw-bold text-primary">CONNECTEZ-VOUS EN TANT QU'ANNONCEUR(SE)</h3>
        <form action="../bd/login-annonceur.php">
          <div class="form-group">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address ou Numéro de telephone</label>
              <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="exempl@demail.com" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
              <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="votre mot de passe" required>
            </div>
            <button type="submit" class="btn btn-primary">Connexion</button>
          </div>
        </form>
      </div>
    </div>
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
