<?php
  require_once '../models/db_config.php';
  session_start();


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
  $bday="";
  $bmonth="";
  $byear="";
  $err_dob="";
  $type="";
  $err_type="";
  $hasError=false;
 
    

  

  //sign up
  if(isset($_POST['sign_up'])){
  	if(empty($_POST['name'])){
  		$hasError=true;
  		$err_name="please insert name";        
  	}
    if(empty($_POST['username'])){
      $hasError=true;
      $err_username="please insert user name";

    }
    if(empty($_POST['email'])){
      $hasError=true;
       $err_email="please insert email";

    }
    if(empty($_POST['password'])){
      $hasError=true;
      $err_password="please insert password";
    }
    if(empty($_POST['phoneno'])){
       
        $hasError=true;
       $err_phoneno="please insert phoneno";
    }


   
    if(is_numeric($_POST['name'])){
       $hasError=true;
      $err_name="field can not be number";        
    }
    if(is_numeric($_POST['username'])){
       $hasError=true;
      $err_username="field can not be number";

    }
    if(is_numeric($_POST['email'])){
        $hasError=true;
       $err_email="field can not be number";

    }
    if(is_numeric($_POST['password'])){
      $hasError=true;
      $err_password="field can not be number";
    }
    if(!is_numeric($_POST['phoneno'])){
       $hasError=true;
       $err_phoneno="inavild number";
    }

  
    if(($_POST["day"])=="Day"||($_POST["month"])=="Month"||($_POST["year"])=="Year"){
      
         $hasError=true;
        $err_dob="*Please select date of birth";
      }
     
   
            




    else{
  		
  		$name=htmlspecialchars($_POST['name']) ;
  		$username=htmlspecialchars($_POST['username']) ;
  		
     

      $email=htmlspecialchars($_POST['email']) ;
      $phoneno=htmlspecialchars($_POST['phoneno']);
    
      $password=htmlspecialchars($_POST['password']) ;
     
      $type=htmlspecialchars($_POST['type']) ;
     
     
      $bday=$_POST["day"];
      $bmonth=$_POST["month"];
      $byear=$_POST["year"];
      if(insertUser($name,$username,$password,$email,$phoneno,$type)){
        $name="" ;
        $username="" ;
        $email="" ;
        $phoneno="";
        $password="";
        header("location:../admin/index.php");
       
      }

     
  	}





           

    }
 
   
  

//sign in
  if(isset($_POST['btn_login'])){
     
     if(empty($_POST['username'])){
        $err_username="please insert username ";
        
     }
     if(empty($_POST['password'])){
        $err_password="please insert password";
     }

     if (authenticateUser($_POST['username'],$_POST['password'])){
       $result=authenticateUser($_POST['username'],$_POST['password']);
      
        
       if($result['type']=="user"){
         $_SESSION["username"] = $result['username'];
         $_SESSION["password"] = $result['password'];
         $_SESSION["id"] = $result['id'];
          
        header("Location:../customer/index.php");
       }
        if($result['type']=="admin"){
            
          
        header("Location:../admin/dashboard.php");
       }
       
     }
    
     else{
      if(!empty($_POST['username'])&&!empty($_POST['password']))
       $err_msg ="ivalid username or password";
     }
     
  }

//update customer info
if(isset($_POST['update_user'])){
  
  $name=$_POST['name'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  $phoneno=$_POST['phoneno'];
  editUser($_POST['id'],$name,$username,$password,$email,$phoneno);
  header("location:allusers.php");
}

if(isset($_POST['btn_deleteCustomer'])){
  deleteCustomer($_POST['id']);
  header("location:allusers.php");
}

//update user info

if(isset($_POST['btn_update'])){
  
  $name=$_POST['name'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  $phoneno=$_POST['phoneno'];
  editUser($_POST['id'],$name,$username,$password,$email,$phoneno);
  header("location:../customer/index.php");
}


//delete user info   
function deleteCustomer($id){
    $query = "DELETE FROM users WHERE id=$id";
    execute($query);
    
  }



   function insertUser($name,$username,$password,$email,$phoneno,$type){
      $query="INSERT INTO users VALUES(NULL,'$name','$username','$password','$email',$phoneno,'$type')";
      execute($query);
      return true;
     

    }
     function authenticateUser($username,$password){
      $query="SELECT * FROM users where username='$username' and password='$password'";
      $result=get_data($query);
      if(count($result)>0)
      { 
         
         
        return$result[0];
      }else{
        return false;
      }
     }

     function editUser($id,$name,$username,$password,$email,$phoneno){
    $query = "update users set name='$name',username='$username',password='$password',email='$email',phoneno=$phoneno where id=$id";
    execute($query);
    
  }

    function getAllusers(){
      $query="SELECT * FROM users";
      $result=get_data($query);
      return $result;
    }
    function getCustomer($id){
  $query="SELECT * FROM users where id=$id";
  $result=get_data($query);
  if(count($result)>0){
    return $result[0];
  }
  return false;

 }

 //ajax username
 function checkUser($username){
  //change needed
  $query="SELECT * FROM users WHERE username='$username'";
  $result=get_data($query);
  if(count($result)>0){
    return "false";
  }
  return "true";
 }


?>
