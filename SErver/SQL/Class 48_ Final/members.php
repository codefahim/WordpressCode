<?php 
	require_once ('config.php');
	

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Member list</title>
 	<link rel="stylesheet" href="style.css">
 </head>
 <body>
 	<table class="table">
			
			<tr>
				<th>User_ID</th>
				<th>First_Name</th>
			 	<th>Last_Name</th>
			 	<th>Email_address</th>
			 	<th>Your_Password</th>
			 </tr>	

<!-- data_collect_type1 -->
 	<?php 

 			 $data = mysqli_query($connection,"SELECT * FROM user");

 			 	while($row = $data-> fetch_object()): ?>
					<tr>
			 			<td><?php echo $row->id; ?></td>
			 			<td><?php echo $row->fname; ?></td>
			 			<td><?php echo $row->lname; ?></td>
			 			<td><?php echo $row->email; ?></td>
			 			<td><?php echo $row->password; ?></td>
			 		</tr>
			 <?php endwhile; ?> 


<!-- data_collect_type2 -->

	 <?php 
	 
	  			 $data = mysqli_query($connection,"SELECT * FROM user");
	 
	  			 	while($row =mysqli_fetch_object($data)): ?>
	 				<tr>
	 		 			<td><?php echo $row->id; ?></td>
	 		 			<td><?php echo $row->fname; ?></td>
	 		 			<td><?php echo $row->lname; ?></td>
	 		 			<td><?php echo $row->email; ?></td>
	 		 			<td><?php echo $row->password; ?></td>
	 		 		</tr>
	 		 <?php endwhile; ?>
	



<!-- data_collection_type3 -->

	<?php 

 			 $data = mysqli_query($connection,"SELECT * FROM user");

 			 	while($row = mysqli_fetch_assoc($data)): ?>
					<tr>
			 			<td><?php echo $row['id']; ?></td>
			 			<td><?php echo $row['fname']; ?></td>
			 			<td><?php echo $row['lname']; ?></td>
			 			<td><?php echo $row['email']; ?></td>
			 			<td><?php echo $row['fname']; ?></td>
			 		</tr>
			 <?php endwhile; ?>





 		 
 		
 	</table>
 </body>
 </html>