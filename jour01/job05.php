<?php
// Définition de la classe Animal
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Animal {
    // Attributs
    public $age;
    public $prenom;
    public $nom;

    // Constructeur
    public function __construct() {
        $this->age = 0;  // Initialisation de l'âge à 0
        $this->prenom = "";  // Initialisation du prénom à vide
        $this->nom = "";
    }

    // Méthode vieillir
    public function vieillir() {
        $this->age += 1;  // Augmente l'âge de 1
    }

    public function nommer($nom) {
        $this->nom = $nom;
    }
}

// Instanciation de l'objet Animal
$monAnimal = new Animal();

$monAnimal->nommer("Luna");

echo "L'animal se nomme ". $monAnimal->nom . ".</br>";

// Affichage de l'âge initial
echo "L'âge de mon animal est : " . $monAnimal->age . " ans.<br>";

// Vieillir l'animal
$monAnimal->vieillir();

// Affichage de l'âge après avoir vieilli
echo "L'âge de mon animal après avoir vieilli est : " . $monAnimal->age . " ans.";
?>