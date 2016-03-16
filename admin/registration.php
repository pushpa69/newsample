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
				<form action="" method="POST" onsubmit="return regValidate();" name="registrationform" >
			<h1 id="head"> Registration Form</h1>
				<label>First name:</label>
					<input type="text" name="Firstname" id="Firstname" placeholder="enter your firstname"><br>
				<label>Last name:</label>
					<input type="text" name="Lastname" id="Lastname" placeholder="enter your lastname"/><br>
				<label>Email:</label>
					<input type="Email" name="Email" id="Email" placeholder="enter your email id "/><br>
				<label>Password:</label>
					<input type="Password"name="Password" id="Password" placeholder="enter your password"/><br>
				<label>Confirm Password:</label>
					<input type="Password"name="ConfirmPassword" id="ConfirmPassword" placeholder="enter your confirm password"/><br>
				<label>Mobile:</label>
					<input type="text"name="Mobile"  id="Mobile" placeholder="enter your mobile number"/><br>
				<label>DOB</label>
					<input type="text"name="DOB" id="DOB" placeholder="enter your mobile DOB"/><br>
				<label>Address</label>
					<textarea rows="3"cols="20" maxlength="20" id="Address"></textarea><br>
				<label>Gender</label>
					Male<input type="radio" name="Gender" id="Gender"/>
				
					Female<input type="radio" name="Gender" id="Gender"/><br>
			
					<button type="submit" value="Register" name="Register" >Register</button>
		</form>
		
	</div>
	<footer>
  
  <p>Contact information: <a href="mailto:someone@example.com">someone@example.com</a>.</p>
</footer>
&nbsp
	</body>
</html>
<script>
			function regValidate()
			
				{
					// alert("ok");
					var flag='true';
						var Firstname = document.getElementById("Firstname").value;
						// alert(Firstname);
						if(Firstname==""){
						document.getElementById("Firstname").style.border="2px solid red";
						flag='false';
						}
						else{
						document.getElementById("Firstname").style.border="";
						}
							var Lastname = document.getElementById("Lastname").value;
							if(Lastname ==""){
							document.getElementById("Lastname").style.border="2px solid red";
							flag='false';
							}else{
							document.getElementById("Lastname").style.border="";
							}
						var Email = document.getElementById("Email").value;
						if(Email ==""){
						document.getElementById("Email").style.border="2px solid red";
						flag='false';
						}else{
						document.getElementById("Email").style.border="";
						}
							var Password = document.getElementById("Password").value;
							if(Password==""){
							document.getElementById("Password").style.border="2px solid red";
							flag='false';
							}else{
							document.getElementById("Password").style.border="";
							}
							var ConfirmPassword = document.getElementById("ConfirmPassword").value;
							if(ConfirmPassword ==""){
							document.getElementById("ConfirmPassword").style.border="2px solid red";
							flag='false';
							}else{
							document.getElementById("ConfirmPassword").style.border="";
							}
						var Mobile = document.getElementById("Mobile").value;
						if(Mobile==""){
						document.getElementById("Mobile").style.border="2px solid red";
						flag='false';
						}else{
						document.getElementById("Mobile").style.border="";
						}
							var DOB = document.getElementById("DOB").value;
						if(DOB == ""){
						document.getElementById("DOB").style.border="2px solid red";
						flag='false';
						}else{
						document.getElementById("DOB").style.border="";
						}	
							var Address = document.getElementById("Address").value;
							if(Address ==""){
							document.getElementById("Address").style.border="2px solid red";
							flag='false';
							}else{
							document.getElementById("Address").style.border="";
							}	
							
							
							if(flag=='false'){
					return false;
					}
					var Gender = document.getElementById("Gender").value;
							if(Gender ==""){
							// document.getElementById("Gender").style.border="2px solid red";
							// flag='false';
							 alert ( "Please choose your Gender: Male or Female" ); 
							}else{
							document.getElementById("Gender").style.border="";
							}	
					else{
					alert("su");
					}
					
					
				}
		
		</script>
		