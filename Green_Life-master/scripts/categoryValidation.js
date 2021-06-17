function get_element(id){
		return document.getElementById(id);
	}

function validateCategory(){
    
     clenup();
     if(get_element("name").value==""){
     	
     	err_msg="Category Name Empty";
     	get_element("err_name").innerHTML="Please Give category Name";
     	get_element("err_name").style.color="red";
     	return false ;
       	
     }
	
	return true;
	}
	

function clenup(){
		get_element("err_name").innerHTML="";
	}
