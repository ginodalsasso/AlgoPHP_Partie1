<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales</p>

<?php

$montantFrancs = 100;
$valeurEuro = 6.561679790026247;
$montantEuro = round($montantFrancs / $valeurEuro, 2);

echo "Montant en francs : $montantFrancs</br>$montantFrancs francs = $montantEuro €";
