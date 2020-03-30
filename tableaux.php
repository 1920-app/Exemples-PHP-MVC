<?php
echo "<h1>Tableaux</h1>";
echo "<h2>Code source</h2>";

show_source("./tableaux-source.php");

echo "<h2>Résultats</h2>";
$tableau = array(
    "1" => array(1, 2, 3),
    "2" => "Bonjour",
    "3" => array(
        "cle1" => "Une valeur",
        "cle2" => "Une autre valeur"
    )
);

$tableau[] = "Dernière valeur";

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
