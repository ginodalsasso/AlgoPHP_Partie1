<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser. </p>

<?php
$age = 10;

    if(gettype($age) == "double" || gettype($age) == "integer" ) {
        if($age >= 12) {
        $resultat = "Pupille";
    } elseif($age >= 10) {
        $resultat = "Cadet";
    } elseif($age >= 8) {
        $resultat = "Minime";
    }    elseif($age >= 6) {
            $resultat = "Poussin";
    } else {
            $resultat = "Cette catégorie d'age n'est pas gérée !";
        }
        
        echo "L'enfant qui à $age ans appartient à la catégorie «$resultat »";
    } else {
        echo "Veuillez saisir un âge numérique !<br>";
    }