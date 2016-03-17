
	


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
		
		<form action="" method="POST" onclick="return regValidate();">
			<h1 id="head"> Registration Form</h1>
				<label>First name:</label>
					<input type="text" name="FirstName" id="FirstName" placeholder="enter your firstname"/><br>
				<label>Last name:</label>
					<input type="text" name="LastName" id="LastName" placeholder="enter your lastname"/><br>
				<label>Email:</label>
					<input type="Email" name="Email" id="Email"placeholder="enter your email id "/><br>
				<label>Password:</label>
					<input type="Password" name="Password" id="Password"placeholder="enter your password"/><br>
				<label>Confirm Password:</label>
					<input type="password" name="ConfirmPassword" id="ConfirmPassword" placeholder="enter your confirm password"/><br>
				<label>Mobile:</label>
					<input type="text" name="Mobile" id="Mobile" placeholder="enter your mobile number"/><br>
				<label>DOB</label>
					<input type="text" name="DOB" id="DOB" placeholder="enter your mobile DOB"/><br><br>
				<label>Address</label>
					<textarea rows="3"cols="20" name="Add" maxlength="20" id="Address"></textarea><br>
				<label>Gender</label>
					Male<input type="radio" name="Gender" id="Gender" value="male"/>
				
					Female<input type="radio" name="Gender" id="Gender" value="female"/><br>
			
					<button type="submit" value="register" name="submit" >register</button>
		</form>
		
	</div>
	<footer>
  
  <p style="text-align:center;">Copyright @2016	<a href="http://aapthitech.com">Aapthi Technologies,</a>an SBU of Yalavarthi Software Solutions pvt Ltd.</p>
</footer>
&nbsp
	</body>

<script>
			function regValidate()
			
				{
					 // alert("ok");
					var flag='true';
						var FirstName = document.getElementById("FirstName").value;
						// alert(Firstname);
						if(FirstName==""){
						document.getElementById("FirstName").style.border="2px solid red";
						flag='false';
						}
						else{
						document.getElementById("FirstName").style.border="";
						}
							var LastName = document.getElementById("LastName").value;
							if(LastName ==""){
							document.getElementById("LastName").style.border="2px solid red";
							flag='false';
							}else{
							document.getElementById("LastName").style.border="";
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
							var Gender = document.getElementById("Gender").checked = false;
							if(Gender ==""){
							// document.getElementById("Gender").style.border="2px solid red";
							
							 alert( "Please choose your Gender: Male or Female" ); 
							}else{
							document.getElementById("Gender").style.border="";
							}
							
							if(flag=='false'){
					return false;
					}
					
	
					
					
					
				}
		
		</script>
		</html>