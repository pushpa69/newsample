<?php
include('db.php');
include('menu.php');
$id=$_SESSION['uid'];
//echo $id;exit;
	if(isset($_POST['submit']))
	{
		$hid=$_POST['hid'];
		
		$feed=$_POST['feed'];
		$coment=$_POST['coment'];
		//print_r($_POST);
		if($hid == "")
		{
		$sql="INSERT INTO feedback (fb_u_id,feedback_options,comments) VALUES ('$id','$feed','$coment')";
		
		}
		else{
		$sql="UPDATE feedback SET feedback_options='$feed',comments='$coment' WHERE fb_u_id=$hid";
		}
		mysql_query($sql);
		echo "<script>";
					echo " alert('Thanks for your feedback.');</script>";
	}
	$sql=mysql_query("select * from feedback where fb_u_id=$id");
	$row=mysql_fetch_assoc($sql);
	//print_r($row);exit;
	$excellent="";
	$good="";
	$avg="";
	$poor="";
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
		//echo $poor;exit;
	}
?>
<html>
	<head>
	<style>
		#page8{
			width:800px;
			background-color: skyblue;
			border-radius: 10px;
			float:left;
			padding:24px 182px 45px 90px;
			margin-right:1000px;
			margin-bottom:30px;
		}
		#page8 h2{
			text-align:center;
			font-size:23px;
			width:492px;
		}
		#page8 input,textarea{
			margin-left:100px;
		}
		form {width:600px;margin:0 auto;}
	</style>
	</head>
	<body style="background-color:FloralWhite">
		<div class="wrapper">
			
			<div class="container">
				<div id="page8">
					<form action="" method="POST">
						<div>
							<h2 style="font-size:22px;color:blue">Overal Efficiency Of The Framework</h2><br><br>
						</div>
						<div>
							<input type="radio" id="feed" name="feed" value="Excellent and very confident" <?php if(isset($excellent)){ echo $excellent;}?>>Excellent and very confident<br>
							<input type="radio" id="feed" name="feed" value="Good and some what confident" <?php if(isset($good)){ echo $good; }?>>Good and some what confident<br>
							<input type="radio" id="feed" name="feed" value="Average and still not sure" <?php if(isset($avg)){ echo $avg; }?>>Average and still not sure<br>
							<input type="radio" id="feed" name="feed" value="Poor and i still consider cloud computing as a threat to my enterprise" <?php if(isset($poor)){ echo $poor; }?>>Poor and i still consider cloud computing as a threat to my enterprise	<br>						
						</div><br><br>
						<div>
							<label style="margin-left:100px;">Further suggestions(&comments)</label><br>
							<p style="margin-top:20px;"><textarea rows="6"cols="40" name="coment"><?php if(isset($row['comments'])){ echo $row['comments'];}?></textarea></p>
						</div>
						<div style="margin-top:40px;">
						
						<input type="submit" name="submit" value="Submit" onclick="return validate();"/>
						<input type="hidden" name="hid" value="<?php if(isset($row['fb_u_id'])){ echo $row['fb_u_id'];} ?>" />
					</form>					
				</div>				
			</div>
									
			<div class="push"></div>			
				<br>
				<div>
					<a href="ConfirmationFinish.php?userid=<?php echo $id;?>" style="float:left;margin-left:20px;"><input id="button" type="button" value="Back"></a>			
					
				</div>
		</div>
	</body>	
</html>	
	
	<?php
	include('fooetr.php');
	?>