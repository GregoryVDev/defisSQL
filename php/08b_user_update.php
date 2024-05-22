<?php
require_once("./src/connect.php");


$email = "euuuhboulou@hotmail.fr";

$email = strip_tags($_POST['email']);

// Requête SQL pour modifier l'adresse e-mail du nouvel utilisateur
$sql = "UPDATE users SET email='boulou@hotmail.fr'";

$query->bindValue(":email", $email);

// Préparation de la requête
$query = $db->prepare($sql);
// Exécution de la requête
$query->execute();

require_once("./src/close.php");

// Redirection vers la page d'accueil
header('Location: ./index.php');
?>
