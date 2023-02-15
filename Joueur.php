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

    public function set_nom(string $nom)
    {
        $this->nom = $nom;
    }
    public function get_nom()
    {
        return $this->nom;
    }
    public function set_prenom(string $prenom)
    {
        $this->prenom = $prenom;
    }
    public function get_prenom()
    {
        return $this->prenom;
    }
    public function set_dateNaissance(string $dateDeNaissance)
    {
        $this->dateNaissance = new DateTime($dateDeNaissance);
    }
    public function get_dateNaissance()
    {
        return $this->dateNaissance;
    }
    public function set_pays(Nation $pays)
    {
        $this->pays = $pays;
    }
    public function get_pays()
    {
        return $this->pays;
    }
    public function set_equipe(Equipe $equipe)
    {
        $this->equipe = $equipe;
    }
    public function get_equipe()
    {
        return $this->equipe;
    }

    public function ajouterSaison(Saison $uneSaison)
    {
        $this->saisons[] = $uneSaison;
    }

    public function calculAge()
    {
        $today = new DateTime();
        $diff = date_diff($this->dateNaissance,$today);
        return $diff->years;
    }

}