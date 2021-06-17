<?php
  require_once 'models/db_config.php';
  $name="";
  $err_name="";
  $email="";
  $err_email="";
  $username="";
  $err_username="";
  $password="";
  $err_password="";
  $phoneno="";
  $err_phoneno="";
  $err_msg="";
  $regmsg="";
  
    
  $hasError=false;
  

  //sign up
  if(isset($_POST['sign_up'])){
  	if(empty($_POST['name'])||empty($_POST['username']) ||empty($_POST['email']) ||empty($_POST['password'])||empty($_POST['phoneno'])){
  		$hasError=true;
  		$err_name="field can not be empty ";
  		$err_username="field can not be empty";
  		$err_email="field can not be empty";
  		$err_password="field can not be empty";
      $err_phoneno="field can not be empty";
     
     
  	}
    else if(is_numeric($_POST['name'])||is_numeric($_POST['username']) ||is_numeric($_POST['email']) ||!is_numeric($_POST['phoneno'])){
      $hasError=true;
      $err_name="field can not be number ";
      $err_username="field can not be number ";
      $err_email="field can not be number ";
     
      $err_phoneno="ivalid phone";
     
     
    }




    else{
  		
  		$name=htmlspecialchars($_POST['name']) ;
  		$username=htmlspecialchars($_POST['username']) ;
  		$email=htmlspecialchars($_POST['email']) ;
      $phoneno=htmlspecialchars($_POST['phoneno']);
    
      $password=htmlspecialchars($_POST['password']) ;
     
  	}
    if(!$hasError){
     
    if (insertUser($name,$username,$password,$email,$phoneno)) {
      header("Location:dashboard.php");
    }else{
      header("Location:registration.php");
    }        
    
     

    }
   
  }

//sign in
  if(isset($_POST['btn_login'])){
     if(empty($_POST['username'])||empty($_POST['password'])){
        $err_username="please insert username ";
        $err_password="please insert password";
     }
     if (authenticateUser($_POST['username'],$_POST['password'])) {
       header("Location:dashboard.php");
     }
     $err_msg ="ivalid username or password";
  }

   function insertUser($name,$username,$password,$email,$phoneno){
      $query="INSERT INTO users VALUES(NULL,'$name','$username','$password','$email','$phoneno')";
      execute($query);
      return true;
     

    }
     function authenticateUser($username,$password){
      $query="SELECT * FROM users where username='$username' and password='$password'";
      $result=get_data($query);
      if(count($result)>0)
      { 
       
        return $result[0];
      }else{
        return false;
      }
     }
?>