<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome. </p>

<?php 

$string= "Engage le jeu que je le gagne";

function Palindrome($string){  
    if (strrev($string) == $string){  
        return "n'est pas un palindrome";  
    }
    else{
        return "est palindrome";
    }
} 

echo $string. " " .Palindrome($string);