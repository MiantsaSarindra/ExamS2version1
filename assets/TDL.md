# Mambotra base de donnee
## creer base de donnee ok
    - membre ok
    - categorie_objet ok
    - objet ok
    - image_objet ok
    - emprunt ok

## inserer donnee ok
    - 4 membres ok
    - 4 categories ok
    - 10 objets par membre ok
    - 10 emprunts ok

# Mamboatra pages ok 
## index.php ok
    1. S'INSCRIRE: OK         
        . Creer une page connection.php : mysqli_connect OK
            . index.php : OK
                - Formulaire : method: get, action: traitement_signup.php OK
                - input: email(email), nom(text), dtn (date), mdp (password), envoyer (submit) OK
            . traitement_signup.php : OK
                - require('../inc/connection.php'); OK

## fonction.php: s_inscrire($nom, $email, $dtn, $mdp, $genre, $ville)
    + mapiditra valeur: OK
        .$sql = "INSERT INTO emprunt_membre (email, nom, date_de_naissance, mdp, genre, ville) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')"; OK
        . $sql = sprintf ($sql, variable du column1,...) OK
        . $request = mysqli_query($bdd, $sql); OK

## traitement_signup.php
    - si mi-existe daholo (nom, email,...) ok
    - miantso s_inscrire($nom, $email, $dtn, $mdp, $genre, $ville)

## login.php  
    - Formulaire : method: post, action: traitement_log.php OK
        - input: email(email), mot de passe(password) OK

## fonction.php: se_connecter($email, $mdp)
    - Fonctionnement: mi se connecter
    - sql: $sql = "select * from emprunt_membre where email='%s' AND mdp='%s'";
    - $sql = sprintf ($sql, variable du column1,...) OK
    - $request = mysqli_query($bdd, $sql); OK


            
## traitement_log.php :
    - miantso se_connecter($email, $mdp)
    - Raha misy ny valin ny requete (mysqli_fetch_assoc an ny $resultat!=null) => makany @ accueil.php OK
        + Maka id_membres anle coonnecte atao anaty session:
    - Raha tsy misy ny valin ny requete => miverina eo @ login misy erreur OK 

