<?php include '../include/header.php';?>
<?php require_once '../controllers/ForgetPasswordController.php';?>

<div class="account">
  <div class="container">
     <div class="row">
	    <div class="col-2">
		  <img src="../images/login.jpg" width=100%>
		</div>
		 <div class="col-2">
		    <div class="form-container">
			  
			 <div class="form-btn">
			   <span><img src="../images/logo.png" width="120px"></span><br>
			   
			   
			  </div>
			  <form  method="post">
			  
				<p>Enter your Email/Phone</p><br>
				<input type="text" placeholder="Enter Email/Phone No." name="phn">
				<span style="color: red;" class="spn"><?php echo $err_phn; ?></span> 
			   
				
				
				
				<button type="submit" class="btn" name="btn_submit">Submit</button>
				<a href="dashboard.php">Back to Home</a><span> | </span>
				<a href="index.php">Login</a><br><br>
				<a style="text-decoration:none" href="registration.php">Create New Account</a>
			  </form>
			   
			   
			</div>
		</div>
	 
	 </div>
    
     <div/>

</div><br>
<?php include '../include/footer.php';?>

	  
