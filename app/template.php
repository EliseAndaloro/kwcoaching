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
		<link rel="stylesheet" href="http://localhost:8888/kwcoaching/bootstrap/5.0.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
		<link rel="stylesheet" href="./css/styles.css">
	</head>
	<body>
		<div class="menu-left">
			<div class="content">
				<div class="logo">
					<img src="../app/images/kw-coaching-logo.png" alt="Application KW Caoching" style="width: 100%;">
				</div>
				<div class="sidenav" id="index">
					<a href="../app/index.php"><i class="far fa-address-card"></i> Programmes</a>
				</div>
				<div class="sidenav" id="avis_clients">
					<a href="../app/avis_clients.php"><i class="fas fa-star"></i> Avis clients</a>
				</div>
				<div class="sidenav" id="index_commandes">
					<a href="/app/liste_commandes.php"><i class="fas fa-box-open"></i> Commandes</a>
				</div>
				<hr class="menu">
				<div class="sidenav">
					<a href="http://localhost:8888/kwcoaching/index.php"><i class="fas fa-arrow-left"></i> Retour site</a>
				</div>
			</div>
		</div>

		<?= $content; ?>

		<script src="http://localhost:8888/kwcoaching/js/jquery-3.6.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="http://localhost:8888/kwcoaching/bootstrap/5.0.1/js/bootstrap.min.js"></script>
		<script src="../app/js/menu.js" charset="utf-8"></script>
	</body>
</html>
