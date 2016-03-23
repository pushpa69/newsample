<?php
include('db.php');
include('menu.php');
$id=$_SESSION['uid'];
//echo $id;exit;
	if(isset($_POST['submit']))
	{
		$feed=$_POST['feed'];
		$coment=$_POST['coment'];
		//print_r($_POST);
		$sql="INSERT INTO feedback (fb_u_id,feedback_options,comments) VALUES ('$id','$feed','$coment')";
		mysql_query($sql);
	}
	$sql=mysql_query("select * from feedback where id=$id");
	$row=mysql_fetch_assoc($sql);
	if($row['feedback_options'] == 'Excellent and very confident')
	{
		$excellent="checked";
	}elseif($row['feedback_options'] == 'Good and some what confident' )
	{
		$good="checked";
	}elseif($row['feedback_options'] == 'Average and still not sure')
	{
		$avg="checked";
	}
	elseif($row['feedback_options'] == 'Poor and i still consider cloud computing as a threat to my enterprise')
	{
		$poor="checked";
	}
?>
<html>
	<head>
	<style>
		#page8{
			width:560px;
			background-color: skyblue;
			border-radius: 10px;
			float:left;
			padding:24px 182px 45px 90px;
			margin-left:256px;
		}
		#page8 h2{
			text-align:center;
			font-size:23px;
			width:492px;
		}
		#page8 input,textarea{
			margin-left:100px;
		}
	</style>
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
							<textarea rows="6"cols="40" name="coment"></textarea>
						</div>
						<input type="submit" name="submit" value="Next" onclick="return validate();"/>
					</form>					
				</div>				
			</div>
									
			<div class="push"></div>			
		</div><br>
				<div>
					<a style="float:left;margin-left:20px;"><input type="button" value="Back" /></a>			
					<span style="float:right">
					</span>
				</div>	
	</body>	
</html>	
	
	