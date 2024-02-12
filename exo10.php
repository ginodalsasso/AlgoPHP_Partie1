<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
1 €.
Affichage :
Montant à payer : 152 €
Montant versé : 200 €
Reste à payer : 48 €
***************************************************
Rendue de monnaie :
4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 €</p>

<?php

$montant = 152;
$montantPaid = 200;
$rest = $montantPaid - $montant;

$billet10 = 0;
$billet5 = 0;
$coin2 = 0;
$coin1 = 0;

    $billet10 = intdiv($rest, 10);
    $rest = $rest - 10 * $billet10;
    $billet5 = intdiv($rest, 5);
    $rest = $rest - 5 * $billet5;
    $coin2 = intdiv($rest, 2);
    $rest = $rest - 2 * $coin2;
    
    echo "Billets de 10 : $billet10 </br>";
    echo "Billets de 5 : $billet5 </br>";
    echo "Pièces de 2 : $coin2 </br>";
    echo "Pièces de 1 : $rest </br>";


    /* D'UNE AUTRE FACON;

    while ($rest > 0) {             //tant que le reste à payer est > à 0 alors >>
        if ($rest >= 10){
            $billet10 ++;
            $rest -= 10;             // $a -= $b 	$a = $a - $b;   $a += $b 	$a = $a + $b; PAREIL POUR TOUT OPERATEUR ARITHMETIQUE
        }elseif ($rest >= 5){
            $billet5 ++;
            $rest -= 5;
        }elseif ($rest >= 2){
            $coin2 ++;
            $rest -= 2;
        }elseif ($rest >= 1){
            $billet5 ++;
            $rest -= 1;
        }
        } 


    echo "Montant à payer: $montant €</br>";
    echo "Montant versé: $montantPaid €</br>";
    echo "Reste à payer: $rest €</br>";
    echo "*********************************************************</br>";
    echo "Rendue de monnaie :</br>";
    echo "$billet10 billets de 10€ - $billet5 billet de 5€ - $coin2 pièce de 2€ - $coin1 pièce de 1€";
*/
    