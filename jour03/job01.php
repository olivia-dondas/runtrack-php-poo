<?php

// Classe Personne
class Personne {

    // Attribut "age" avec une valeur par défaut de 14
    protected $age;

    // Constructeur de la classe Personne
    public function __construct($age = 14) {
        $this->age = $age;
    }

    // Méthode pour afficher l'âge de la personne
    public function afficherAge() {
        echo "L'âge de la personne est : " . $this->age . " ans.<br>";
    }

    // Méthode pour afficher un message de salutation
    public function bonjour() {
        echo "Hello<br>";
    }

    // Méthode pour modifier l'âge de la personne
    public function modifierAge($nouvelAge) {
        $this->age = $nouvelAge;
    }
}

// Classe Eleve qui hérite de la classe Personne
class Eleve extends Personne {

    // Méthode pour afficher l'âge de l'élève
    public function afficherAge() {
        echo "J'ai " . $this->age . " ans.<br>";
    }

    // Méthode pour afficher un message indiquant que l'élève va en cours
    public function allerEnCours() {
        echo "Je vais en cours.<br>";
    }
}

// Classe Professeur qui hérite de la classe Personne
class Professeur extends Personne {

    // Attribut privé "matiereEnseignee"
    private $matiereEnseignee;

    // Constructeur de la classe Professeur
    public function __construct($age = 14, $matiereEnseignee) {
        parent::__construct($age);  // Appel au constructeur de la classe Personne
        $this->matiereEnseignee = $matiereEnseignee;
    }

    // Méthode publique pour enseigner
    public function enseigner() {
        echo "Le cours va commencer.<br>";
    }
}

// Instancier une classe Personne et une classe Eleve
$personne1 = new Personne();
$eleve1 = new Eleve(16);

// Afficher l'âge par défaut de l'élève
$eleve1->afficherAge();  // Affiche "J'ai 16 ans"

// Modifier l'âge de l'élève
$eleve1->modifierAge(18);
$eleve1->afficherAge();  // Affiche "J'ai 18 ans"

// L'élève va en cours
$eleve1->allerEnCours();  // Affiche "Je vais en cours"

// Créer une instance de Professeur
$professeur1 = new Professeur(35, "Mathématiques");
$professeur1->afficherAge();  // Affiche "L'âge de la personne est : 35 ans."
$professeur1->enseigner();  // Affiche "Le cours va commencer"

?>