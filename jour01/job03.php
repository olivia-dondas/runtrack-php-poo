<?php
class Personne {
    public $nom;
    public $prenom;

    // Constructeur 
    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    // Méthode 
    public function SePresenter() {
        return "Bonjour, je m'appelle " . $this->prenom . " " . $this->nom . ".<br>";
    }
}

$personne1 = new Personne("Dupont", "Jean");
$personne2 = new Personne("Martin", "Sophie");
$personne3 = new Personne("Durand", "Paul");

// Présentations
echo $personne1->SePresenter();
echo $personne2->SePresenter();
echo $personne3->SePresenter();
