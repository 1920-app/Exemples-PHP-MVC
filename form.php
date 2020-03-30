<?php

echo '<h1>Variable $_GET</h1>';
echo "<h2>Code source</h2>";

show_source("./form-source.php");

echo "<h2>Résultats</h2>";

if (isset($_GET["username"]) && !empty($_GET["username"]) 
    && isset($_GET["password"]) && !empty($_GET["password"]) 
    && isset($_GET["confirm_password"]) && !empty($_GET["confirm_password"])) {
    $username = $_GET["username"];
    $password = $_GET["password"];
    $confirmPassword = $_GET["confirm_password"];
    if (checkPassword($password, $confirmPassword)) {
        echo "La vérification du mot de passe a fonctionné !";
    }
}

function checkPassword($password, $confirmPassword) {
    // taille min > 8
    // présence de caractères spéciaux
    return $password == $confirmPassword;
}

