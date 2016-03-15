<?php 
ini_set('display_errors', 'off');
	$pageactive = $_SERVER['REQUEST_URI'];	
	if($pageactive == '/vijay/project3/index.php'){
		$home = active;
	}elseif ($pageactive == '/vijay/project3/ParticpantInfo.php'){
		$ParticpantInfo = active;
	}elseif ($pageactive == '/vijay/project3/ProposedFramework.php'){
		$ProposedFramework = active;
	}elseif ($pageactive == '/vijay/project3/Stage1CRS.php'){
		$Stage1CRS = active;
	}elseif ($pageactive == '/vijay/project3/Stage2CPS.php'){
		$Stage2CPS = active;
	}elseif ($pageactive == '/vijay/project3/Stage3CMS.php'){
		$Stage3CMS = active;
	}elseif($pageactive == '/vijay/project3/ConfirmationFinish.php'){
		$ConfirmationFinish = active;
	}
?>
<html>
	<head>	
		<link rel="stylesheet" type="text/css" href="css/mystyle.css"></link>
		<link rel="stylesheet" type="text/css" href="css/reset.css"></link>
		<link rel="stylesheet" href="css/hover.css" media="all"></link>
	</head>
		<body>
			<div id="header">
				<div id="logo">
					<img src="images/logo.png"  style="width:209px;height:94px;">
					<h1 id="title">Cloud Framework Tool</h1>
				</div>
			</div>
					<div id="navbar">
							<ul>
								<li><a href="index.php" class="<?php echo $home ?>">Login</a></li>
								<li><a href="ParticpantInfo.php" class="<?php echo $ParticpantInfo ?>">ParticpantInfo</a></li>
								<li><a href="ProposedFramework.php" class="<?php echo $ProposedFramework ?>">ProposedFramework</a></li>
								<li><a href="Stage1CRS.php" class="<?php echo $Stage1CRS ?>">Stage1CRS</a></li>
								<li><a href="Stage2CPS.php" class="<?php echo $Stage2CPS ?>">Stage2CPS</a></li>
								<li><a href="Stage3CMS.php" class="<?php echo $Stage3CMS ?>">Stage3CMS</a></li>
								<li><a href="ConfirmationFinish.php" class="<?php echo $ConfirmationFinish ?>">ConfirmationFinish</a></li>
							</ul>
					</div>					
		</body><br><br><br>		
</html>	