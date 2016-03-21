<html>	
	<head>
		<link rel="stylesheet" type="text/css" href="user style.css"></link>
	</head>	
			<body>
					<div id="logo1">
						<img src="images/logo.png" alt="logo" style="width:150px;height:90px;">
					</div>
						<div id ="menu1">
							<h1 style="text-align:center;">Cloud Framework Tool</h1>
						</div>			
						<div id="menu">
							<ul>				  
								<li><a href="" class="active" style="margin-left:50px; font-size:20px;color:white;"> Login</a></li>				  
							</ul>				
						</div>
					<div id="login">
		<?php	
			include('db.php');
			if(isset($_POST['submit'])){	
				$sql=mysql_query("SELECT * FROM adminlogin WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'");
				// echo'<pre>';print_r($sql);exit;
				$row=mysql_num_rows($sql);	
				// echo'<pre>';print_r($rows);exit;
				$res=mysql_fetch_array($sql);
				 // echo'<pre>';print_r($res);exit;
				if ($row == 1){						
					 $_SESSION['uid']=$res['a_id'];
					 $_SESSION['fname']=$res['firstname'];
					 $_SESSION['lname']=$res['lastname'];					
					// echo'<pre>';print_r($_SESSION);exit;
					header ('location:user.php');
				}else{?>
						<p style="text-align:center;color:red;font-size:22px; margin-top:1px;">
						<?php echo "Worng Credentials";?></p>
						<?php
				}
			} 
		?>
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
			<p style="text-align:center;"><a></a> University Of Salford</p>
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
