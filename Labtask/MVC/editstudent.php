<?php 
      include 'controllers/studentcontroller.php';
	  $id = $_GET["id"];
	  $student = getStudent($id);
?>

<html>
<body>
<center>
<h2> Student Management</h2>
<a href='allstudent.php'>all_student</a>
<span><a href="dashboard.php">Dashboard</a></span>
<h3 align="center"><?php echo $err_db;?></h3>

<form action="" method="post">
<table>
 
<tr>
	<td>Name: </td>
	<td><input type="hidden" name="id" value="<?php echo $student["id"];?>"><td>
	<td><input type="text" size="50" name="name" value="<?php echo $category ["name"];?>" ></td>
	
						
</tr>
<tr>
	<td align="center" colspan="3"><br><input type="submit" name="edit_student" value="edit_student"><br>
</tr>


</table>
</form>
</center>
</html>
</body>