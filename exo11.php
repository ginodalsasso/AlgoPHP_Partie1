<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
d’afficher le nombre de marques de voitures présentes dans le tableau.
Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
Affichage (attention à utiliser une liste à puces)
Il y a 4 marques de voitures dans le tableau :
Peugeot
Renault
BMW
Mercedes </p>

<?php

$marques = ["Peugeot", "BMW", "Fiat", "Toyota", "Kia"];
$nbMarques = count($marques);

echo "Il y à $nbMarques marques de voitures dans le tableau:</br>";

echo "<ul>";
for ($i = 0; $i < count($marques); $i++) { 
    echo "<li>$marques[$i]</li>";
}
echo "</ul>";