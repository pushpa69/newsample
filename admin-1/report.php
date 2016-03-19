<html>
	<head>
	<link rel="stylesheet" type="text/css" href="user style.css"></link>
	</head>
	<body id="body">
		<?php 
		include("salford1.php");
		$sql=mysql_query('SELECT * FROM users');	
		?>
		<h1 id ="report">Report</h1>				
			<div id="table">
				<table   cellspacing="0">
				  <tr>
					<th> Serial.no</td>
					<th id="width">First name</td>
					<th id="width">Last name</td>		
					<th id="width">Email</td>
					<th>View Report</td>
				  </tr>
				  <?php while($row=mysql_fetch_array($sql)){ ?>
				  <tr>
					<td><?php echo $row['u_id'];?></td>
					<td><?php echo $row['firstname'];?></td>
					<td><?php echo $row['lastname'];?></td>		
					<td><?php echo $row['email'];?></td>
					<td><input type="button"value="View Report"/></td>
				  </tr>	
					<?php } ?>
				</table>
			</div>
	</body>
		<footer>  
		<p style="text-align:center;">Copyright @2016	<a href="http://aapthitech.com">Aapthi Technologies,</a>an SBU of Yalavarthi Software Solutions pvt Ltd.</p>
	</footer>

		&nbsp
</html>
