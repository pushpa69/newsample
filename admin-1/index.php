<html>
<head>
		<link rel="stylesheet" type="text/css" href="loginstyle.css"></link>
</head>
<?php include('menu.php');?>
<body style="background-color:FloralWhite">
	<div class="wrapper">		
		<div class="container">
			<div id="page1">
				<div id="pagelogo">
					<img src="trunk/images/logo.png"/>
					<h2>School of computer science and engineering</h2>
				</div>
			
				<div id="login">
					<form action="" method="POST" onsubmit="return validate();" name="myform">
						<div>
							<label>User Name:</label>
							<input type="text" id="user_id" name="user_id" value=""  onblur="myfunction()"/><br><br>
						</div>
						<div>
							<label>Password:</label>
							<input type="password" id="pwd" name="pwd" value=""  onblur="myfunction()"/><br><br>
						</div>
						<div style="margin:17px 0px 0px 166px;" class="btn">
							<input type="submit" id="button" name="submit"
							onclick="" value="sign in"/>
						</div>
					</form>
				</div><br>
				
				  <!--<div>
					 <a href="ParticpantInfo.php" 
					 style="float:right;margin-right:20px;"><button>Next</button></a>
				 </div> -->
			</div>			
		</div>	
		<div class="push"></div>			
	</div>	<br>
	
	
</html>