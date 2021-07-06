<?php

$query = "  SELECT name, testimony, photo
			FROM testimonies ORDER BY id ASC";
$res = mysqli_query($co_kw, $query);
$test = mysqli_fetch_array($res);
while($row = $res->fetch_array()){
	$rows[] = $row;
}
?>