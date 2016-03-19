<?php 
	ini_set('display_errors', 'off');
	$conn=mysql_connect('localhost','root','');
	if(! $conn )
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('salford');	
	if(isset($_POST['submit'])){
		$fname=$_POST['FirstName'];
		$lname=$_POST['LastName'];
		$email=$_POST['Email'];
		$pwd=$_POST['Password'];
		$mobile=$_POST['Mobile'];
		$dob=$_POST['DOB'];
		$address=$_POST['Add'];
		$gender=$_POST['Gender'];
		date_default_timezone_set("Asia/Calcutta");
		$date=date("Y-m-d h:i:s");		
			$sql = "INSERT INTO users (created_by ,updated_by ,firstname ,lastname ,email ,u_password ,mobile ,date_of_birth ,address ,gender ,created_at ,updated_at ,status)VALUES ('1', '1', '".$fname."', '".$lname."', '".$email."', '".$pwd."', '".$mobile."', '".$dob."', '".$address."', '".$gender."', NOW(), NOW(), '1')";
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
		
			<form action="" method="post" name="myform" enctype="multipart/form-data" onsubmit="return validate();">			<h1 id="head"> Registration Form</h1>
				<label>First name:</label>
					<input type="text" name="fname" id="fname" placeholder="enter your firstname" onblur="myfunction()"/><br>
				<label>Last name:</label>
					<input type="text" name="lname" id="lname" placeholder="enter your lastname" onblur="myfunction()"/><br>
				<label>Email:</label>
					<input type="Email" name="email" id="email"placeholder="enter your email id " onblur="myfunction()" /><br>
				<label>Password:</label>
					<input type="Password" name="pswd" id="pswd"placeholder="enter your password" onblur="myfunction()"/><br>
				<label>Confirm Password:</label>
					<input type="password" name="cpswd" id="cpswd" placeholder="enter your confirm password" onblur="myfunction()"/><br>
				<label>Mobile:</label>
					<input type="text" name="mobile" id="mobile" placeholder="enter your mobile number" onblur="myfunction()"/><br>
				<label>DOB</label>
					<input type="text" name="dob" id="dob" placeholder="enter your mobile date of birth" onblur="myfunction()"/><br><br>
				<label>Address</label>
					<textarea rows="3"cols="20" name="Add" maxlength="20" id="address" onblur="myfunction()"></textarea><br>
				<label>Gender</label>
					Male<input type="radio" name="Gender" id="male"/>
				
					Female<input type="radio" name="Gender" id="female"/><br>
			
					<input type="submit" value="register" name="submit" />
		</form>
		
	</div>
	<footer>
  
  <p style="text-align:center;">Copyright @2016	<a href="http://aapthitech.com">Aapthi Technologies,</a>an SBU of Yalavarthi Software Solutions pvt Ltd.</p>
</footer>
&nbsp
<script>
			function validate()
			{
				//alert("k");
				var fname=document.myform.fname.value;
				var lname=document.myform.lname.value;
				var email=document.myform.email.value;
				var pswd=document.myform.pswd.value;
				var cpswd=document.myform.cpswd.value;
				var address=document.myform.address.value;
				var mob=document.myform.mobile.value;
				var dob=document.myform.dob.value;
				
				var a=0;
				var fexp=/[a-z]/;
				var eexp=/^[a-z0-9._]+@+[a-z0-9]+.+[a-z]{2,4}/;
				var epsd=/^[0-9a-zA-Z]+$/;
				var mobile=/^9[0-9]+$/;
				
				if(!fname.match(fexp))
				{                             
					document.getElementById("fname").style.border="1px solid red";
					document.myform.fname.focus();
					return false;
				}
				if(!lname.match(fexp))
				{
					document.getElementById("lname").style.border="1px solid red";
					document.getElementById("lname").focus();
					return false;
				}
				if(!email.match(eexp))
				{
					document.getElementById("email").style.border="1px solid red";
					document.myform.email.focus();
					return false;
				}
				if(!pswd.match(epsd))
				{
					document.getElementById("pswd").style.border="1px solid red";
					document.myform.pswd.focus();
					return false;
				}
				if(!cpswd.match(pswd))
				{
					document.getElementById("cpswd").style.border="1px solid red";
					document.myform.cpswd.focus();
					return false;
				}
				if(!mobile.match(mob))
				{
					document.getElementById("mobile").style.border="1px solid red";
					document.myform.mobile.focus();
					return false;
				}
				if(!address.match(epsd))
				{
					document.getElementById("address").style.border="1px solid red";
					document.myform.address.focus();
					return false;
				}
				
				if(document.getElementById("male").checked)
				{
					a++;
				}
				if(document.getElementById("female").checked)
				{
					a++;
				}
				if(a>1 || a==0)
				{
					document.getElementById("gen").innerHTML = "Please select gender";
					return false;
				}
				return true;
				
			}
			
			function myfunction()
			{
				 document.getElementById("fname").style.border="";
				 document.getElementById("lname").style.border="";
				 document.getElementById("email").style.border="";
				 document.getElementById("pswd").style.border="";
				 document.getElementById("cpswd").style.border="";
				 document.getElementById("address").style.border="";
				 document.getElementById("mobile").style.border="";
			}
		</script>
	</body>
</html>

