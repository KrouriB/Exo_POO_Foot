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

    public function rejoindreLaNation(Equipe $uneEquipe)
    {
        $this->$equipes[] = $uneEquipe;
    }

    

    public function __toString()
    {
        return ucfirst(strtolower($this->pays));
    }
}