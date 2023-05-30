<?php
// inscription db
require 'template/hoofbeatdatabase.php';

// Vérification si l'utilisatuer est connecté ou pas
if (isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $insert = $database->prepare("INSERT INTO utilisateurs (nom, pseudo, mail, mdp) VALUES(:nom, :pseudo, :mail, :mdp)");
    $insert->execute(
        [
            "nom" => $_POST['nom'],
            "pseudo" => $_POST['pseudo'],
            "mail" => $_POST['mail'],
            "mdp" => password_hash($_POST['mdp'], PASSWORD_BCRYPT)
        ]
    );

    // creation de session
    $_SESSION['id'] = $database->lastInsertId();
    header("Location: index.php");
}
