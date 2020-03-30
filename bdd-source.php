<?php

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
    // ICI, on va pouvoir bénéficier de la création de Modèles
    // Une classe pourra représenter une 'Citation'
    // On pourra créer un objet représentant le contenu de $value
    $quote = $value["quote"];
    echo "$quote<br />";
}
