<?php
// Définition de la classe Voiture
class Voiture {
    // Attributs privés
    private $marque;
    private $modele;
    private $annee;
    private $kilometrage;
    private $en_marche;
    private $reservoir;

    // Constructeur pour initialiser les attributs
    public function __construct($marque, $modele, $annee, $kilometrage) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
        $this->en_marche = false;  // La voiture est arrêtée au départ
        $this->reservoir = 50;  // Réservoir par défaut à 50
    }

    // Assesseurs et mutateurs pour chaque attribut

    // Marque
    public function getMarque() {
        return $this->marque;
    }
    public function setMarque($marque) {
        $this->marque = $marque;
    }

    // Modèle
    public function getModele() {
        return $this->modele;
    }
    public function setModele($modele) {
        $this->modele = $modele;
    }

    // Année
    public function getAnnee() {
        return $this->annee;
    }
    public function setAnnee($annee) {
        $this->annee = $annee;
    }

    // Kilométrage
    public function getKilometrage() {
        return $this->kilometrage;
    }
    public function setKilometrage($kilometrage) {
        $this->kilometrage = $kilometrage;
    }

    // En marche
    public function getEnMarche() {
        return $this->en_marche;
    }
    public function setEnMarche($enMarche) {
        $this->en_marche = $enMarche;
    }

    // Réservoir
    public function getReservoir() {
        return $this->reservoir;
    }
    public function setReservoir($reservoir) {
        $this->reservoir = $reservoir;
    }

    // Méthode pour démarrer la voiture
    public function demarrer() {
        if ($this->verifier_plein() > 5) {  // Vérifie si le réservoir a plus de 5
            $this->en_marche = true;  // La voiture démarre
            echo "La voiture démarre !<br>";
        } else {
            echo "Le réservoir est trop vide pour démarrer.<br>";
        }
    }

    // Méthode pour arrêter la voiture
    public function arreter() {
        $this->en_marche = false;  // La voiture s'arrête
        echo "La voiture s'arrête.<br>";
    }

    // Méthode privée pour vérifier le niveau du réservoir
    private function verifier_plein() {
        return $this->reservoir;
    }
}

// Exemple d'utilisation de la classe Voiture

// Instanciation d'une voiture
$voiture = new Voiture("Toyota", "Corolla", 2020, 15000);

// Affichage des informations de la voiture
echo "Marque : " . $voiture->getMarque() . "<br>";
echo "Modèle : " . $voiture->getModele() . "<br>";
echo "Année : " . $voiture->getAnnee() . "<br>";
echo "Kilométrage : " . $voiture->getKilometrage() . " km<br>";
echo "Réservoir : " . $voiture->getReservoir() . " L<br>";

// Tentative de démarrer la voiture
$voiture->demarrer();

// Changer le niveau du réservoir et redémarrer
$voiture->setReservoir(3);  // Réservoir presque vide
$voiture->demarrer();

// Arrêter la voiture
$voiture->arreter();
?>