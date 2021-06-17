
<?php
require_once '../models/db_config.php';
$name="";
$err_name="";

if(isset($_POST['btn_addCategory'])){

	if(empty($_POST['name'])){
		
		$err_name="insert category name";
	}
	else if(is_numeric($_POST['name'])){
		
		$err_name="insert valid category name";
	}
	else{

		$name=htmlspecialchars($_POST['name']);

		insertCategory($name);
	    header("location:../admin/allcategories.php");


	}

}	

	   	  
if(isset($_POST["btn_editCategory"])){
       editCategory($_POST["id"],$_POST["name"]);
       header("location:../admin/allcategories.php");

	}
	
	  

	
if(isset($_POST["btn_deleteCategory"])){
	
       deleteCategory($_POST["id"]);
       header("location:../admin/allcategories.php");

	}
  






//update category
function editCategory($id,$name){
		$query = "update categories set name='$name' where id=$id";
		execute($query);
		
	}
//insert
 function insertCategory($name){
 	$query="insert into categories values(NULL,'$name')";
 	execute($query);
 	

 }
 //delete
 function deleteCategory($id){
		$query = "DELETE FROM categories WHERE id=$id";
		execute($query);
		
	}
  function getCategory($id){
 	$query="SELECT * FROM categories where id=$id";
 	$result=get_data($query);
 	if(count($result)>0){
 		return $result[0];
 	}
 	return false;

 }
 function getAllCategory(){
 	$query="SELECT * FROM categories";
 	$result=get_data($query);
 
 	return $result;

 }
 //for use of ajax
  function checkCategory($name){
  //change needed
  $query="SELECT * FROM categories WHERE name='$name'";
  $result=get_data($query);
  if(count($result)>0){
  	return "false";
  }
  return "true";
 }

 function searchCategory($name){
  $query="SELECT * FROM categories WHERE name like '$name%'";
  $result=get_data($query);
  if(count($result)>0){
  	return $result[0];
  }
  return false;
 }


?>