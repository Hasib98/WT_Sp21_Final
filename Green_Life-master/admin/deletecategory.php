<?php include '../include/header.php';?>


<?php require_once '../controllers/CategoryController.php';
  $id = $_GET["id"];
  $category = getCategory($id);
?>



<div id="cat"  style=" background:radial-gradient(#fff,#197d4c); height: 650px;">
	 
	

                 
			
					
					<div style="width: 500px; margin-left:  700px; margin-top:-40px;">

					<form action="" method="post" >
			          <h2 style="font-family:cursive; ">Edit Category</h2><br><br>

			         
			          <span style="color: red;">ARE YOU SURE YOU WNAT REMOVE THIS CATEGORY?</span>
			          <input type="hidden" name="id" value="<?php echo $category["id"];?>">
			         
				    			      				
				  								
				      <button type="submit" class="btn"  name="btn_deleteCategory">Delete</button><br>
				  
				       <a style="text-decoration:none;color:green;" href="dashboard.php">Home</a><span> | </span> <a style="text-decoration:none;color:green;" href="allcategories.php">All categories</a>
			
			      </form>

				</div>

				
		
	
</div>


<?php include '../include/footer.php';?>
<?php include '../include/sidebar.php';?>


