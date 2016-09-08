<?php

include('bdd.php');

$sql = 'INSERT INTO contact (nom, prenom, commentaire, civilite) VALUES (:nom, :prenom, :commentaire, :civilite)';

$stmt = $bdd->prepare($sql);

$stmt->bindParam(':nom', $_POST['nom']);
$stmt->bindParam(':prenom', $_POST['prenom']);
$stmt->bindParam(':commentaire', $_POST['commentaire']);
$stmt->bindParam(':civilite', $_POST['civilite']);

$stmt->execute();
    
header('location: index.html');

?>
