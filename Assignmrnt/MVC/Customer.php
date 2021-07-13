<?php include'header.php';?>
<?php
	include'controllers/user_controller.php';		
?>

<html>
	<head><title>Customer Registration</title></head>
	<body>
	
		<fieldset>
			<center>
			<h3><?php echo $err_db;?></h3>
			<h1>Customer sign up</h1>
		
			<form action="" method="POST">
				<table >
					<tr>
						<td>Name: </td>
						<td><input type="text"  name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td>Username: </td>
						<td><input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><input type="text" name="email" value="<?php echo $email;?>" placeholder="Email id"></td>
						<td><span><?php echo $err_email;?></span></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="pass" value="<?php echo $pass;?>" placeholder="Password"></td>
						<td><span><?php echo $err_pass;?></span></td>
					</tr>
					 
					
				</table>
				<br>
				<a align="right"colspan="2"><input type="submit" name="sign_up" value="sign_up"></a>
						
						
			</form>
			</center>
		</fieldset>
		
	</body>
</html>

