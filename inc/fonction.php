<?php 
require('../inc/connection.php');
function s_inscrire($nom, $email, $dtn, $mdp, $genre, $ville) {
    $sql = "INSERT INTO emprunt_membre (email, nom, date_de_naissance, mdp, genre, ville) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')";
    $sql = sprintf($sql, $email, $nom, $dtn, $mdp, $genre, $ville);
    
    $request = mysqli_query(dbconnect(), $sql);

}

function se_connecter($email, $mdp) {
    $sql = "select * from emprunt_membre where email='%s' AND mdp='%s'";
    $sql = sprintf($sql, $email, $mdp);

    $resultat = mysqli_query(dbconnect(), $sql);
    $resultat = mysqli_fetch_assoc($resultat);

    return $resultat;

}
function get_objet() {
    $sql = "select * from v_objet_emprunt";
    $request = mysqli_query(dbconnect(), $sql);
    $valiny = array();
    while ($v = mysqli_fetch_assoc($request)) {
        $valiny[] = $v;
    }
    mysqli_free_result($request);
    return $valiny;

}

?>