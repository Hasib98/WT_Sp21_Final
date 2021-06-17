<?php include 'include/header.php';?>
<?php require_once 'controllers/LoginController.php';?>



<div class="account">
	<div class="container">
		<div class="row">
			<div class="col-2">
				<img src="images/login.jpg" width=100%>
			</div>
			<div class="col-2">
				<div class="form-container">
					<div class="form-btn">
						<span><img src="images/logo.png" width="120px"></span>
					</div>
					<form action="" method="post">
			          <span id="0" style="color: red";><?php echo $err_msg; ?></span> 
			          <input type="text" placeholder="Username" name="username">
			           <span id="0" style="color: red";><?php echo $err_username ?></span> 
				
				      <input type="password" placeholder="Password" name="password"><br> 
				      <span id="0" style="color: red";><?php echo $err_password; ?></span> 
				      <button type="submit" class="btn" name="btn_login" >Login</button>
				      <a href="ForgetPass.html">Forgot Password</a><br><br>
				      <a style="text-decoration:none" href="Registration.html">Create New Account</a>
			      </form>

				</div>
			</div>
		</div>
	</div>
</div>






<?php include 'include/footer.php';?>
