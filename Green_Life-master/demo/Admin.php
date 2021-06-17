<?php
        $uname="";
		$err_uname="";
        $password="";
        $passcheck=false;
		$err_password="";
		$email="";
        $err_email="";
		$conpassword="";
        $err_conpassword="";
		$phone="";
		$err_phone="";
        $employee_type="";
        $err_employee_type="";
        $select_type="";
        $err_select_type="";
        $err_delemployee="";
        $delemployee="";
        $deleted="";
        $bday="";
        $byear="";
        $bmonth="";
        $err_bday="";
        $err_byear="";
        $err_bmonth="";
        
		
		
		   function passValidation($pass){
            $boolUpper=false;
            $boolLower=false;
           
            $boolNum=false;
            $passlength= strlen($pass);
            for($i=0;$i<$passlength;$i++){
                if(ctype_upper($pass[$i])){
                    $boolUpper=true;
                    
                }
                if(ctype_lower($pass[$i])){
                    $boolLower=true;
                    
                }
               
                            
                if($boolLower && $boolUpper && $boolNum){
                    return true;
                }
            
            }
            return false;
            
            
            
        }
		
		
		
		
		
		if($_SERVER['REQUEST_METHOD']=='POST'){
            
            if(($_POST["add"])=='Add'){
                if (empty($_POST["delemployee"])){
            
                    if(empty($_POST["uname"])){
                        $err_uname="*Username Required";
                        
                    }
                
                    else{
                        $uname=htmlspecialchars($_POST["uname"]);
                    }
                            
                    
                    if(empty($_POST["pass"])){
                        $err_password = "*Password Required";
                        
                    }
                    
                    else if(strlen($_POST["pass"])<8){
                        $err_password="*Password must be at least 8 characters";
                    }

                    else if (!passValidation($_POST["pass"])){
                        $err_password="*Password must contain upper, lower,number";
                    }

                    else{
                        $password=$_POST["pass"];
                    }
                    if(empty($_POST["phonenumber"])){
                        $err_phone="*Enter phone number";
                    }

                    else if(is_numeric($_POST["phonenumber"])==false){
                        $err_phone="*Please enter digit";
                    }
                    else{
                        $phone=$_POST["phonenumber"];
                    }
                    if(empty($_POST["cpass"])){
                        $err_conpassword="*Please enter confirm password";
                    }

                    else if($_POST["cpass"]!=$_POST["pass"]){
                        $err_conpassword="*Please match confirm password";
                    }
                    
                    else{
                        $conpassword=$_POST["cpass"];
                    }

                    
                    
                    if(empty($_POST["email"])){
                    $err_email="*Please enter email";
                    }

                    else{
                        $s=strpos($_POST["email"],"@");
                        if($s!=false){
                            $t=strpos($_POST["email"],".", $s+1);
                            if($t!=false){
                                $email=$_POST["email"];
                            }
                            else{
                                $err_email="*Invalid email";
                            }
                        }
                        else{
                            $err_email="*Invalid email";
                        }
                    }

                    if (empty($_POST["employeetype"])){
                        $err_employee_type="* Please select employee type";
                    }
                    else{
                        $employee_type=$_POST["employeetype"];
                    }

                    if(($_POST["day"])=="Day"){
                        $err_bday="*Please select Day";
                    }
                    else{
                        $bday=$_POST["day"];
                    }
        
                    if(($_POST["month"])=="Month"){
                        $err_bmonth="*Please select Month";
                    }
                    else{
                        $bmonth=$_POST["month"];
                    }
        
                    if(($_POST["year"])=="Year"){
                        $err_byear="*Please select Year";
                    }
                    else{
                        $byear=$_POST["year"];
                    }


            }

                else{
                    $err_delemployee="*please unselect employee deletation to add/ upadate employee";
                }
                
        }

    

           else if($_POST['delete']=='Delete'){
                if (empty($_POST["uname"]) && empty($_POST["pass"]) &&  empty($_POST["phonenumber"]) && empty($_POST["cpass"]) && empty($_POST["email"]) && ($_POST["day"])=="Day"
                    && ($_POST["month"])=="Month" && ($_POST["year"])=="Year"
                ){
                    if(empty($_POST["delemployee"])){
                        $err_delemployee="*Please select employee to delete";
                    }
                    else{
                        $delemployee=$_POST["delemployee"];
                        $deleted="Employee Deleted";
                    }
            }
                else{
                    $err_delemployee="*Please undo employee add operation";
                }

            }

        
        


        }
?>
<html>
<title>Admin CRUD</title>
<body> 


<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="header">
	<div class="container">
	<div class="navbar">
		<div class="logo">
			<img src="images/logo.png" width="200px">
		</div>
		<nav>
			<ul>
				<li><a href="Index.html">Home</a></li>
				<li><a href="Products.html">Products</a></li>
				<li> <a href="About.html">About</a></li>
				<li><a href="Contact.html">Contact</a></li>
				<li><a href="Login.html">Login</a></li>
				<li><a href="Admin.php">User</a></li>
				<li><a href="Cart.html"><i class="fa fa-shopping-cart"></i></a></li>
			</ul>
		</nav>
	</div>
	<div class="row">
		<div class="col-2">
			<h1>Stay with Green Life<br> Stay Safe!</h1>
			<p>Green Life Market is your one-stop shop for a healthy lifestyle. We pride ourselves <br>only stocking the highest quality products.</p>
			
		</div>
		<div class="col-2">
			<img src="https://previews.123rf.com/images/romastudio/romastudio1603/romastudio160300227/54088696-healthy-eating-background-studio-photo-of-different-fruits-and-vegetables-on-white-wooden-table-high.jpg">
		</div>
	</div>
	</div>
	</div>
	


<div class="account">
  <div class="container">
     <div class="row">
	 
	 <form action="" method="post">
			  <span><b>Employee Add/Delete</b></span>
			    <input type="text" placeholder="Username">
				<p style="color:red"><?php echo $err_uname; ?></p>
				
				<input type="text" placeholder="phone no">
				 <p style="color:red"><?php echo $err_phone  ?></p>
				<input type="text" placeholder="email">
				 <p style="color:red"><?php echo $err_email; ?></p>
				<input type="password" placeholder="Password">
				<p style="color:red"><?php echo $err_password; ?></p>
				<input type="password" placeholder="confirm password">
				 <p style="color:red"><?php echo $err_conpassword; ?></p><br>
                
                 <span style="font-size:12" >Select Employee type</span>
                 <select class="cmb" name="employeetype" value ="<?php echo $byear?>">
					<option disabled selected>Select Employee Type</option>
					<option>Admin</option>
					<option>Manager</option>
								
								
				</select>
                <br>
				<p style="color:red"><?php echo $err_employee_type; ?></p> <br>
				<span style="font-size:12" >Date Of Birth</span>
				
                <select class="cmb" name="day" value="<?php echo $day;?>">
								<option>Day</option>
								
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option>$i</option>";	
									}
								?>
				</select>
				<select name="month" value ="<?php echo $bmonth?>">
								<option>Month</option>
								
								<?php
								    $month = array("January","February","March","April","May","June","July","August","September","October","November","December");
									foreach($month as $v){
										echo "<option>$v</option>";
										
									}
								?>
							</select>
                <select name="year" value ="<?php echo $byear?>">
								<option>Year</option>
								
								<?php
									for($i=1970;$i<=2021;$i++){
										echo "<option>$i</option>";	
									}
								?>
				</select>
				<p style="color:red"><?php echo $err_bday; ?></p> <br>
                <p style="color:red"><?php echo $err_bmonth; ?></p> <br>
                <p style="color:red"><?php echo $err_byear; ?></p> <br>
				
				
			    <button type="submit" class="btn" name ="add" value="Add">Add</button><br>


                
             
                
				  
				
			  </form>
			   
	    <div class="col-2">
		  <image src="https://previews.123rf.com/images/romastudio/romastudio1603/romastudio160300227/54088696-healthy-eating-background-studio-photo-of-different-fruits-and-vegetables-on-white-wooden-table-high.jpg">
		
		
		   			  
			  
			   
			  
			 
			  
			
		
	 
	 </div>
	     
    
     <div/>

</div><br>
<a href="Update.php"> <button  style="border:none" type="submit" class="btn" name="submit" value="Update">Update</button></a>
			    <a href="Delete.php"> <button  style="border:none" type="submit" class="btn" name="submit" value="Delete">Delete</button></a>
			
<br>
<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Download Our App</h3>
					<p>Download App for Android and ios phone.</p>
					<div class="app-logo">
						<img src="images/playstore.png">
						<img src="images/apple.png">
					</div>
				</div>
				<div class="footer-col-2">
					<img src="images/logo.png" alt="footer white image">
					<p>We pride ourselves only stocking the highest quality products.</p>
				</div>
				<div class="footer-col-3">
					<h3>Useful Links</h3>
					<ul>
						<li>Coupons</li>
						<li>Blog Post</li>
						<li>Return Policy</li>
						<li>Popular Products</li>
					</ul>
				</div>
				<div class="footer-col-4">
					<h3>Follow us</h3>
					<ul>
						<li><a href="">Facebook</a></li>
						<li><a href="">Twitter</a></li>
						<li><a href="">Instagram</a></li>
						<li><a href="">Youtube</a></li>
					</ul>
				</div>
			</div>
			<hr>
			<p class="copyright">Copyright 2021 - Green Life</p>
		</div>
	</div>

</body>
</html>