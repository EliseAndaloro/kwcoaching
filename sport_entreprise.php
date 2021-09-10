<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once ("./inc/db/kwcoaching_co_connect.php");
include_once ("./inc/kw_inc_fonction_send_mail.php");

$desc = 'Test, je trouverai plus tard';
$title = 'KW Caoching';
ob_start();
?>
	<div class="header_sport_entreprise">
		<div class="container text-center">
			<h1>Sport en entreprise</h1>
			<div class="ligne text-center"></div>
			<a class="btn btn-devis" href="./formulaire_contact.php">Demander un devis</a>
		</div>
	</div>
	<div class="cards">
		<div class="row">
			<div class="col-sm">
				<div class="content-card">
					<img src="./images/demander-devis.svg" alt="Devis gratuit" class="image-card">
					<p class="text-center title-card">Cliquer sur<br>"Demander un devis"</p>
					<div class="number">01</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="content-card">
					<img src="./images/demander-devis.svg" alt="Devis gratuit" class="image-card">
					<p class="text-center title-card">Remplir toutes les informations demandées</p>
					<div class="number">02</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="content-card">
					<img src="./images/demander-devis.svg" alt="Devis gratuit" class="image-card">
					<p class="text-center title-card">Devis et détails dans un délai de 1 à 3 jours</p>
					<div class="number">03</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="content-card">
					<img src="./images/demander-devis.svg" alt="Devis gratuit" class="image-card">
					<p class="text-center title-card">Validation de la commande et paiement</p>
					<div class="number">04</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="content-card">
					<img src="./images/demander-devis.svg" alt="Devis gratuit" class="image-card">
					<p class="text-center title-card">Point en Visio ou par téléphone si besoin</p>
					<div class="number">05</div>
				</div>
			</div>
		</div>
	</div>
        <div class="content">
			<div class="white_block">
				<div class="container">
					<h2>Pourquoi faire appel à un coach sportif<br> dans votre entreprise ?</h2>
					<div class="ligne"></div>
					<p>L’activité sportive en entreprise va améliorer la qualité de vie au travail de vos salariés, et ont plusieurs avantages aussi bien pour l’employeur comme pour les salariés.</p>
					<ul>
						<li><p>Pour <span class="underline">l’employeur</span>, les avantages sont une hausse de la productivité de ces salariés d’environ <strong>10%</strong>, l’amélioration de la rentabilité et une meilleure image de celui-ci.</p></li>
						<li><p>Du côté des <span class="underline">salariés</span>, les avantages sont une meilleure santé physique et mentale, une meilleure ambiance intrinsèque (cohésion d’équipe), un gain de temps sur leur planning (familiale notamment), moins de stress ou encore la diminution des <strong>Troubles Musculosquelettique</strong>. Et en plus de tout ça, ils n’ont plus besoin de se rendre dans une enceinte sportive externe !</p></li>
					</ul>
					<p>Le sport en entreprise est donc un chose très apprécié des collaborateurs.
					La pratique du sport en entreprise est désormais un vrai sujet dans le monde du travail.
					Les <strong>TMS</strong> représentent plus de <strong>90%</strong> des maladies professionnelles, et environ <strong>10%</strong> des accidents du travail sont liés au mal de dos ! Ce qui en fait la 1ère cause de maladies professionnelles indemnisées. La cause ? Mauvaises postures, stress, manque de mobilité et de force...</p>
					<p>Près de <strong>80%</strong> des salariés souhaiteraient pratiquer du sport en entreprise, malheureusement seulement <strong>7% </strong>des entreprises proposent à leurs salariés, de pratiquer une activité sportive sur leur lieu de travail. Ce qui est encore beaucoup trop peu, surtout quand on connait les bénéfices que celui-ci apporte !
					Diminution du stress, + de productivité au travail, meilleure cohésion d’équipe, bien-être des salariés, baisse de l’absentéisme … Autant de bienfaits prouvés par la pratique d’une activité physique en entreprise.
					</p>
				</div>
			</div>
			<div class="container">
				<div class="contenu_seance_sport_entreprise">
					<h2>Quel est le contenu d’une séance ?</h2>
					<div class="ligne"></div>
					<p>Les séances sont d’une durée de 30 à 45 minutes selon votre demande.
					Celles-ci seront adaptées en fonction du travail effectué par les salariés, de leurs niveaux et des objectifs de l’entreprise.
					Le but étant de travailler de manière complète et générale, avec une partie échauffement, des temps de renforcement musculaire isolés, d’autres de haute intensité plus globale, ainsi que des étirements si besoin.</p>
					<p>Chaque séance est différente, et sera adaptée pour chacun quel que soit son niveau !</p>
					<p>N’attendez plus, faites le bon choix pour vos salariés et votre entreprise !</p>
				</div>
			</div>
			<div class="white_block">
				<div class="container">
					<h2>Comment cela fonctionne ?</h2>
					<div class="ligne"></div>
					<ul>
						<li><p>Cliquer sur "Demander un devis"</p></li>
						<li><p>Remplir toutes les informations demandées pour une entreprise</p></li>
						<li><p>Envoie du devis et détails dans un délai de 1 à 3 jours</p></li>
						<li><p>Validation de la commande et paiement</p></li>
						<li><p>Point en Visio ou par téléphone si besoin</p></li>
					</ul>

				</div>
			</div>
		</div>
<script src="./js/kw_inc_fonction_formulaire_contact.js"></script>
<?php
$content = ob_get_clean();
require('template.php');
?>
