<?php
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

<?php
$content = ob_get_clean();
require('template.php');
?>
