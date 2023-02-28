<?php

class Affichage
{

	private array $equipes;
	private array $nations;
	private array $joueurs;

	public function __construct()
	{
		$this->equipes = [];
		$this->nations = [];
		$this->joueurs = [];
	}

	public function ajouterEquipe(Equipe $uneEquipe)
    {
        $this->equipes[] = $uneEquipe;
    }

	public function ajouterNation(Nation $uneNation)
    {
        $this->nations[] = $uneNation;
    }

	public function ajouterJoueur(Joueur $uneJoueur)
    {
        $this->joueurs[] = $uneJoueur;
    }

}

?>