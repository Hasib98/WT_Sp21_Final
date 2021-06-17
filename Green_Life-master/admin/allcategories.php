<?php include '../include/header.php';?>
<?php include '../include/sidebar.php';?>
<?php require_once '../controllers/CategoryController.php';
     $categories=getAllCategory();
?>

<title>All Category </title>

	<div style="background:radial-gradient(#fff,#197d4c);">
	
			  

		
		<div style="width: 500px;margin-left: 600px; ">
			<form method="post"><input type="text" placeholder="Enter category name to search " name="cat_search">
              <input type="submit" style="width: 60px;background-color:#197d4d;  " name="search" value="search">
	         </form>
	    
		<a style="color: #01661a;" href='addcategory.php' >Add New Category</a>
		<table border="1px" style="text-align: left; margin-top: 10px; " class="table">
			
			<tr>
		      
			   <th>category Name</th>
			   <th>Action</th>
			</tr>
     <?php 
     
        
    	
        foreach ($categories as $category) {
        	echo "<tr>";
         	
     	    echo "<td>".$category["name"]."</td>";
     	    echo '<td><span><a href="editcategory.php?id='.$category["id"].'">Edit</a> | <a href="deletecategory.php?id='.$category["id"].'" >Delete</button></a></span></td>';
     	    echo "</tr>";
        }
    	
    	

    		
    	
     
     

     
		
     ?>
		   
		
	

		</table>
	</div>
	</div>


<?php include '../include/footer.php';?>
