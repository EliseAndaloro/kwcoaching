$(document).ready(function() {
	$('input:checkbox[value="1"]').attr('checked', true);
	
	var loc = window.location.href;

	if (loc === "http://localhost:8888/kwcoaching/app/index.php") {
		$('#index').addClass('active');
	} else if (loc === "http://localhost:8888/kwcoaching/app/ajouter_programme.php") {
		$('#index').addClass('active');
	} else if (loc === "http://localhost:8888/kwcoaching/app/avis_clients.php") {
		$('#avis_clients').addClass('active');
	}

	if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
})
