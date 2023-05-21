<?php

session_start();

// Vérification si l'utilisatuer est connecté ou pas
if (isset($_SESSION['pseudo'])) {
    header("Location: index.php");
    exit();
}

// inscription db
require 'template/hoofbeatdatabase.php';

$insert = $database->prepare("INSERT INTO utilisateurs (nom, pseudo, mail, mdp) VALUES(:nom, :pseudo, :mail, :mdp)");
$insert->execute(
    [
        "nom" => $_POST['nom'],
        "pseudo" => $_POST['pseudo'],
        "mail" => $_POST['mail'],
        "mdp" => $_POST['mdp']
    ]
);

// creation de session
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION['pseudo'] = $_POST['pseudo'];
}


header("Location: index.php");