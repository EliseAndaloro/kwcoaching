<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once ("./inc/db/kwcoaching_co_connect.php");
include_once ("./inc/kw_inc_fonction_testimonies.php");
$res_testimonies = getTestimonies($co_kw);

$desc = 'Avis clients - Application KW Caoching';
$title = 'Avis clients - Application KW Caoching';
ob_start();
?>
<div class="row head">
	<div class="col-sm">
		<h1>Avis clients</h1>
		<div class="ligne"></div>
	</div>
	<div class="col-sm text-right">
		<a href="./index.php" type="button" class="btn btn-outline-primary">Ajouter un avis clients</a>
	</div>
</div>
<div class="tableau">
	<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nom</th>
				<th>Image</th>
				<th>Avis</th>
			</tr>
		</thead>
		<tbody>
<?php
while ($testimonies = mysqli_fetch_array($res_testimonies))
{
?>
			<tr class="select">
				<input type="hidden" name="id_programmes" value="<?= $testimonies['id']; ?>">
				<td><?= $testimonies['id']; ?></td>
				<td><?= $testimonies['name']; ?></td>
				<td><?= $testimonies['photo']; ?></td>
				<td><?= $testimonies['testimony']; ?></td>
			</tr>
<?php
}
?>
		</tbody>
		<!-- <tbody>
			<tr class="select">
				<td>1</td>
				<td>Nom du programme</td>
				<td>Description du programme</td>
				<td>image.png</td>
			</tr>
		</tbody> -->
	</table>
</div>
<?php
$content = ob_get_clean();
require('template.php');
?>
