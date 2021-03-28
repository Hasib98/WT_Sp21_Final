<?php 
    require_once "db_config.php";
    $uname ="";
    $pass="";


    if ($_SERVER ["REQUEST_METHOD"] =="POST"){
        $username = $_POST["username"];
        $password= $_POST["password"];
        $query= "select * from admin where username='$username' and password='$password'";
        $result= get($query);
        if(count ($result)>0){
            header ("Location: Dashboard.php");
        }
        else{
            echo "Uername or password is invalid";
        }

    } 
?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
</head>
<body>
    <form action="" method="post">
        Username: <input type="text" name="username"> <br>
        Password: <input type="password" name="password"> <br>   
        <input type="submit" name="submit" value="Log In"> 
    </form>
</body>
</html>