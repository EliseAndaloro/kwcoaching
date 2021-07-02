<?php
	if(!mysqli_close($co_af))
		AfficheMessage("Impossible de fermer la connexion $co_af");
?>
