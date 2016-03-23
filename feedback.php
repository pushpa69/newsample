</head>
	<body style="background-color:FloralWhite">
		<div class="wrapper">
			<?php include("menu.php");?>
			<div class="container">
				<div id="page8">
					<form action="" method="POST">
						<div>
							<h2 style="font-size:22px;">Overal Efficiency Of The Framework</h2><br><br>
						</div>
						<div>
							<input type="radio" id="feed" name="feed" value="Excellent and very confident">Excellent and very confident<br>
							<input type="radio" id="feed" name="feed" value="Good and some what confident">Good and some what confident<br>
							<input type="radio" id="feed" name="feed" value="Average and still not sure">Average and still not sure<br>
							<input type="radio" id="feed" name="feed" value="Poor and i still consider cloud computing as a threat to my enterprise">Poor and i still consider cloud computing as a threat to my enterprise	<br>						
						</div><br><br>
						<div>
							<label style="margin-left:100px;">Further suggestions(&comments)</label><br>
							<textarea rows="6"cols="40"></textarea>
						</div>
					</form>					
				</div>				
			</div>
									
			<div class="push"></div>			
		</div><br>
				<div>
					<a style="float:left;margin-left:20px;"><input type="button" value="Back" /></a>			
					<span style="float:right">
					<input type="submit" name="submit" value="Next" onclick="return validate();"/></span>
				</div>	
	<?php include("footer.php");
	
	