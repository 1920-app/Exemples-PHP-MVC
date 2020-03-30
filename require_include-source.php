<?php

include("./fichier_inexistant.php");

echo "<h1>Différences entre require et include</h1>";
echo "Bien que le fichier n'existe pas, ces messages s'affichent bien";
echo "<br />";
echo "<br />";
echo "<br />";

require("./fichier_inexistant.php");

echo "Ces messages ne s'afficheront pas parce que le script s'est arrêté suite
    à l'erreur produite par le require";
