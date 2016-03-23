 <body style="background-color:FloralWhite">
	<div class="wrapper">
		<?php include("menu.php");?>
		<div class="container">
			<div id="page1">
				<div id="pagelogo">
					<img src="images/logo.png"/>
					<h2>School of computer science and engineering</h2>
				</div>
				<?php
				session_start();
				include('db.php');
				if(isset($_POST['submit']))
				{
					$email=$_POST['user_id'];
					$pswd=md5($_POST['pwd']);
					 $sql=mysql_query("select * from users where email='".$email."' and u_password='".$pswd."'");
					
					
					if(mysql_num_rows($sql)==1)
					{
						$row=mysql_fetch_assoc($sql);						
							$_SESSION['uid']=$row['u_id'];
							header("location:ParticpantInfo.php?id=".$row['u_id']);				
						
					}
					else
					{?>
						<p style="text-align:center;color:red;font-size:16px;">
						<?php echo "Wrong Credentials";?></p>
					<?php
					}
				}
               ?>
				<div id="login">
					<form action="" method="POST" onsubmit="return validate();" name="myform">
						<div>
							<label>User Name:</label>
							<input type="text" id="user_id" name="user_id" value=""  onblur="myfunction()" placeholder="enter email"/><br><br>
						</div>
						<div>
							<label>Password:</label>
							<input type="password" id="pwd" name="pwd" value=""  onblur="myfunction()" placeholder="enter password"/><br><br>
						</div>
						<div style="margin:17px 0px 0px 166px;" class="btn">
							<input type="submit" id="button" name="submit"
							onclick="" value="sign in"/>
						</div>

						</form>

											
				</div><br>
				
				 </div>			
		</div>	
		<div class="push"></div>			
	</div>	<br>
	
	<?php
	
	?>
	
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
	<?php /*}else{
		//header('location:index.php');
	}*/
	?>