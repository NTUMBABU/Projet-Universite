<?php
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_universite','root', '');
  if(isset($_POST['ann_sub']))
  {
    //localisation de la maison
    $distric = htmlspecialchars($_POST['distric']);
    $ville = htmlspecialchars($_POST['ville']);
    $quartier = htmlspecialchars($_POST['quartier']);
    $rue = htmlspecialchars($_POST['rue']);
    $num_maison = htmlspecialchars($_POST['num_maison']);
    $code_postal = htmlspecialchars($_POST['code_postal']);
    $tag = htmlspecialchars($_POST['tag']);
    $code_postal = htmlspecialchars($_POST['code_postal']);

    //detail de la maison
    $nbr_chambre = htmlspecialchars($_POST['nbr_chambre']);
    $nbr_chambre_disp = htmlspecialchars($_POST['nbr_chambre_disp']);
    $prix_maison = htmlspecialchars($_POST['prix_maison']);
    $nbr_personne_par_chambre = htmlspecialchars($_POST['nbr_personne_par_chambre']);
    $nbr_chambre_plusieur = htmlspecialchars($_POST['nbr_chambre_plusieur']);
    $prix_par_personne = htmlspecialchars($_POST['prix_par_personne']);

    //note restriction de la maison
    $note_restriction = htmlspecialchars($_POST['note_restriction']);

    $inser = $bdd->prepare('INSERT INTO annonce_annonceur(district,	ville,quartier,	rue,num_maison,code_postal,	tag,nbr_chambre,nbr_chambre_disp,	prix_maison,prix_chambre,	nbr_personne_par_chambre,	nbr_chambre_plusieur,prix_par_personne,note_restriction,date_publication)
                          VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW())');
    $inser->execute(array($distric,$ville,$quartier,$rue,$num_maison,$code_postal,$tag,$nbr_chambre_disp,$prix_maison,$nbr_personne_par_chambre,$nbr_chambre_plusieur,$prix_par_personne,$note_restriction));

    $message = "votre soumission a bien été postée";
  }
 ?>
