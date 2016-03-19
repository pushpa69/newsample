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
				<a href="registration.php"><input id="button" type="button"value="Add User" ></a><br>
				</div><br>
			<div id="table">
				<table   cellspacing="0">				
				  <tr>
					<th> Serial.No</td>
					<th id="width">First Name</td>
					<th id="width">Last Name</td>		
					<th id="width">Email</td>
					<th id="width">Edit</td>
					<th id="width">Delete</td>
				  </tr>				  
				   <?php  while($row=mysql_fetch_array($retval)){ ?>				  
				  <tr>
					<td align="center"> <?php echo $row['u_id'];?></td>
					<td align="center"> <?php echo $row['firstname'];?></td>
					<td align="center"> <?php echo $row['lastname'];?> </td>		
					<td align="center"> <?php echo $row['email'];?></td>
					<td><a style="text-decoration:none;" href="editprofile.php?id=<?php echo $row['u_id'];?>"><img style="margin-left:68px;"src="edit.png" alt="edit"></img></a></td>&nbsp &nbsp
					<td><img style="margin-left:68px;" src="delete.png" alt="delete" onclick="deleteUser(<?php echo $row['u_id'];?>)"> </img> </td>				  
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
	