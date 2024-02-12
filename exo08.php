<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la
forme :
Affichage (pour la table de 8) :
Table de 8 :
1 x 8 = 8
2 x 8 = 16
3 x 8 = 24 …</p>

<p>Première proposition:</p>
<?php

tableMultiplication(8);

function tableMultiplication($nombre) {
    echo "Table de $nombre :<br>";

    for ($i = 1; $i <= 10; $i++) {
        $resultat = $i * $nombre;
        echo "$i x $nombre = $resultat<br>";
    }
}

?>



<p>Deuxième proposition:</p>

<?php

tableMultiplication(9);

function tableMultiplication($nombre) {
    echo "Table de $nombre :<br>";

    $valeurs = range(1, 10);

    foreach ($valeurs as $i) {
        $resultat = $i * $nombre;
        echo "$i x $nombre = $resultat<br>";
    }
}

?>

<?php

tableMultiplication(9);

function tableMultiplication($nombre) {
    echo "Table de $nombre :<br>";

    $i = 1;
    while ($i <= 10) {
        $resultat = $i * $nombre;
        echo "$i x $nombre = $resultat</br>";
        $i++;
    
    }
    }

?>
