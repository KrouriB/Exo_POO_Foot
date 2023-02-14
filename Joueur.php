<?php

class Joueur
{
    // nom,penom,pays,age(datediff),club(via saison)
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private Nation $pays;
    private Equipe $equipe;
    private array $saisons;

    public function __construct(string $nom, string $prenom, string $dateDeNaissance, Nation $pays, Equipe $equipe)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateDeNaissance);
        $this->pays = $pays;
        $this->equipe = $equipe;
        $this->saisons = [];
    }

    public function ajouterSaison(Saison $uneSaison)
    {
        $this->$saisons[] = $uneSaison;
    }
}