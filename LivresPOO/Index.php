<h1>Exercice LIVRES</h1>
<p>
Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un auteur. Un auteur comporte un nom et un prénom.<br>
Une méthode toString() sera appréciée dans chacune de vos classes.<br>
Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie complète d’un auteur.<br>
</p>
<h2>Résultat</h2>

<?php

// Déclaration des 2 classes nécéssaires
//-------------------------------------------------------------------
require "classes/Auteur.php";
require "classes/Livre.php";

// Création d'un auteur
//-------------------------------------------------------------------
$auteur = new Auteur("Stephen", "King");

// Création des livres
//-------------------------------------------------------------------
$l1 = new Livre("Ca", 1138, 20, "1986", $auteur);
$l2 = new Livre("Simetierre", 374, 15, "1983", $auteur);
$l3 = new Livre("Le Fléau", 823, 14, "1978", $auteur);
$l4 = new Livre("Shining", 447, 16, "1977", $auteur);

// Affichage de la bibliographie de l'auteur
//-------------------------------------------------------------------
echo $auteur->afficherBibliographie();