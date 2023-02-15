<?php

class Nation
{
    // pays,Equipe(via equipe ou saison)
    private string $pays;
    private array $equipes;

    public function __construct(string $pays)
    {
        $this->pays = $pays;
        $this->equipes = [];
    }

    public function set_pays(string $pays)
    {
        $this->pays = $pays;
    }
    public function get_pays()
    {
        return  $this->pays;
    }

    public function rejoindreLaNation(Equipe $uneEquipe)
    {
        $this->equipes[] = $uneEquipe;
    }

    public function afficherEquipe()
    {
        $display = "<div style='background-color:lightcoral;color:white;width:360px;height:360px;padding:40px;display:flex;flex-direction:column;justify-content:space-between'><strong style='font-size:30px'>$this</strong><div style='display:flex;flex-direction:column'>";
        foreach($this->equipes as $uneEquipe)
        {
            $display .= "<span style='font-size:15px'>$uneEquipe</span>";
        }
        $display .= "</div></div><br><br>";
        echo $display;
    }

    
    public function __toString()
    {
        return ucfirst(strtolower($this->pays));
    }
}