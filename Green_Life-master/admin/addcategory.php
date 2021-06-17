<?php include '../include/header.php';?>
<?php include '../include/sidebar.php';?>
<?php require_once '../controllers/CategoryController.php';?>





<div id="cat"  style=" background:radial-gradient(#fff,#197d4c); height: 650px;">
	 
	

                 
			
					
					<div style="width: 500px; margin-left:  700px; margin-top:-40px;">

					<form id="form" action="" method="post" onsubmit="return validateCategory()" >
			          <h2 style="font-family:cursive; ">Add Category</h2><br><br>

			         
			          <span>Category Name:</span>
			          <input id="name" type="text" placeholder=" Category Name" name="name"  onfocusout="checkCategory(this)" >
				      <p style="color:red"><?php echo $err_name; ?></p>	<span id="err_name"></span>			      				
				  								
				      <button type="submit" class="btn"  name="btn_addCategory" >Add Category</button><br>
				  
				       <a style="text-decoration:none;color:green;" href="dashboard.php">Home</a><span> | </span> <a style="text-decoration:none;color:green;" href="allcategories.php">All categories</a>
			
			      </form>

				</div>

				
		
	
</div>
<script>
	var cnameExists=false;
   function get_element(id){
		return document.getElementById(id);
	}

function validateCategory(){
    
     var hasError=false;
     clenup();
     if(get_element("name").value==""){
     	
     	hasError=true;
     	err_msg="Category Name Empty";
     	get_element("err_name").innerHTML="Please Give category Name";
     	get_element("err_name").style.color="red";
     
       	
     }
     else if(cnameExists){
     	hasError=true;
     	err_msg="Category Name Empty";
     	get_element("err_name").innerHTML="This category already exist";
     	get_element("err_name").style.color="red";


     }


	
	return !hasError;
	}
	

function clenup(){
		get_element("err_name").innerHTML="";
	}
function checkCategory(control){
	var categoryName=control.value;
	var xhttp=new XMLHttpRequest();
	var hasError=false;
	xhttp.onreadystatechange=function(){
		if(this.readyState==4 &&this.status==200){
			//when server respond 
			var respond=this.responseText.trim();
			
			if(respond=="true"){
			cnameExists=false;
			 get_element("err_name").innerHTML="";
			}else{
			cnameExists=true;
				
			get_element("err_name").style.color="red";
		    get_element("err_name").innerHTML="This category already exist";			 

			}
			

			
		}

	};
	xhttp.open("GET","checkcategory.php?name="+categoryName,true);
	xhttp.send();
}

</script>



<?php include '../include/footer.php';?>



