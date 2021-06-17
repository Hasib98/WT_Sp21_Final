<?php 
 require_once '../controllers/CategoryController.php';
 $name=$_GET['name'];
 $response=checkCategory($name);
 echo $response;

?>