<?php

/*session start ();*/

if(!isset($_COOKIE["username"]))
 { 
	 header ("Location:index.php");

 }

?>



<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<h1>ID: <?php echo $_COOKIE["username"]; ?></h1>


</body>
</html>