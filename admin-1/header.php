<?php 
	include('db.php');
	// $sql=mysql_query('SELECT * FROM adminlogin ');
	// $row=mysql_fetch_array($sql);
	// $_SESSION['uid']=$row['a_id'];
	// $_SESSION['fname']=$row['firstname'];
	// $_SESSION['lname']=$row['lastname'];
	if(!isset($_SESSION['uid'])){
		 header('location:index.php');
	 }
	 
	$pageactive = $_SERVER['REQUEST_URI'];
	
	if($pageactive == '/salford/trunk/admin-1/user.php'){
		if(strpos($pageactive,'user.php')!=false){
		$user= active;
		}
	}elseif ($pageactive == '/salford/trunk/admin-1/report.php'){
		if(strpos($pageactive,'report.php')!=false){
		$report = active;
		}
	}elseif($pageactive == '/salford/trunk/admin-1/registration.php'){
		if(strpos($pageactive,'registration.php')!=false){
		$user= active;
		}
	}elseif($pageactive == '/salford/trunk/admin-1/editprofile.php?'.$_SERVER['QUERY_STRING']){
		if(strpos($pageactive,'editprofile.php')!=false){
		$user= active;
		}
	}else if ($pageactive == '/salford/trunk/admin-1/viewreport.php?'.$_SERVER['QUERY_STRING']){
		if(strpos($pageactive,'viewreport.php')!=false){
		$report = active;
		}
	}
?>
<html>
	<body>
			<div id="logo1">
				<img src="images/logo.png" alt="logo" style="width:150px;height:90px;">
			</div>
			<div id ="menu1" >
				<h1 style="text-align:center;">Cloud Framework Tool</h1>
				<h2 id="adlogo">ADMIN</h2>
			</div>			
			<div id="menu">
				<ul>
				  <li><a class="<?php echo $user ?>" href="user.php">User Management</a></li>
				  <li><a class="<?php echo $report ?>" href="report.php">Report</a></li>
				  <li id="AdminName"><?php echo 'Welcome '.' '.$_SESSION['fname'].' '.$_SESSION['lname'];?></li>
				 <li id="logout"><a title="logout" href="logout.php"> <img style="width:40px;height:40px; margin-top:-8px;"src='images/logout.png' alt="logout"/></a></li>	
				</ul>				
			</div>
	</body>		
</html>
