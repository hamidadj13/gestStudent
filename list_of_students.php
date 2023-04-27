<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Liste des etudiants</title>
</head>

<body>
    <div class="container">
        <div class="container-left-part">
            <p class="inscription-link">
                <a class="" style="color: white !important;" href="inscription.php">Enregistrer un étudiant</a>
            </p>
            <p class="link">
                <a href="list_of_students.php">Liste des étudiants</a>
            </p>

        </div>
        <div class="container-right-part">
            <div class="">
                <?php
                if (isset($_GET['req_err'])) {
                    $err = htmlspecialchars($_GET['req_err']);
                    switch ($err) {
                        case 'success':
                ?>
                            <div class="alert-success">
                                <strong>Success :</strong> Etudiant Modifié avec succès
                            </div>
                        <?php
                            break;
                        case 'input_error':
                        ?>
                            <div class="alert-danger">
                                <strong>Erreur : </strong> Veuillez renseigner tous les champs
                            </div>
                        <?php
                            break;
                        case 'delete':
                        ?>
                            <div class="alert-success">
                                <strong>Success : </strong> Etudiant Supprimé avec succès
                            </div>
                        <?php
                            break;
                        default:
                        ?>
                            <div class="alert-danger">
                                <strong>E R R O R !!!!!!!!!!!!!!!!!! Lien invalide</strong> 
                            </div>
                <?php
                            
                    }
                }
                ?>
                <div class="">
                    <h2 class="">Liste des étudiants</h2>
                </div>
            </div>


            <?php
                $bdd = new PDO('mysql:host=localhost;dbname=GestStudent;charset=utf8', 'root', '');
                if (!isset($_POST['FilterChoice'])) 
                {
                    $req = $bdd->query('SELECT * FROM students');
                    $students = $req->fetchAll(PDO::FETCH_ASSOC);
                } 
                else 
                {
                    $filiere = htmlspecialchars($_POST['FilterChoice']);
                    if ($filiere == 'All') 
                    {
                        $req = $bdd->query('SELECT * FROM students');
                        $students = $req->fetchAll(PDO::FETCH_ASSOC);
                    } 
                    else 
                    {
                        $req = $bdd->prepare('SELECT * FROM students WHERE filiere = ?');
                        $req->execute(array($filiere));
                        $students = $req->fetchAll(PDO::FETCH_ASSOC);
                    }
                }
            ?>

            <div class="table-group">
                <table class="">
                    <thead class="">
                        <tr class="table">
                            <th class="">ID</th>
                            <th class="">Nom</th>
                            <th class="">Prenom</th>
                            <th class="">Sexe</th>
                            <th class="">Date de naissance</th>
                            <th class="">Filiere</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        
                        <?php
                            foreach ($students as $student) {
                        ?>
                            <tr class="table">
                                <td><?php echo $student['id']; ?></td>
                                <td><?php echo $student['nom']; ?></td>
                                <td><?php echo $student['prenom']; ?></td>
                                <td><?php echo $student['sexe']; ?></td>
                                <td><?php echo $student['date_naissance']; ?></td>
                                <td><?php echo $student['filiere']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $student['id'] ?>">Modifier</a>
                                    <a class ="supp" href="delete.php?id=<?= $student['id'] ?>">Supprimer</a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>

            </div>
            <div class="filter-group">
                <form action="list_of_students.php" method="POST" class="">
                    <div class="">
                        <label for="Choix_liste">Filter par : </label>
                        <select name="FilterChoice" id="filterChoice" class="">
                            <option value="Rien">...</option>
                            <option value="All">ALL</option>
                            <option value="IG">IG</option>
                            <option value="MRH">MRH</option>
                            <option value="BF">BF</option>
                            <option value="ECO">ECO</option>
                            <option value="ASS">ASS</option>
                        </select>
                    </div>
                    <button id="filterSubmit" style="display: none;" type="submit">Filtrer</button>
                </form>
                <script>
                    const filterChoice = document.getElementById('filterChoice');
                    filterChoice.addEventListener('change', function() 
                    {
                        document.getElementById('filterSubmit').click();
                    })
                </script>
            </div>
        </div>
    </div>
</body>

</html>