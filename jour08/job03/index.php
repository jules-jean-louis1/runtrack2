<?php
session_start();
?>

<!--Job03
    Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton
    submit. Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de
    session. Afficher l’ensemble des prénoms.
    Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste.-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job03</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <input type="text" name="prenom">
            <input type="submit" name="submit" value="Valider">
        </form>
        
        <?php
        
        if (isset ($_POST['prenom'])){
            $_SESSION['prenom'] [] = $_POST['prenom'];
        } else {
            echo "Saisir un prénom :";
        }

        ?>

        <ul>   
            <?php
            if (isset($_SESSION['prenom'])) {
                foreach ($_SESSION['prenom'] as $key => $value) {
                    echo "<li>" . $value . "</li>";
                }
            }
            ?>
        </ul>

        <form action="" method="post">
            <input type="submit" name="reset" value="reset">
        </form>
        <?php

        if (isset($_POST['reset'])) {
            /* unset($_SESSION['prenom']); */
            $_SESSION['prenom'] = null;
        }
        ?>

    </div>
    <style>
        li{
            color:blueviolet;
        }
        ul {
            list-style-type: none;
        }
    </style>
</body>
</html>