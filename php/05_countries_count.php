<?php
require_once("./src/connect.php");

// Requête SQL pour récupérer tous les pays, en un seul exemplaire, et le nombre d'utilisateurs par pays
$sql = "SELECT country, COUNT(*) AS users_compt FROM users GROUP BY country ORDER BY users_compt ASC";

// Préparation de la requête
$query = $db->prepare($sql);
// Exécution de la requête
$query->execute();
// Stockage du résultat dans un tableau associatif [personne1, personne2, ...]
$result = $query->fetchAll(PDO::FETCH_ASSOC);

require_once("./src/close.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coutry stats</title>
</head>
<body>
    <?php include_once('./components/nav.php') ?>
    <div>
        <?php
            foreach ($result as $country) {
                // faire un echo de chaque pays trouvé avec le nombre d'utilisateurs correspondant
                echo $country["country"] . " " . $country["users_compt"] . "<br>";
                
            }
        ?>
    </div>
</body>
</html>