<?php

require 'template/hoofbeatdatabase.php';

if(isset($_FILES['images'])) {
    $Images = [
        'images' => $_FILES['images']['name'],
        'img_tmp' => $_FILES['images']['tmp_name']
    ];
    
    if ($_FILES['images']['size'] > 2000000) {
        exit();
    }

    $final = "images/" . $Images['images'];
    if (!move_uploaded_file($Images['img_tmp'], $final)) {
        exit();
    }
} else {
    $Images = null;
}

$insert = $database->prepare("INSERT INTO posts (author_id, contenu, images, tag) VALUES(:author_id, :contenu, :images, :tag)");
$insert->execute(
    [
        "author_id" => $_SESSION['id'],
        "contenu" => $_POST['contenu'],
        "images" => $final,
        "tag" => $_POST['tag']
    ]
);



header("Location: index.php");
?>