<?php 
require('../inc/fonction.php');
$liste_objet= get_objet();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <header>

    </header>
    <main>
        <section>
            <h3>Liste des objets</h3>
            <table class="table table-striped table-hover">
                <th>Nom Objets</th>
                <th>Date de retour</th>

                <?php foreach ($liste_objet as $l) { ?>
                    <tr>
                        <td><?= $l['nom_objet'] ?></td>
                        <td><?= $l['date_retour'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </section>
    </main>
</body>
</html>