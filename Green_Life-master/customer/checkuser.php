<?php 
 require_once '../controllers/UserController.php';
 $username=$_GET['username'];

 $response=checkUser($username);
 echo $response;
?>