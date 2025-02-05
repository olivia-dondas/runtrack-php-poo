<?php
// Définition de la classe Produit
class Produit {
    // Attributs
    private $nom;
    private $prixHT;
    private $TVA;

    // Constructeur
    public function __construct($nom, $prixHT, $TVA = 0.2) {
        $this->nom = $nom;
        $this->prixHT = $prixHT;
        $this->TVA = $TVA;
    }

    // Méthode pour calculer le prix TTC
    public function CalculerPrixTTC() {
        return $this->prixHT * (1 + $this->TVA);
    }

    // Méthode pour afficher les informations du produit
    public function afficher() {
        return "Produit : " . $this->nom . "\n" .
               "Prix HT : " . $this->prixHT . " €\n" .
               "TVA : " . ($this->TVA * 100) . " %\n" .
               "Prix TTC : " . $this->CalculerPrixTTC() . " €\n";
    }

    // Méthodes pour modifier les attributs
    public function setNom($nouveauNom) {
        $this->nom = $nouveauNom;
    }

    public function setPrixHT($nouveauPrixHT) {
        $this->prixHT = $nouveauPrixHT;
    }

    // Méthodes pour récupérer les informations
    public function getNom() {
        return $this->nom;
    }

    public function getPrixHT() {
        return $this->prixHT;
    }

    public function getTVA() {
        return $this->TVA;
    }

    public function getPrixTTC() {
        return $this->CalculerPrixTTC();
    }
}

// Création de plusieurs produits
$produit1 = new Produit("Ordinateur", 1000);
$produit2 = new Produit("Smartphone", 800, 0.1);

// Affichage des produits
echo $produit1->afficher() . "\n";
echo $produit2->afficher() . "\n";

// Modification du nom et du prix du premier produit
$produit1->setNom("PC Gamer");
$produit1->setPrixHT(1200);

// Affichage des nouvelles informations
echo "Après modification :\n";
echo $produit1->afficher();
?>