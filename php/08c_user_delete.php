<?php
require_once("./src/connect.php");

$id = 1002;


// Requête SQL pour supprimer le nouvel utilisateur
$sql = "DELETE FROM users WHERE id= 1002";


// Préparation de la requête
$query = $db->prepare($sql);
// Exécution de la requête
$query->execute();

require_once("./src/close.php");

// Redirection vers la page d'accueil
header('Location: ./index.php');
?>
