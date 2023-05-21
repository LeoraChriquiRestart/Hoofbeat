<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <nav class="left-box" id="sidenav">     
        <div class="options accueil">
            <span class="material-symbols-outlined">home</span>
            <h2>
                <a href="index.php">Accueil</a>
            </h2>        
        </div>
                
        <div class="options">
            <span class="material-symbols-outlined">login</span>               
            <h2>
                <a href="connexion.php">Connexion</a>
            </h2>
        </div>

        <div class="options">
            <span class="material-symbols-outlined">more_horiz</span>
            <h2>
                <a href="deconnexion.php">Déconnexion</a>
            </h2>
        </div>
                
        <div class="options">
            <span class="material-symbols-outlined">stylus</span>
            <h2>
                <a href="inscription.php">Inscription</a>
            </h2>
        </div>
    
        <div class="options">
            <span class="material-symbols-outlined">more_horiz</span>
            <h2>
                <a href="plus.php">Plus</a>
            </h2>
        </div>
        
    
        <button class="post-box__post-button" id="mon-bouton">Post</button>
        
        <div class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="post-box__input">
                    <img src="https://media.idownloadblog.com/wp-content/uploads/2017/03/Twitter-new-2017-avatar-001.png" alt="avatar">
                    <input type="text" placeholder="Quoi de neuf ?">
                    <button class="post-box__post-button">Post</button>
                </div>
            </div>
        </div>
    </nav>

    <script src="script.js"></script> 
</body>
</html>