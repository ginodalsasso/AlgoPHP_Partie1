<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
Affichage :
Age : 32
Sexe : F
La personne est imposable.</p>

<?php

$age = 32;
$sexe = "F";


function estImposable($age, $sexe)
{
    if (($sexe === 'F' && $age >= 18 && $age <= 35) || ($sexe === 'M' && $age > 20)) { // && et || ---->  $a && $b || $c ---> (a and b) or c
        return true;
    } else {
        return false;
    }
}

echo "Age : $age</br>";
echo "Sexe : $sexe</br>";

if (estImposable($age, $sexe)) {
    echo "La personne est imposable.";
}else {
    echo "La personne n'est pas imposable.";
}