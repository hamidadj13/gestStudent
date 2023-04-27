<?php
    // Tentative de connexion à la base de données......
    try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=geststudent;charset=utf8', 'root', '');
    } 
    catch (Exception $e) 
    {
        die('Erreur:' . $e->getMessage());
    }

    if (!empty($_POST['Nom']) && !empty($_POST['Prenom']) && isset($_POST['sexe']) && !empty($_POST['Date']) && !empty($_POST['Filiere'])) 
    {

        // Sécurisation des informations entrées......
        $nom = htmlentities($_POST['Nom']);
        $prenom = htmlentities($_POST['Prenom']);
        $sexe = htmlentities($_POST['sexe']);
        $date = htmlentities($_POST['Date']);
        $filiere = htmlentities($_POST['Filiere']);
        $id = htmlentities($_GET['id']);

        //Modification des informations dans la base
        $requete = $bdd->prepare('UPDATE students SET nom =?, prenom=?, sexe=?, date_naissance=?, filiere=? WHERE id=?');
        $requete->execute(array($nom, $prenom, $sexe, $date, $filiere, $id));
    
        header("location:list_of_students.php?req_err=success");
    } 
    else 
    {
        header("location:list_of_students.php?req_err=input_error");
    }
?>
