<?php include '../include/header.php'; ?> 
<?php require_once '../controllers/ProductController.php';
      require_once '../controllers/UserController.php';
      
$products=getAllproducts()

?>

<div style="margin-left: 1250px;"><a href="updateProfile.php?id=<?php echo $_SESSION['id'];?>">Welcome,<?php echo $_SESSION["username"];?></a></div>
<div style="background:radial-gradient(#fff,#197d4c); ">
    <div class="small-container">
         <h2>Products</h2>
   
    <div class="row">
        
 <?php foreach($products as $product){?>
        <div class="col-4"> 
            <img src="<?php echo  '../images/'.$product["filename"];?>" style="border-radius: 10px;" >
            <h3> <?php echo $product['name'];?></h3>
            <p><b>Price:</b><?php echo $product['price'];?></p>
            <p><b>Category:</b><?php echo $product['category'];?></p>
            <p> <b>Details:</b><?php echo $product['details'];?></p>
            <a class="btn" href="../customer/Cart.php" name="btn_addToCart">Add To Cart</a>
        </div>
 <?php }?>   

       

        
    </div>
    </div>
   
</div>


<?php include '../include/footer.php'; ?> 
    
    
