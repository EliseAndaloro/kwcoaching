<?php
	if(!mysqli_close($co_kw))
		AfficheMessage("Impossible de fermer la connexion $co_kw");
?>
