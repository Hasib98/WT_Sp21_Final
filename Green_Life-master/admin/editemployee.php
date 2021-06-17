<?php include '../include/header.php';?>


<?php require_once '../controllers/EmployeeController.php';
  $id=$_GET['id'];
  $employee=getEmployee($id);
?>


<div id="emp" style="background:radial-gradient(#fff,#197d4c); " onclick="">
	 
	
   <div class="account">
     <div class="container">
        <div class="row">
	  
	       <form action="" method="post">
			  
			<h2>Edit Employee Details</h2><br>
			<input type="hidden" name="id" value="<?php echo $employee['id'];?>">
			<span class="spn">Name:</span> <input type="text" value="<?php echo $employee['e_name']?>" Name" name="e_name"> <span style="color: red; font-size: 12;" class="spn"> <?php echo $err_name;?></span><br>
			
			<span class="spn">Email:</span> <input type="text" value="<?php echo $employee['e_email']?>" name="e_email"><span style="color: red; font-size: 12;" class="spn"> <?php echo $err_email;?></span><br>
		
			<span class="spn">Phone:</span> <input type="text" value="<?php echo $employee['e_phone']?>" name="e_phone"><span style="color: red; font-size: 12;" class="spn"><?php echo $err_phone;?></span><br>
			
			<span class="spn">Type:</span> 
			<select name="e_type" selected>
				<option value="<?php echo $employee['e_type']?>"></option>
				<option>Admin</option>
		        <option>Manager</option>
		        <option>Staff</option>
		     
		      
			</select><span style="color: red; font-size: 12;" class="spn"><?php echo $err_type;?></span><br>
			<span class="spn">Blood Group:</span>
			 <select name="e_bloodgrp">
				<option value=""></option>
				<option>A+</option>
		        <option>A-</option>
		        <option>B+</option>
		        <option>B-</option>
		        <option>O+</option>
		        <option>O-</option>
		        <option>AB+</option>
		        <option>AB-</option>
		       
			</select><span style="color: red; font-size: 12;" class="spn"><?php echo $err_bloodgrp;?></span><br>
			<span class="spn">Profile Pic:</span> 
			<input type="file"  name="employee_pic"><br><span style="color: red; font-size: 12;" class="spn"><?php echo $err_pic;?></span>	
						
				<button type="submit" class="btn" name="btn_edit_emp">Update</button>
				
			  </form>
	    
			  
			 
			   
			   
			
		
	 
	 </div>
    
     </div>

</div>	
		
	
</div>


<?php include '../include/footer.php';?>
<?php include '../include/sidebar.php';?>


