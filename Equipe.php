<?php

class Equipe
{
    // nom,pays,année creation(int),joueur(via saison)
    private string $nom;
    private int $creation;
    private Nation $pays;
    private array $saisons;

    public function __construct(string $nom, int $creation, Nation $pays)
    {
        $this->nom = $nom;
        $this->creation = $creation;
        $this->pays = $pays;
        $this->pays->rejoindreLaNation($this);
        $this->saisons = [];
    }

    public function set_nom(string $nom)
    {
        $this->nom = $nom;
    }
    public function get_nom()
    {
        return $this->nom;
    }
    public function set_creation(int $creation)
    {
        $this->creation = $creation;
    }
    public function get_creation()
    {
        return $this->creation;
    }

    public function ajouterSaison(Saison $uneSaison)
    {
        $this->saisons[] = $uneSaison;
    }

    public function __toString()
    {
        return $this->nom;
    }
}