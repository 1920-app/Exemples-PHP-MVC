<?php

$a = 1;

// Les guillemets simplements affichent le texte 'verbatim'
// Les guillemets doubles interprètent le code PHP
print('$a' . " = " ."$a<br />");

echo "Autre exemple :<br />
    <ul>";
for ($i = 0; $i < 10; $i++) {
    // Le contenu de la variable $i va être évalué et affiché ici
    echo "<li>$i</li>";
}
echo "</ul>";

