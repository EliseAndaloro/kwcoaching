$(document).ready(function() {
	$("tbody .select").click(function(){
		var id = $(this).find('input').val();
		window.location.href = '../app/details_programmes.php?id='+id;
	});
});
