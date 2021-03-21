<?php

Şuname="";

$pass="";

if ($_SERVER["REQUEST METHOD"]=="POST")
{

    $uname=$_POST["uname"]; 
    $pass=$_POST["pass"];

    $server="localhost";

    $user="root";

    $password="";

    $db="WT_SP21_L";

    $conn mysqli_connect($server, $user, $password, $db);

    $query="insert into users values (NULL, '$uname', '$pass','user')";

    if(mysqli_query($conn, $query))
    {
        echo "User inserted";
    }

    else
    {
        echo "Can not insert user";
    }

}




?>

<html>

<body>

<form action="" method="post">

<input type="text" name="uname" placeholder="username"><br>

<input type="password" name="pass" placeholder="password"><br> <input type="submit" value="register">