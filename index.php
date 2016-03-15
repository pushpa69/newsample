<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/mystyle.css"></link>
		<link rel="stylesheet" type="text/css" href="css/reset.css"></link>
		<link rel="stylesheet" href="css/hover.css" media="all"></link>
	</head>
	<body style="background-color:FloralWhite">
		<?php include("menu.php");?>
			<div id="page1">
				<div id="pagelogo">
					<img src="images/logo.png"/>
					<h2>School of computer science and engineering</h2>
				</div>
				<div id="login">
					<form>
						<div>
							<label>User Name:</label>
							<input type="text" id="user_id" name="user_id" value=""><br><br>
						</div>
						<div>
							<label>Password:</label>
							<input type="password" id="pwd" name="pwd" value=""><br><br>
						</div>
						<div style="margin:17px 0px 0px 166px;">
							<input type="submit" id="button" onclick="" value="sign in">
						</div>
					</form>
				</div>
			</div>			
			<div style="text-align:right;margin-right:20px;">
			<a href="ParticpantInfo.php"><button>Next</button></a>
			</div>			
		</body>
		<?php include("footer.php");?>	
</html>