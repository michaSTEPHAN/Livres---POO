<?php

class Auteur
{
    // Déclaration des attributs
    //    private array $livres; => On fait référence à la classe LIVRE pour récuperer pour chaque auteur l'ensemble de ses livres écrits
    private string $nom;
    private string $prenom;
    private array $livres;

    // METHODE __construct : Permet de recupérer les variales passées en paramètres dans des variables
    public function __construct(string $nom, string $prenom)
    {
        $this->nom         = $nom;
        $this->prenom      = $prenom;
        $this->livres      = [];
    }

    //-------------------------------------------------------------------
    // Creation ACCESSEUR et MUTATEUR
    //-------------------------------------------------------------------
    // ACCESSEUR ET MUTATEUR du champ NOM
    public function getNom(): string {
        return $this->nom;
    }
    public function setNom(string $nom): void{
        $this->nom = $nom;
    }
    // ACCESSEUR ET MUTATEUR du champ PRENOM
    public function getPrenom(): string {
        return $this->prenom;
    }
    public function setPrenom(string $prenom): void{
        $this->prenom = $prenom;
    }
    //-------------------------------------------------------------------

    //-------------------------------------------------------------------
    // FONCTION qui affiche 1 ligne avec les infos du livre de l'auteur passé en paramètre
    //-------------------------------------------------------------------
    public function afficherBibliographie()
    {
        $ligne = "<br><h2>Livres de $this->nom $this->prenom : "."</h2><br>"; 
        foreach ($this->livres as $livre) {
            $ligne  .= $livre->getTitre()
              ." (".$livre->getAnneeParution().") : "
              .$livre->getNbrePage()." pages / "
              .$livre->getPrix()." euros<br>"
            ;
        }

        return $ligne;
    }    

    //-------------------------------------------------------------------
    // FONCTION qui permet de récupérer les infos du livre dans la classe AUTEUR
    //-------------------------------------------------------------------
    public function addLivre(Livre $livre)
    {
        array_push($this->livres, $livre);
    }

    //-------------------------------------------------------------------
    // FONCTION __toString()
    //-------------------------------------------------------------------
    public function __toString()
    { 
        return $this->afficherBibliographie(); 
    }

}