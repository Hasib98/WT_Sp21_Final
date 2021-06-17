<?php include '../include/header.php';?>
<?php include '../include/sidebar.php';?>
<?php require_once '../controllers/EmployeeController.php';
     $employees=getAllEmployee();
?>
<title>All Employee </title>

	<div style="background:radial-gradient(#fff,#197d4c);">
		<div style="width: 900px;margin-left: 600px; ">
			<form method="post"><input type="text" placeholder="Enter Employee name to search " name="cat_search">
              <input type="submit" style="width: 60px;background-color:#197d4d;  " name="search" value="search">
	          </form>
		<a style="color: #01661a;" href='addemployee.php' >Add New Employee</a>
		<table border="1px" style="text-align: left; margin-top: 10px; " class="table">
			
			<tr>
		      
			   <th>Employee Name</th>
			   <th>Email</th>
			 
			   <th>Phone </th>
			   <th>Role</th>
			   <th>Blood Group</th>
			   <th>Action</th>
			</tr>
     <?php 
     
  
    	
        foreach ($employees as $employee) {
        	echo "<tr>";
         	
     	    echo "<td>".$employee["e_name"]."</td>";
     	    echo "<td>".$employee["e_email"]."</td>";
     	    echo "<td>".$employee["e_phone"]."</td>";
     	    echo "<td>".$employee["e_type"]."</td>";
     	    echo "<td>".$employee["e_bloodgrp"]."</td>";
     	    echo '<td><span><a href="editemployee.php?id='.$employee["id"].'">Edit</a> | <a href="deleteemployee.php?id='.$employee["id"].'" >Delete</button></a></span></td>';
     	    echo "</tr>";
        }
    	
    	

    		
    	
     
     

     
		
     ?>
		   
		
	

		</table>
	</div>
	</div>
	
<?php include '../include/footer.php';?>
