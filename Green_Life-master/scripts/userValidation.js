 function get_element(id){
		return document.getElementById(id);
	}

function validateUser(){
    
     clenup();
     var hasError=false;
     if(get_element("n").value==""){ 	

     	
     	get_element("er").innerHTML="Please Enter Name (From JS)";
     	
     	get_element("er").style.color="red";
     	hasError=true;  	
       	
     }
     if(get_element("username").value==""){
     	
     	get_element("err_username").innerHTML="Please Enter UserName (From JS)";
     	get_element("err_username").style.color="red";
     	hasError=true;
     	

     }
     if(get_element("phoneno").value==""){
     	
     	get_element("err_phoneno").innerHTML="Please Enter PhoneNo (From JS)";
     	get_element("err_phoneno").style.color="red";
     	hasError=true;
     	

     }
     if(get_element("email").value==""){
     	
     	get_element("err_email").innerHTML="Please Enter Email (From JS)";
     	get_element("err_email").style.color="red";
     	hasError=true;
     	

     }
     if(get_element("password").value==""){
     	
     	get_element("err_password").innerHTML="Please Enter Password (From JS)";
     	get_element("err_password").style.color="red";
     	hasError=true;
     	

     }
    

     if(!hasError){
     	return true;
     }
	
	return false;
	}
	

function clenup(){
		get_element("err_name").innerHTML="";
		get_element("err_username").innerHTML="";
		get_element("err_phoneno").innerHTML="";
		get_element("err_email").innerHTML="";
		get_element("err_password").innerHTML="";
		get_element("err_dob").innerHTML="";
		

	}