<?php

class Livre {

    // Déclaration des attributs
    //  => private Auteur $auteur;      Permet de faire le lien avec la classe AUTEUR
    private string $titre;
    private int $nbrePage;
    private float $prix;
    private string $anneeParution;
    private Auteur $auteur;

    // METHODE __construct : Permet de recupérer les variales passées en paramètres dans des variables
    public function __construct(string $titre, int $nbrePage, float $prix, string $anneeParution, Auteur $auteur)   
    {
        $this->titre            = $titre;
        $this->nbrePage         = $nbrePage;
        $this->prix             = $prix;
        $this->anneeParution    = $anneeParution;

        // lien avec la classe AUTEUR qui servira à récupérer les infos du livre dans la classe AUTEUR
        $this->auteur           = $auteur;
        $auteur->addLivre($this); 
    }
    
    //-------------------------------------------------------------------
    // Creation ACCESSEUR et MUTATEUR
    //-------------------------------------------------------------------

    // ACCESSEUR ET MUTATEUR du champ TITRE
    public function getTitre(): string {
        return $this->titre;
    }
    public function setTitre(string $titre): void{
        $this->titre = $titre;
    }
    // ACCESSEUR ET MUTATEUR du champ NBREPAGE
    public function getNbrePage(): int {
        return $this->nbrePage;
    }
    public function setNbrePage(int $nbrePage): void{
        $this->nbrePage = $nbrePage;
    }
    // ACCESSEUR ET MUTATEUR du champ PRIX
    public function getPrix(): float {
        return $this->prix;
    }
    public function setPrix(float $prix): void{
        $this->prix = $prix;
    }
    // ACCESSEUR ET MUTATEUR du champ ANNEEPARUTION
    public function getAnneeParution(): string {
        return $this->anneeParution;
    }
    public function setAnneeParution(string $anneeParution): void{
        $this->anneeParution = $anneeParution;
    }
    // ACCESSEUR ET MUTATEUR du champ AUTEUR
    public function getAuteur(): Auteur {
        return $this->auteur;
    }
    public function setAuteur(Auteur $auteur): void{
        $this->auteur = $auteur;
    }
    //-------------------------------------------------------------------

    public function __toString()
    {
        return "Titre : $this->titre, 
            Auteur : $this->auteur, 
            Nombre de pages : $this->nbPages, 
            Prix : $this->prix, 
            Date de parution : $this->dateParution";
    }

}