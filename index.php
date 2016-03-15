<body style="background-color:FloralWhite">
	<div class="wrapper">
		<?php include("menu.php");?>
		<div class="container">
			<div id="page1">
				<div id="pagelogo">
					<img src="images/logo.png"/>
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
							<input type="submit" id="button" 
							onclick="" value="sign in"/>
						</div>
					</form>
				</div><br>
				<div>
					<a href="ParticpantInfo.php" style="float:right;margin-right:20px;"><button>Next</button></a>
				</div>	
			</div>			
		</div>	
		<div class="push"></div>			
	</div>	<br>		
	<?php include("footer.php");?>	 
	<script>
		function validate()
		{
			//alert("ok");
			var fname=document.myform.user_id.value;
			var pass=document.myform.pwd.value;
			var fexp=/^[a-z0-9._]+@+[a-z0-9]+.+[a-z]{2,4}/;
			var epsd=/^[0-9a-zA-Z]+$/;
			if(!fname.match(fexp))
			{                             
				document.getElementById("user_id").style.border="1px solid red";
				document.myform.user_id.focus();
				return false;
			}
			if(!pass.match(epsd))
			{                             
				document.getElementById("pwd").style.border="1px solid red";
				document.myform.pwd.focus();
				return false;
			}
			
			
		}
		function myfunction()
			{
				document.getElementById("user_id").style.border="";
				document.getElementById("pwd").style.border="";
			}
	</script>