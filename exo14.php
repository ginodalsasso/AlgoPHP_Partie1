<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).
Affichage (si la date courante est le 21/05/2018 et la date de naissance le
17/01/1985) :
Age de la personne : 33 ans 4 mois 4 jours </p>

<?php 


$birthDate = new DateTime("17-01-1985"); 

$todayDate = new DateTime("21-05-2018");

$rest = date_diff($todayDate, $birthDate);          //calcule la différence entre deux dates

echo "Age de la personne : " . $rest->y . " ans " . $rest->m . " mois " . $rest->d . " jours"; // préciser une unité de temps " y - m - d "

