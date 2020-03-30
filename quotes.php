<?php

echo "<h1>Différences entre ' ' et \" \"</h1>";
echo "<h2>Code source</h2>";
$demo_quotes = show_source("./quotes-source.php");

echo "<h2>Résultats</h2>";

$a = 1;

// Les guillemets simplements affichent le texte 'verbatim'
// Les guillemets doubles interprètent le code PHP
print('$a' . " = " ."$a<br />");

echo "Autre exemple :<br />
    <ul>";
for ($i = 0; $i < 10; $i++) {
    echo "<li>$i</li>";
}
echo "</ul>";
