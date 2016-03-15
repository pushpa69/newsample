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
					<form>
						<div>
							<label>1.Size of your enterprise.</label>
							<select>
								<option value="micro" >Micro ( 1-10) employees</option>
								<option value="small" >Small ( 11-50) employees</option>
								<option value="medium" >Medium ( 51-250) employees</option>
							</select><br><br>
						</div><br>
						<div>
							<label>2.Type of enterprise are you?</label>
							<select>
								<option value="private" >Private</option>
								<option value="public" >Public</option><br><br>
							</select><br><br><br>
						</div>
						<div>
							<label>3. Type of service(s) is offered by your enterprise.</label>
							<input style="margin-left:138px; width:200px;"type="text" id="service" name="service" value=""></input><br>
						</div><br><br>
						<div>
							<label>4. Turnover of your enterprise.</label>
							<select>
								<option value="micro" >Less than 2M£</option>
								<option value="small" >Less than 10M£</option>
								<option value="medium" >Less than 43M£</option>
							</select><br><br>
						</div><br>
						<div>
							<input type="submit" value="submit" onclick="" style="margin-left:587px;">
						</div>
					</form>
				</div>
			</div>
			<div style="text-align:left;margin-left:20px;">
			<a href="ProposedFramework.php"><button>Back</button></a>
			</div>
			<div style="text-align:right;margin-right:20px;">
			<a href="Stage2CPS.php"><button>Next</button></a>
			</div>
		</body>
		<?php include("footer.php");?>	
</html>