<?php include '../include/header.php';?>

<?php include '../include/sidebar.php';?>
<?php require_once '../controllers/UserController.php';?>


<div id="emp"  style=" background:radial-gradient(#fff,#197d4c); height: 650px;">
	 
	

                  
					
					<div style="width: 500px; margin-left:  700px; margin-top:-40px;">
					<form action="" method="post" onsubmit="return validateCustomer()">
			          <h2 style="font-family:cursive; ">Add Customer</h2>
			          <p><span style="font-family: roboto";><?php echo $regmsg;?></span><br>
			          
			          <span>Name:</span>
			          <input  type="hidden" name="type" value="user">
			          <input id="name" type="text" placeholder="Name" name="name" >
				      <p style="color:red"><?php echo $err_name; ?></p>
				      <span id="err_name"></span><br>
				      <span>Username:</span>
			          <input id="username" type="text" placeholder="Username" name="username" onfocusout="checkUser(this)">
				      <p style="color:red"><?php echo $err_username; ?></p>
				      <span id="err_username"></span><br>
				       <span>phone No:</span>
				      <input id="phoneno" type="text" placeholder="phone no" name="phoneno" >
				      <p style="color:red"><?php echo $err_phoneno  ?></p>
				      <span id="err_phoneno"></span><br>
				      <span>Email:</span>
				      <input id="email" type="text" placeholder="email" name="email" >
				      <p style="color:red"><?php echo $err_email; ?></p>
				      <span id="err_email"></span><br>
				      <span>Password:</span>
				      <input id="password" type="password" placeholder="Password" name="password">
				      <p style="color:red"><?php echo $err_password; ?></p>
				      <span id="err_password"></span><br>
			
				
				      <span>Date Of Birth</span>
				
								<select  class="cmb" name="day" >
									<option id="day" value="Day">Day</option>
									
									 <?php for($i=1;$i<=30;$i++)
									 echo "<option value='$i' >$i</option>"
									?>
									 
									
									
								</select>
								<select class="cmb" name="month">
									
									<option id="month" value="0">Month</option>

									
									<?php for($i=1;$i<=12;$i++)
									 echo "<option value='1'>$i</option>"
									?>
												
								</select>
				                <select class="cmb" name="year">
									<option id="year" value="0">Year</option>
									<?php for($i=1950;$i<=2021;$i++)
									 echo "<option value='1'>$i</option>"
									?>
												
												
								</select>

								
				
				<p style="color:red"><?php echo $err_dob; ?></p>
				<span id="err_dob"></span><br>
			    <button type="submit" class="btn"  name="sign_up">Register</button><br>
				  
				<a style="text-decoration:none;color:green;" href="">Back To Login</a>
			
			      </form>

				</div>

				
		
	
</div>



<script>
	var unameExists=false;
   function get_element(id){
		return document.getElementById(id);
	}

function validateCustomer(){
		var hasError=false;
     cleanup();
	if(get_element("name").value==""){
	  get_element("err_name").innerHTML="Insert name (JS)";
	  get_element("err_name").style.color="red";
	  hasError=true;
		
	}
	if(get_element("username").value==""){
	  get_element("err_username").innerHTML="Insert username (JS)";
	  get_element("err_username").style.color="red";
	  hasError=true;
		
	}
	else if(unameExists){
		hasError=true;
		get_element("err_username").innerHTML=" username taken (JS)";
		get_element("err_username").style.color="red";
	}

	
	if(get_element("phoneno").value==""){
	  get_element("err_phoneno").innerHTML="Insert phoneno (JS)";
	  get_element("err_phoneno").style.color="red";
	  hasError=true;
		
	}
	else if(isNaN(get_element("phoneno").value)){
		get_element("err_phoneno").innerHTML="Insert valid phoneno (JS)";
	  get_element("err_phoneno").style.color="red";
	  hasError=true;
	}

	if(get_element("password").value==""){
	  get_element("err_password").innerHTML="Insert password (JS)";
	  get_element("err_password").style.color="red";
	  hasError=true;
		
	}

    if(get_element("email").value==""){
		get_element("err_email").innerHTML="Insert email (JS)";
		get_element("err_email").style.color="red";
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
	xhttp.open("GET","../customer/checkuser.php?username="+userName,true);
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



<?php include '../include/footer.php';?>



