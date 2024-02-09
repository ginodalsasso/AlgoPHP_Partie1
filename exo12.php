<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG

Affichage :
Salut Mickaël
Hola Virgile
Hello Marie-Claire

Variante : trier d’abord le tableau par ordre alphabétique du prénom
Affichage :
Hello Marie-Claire
Salut Mickaël
Hola Virgil </p>

<?php

function heyMessage($arrayPrenomLangue) {

    ksort ($arrayPrenomLangue);                     // Trie le tableau par ordre alphabétique des prénoms
    
    $salut = array(
        "FRA" => "Salut ",
        "ITA" => "Ciao ",
        "ESP" => "Hola ",
        "ENG" => "Hello "
    );    

    foreach ($arrayPrenomLangue as $prenom => $langue) {        // Salue chaque personne dans sa langue
        echo $salut[$langue] . " $prenom</br>";
    }
    
}

$arrayPrenomLangue = array(
    "Romane" => "FRA",
    "Stella" => "ITA",
    "Tony" => "ESP",
    "Brian" => "ENG"
);

heyMessage($arrayPrenomLangue);  // ne pas oublier de faire appel à la fonction !