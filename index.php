<?php
$desc = 'Test, je trouverai plus tard';
$title = 'KW Caoching';
ob_start();
?>

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
			<div class="row text-center">
				<div class="col">
					<div>
						<img src="./images/kw-coaching-header.jpg" alt="" width="200" height="400">
						<p>lorem ipsum</p>
					</div>
				</div>
				<div class="col">
					<div>
						<img src="./images/kw-coaching-header.jpg" alt="" width="200" height="400">
						<p>lorem ipsum</p>
					</div>
				</div>
				<div class="col">
					<div>
						<img src="./images/kw-coaching-header.jpg" alt="" width="200" height="400">
						<p>lorem ipsum</p>
					</div>
				</div>
			</div>
			<p>Atteignez vos objectifs plus rapidement<br>grâce à un suivi totalement personnalisé</p>
		</div>
	</div>
</div>

<?php
$content = ob_get_clean();
require('template.php');
?>
