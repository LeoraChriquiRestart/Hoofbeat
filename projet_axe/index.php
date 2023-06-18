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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Hoofbeat</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <header>
        <img src="images/logo_hoofbeat.png" alt="logo">
        <h1>Hoofbeat</h1>
    </header>
    
    <div class="container">
        <!--Left-box-->
        <?php require "template/hoofbeatnav.php"; ?>
        <!--Main-box-->
        <div class="main">
            <div class="main__header">
                <h2>Accueil</h2>
            </div>
            <div class="post-box">
                <form class="form" method="POST" action="post.php">
                    <div class="post-box__input">
                        <img src="https://media.idownloadblog.com/wp-content/uploads/2017/03/Twitter-new-2017-avatar-001.png" alt="avatar">
                        <input type="text" name="contenu" placeholder="Quoi de neuf ?">
                        <input type="text" name="tag" placeholder="#">
                    </div>
                    <button class="post-box__post-button">Post</button>
                </form>
            </div>
            <?php  foreach($allCourses as $course) {

                $autheur_id = $course['author_id'];
                
                $data = [
                    "id" => $autheur_id
                ];

                $requete = $database->prepare("SELECT * FROM utilisateurs WHERE id = :id");
                $requete->execute($data);
                $user = $requete->fetch(PDO::FETCH_ASSOC);    

                $pseudo = $user["pseudo"];
                $nom = $user["nom"];
            ?>
                <div class="feed">
                    <div class="feed__avatar">
                        <img src="https://media.idownloadblog.com/wp-content/uploads/2017/03/Twitter-new-2017-avatar-001.png" alt="">
                    </div>
                    <div class="feed__body">
                        <div class="feed__header">
                            <div class="feed__header-text">
                                <h3>
                                    <p><?= $nom ?></p>
                                    <span class="feed__header-name">@<?= $pseudo ?></span>
                                </h3>
                            </div>
                            <div class="feed__header-description">
                                
                                <p><?= $course['contenu'] ?></p>
                                <p><?= $course['tag']?></p>
                                <p><?= $course['date']?></p>

                            </div>
                        </div>
                        <div class="feed__footer">
                            <span class="material-symbols-outlined">favorite</span>
                            <span class="material-symbols-outlined">chat_bubble</span>
                            <span class="material-symbols-outlined" id="delete">
                                <form action="delete.php" method="POST">
                                    <input type="hidden" name="supp" value="<?= $course['id'] ?>">
                                    <button type="submit">
                                    <span class="material-symbols-outlined">delete</span>
                                    </button>
                                </form>
                            </span>
                        </div>
                    </div>  
                </div>
            <?php } ?>
        </div>
        <!--Right-box-->
        <div class="right-box">
            <div class="right-box__input">
                <span class="material-symbols-outlined right-box__search-icon">search</span>
                <input type="text" placeholder="Rechercher">
            </div>
            <div class="right-box__tag">
                <h2>Tags</h2>
                <ul>
                    <li>Ethologie</li>
                    <li>Bien être</li>
                    <li>Saut</li>
                    <li>Random</li>
                    <li>Dressage</li>
                    <li>Club</li>
                    <li>Propriétaire</li>
                    <li>Competition</li>
                    <li>TAP</li>
                    <li>Loisirs</li>
                </ul>
            </div>
        </div>
        <div class="modal">
            <div class="modal__header">
                <p>Confirmation de la suppresion</p>
                <span class="close">&times;</span>
            </div>
            
            <button>Supprimer</button>
        
        </div>
    </div>


    <script src="script.js"></script>    
</body>
</html>