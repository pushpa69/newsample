<?php
	include('db.php');	
	if(isset($_POST['submit'])){	
		$sql=mysql_query("SELECT * FROM adminlogin WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'");
		$rows = mysql_num_rows($sql);
		$result=mysql_fetch_array($sql);
		if ($rows == 1){
			$_SESSION['uid']=$row['a_id'];
			$_SESSION['fname']=$row['firstname'];
			$_SESSION['lname']=$row['lastname'];
			// echo "login successful";			
			header ('location: user.php');
		}else
					{?>
						<p style="text-align:center;color:red;font-size:16px;">
						<?php echo "worng creditionals";?></p>
					<?php
					}
	} 
?>
<html>	
	<head>
		<link rel="stylesheet" type="text/css" href="user style.css"></link>
	</head>	
	<body>
			<div id="logo1">
				<img src="logo.png" alt="logo" style="width:150px;height:90px;">
			</div>
			<div id ="menu1">
				<h1 style="text-align:center;">Cloud Framework Tool</h1>
			</div>			
			<div id="menu">
				<ul>				  
				  <li><a href="" style="margin-left:50px; font-size:20px;color:white;"> Login</a></li>				  
				</ul>				
			</div>
			<div id="login">
				<form action="" method="POST" onsubmit="return validate();" name="myform">
					<div>
						<label>Email</label>
						<input type="email" name="email" id="email" onblur="myfunction()">
					</div>
					<div>
						<label>Password</label>
						<input type="password" name="password" id="password" onblur="myfunction()">
					</div>
					<div>
						<input style="margin-left:300px;"type="submit" name="submit" value="login"/>
					</div>
				</form>
			</div>
	</body>	
		<footer>  
			<p style="text-align:center;">Copyright @2016	<a href="http://aapthitech.com">Aapthi Technologies,</a>an SBU of Yalavarthi Software Solutions pvt Ltd.</p>
		</footer>

		<script>
		function validate()
		{
			//alert("ok");
			var fname=document.myform.email.value;
			var pass=document.myform.password.value;
			var fexp=/^[a-z0-9._]+@+[a-z0-9]+.+[a-z]{2,4}/;
			var epsd=/^[0-9a-zA-Z]+$/;
			if(!fname.match(fexp))
			{                             
				document.getElementById("email").style.border="1px solid red";
				document.myform.email.focus();
				return false;
			}
			if(!pass.match(epsd))
			{                             
				document.getElementById("password").style.border="1px solid red";
				document.myform.password.focus();
				return false;
			}
		}
		function myfunction()
			{
				document.getElementById("email").style.border="";
				document.getElementById("password").style.border="";
			}
	</script>
</html>
