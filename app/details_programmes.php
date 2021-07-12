<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once ("./inc/db/kwcoaching_co_connect.php");
include_once ("./inc/kw_inc_fonction_programmes.php");


$desc = 'Application KW Caoching';
$title = 'Application KW Caoching';
ob_start();
?>
<a href="../app/index.php" id="return"><i class="fas fa-arrow-left" style="color: black;"></i></a>
<div class="row head">
	<div class="col-sm">
		<h1><i class="far fa-address-card"></i> Détails programme</h1>
		<div class="ligne" style="width: 5%!important;"></div>
	</div>
</div>
<div class="bloc">
	<div class="navbar-menu">
		<a class="nav-link active"> Programme </a>
	</div>
	<div class="formulaire">
		<form method="post">
			<div class="row">
			<div class="form-group col-md-5">
				<label for="nom_programme">Nom du programme</label>
				<input type="text" class="form-control" id="nom_programme" name="nom_programme" value="">
			</div>
			<div class="form-group col-md-5">
				<label for="image_programme">Image</label>
				<input type="text" class="form-control" id="image_programme" name="image_programme" value="">
			</div>
			<div class="form-group col-md-2">
				<label for="image_programme">Actif</label><br>
				<input type="checkbox" name="programme_actif" value="" class="switch value">
			</div>
			<div class="form-group col-md-12">
				<label for="description_programme">Description</label>
				<textarea class="form-control" id="description_programme" name="description_programme" rows="5" cols="33" value=""></textarea>
			</div>
			<div class="text-right">
				<input class="btn btn-secondary" name="ajouter_programme" type="submit" value="Ajouter un programme">
			</div>
		</div>
		</form>
	</div>
</div>

<?php
$content = ob_get_clean();
require('template.php');
?>
<script src="./js/kw_fonction_programmes.js" charset="utf-8"></script>
