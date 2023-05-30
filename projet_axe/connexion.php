<?php
require_once("connexion_db.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/connexion.css">
</head>
<body>
    <main>
        <form class="form" method="POST">
            <h1>Connexion</h1>
            <input type="text" name="pseudo" placeholder="Pseudo">
            <input type="password" name="mdp" placeholder="Mot de passe">
            <button type="submit">Envoyer</button>

            <?php if (isset($erreur)) { ?>
                <p style="color: red; margin-top: 24px;"><?= $erreur ?></p>
            <?php } ?>
        </form>
    </main>
</body>
</html>