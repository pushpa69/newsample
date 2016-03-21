<html>
		<head>
			<title> registration form</title>
		    <link rel="stylesheet" type="text/css" href="user style.css"></link>
		</head>
		<div id="hed">
		<div>		
	<body id="back">
		<?php include("salford1.php");	?>
		<?php 					
			$id=$_SESSION['uid'];
			if(isset($_POST['submit'])){
				$fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$email=$_POST['email'];
				$result=mysql_query("SELECT * FROM users WHERE email='".$email."'");		
				$row=mysql_num_rows($result);	
				if($row==1){
					echo "<script>";
					echo " alert('you have account with this email.');</script>";			
				}else{
					$pwd=md5($_POST['pswd']);
					$mobile=$_POST['mobile'];
					$dob=$_POST['dob'];
					$address=$_POST['Add'];
					$gender=$_POST['Gender'];		
					$sql = "INSERT INTO users (created_by ,updated_by ,firstname ,lastname ,email ,u_password ,mobile ,date_of_birth ,address ,gender ,created_at ,updated_at ,status)VALUES ( '".$id."', '".$id."', '".$fname."', '".$lname."', '".$email."', '".$pwd."', '".$mobile."', '".$dob."', '".$address."', '".$gender."', NOW(), NOW(), '1')";	
					mysql_query($sql);	
					header('location:user.php');
				}
			}		
		?>
	<div id="form">
		
			<form action="" method="post" name="myform" enctype="multipart/form-data" onsubmit="return validate();">			<h1 id="head"> Registration Form</h1>
				<label>First name:</label>
					<input type="text" name="fname" id="fname" style="width:300px;" placeholder="enter your firstname" onblur="myfunction()"/><br>
				<label>Last name:</label>
					<input type="text" name="lname" id="lname" style="width:300px;" placeholder="enter your lastname" onblur="myfunction()"/><br>
				<label>Email:</label>
					<input type="Email" name="email" id="email" style="width:300px;" placeholder="enter your email id " onblur="myfunction()" /><br>
				<label>Password:</label>
					<input type="Password" name="pswd" id="pswd" style="width:300px;" placeholder="enter your password" onblur="myfunction()"/><br>
				<label>Confirm Password:</label>
					<input type="password" name="cpswd" id="cpswd" style="width:300px;" placeholder="enter your confirm password" onblur="myfunction()"/><br>
				<label>Mobile:</label>
					<input type="text" name="mobile" id="mobile" style="width:300px;" placeholder="enter your mobile number" onblur="myfunction()"/><br>
				<label>DOB</label>
					<input type="text" name="dob" id="dob" placeholder="enter your date of birth" onblur="myfunction()"/><br><br>
				<label>Address</label>
					<textarea rows="3"cols="20" name="Add" maxlength="20" id="address" onblur="myfunction()"></textarea><br>
				<label>Gender</label>
					Male<input type="radio" name="Gender" id="male"/>				
					Female<input type="radio" name="Gender" id="female"/>
					<span id="gen" style="color:red" ></span><br>
			
				<input type="submit" value="register" name="submit" />
			</form>	
	</div>
	<footer>  
		<p style="text-align:center;">Copyright @2016<a></a> University Of Saford</p>
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
				var mob=document.myform.mobile.value;
				var dob=document.myform.dob.value;
				var address=document.myform.address.value;
				var gender=document.myform.Gender.value;
				
				
				//alert('dob');
				var a=0;
				var fexp=/[a-z]/;
				var eexp=/^[a-z0-9._]+@+[a-z0-9]+.+[a-z]{2,4}/;
				var epsd=/^[0-9a-zA-Z]+$/;
				var moble=/^[0-9]+$/;
				var dexp=/^^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/
				
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
	if(!mob.match(moble))
	{
		document.getElementById("mobile").style.border="1px solid red";
		document.myform.mobile.focus();
		return false;
	}
	if(!dob.match(dexp))
		{
			document.getElementById("dob").style.border="1px solid red";
			document.myform.dob.focus();
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
				 document.getElementById("mobile").style.border="";
				 document.getElementById("address").style.border="";
				 document.getElementById("dob").style.border="";
			}
		</script>
	</body>
</html>

