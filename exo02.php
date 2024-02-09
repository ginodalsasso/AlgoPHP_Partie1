<h1>Exercice 2</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots 
contenus dans celle-ci</p>

<?php

$nbMots = str_word_count("Notre formation DL commence aujourd'hui");
echo "La phrase « Notre formation DL commence aujourd'hui » contient $nbMots mots<br>";