<?php 
	include('db.php');
	$sql=mysql_query('SELECT * FROM adminlogin ');
	$row=mysql_fetch_array($sql);
	$_SESSION['uid']=$row['a_id'];
	$_SESSION['fname']=$row['firstname'];
	$_SESSION['lname']=$row['lastname'];
?>
<html>
	<body>
			<div id="logo1">
				<img src="logo.png" alt="logo" style="width:150px;height:90px;">
			</div>
			<div id ="menu1" >
				<h1 style="text-align:center;">Cloud Framework Tool</h1>
				<h2 id="admin">Admin<h1>
			</div>
			
			<div id="menu">
				<ul>
				  <li><a href="user.php">User Management</a></li>
				  <li><a href="report.php">Report</a></li>
				  <li id="AdminName"><?php echo 'Welcome '.' '.$_SESSION['fname'].' '.$_SESSION['lname'];?></li>
				  <li style="float:right;margin-right:20px;border:1px solid DarkSlateGray;border-radius:10px;  " ><a href="logout.php">logout</a></li>	
				</ul>				
			</div>
	</body>		
</html>
