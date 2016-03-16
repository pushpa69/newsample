<?php 
	error_reporting(E_ALL ^ E_DEPRECATED);
	mysql_connect('localhost','root','');
	mysql_select_db('admin');
	$fname='';$lname='';$email='';$pwd='';$cpwd='';$mobile='';$dob='';$address='';$gender='';
	if(isset($_POST['submit']))
	{
		// echo 'pre';print_r($_POST);exit;
		$fname=$_POST['Firstname'];
		$lname=$_POST['Lastname'];
		$email=$_POST['Email'];
		$pwd=$_POST['Password'];
		$cpwd=$_POST['Lastname'];
		$mobile=$_POST['Mobile'];
		$dob=$_POST['DOB'];
		$address=$_POST['Add'];
		$gender=$_POST['Gender'];		
	
	$sql = "INSERT INTO users (firstname ,lastname 
	,email ,u_password ,mobile ,dob ,address ,gender)
		VALUES ( '".$fname."', '".$lname."', '".$email."', '".$pwd."', 
	'".$mobile."', '".$dob."', '".$address."', '".$gender."')";
		mysql_query( $sql);
	}
	
?>

<html>
		<head>
			<title> registration form</title>
		    <link rel="stylesheet" type="text/css" href="user style.css"></link>
		</head>
		<div id="hed">
		<div>
		
	<body id="back">
		<?php 
		include("salford1.php");

		?>
	<div id="form">
		<form action="" method="POST">
			<h1 id="head"> Registration Form</h1>
				<label>First name:</label>
					<input type="text"name="Firstname" placeholder="enter your firstname"/><br>
				<label>Last name:</label>
					<input type="text"name="Lastname" placeholder="enter your lastname"/><br>
				<label>Email:</label>
					<input type="email"name="Email" placeholder="enter your email id "/><br>
				<label>Password:</label>
					<input type="password"name="Password" placeholder="enter your password"/><br>
				<label>Confirm Password:</label>
					<input type="password"name="Password" placeholder="enter your confirm password"/><br>
				<label>Mobile:</label>
					<input type="text"name="Mobile" placeholder="enter your mobile number"/><br>
				<label>DOB</label>
					<input type="text"name="DOB" placeholder="enter your mobile DOB"/><br>
				<label>Address</label>
					<textarea rows="3"cols="20" name="Add" maxlength="20" required ></textarea><br>
				<label>Gender</label>
					Male<input type="radio" name="Gender" id="Gender" value="male"/>
				
					Female<input type="radio" name="Gender" id="Gender" value="female"/><br>
			
					<button type="submit" value="register" name="submit">register</button>
		</form>
		
	</div>
	<footer>
  
  <p style="text-align:center;">Copyright @2016	<a href="http://aapthitech.com">Aapthi Technologies,</a>an SBU of Yalavarthi Software Solutions pvt Ltd.</p>
</footer>
&nbsp
	</body>
</html>