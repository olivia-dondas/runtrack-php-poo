<?php
// Définition de la classe Student
class Student {
    // Attributs privés
    private $nom;
    private $prenom;
    private $numeroEtudiant;
    private $credits;
    private $level;

    // Constructeur pour initialiser les attributs
    public function __construct($nom, $prenom, $numeroEtudiant) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numeroEtudiant = $numeroEtudiant;
        $this->credits = 0;  // Par défaut, l'étudiant a 0 crédits
        $this->level = $this->studentEval();  // Evaluation initiale de l'étudiant
    }

    // Méthode pour ajouter des crédits
    public function add_credits($creditsAjoutes) {
        if ($creditsAjoutes > 0) {
            $this->credits += $creditsAjoutes;
            $this->level = $this->studentEval();  // Mise à jour du niveau après l'ajout de crédits
        } else {
            echo "Le nombre de crédits ajouté doit être supérieur à zéro.<br>";
        }
    }

    // Méthode privée pour évaluer le niveau de l'étudiant
    private function studentEval() {
        if ($this->credits >= 90) {
            return "Excellent";
        } elseif ($this->credits >= 80) {
            return "Très bien";
        } elseif ($this->credits >= 70) {
            return "Bien";
        } elseif ($this->credits >= 60) {
            return "Passable";
        } else {
            return "Insuffisant";
        }
    }

    // Méthode pour afficher les informations de l'étudiant
    public function studentInfo() {
        echo "Nom = " . $this->nom . "<br>";
        echo "Prénom = " . $this->prenom . "<br>";
        echo "id = " . $this->numeroEtudiant . "<br>";
        echo "Niveau = " . $this->level . "<br>";
    }
}

// Instanciation d'un objet représentant l'étudiant John Doe
$student = new Student("Doe", "John", 145);

// Ajout de crédits à l'étudiant
$student->add_credits(30);
$student->add_credits(40);
$student->add_credits(25);

// Affichage des informations de l'étudiant
$student->studentInfo();
?>