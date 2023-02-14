<?php

class Nation
{
    // pays,Equipe(via equipe ou saison)
    private string $pays;
    private array $equipes;

    public function __construct(string $pays)
    {
        $this->pays = $pays;
        $this->$equipes-> = [];
    }
}