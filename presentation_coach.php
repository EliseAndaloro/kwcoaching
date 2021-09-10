<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once ("./inc/db/kwcoaching_co_connect.php");
include_once ("./inc/kw_inc_fonction_send_mail.php");

$desc = 'Test, je trouverai plus tard';
$title = 'KW Caoching';
ob_start();
?>
	<div class="header_presentation">
		<div class="container text-center">
			<h1>Présentation</h1>
			<div class="ligne text-center"></div>
		</div>
	</div>
        <div class="content">
			<div class="white_block">
				<div class="container">
					<h2>Qui suis-je ?</h2>
					<div class="ligne text-center"></div>
					<img src="./images/presentation_kevin.png" width="25%"/>
					<div class="gray_block">
                    	<p>Je m’appelle Kévin, j’ai 25 ans et je suis originaire de Saint-Etienne.</p> 
                    	<p>Sportif très jeune, j’ai décidé d’en faire mon métier en partageant mon expérience et mon savoir, acquis lors de ma pratique et de ma formation.
                    	    Pour ma propre pratique sportive, j’ai commencé par le football dès l’âge de 3 ans, puis complexé par mon physique, à 17 ans j’ai décidé d’opter pour la musculation en salle.
                    	    En tant que vrai passionné de sport, je diversifie ma pratique au maximum (musculation, CrossFit, football, boxe, course à pied, natation…) et c’est également ce que je recommande à mes clients, toutes les activités physiques sont bonnes et compatibles, c’est le meilleur moyen d’être en bonne santé et de s’épanouir !
                    	</p>
                    	<p>Diplômé depuis 2020, je réalise des coachings personnalisés pour tous types de personnes et objectifs, en présentiel ou à distance, mais également de la préparation physique (football, boxe…) ou encore du coaching en entreprise, que ce soit en France ou pour des étrangers !
                    	    J’ai également été coach de CrossFit lors de ma formation, ce qui m’a permis de connaitre de nouvelles méthodes d’entrainement et d’intensifications, essentielles pour mon enseignement.
                    	</p>
                    	<p>Je continue chaque jour de m’instruire par le biais de sources fiable, ce qui me permet de vous proposer également des conseils en récupération/bien-être ainsi que des plans nutritionnels, primordial pour atteindre vos objectifs et être en meilleure santé physique et mentale.
                    	    Quel que soit votre profil et vos ambitions, je mettrais au point une programmation adaptée à vos réels besoins, qui vous permettra d’atteindre vos objectifs de manière structurée.
                    	</p>
					</div>
				</div>
			</div>
			<div class="container">
				
			</div>
			<div class="white_block">
				<div class="container">
					
				</div>
			</div>
		</div>
<script src="./js/kw_inc_fonction_formulaire_contact.js"></script>
<?php
$content = ob_get_clean();
require('template.php');
?>
