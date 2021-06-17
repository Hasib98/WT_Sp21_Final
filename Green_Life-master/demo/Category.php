<?php
        $categoryname="";
		$err_categoryname="";
        $select_category="";
        $err_select_category="";
		
		
		
		
		
		
		if($_SERVER['REQUEST_METHOD']=='POST'){
            
            if (($_POST['register'])=='Register'){
            if(empty($_POST["categoryED"])){
            if(empty($_POST["category"])){
                $err_categoryname="*Please eneter a category name";
                
            }
        
            else{
                $categoryname=$_POST["category"];
            }
        }
            else{
                $err_categoryname="*Please unselect category edit/delete option";
            }
        }
                    
            
            
          

        if (($_POST['edit'])=='Edit' || ($_POST['delete'])=='Delete' ){
            
            
                if(empty($_POST["categoryED"])){
                    $err_select_category="*Please select a category to edit or delete";
                }
                else{
                    $select_category=$_POST["categoryED"];
                }
            
            }


           
        }
    
           
        
?>
<html>
<title>Category</title>
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
	    <div class="col-2">
		  <image src="https://previews.123rf.com/images/romastudio/romastudio1603/romastudio160300227/54088696-healthy-eating-background-studio-photo-of-different-fruits-and-vegetables-on-white-wooden-table-high.jpg">
		</div>
		 <div class="col-2">
		    <div class="form-container" >
			  <div class="form-btn">
			    <span>Category</span>
			   
			  </div>
			  <form action="" method="post">
			
			    <input type="text" placeholder="Category Name" name="category" >
				<p style="color:red"><?php echo $err_categoryname; ?></p>
				
                <button type="submit" class="btn" name="register" value="Register">Add</button><br>
				
				<select name="categoryED" value=<?php echo $select_category; ?> >
							<option disabled selected>Choose</option>
							<option>Fish</option>
							<option>Meat</option>
							<option>Fruit</option>
						</select> <br>
                <p style="color:red"><?php echo $err_select_category; ?></p> <br>
				
				
				
				
				
				
			  
                <button type="submit" class="btn" name="edit" value="Edit">Edit</button><br>
                <button type="submit" class="btn" name="delete" value="Delete">Delete</button><br>
				  
				<a style="text-decoration:none" href="index.html">Back To Home</a>
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