<?php
	/*$host = "sqletud.univ-mlv.fr";
	$dbname = "vbar_db";
	$charset = "UTF8";
	$username = "vbar";
	$passwd = "uAqyu8ao4s";*/

	$host = "localhost";
	$dbname = "web_design";
	$charset = "UTF8";
	$username = "root";
	$passwd = "";

	try {
		// Adresse de la base, nom de la base, charset utilisateur, mdp
		$bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset='.$charset, $username, $passwd);
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}

	date_default_timezone_set("Europe/Paris");
?>
