<?php

require "template/hoofbeatdatabase.php";

// Vérifie si l'utilisateur est déjà connecté ou non
session_start();

if (isset($_SESSION['pseudo'])) {
    //error_log("Session found for pseudo : " . $_SESSION['pseudo']); (juste une vérification pour voir si ça marche)
    header("Location: index.php");
    exit();
}

// Création de sesssion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification que le pseudo et mdp sont valides
    error_log("No session found. Will creat session if pseudo/mdp valid");

    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];

    $requete = $database->prepare("SELECT * FROM utilisateurs WHERE pseudo = '$pseudo' AND mdp = '$mdp'");
    $requete->execute();

    if ($requete->rowCount() == 1){
        //error_log("pseudo/mdp valid. creating a session"); (encore mes vérifications)
 
        $_SESSION['pseudo'] = $_POST['pseudo'];
        header("Location: index.php");
    }
    else {
        echo "Utilisateur ou mot de passe invalide";
    }
}


