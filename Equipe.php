<?php

class Equipe
{
	// nom,pays,année creation(int),joueur(via saison)
	private string $nom;
	private int $creation;
	private Nation $pays;
	private array $saisons;
	private Affichage $affichage;

	public function __construct(string $nom, int $creation, Nation $pays, Affichage $affichage)
	{
		$this->nom = $nom;
		$this->creation = $creation;
		$this->pays = $pays;
		$this->pays->rejoindreLaNation($this);
		$this->saisons = [];
		$this->affichage = $affichage;
		$this->affichage->ajouterEquipe($this);
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
	public function get_pays()
	{
		return $this->pays;
	}

	public function ajouterSaison(Saison $uneSaison)
	{
		$this->saisons[] = $uneSaison;
	}

	public function blocInfoEquipe()
	{
		$display = "<div style='background-color:blue;color:white;width:360px;height:360px;padding:40px;display:flex;flex-direction:column;justify-content:space-between'><div style='display:flex;flex-direction:column'><strong style='font-size:30px'>" . $this . "</strong><span style='font-size:20px'>" . $this->pays . " - " . $this->creation . "</span></div><div style='display:flex;flex-direction:column'>";
		foreach ($this->saisons as $uneSaison) {
			$display .= "<span style='font-size:15px'>" . $uneSaison->get_joueur() . " ( " . $uneSaison . " )</span>";
		}
		$display .= "</div></div>";
		return $display;
	}

	public function afficherInfoEquipe()
	{
		echo $this->blocInfoEquipe() . "<br><br>";
	}

	public function __toString()
	{
		return $this->nom;
	}
}
