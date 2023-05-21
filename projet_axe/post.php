<?php

require 'template/hoofbeatdatabase.php';

$nom = $database->prepare("SELECT nom FROM utilisateurs");
$nom->execute();

$affiche = $nom->fetch(PDO::FETCH_ASSOC);
$name = $affiche['nom'];

$pseudo = $database->prepare("SELECT pseudo FROM utilisateurs");
$pseudo->execute();

$show = $pseudo->fetch(PDO::FETCH_ASSOC);
$arobase = $show['pseudo'];


$insert = $database->prepare("INSERT INTO posts (nom, pseudo, contenu, tag) VALUES(:nom, :pseudo, :contenu, :tag)");
$insert->execute(
    [
        "nom" => $name,
        "pseudo" => $arobase,
        "contenu" => $_POST['contenu'],
        "tag" => $_POST['tag']
    ]
);


header("Location: index.php");