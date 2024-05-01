<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../assets/style.css">

</head>
<body>
    <div class="container">
        <h1>Connexion</h1>
        <form action="traitement_log.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
                <p style="color: red; text-align:center;">L'adresse E-mail n'existe pas ou le mot de passe est incorrect !</p>
            <?php } ?>

            <div class="form-group">
                <label for="email">Adresse E-mail</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" id="mdp" required>
            </div>

            <input type="submit" value="Se connecter">
        </form>

        <div class="login-link">
            <p>Vous n'avez pas encore de compte ?</p>
            <a href="index.php" class="boutton">S'inscrire</a>
        </div>
    </div>
</body>
</html>
