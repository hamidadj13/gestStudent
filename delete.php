<?php
    if (isset($_GET['id'])) 
    {
        $id = htmlentities($_GET['id']);

        if (intval($id)) 
        {
            $bdd = new PDO('mysql:host=localhost;dbname=GestStudent;charset=utf8', 'root', '');
            $student = $bdd->prepare("DELETE FROM students WHERE id = ?");
            $student->execute(array($id));
            header("location:list_of_students.php?req_err=delete");
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