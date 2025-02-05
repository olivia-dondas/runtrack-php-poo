<?php
class Point {
    public $x;
    public $y;

    // Constructeur qui initialise les coordonnées du point
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    // Méthode qui affiche les coordonnées du point
    public function afficherLesPoints() {
        echo "Coordonnées du point : (" . $this->x . ", " . $this->y . ")<br>";
    }

    // Méthodes pour afficher les valeurs de x et y
    public function afficherX() {
        echo "Valeur de X : " . $this->x . "<br>";
    }

    public function afficherY() {
        echo "Valeur de Y : " . $this->y . "<br>";
    }

    // Méthodes pour modifier les valeurs de x et y
    public function changerX($nouveauX) {
        $this->x = $nouveauX;
    }

    public function changerY($nouveauY) {
        $this->y = $nouveauY;
    }
}

// Création d'un objet Point avec les coordonnées (2, 3)
$point1 = new Point(2, 3);

// Affichage des coordonnées initiales
$point1->afficherLesPoints();
$point1->afficherX();
$point1->afficherY();

echo "<br>";

// Modification des coordonnées
$point1->changerX(10);
$point1->changerY(15);

// Affichage des nouvelles coordonnées
$point1->afficherLesPoints();
?>