function helloWorld(){
    var value = document.getElementById('type').value;

    var particulier_form = "<div class='form-group row' style='margin-bottom:3%'>"
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
    entreprise_form += "<label for='name' class='col-sm-3 col-form-label'>Nom de l'entreprise</label>"
    entreprise_form += "<div class='col-sm-9'>"
    entreprise_form += "<input type='text' class='form-control' id='name' name='name'></div></div>"
    entreprise_form += "<div class='form-group row' style='margin-bottom:3%'>"
    entreprise_form += "<label for='staticEmail' class='col-sm-3 col-form-label'>Email contact</label>"
    entreprise_form += "<div class='col-sm-9'><input type='email' class='form-control' id='email' name='email'></div></div>"
    entreprise_form += "<div class='form-group row' style='margin-bottom:3%'>"
    entreprise_form += "<label for='description' class='col-sm-3 col-form-label'>Description de la demande</label>"
    entreprise_form += "<div class='col-sm-9'><input type='textarea' class='form-control' id='description' name='description'></div></div>"

    if (value == "particulier"){
        document.getElementById('form_content').innerHTML = particulier_form;
    }else if (value == "entreprise"){
        document.getElementById('form_content').innerHTML = entreprise_form;
    }
};
