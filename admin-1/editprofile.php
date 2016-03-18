<?php 
	ini_set('display_errors', 'off');
	mysql_connect('localhost','root','');
	mysql_select_db('salford');
	$sql=mysql_query("select * from users where u_id='".$_GET['id']."'");	
	$row=mysql_fetch_array($sql);	
	/* echo $row['u_id'];	exit; */
	

?>

<html>
		<head>
			<title>EditProfile</title>
		    <link rel="stylesheet" type="text/css" href="user style.css"></link>
		</head>
		<div id="hed">
		<div>
		
	<body id="back">
		<?php 
		include("salford1.php");

		?>
	<div id="form">
				<form action="" method="POST" onsubmit="return regValidate();" name="registrationform" >
			<h1 id="head" style="font-size:20px;">Edit Profile</h1>
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
					<textarea rows="3"cols="20" maxlength="20" id="Address"> <?php echo $row['firstname'];?></textarea><br>
				<label>Gender</label>
					Male<input type="radio" name="Gender" id="Gender"/>
				
					Female<input type="radio" name="Gender" id="Gender"/><br>
			
					<button type="submit" value="update" name="update" >update</button>
		</form>
		
	</div>
	<footer>
  
  <p>Contact information: <a href="mailto:someone@example.com">someone@example.com</a>.</p>
</footer>
&nbsp
	</body>
</html>
