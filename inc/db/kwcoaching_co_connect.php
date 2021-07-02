<?php

include_once ("./inc/db/kwcoaching_co_configuration.php");

$co_kw = mysqli_connect($host_kw,$user_kw,$password_kw,$database_kw);

/* Vérification de la connexion */
if (mysqli_connect_errno()) {
	printf("Échec de la connexion : %s\n", mysqli_connect_error());
	exit();
}

/* Modification du jeu de résultats en utf8 */
if (!mysqli_set_charset($co_kw, "utf8")) {
	printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", mysqli_error($co_kw));
	exit();
}

function my_query(&$co_kw, $query)
{
	$res = mysqli_query($co_kw, $query);
	if(!$res)
	{
		$message  = 'Requête invalide : ' . mysqli_error($co_kw) . "\n";
		$message .= 'Requête complète : ' . $query;
		// EnvoyerMail("Erreur sur le site", $message);
		// AfficheErreur('Une erreur s\'est produite sur le site. Nous avons été prévenu de cette erreur.');
		// AfficheNotice('Si le problème persiste <a href="./contact.php" title="Contactez nous">contactez nous directement</a>.');
		// AfficheErreur($query);
	}
	return $res;
}


?>
