<style>
*{
	margin: 1%;
    padding: 0;
    box-sizing: border-box;
	font-family: "Gill Sans", sans-serif;
}
</style>

<?php

spl_autoload_register(function ($class_name) {
	require_once $class_name . '.php';
});

$fr = new Nation ("France");
$psg = new Equipe ("Paris Saint-Germain", 1970, $fr);
$jHE = new Joueur ("Ekitike", "Hugo", "20-06-2002", $fr, $psg);
$s2022HE = new Saison (2022, "en cours", $jHE, $psg);
$fr->afficherEquipe();
$jHE->afficherInfoJoueur();
$psg->afficherInfoEquipe();