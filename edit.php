<?php
    require 'functions.php';
    if (isset($_GET['id'])) 
    {
        $id = htmlentities($_GET['id']);
        if (intval($id)) 
        {
            $bdd = new PDO('mysql:host=localhost;dbname=GestStudent;charset=utf8', 'root', '');
            $student = $bdd->prepare("SELECT * FROM students WHERE id = ?");
            $student->execute(array($id));
            $student = $student->fetch(PDO::FETCH_ASSOC);
        } 
        else 
        {
            header("location:list_of_students.php");
            exit;
        }
    }
    else 
    {
        header("location:list_of_students.php");
        exit;
    }
?>
9630

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Modification d'un etudiant</title>
</head>

<body>
    <div class="container">
        <div class="container-left-part">
            <p class="link">
                <a class="" href="edit.php">Modifier un étudiant</a>
            </p>
            <p class="">
                <a style="color: white !important;" href="list_of_students.php">Liste des étudiants</a>
            </p>
        </div>

        <div class="container-right-part">
            <div class="">
                <div class=" ">
                    
                    <h2 class="">Modifier un étudiant</h2>
                    <form class="" action="update.php?id=<?=$id?>" method="POST">

                        <div class="">
                            <label class="label" for="Nom"> Nom</label>
                            <input type="text" value="<?= $student['nom'] ?>" name="Nom" id="Nom" class="" placeholder="Nom">
                        </div>

                        <div class="">
                            <label for="Prenom">Prenom</label>
                            <input type="text" value="<?= $student['prenom'] ?>" name="Prenom" id="prenom" class="" placeholder="Prenom">
                        </div>

                        <label for="Sexe">Sexe</label>
                        <div class=" radio">
                           
                            <?php
                                echo radio("sexe", $student['sexe'], ['Masculin', 'Feminin']);
                            ?>
                        </div>

                        <div class="">
                            <label for="Date" class="label">Date de naissance</label>
                            <input type="date" value="<?= $student['date_naissance'] ?>" name="Date" id="" class="" placeholder="Date de naissance">
                        </div>
                        <div class="filiere_group">
                            <label for="Filiere">Filiere</label>
                            <?php
                                echo( select("Filiere", $student['filiere'], ['IG', 'MRH', 'BF', 'ECO', 'ASS']));
                            ?>
                            
                        </div>
                        <div class="buttons">
                            <button type="submit">Modifier</button> 
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>