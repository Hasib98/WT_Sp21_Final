<?php
        $uname="";
		$err_uname="";
        $password="";
        $passcheck=false;
		$err_password="";
		$email="";
        $err_email="";
		
		
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
		
		
		
		
		
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
            
            if(empty($_POST["uname"]))
			{
                $err_uname="*Username Required";
                
            }
        
            else
			{
                $uname=htmlspecialchars($_POST["uname"]);
            }
                    
            
            if(empty($_POST["pass"]))
			{
                $err_password = "*Password Required";
                
            }
            
            else if(strlen($_POST["pass"])<8)
			{
                $err_password="*Password must be at least 8 characters";
            }

            else if (!passValidation($_POST["pass"]))
			{
                $err_password="*Password must contain upper, lower,number";
            }

            else{
                $password=$_POST["pass"];
            }

            
            
            if(empty($_POST["email"]))
			{
               $err_email="*Please enter email";
            }

            else{
                $s=strpos($_POST["email"],"@");
                if($s!=false){
                    $t=strpos($_POST["email"],".", $s+1);
                    if($t!=false)
					{
                        $email=$_POST["email"];
                    }
                    else
					{
                        $err_email="*Invalid email";
                    }
                }
                else
				{
                    $err_email="*Invalid email";
                }
            }
           
        }
?>
<html>
<title>Login</title>
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
			<a href="Products.html" class="btn">Explore Now </a>
		</div>
		<div class="col-2">
			<img src="images/image1.jpg">
		</div>
	</div>
	</div>
	</div>


<div class="account">
  <div class="container">
     <div class="row">
	     <div class="col-2">
		    <img src="images/login.jpg" width=100%>
		  </div>
		 <div class="col-2">
		 	 
			
			
		    <div class="form-container">
			  
			 <div class="form-btn">
			   <span><img src="images/logo.png" width="120px"></span><br>
			   
			   
			  </div>
		
			  <form action="" method="post">
			    <input type="text" placeholder="Username"  name="uname">
				
				
				
				<input type="password" placeholder="Password"  name="pass">
				
				<button type="submit" class="btn" value="Login">Login</button>
				  <p style="color:red"><?php echo $err_uname; ?></p>
			      <p style="color:red"><?php echo $err_password; ?></p><br><br><br><br>
				<a href="ForgetPass.html">Forgot Password</a><br><br>
				<a style="text-decoration:none" href="Registration.html">Create New Account</a>
			  </form>
			
			   
			   
			</div>
			
		</div>
	 
	 </div>
    
     <div/>

</div><br>
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