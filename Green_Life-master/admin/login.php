<?php include '../include/header.php';?>
<?php require_once '../controllers/UserController.php';?>



<div class="account">
	<div class="container">
		<div class="row">
			<div class="col-2">
				<img src="../images/login.jpg" width=100%>
			</div>
			<div class="col-2">
				<div class="form-container">
					<div class="form-btn">
						<span><img src="../images/logo.png" width="120px"></span>

					</div>
					<form action="" method="post">
			          
			          <input type="text" placeholder="Username" name="username">
			          <span style="color: red; font-size: 12;" class="spn"><?php echo $err_username ?></span> 
				
				      <input type="password" placeholder="Password" name="password">
				      <span style="color: red;" class="spn"><?php echo $err_password; ?></span> 
				      <span style="color: red;" class="spn"><?php echo $err_msg; ?></span> <br>
				      <button type="submit" class="btn" name="btn_login" >Login</button>
				      <a href="ForgetPass.html">Forgot Password</a><br><br>
				      <a style="text-decoration:none" href="Registration.html">Create New Account</a>
			      </form>

				</div>
			</div>
		</div>
	</div>
</div>






<?php include '../include/footer.php';?>
