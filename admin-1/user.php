<html>
	<head>
	<link rel="stylesheet" type="text/css" href="user style.css"></link>
	</head>
		<body id="body">
			<?php include("salford1.php");	?>
			<?php 	
			if(isset($_GET['id'])){
			$result=mysql_query('DELETE FROM users WHERE u_id="'.$_GET['id'].'"');	
			header('location:user.php');
			}else{
			$retval=mysql_query('SELECT * FROM users');
			}	
			?>
			<h2>USER MANAGEMENT</h2>
				<div id="Add">
				<a href="registration.php"><img style="float:right;margin-right:140px;width:44px;height:47px;"src="add.png" alt="adduser"></img></a><br>
				</div><br><br>
			<div id="table">
				<table   cellspacing="0">				
				  <tr>
					<th> Serial.No</td>
					<th id="width">First Name</td>
					<th id="width">Last Name</td>		
					<th id="width">Email</td>
					<th id="width">Edit/Delete</td>
					<!--<th id="width">Delete</td>-->
				  </tr>				  
				   <?php  while($row=mysql_fetch_array($retval)){ ?>				  
				  <tr>
					<td align="center"> <?php echo $row['u_id'];?></td>
					<td > <?php echo $row['firstname'];?></td>
					<td > <?php echo $row['lastname'];?> </td>		
					<td > <?php echo $row['email'];?></td>
					<td><a style="text-decoration:none;" href="editprofile.php?id=<?php echo $row['u_id'];?>"><img style="margin-left:47px;width:33px;height:34px;"src="edit.png" alt="edit"></img></a>
					<img style="margin-left:25px;width:34px;height:33px; cursor: pointer;" src="delete.png" alt="delete" onclick="deleteUser(<?php echo $row['u_id'];?>)"> </img> </td>				  
				 </tr>
				   <?php }?>				   				  
				</table>
			</div>
		</body>
		<footer>  
		<p style="text-align:center;">Copyright @2016	<a href="http://aapthitech.com">Aapthi Technologies,</a>an SBU of Yalavarthi Software Solutions pvt Ltd.</p>
		</footer>
		&nbsp
	</html>
	
<script>
	function deleteUser(userID){
		if (confirm("Are you sure want to delete the user!") == true) {
			window.location = "user.php?id="+userID;
		}
	}
</script>
	