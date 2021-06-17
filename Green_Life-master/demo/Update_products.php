<?php
        $upname="";
		$uerr_pname="";
        $uprice="";
   		$uerr_price="";
		$ushortdes="";
		$uerr_shortdes="";
        $upcategory="";
		$uerr_category="";
		if($_SERVER['REQUEST_METHOD']=='POST')
		
		
		{
			 if(empty($_POST["upname"])){
                $uerr_pname="*enter product name";
                
            }
        
            else{
                $pname=htmlspecialchars($_POST["upname"]);
            }
			
			   if(empty($_POST["uprice"])){
                $uerr_price = "*price cant be epmty";
                
            }
            
            else if(is_numeric($_POST["uprice"])){
                $uerr_price="Invalid entry";
            }

         

            else{
                $price=$_POST["uprice"];
            }
			
			  if(empty($_POST["ushortdes"])){
               $uerr_shortdes="discrip not given";
            }

         
                else
				{
                     $ushortdes=$_POST["ushortdes"];
                }
				
				if(($_POST["upcategory"])=="Category"){
               $uerr_category="Select category";
            }

         
                else
				{
                     $upcategory=$_POST["upcategory"];
                }
		
	    }
            
           
                    
            
         

            
            
          
		  
		    
            
            
           
       
?>
<html>
<body >
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
	   <span><img src="images/login.jpg" width="800px" height="600px"></span><br>
	  <form action="" method="post">
			  
			<p>Add Product details</p><br>
			<input type="text" placeholder="Product name" name="upname">
			<p style="color:red"><?php echo $uerr_pname; ?></p>
			<input type="text" placeholder="Price" name="uprice">
			<p style="color:red"><?php echo $uerr_price; ?></p>
			<input type="text" placeholder="short discription" name="ushortdes">
			<p style="color:red"><?php echo $uerr_shortdes; ?></p>
			<select  value="Category" name="upcategory">
				<option>Category</option>
		        <option>fruit</option>
		        <option>vegetable</option>
		        <option>meat</option>
				<option>fish</option>
		        <option>other</option>
			</select>
			
			<p style="color:red"><?php echo $uerr_category; ?></p>
			
			   
				
				
				
				<button type="submit" class="btn" value="Update">Update</button>
				
			  </form>
	    
			  
			 
			   
			   
			
		
	 
	 </div>
    
     <div/>

</div>
	  
	

	
</body>

</html>