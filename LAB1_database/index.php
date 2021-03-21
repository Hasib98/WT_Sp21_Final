<?php
	$server="localhost";
	$user="root";
	$password="";
	$db="WT_SP21_L";
	$conn = mysqli_connect($server,$user,$password,$db);
	if($conn)
	{
		echo "connected";

	}
	else{
		mysqli_connect_error();
	}