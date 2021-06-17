<?php include '../include/header.php';?>
<?php require_once '../controllers/UserController.php';?>



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

					<div style="margin-left: 100px; margin-top: -30px">

					<form action="" method="post" onsubmit="return userValidation()">
			          
			          
			          <span>Name:</span>
			          <input  type="hidden" name="type" value="user">
			          <input  id="name" type="text" placeholder="Name" name="name" value="<?php 
                      if(empty($_POST['name'])){
                      	echo $_POST['name']="";

                      }else{
			          echo $_POST['name'];

                      }
                      ?>" ><span id="err_name" style="color:red"></span> 
                      <p  style="color:red"><?php echo $err_name; ?></p>
				      
				      
				      <span>Username:</span>
			          <input id="username" type="text" placeholder="Username" name="username" onfocusout="checkUser(this)" value="<?php 
                      if(empty($_POST['username'])){
                      	echo $_POST['username']="";

                      }else{
			          echo $_POST['username'];

                      }
                      ?>" ><span id="err_username" style="color:red"></span> 
				      <p style="color:red"><?php echo $err_username; ?></p>
				       <span>phone No:</span>
				      <input type="text" id="phoneno" placeholder="phone no" name="phoneno" value="<?php 
                      if(empty($_POST['phoneno'])){
                      	echo $_POST['phoneno']="";

                      }else{
			          echo $_POST['phoneno'];

                      }
                      ?>"><span id="err_phoneno" style="color:red"></span> 
				      <p style="color:red"><?php echo $err_phoneno  ?></p>
				      <span>Email:</span>
				      <input type="text" id="email" placeholder="email" name="email" value="<?php 
                      if(empty($_POST['email'])){
                      	echo $_POST['email']="";

                      }else{
			          echo $_POST['email'];

                      }
                      ?>"><span id="err_email" style="color:red"></span> 
				      <p style="color:red"><?php echo $err_email; ?></p>
				      <span>Password:</span>
				      <input  id="password" type="password" placeholder="Password" name="password" value="<?php 
                      if(empty($_POST['password'])){
                      	echo $_POST['password']="";

                      }else{
			          echo $_POST['password'];

                      }
                      ?>"><span id="err_password" style="color:red"></span> 
				      <p style="color:red"><?php echo $err_password; ?></p>
			
				
				      <span>Date Of Birth</span>
				
								<select class="cmb" name="day">
									<option id="day">Day</option>
									<?php for($i=0;$i<=30;$i++)
									 echo "<option>$i</option>"
									?>
									
								</select>
								<select class="cmb" name="month">
									
									<option id="month">Month</option>
									<?php for($i=1;$i<=12;$i++)
									 echo "<option>$i</option>"
									?>
												
								</select>
				                <select class="cmb" name="year">
									<option id="year">Year</option>
									<?php for($i=1950;$i<=2021;$i++)
									 echo "<option>$i</option>"
									?>
												
												
								</select>

								
				
				<p style="color:red"><?php echo $err_dob; ?></p>
			    <button type="submit" class="btn"  name="sign_up">Register</button><br>
				  
				<a style="text-decoration:none;color:green;" href="Login.html">Back To Login</a>
			
			      </form>

				</div>
			</div>
		</div>
	</div>
</div>
<script>
	var unameExists=false;
function get_element(id){
	return document.getElementById(id);
}

	function userValidation(){
		var hasError=false;
     cleanup();
	if(get_element("name").value==""){
	  get_element("err_name").innerHTML="Insert name (JS)";
	  hasError=true;
		
	}
	if(get_element("username").value==""){
	  get_element("err_username").innerHTML="Insert username (JS)";
	  hasError=true;
		
	}
	else if(unameExists){
		hasError=true;
		get_element("err_username").innerHTML=" username taken (JS)";
	}


	if(get_element("phoneno").value==""){
	  get_element("err_phoneno").innerHTML="Insert phoneno (JS)";
	  hasError=true;
		
	}
	else if(isNaN(get_element("phoneno").value)){
	get_element("err_phoneno").innerHTML="Insert valid phoneno (JS)";
	  get_element("err_phoneno").style.color="red";
	  hasError=true;
	}
	if(get_element("password").value==""){
	  get_element("err_password").innerHTML="Insert password (JS)";
	  hasError=true;
		
	}

    if(get_element("email").value==""){
		get_element("err_email").innerHTML="Insert email (JS)";
		hasError=true;
	}

	

	return !hasError;
	}


	function checkUser(control){
	var userName=control.value;
	var xhttp=new XMLHttpRequest();
	var hasError=false;
	xhttp.onreadystatechange=function(){
		if(this.readyState==4 &&this.status==200){
			//when server respond 
			var respond=this.responseText.trim();
			
			if(respond=="true"){
				unameExists=false;
			  get_element("err_username").innerHTML="";
			}else{
				unameExists=true;
				
				
			    get_element("err_username").innerHTML="This User name taken";			 

			}
			

			
		}

	};
	xhttp.open("GET","checkuser.php?username="+userName,true);
	xhttp.send();
}

	function cleanup(){
		get_element("err_name").innerHTML="";
        get_element("err_username").innerHTML="";
        get_element("err_phoneno").innerHTML="";
        get_element("err_password").innerHTML="";
        get_element("err_email").innerHTML="";
	}

	
</script>





<?php include '../include/footer.php'?>
