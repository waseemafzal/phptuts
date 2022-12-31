<?php 

include_once 'config.php';
$select = 'select * from users';
$result	= $conn->query($select);



?>
<table border="1" >
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
    </tr>
    
    <?php
	if ($result->num_rows > 0) {
 
	  while($row = $result->fetch_assoc()) {
		echo '<tr>
				<td>'.$row['name'].'</td>
				<td>'.$row['email'].'</td>
				<td><a href="edit.php?id='.$row['id'].'">Update</a> |
				<a href="delete.php?id='.$row['id'].'">delete</a>
				</td>
			</tr>';
	  }
} 
	?>
    
</table>