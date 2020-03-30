<?php

// echo sans parenthèse
echo "Bonjour sans parenthèse<br />";
// echo avec parenthèses
echo("Bonjour avec parenthèses<br />");
// echo avec plusieurs paramètres, mais ne marche pas avec parenthèses
echo "Bonjour ", "le ", "monde", "<br />";

// print sans parenthèse
print "Hello without parenthesis<br />";
// print avec parenthèses
print("Hello with parentheses<br />");
// print avec valeur retournée
$message = "La fonction print retourne TOUJOURS la valeur 1";
// Illustration pas très utile
if (print($message) == 1) {
    print("le message a été affiché<br />");
} else {
    print("l'affichage du message a échoué<br />");
}


