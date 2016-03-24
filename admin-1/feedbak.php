<html>
	<head>
	<link rel="stylesheet" type="text/css" href="user style.css"></link>
	</head>
	<body id="body">
		<?php include("header.php"); ?>
		<div id="feed">
			<h2 style="color:brown;">Framework Rating</h2>
			<div>
				<p style="color:darkgreen;">feedback:</p>
				<?php 
					$sql=mysql_query('SELECT * FROM feedback WHERE fb_u_id="'.$_GET['userid'].'"');
					$row=mysql_fetch_array($sql);
					echo $row['feedback_options'];
				?>
			</div>
			<div>
				<p style="color:darkgreen;">Comments:</p>
				<?php 
				    // $sql=mysql_query('SELECT * FROM feedback WHERE fb_u_id="'.$_GET['userid'].'"');
					// $row=mysql_fetch_array($sql);
					echo $row['comments'];
				?>	
			</div>
		</div>
		<div>
			<footer>  
				<p style="text-align:center;"> University Of Salford</p>
			</footer>
		</div>
	</body>
</html>	