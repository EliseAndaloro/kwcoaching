function formContent(){
    var value = document.getElementById('type').value;

    /*var particulier_form = "<div class='form-group row' style='margin-bottom:3%'>"
    particulier_form += "<label for='name' class='col-sm-3 col-form-label'>Nom</label>"
    particulier_form += "<div class='col-sm-9'>"
    particulier_form += "<input type='text' class='form-control' id='name' name='name'></div></div>"
    particulier_form += "<div class='form-group row' style='margin-bottom:3%'>"
    particulier_form += "<label for='firstname' class='col-sm-3 col-form-label'>Prénom</label>"
    particulier_form += "<div class='col-sm-9'>"
    particulier_form += "<input type='text' class='form-control' id='firstname' name='firstname'></div></div>"
    particulier_form += "<div class='form-group row' style='margin-bottom:3%'>"
    particulier_form += "<label for='telephone' class='col-sm-3 col-form-label'>Telephone</label>"
    particulier_form += "<div class='col-sm-9'><input type='text' class='form-control' id='telephone' name='telephone'></div></div>"
    particulier_form += "<div class='form-group row' style='margin-bottom:3%'>"
    particulier_form += "<label for='staticEmail' class='col-sm-3 col-form-label'>Email</label>"
    particulier_form += "<div class='col-sm-9'><input type='email' class='form-control' id='email' name='email'></div></div>"
    particulier_form += "<div class='form-group row' style='margin-bottom:3%'>"
    particulier_form += "<label for='description' class='col-sm-3 col-form-label'>Description</label>"
    particulier_form += "<div class='col-sm-9'><input type='textarea' class='form-control' id='description' name='description'></div></div>"
    
    var entreprise_form = "<div class='form-group row' style='margin-bottom:3%'>"
    entreprise_form += "<label for='name' class='col-sm-3 col-form-label'>Nom de l'entreprise :</label>"
    entreprise_form += "<div class='col-sm-9'>"
    entreprise_form += "<input type='text' class='form-control' id='name' name='name'></div></div>"
    entreprise_form += "<div class='form-group row' style='margin-bottom:3%'>"
    entreprise_form += "<label for='staticEmail' class='col-sm-3 col-form-label'>Activité de l'entreprise :</label>"
    entreprise_form += "<div class='col-sm-9'><input type='text' class='form-control' id='activite' name='activite'></div></div>"
    entreprise_form += "<div class='form-group row' style='margin-bottom:3%'>"
    entreprise_form += "<label for='description' class='col-sm-3 col-form-label'>Lieu</label>"
    entreprise_form += "<div class='col-sm-9'><input type='text' class='form-control' id='lieu' name='lieu'></div></div>"
    entreprise_form += "<div class='form-group row' style='margin-bottom:3%'>"
    entreprise_form += "<label for='description' class='col-sm-3 col-form-label'>Travail et tâches des salariés concernés :</label>"
    entreprise_form += "<div class='col-sm-9'><input type='textarea' class='form-control' id='description' name='description'></div></div>"
    entreprise_form += "<div class='form-group row' style='margin-bottom:3%'>"
    entreprise_form += "<label for='description' class='col-sm-3 col-form-label'>Nombre de cours par semaine :</label>"
    entreprise_form += "<div class='col-sm-9'><input type='text' class='form-control' id='nb_cours' name='nb_cours'></div></div>"
    entreprise_form += "<div class='form-group row' style='margin-bottom:3%'>"
    entreprise_form += "<label for='description' class='col-sm-3 col-form-label'>Jours et créneaux horaires disponible :</label>"
    entreprise_form += "<div class='col-sm-9'><input type='text' class='form-control' id='time_day' name='time_day'></div></div>"
    entreprise_form += "<div class='form-group row' style='margin-bottom:3%'>"
    entreprise_form += "<label for='description' class='col-sm-3 col-form-label'>A partir de quand :</label>"
    entreprise_form += "<div class='col-sm-9'><input type='text' class='form-control' id='start_date' name='start_date'></div></div>"
    entreprise_form += "<div class='form-group row' style='margin-bottom:3%'>"
    entreprise_form += "<label for='description' class='col-sm-3 col-form-label'>Pour combien de temps :</label>"
    entreprise_form += "<div class='col-sm-9'><input type='text' class='form-control' id='during_month' name='during_month'></div></div>"
    entreprise_form += "<div class='form-group row' style='margin-bottom:3%'>"
    entreprise_form += "<label for='description' class='col-sm-3 col-form-label'>Temps d'entrainement disponible : (30/45 min)</label>"
    entreprise_form += "<div class='col-sm-9'><input type='text' class='form-control' id='time_training' name='time_training'></div></div>"
    entreprise_form += "<div class='form-group row' style='margin-bottom:3%'>"
    entreprise_form += "<label for='description' class='col-sm-3 col-form-label'>Nombre estimé de salariés par cours :</label>"
    entreprise_form += "<div class='col-sm-9'><input type='text' class='form-control' id='nb_salarie' name='nb_salarie'></div></div>"
    entreprise_form += "<div class='form-group row' style='margin-bottom:3%'>"
    entreprise_form += "<label for='description' class='col-sm-3 col-form-label'>Matériel sportif à votre disposition :</label>"
    entreprise_form += "<div class='col-sm-9'><input type='text' class='form-control' id='materiel' name='materiel'></div></div>"
    entreprise_form += "<div class='form-group row' style='margin-bottom:3%'>"
    entreprise_form += "<label for='description' class='col-sm-3 col-form-label'>Objectif de l’entreprise pour les salariés (créer une meilleure cohésion d’équipe, travail trop sédentaire, apprendre les bonnes postures…) : </label>"
    entreprise_form += "<div class='col-sm-9'><input type='text' class='form-control' id='objectif' name='objectif'></div></div>"
    entreprise_form += "<div class='form-group row' style='margin-bottom:3%'>"
    entreprise_form += "<label for='description' class='col-sm-3 col-form-label'>Email de contact : </label>"
    entreprise_form += "<div class='col-sm-9'><input type='email' class='form-control' id='mail' name='mail'></div></div>"*/

    if (value == "particulier"){
        //document.getElementById('form_content').innerHTML = particulier_form;
        document.getElementById('particulier_form').style.display = "block";
        document.getElementById('entreprise_form').style.display = "none";
    }else if (value == "entreprise"){
        //document.getElementById('form_content').innerHTML = entreprise_form;
        document.getElementById('particulier_form').style.display = "none";
        document.getElementById('entreprise_form').style.display = "block";
    }else{
        //document.getElementById('form_content').innerHTML = "";
        document.getElementById('particulier_form').style.display = "none";
        document.getElementById('entreprise_form').style.display = "none";
    }
};
