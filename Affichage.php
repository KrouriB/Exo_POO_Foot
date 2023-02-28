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

	public function afficherEquipe()
	{
		$display = "<div style='display:flex; flex-direction:raw; flex-wrap:wrap; gap:20px'>";
		foreach ($this->equipes as $uneEquipe) {
			$display .= $uneEquipe->blocInfoEquipe();
		}
		$display .= "</div><br><br>";
		echo $display;
	}

	public function afficherJoueur()
	{
		$display = "<div style='display:flex; flex-direction:raw; flex-wrap:wrap; gap:20px'>";
		foreach ($this->joueurs as $uneJoueur) {
			$display .= $uneJoueur->blocInfoJoueur();
		}
		$display .= "</div><br><br>";
		echo $display;
	}

	public function afficherPays()
	{
		$display = "<div style='display:flex; flex-direction:raw; flex-wrap:wrap; gap:20px'>";
		foreach ($this->nations as $unePays) {
			$display .= $unePays->blocInfoPays();
		}
		$display .= "</div><br><br>";
		echo $display;
	}
}
