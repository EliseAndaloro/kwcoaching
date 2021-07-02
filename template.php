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
						<a class="navbar-brand" id="logo" href="/">
					    	<a class="navbar-brand"><img src="./images/kw-coaching-logo.png" alt="" width="150"></a>
					    </a>
				      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				        	<span class="navbar-toggler-icon"></span>
				      	</button>
				      	<div class="collapse navbar-collapse" id="navbarNavDropdown">
				        	<ul class="nav navbar-nav mx-auto order-0">
								<li class="nav-item">
				              		<a class="nav-link">Menu</a>
				            	</li>
				          		<li class="nav-item">
				            		<a class="nav-link">Menu</a>
				          		</li>
								<li class="nav-item">
				            		<a class="nav-link">Menu</a>
				          		</li>
				          		<li class="nav-item">
				            		<a class="nav-link">Menu</a>
				          		</li>
				        	</ul>
				        	<a class="btn btn-outline-primary my-2 my-sm-0">Contact</a>
				      	</div>
					</div>
			  </nav>
			</div>

			<div class="container-fluid">
				<?= $content; ?>
			</div>
		</div>
		<script src="./js/jquery-3.6.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="./bootstrap/5.0.1/js/bootstrap.min.js"></script>
		<script src="./OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
		<script src="./js/owl_carousel.js"></script>
	</body>
</html>
