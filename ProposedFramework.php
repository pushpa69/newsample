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
			<?php include("menu.php");?>
			<div id="page3">
				<div>
					<p style="color:blue;margin-bottom:20px;">Proposed Framework</p>
				</div>
				<div id="figure">
					<img src="images/Framework.png" alt="framework">
				</div>
			</div>
			<div style="width:1000px;margin:0 auto;">
			<div style="text-align:left;margin-left:20px;">
			<a href="ParticpantInfo.php?id=<?php echo $id;?>"><button>Back</button></a>
			</div>
			<div style="text-align:right;margin-right:20px;">
			<a href="Stage1CRS.php"><button>Next</button></a>
			</div>
			</div>			
		</body>
		<?php include("footer.php");?>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>