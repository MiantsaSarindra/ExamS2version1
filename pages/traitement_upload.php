<?php
require('../inc/fonction.php');
$uploadDir = __DIR__ . '/images/';
$maxSize = 20 * 1024 * 1024; // 2 Mo
$allowedMimeTypes = ['image/jpeg', 'image/png', 'application/pdf', 'video/mp4'];
// Vérifie si un fichier est soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
$file = $_FILES['image'];
if ($file['error'] !== UPLOAD_ERR_OK) {
die('Erreur lors de l’upload : ' . $file['error']);
}
// Vérifie la taille
if ($file['size'] > $maxSize) {
die('L image est trop volumineux.');
}
// Vérifie le type MIME avec `finfo`
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime = finfo_file($finfo, $file['tmp_name']);
finfo_close($finfo);
if (!in_array($mime, $allowedMimeTypes)) {
die('Type d image non autorisé : ' . $mime);
}
// renommer le video
$originalName = pathinfo($file['name'], PATHINFO_FILENAME);
$extension = pathinfo($file['name'], PATHINFO_EXTENSION);
$newName = $originalName . '_' . uniqid() . '.' . $extension;
// Déplace le video
if (move_uploaded_file($file['tmp_name'], $uploadDir . $newName)) {
echo "Fichier uploadé avec succès : ". $newName;
inserer_video($newName, $_SESSION['id']);
// echo $newName;
} else {
echo "Échec du déplacement de l image.";
}
} else {
echo "Aucune image reçu.";
}
?>