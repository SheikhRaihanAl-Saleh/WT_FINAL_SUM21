<?php
 include'models/db_config.php';
 
$name="";
$err_name="";
$DOB="";
$err_DOB="";
$credit="";
$err_credit="";
$cgpa="";
$err_cgpa="";

$err_db="";
$hasError=false;
 if(isset($_POST["add_student"])){
	 if(empty($_POST["name"])){
			$err_name="*Name Required";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["DOB"])){
			$err_DOB="*DOB Required";
			$hasError = true;
		}
		else{
			$DOB=$_POST["DOB"];
		}
		/*if(empty($_POST["credit"])){
			$err_credit="*credit Required";
			$hasError = true;
		}
		else{
			$credit=$_POST["credit"];
		}
		if(empty($_POST["cgpa"])){
			$err_cgpa="*cgpa Required";
			$hasError = true;
		}
		else{
			$cgpa=$_POST["cgpa"];
		}*/
		  
		if(!$hasError){	
		   //var_dump($rs);
		   
		 $rs= insertStudent($_POST["name"],$_POST["DOB"]);
		 if($rs===true){
			   header("Location: allstudent.php");
		   } 
		   $err_db= $rs;
		}
 }
 else if(isset($_POST["edit_student"])){
	 if(empty($_POST["name"])){
			$err_name="*Name Required";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(!$hasError){	
		 $rs=updateStudent($_POST["name"],$_POST["id"]);
		 if($rs===true){
			   header("Location: allstudent.php");
		   } 
		   $err_db= $rs;
		}
	}
 function insertStudent($name){
	 $query ="insert into student values (NULL,'$name','$DOB')";
	 return execute($query);
 }
 function getAllStudent(){
	 $query="Select id,name from student";
	 $rs= get($query);
	 return $rs;
 }
 function getstudent($id){
	 $query="Select * from student where id=$id";
	 $rs= get($query);
	 return $rs[0]; 
 }
 function updatestudent($name,$id){
	 $query="update student set name='$name' where id=$id";
	 return execute($query);
 }
?>