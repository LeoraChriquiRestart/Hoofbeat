<?php

    require "template/hoofbeatdatabase.php";

    $requete = $database->prepare("SELECT * FROM posts ORDER BY date DESC");
    $requete->execute();
    $allCourses = $requete->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="css/profil.css">

</head>
<body>
    <header>
        <img src="images/logo_hoofbeat.png" alt="logo">
        <h1>Hoofbeat</h1>
    </header>
    <div class="profil-container">

        <?php require "template/hoofbeatnav.php"; ?>
        
        <div class="profil">
            <section class="profil__header">
                <h2>Bonjour Léora, voici ton profil</h2>
            </section>
            <section class="profil__description">
                <div class="avatar">
                    <img src="https://media.idownloadblog.com/wp-content/uploads/2017/03/Twitter-new-2017-avatar-001.png" alt="avatar">
                </div>
                <div class="informations">
                    <p>Prénom</p>
                    <p>Pseudo</p>
                    <p>Mail</p>
                </div>
            </section>
            <section class="profil__post">

            </section>
        </div>

    </div>
</body>
</html>