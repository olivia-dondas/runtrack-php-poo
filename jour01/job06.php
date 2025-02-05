<?php
// Définition de la classe Personnage
class Personnage {
    // Attributs
    public $x;
    public $y;
    public $plateau;

    // Constructeur
    public function __construct($x, $y) {
        $this->x = $x;  // Position initiale en x
        $this->y = $y;  // Position initiale en y
        $this->plateau = [];  // Plateau vide (tu peux remplir le plateau avec des valeurs ou des dimensions si nécessaire)
    }

    // Méthode pour se déplacer à gauche
    public function gauche() {
        $this->x -= 1;  // Déplace le personnage vers la gauche (diminution de l'index x)
    }

    // Méthode pour se déplacer à droite
    public function droite() {
        $this->x += 1;  // Déplace le personnage vers la droite (augmentation de l'index x)
    }

    // Méthode pour se déplacer vers le bas
    public function bas() {
        $this->y += 1;  // Déplace le personnage vers le bas (augmentation de l'index y)
    }

    // Méthode pour se déplacer vers le haut
    public function haut() {
        $this->y -= 1;  // Déplace le personnage vers le haut (diminution de l'index y)
    }

    // Méthode pour obtenir la position actuelle du personnage
    public function position() {
        return "Position actuelle : (" . $this->x . ", " . $this->y . ")";
    }
}

// Instanciation du personnage
$personnage = new Personnage(5, 5); // Position initiale : x = 5, y = 5

// Déplacement du personnage
$personnage->gauche(); // Déplacement à gauche
$personnage->bas();    // Déplacement vers le bas
$personnage->droite(); // Déplacement à droite
$personnage->haut();   // Déplacement vers le haut

// Affichage de la position finale
echo $personnage->position();  // Affiche la position actuelle après les déplacements
?>