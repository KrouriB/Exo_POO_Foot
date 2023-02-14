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
        $this->pays->rejoindreLaNation();// fonction a definir dans Nation
        $this->saisons = [];
    }

    public function ajouterSaison(Saison $uneSaison)
    {
        $this->$saisons[] = $uneSaison;
    }
}