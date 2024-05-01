<?php 
require('../inc/fonction.php');
    if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['dtn'])) {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $dtn = $_POST['dtn'];
        $genre = $_POST['genre'];
        $ville = $_POST['ville'];

        s_inscrire($nom, $email, $dtn, $mdp, $genre, $ville);
        header('Location: login.php');
    }



?>