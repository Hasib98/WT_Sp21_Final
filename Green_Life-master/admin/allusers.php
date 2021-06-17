<?php include '../include/header.php';?>
<?php include '../include/sidebar.php';?>
<?php require_once '../controllers/UserController.php';
     $users=getAllusers();
?>
<title>All Users Details </title>

	<div style="background:radial-gradient(#fff,#197d4c);">
		<div style="width: 950px;margin-left: 600px; ">
			 <form method="">
			 	 <input type="text" placeholder="Enter Customer name to search " name="cat_search">
                 <input type="submit" style="width: 60px;background-color:#197d4d;  " name="search" value="search">
	          </form>
		<a style="color: #01661a;" href='addcustomer.php' >Add New User</a>
		<table border="1px" style="text-align: left; margin-top: 10px; " class="table">
			
			<tr>
		      
			   <th>Name</th>
			   <th>Username</th>
			   <th>Password</th>
			   <th>Email</th>
			 
			   <th>Phone </th>
			  
			  
			   
			   <th>Action</th>
			</tr>
     <?php 
     
  
    	
        foreach ($users as $user) {
        	echo "<tr>";
         	
     	    echo "<td>".$user["name"]."</td>";
     	    echo "<td>".$user["username"]."</td>";
     	    echo "<td>".$user["password"]."</td>";
     	    echo "<td>".$user["email"]."</td>";
     	    echo "<td>".$user["phoneno"]."</td>";
     	    echo '<td><span><a href="editcustomer.php?id='.$user["id"].'">Edit</a> | <a href="deletecustomer.php?id='.$user["id"].'" >Delete</button></a></span></td>';
     	    echo "</tr>";
        }
    	
    	

    		
    	
     
     

     
		
     ?>
		   
		
	

		</table>
	</div>
	</div>
	
<?php include '../include/footer.php';?>
