<?php
require_once("./src/connect.php");

// Requête SQL pour modifier l'adresse e-mail du nouvel utilisateur
$sql = "UPDATE users SET email = :email WHERE id = :id";

// Préparation de la requête
$query = $db->prepare($sql);

// Valeurs à lier
$email = 'jesuisgreg@hotmail.fr';
$id = 1002;

// Liaison des valeurs
$query->bindValue(':email', $email);
$query->bindValue(':id', $id);

// Exécution de la requête
$query->execute();

require_once("./src/close.php");

// Redirection vers la page d'accueil
header('Location: ./index.php');
exit();
?>

