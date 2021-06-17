<?php
        $pname="";
		$err_pname="";
        $price="";
   		$err_price="";
		$shortdes="";
		$err_shortdes="";
        $pcategory="";
		$err_category="";
		if($_SERVER['REQUEST_METHOD']=='POST')
		
		
		{
			 if(empty($_POST["pname"])){
                $err_pname="*enter product name";
                
            }
        
            else{
                $pname=htmlspecialchars($_POST["pname"]);
            }
			
			   if(empty($_POST["price"])){
                $err_price = "*price cant be epmty";
                
            }
            
            else if(is_numeric($_POST["price"])){
                $err_price="Invalid entry";
            }

         

            else{
                $price=$_POST["price"];
            }
			
			  if(empty($_POST["shortdes"])){
               $err_shortdes="discrip not given";
            }

         
                else
				{
                     $shortdes=$_POST["shortdes"];
                }
				
				if(($_POST["pcategory"])=="Category"){
               $err_category="Select category";
            }

         
                else
				{
                     $pcategory=$_POST["pcategory"];
                }
		
	    }
            
           
                    
            
         

            
            
          
		  
		    
            
            
           
       
?>
<html>
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
			  
				<p>Give Product details</p><br>
			<input type="text" placeholder="Product name" name="pname">	
			<select  value="Category" name="pcategory">
				<option>Category</option>
		        <option>fruit</option>
		        <option>vegetable</option>
		        <option>meat</option>
				<option>fish</option>
		        <option>other</option>
			</select>
			
			<p style="color:red"><?php echo $err_category; ?></p>
			<button type="submit" class="btn" value="Search">Search</button>
			<p style="color:red"><?php echo $err_pname; ?></p>
		
			
			   
				
				
				
				<button type="submit" class="btn" value="delete">Delete</button>
				
			  </form>
			   
			   
			
		</div>
	 
	 </div>
    
     <div/>

</div>