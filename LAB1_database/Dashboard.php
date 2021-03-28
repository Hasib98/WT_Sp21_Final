<?php
	$server="localhost";
	$user="root";
	$pass="";
	$db_name="WT_SP21_L";
	$conn = mysqli_connect($server,$user,$password,$db_name);

    $query = "select * from users";
    $result = mysqli_query($conn, $query);

?>
