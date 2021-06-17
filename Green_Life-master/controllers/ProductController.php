<?php
  require_once '../models/db_config.php';
  $name="";
  $category="";
  $price="";
  
  $details="";
  $err_name="";
  $err_price="";
  $msg="";
  $err_category="";
  $err_details="";
  $hasError=false;


  if(isset($_POST['btn_addProduct'])){
      
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
    $folder = "C:/xampp/htdocs/Green_Life-master/images/".$filename;

    if(empty($_POST['name'])){
       $hasError=true;
       $err_name="insert name";
      
    }
    if(empty($_POST['price'])){
       
      $hasError=true;
       $err_price="insert price";
      
    }
    if(empty($_POST['details'])){
       
       $hasError=true;
       $err_details="insert details";
    }
    





    if(is_numeric($_POST['name'])){
       $hasError=true;
       $err_name="insert valid name";
      
    }
    if(!is_numeric($_POST['price'])){
         $hasError=true;
       $err_price="insert valid price";
      
      
    }
    if(is_numeric($_POST['details'])){
       
      $hasError=true;
      
       $err_details="insert valid details";
    }



    if($_POST['category']==""){
      $hasError=true;
      $err_category="category not selected";
    }
    
    else{
    $name=htmlspecialchars($_POST['name']);
    $price=htmlspecialchars($_POST['price']);
    $category=htmlspecialchars($_POST['category']);
    $details=htmlspecialchars($_POST['details']); 
     
    
   
     
}
if(!$hasError){
  insertProduct($name,$price,$category,$details,$filename);
  if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
   
 
  header("location:allproducts.php");
   

}




}


//update product

if(isset($_POST['btn_updateProduct'])){
    
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
    $folder = "C:/xampp/htdocs/Green_Life-master/images/".$filename;
   
    $name=htmlspecialchars($_POST['name']);
    $price=htmlspecialchars($_POST['price']);
    $category=htmlspecialchars($_POST['category']);
    $details=htmlspecialchars($_POST['details']); 

  editProduct($_POST['id'],$name,$price,$category,$details,$filename);
     if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }

  header("location:allproducts.php");
}
if(isset($_POST["btn_delete_product"])){
  deleteProduct($_POST['id']);
  header("location:allproducts.php");
  

}

//cart



  function check_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
}
//insert product
function insertProduct($name,$price,$category,$details,$filename){
    $query="INSERT INTO products (name,price,category,details,filename) VALUES('$name',$price,'$category','$details','$filename')";
    execute($query);
    return true;
   
   }

//update product 

   function editProduct($id,$name,$price,$category,$details,$filename){
    $query="update products set name='$name',price=$price,category='$category',details='$details',filename='$filename' where id=$id";
    $result=execute($query);
    
   }
//list product
   function getAllproducts(){
    $query="SELECT * from products";
    $result=get_data($query);
    return $result;

   }
//delete productt
   function deleteProduct($id)
   {$query="DELETE FROM products where id=$id";
   execute($query);


   }
//get prodts
  function getProduct($id){
    $query="SELECT * from products WHERE id=$id";
    $result=get_data($query);
    if(count($result)>0 ){
      return $result[0];
    }
    return false;

  }
  //search product
  function searchProduct($name){
    $query="SELECT name,id from products WHERE name LIKE '$name%'";
    $result=get_data($query);
     return $result;
   
  }
  



 

  
?>