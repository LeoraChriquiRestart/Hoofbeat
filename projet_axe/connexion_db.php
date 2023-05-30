<?php

require "template/hoofbeatdatabase.php";

if (isset($_SESSION['id'])) {
    //error_log("Session found for pseudo : " . $_SESSION['pseudo']); (juste une vérification pour voir si ça marche)
    header("Location: index.php");
    exit();
}

// Création de sesssion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification que le pseudo et mdp sont valides
    // error_log("No session found. Will creat session if pseudo/mdp valid");

    $data = [
        "pseudo" => $_POST['pseudo']
    ];

    $requete = $database->prepare("SELECT * FROM utilisateurs WHERE pseudo = :pseudo");
    $requete->execute($data);
    $user = $requete->fetch(PDO::FETCH_ASSOC);

    if ($requete->rowCount() == 1) {
        // error_log("pseudo/mdp valid. creating a session"); (encore mes vérifications)

        if (password_verify($_POST["mdp"], $user["mdp"])) {
            $_SESSION['id'] = $user["id"];
            header("Location: index.php");
        } else {
            $erreur = "Utilisateur ou mot de passe invalide";  
        }
        
    }
    else {
        $erreur = "Utilisateur ou mot de passe invalide";
    }
}
