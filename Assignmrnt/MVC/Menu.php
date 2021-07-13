<html>
<head>
<title>Menu</title>
</head>
<body>
<fieldset>
<div align="right">
<!-- Navbar -->
<b><a target="_blank" href="Menu.php">MENU</a></b>

<b><a target="_blank" href="About.php">ABOUT US</a></b>

<b><a target="_blank" href="membership.php">MEMBERSHIP</a></b>

<b><a target="_blank" href="Contact.php">CONTACT</a></b>

<b><a href="addcategory.php">ADD CATEGORY</a><b>

<b><a href='allcategories.php'>ALL CATEGORIES</a></b>

<b><a target="_blank" href="Customerlogin.php">LOG OUT</a></b>
</div>

<form>
<table>
<img src="images/me.jpg" width="150px" height="150px">
</table>

<h2 align="center"><u>Popular Food Items</u></h2>
<table>

<?php
 $imageWidth="250px"; $imageHeight="250px";
?>
<!--Burger item -->
<tr><td><h3>Burgers:</h3></td></tr>

<center>
<tr>

<td><img src ="images/bug1.png"width="<?php echo $imageWidth ?>" height="<?php echo $imageHeight ?>"/></td>
<td colspan="2"><text>Chicken Double Decker<br>Price= 450tk/=</text></td>

<td><img src ="images/666.png"width="<?php echo $imageWidth ?>" height="<?php echo $imageHeight ?>"/></td>
<td><text>Crispy & Juicy Burger <br>Price= 550tk/=</text></td>

<td><img src ="images/bug3.png"width="<?php echo $imageWidth ?>" height="<?php echo $imageHeight ?>"/></td>
<td><text>Beef Double Decker<br>Price= 600tk/=</text></td>

</tr>


<!--For pizza item -->
<tr><td><br><h3>Pizza's:</h3></td></tr>

<tr>
<td><img src ="images/piz6.png"width="<?php echo $imageWidth ?>" height="<?php echo $imageHeight ?>"/></td>
<td colspan="2"><text>10"Farmhouse<br>Price= 550tk/=</text></td>

<td><img src ="images/piz7.png"width="<?php echo $imageWidth ?>" height="<?php echo $imageHeight ?>"/></td>
<td><text>10"American Pizza<br>Price= 600tk/=</text></td>

<td><img src ="images/pizz.png"width="<?php echo $imageWidth ?>" height="<?php echo $imageHeight ?>"/></td>
<td><text>10"Cheesy Pizza<br>Price= 500tk/=</text></td>

</tr>

<!--For pasta item -->
<tr><td><br><h3>Soup:</h3></td></tr>

<tr>
<td><img src ="images/soup2.png"width="<?php echo $imageWidth ?>" height="<?php echo $imageHeight ?>"/></td>
<td colspan="2"><text>Chicken Egg soup<br>Price= 600tk/=</text></td>

<td><img src ="images/soup1.jpg"width="<?php echo $imageWidth ?>" height="<?php echo $imageHeight ?>"/></td>
<td><text>Maxican Soup<br>Price= 500tk/=</text></td>

<td><img src ="images/soup3.jpg"width="<?php echo $imageWidth ?>" height="<?php echo $imageHeight ?>"/></td>
<td><text><br>Chicken with Vegetable soup<br>Price= 600tk/=</text></td>
</tr>

<!--For Juice item -->

<tr><td><br><h3>Juices:</h3></td></tr>

<tr>
<td><img src ="images/11.png"width="<?php echo $imageWidth ?>" height="<?php echo $imageHeight ?>"/></td>
<td colspan="2"><text>Mango Juice<br>Price= 200tk/=</text></td>

<td><img src ="images/33.jpg"width="<?php echo $imageWidth ?>" height="<?php echo $imageHeight ?>"/></td>
<td><text>Mixed Fruite Juice<br>Price= 300tk/=</text></td>

<td><img src ="images/44.jpg"width="<?php echo $imageWidth ?>" height="<?php echo $imageHeight ?>"/></td>
<td><text>Guava Juice<br>Price= 200tk/=</text></td>

</tr>

<!--For Sides -->

<tr><td><br><h3>Sides:</h3></td></tr>

<tr>
<td colspan="2"><img src ="images/s2.png"width="<?php echo $imageWidth ?>" height="<?php echo $imageHeight ?>"/></td>
<td><text>Mashed Potato fries<br>Price= 200tk/=</text></td>

<td><img src ="images/s8.jpg"width="<?php echo $imageWidth ?>" height="<?php echo $imageHeight ?>"/></td>
<td><text>Mexican French Fries<br>Price= 150tk/=</text></td>

<td><img src ="images/s7.jpg"width="<?php echo $imageWidth ?>" height="<?php echo $imageHeight ?>"/></td>
<td><text>Strawberry Milk shake<br>Price= 200tk/=</text></td>

</tr>
</center>
</table>

<table>
<tr>
  <td><br><h1> Food Categories: </h1> </td>
  </tr>
  
  <td align="center"><select><option selected disabled>-Select Food Category-</option>
	  <option>Burgers</option>
	  <option>Pizza</option>
	  <option>Soup </option>
	  <option>Juice</option>
	  <option>Sides</option>
	  
	 </select><br></td>

</tr>

<tr>
	 <td align="center"><br><br> <input type="submit" value="Submit"></td>
</tr>
</table>
</form>
</fieldset>
</body>
</html>