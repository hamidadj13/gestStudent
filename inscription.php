<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inscription d'un etudiant</title>
</head>

<body>
    <div class="container">
        <div class="container-left-part">
            <p class="link">
                <a class="" href="inscription.php">Enregistrer un étudiant</a>
            </p>
            <p class="">
                <a style="color: white !important;" href="list_of_students.php">Liste des étudiants</a>
            </p>
        </div>

        <div class="container-right-part">
            <div class="">
                <div class=" ">
                    <?php
                        if (isset($_GET['req_err'])) 
                        {
                            $err = htmlspecialchars($_GET['req_err']);
                            switch ($err) 
                            {
                                case 'success':
                            ?>
                                <div class="alert-success">
                                    <strong>Success :</strong> Etudiant enregistré avec succès !!!
                                </div>
                            <?php
                                break;
                                case 'input_error':
                            ?>
                                <div class="alert-danger">
                                    <strong>Erreur : </strong> Veuillez renseigner tous les champs !!!!
                                </div>
                            <?php
                                break;
                                default:
                                    echo "E R R O R !!!!!!!!!!!!!!!!!!";
                            }
                        }
                    ?>
                    
                    <h2 class="">Enregistrer un étudiant</h2>
                    <form class="" action="treat.php" method="POST">

                        <div class="">
                            <label class="label" for="Nom"> Nom</label>
                            <input type="text" name="Nom" id="Nom" class="" placeholder="Nom">
                        </div>

                        <div class="">
                            <label for="Prenom">Prenom</label>
                            <input type="text" name="Prenom" id="prenom" class="" placeholder="Prenom">
                        </div>

                        <label for="Sexe">Sexe</label>
                        <div class=" radio">
                            <div>
                                <input type="radio" name="sexe" id="" value="Masculin" class="">
                                <label for="">Masculin</label>
                            </div>
                            <div>
                                <input type="radio" name="sexe" id="" value="Feminin" class="">
                                <label for="">Féminin</label>
                            </div>
                        </div>

                        <div class="">
                            <label for="Date" class="label">Date de naissance</label>
                            <input type="date" name="Date" id="" class="" placeholder="Date de naissance">
                        </div>
                        <div class="filiere_group">
                            <label for="Filiere">Filiere</label>
                            <select name="Filiere" id="" class="">
                                <option value="IG">IG</option>
                                <option value="MRH">MRH</option>
                                <option value="BF">BF</option>
                                <option value="ECO">ECO</option>
                                <option value="ASS">ASS</option>
                            </select>
                        </div>
                        <div class="buttons">
                            <button type="submit">Enregistrer</button>
                            <button type="reset">Réinitialiser</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>