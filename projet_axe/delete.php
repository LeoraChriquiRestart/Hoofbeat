<?php

require 'template/hoofbeatdatabase.php';

$supp = $database->prepare("DELETE FROM posts WHERE id = :id");
$supp->execute(
    [
        "id" => $_POST['supp']
    ]
    );

header("Location: index.php");

?>