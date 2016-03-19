<?php
	mysql_connect('localhost','root','');
	mysql_select_db('salford');		
		if(isset($_POST['submit'])){	
		$sql=mysql_query("SELECT * FROM adminlogin WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'");
		$rows = mysql_num_rows($sql);
		$result=mysql_fetch_array($sql);
		if ($rows == 1){
			echo "login successful";
			
			header ('location: user.php');
		}else{
			echo "<script>";
			echo " alert('you don't have account with this email.');</script>";
			header ('location: index.php');
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
				<form action="" method="POST">
					<div>
						<label>Email</label>
						<input type="email" name="email" id="email" value="">
					</div>
					<div>
						<label>Password</label>
						<input type="password" name="password" id="password" value="">
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
</html>
