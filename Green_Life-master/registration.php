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
			          <span style="font-family: roboto";><?php echo $regmsg;?></span><br>
			          <input type="text" placeholder="Name" name="name" >
				      <p style="color:red"><?php echo $err_username; ?></p>
				
			          <input type="text" placeholder="Username" name="username">
				      <p style="color:red"><?php echo $err_username; ?></p>
				
				      <input type="text" placeholder="phone no" name="phoneno" >
				      <p style="color:red"><?php echo $err_phoneno  ?></p>
				      <input type="text" placeholder="email" name="email" >
				      <p style="color:red"><?php echo $err_email; ?></p>
				      <input type="password" placeholder="Password" name="password">
				      <p style="color:red"><?php echo $err_password; ?></p>
			
				
				      <span style="font-family: roboto; " >Date Of Birth</span>
				
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

								
				
				
			    <button type="submit" class="btn"  name="sign_up">Register</button><br>
				  
				<a style="text-decoration:none" href="Login.html">Back To Login</a>
			      </form>

				</div>
			</div>
		</div>
	</div>
</div>






<?php include 'include/footer.php'?>
