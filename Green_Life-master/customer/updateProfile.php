<?php include '../include/header.php';?>
<?php require_once '../controllers/UserController.php';
$id=$_GET["id"];
$user=getCustomer($id);
?>



<div class="account">
	<div class="container">
		<div class="row">
			<div class="col-2">
				<img src="../images/login.jpg" width=100% >
			</div>
			<div class="col-2" >
				
					<div class="form-btn" >
						<span><img src="../images/logo.png" width="120px" style="margin-left: 220px;"></span>
					</div>

					<div><span style="margin-left: 300px; font-family: roboto; font-size: 20px;">Edit Profile</span>

					<form action="" method="post">
			          
			          <input type="hidden" name="id" value="<?php echo $user['id'];?>">
			          <span>Name:</span>
			          <input type="text" placeholder="Name" name="name" value="<?php echo $user["name"]?>">
				      <p style="color:red"><?php echo $err_name; ?></p>
				      <span>Username:</span>
			          <input type="text" placeholder="Username" name="username" value="<?php echo $user["username"]?>">
				      <p style="color:red"><?php echo $err_username; ?></p>
				       <span>phone No:</span>
				      <input type="text" placeholder="phone no" name="phoneno" value="<?php echo $user["phoneno"]?>">
				      <p style="color:red"><?php echo $err_phoneno  ?></p>
				      <span>Email:</span>
				      <input type="text" placeholder="email" name="email" value="<?php echo $user["email"]?>">
				      <p style="color:red"><?php echo $err_email; ?></p>
				      <span>Password:</span>
				      <input type="password" placeholder="Password" name="password" value="<?php echo $user["password"]?>">
				      <p style="color:red"><?php echo $err_password; ?></p>
			
				
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
			    <button type="submit" class="btn"  name="btn_update">Update</button><br>
				  
				<a style="text-decoration:none;color:green;" href="login.php">Back To Login</a>
			
			      </form>

				</div>
			</div>
		</div>
	</div>
</div>






<?php include '../include/footer.php'?>
