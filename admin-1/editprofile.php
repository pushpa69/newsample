<?php 
	ini_set('display_errors', 'off');
	mysql_connect('localhost','root','');
	mysql_select_db('salford');
	$sql=mysql_query("select * from users where u_id='".$_GET['id']."'");	
	$row=mysql_fetch_array($sql);	
	/* echo $row['u_id'];	exit; */
	if(isset($_POST['submit'])){
		$fname=$_POST['Firstname'];
		$lname=$_POST['Lastname'];
		$email=$_POST['Email'];		
		$mobile=$_POST['Mobile'];
		$dob=$_POST['DOB'];
		$address=$_POST['Add'];
		$gender=$_POST['Gender'];
		//print_r($_POST);exit;
		$result="UPDATE users SET firstname='$fname',lastname='$lname',email='$email',mobile='$mobile',date_of_birth='$dob',address='$address',gender='$gender' WHERE u_id='".$_GET['id']."'";
		//echo $result; exit;
		$sql = mysql_query($result);
		$sql=mysql_query("select * from users where u_id='".$_GET['id']."'");	
		$row=mysql_fetch_array($sql);
	}
?>
<html>
		<head>
			<title>EditProfile</title>
		    <link rel="stylesheet" type="text/css" href="user style.css"></link>
		</head>
		<div id="hed">
		<div>		
	<body id="back">
		<?php include("salford1.php");?>
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
						<textarea rows="3"cols="20" maxlength="20" name="Add"id="Add"> <?php echo $row['firstname'];?></textarea><br>
					<label>Gender</label>
						Male<input type="radio" name="Gender" value="<?php echo $row['gender'];?>" id="Gender"/>
					
						Female<input type="radio" name="Gender" value="<?php echo $row['gender'];?>" id="Gender"/><br>
										
						<input type="submit" value="update" name="submit" />
				</form>		
			</div>
			<footer>  
				<p>Contact information: <a href="mailto:someone@example.com">someone@example.com</a>.</p>
			</footer>
			&nbsp
	</body>
</html>
