<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.

$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;

Affichage :
Michel DUPONT a … ans
Alice DUCHEMIN a … ans </p>

<?php

class Personne {
    private string $_nom;
    private string $_prenom;
    private DateTime $_birthDate;

    function __construct(string $nom, string $prenom, string $birthDate) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_birthDate = new DateTime($birthDate);           // transforme notre "string" en "DateTime"
    }

    public function getNom() {
        return $this->_nom;
    }

    public function setNom(string $nom) {
        $this->_nom = $nom;
    }

    public function getPrenom() {
        return $this->_prenom;
    }

    public function setPrenom(string $prenom) {
        $this->_prenom = $prenom;
    }

    public function getBirthDate() {
        return $this->_birthDate;
    }

    public function setBirthDate(string $birthDate) {
        $this->_birthDate = new DateTime($birthDate);
    }

    public function getAge() {
        $now = new DateTime();
        $diff = $this->_birthDate->diff($now);
        return $diff->y;                             // ou return $diff->format("%Y") pour renvoyer que le nombre d'années
    }

    public function __toString() {
        return $this->_prenom . " " . $this->_nom . " à " . $this->getAge() . " ans";
    }
}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

echo $p1."</br>";
echo $p2;