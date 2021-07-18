 <?php include'header.php';
       include 'controllers/studentcontroller.php';
	   $student = getAllstudent();
	   
 ?>


 <center>
     <a href="addstudent.php">add_student</a>
	 <h3>All student</h3>
	 <table border="2">
		 <tr>
			 <td>Sl#</td>
			 <td> Name</td>
			 <td>Date of Birth </td>
			 <td>Credit </td>
			 <td>CGPA </td>
			 <td></td>
			 <td></td>
			
		 </tr>
		 <tbody>
			 <?php
			     $i=1;
				 foreach($student as $s){
					
					 echo "<tr>";
					     //echo "<td>".$c["id"]."</td>";
						 echo "<td>$i</td>";
						 echo "<td>".$s["name"]."</td>";
						 echo "<td>".$s["DOB"]."</td>";
						 /*echo "<td>".$s["credit"]."</td>";
						 echo "<td>".$s["cgpa"]."</td>";*/
						 echo "<td><td>";
						 echo '<td><button><a href="editstudent.php?id='.$s["id"].'">Edit</a></button></td>';
						 echo '<td><button>Delete</button></td>';
					 echo "</tr>";
					 $i++;
				 }
			 ?>

			
		 </tbody>
	 </table>
	 </center>
 </div>