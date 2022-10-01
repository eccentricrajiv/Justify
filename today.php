<?php
$conn = mysqli_connect("localhost","root","","justify");
$res = mysqli_query($conn,"SELECT * FROM form_details");
 ?>
 <table border = "1">
 <tr>
 <td>S.No</td>
 <td>First Name</td>
 <td>Last Name</td>
 <td>Company</td>
 <td>Email</td>
 <td>Phone</td>
 <td>Message</td>
 <td>Date</td>
 <td>Operations</td>
 </tr>
 <?php $i =1;
 while($row=mysqli_fetch_assoc($res)) { 
 ?>
 
<tr>
 <td><?php echo $i ?></td>
 <td><?php echo $row['first_name'] ?></td>
 <td><?php echo $row['last_name'] ?></td>
 <td><?php echo $row['company'] ?></td>
 <td><?php echo $row['email']?></td>
 <td><?php echo $row['phone'] ?></td>
 <td><?php echo $row['message'] ?></td>
 <td><?php echo $row['date'] ?></td>
 <td>
     <a href = "update.php">Edit</a>&nbsp;
     
	 
 </td>
 </tr>
 <?php $i++; 
 } ?>
 
 </table>
 