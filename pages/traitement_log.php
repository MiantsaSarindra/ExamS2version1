<?php 
    require('../inc/fonction.php');

    session_start();

    $email= $_POST['email'];
    $mdp = $_POST['mdp'];

    $resultat = se_connecter($email, $mdp);

    if ($resultat != null) {
        $_SESSION['id'] = $resultat['id_membre'];
        $_SESSION['nom'] = $resultat['nom'];
        header('Location: accueil.php');
    } 
    else {
        header('Location: login.php?error=1');
    }



?>