<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome. </p>

<?php

$string = "Engage le jeu que je le gagne";

function estPalindrome($string)
{

    $stringLower = strtolower($string); // Convertir la phrase en minuscules

    $stringReplaced = str_replace(' ', '', $stringLower); // Supprime les espaces

    $stringReverse = strrev($stringReplaced); // Inverse la phrase

    return $stringReplaced === $stringReverse;
}


if (estPalindrome($string)) {
    echo 'La phrase "' . $string . '" est palindrome.';
} else {
    echo 'La phrase "' . $string . '" n\'est pas palindrome.';
}
?>