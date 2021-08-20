<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once ("./inc/db/kwcoaching_co_connect.php");
include_once ("./inc/kw_inc_fonction_show_testimony.php");

$desc = 'Test, je trouverai plus tard';
$title = 'KW Caoching';
ob_start();
?>
<div class="header-coaching-personnalise">
	<div class="container text-center">
		<h1>Coaching<br>personnalisé</h1>
		<div class="ligne text-center"></div>
	</div>
</div>

<div class="coaching_personnalise">
	<div class="container">
		<div class="text-center">
			<h2>Pourquoi le coaching personnalisé ?</h2>
			<div class="ligne text-center"></div>
			<p>C’est tout simplement l’occasion pour vous d’obtenir de réel résultat<br>à court et long terme suivant vos objectifs.</p>
		</div>
		<p>

	Un gain considérable de temps pour vous puisque vous n’aurez plus besoin de perdre du temps à réfléchir comment faire et pourquoi. Je suis là pour vous donner toutes les clés afin atteindre vos objectifs tout en adaptant au mieux vos programmes d’entrainement et de nutrition en fonction de vos objectifs, de votre profil, de votre mode de vie et de vos réels besoins.
	Seul un suivi personnalisé vous permettra de progresser de manière structurer sans griller les étapes importantes à suivre.
	Avoir un coach à ses côtés est également une réelle source de motivation, chaque mois un nouveau programme à suivre et un échange avec votre coach pour faire le bilan des semaines passées.
	Une progression constante demande des entrainements structurés, une bonne nutrition, et un aspect souvent négligé, une bonne récupération ! C’est pour cela que j’intègre un maximum de conseil dans vos programmes afin d’optimiser celle-ci, et donc atteindre vos objectifs.
	Un concours à préparer ? De meilleures performances sportive ? Réathlétisation post blessure ? Pathologie chronique ? Perte du poids ? Prise de masse musculaire ?
	Vous savez ce qu’il vous reste à faire ! (Flèche qui pointe le bouton devis)

	Contenu pour Coaching personnalisé avec séance en présentiel et/ou Visio :
	    Programme d’entrainement
	    Plan nutritionnel détaillé
	    Conseils et astuces sur l’entrainement, la nutrition et la récupération
	    Séance(s) en présentiel et/ou Visio
	    Suivi et bilan mensuel
	    Disponible sur Instagram ou Messenger 7J/7
	Contenu pour Coaching personnalisé à distance :
	    Programme d’entrainement
	    Plan nutritionnel détaillé
	    Conseils et astuces sur l’entrainement, la nutrition et la récupération
	    Suivi et bilan mensuel
	    Disponible sur Instagram ou Messenger 7J/7

	Comment cela fonctionne ?
	1.    Cliquer sur « demander un devis »
	2.    Remplir toutes les infos demandées pour un particulier
	3.    Envoi du devis dans un délai de 1 à 3 jours
	4.    Validation de la commande et paiement
	5.    Premier contact par mail ou téléphone
	6.    Elaboration de la programmation dans un délai 2 à 4 jours
	7.    Point en Visio ensemble du programme si besoin</p>
	</div>
</div>
<?php
$content = ob_get_clean();
require('template.php');
?>
