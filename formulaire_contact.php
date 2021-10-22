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
					<form class="gray_block" method="post">
						<h2>Me contacter</h2>
					<form method="post">
						<h2>Devis gratuit</h2>
						<div class="ligne" style="margin-bottom:3%"></div>
                        <div class="form-group row" style="margin-bottom:3%">
    						<label for="type" class="col-sm-4 col-form-label">Vous êtes : </label>
							<div class="col-sm-6">
                                <select class="form-control" name="type" id="type" onchange="formContent();">
                                    <option value=""> Choisissez une option </option>
                                    <option value="particulier"> Un Particulier </option>
                                    <option value="entreprise"> Une Entreprise </option>
                                </select>
							</div>
  						</div>
                        <div id="form_content">
							<div id="particulier_form">
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='name' class='col-sm-4 col-form-label'>Nom</label>
									<div class='col-sm-6'>
										<input type='text' class='form-control' id='name' name='name'>
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='prenom' class='col-sm-4 col-form-label'>Prénom</label>
									<div class='col-sm-6'>
										<input type='text' class='form-control' id='prenom' name='prenom'>
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='age' class='col-sm-4 col-form-label'>Age</label>
									<div class='col-sm-6'>
										<input type='text' class='form-control' id='age' name='age'>
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='profession' class='col-sm-4 col-form-label'>Profession</label>
									<div class='col-sm-6'>
										<input type='text' class='form-control' id='profession' name='profession'>
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='domiciliation' class='col-sm-4 col-form-label'>Domiciliation</label>
									<div class='col-sm-6'>
										<input type='text' class='form-control' id='domiciliation' name='domiciliation'>
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='acitvite_physique' class='col-sm-4 col-form-label'>Activité physique</label>
									<div class='col-sm-6'>
										<input type='text' class='form-control' id='acitvite_physique' name='acitvite_physique' placeholder="Préciser la fréquence">
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='objectif_courtTerme' class='col-sm-4 col-form-label'>Objectif court terme</label>
									<div class='col-sm-6'>
										<input type='text' class='form-control' id='objectif_courtTerme' name='objectif_courtTerme' placeholder="Dans les 1 à 3 mois à venir">
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='objectif_longTerme' class='col-sm-4 col-form-label'>Objectif long terme</label>
									<div class='col-sm-6'>
										<input type='text' class='form-control' id='objectif_longTerme' name='objectif_longTerme' placeholder="Dans les + de 6 mois à venir">
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='description' class='col-sm-4 col-form-label'>Description de la demande</label>
									<div class='col-sm-6'>
										<input type='text' class='form-control' id='description' name='description' placeholder="Coaching en présentiel ou Visio, nombre de coaching souhaité …">
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='email' class='col-sm-4 col-form-label'>Email de contact</label>
									<div class='col-sm-6'>
										<input type='email' class='form-control' id='email' name='email'>
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='telephone' class='col-sm-4 col-form-label'>Numéro de téléphone</label>
									<div class='col-sm-6'>
										<input type='text' class='form-control' id='telephone' name='telephone'>
									</div>
								</div>
							</div>
							<div id="entreprise_form">
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='name' class='col-sm-4 col-form-label'>Nom de l'entreprise</label>
									<div class='col-sm-6'>
										<input type='text' class='form-control' id='name' name='name'>
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='activity' class='col-sm-4 col-form-label'>Activité de l'entreprise</label>
									<div class='col-sm-6'>
										<input type='text' class='form-control' id='activity' name='activity'>
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='lieu' class='col-sm-4 col-form-label'>Lieu</label>
									<div class='col-sm-6'>
										<input type='text' class='form-control' id='lieu' name='lieu'>
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='description' class='col-sm-4 col-form-label'>Travail et tâches des salariés concernés</label>
									<div class='col-sm-6'>
										<input type='text' class='form-control' id='description' name='description'>
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='nb_cours' class='col-sm-4 col-form-label'>Nombre de cours par semaine</label>
									<div class='col-sm-6'>
										<select class='form-control' id='nb_cours' name='nb_cours'>
											<option value=""> Choisissez une option </option>
											<option value="1">1</option>
											<option value="2">2</option>
										</select>
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='creneaux' class='col-sm-4 col-form-label'>Jours et créneaux horaires disponible</label>
									<div class='col-sm-6'>
										<input type='text' class='form-control' id='creneaux' name='creneaux'>
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='start_date' class='col-sm-4 col-form-label'>A partir de</label>
									<div class='col-sm-6'>
										<input type='text' class='form-control' id='start_date' name='start_date'>
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='during_time' class='col-sm-4 col-form-label'>Pour combien de temps</label>
									<div class='col-sm-6'>
										<select class='form-control' id='during_time' name='during_time'>
											<option value=""> Choisissez une option </option>
											<option value="1">1 mois</option>
											<option value="3">3 mois</option>
											<option value="6">6 mois</option>
										</select>
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='time_training' class='col-sm-4 col-form-label'>Temps d'entrainement disponible</label>
									<div class='col-sm-6'>
										<select class='form-control' id='time_training' name='time_training'>
											<option value=""> Choisissez une option </option>
											<option value="30">30 minutes</option>
											<option value="45">45 minutes</option>
										</select>
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='nb_salarie' class='col-sm-4 col-form-label'>Nombre estimé de salariés par cours</label>
									<div class='col-sm-6'>
										<select class='form-control' id='nb_salarie' name='nb_salarie'>
											<option value=""> Choisissez une option </option>
											<option value="1">Entre 1 et 5</option>
											<option value="6">Entre 6 et 10</option>
											<option value="10">Plus de 10</option>
										</select>
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='materiel' class='col-sm-4 col-form-label'>Matériel sportif à votre disposition</label>
									<div class='col-sm-6'>
										<input type='text' class='form-control' id='materiel' name='materiel'>
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='objectif' class='col-sm-4 col-form-label'>Objectif de l’entreprise pour les salariés</label>
									<div class='col-sm-6'>
										<input type='text' class='form-control' id='objectif' name='objectif' placeholder="créer une meilleure cohésion d’équipe, travail trop sédentaire, apprendre les bonnes postures…">
									</div>
								</div>
								<div class='form-group row' style='margin-bottom:3%'>
									<label for='email' class='col-sm-4 col-form-label'>Email de contact</label>
									<div class='col-sm-6'>
										<input type='email' class='form-control' id='email' name='email'>
									</div>
								</div>
							</div>
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
