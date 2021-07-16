<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once ("./inc/db/kwcoaching_co_connect.php");
include_once ("./inc/kw_inc_fonction_programmes.php");
$id = $_GET{'id'};
$programme = getProgrammesId($co_kw, $id);

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
				<input type="text" class="form-control" id="nom_programme" name="nom_programme" value="<?php if(isset($programme["name"])) { echo $programme["name"]; } ?>">
			</div>
			<div class="form-group col-md-5">
				<label for="image_programme">Image</label>
				<input type="text" class="form-control" id="image_programme" name="image_programme" value="<?php if(isset($programme["photo"])) { echo $programme["photo"]; } ?>">
			</div>
			<div class="form-group col-md-2">
				<label for="image_programme">Actif</label><br>
				<input type="checkbox" name="programme_actif" value="<?php if(isset($programme["active"])) { echo $programme["active"]; } ?>" class="switch value">
			</div>
			<div class="form-group col-md-12">
				<label for="description_programme">Description</label>
				<textarea class="form-control" id="description_programme" name="description_programme" rows="5" cols="33" value=""><?php if(isset($programme["description"])) { echo $programme["description"]; } ?></textarea>
			</div>
			<div class="text-right">
				<input class="btn btn-secondary" name="modifier_programme" type="submit" value="Modifier">
				<input class="btn btn-primary" name="supp_programme" type="submit" value="Supprimer">
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
