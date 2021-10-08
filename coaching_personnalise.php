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
		<a class="btn btn-devis" href="./formulaire_contact.php">Demander un devis</a>
	</div>
</div>
<div class="cards">
	<div class="row">
		<div class="col-sm">
			<div class="content-card">
				<img src="./images/push.svg" alt="Devis entièrement gratuit" class="image-card">
				<hr class="separe">
				<p class="text-center title-card">Cliquer sur<br>"Demander un devis"</p>
				<div class="number">01</div>
			</div>
		</div>
		<div class="col-sm">
			<div class="content-card">
				<img src="./images/form.svg" alt="Remplir toutes les informations demandées" class="image-card">
				<hr class="separe">
				<p class="text-center title-card">Remplir toutes les informations demandées</p>
				<div class="number">02</div>
			</div>
		</div>
		<div class="col-sm">
			<div class="content-card">
				<img src="./images/demander-devis.svg" alt="Devis et détails de votre demande directement dans votre boite mail" class="image-card">
				<hr class="separe">
				<p class="text-center title-card">Devis et détails dans un délai de 1 à 3 jours</p>
				<div class="number">03</div>
			</div>
		</div>
		<div class="col-sm">
			<div class="content-card">
				<img src="./images/credit.svg" alt="Aucun paiement en ligne, vous réglez directement le coach" class="image-card">
				<hr class="separe">
				<p class="text-center title-card">Validation de la commande et paiement</p>
				<div class="number">04</div>
			</div>
		</div>
		<div class="col-sm">
			<div class="content-card">
				<img src="./images/phone-call.svg" alt="Point en Visio ou par téléphone si besoin" class="image-card">
				<hr class="separe">
				<p class="text-center title-card">Point en Visio ou par téléphone si besoin</p>
				<div class="number">05</div>
			</div>
		</div>
	</div>
</div>

<div class="cards-contenu">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="cards-co">
					<div class="head-cards">
						<div class="title">
							Coaching personnalisé<br>
							<span>séance en présentiel et/ou visio</span>
						</div>
					</div>
					<div class="body-cards">
						<div class="content-body">
							<img src="./images/check.png" alt="Coaching personnalisé - Programme d’entrainement"> Programme d’entrainement<br>
							<img src="./images/check.png" alt="Coaching personnalisé - Programme d’entrainement"> Plan nutritionnel détaillé<br>
							<img src="./images/check.png" alt="Coaching personnalisé - Programme d’entrainement"> Conseils et astuces<br>
							<img src="./images/check.png" alt="Coaching personnalisé - Programme d’entrainement"> Séance(s) en présentiel et/ou Visio<br>
							<img src="./images/check.png" alt="Coaching personnalisé - Programme d’entrainement"> Suivi et bilan mensuel<br>
							<img src="./images/check.png" alt="Coaching personnalisé - Programme d’entrainement"> Disponible sur Instagram ou Messenger 7J/7<br>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="cards-co">
					<div class="head-cards">
						<div class="title">
							Coaching personnalisé<br>
							<span>Comment ça marche</span>
						</div>
					</div>
					<div class="body-cards" style="padding: 5% 0 5% 0%;">
						<div class="content-body">
							<span class="number" style="font-size: 18px;">1.</span> Cliquer sur « demander un devis »<br>
							<span class="number" style="font-size: 18px;">2.</span> Remplir toutes les infos demandées pour un particulier<br>
							<span class="number" style="font-size: 18px;">3.</span> Envoi du devis dans un délai de 1 à 3 jours<br>
							<span class="number" style="font-size: 18px;">4.</span> Validation de la commande et paiement<br>
							<span class="number" style="font-size: 18px;">5.</span> Premier contact par mail ou téléphone<br>
							<span class="number" style="font-size: 18px;">6.</span> Elaboration de la programmation dans un délai 2 à 4 jours<br>
							<span class="number" style="font-size: 18px;">6.</span> Point en Visio ensemble du programme si besoin<br>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center">
				<a class="btn btn-devis" href="./formulaire_contact.php">Demander un devis</a>
			</div>
		</div>
	</div>

</div>

<div class="coaching_personnalise">
	<div class="white_block">
		<div class="container">
			<h2>Pourquoi le coaching personnalisé ?</h2>
			<div class="ligne text-center"></div>
			<p class="text-center">C’est tout simplement l’occasion pour vous d’obtenir de réel résultat<br>à court et long terme suivant vos objectifs.</p>
			<div class="row white_block">
				<div class="col-sm-6 black_border">
					<p>Un gain considérable de temps pour vous puisque vous n’aurez plus besoin de perdre du temps à réfléchir comment faire et pourquoi. Je suis là pour vous donner toutes les clés afin atteindre vos objectifs tout en adaptant au mieux vos programmes d’entrainement et de nutrition en fonction de vos objectifs, de votre profil, de votre mode de vie et de vos réels besoins.
					Seul un suivi personnalisé vous permettra de progresser de manière structurer sans griller les étapes importantes à suivre.</p>
					<p>Avoir un coach à ses côtés est également une réelle source de motivation, chaque mois un nouveau programme à suivre et un échange avec votre coach pour faire le bilan des semaines passées.</p>
				</div>
				<div class="col-sm-6">
					<p>Une progression constante demande des entrainements structurés, une bonne nutrition, et un aspect souvent négligé, une bonne récupération ! C’est pour cela que j’intègre un maximum de conseil dans vos programmes afin d’optimiser celle-ci, et donc atteindre vos objectifs.</p>
					<p>Un concours à préparer ? De meilleures performances sportive ? Réathlétisation post blessure ? Pathologie chronique ? Perte du poids ? Prise de masse musculaire ?
					Vous savez ce qu’il vous reste à faire ! (Flèche qui pointe le bouton devis)</p>
					<img src="./images/haltere.svg" width="12%"/>
				</div>
			</div>
			<!-- <p>Contenu pour Coaching personnalisé avec séance en présentiel et/ou Visio :
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
			7.    Point en Visio ensemble du programme si besoin</p> -->
		</div>
	</div>
</div>
<?php
$content = ob_get_clean();
require('template.php');
?>
