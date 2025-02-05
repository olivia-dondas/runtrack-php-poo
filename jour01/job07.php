<?php
// Définition de la classe Cercle
class Cercle {
    // Attributs
    public $rayon;

    // Constructeur
    public function __construct($rayon) {
        $this->rayon = $rayon;  // Initialisation du rayon
    }

    // Méthode pour changer le rayon
    public function changerRayon($nouveauRayon) {
        $this->rayon = $nouveauRayon;  // Modification du rayon
    }

    // Méthode pour afficher les informations du cercle
    public function afficherInfos() {
        echo "Rayon : " . $this->rayon . "<br>";
        echo "Diamètre : " . $this->diametre() . "<br>";
        echo "Circonférence : " . $this->circonference() . "<br>";
        echo "Aire : " . $this->aire() . "<br>";
    }

    // Méthode pour calculer la circonférence du cercle
    public function circonference() {
        return 2 * pi() * $this->rayon;  // Formule de la circonférence : 2 * pi * rayon
    }

    // Méthode pour calculer l'aire du cercle
    public function aire() {
        return pi() * pow($this->rayon, 2);  // Formule de l'aire : pi * rayon^2
    }

    // Méthode pour calculer le diamètre du cercle
    public function diametre() {
        return 2 * $this->rayon;  // Formule du diamètre : 2 * rayon
    }
}

// Création des cercles
$cercle1 = new Cercle(4);  // Cercle avec rayon 4
$cercle2 = new Cercle(7);  // Cercle avec rayon 7

// Affichage des informations pour le premier cercle
echo "Cercle 1 (Rayon = 4) :<br>";
$cercle1->afficherInfos();
echo "<br>";

// Affichage des informations pour le deuxième cercle
echo "Cercle 2 (Rayon = 7) :<br>";
$cercle2->afficherInfos();
?>