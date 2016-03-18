<?php
	mysql_connect('localhost','root','');
	mysql_select_db('salford');
	$sql=mysql_query('SELECT * FROM users WHERE u_id="'.$_GET['id'].'"');
	$row=mysql_fetch_array($sql);
	if(isset($_POST['submit'])){
		$result=mysql_query('DELETE FROM users WHERE u_id="'.$_GET['id'].'"');
		header('location:user.php');
	}
	
?>
<html>
	<head>
		<title>Delete Profile</title>
		   <link rel="stylesheet" type="text/css" href="user style.css"></link>
	</head>		
		<body id="back">
			<div id="logo1"><img src="logo.png" alt="logo" style="width:150px;height:90px;">
			</div>
			<div id ="menu1" >
				<h1 style="text-align:center;">Cloud Framework Tool</h1>
			</div>			
			<div id="menu">
				<ul>
				  <li><a href="user.php">User Management</a></li>
				  <li><a href="report.php">Report</a></li>
				  <li><a href=""> Login</a></li>				  
				</ul>				
			</div>
				<div id="form">
					<form action="" method="POST" onsubmit="return regValidate();" name="registrationform" >
						<h1 id="head" style="font-size:20px;">Delete Profile</h1>
						<label>First name:</label>
							<input type="text" name="Firstname" id="Firstname" placeholder="enter your firstname" value="<?php echo $row['firstname'];?>"><br>
						<label>Last name:</label>
							<input type="text" name="Lastname" id="Lastname" placeholder="enter your lastname" value="<?php echo $row['lastname'];?>" /><br>
						<label>Email:</label>
							<input type="Email" name="Email" id="Email" placeholder="enter your email id " value="<?php echo $row['email'];?>" /><br>				
						<label>Mobile:</label>
							<input type="text" name="Mobile"  id="Mobile" placeholder="enter your mobile number" value="<?php echo $row['mobile'];?>"/><br>
						<label>DOB</label>
							<input type="text"name="DOB" id="DOB" placeholder="enter your mobile DOB" value="<?php echo $row['date_of_birth'];?>"/><br>
						<label>Address</label>
							<textarea rows="3"cols="20" maxlength="20" name="Add"id="Add"> <?php echo $row['address'];?></textarea><br>
						<label>Gender</label>
							Male<input type="radio" name="Gender" value="<?php echo $row['gender'];?>" id="Gender"/>
						
							Female<input type="radio" name="Gender" value="<?php echo $row['gender'];?>" id="Gender"/><br>
											
							<input type="submit" value="delete" name="submit" />
					</form>		
				</div>
				<footer>  
					<p>Contact information: <a href="mailto:someone@example.com">someone@example.com</a>.</p>
				</footer>
				&nbsp
		</body>
	</html>