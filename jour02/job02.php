<?php
class Livre {
    private $titre;
    private $auteur;
    private $nbPages;

    // Constructeur
    public function __construct($titre, $auteur, $nbPages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->setNbPages($nbPages); // Utilisation du setter pour validation
    }

    // Assesseurs (getters)
    public function getTitre() {
        return $this->titre;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function getNbPages() {
        return $this->nbPages;
    }

    // Mutateurs (setters)
    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }

    public function setNbPages($nbPages) {
        if (is_int($nbPages) && $nbPages > 0) {
            $this->nbPages = $nbPages;
        } else {
            echo "Erreur : Le nombre de pages doit être un entier positif.\n";
        }
    }

    // Méthode pour afficher les infos du livre
    public function afficher() {
        return "Livre : \"{$this->titre}\" par {$this->auteur}, {$this->nbPages} pages.";
    }
}

// Création d'un livre
$livre1 = new Livre("1984", "George Orwell", 328);
echo $livre1->afficher() . "<br>";

// Modification des attributs
$livre1->setNbPages(400);
echo "Après modification : " . $livre1->afficher() . "<br>";

// Test avec un nombre de pages invalide
$livre1->setNbPages(-50);

//var_dump($livre1);