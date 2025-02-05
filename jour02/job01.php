<?php

class Rectangle {
    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function getLongueur() {
        return $this->longueur;
    }

    public function setLongueur($nouvelleLongueur) {
        $this->longueur = $nouvelleLongueur;        
    }
     
    public function getLargeur() {
        return $this->largeur;  
    }

    public function setLargeur($nouvelleLargeur) {
        $this->largeur = $nouvelleLargeur;
    }

  
    public function afficher() {
        return "Rectangle : Longueur = " . $this->longueur . " | Largeur = " . $this->largeur;
    }   
}

$rectangle = new Rectangle(10, 5);
echo $rectangle->afficher() . "<br>";

$rectangle->setLongueur(15);
$rectangle->setLargeur(9);

echo "Après modification :<br>";
echo $rectangle->afficher();

