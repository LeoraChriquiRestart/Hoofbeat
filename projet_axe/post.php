<?php

require 'template/hoofbeatdatabase.php';

$insert = $database->prepare("INSERT INTO posts (author_id, contenu, tag) VALUES(:author_id, :contenu, :tag)");
$insert->execute(
    [
        "author_id" => $_SESSION['id'],
        "contenu" => $_POST['contenu'],
        "tag" => $_POST['tag']
    ]
);


header("Location: index.php");