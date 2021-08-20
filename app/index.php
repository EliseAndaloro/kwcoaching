<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once ("./inc/db/kwcoaching_co_connect.php");
include_once ("./inc/kw_inc_fonction_programmes.php");
$res_programme = getProgrammes($co_kw);


$desc = 'Application KW Caoching';
$title = 'Application KW Caoching';
ob_start();
?>
<div class="row head">
	<div class="col-sm">
		<h1>Liste des programmes</h1>
		<div class="ligne"></div>
	</div>
	<div class="col-sm text-right">
		<a href="./ajouter_programme.php" type="button" class="btn btn-outline-primary">Ajouter un programme</a>
	</div>
</div>
<div class="tableau">
	<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nom</th>
				<th>Description</th>
				<th>Image</th>
				<th>Actif</th>
			</tr>
		</thead>
		<tbody>
<?php
while ($programmes = mysqli_fetch_array($res_programme))
{
?>
			<tr class="select" id="select_programmes">
				<input type="hidden" name="id_programmes" value="<?= $programmes['id']; ?>">
				<td><?= $programmes['id']; ?></td>
				<td><?= $programmes['name']; ?></td>
				<td><?= $programmes['description']; ?></td>
				<td><?= $programmes['photo']; ?></td>
				<td><input type="checkbox" name="programme_actif" value="<?= $programmes['active']; ?>" class="switch value"></td>
			</tr>
<?php
}
?>

		</tbody>
	</table>
</div>

<?php
$content = ob_get_clean();
require('template.php');
?>
<script src="./js/kw_fonction_programmes.js" charset="utf-8"></script>
