<?php
require_once("./src/connect.php");

$sql = "SELECT * FROM `users` ORDER BY `id` DESC;";


// Préparation de la requête
$query = $db->prepare($sql);
// Exécution de la requête
$query->execute();
// Stockage du résultat dans un tableau associatif [personne1, personne2, ...]
$users = $query->fetchAll(PDO::FETCH_ASSOC);

require_once("./src/close.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once('./components/nav.php') ?>
    <!-- <pre><?= print_r($users) ?></pre> -->
     <?php
        foreach ($users as $user) {
            echo $user['first_name'] . " " . $user['last_name'] . " - " . $user['email'] . "<br>";
        }
    ?>
</body>
</html>