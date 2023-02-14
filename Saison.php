<?php

class Saison
{
    // Joueur,Equipe,Année d'entré
    private Joueur $joueur;
    private Equipe $equipe;
    private int $anneedebut;
    private int $anneefin;

    public function __construct(int $anneedebut, int $anneefin, Joueur $joueur, Equipe $equipe)
    {
        $this->anneedebut = $anneedebut;
        $this->anneefin = $anneefin;
        $this->joueur = $joueur;
        $this->equipe = $equipe;
        $this->joueur->ajouterSaison(); // fonction a definir dans Joueur
        $this->equipe->ajouterSaison(); // fonction a definir dans Equipe
    }
}