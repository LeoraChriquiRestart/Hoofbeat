<?php

require "template/hoofbeatdatabase.php";

if (isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}

// Création de sesssion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification que le pseudo et mdp sont valides

    $data = [
        "pseudo" => $_POST['pseudo']
    ];

    $requete = $database->prepare("SELECT * FROM utilisateurs WHERE pseudo = :pseudo");
    $requete->execute($data);
    $user = $requete->fetch(PDO::FETCH_ASSOC);

    if ($requete->rowCount() == 1) {

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
?>