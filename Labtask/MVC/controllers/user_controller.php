<?php
include 'models/db_config.php';
    $name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$email="";
	$err_email="";
	$pass="";
	$err_pass="";
	
	$err_db="";
	$hasError=false;
	
	
	 if(isset($_POST["Login"])){
		if(empty($_POST["uname"])){
			$err_uname="*Username Required";
			$hasError = true;
		}
		else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$err_pass="*Password Required";
			$hasError = true;
		}
		else{
			$pass=$_POST["pass"];
		}
		//if no error 
		if(!$hasError){
		if(authenticateUser($_POST["uname"],$_POST["pass"])){
			session_start();
			$_SESSION["loggeduser"]=$_POST["uname"];
			header("Location: dashboard.php");
		}
		 $err_db= "Username & Password Invalid!";
	}
}	

	  //User authentication function for login
	  function authenticateUser($uname,$pass){
		  $query ="select * from admin where username='$uname' and password='$pass'";
          $rs= get($query);
         if(count($rs)>0){
			 return true; 
		 }
          return false;		 
	  }
	  

?>