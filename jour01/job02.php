<?php


/*Job 2
Modifier votre classe “Operation” afin d’y ajouter la méthode “addition()”
. Cette
méthode additionne “nombre1” et “nombre2” et afficher le résultat.*/


class Operation {
    public $nombre1;
    public $nombre2;

    // Constructeur pour initialiser les nombres
    public function __construct($nombre1 = 0, $nombre2 = 0) {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }

    // Méthode pour afficher les valeurs des nombres
    public function afficher() {
        echo "Nombre 1 : " . $this->nombre1 . "<br>";
        echo "Nombre 2 : " . $this->nombre2 . "<br>";
    }

    // Méthode pour additionner les deux nombres et afficher le résultat
    public function addition() {
        $resultat = $this->nombre1 + $this->nombre2;
        echo "Résultat de l'addition : " . $resultat . "<br>";
    }
}

// Création d'un objet avec les valeurs par défaut (0,0)
$operation1 = new Operation();
$operation1->afficher();
$operation1->addition();  // 0 + 0

echo "<br>";

// Création d'un objet avec des valeurs spécifiques
$operation2 = new Operation(5, 10);
$operation2->afficher();
$operation2->addition();  // 5 + 10

?>