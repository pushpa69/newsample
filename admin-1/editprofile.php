<html>
		<head>
			<title>EditProfile</title>
		    <link rel="stylesheet" type="text/css" href="user style.css"></link>
		</head>
		<div id="hed">
		<div>		
	<body id="back">
		<?php include("salford1.php");?>
		<?php 	
			$id=$_SESSION['uid'];
			$sql=mysql_query("select * from users where u_id='".$_GET['id']."'");	
			$row=mysql_fetch_array($sql);		
			if(isset($_POST['submit'])){
				$fname=$_POST['Firstname'];
				$lname=$_POST['Lastname'];
				$email=$_POST['Email'];	
				$pass=md5($_POST['password']);
				$mobile=$_POST['Mobile'];
				$dob=$_POST['DOB'];
				$address=$_POST['Add'];
				$gender=$_POST['Gender'];			
				$result="UPDATE users SET firstname='$fname',lastname='$lname',email='$email',u_password='$pass',mobile='$mobile',date_of_birth='$dob',address='$address',gender='$gender' WHERE u_id='".$_GET['id']."'";
				header('location:user.php');
				$sql = mysql_query($result);
				$sql=mysql_query("select * from users where u_id='".$_GET['id']."'");	
				$row=mysql_fetch_array($sql);
			}
		?>
			<div id="form">
				<form action="" method="POST" onsubmit="return regValidate();" name="registrationform" >
					<h1 id="head" style="font-size:27px;">Edit Profile</h1>
					<label>First name:</label>
						<input type="text" name="Firstname" id="Firstname" placeholder="enter your firstname" value="<?php echo $row['firstname'];?>"><br>
					<label>Last name:</label>
						<input type="text" name="Lastname" id="Lastname" placeholder="enter your lastname" value="<?php echo $row['lastname'];?>" /><br>
					<label>Email:</label>
						<input type="Email" name="Email" id="Email" placeholder="enter your email id " value="<?php echo $row['email'];?>" /><br>				
					<label>Password:</label>
						<input type="Password" name="Password" id="Password"placeholder="enter your password"/><br>
					<label>Mobile:</label>
						<input type="text" name="Mobile"  id="Mobile" placeholder="enter your mobile number" value="<?php echo $row['mobile'];?>"/><br>
					<label>DOB</label>
						<input type="text"name="DOB" id="DOB" placeholder="enter your mobile DOB" value="<?php echo $row['date_of_birth'];?>"/><br><br>
					<label>Address</label>
						<textarea style="margin-left:0px;" rows="3"cols="20" maxlength="20" name="Add"id="Add"> <?php echo $row['address'];?></textarea><br>
					<label>Gender</label>
					<?php
						$mchecked = "";
						$fchecked = "";
						if($row['gender'] == 'male'){
							$mchecked = "checked";
						}else if($row['gender'] == 'female'){
							$fchecked = "checked";
						}
					?>
						Male<input type="radio" name="Gender" id="Gender" value="male" <?php echo $mchecked; ?> />
					
						Female<input type="radio" name="Gender"  id="Gender" value="female" <?php echo $fchecked; ?>/><br>
										
						<input type="submit" value="update" name="submit" />
				</form>		
			</div>
			<footer>  
				<p style="text-align:center;"><a></a> University Of Salford</p>
			</footer>
			&nbsp
	</body>
</html>
