<?php

$db_server="localhost";
$db_uname="root";
$db_pass="";
$db_name="w1t_sum21";

//$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name );

function execute($query){    //responsible for running insert,update,delete
    global $db_server,$db_uname,$db_pass,$db_name;
	$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name );
	if($conn){
		if(mysqli_query($conn,$query)){
		 return true;	
		}
		return mysqli_error($conn);
	}
}

function get($query){  //responsible for running select
 	 global $db_server,$db_uname,$db_pass,$db_name;
	$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name );
	$data =array();
	if($conn){
		$result = mysqli_query($conn,$query);
		while($row=mysqli_fetch_assoc($result)){
			$data[]=$row;
		}
	}
	return $data;
}


// if($conn){
	// //echo"connected";
	// // echo"<pre>";
    // // var_dump($conn);
    // // echo"<pre>";	
 // // $query = "insert into users values (4,'Fahim','sFahim','12347')";
 // // mysqli_query($conn,$query);	
 
 // /*$query = "insert into users values (5,'Fahim al','Fahim01','12348')";
 // if(!mysqli_query($conn,$query)){
	 // echo mysqli_error($conn);
 // }
// else{
	// echo"Success";
// } */
 
// }
// else{
	// echo"not connected";
// }
?>