<html>
	<head>
	<link rel="stylesheet" type="text/css" href="user style.css"></link>
	</head>
	<body id="body">
		<?php 
		include("header.php");
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
					<td><a href="viewreport.php?userid=<?php echo $row['u_id'];?>" ><button>View Report</button></a>
						<a href="feedbak.php?userid=<?php echo $row['u_id'];?>" ><button>Feed Back</button></a>
					</td>
				  </tr>	
					<?php } ?>
				</table>
			</div>
	</body>
		<footer>  
		<p style="text-align:center;">University of Salford</p>
	</footer>

		&nbsp
</html>
