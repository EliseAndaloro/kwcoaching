<?php
//Afficher la liste des programmes
function getTestimonies(&$co_kw)
{
	$query = "  SELECT *
				FROM testimonies ";
	$res = my_query($co_kw, $query);
	return $res;
}


//Ajouter un avis
// if (!empty($_POST["ajouter_programme"]))
// {
// 	if(!empty($_POST["nom_programme"]) && !empty($_POST["image_programme"]) && !empty($_POST["description_programme"]))
// 	{
// 		$name = $_POST["nom_programme"];
// 		$description = $_POST["description_programme"];
// 		$photo = $_POST["image_programme"];
//
// 		$query = "  INSERT INTO programmes (name, description, photo)
// 					VALUES ('$name', '$description', '$photo') ";
// 		mysqli_query($co_kw, $query);
//
// 		$msg = "Programme ajouté avec succés.";
// 	    $type_msg = "success";
// 	}
// 	else
// 	{
// 		$msg = "Les champs ne sont pas tous remplis.";
// 	    $type_msg = "error";
// 	}
//
// }
?>
