<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inscription.css">
    <title>Inscription</title>
</head>
<body>

    <main>
        <form class="form" method="POST" action="inscription_db.php">
            <h1>Inscription</h1>
            <input type="text" name="nom" placeholder="Prénom">
            <input type="text" name="pseudo" placeholder="Pseudo">
            <input type="text" name="mail" placeholder="Mail">    
            <input type="password" name="mdp" placeholder="Mot de passe">
            <button type="submit">Envoyer</button>
        </form>
    </main>
</body>
</html>