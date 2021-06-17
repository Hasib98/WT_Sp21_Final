<?php include '../include/header.php';?>

<?php include '../include/sidebar.php';?>
<?php require_once '../controllers/ProductController.php';
  $id=$_GET['id'];
  $product=getProduct($id);
?>



<div id="emp" style="background:radial-gradient(#fff,#197d4c); " onclick="">
	 
	
   <div class="account">
     <div class="container">
        <div class="row">
	  
	       <form action="" method="post" enctype="multipart/form-data">
			  
			<h2>Update Product Details</h2><br>
			<input type="hidden" name="id" value="<?php echo $product['id'];?>">
			<span class="spn">Product Name:</span> <input type="text" value="<?php echo $product['name']?>" name="name"> <span style="color: red; font-size: 12;" class="spn"> <?php echo $err_name;?></span><br>
			
			<span class="spn">Product Price:</span> <input type="text" value="<?php echo $product['price']?>" name="price"><span style="color: red; font-size: 12;" class="spn"><?php echo $err_price;?> </span><br>
		
			<span class="spn">Product Pic:</span> <input type="file"  name="uploadfile"  value="<?php echo $product['filename']?>"><span style="color: red; font-size: 12;" class="spn"><?php ?> </span><br>
			
			<span class="spn">Categoy</span> 
			<select name='category' > 
			<?php require_once '../controllers/CategoryController.php';
               $catagories=getAllCategory();
               
               	
              foreach ($catagories as $category ){
               	$slct = "";
               	if($product["category"]==$category['name']){
               		$slct="selected";
               	}
        
             
				echo "<option id=".$category['id']. " $slct>".$category['name']."</option>";
				     
		      
			    

               }

            
               
              
			?> 
		</select>

           	
			
			<span style="color: red; font-size: 12;" class="spn"><?php echo $err_category;?></span><br>
			<span class="spn">Product Details:</span> <textarea  name="details" style="height: 60px;width: 120px;"><?php echo $product['details'];?></textarea> <span style="color: red; font-size: 12;" class="spn"><?php echo $err_details;?> </span><br>
			
				
						
				<button type="submit" class="btn" name="btn_updateProduct">Update</button>
				
			  </form>
	    
			  
			 
			   
			   
			
		
	 
	 </div>
    
     </div>

</div>	
		
	
</div>


<?php include '../include/footer.php';?>



