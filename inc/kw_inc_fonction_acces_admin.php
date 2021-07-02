<?php
if (!empty($_POST["login"])) {
	var_dump('toto');
	$query = "  SELECT username
				FROM users ";
	$res = my_query($co_kw, $query);
	$test = mysqli_fetch_array($res);
	var_dump($test); 
}
?>
