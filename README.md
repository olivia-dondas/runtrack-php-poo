# PHP - Programmation Orientée Objet : Jour 1

## Introduction

Cette première journée d'exercices vise à introduire la Programmation Orientée Objet (POO) en PHP. L'objectif est de comprendre les bases des classes, des objets, des constructeurs et des méthodes, tout en appliquant ces concepts à travers divers exercices pratiques.

Jusqu'à présent, nous avons utilisé une approche procédurale pour développer des programmes. Cette approche devient rapidement complexe à maintenir. La POO permet d'organiser et de structurer le code pour le rendre plus lisible, modulaire et réutilisable.

## Contenu des exercices

### **Job 1 : Création d'une classe simple**

- Création d'une classe `Operation`.
- Implémentation d'un constructeur initialisant les attributs `nombre1` et `nombre2`.
- Instanciation de la classe et affichage des attributs.

### **Job 2 : Ajout d'une méthode**

- Ajout de la méthode `addition()` à la classe `Operation`.
- La méthode additionne `nombre1` et `nombre2` et affiche le résultat.

### **Job 3 : Classe Personne**

- Création d'une classe `Personne` avec les attributs `nom` et `prenom`.
- Ajout d'une méthode `SePresenter()` pour afficher le nom et le prénom.
- Instanciation de plusieurs objets `Personne` et appel de `SePresenter()`.

### **Job 4 : Gestion des coordonnées d'un point**

- Création d'une classe `Point` avec les attributs `x` et `y`.
- Implémentation des méthodes :
  - `afficherLesPoints()`
  - `afficherX()` et `afficherY()`
  - `changerX()` et `changerY()`

### **Job 5 : Gestion d'un animal**

- Création d'une classe `Animal` avec les attributs `age` et `prenom`.
- Ajout des méthodes :
  - `vieillir()` pour incrémenter l'âge.
  - `nommer()` pour donner un nom à l'animal.

### **Job 6 : Mouvement d'un personnage**

- Création d'une classe `Personnage` avec des attributs `x` et `y`.
- Implémentation des méthodes de déplacement :
  - `gauche()`, `droite()`, `haut()`, `bas()`
  - `position()` pour afficher les coordonnées.

### **Job 7 : Gestion d'un cercle**

- Création d'une classe `Cercle` avec un attribut `rayon`.
- Implémentation des méthodes :
  - `changerRayon()`, `afficherInfos()`
  - `circonference()`, `aire()`, `diametre()`
- Instanciation de deux cercles (rayons 4 et 7) et affichage des informations.

### **Job 8 : Gestion d'un produit**

- Création d'une classe `Produit` avec les attributs `nom`, `prixHT` et `TVA`.
- Implémentation des méthodes :
  - `CalculerPrixTTC()` pour retourner le prix TTC.
  - `afficher()` pour afficher les informations du produit.
  - Ajout des méthodes pour modifier le nom et le prix.
- Instanciation de plusieurs produits et mise à jour des informations.

## Objectifs pédagogiques

- Comprendre les bases de la POO en PHP.
- Apprendre à utiliser les classes, les objets et les méthodes.
- Organiser et structurer son code de manière modulaire.
- Se familiariser avec GitHub pour versionner ses projets.
