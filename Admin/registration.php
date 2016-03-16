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
		<form action="user.php">
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
					<textarea rows="3"cols="20" maxlength="20" required></textarea><br>
				<label>Gender</label>
					Male<input type="radio" name="Gender" id="Gender"/>
				
					Female<input type="radio" name="gender" id="Gender"/><br>
			
					<button type="submit" value="register" >register</button>
		</form>
		
	</div>
	<footer>
  
  <p>Contact information: <a href="mailto:someone@example.com">someone@example.com</a>.</p>
</footer>
&nbsp
	</body>
</html>