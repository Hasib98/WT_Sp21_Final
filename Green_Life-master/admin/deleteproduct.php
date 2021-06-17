<?php include '../include/header.php';?>

<?php require_once '../controllers/ProductController.php';
  $id=$_GET['id'];
  $product=getProduct($id);
?>



<div id="cat"  style=" background:radial-gradient(#fff,#197d4c); height: 650px;">
	 
	

                 
			
					
					<div style="width: 500px; margin-left:  700px; margin-top:-40px;">

					 <form action="" method="post" >
			          <h2 style="font-family:cursive; color: red; ">DELETE</h2><br><br>

			         
			          <span style="color: red;">ARE YOU SURE YOU WNAT REMOVE THIS PRODUCT?</span>
			           <input type="hidden" name="id" value="<?php echo $product["id"];?>">
			         
				    			      				
				  								
				      <button type="submit" class="btn"  name="btn_delete_product">Delete</button><br>
				  
				       <a style="text-decoration:none;color:green;" href="dashboard.php">Home</a><span> | </span> <a style="text-decoration:none;color:green;" href="allproducts.php">All PRODUCTS</a>
			
			      </form>

				</div>

				
		
	
</div>


<?php include '../include/footer.php';?>
<?php include '../include/sidebar.php';?>


