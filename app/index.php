<?php
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
			</tr>
		</thead>
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
