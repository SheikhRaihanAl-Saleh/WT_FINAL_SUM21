 <?php include 'header.php';
       include 'controllers/categorycontroller.php';
	   $categories = getAllCategories();
	   //echo "<pre>";
	   //print_r($categories);
	   //echo "</pre>";
 ?>


 <center>
     <a href="addcategory.php">add_category</a>
	 <h3>All Categories</h3>
	 <table border="2">
		 <tr>
			 <td>Sl#</td>
			 <td> Name</td>
			 <td>Product Count </td>
			 <td></td>
			 <td></td>
			
		 </tr>
		 <tbody>
			 <?php
			     $i=1;
				 foreach($categories as $c){
					
					 echo "<tr>";
					     //echo "<td>".$c["id"]."</td>";
						 echo "<td>$i</td>";
						 echo "<td>".$c["name"]."</td>";
						 echo "<td><td>";
						 echo '<td><button><a href="editcategory.php?id='.$c["id"].'">Edit</a></button></td>';
						 echo '<td><button>Delete</button></td>';
					 echo "</tr>";
					 $i++;
				 }
			 ?>

			
		 </tbody>
	 </table>
	 </center>
 </div>