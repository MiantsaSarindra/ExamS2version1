<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="container">
        <h1>Créer un compte</h1>
        <form action="traitement_signup.php" method="post" class="signup-form">
            <div class="form-group">
                <label for="email">Adresse E-mail :</label>
                <input type="email" name="email" id="email">
                
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom">
                
                <label for="dtn">Date de naissance :</label>
                <input type="date" name="dtn" id="dtn">
                
                <label for="mdp">Mot de passe :</label>
                <input type="password" name="mdp" id="mdp">

                <label for="ville">Ville :</label>
                <input type="text" name="ville" id="ville">
                

                <label for="genre">Genre: </label>
                <select name="genre" >
                    <option value="F">F</option>
                    <option value="M">M</option>
                </select>
            </div>
            <input type="submit" value="S'inscrire" class="btn">
        </form>

        <p class="login-link">Vous avez déjà un compte ?
            <a href="login.php" class="boutton">Se connecter</a>
        </p>
    </div>
</body>
</html>