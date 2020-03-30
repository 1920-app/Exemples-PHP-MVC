<?php
echo("<h1>Différences == et ===</h1>");
echo("<h2>Code source</h2>");
// Cette ligne va afficher le contenu du fichier equals.php
$demo_egalite = show_source("./equals-source.php");

echo("<h2>Résultat</h2>");
$a = "1";
$b = 1;

if ($a == $b) {
    print("Premier test est vrai <br />");
} else {
    print("Premier test est faux <br />");
}

if ($a === $b) {
    print("Second test est vrai <br />"); 
} else {
    print("Second test est faux <br />");
}
