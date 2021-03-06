<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="<?= $desc; ?>">
		<title><?= $title; ?></title>
		<link rel="stylesheet" href="./bootstrap/5.0.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/styles.css">
	</head>
	<body>
		<div class="content">
			<div id="navbar">
			 	<nav class="navbar navbar-expand-lg navbar-light bg-light">
				    <div class="container-fluid">
						<a class="navbar-brand" id="logo">
					    	<a class="navbar-brand"href="./"><img src="./images/kw-coaching-logo.png" alt="" width="150"></a>
					    </a>
				      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				        	<span class="navbar-toggler-icon"></span>
				      	</button>
				      	<div class="collapse navbar-collapse" id="navbarNavDropdown">
				        	<ul class="nav navbar-nav mx-auto order-0">
								<li class="nav-item">
				              		<a class="nav-link">Présentation du coach</a>
				            	</li>
				          		<li class="nav-item">
				            		<a href="./coaching_personnalise.php" class="nav-link">Coaching personnalisé</a>
				          		</li>
								<li class="nav-item">
				            		<a class="nav-link" href="./sport_entreprise.php">Sport en entreprise</a>
				          		</li>
				          		<li class="nav-item">
				            		<a class="nav-link">Programmes</a>
				          		</li>
								<li class="nav-item">
				            		<a class="nav-link" href="./acces_admin.php">Admin</a>
				          		</li>
				        	</ul>
				        	<a class="btn btn-outline-primary my-2 my-sm-0" href="./formulaire_contact.php">Devis gratuit</a>
				      	</div>
					</div>
			  </nav>
			</div>

			<div class="container-fluid">
				<?= $content; ?>
			</div>
		</div>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col">
						<img src="./images/kw-coaching-logo.png" alt="" width="200">
					</div>
					<div class="col footer-link">
						<h3>Liens Utiles</h3>
						<div class="ligne"></div>
						<div>
							<a class="nav-link" href="./presentation_coach.php">Présentation du coach</a>
							<a href="./coaching_personnalise.php" class="nav-link">Coaching personnalisé</a>
							<a class="nav-link" href="./sport_entreprise.php">Sport en entreprise</a>
							<a class="nav-link">Programmes</a>
						</div>
					</div>
					<div class="col footer-link">
						<h3>Me Contacter</h3>
						<div class="ligne"></div>
						<p class="nav-link">00 00 00 00 00</p>
						<p class="nav-link">kwcoaching@gmail.com</p>
						<img class="fb" src="./images/facebook.svg" alt="" width="20">
						<img src="./images/instagram.svg" alt="" width="20">
					</div>
					<div class="col footer-link align-self-center">
						<div>
							<a class="btn btn-secondary" href="./formulaire_contact.php">Devis gratuit</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="./js/jquery-3.6.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="./bootstrap/5.0.1/js/bootstrap.min.js"></script>
		<script src="./OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
		<script src="./js/owl_carousel.js"></script>
	</body>
</html>
