<?php
$desc = 'Test, je trouverai plus tard';
$title = 'KW Caoching';
ob_start();
?>
<!-- Appel librairie Owl Carousel pour slide avis client -->
<link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">

<div class="header">
	<div class="container">
		<h1>Devenez plus musclé,<br>plus sec et plus fort</h1>
		<a href="#" class="btn btn-outline-primary lg">Choisir mon programme</a>
	</div>
</div>

<div class="coaching-pers">
	<div class="text-center">
		<h2>Coaching<br>personnalisé</h2>
		<div class="ligne text-center"></div>
		<p>Atteignez vos objectifs plus rapidement<br>grâce à un suivi totalement personnalisé</p>
		<a href="#" class="btn btn-primary">Choisir mon programme</a>
	</div>
</div>

<div class="avis-clients">
	<div class="container">
		<div class="text">
			<h2>Les clients disent</h2>
			<div class="ligne"></div>
			<div class="owl-carousel owl-theme owl-loaded row align-items-center">
			  <div class="owl-stage-outer bloc-avis">
			    <div class="owl-stage">
			      <div class="owl-item">
				  	<div>
						<img src="./images/kw-coaching-testimony-bastien.png" alt="" width="300" height="400">
						<p><strong>Bastien</strong> Objectif perte de poids : -10kg , -12cm de tour de taille</p>
					</div>
			      </div>
				  <div class="owl-item">
				  	<div>
						<img src="./images/kw-coaching-testimony-michel.png" alt="" width="300" height="400">
						<p><strong>Michel</strong> Objectif perte de poids : -5.5kg , -13 cm de tour de taille</p>
					</div>
			      </div>
				  <div class="owl-item">
				  	<div>
						<img src="./images/kw-coaching-testimony-rem.png" alt="" width="300" height="400">
						<p><strong>Rem</strong> Objectif prise de masse musculaire : +10kg </p>
					</div>
			      </div>
			    </div>
			  </div>
			</div>
			<p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p>
		</div>
	</div>
</div>

<?php
$content = ob_get_clean();
require('template.php');
?>
