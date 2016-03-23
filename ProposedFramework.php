<?php 
	session_start();
	if(isset($_SESSION) && $_SESSION['uid']!=''){

?>
<html>
	<head>	
		<link rel="stylesheet" type="text/css" href="css/mystyle.css"></link>
		<link rel="stylesheet" type="text/css" href="css/reset.css"></link>
	</head>
		<body>
	<div class="wrapper">
			<?php include("menu.php");?>
		<div class="container">
			<div id="page3">
				<div>
					<p style="color:blue;margin-bottom:20px;">Proposed Framework</p>
				</div>
				<div id="figure">
					<img style="margin-left:136px;"src="images/Framework.png" alt="framework">
				</div>
			</div>
			<div >
			<a style="float:left;margin-left:20px;" href="ParticpantInfo.php?id=<?php echo $id;?>"><button id="button">Back</button></a>		
			<a style="float:right;margin-right:20px;"  href="Stage1CRS.php"><button  id="button">Next</button></a>
			</div>	
			</body>
		</div>
		<div class="push"></div>	
	</div>
		<?php include("footer.php");?>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>