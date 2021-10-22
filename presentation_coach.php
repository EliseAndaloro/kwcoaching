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
		<div class="container">
			<div class="row white_block_presentation">
				<div class="col-4 gray_block">
					<img src="./images/presentation_kevin.png" width="90%"/>
					<h2>Kevin COLOMBIER</h2>
					<div class="ligne"></div>
					<p>lorem ipsum</p>
				</div>
				<div class="col text_black">
					<h2>Qui suis-je ?</h2>
					<div class="ligne"></div>
            		<p>Je m’appelle Kévin, j’ai 25 ans et je suis originaire de Saint-Etienne.</p> 
            		<p>Sportif très jeune, j’ai décidé d’en faire mon métier en partageant mon expérience et mon savoir, acquis lors de ma pratique et de ma formation.
            		    Pour ma propre pratique sportive, j’ai commencé par le <strong>football</strong> dès l’âge de 3 ans, puis complexé par mon physique, à 17 ans j’ai décidé d’opter pour la <strong>musculation</strong> en salle.
            		    En tant que vrai <strong>passionné</strong> de sport, je diversifie ma pratique au maximum (musculation, CrossFit, football, boxe, course à pied, natation…) et c’est également ce que je recommande à mes clients, toutes les activités physiques sont bonnes et compatibles, c’est le meilleur moyen d’être en bonne santé et de s’épanouir !
            		</p>
            		<p><strong>Diplômé depuis 2020</strong>, je réalise des <strong>coachings personnalisés</strong> pour tous types de personnes et objectifs, en présentiel ou à distance, mais également de la <strong>préparation physique</strong> (football, boxe…) ou encore du <strong>coaching en entreprise</strong>, que ce soit en France ou pour des étrangers !
            		    J’ai également été <strong>coach de CrossFit</strong> lors de ma formation, ce qui m’a permis de connaitre de nouvelles méthodes d’entrainement et d’intensifications, essentielles pour mon enseignement.
            		</p>
            		<p>Je continue chaque jour de m’instruire par le biais de sources fiable, ce qui me permet de vous proposer également des <strong>conseils en récupération/bien-être</strong> ainsi que des <strong>plans nutritionnels</strong>, primordial pour atteindre vos objectifs et être en meilleure santé physique et mentale.
            		    Quel que soit votre profil et vos ambitions, je mettrais au point une <strong>programmation adaptée</strong> à vos réels besoins, qui vous permettra d’<strong>atteindre vos objectifs</strong> de manière structurée.
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
