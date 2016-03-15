<html>
	<head>	
		<link rel="stylesheet" type="text/css" href="css/mystyle.css"></link>
		<link rel="stylesheet" type="text/css" href="css/reset.css"></link>
	</head>
		<body>
			<?php include("menu.php");?>
		<div id="page4">
				<div>
					<h1>CLOUD REQUIREMENT STAGE: WHAT'S REQUIRED FOR YOUR ENTERPRISE.</h1><br><br>
					<h2>General Info About Enterprise.</h2><br>
				</div>
				<div>
					<form action="" method="POST" onsubmit="return validate();" name="myform" >
						<div>
							<label>1.Size of your enterprise.</label>
							<select name="size_of_enter" id="size_of_enter" onblur="myfunction();">
								<option value="default" >---select size of your enterprize---</option>
								<option value="micro" >Micro ( 1-10) employees</option>
								<option value="small" >Small ( 11-50) employees</option>
								<option value="medium" >Medium ( 51-250) employees</option>
							</select><br><br>
						</div><br>
						<div>
							<label>2.Type of enterprise are you?</label>
							<select name="select_type" id="select_type" onblur="myfunction();">
								<option value="default" >---select type of enterprise---</option>
								<option value="private" >Private</option>
								<option value="public" >Public</option><br><br>
							</select><br><br><br>
						</div>
						<div>
							<label>3. Type of service(s) is offered by your enterprise.</label>
							<input style="margin-left:138px; width:200px;" type="text"
							id="services" 
							name="services" value="" onblur="myfunction();"/><br>
						</div><br><br>
						<div>
							<label>4. Turnover of your enterprise.</label>
							<select name="turnover" id="turnover" onblur="myfunction();">
								<option value="default" >---select turnover of your enterprise---</option>
								<option value="micro" >Less than 2M£</option>
								<option value="small" >Less than 10M£</option>
								<option value="medium" >Less than 43M£</option>
							</select><br><br>
						</div><br>
						<div>
							<input type="submit" value="submit"  style="margin-left:587px;"/>
						</div>
					</form>
				</div>
			</div>
			<div class="foot">
			<div class="nextback">
			<a href="ProposedFramework.php"><button>Back</button></a>
			</div>
			<div class="nextback1">
			<a href="Stage2CPS.php"><button>Next</button></a>
			</div>
			</div>
			<script>
			function validate()
			{
				//alert("ok");
				 var size_of_enter=document.myform.size_of_enter.value;
				 var select_type=document.myform.select_type.value;
				 var services=document.myform.services.value;
				 var turnover=document.myform.turnover.value;
				 var fexp=/[a-z]/;
				if(size_of_enter == "default")
				{
					//alert("ok");
					document.getElementById("size_of_enter").style.border="2px solid red";
					return false;
				} 
				if(select_type == "default")
				{
					//alert("ok");
					document.getElementById("select_type").style.border="2px solid red";
					return false;
				} 
				if(!services.match(fexp))
				{
					document.getElementById("services").style.border="1px solid red";
					document.myform.services.focus();
					return false;
				}
				if(turnover == "default")
				{
					//alert("ok");
					document.getElementById("turnover").style.border="2px solid red";
					return false;
				} 
				
			}
			function myfunction()
			{
				document.getElementById("size_of_enter").style.border="";
					document.getElementById("select_type").style.border="";
					document.getElementById("services").style.border="";
					document.getElementById("turnover").style.border="";
			}
		</script>
		</body>
		<?php include("footer.php");?>	
</html>