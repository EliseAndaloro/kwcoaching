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
    						<label for="name" class="col-sm-3 col-form-label">Name</label>
							    <div class="col-sm-9">
							    	<input type="text" class="form-control" id="name" name="name">
							    </div>
  						</div>
  						<div class="form-group row" style="margin-bottom:3%">
    						<label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
    							<div class="col-sm-9">
      								<input type="email" class="form-control" id="email" name="email">
    							</div>
  						</div>
  						<div class="form-group row" style="margin-bottom:3%">
    						<label for="description" class="col-sm-3 col-form-label">Description</label>
    							<div class="col-sm-9">
      								<input type="textarea" class="form-control" id="description" name="description">
    							</div>
  						</div>
						<div class="form-group text-right" style="text-align: end;">
							<input type="submit" class="btn btn-outline-primary" name="envoyer" value="ENVOYER">
						</div>
					</form>
				</div>
			</div>
		</div>

<?php
$content = ob_get_clean();
require('template.php');
?>
