<style>
	* {
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

$all = new Affichage();
$fr = new Nation("France", $all);
$us = new Nation("Etats-Unis", $all);
$psg = new Equipe("Paris Saint-Germain", 1970, $fr, $all);
$cb = new Equipe("Chicago Bulls", 1996, $us, $all);
$jHE = new Joueur("Ekitike", "Hugo", "20-06-2002", $fr, $psg, $all);
$jJR = new Joueur("Joueur", "RandomAuUSA", "27-02-1999", $us, $cb, $all);
$s2022HE = new Saison(2022, "en cours", $jHE, $psg);
$s2022JR = new Saison(2018, 2021, $jJR, $cb);
// $fr->afficherInfoPays();
// $jHE->afficherInfoJoueur();
// $psg->afficherInfoEquipe();
$all->afficherEquipe();
$all->afficherJoueur();
$all->afficherPays();
