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

if(gettype($age) == "integer" || gettype($sexe) == "string" ) {
    if($age > 35)  {
        $resultat = "est non imposable";
    } elseif($age > 20 and $sexe = false) {
        $resultat = "est imposable";
    } else {
        $resultat = "est imposable";
    }
    
    echo "Age : $age</br>";
    echo "Sexe : $sexe</br>";
    echo "La personne qui a $age ans $resultat<br>";
}