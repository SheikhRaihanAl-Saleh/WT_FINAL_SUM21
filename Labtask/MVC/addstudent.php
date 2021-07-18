<?php include'header.php';
      include 'controllers/studentcontroller.php';
?>


<center>
<h2>Add Student</h2>
<a href='allstudent.php'>all_student</a>
<span><a href="dashboard.php">Dashboard</a></span>
<h3 align="center"><?php echo $err_db;?></h3>
<form action="" method="post">
<table>

<tr>
	<td>Name: </td>
	<td><input type="text" size="50" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
	<td><span><?php echo $err_name;?></span></td>
						
</tr>
<tr>
	<td align="center" colspan="2"><br><input type="submit" name="add_student" value="add_student"><br>
</tr>


</table>
</form>
</center>
<?php include'footer.php';?>