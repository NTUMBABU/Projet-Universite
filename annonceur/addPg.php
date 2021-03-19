
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="/Projet-Universite/multi-media/ico-ad.png" height="10" width="10"/>
    <?php require_once '../styleCss/style4.php' ?>
        <title>Ajouté une annonce</title>
        <!-- API pour la map -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
 integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
 crossorigin=""></script>
  </head>
  <body onload="init()">
    <?php require_once '../insert-php/espAnnonceur.php' ?>
    <div class="contenu">
      <div class="row mt-0">
          <form action="../bd/inPut-annonceur.php" method="post" enctype="multipart/form-data" class="row h-100 g-3 border border-bg-secondaire mb-5 p-5">
            <h3 class="pb-3 fs-2 fw-bold text-primary">Insérer l'adresse de la maison </h3>
            <div class="col-sm-2">
              <label for="" class="form-label">Districts</label>
                <select name="distric" class="form-select" id="">
                  <option selected disabled value="">Choisir...</option>
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
                <select class="form-select" name="ville">
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
                <input type="text" class="form-control" name="quartier">
            </div>
            <div class="col-md-2">
                <label for="" class="form-label">Rue</label>
                <input type="text" class="form-control" name="rue">
            </div>
            <div class="col-sm-1">
                <label for="validationServer03" class="form-label">N° maison</label>
                <input type="number" class="form-control" name="num_maison">

            </div>
            <div class="col-sm-1">
                  <label for="" class="form-label">Code postale</label>
                  <input type="text" class="form-control " name="code_postal">
            </div>
            <div class="col-sm-2">
                  <label for="" class="form-label">Tag</label>
                  <input type="text" class="form-control " name="tag" placeholder=" Ex:Maison/chambre/studio" required>
            </div>
            <hr>
            <h3 class="pb-3 fs-2 fw-bold text-primary">Insérer les détailles de la maison</h3>
            <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nombre de chambre : </label>
                <div class="col-sm-1">
                  <input type="number" class="form-control form-control-sm" name="nbr_chambre" id="colFormLabelSm">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nombre de chambre disponible : </label>
                <div class="col-sm-1">
                  <input type="number" class="form-control form-control-sm" name="nbr_chambre_disp" id="colFormLabelSm">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Prix location de la maison : </label>
                <div class="col-sm-1">
                  <input type="number" class="form-control form-control-sm" name="prix_maison" id="colFormLabelSm">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Prix location par chambre : </label>
                <div class="col-sm-1">
                  <input type="number" class="form-control form-control-sm" name="prix_chambre" id="colFormLabelSm">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nombre de personne par chambre:</label>
                <div class="col-sm-1">
                  <input type="number" class="form-control form-control-sm" name="nbr_personne_par_chambre" id="colFormLabelSm">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nombre de chambre pour plus : d'une personne</label>
                <div class="col-sm-1">
                  <input type="number" class="form-control form-control-sm" name="nbr_chambre_plusieur" id="colFormLabelSm">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Prix par personne : </label>
                <div class="col-sm-1">
                  <input type="number" class="form-control form-control-sm" name="prix_par_personne" id="colFormLabelSm">
                </div>
            </div>
            <hr>

            <h3 class="pb-3 fs-2 fw-bold text-primary">Insérer les images et videos de la maison</h3>
            <h4>Image :</h4>
            <div class="card" style="width: 18rem;">
                <img src="/Projet-Universite/multi-media/cimg.png" class="card-img-top" id='imgInsrt'>
                <div class="card-body">
                  <input type="file"  id="insert1" accept="image/*">
                  <label for="insert1">
                    <a class="btn btn-primary">Insérer</a>
                  </label>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/Projet-Universite/multi-media/cimg.png" class="card-img-top" id='imgInsrt2'>
                <div class="card-body">
                  <input type="file"  id="insert2" accept="image/*">
                  <label for="insert2">
                    <a class="btn btn-primary">Insérer</a>
                  </label>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/Projet-Universite/multi-media/cimg.png" class="card-img-top" id='imgInsrt3'>
                <div class="card-body">
                  <input type="file"  id="insert3" accept="image/*">
                  <label for="insert3">
                    <a class="btn btn-primary">Insérer</a>
                  </label>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/Projet-Universite/multi-media/cimg.png" class="card-img-top" id='imgInsrt4'>
                <div class="card-body">
                  <input type="file"  id="insert4" accept="image/*">
                  <label for="insert4">
                    <a class="btn btn-primary">Insérer</a>
                  </label>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/Projet-Universite/multi-media/cimg.png" class="card-img-top" id='imgInsrt5'>
                <div class="card-body">
                  <input type="file"  id="insert5" accept="image/*">
                  <label for="insert5">
                    <a class="btn btn-primary">Insérer</a>
                  </label>
                </div>
            </div>
            <br>
            <br>
            <h4>video :</h4>
            <div class="card" style="width: 18rem;">
                <video id="video1" controls class="card-img-top" poster="/Projet-Universite/multi-media/cvideo.png"> <!---->
                  <source id="source" type="video/mp4">
                </video>
                <div class="card-body">
                  <input type="file"  id="insert-v1" name="file" accept="video/*" onchange="selectedVideo(this);"/>
                  <label for="insert-v1">
                    <a class="btn btn-primary">Insérer</a>
                  </label>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <video id="video2" controls class="card-img-top" poster="/Projet-Universite/multi-media/cvideo.png"> <!---->
                  <source id="source2" type="video/mp4">
                </video>
                <div class="card-body">
                  <input type="file"  id="insert-v2" name="file" accept="video/*" onchange="selectedVideo2(this);"/>
                  <label for="insert-v2">
                    <a class="btn btn-primary">Insérer</a>
                  </label>
                </div>
            </div>
            <hr>
            <h3 class="pb-3 fs-2 fw-bold text-primary">Indiquer la localisation de la maison sur la map</h3>
            <div class="">
              <input type="text" name="cordone" value="">
              <div class="map-a"><div id="mapid"></div></div>
            </div>
            <hr>
            <h3 class="pb-3 fs-2 fw-bold text-primary">Note, restriction et autre détaille de la maison</h3>
            <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="note_restriction"></textarea>
              <label for="floatingTextarea2">Insérer votre note ici</label>
            </div>
            <hr>
            <div class="d-grid gap-2 col-6 mx-auto">
              <button class="btn btn-primary btn-lg" name="ann_sub" type="submit">Soumettre</button>
            </div>
          </form>
    </div>
  </div>


    <footer class="pied">
      <div class="contenu-footer ">
        <p class="p-f">copy right</p>
      </div>
    </footer>
    <script>
   function init()
   {
       const parcThabor = {
           lat: -20.2580682,
           lng: 57.6139663
       }

       const zoomLevel = 9;

       const map = L.map('mapid').setView([parcThabor.lat, parcThabor.lng],zoomLevel);

       const mainLayer = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
           attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
           maxZoom: 18,
           id: 'mapbox/streets-v11',
           tileSize: 512,
           zoomOffset: -1,
           accessToken: 'pk.eyJ1IjoibnR1bWJhYnUiLCJhIjoiY2ttYWtkZG9rMXNzNTJwanhqZnd2cWsxbyJ9.q1TN9ZCwm-Q8z5hfsfOegw'
       });

       mainLayer.addTo(map);
       L.marker([-20.2580682, 57.6139663]).addTo(map);
   }
   init();
</script>
    <script type="text/javascript">
      const img1 = document.querySelector('#imgInsrt');
      const file1 = document.querySelector('#insert1');
   //quand on chopisie une photo
       file1.addEventListener('change', function(){
          const choosedFile = this.files[0];
          if(choosedFile)
          {
            const reader = new FileReader();
            reader.addEventListener('load', function()
            {
              img1.setAttribute('src',reader.result);
            });
            reader.readAsDataURL(choosedFile);
          }
       });
    </script>
    <script type="text/javascript">
      const img2 = document.querySelector('#imgInsrt2');
      const file2 = document.querySelector('#insert2');
      //quand on chopisie une photo
       file2.addEventListener('change', function(){
          const choosedFile = this.files[0];
          if(choosedFile)
          {
            const reader = new FileReader();
            reader.addEventListener('load', function()
            {
              img2.setAttribute('src',reader.result);
            });
            reader.readAsDataURL(choosedFile);
          }
       });
    </script>
    <script type="text/javascript">
      const img3 = document.querySelector('#imgInsrt3');
      const file3 = document.querySelector('#insert3');
     //quand on chopisie une photo
       file3.addEventListener('change', function(){
          const choosedFile = this.files[0];
          if(choosedFile)
          {
            const reader = new FileReader();
            reader.addEventListener('load', function()
            {
              img3.setAttribute('src',reader.result);
            });
            reader.readAsDataURL(choosedFile);
          }
       });
    </script>
    <script type="text/javascript">
      const img4 = document.querySelector('#imgInsrt4');
      const file4 = document.querySelector('#insert4');
     //quand on chopisie une photo
       file4.addEventListener('change', function(){
          const choosedFile = this.files[0];
          if(choosedFile)
          {
            const reader = new FileReader();
            reader.addEventListener('load', function()
            {
              img4.setAttribute('src',reader.result);
            });
            reader.readAsDataURL(choosedFile);
          }
       });
    </script>
    <script type="text/javascript">
      const img5 = document.querySelector('#imgInsrt5');
      const file5 = document.querySelector('#insert5');
       //quand on chopisie une photo
       file5.addEventListener('change', function(){
          const choosedFile = this.files[0];
          if(choosedFile)
          {
            const reader = new FileReader();
            reader.addEventListener('load', function()
            {
              img5.setAttribute('src',reader.result);
            });
            reader.readAsDataURL(choosedFile);
          }
       });
    </script>
    <script type="text/javascript">
      function selectedVideo(self)
      {
        var file = self.files[0];
        var reader = new FileReader();
        reader.onload = function(e)
        {
            var src = e.target.result;
            var video = document.getElementById("video1");
            var source = document.getElementById("source");
            source.setAttribute("src", src);
            video.load();
            // video.play(); pour la lecture automatique
        };
        reader.readAsDataURL(file);
      }
    </script>
    <!-- script second video -->
    <script type="text/javascript">
      function selectedVideo2(self)
      {
        var file = self.files[0];
        var reader = new FileReader();
        reader.onload = function(e)
        {
            var src = e.target.result;
            var video2 = document.getElementById("video2");
            var source2 = document.getElementById("source2");
            source2.setAttribute("src", src);
            video2.load();
            // video2.play(); pour la lecture automatique
        };
        reader.readAsDataURL(file);
      }
    </script>

  </body>
</html>
