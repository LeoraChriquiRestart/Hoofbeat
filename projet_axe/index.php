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
        
        <div class="menu-toggle">
            <div class="burger">
                <span></span>
            </div>

        </div>
        <!--Left-box-->
        <?php require "template/hoofbeatnav.php"; ?>
        <!--Main-box-->
        <div class="main">
            <div class="main__header">
                <h2>Accueil</h2>
            </div>
            <div class="post-box">
                <form class="form" method="POST" action="post.php" enctype="multipart/form-data">
                    <div class="post-box__input">
                        <img src="https://media.idownloadblog.com/wp-content/uploads/2017/03/Twitter-new-2017-avatar-001.png" alt="avatar">
                        <input type="text" name="contenu" placeholder="Quoi de neuf ?" id="contenu">
                        <select class="chooseTag" name="tag" id="tag" required>
                            <option value="">#</option>
                            <option id="tag1">#Ethologie</option>
                            <option id="tag2">#Bien être</option>
                            <option id="tag3">#Saut</option>
                            <option id="tag4">#Random</option>
                            <option id="tag5">#Dressage</option>
                            <option id="tag6">#Club</option>
                            <option id="tag7">#Propriétaire</option>
                            <option id="tag8">#Compétition</option>
                            <option id="tag9">#TAP</option>
                            <option id="tag10">#Loisirs</option>
                        </select>
                    </div>
                    <div class="post-box__images">
                        <input type="file" accept="image/jpg, image/png, image/gif" name="images">
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
                <div class="feed tags_<?= $course['tag']?>">
                    <div class="feed__avatar">
                        <img class="img-responsive" src="https://media.idownloadblog.com/wp-content/uploads/2017/03/Twitter-new-2017-avatar-001.png" alt="">
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
                                <img class="media" src="<?= $course['images']?>" alt="image">
                                <p><?= $course['date']?></p>

                            </div>
                        </div>
                        <div class="feed__footer">
                            <?php if (isset($_SESSION['id']) && $_SESSION['id'] == $autheur_id) { ?>
                                <button class="suppButton">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="modal__supp">
                        <div class="modal-content">
                            <p>Confirmation de la suppression</p>
                            <div class="deleteButtons">
                                <form action="delete.php" method="POST">
                                    <input type="hidden" name="supp" value="<?= $course['id'] ?>">
                                    <button class="confirmButton" type="submit">
                                        Supprimer
                                    </button>
                                </form>
                                <button class="undoButton">
                                    Annuler
                                </button>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="modal__flou">
                    <h2>
                        <a href="connexion.php">Je me connecte </a>
                    </h2>
                    <h2>
                        <a href="inscription.php">Je m'inscris </a>
                    </h2>
                </div>
                
            <?php } ?>

            <?php if (!isset($_SESSION['id'])) { ?>
                <script src="blur.js"></script>
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
                <button class="tags">Tout</button>
                <button class="tags">#Ethologie</button>
                <button class="tags">#Bien être</button>
                <button class="tags">#Saut</button>
                <button class="tags">#Random</button>
                <button class="tags">#Dressage</button>
                <button class="tags">#Club</button>
                <button class="tags">#Propriétaire</button>
                <button class="tags">#Compétition</button>
                <button class="tags">#TAP</button>
                <button class="tags">#Loisirs</button>
            </div>
        </div>
    </div>
    
    <script src="main.js"></script>  

</body>
</html>