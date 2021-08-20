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
		</div>
	</div>
        <div class="content">
			<div class="white_block">
				<div class="container">
					<h2>Pourquoi faire appel à un coach sportif<br> dans votre entreprise ?</h2>
					<div class="ligne"></div>
					L’activité sportive en entreprise va améliorer la qualité de vie au travail de vos salariés, et ont plusieurs avantages aussi bien pour l’employeur comme pour les salariés. 
					•    Pour l’employeur, les avantages sont une hausse de la productivité de ces salariés d’environ 10%, l’amélioration de la rentabilité et une meilleure image de celui-ci. 
					•    Du côté des salariés, les avantages sont une meilleure santé physique et mentale, une meilleure ambiance intrinsèque (cohésion d’équipe), un gain de temps sur leur planning (familiale notamment), moins de stress ou encore la diminution des Troubles Musculosquelettique. Et en plus de tout ça, ils n’ont plus besoin de se rendre dans une enceinte sportive externe ! 
					Le sport en entreprise est donc un chose très apprécié des collaborateurs.
					La pratique du sport en entreprise est désormais un vrai sujet dans le monde du travail.
					Les TMS représentent plus de 90% des maladies professionnelles, et environ 10% des accidents du travail sont liés au mal de dos ! Ce qui en fait la 1ère cause de maladies professionnelles indemnisées. La cause ? Mauvaises postures, stress, manque de mobilité et de force...
					Près de 80% des salariés souhaiteraient pratiquer du sport en entreprise, malheureusement seulement 7% des entreprises proposent à leurs salariés, de pratiquer une activité sportive sur leur lieu de travail. Ce qui est encore beaucoup trop peu, surtout quand on connait les bénéfices que celui-ci apporte !
					Diminution du stress, + de productivité au travail, meilleure cohésion d’équipe, bien-être des salariés, baisse de l’absentéisme … Autant de bienfaits prouvés par la pratique d’une activité physique en entreprise.
				</div>
			</div>
			<div class="container">
				<h2>Quel est le contenu d’une séance ?</h2>
				<div class="ligne"></div>
				<p>Les séances sont d’une durée de 30 à 45 minutes selon votre demande.
				Celles-ci seront adaptées en fonction du travail effectué par les salariés, de leurs niveaux et des objectifs de l’entreprise.
				Le but étant de travailler de manière complète et générale, avec une partie échauffement, des temps de renforcement musculaire isolés, d’autres de haute intensité plus globale, ainsi que des étirements si besoin.
				Chaque séance est différente, et sera adapté pour chacun quel que soit son niveau !
				N’attendez plus, faites le bon choix pour vos salariés et votre entreprise !</p>
			</div>
		</div>
<script src="./js/kw_inc_fonction_formulaire_contact.js"></script>
<?php
$content = ob_get_clean();
require('template.php');
?>
