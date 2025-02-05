<?php
// Définition de la classe Personnage
class Personnage {
    // Attributs pour les coordonnées x et y
    public $x;
    public $y;

    // Constructeur pour initialiser la position
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    // Méthode pour déplacer le personnage vers la gauche
    public function gauche() {
        $this->x -= 1;
    }

    // Méthode pour déplacer le personnage vers la droite
    public function droite() {
        $this->x += 1;
    }

    // Méthode pour déplacer le personnage vers le bas
    public function bas() {
        $this->y += 1;
    }

    // Méthode pour déplacer le personnage vers le haut
    public function haut() {
        $this->y -= 1;
    }

    // Méthode pour renvoyer les coordonnées actuelles
    public function position() {
        return "Position actuelle : (" . $this->x . ", " . $this->y . ")";
    }
}

// Instanciation de l'objet Personnage avec une position initiale (x, y)
$monPersonnage = new Personnage(5, 5);

// Affichage de la position initiale
echo $monPersonnage->position() . "<br>";

// Déplacement du personnage vers la gauche
$monPersonnage->gauche();
echo $monPersonnage->position() . "<br>"; // Affiche la position après déplacement vers la gauche

// Déplacement du personnage vers le haut
$monPersonnage->haut();
echo $monPersonnage->position() . "<br>"; // Affiche la position après déplacement vers le haut

// Déplacement du personnage vers la droite
$monPersonnage->droite();
echo $monPersonnage->position() . "<br>"; // Affiche la position après déplacement vers la droite

// Déplacement du personnage vers le bas
$monPersonnage->bas();
echo $monPersonnage->position() . "<br>"; // Affiche la position après déplacement vers le bas
?>
