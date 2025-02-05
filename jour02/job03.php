<?php
// Définition de la classe Livre
class Livre {
    // Attributs privés
    private $titre;
    private $auteur;
    private $disponible;

    // Constructeur pour initialiser les attributs
    public function __construct($titre, $auteur) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->disponible = true;  // Initialisation de l'attribut disponible à True
    }

    // Méthode pour vérifier la disponibilité du livre
    public function verification() {
        return $this->disponible;
    }

    // Méthode pour emprunter le livre
    public function emprunter() {
        if ($this->verification()) {  // Vérifie si le livre est disponible
            $this->disponible = false;  // Rend le livre indisponible
            echo "Le livre '" . $this->titre . "' a été emprunté.<br>";
        } else {
            echo "Le livre '" . $this->titre . "' n'est pas disponible pour emprunt.<br>";
        }
    }

    // Méthode pour rendre le livre
    public function rendre() {
        if (!$this->verification()) {  // Vérifie si le livre a été emprunté
            $this->disponible = true;  // Rend le livre disponible
            echo "Le livre '" . $this->titre . "' a été rendu.<br>";
        } else {
            echo "Le livre '" . $this->titre . "' est déjà disponible.<br>";
        }
    }

    // Méthode pour obtenir les informations sur le livre
    public function informations() {
        return "Titre : " . $this->titre . ", Auteur : " . $this->auteur . ", Disponible : " . ($this->disponible ? "Oui" : "Non");
    }
}

// Exemples de livres 
$livre1 = new Livre("Stupeur et tremblements", "Amélie Nothomb");
$livre2 = new Livre("Hygiène de l'assassin", "Amélie Nothomb");
$livre3 = new Livre("Métaphysique des tubes", "Amélie Nothomb");

// Affichage des informations des livres
echo $livre1->informations() . "<br>";
echo $livre2->informations() . "<br>";
echo $livre3->informations() . "<br>";

// Emprunt du premier livre
$livre1->emprunter();

// Vérification de la disponibilité après l'emprunt
echo $livre1->verification() ? "Le livre est disponible.<br>" : "Le livre n'est pas disponible.<br>";

// Tentative de ré-emprunt du premier livre
$livre1->emprunter();

// Retour du premier livre
$livre1->rendre();

// Vérification de la disponibilité après le retour
echo $livre1->verification() ? "Le livre est disponible.<br>" : "Le livre n'est pas disponible.<br>";
?>
