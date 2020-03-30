<?php

echo("<h1>echo vs print</h1>");
echo("<h2>Code source</h2>");
$print_echo = show_source("./print_echo-source.php");

echo("<h2>Résultats</h2>");

echo "Bonjour sans parenthèse<br />";
echo("Bonjour avec parenthèses<br />");
echo "Bonjour ", "le ", "monde", "<br />";

print "Hello without parenthesis<br />";
print("Hello with parentheses<br />");
$message = "La fonction print retourne TOUJOURS la valeur 1";
if (print($message) == 1) {
    print("le message a été affiché<br />");
} else {
    print("l'affichage du message a échoué<br />");
}
