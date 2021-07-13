<?php
 include'models/db_config.php';
 
$name="";
$err_name="";

$err_db="";
$hasError=false;
 if(isset($_POST["add_category"])){
	 if(empty($_POST["name"])){
			$err_name="*Name Required";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		  
		if(!$hasError){	
		   //var_dump($rs);
		   
		 $rs= insertCategory($_POST["name"]);
		 if($rs===true){
			   header("Location: allcategories.php");
		   } 
		   $err_db= $rs;
		}
 }
 else if(isset($_POST["edit_category"])){
	 if(empty($_POST["name"])){
			$err_name="*Name Required";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(!$hasError){	
		 $rs=updateCategory($_POST["name"],$_POST["id"]);
		 if($rs===true){
			   header("Location: allcategories.php");
		   } 
		   $err_db= $rs;
		}
	}
 function insertCategory($name){
	 $query ="insert into categories values (NULL,'$name')";
	 return execute($query);
 }
 function getAllCategories(){
	 $query="Select id,name from categories";
	 $rs= get($query);
	 return $rs;
 }
 function getCategory($id){
	 $query="Select * from categories where id=$id";
	 $rs= get($query);
	 return $rs[0]; // to pass only 1 instance
 }
 function updateCategory($name,$id){
	 $query="update categories set name='$name' where id=$id";
	 return execute($query);
 }
?>