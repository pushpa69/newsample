<?php 
ini_set('display_errors', 'off');
session_start();
	include('db.php');
	  $id=$_SESSION['uid'];
	 /*  echo $id;exit; */
	$pageactive = $_SERVER['REQUEST_URI'];
	if($pageactive == '/salford/trunk/index.php'){
		$home = active;
	}elseif ($pageactive == '/salford/trunk/ParticpantInfo.php?id='.$id){
		$ParticpantInfo = active;
	}elseif ($pageactive == '/salford/trunk/ProposedFramework.php?id='.$id){
		$ProposedFramework = active;
	}elseif ($pageactive == '/salford/trunk/Stage1CRS.php'){
		$Stage1CRS = active;
	}elseif ($pageactive == '/salford/trunk/Stage2CPS.php?userid='.$id){
		$Stage2CPS = active;
	}elseif ($pageactive == '/salford/trunk/Stage3CMS.php'){
		$Stage3CMS = active;
	}elseif($pageactive == '/salford/trunk/ConfirmationFinish.php?userid='.$id){
		$ConfirmationFinish = active;
	}
	if($id == ""){
?>
<html>

	<head>	
		<link rel="stylesheet" type="text/css" href="css/mystyle.css"></link>
		<link rel="stylesheet" type="text/css" href="css/reset.css"></link>
		<link rel="stylesheet" href="css/hover.css" media="all"></link>
	</head>
	<title>Cloud Framework Tool</title>
		<body>
			<div id="header">
				<div id="logo">
				<div class="container">
					<img src="images/logo.png"  style="width:209px;height:94px;">
					<h1 id="title">Cloud Framework Tool</h1>
				</div>
				</div>
			</div>
					<div id="navbar">
					<div class="container">
							<ul>
								<li><a href="index.php" class="<?php echo $home ?>">Login</a></li>
								
								
							</ul>
					</div>					
					</div>					
		<br><br><br>
</html>
<?php 
	}
	else
	{
?>		
<html>

	<head>	
		<link rel="stylesheet" type="text/css" href="css/mystyle.css"></link>
		<link rel="stylesheet" type="text/css" href="css/reset.css"></link>
		<link rel="stylesheet" href="css/hover.css" media="all"></link>
	</head>
	<title>Cloud Framework Tool</title>
		<body>
			<div id="header">
				<div id="logo">
				<div class="container">
					<img src="images/logo.png"  style="width:209px;height:94px;">
					<h1 id="title">Cloud Framework Tool</h1>
				</div>
				</div>
			</div>
					<div id="navbar">
					<div class="container">
							<ul>
								
								<li><a href="#" class="<?php echo $ParticpantInfo ?>">ParticpantInfo</a></li>
								<li><a href="#" class="<?php echo $ProposedFramework ?>">ProposedFramework</a></li>
								<li><a href="#" class="<?php echo $Stage1CRS ?>">Stage1CRS</a></li>
								<li><a href="#" class="<?php echo $Stage2CPS ?>">Stage2CPS</a></li>
								<li><a href="#" class="<?php echo $Stage3CMS ?>">Stage3CMS</a></li>
								<li><a href="#" class="<?php echo $ConfirmationFinish ?>">ConfirmationFinish</a></li>
								<li><a href="logout.php" class="<?php echo $Logout ?>">Logout</a></li>
							</ul>
					</div>					
					</div>					
		<br><br><br>
</html>	
<?php

	}
?>	