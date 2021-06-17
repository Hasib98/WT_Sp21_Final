<?php 
 require_once '../controllers/ProductController.php';
 $search=$_GET['search'];
 $response=searchProduct($search);

 foreach ($response as $product) {
 	//echo $product['name']."<br>";
 	echo "<a href='productdetails.php?id=".$product["id"]."'>".$product['name']."</a><br>";
 	
 }
 


?>