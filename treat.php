<?php
    // Tentative de connexion à la base de données......
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=geststudent;charset=utf8','root','');
    }
    catch (Exception $e)
    {
        die('Erreur:'.$e-> getMessage());
    }

    if(!empty($_POST['Nom']) && !empty($_POST['Prenom']) && isset($_POST['sexe']) && !empty($_POST['Date']) && !empty($_POST['Filiere']))
    {

        // Sécurisation des informations entrées......
        $nom = htmlentities($_POST['Nom']);
        $prenom = htmlentities($_POST['Prenom']);
        $sexe = htmlentities($_POST['sexe']);
        $date = htmlentities($_POST['Date']);
        $filiere = htmlentities($_POST['Filiere']);

        //Insertion des informations dans la base
        $requete = $bdd->prepare('INSERT INTO students(nom,prenom,sexe,date_naissance,filiere) VALUES (:nom, :prenom, :sexe, :date_naiss, :fili)');
        $requete->execute(array(
            'nom'       => $nom,
            'prenom'    => $prenom,
            'sexe'      => $sexe,
            'date_naiss'=> $date,
            'fili'      => $filiere
        ));
        var_dump($requete);
        exit();

        header("location:inscription.php?req_err=success");
    }
    else
    {
        header("location:inscription.php?req_err=input_error");
    }
                                  
?>