<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once ("./inc/db/kwcoaching_co_connect.php");
include_once ("./inc/kw_inc_fonction_send_mail.php");

$desc = 'Test, je trouverai plus tard';
$title = 'KW Caoching';
ob_start();
?>
        <div class="content">
			<div class="container">
				<div class="formulaire_contact">
					<form method="post">
						<h2>Me contacter</h2>
						<div class="ligne" style="margin-bottom:3%"></div>
                        <div class="form-group row" style="margin-bottom:3%">
    						<label for="type" class="col-sm-3 col-form-label">Vous êtes : </label>
							    <div class="col-sm-9">
                                    <select class="form-control" name="type" id="type" onchange="helloWorld();">
                                        <option value=""> Choisissez une option </option>
                                        <option value="particulier"> Un Particulier </option>
                                        <option value="entreprise"> Une Entreprise </option>
                                    </select>
							    </div>
  						</div>
                        <div id="form_content">
                        </div>
						<div class="form-group text-right" style="text-align: end;">
							<input type="submit" class="btn btn-outline-primary" name="envoyer" value="ENVOYER">
						</div>
					</form>
				</div>
			</div>
		</div>
<script src="./js/kw_inc_fonction_formulaire_contact.js"></script>
<?php
$content = ob_get_clean();
require('template.php');
?>
