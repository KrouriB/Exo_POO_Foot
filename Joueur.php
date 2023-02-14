<?php

class Joueur
{
    // nom,penom,pays,age(datediff),club(via saison)
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private Nation $pays;
    private Equipe $equipe;
    private array $saison;
}