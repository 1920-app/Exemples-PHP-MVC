<?php
echo "<h1>Différences entre require et include</h1>";
echo "<h2>Code source</h2>";
$demo_quotes = show_source("./require_include-source.php");

echo "<h2>Résultats</h2>";

include("./fichier_inexistant.php");

echo "<h1>Différences entre require et include</h1>";
echo "Bien que le fichier n'existe pas, ces messages s'affichent bien";
echo "<br />";
echo "<br />";
echo "<br />";

require("./fichier_inexistant.php");

echo "Ces messages ne s'afficheront pas parce que le script s'est arrêté suite
    à l'erreur produite par le require";
