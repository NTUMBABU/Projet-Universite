<?php
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_universite','root', '');

    if(isset($_POST['button']))
    {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $mail = htmlspecialchars($_POST['mail']);
        $tel = htmlspecialchars($_POST['tel']);
        
        $selectFilier = htmlspecialchars($_POST['selectFilier']);
        $date = htmlspecialchars($_POST['date']);
        $selectCamp = htmlspecialchars($_POST['selectCamp']);
        $password = sha1($_POST['password']);

        $conf = htmlspecialchars($_POST['conf']);

        $matUni = htmlspecialchars($_POST['matUni']);
        $confirme = htmlspecialchars($_POST['confirme']);

        $numMat = htmlspecialchars($_POST['numMat']);

        //
        $reqmail = $bdd->prepare("SELECT * FROM tbl_etudiant WHERE addr_mail = ?");
        $reqmail->execute(array($mail));
        $mailexist = $reqmail->rowCount();
        //
        if($mailexist == 0)
        {
            $insertEtd = $bdd->prepare("INSERT INTO tbl_etudiant(nom, prenom, addr_mail, num_telephone, filiere, datePremierAnne, campus, motDePass, etatEtd, matEtd, aprobationEtd, EtdExternMatricule)
                                VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $insertEtd->execute(array($nom, $prenom, $mail, $tel, $selectFilier, $date, $selectCamp, $password, $conf, $matUni, $confirme, $numMat));
            
            header("Location: /Projet-Universite/html-index/inscription.php?success=Votre compte a bien été créé !");
        }
        else
        {
            header("Location: /Projet-Universite/html-index/inscription.php?error=Adresse mail déjà existant !");
        }
    }
?>