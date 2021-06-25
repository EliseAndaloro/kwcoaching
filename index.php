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
		<div class="ligne"></div>
		<p>Atteignez vos objectifs plus rapidement<br>grâce à un suivi totalement personnalisé</p>
		<a href="#" class="btn btn-primary">Choisir mon programme</a>
	</div>
</div>

<?php
$content = ob_get_clean();
require('template.php');
?>
