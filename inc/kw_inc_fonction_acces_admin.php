<?php
if (!empty($_POST["login"]))
{
	if(!empty($_POST["username"]) && !empty($_POST["password"]))
	{
		$query = "  SELECT username, password
					FROM users ";
		$res = my_query($co_kw, $query);
		$admin = mysqli_fetch_array($res);
		$username = $admin["username"];
		$password = $admin["password"];
		if ($_POST["username"] == $username && $_POST["password"] == $password) {
			header('Location: http://localhost:8888/kwcoaching/app/index.php');
		    exit("La redirection ne s'est pas effectuée");
		}
	}
}
?>
