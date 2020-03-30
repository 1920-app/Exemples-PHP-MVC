<?php

echo "<h1>PHP et bases de données</h1>";
echo "<h2>Code source</h2>";

show_source("./bdd-source.php");

echo "<h2>Résultats</h2>";
$user = "root";
$pass = "";
$database = new PDO('mysql:host=localhost;dbname=South_Park', $user, $pass);

echo "Si aucune erreur ne s'affiche, c'est que la connexion a réussi<br />";

$query = "SELECT * FROM Citation INNER JOIN Personnage
    ON Citation.idPersonnage = Personnage.id
    WHERE personnage.last_name = :last_name";


$statement = $database->prepare($query);
$statement->execute(
    array(':last_name' => "Marsh")
);
$results = $statement->fetchAll();
echo "<pre>";
print_r($results);
echo "</pre>";

foreach ($results as $key => $value) {
    $quote = $value["quote"];
    echo "$quote<br />";
}
