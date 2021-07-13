<?php include'header.php';
      include 'controllers/categorycontroller.php';
	  $id = $_GET["id"];
	  $category = getCategory($id);
?>


<center>
<h2>Edit category Management</h2>
<a href='allcategories.php'>all_categories</a>
<span><a href="Menu.php">MENU</a></span>
<h3 align="center"><?php echo $err_db;?></h3>

<form action="" method="post">
<table>
 
<tr>
	<td>Name: </td>
	<td><input type="hidden" name="id" value="<?php echo $category["id"];?>"><td>
	<td><input type="text" size="50" name="name" value="<?php echo $category ["name"];?>" ></td>
	
						
</tr>
<tr>
	<td align="center" colspan="3"><br><input type="submit" name="edit_category" value="edit_category"><br>
</tr>


</table>
</form>
</center>
<?php include'footer.php';?>