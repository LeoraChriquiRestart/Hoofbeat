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
    <span class="material-symbols-outlined">logout</span>
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
        <span class="material-symbols-outlined">person</span>
        <h2>
            <a href="profil.php">Profil</a>
        </h2>
    </div>
    

    <button class="post-box__post-button" id="mon-bouton">Post</button>
    
    <div class="modal">
        <div class="modal-content">
            <form class="form" method="POST" action="post.php">
                <span class="close">&times;</span>
                <div class="post-box__input">
                    <img src="https://media.idownloadblog.com/wp-content/uploads/2017/03/Twitter-new-2017-avatar-001.png" alt="avatar">
                    <input type="text" name="contenu" placeholder="Quoi de neuf ?">
                    <select name="tag" required>
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
                <button class="post-box__post-button">Post</button>
            </form>
        </div>
    </div>
</nav>