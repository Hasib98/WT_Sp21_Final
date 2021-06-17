<?php include '../include/header.php';
require_once '../controllers/ProductController.php';
    $id=$_GET["id"];
    $product=getProduct($id);
?>
      
   <div class="row" style="height: 560px">
	
      
		
	
		<div class="col-4"> 
            <li><img src="<?php echo  '../images/'.$product["filename"];?>" style="width: 400px;height: 400px; border-radius: 8px; margin-left:-400px;display: inline; "></li>
            <div style="margin-left: 80px;margin-top:-220px; ">
                <h2>Product:<?php echo $product["name"]?></h2>
                <p><b>Price:<?php echo $product["price"]?></b></p>
                <p style="font-weight: bold; color: green;">Details:<?php echo $product["details"]?></p>
               <?php $editlink="editproduct.php?id=".$product['id'];
                  $deletelink="deleteproduct.php?id=".$product['id']; 
               ?>
                <a class="btn" style="color: white;" href="<?php echo $editlink;?>">Edit</a> | <a class="btn"  style="color: white;" href="<?php echo $deletelink;?>" >Delete</a>
                </div>
            
            
        </div>

      
    </div>
<?php include '../include/footer.php';?>