<?php

class Saison
{
    // Joueur,Equipe,Année d'entré
    private Joueur $joueur;
    private Equipe $equipe;
    private int $anneedebut;
    private mixed $anneefin;

    public function __construct(int $anneedebut, mixed $anneefin, Joueur $joueur, Equipe $equipe)
    {
        $this->anneedebut = $anneedebut;
        $this->anneefin = $anneefin;
        $this->joueur = $joueur;
        $this->equipe = $equipe;
        $this->joueur->ajouterSaison($this);
        $this->equipe->ajouterSaison($this);
    }

    public function set_anneedebut(int $anneedebut)
    {
        $this->anneedebut = $anneedebut;
    }
    public function get_anneedebut()
    {
        return $this->anneedebut;
    }
    public function set_anneefin(mixed $anneefin)
    {
        $this->anneefin = $anneefin;
    }
    public function get_anneefin()
    {
        return $this->anneefin;
    }
}