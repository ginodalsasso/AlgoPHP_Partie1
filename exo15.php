<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.

$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;

Affichage :
Michel DUPONT a … ans
Alice DUCHEMIN a … ans </p>

<?php

class Personne{
    private $_nom;
    private $_prenom;
    private DateTime $_birthDate;   // DateTime supprimé ici


    function __construct(string $nom, string $prenom, string $birthDate){
        $this->_nom = $nom;
        $this->prenom = $prenom;
        $this->birthDate = new DateTime($birthDate);    // transforme notre "string" en "DateTime"
    }
    

public function getNom(){
    return $this->_nom;
}

public function setNom(string $nom){
    $this->_nom = $nom;
}
public function getPrenom(){
    return $this->_prenom;
}

public function setPrenom(string $prenom){
    $this->_nom = $prenom;
}

public function getBirthDate(){
    return $this->birthdate;
}

public function setBirthDate(string $birthdate){
    $this->_birthdate = $birthDate;
}

public function getAge() {                              //fonction permettant de calculer l'âge des personnes à partir de la date du jour
    $now = new DateTime(); // date du jour
    $diff = $this->birthDate->diff($now);
return $diff->y;                                         // ou return $diff->format("%Y") pour renvoyer que le nombre d'années
}
}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;

echo $p1->getPrenom() . " " . $p1->getNom() . " a " . $p1->getAge() . " ans</br>";
echo $p2->getPrenom() . " " . $p2->getNom() . " a " . $p2->getAge() . " ans";
