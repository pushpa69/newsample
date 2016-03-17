<?php
	session_start();
	include('db.php');
	  $id=$_SESSION['uid'];
	//print_r($_SESSION['uid']);exit;
	//echo $id;exit;  
	//$id=$_GET['id'];
	//echo $id;exit;
	if(isset($_POST['submit']))
	{
		$hid=$_POST['hid'];
		//echo $hid;exit;
		$name_org=$_POST['name_org'];
		$desig=$_POST['desg'];
		$experience=$_POST['experience'];
		$other_info=$_POST['other_info'];
		//print_r($_POST);exit;
		//echo $other_info;exit;
		date_default_timezone_set("Asia/Calcutta");
		$date=date("Y-m-d h:i:s");
		// echo $name_org;exit;
		 if($_POST['hid']=="")
		{ 
		 $sql="INSERT INTO general_information (gi_u_id, name_oraganization,designation, expereince, other_info, size_enterprise,
		type_enterprise, services_enterprise, 	turover_enterprise, updated_at, updated_by,created_at)	VALUES ('".$id."', '".$name_org."','".$desig."', '".$experience."', '".$other_info."', '', '', '', '', 	'', '', '','".$date."')"; 
			
		 } 
		 else
		{
			$sql="update general_information set name_oraganization='$name_org' ,designation='$desig',expereince='$experience',other_info='$other_info'updated_at='$date',updated_by='$id', where gi_id=$hid";
			
		} 
		
		mysql_query($sql);
		header("location:Stage1CRS.php");
		
	}
	 $res=mysql_query("select * from general_information where gi_id='".$id."'");
		//print_r($res);exit;
		
		$row=mysql_fetch_assoc($res);
		
		//print_r($row);exit;
		//$row['gi_id'];
		
		
?>
<body style="background-color:FloralWhite">
	<div class="wrapper">
		<?php include("menu.php");?>
		<div class="container">
			<div id="page2">
				<form action="" method="POST">
					<div>
						<h2>General Information About Organization(optional)</h2><br><br>
					</div>
					<div>
						<label>1.Name Of The Organization(optional)</label>
						<input type="text" id="" name="name_org" 
						value="<?php if(isset($row['name_oraganization'])){
							echo $row['name_oraganization'];
						}?>" size="30" />
					</div>
					<div>
						<label>2.Position Or Designation(optional)</label>
						<input type="text" id="" name="desg" value="<?php if(isset($row['designation'])){
							echo $row['designation'];
						}?>" size="30"/>
					</div>
					<div>
						<label>3.Any Experience in IT(optional)</label>
						<input type="text" id="" name="experience" value="<?php if(isset($row['expereince'])){
							echo $row['expereince'];
						}?>" size="30"/>
					</div>
					<div>
						<label>4.Any of Other Information(optional)</label>
						<input type="text" id="" name="other_info" value="<?php if(isset($row['other_info'])){
							echo $row['other_info'];
						}?>" size="30"/>
					</div>
					<div>
						<input type="submit" id="button" onclick="" name="submit" value="submit"/>
					</div>
					
						<input type="hidden" name="hid" id="hid"   value="<?php if(isset($row['gi_id'])){
							echo $row['gi_id'];
						}?>"/>
									
				</form>				
			</div><br>
			<div>
				<a href="Stage1CRS.php"  style="float:left;margin-left:20px;"><button>Back</button></a>			
				<a href="Stage3CMS.php" style="float:right;margin-left:20px;"><button onclick="return validate();">Next</button></a>
			</div>
		</div><br><br>
					
		<div class="push"></div>			
	</div>	<br>		
	<?php include("footer.php");?>
	
