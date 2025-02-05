<?php

/*Créer une classe “Operation” avec un constructeur (méthode qui sera appelée lors
de l’instance de la classe). Ajouter les attributs “nombre1” et “nombre2” initialisés
avec des valeurs par défaut. Instancier votre première classe et afficher les attributs.*/


class Operation
{
    // Déclaration des attributs
    public $nombre1;
    public $nombre2;

    // Constructeur avec des valeurs par défaut
    public function __construct($nombre1 = 0, $nombre2 = 0)
    {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }

    // Méthode pour afficher les valeurs des attributs
    public function afficher()
    {
        echo "Nombre 1 : " . $this->nombre1 . "<br>";
        echo "Nombre 2 : " . $this->nombre2 . "<br>";
    }
}

// Instanciation de la classe avec des valeurs par défaut
$operation1 = new Operation();
$operation1->afficher();

echo "<br>";

// Instanciation de la classe avec des valeurs personnalisées
$operation2 = new Operation(5, 10);
$operation2->afficher();

?>