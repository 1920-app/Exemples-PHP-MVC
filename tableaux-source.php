<?php

$tableau = array(
    "1" => array(1, 2, 3),
    "2" => "Bonjour",
    "3" => array(
        "cle1" => "Une valeur",
        "cle2" => "Une autre valeur"
    )
);

// On ajoute une valeur en toute fin de tableau
$tableau[] = "Dernière valeur";

// Affiche la structure du tableau
echo "<pre>";
print_r($tableau);
echo "</pre>";

foreach ($tableau as $element) {
    if (gettype($element) != "array") {
        print "$element<br />";
    } else {
        foreach ($element as $item) {
            print "$item<br />";
        }
    }
}

