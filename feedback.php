
</head>
	<body style="background-color:FloralWhite">
		<div class="wrapper">
			
			<div class="container">
				<div id="page8">
					<form action="" method="POST">
						<div>
							<h2 style="font-size:22px;">Overal Efficiency Of The Framework</h2><br><br>
						</div>
						<div>
							<input type="radio" id="feed" name="feed" value="Excellent and very confident" <?php echo $excellent;?>>Excellent and very confident<br>
							<input type="radio" id="feed" name="feed" value="Good and some what confident" <?php echo $Good;?>>Good and some what confident<br>
							<input type="radio" id="feed" name="feed" value="Average and still not sure" <?php echo $Average;?>>Average and still not sure<br>
							<input type="radio" id="feed" name="feed" value="Poor and i still consider cloud computing as a threat to my enterprise" <?php echo $Poor;?>>Poor and i still consider cloud computing as a threat to my enterprise	<br>						
						</div><br><br>
						<div>
							<label style="margin-left:100px;">Further suggestions(&comments)</label><br>
							<textarea name="comments"rows="6"cols="40" ><?php echo $row['comments'] ?></textarea>
						</div>
						<input type="submit" name="submit" value="Next" onclick="return validate();"/>
					</form>					
				</div><br><br>
					<div>
						<a href="ConfirmationFinish.php?id=<?php echo $id;?>"  style="float:left;margin-left:90px;"><input type="button" value="Back" /></a>					
						<input style="float:right;margin-right:20px;" type="button" name="submit" value="submit" />
					</div>	
			</div>									
			<div class="push"></div>			
		</div>
				
	</body>	
</html>	
	