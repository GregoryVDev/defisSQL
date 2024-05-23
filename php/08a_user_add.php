<?php
require_once("./src/connect.php");

$first_name = "Gregory";
$last_name = "Yeramian";
$email = "test@hotmail.fr";
$gender = "Male";
$birth_date = "1995-12-10";
$country = "France";

// Requête SQL pour insérer un nouvel utilisateur
$sql = "INSERT INTO users (first_name, last_name, email, gender, birth_date, country) VALUES (:first_name, :last_name, :email, :gender, :birth_date, :country)";

// Préparation de la requête
$query = $db->prepare($sql);

$query->bindValue(":first_name", $first_name);
$query->bindValue(":last_name", $last_name);
$query->bindValue(":email", $email);
$query->bindValue(":gender", $gender);
$query->bindValue(":birth_date", $birth_date);
$query->bindValue(":country", $country);



// Exécution de la requête
$query->execute();

require_once("./src/close.php");

// Redirection vers la page d'accueil
header('Location: ./index.php');
?>
