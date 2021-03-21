<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		$username=$_POST["username"];
		$password=$_POST["password"];
		if ($username == "hasib" && $password=="hasib") {
			setcookie("username",$username,time()+20);
			header("Location: Dashboard.php");
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		Username : <input type="text" name="username"><br>
		Password : <input type="password" name="password"><br>
		<input type="submit" name="submit" value="login">
	</form>


	
</body>
</html>