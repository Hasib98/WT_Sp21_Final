<?php include '../include/header.php';?>

<?php include '../include/sidebar.php';?>
<?php require_once '../controllers/UserController.php';
$id=$_GET['id'];
$customer=getCustomer($id);
?>


<div id="emp"  style=" background:radial-gradient(#fff,#197d4c); height: 650px;">
	 
	

                  
					
					<div style="width: 500px; margin-left:  700px; margin-top:-40px;">
					<form action="" method="post">
			          <h2 style="font-family:cursive; ">Update Customer Info</h2>
			          <p><span style="font-family: roboto";><?php echo $regmsg;?></span><br>
			          <input type="hidden" name="id" value="<?php echo $customer['id'];?>">
			          <span>Name:</span>
			          <input type="text" value="<?php echo $customer['name']?>" name="name" >
				      <p style="color:red"><?php echo $err_name; ?></p>
				      <span>Username:</span>
			          <input type="text" value="<?php echo $customer['username']?>" name="username">
				      <p style="color:red"><?php echo $err_username; ?></p>
				      
				      <span>Password:</span>
				      <input type="password" value="<?php echo $customer['password']?>" name="password">
				      <p style="color:red"><?php echo $err_password; ?></p>
				      <span>Email:</span>
				      <input type="text" value="<?php echo $customer['email']?>" name="email" >
				      <p style="color:red"><?php echo $err_email; ?></p>
			           <span>phone No:</span>
				      <input type="text" value="<?php echo $customer['phoneno']?>" name="phoneno" >
				      <p style="color:red"><?php echo $err_phoneno  ?></p>
				      
				      
				      
				     
				
				      <span>Date Of Birth</span>
				
								<select class="cmb" name="day">
									<option>Day</option>
									<?php for($i=0;$i<=30;$i++)
									 echo "<option>$i</option>"
									?>
									
								</select>
								<select class="cmb" name="month">
									
									<option>Month</option>
									<?php for($i=1;$i<=12;$i++)
									 echo "<option>$i</option>"
									?>
												
								</select>
				                <select class="cmb" name="year">
									<option>Year</option>
									<?php for($i=1950;$i<=2021;$i++)
									 echo "<option>$i</option>"
									?>
												
												
								</select>

								
				
				<p style="color:red"><?php echo $err_dob; ?></p>
			    <button type="submit" class="btn"  name="update_user">Update</button><br>
				  
				<a style="text-decoration:none;color:green;" href="allusers.php">Back</a>
			
			      </form>

				</div>

				
		
	
</div>


<?php include '../include/footer.php';?>



