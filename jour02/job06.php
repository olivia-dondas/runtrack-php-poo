<?php

// Définition de la classe Commande
class Commande {

    // Attributs privés
    private $numero_commande;
    private $plats_commandes = [];  // Dictionnaire pour les plats (nom, prix, statut)
    private $statut_commande;  // Statut de la commande : en cours, terminée ou annulée

    // Constructeur pour initialiser la commande
    public function __construct($numero_commande) {
        $this->numero_commande = $numero_commande;
        $this->statut_commande = "en cours";  // Initialement, la commande est en cours
    }

    // Méthode pour ajouter un plat à la commande
    public function ajouterPlat($nom, $prix) {
        if ($this->statut_commande === "en cours") {
            $this->plats_commandes[$nom] = [
                'prix' => $prix,
                'statut' => 'en attente'
            ];
            echo "Plat ajouté : $nom au prix de $prix €<br>";
        } else {
            echo "Impossible d'ajouter un plat, la commande est " . $this->statut_commande . ".<br>";
        }
    }

    // Méthode pour annuler la commande
    public function annulerCommande() {
        if ($this->statut_commande === "en cours") {
            $this->statut_commande = "annulée";
            echo "La commande a été annulée.<br>";
        } else {
            echo "Impossible d'annuler la commande, elle est déjà " . $this->statut_commande . ".<br>";
        }
    }

    // Méthode privée pour calculer le total de la commande
    private function calculerTotal() {
        $total = 0;
        foreach ($this->plats_commandes as $plat) {
            $total += $plat['prix'];
        }
        return $total;
    }

    // Méthode pour calculer la TVA (exemple : 10% de TVA)
    public function calculerTVA() {
        $total = $this->calculerTotal();
        $tva = $total * 0.10;  // 10% de TVA
        echo "La TVA à 10% est de : $tva €<br>";
        return $tva;
    }

    // Méthode pour afficher les détails de la commande
    public function afficherCommande() {
        echo "Commande N°: " . $this->numero_commande . "<br>";
        echo "Statut de la commande : " . $this->statut_commande . "<br>";
        echo "Plats commandés :<br>";

        if (empty($this->plats_commandes)) {
            echo "Aucun plat commandé.<br>";
        } else {
            foreach ($this->plats_commandes as $nom => $details) {
                echo "- $nom : " . $details['prix'] . " € (Statut : " . $details['statut'] . ")<br>";
            }
        }

        $total = $this->calculerTotal();
        echo "Total de la commande : $total €<br>";
    }

    // Méthode pour finaliser la commande et la marquer comme terminée
    public function finaliserCommande() {
        if ($this->statut_commande === "en cours") {
            $this->statut_commande = "terminée";
            echo "La commande a été terminée.<br>";
        } else {
            echo "Impossible de finaliser, la commande est déjà " . $this->statut_commande . ".<br>";
        }
    }

    // Méthode pour accéder à l'attribut "plats_commandes" (encapsulation)
    public function getPlatsCommandes() {
        return $this->plats_commandes;
    }

    // Méthode pour accéder à l'attribut "statut_commande" (encapsulation)
    public function getStatutCommande() {
        return $this->statut_commande;
    }
}

// Exemple d'utilisation de la classe Commande

// Création d'une commande avec un numéro
$commande1 = new Commande(123);

// Ajouter des plats à la commande
$commande1->ajouterPlat("Pizza Margherita", 10);
$commande1->ajouterPlat("Pasta Carbonara", 12);

// Afficher les détails de la commande
$commande1->afficherCommande();

// Calcul de la TVA
$commande1->calculerTVA();

// Finaliser la commande
$commande1->finaliserCommande();

// Essayer d'ajouter un plat après la finalisation de la commande
$commande1->ajouterPlat("Salade César", 7);

// Afficher de nouveau les détails de la commande
$commande1->afficherCommande();

// Annuler la commande (impossible car déjà terminée)
$commande1->annulerCommande();

?>