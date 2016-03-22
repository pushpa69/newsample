<?php 
	session_start();
	if(isset($_SESSION) && $_SESSION['uid']!=''){

?>
<?php
	include('db.php');
	  $id=$_SESSION['uid'];
	  //echo $id;exit;
	if(isset($_POST['submit']))
	{
		$hid=$_POST['hid'];
		//echo $hid;exit;
		$name_org=$_POST['name_org'];
		$desig=$_POST['desg'];
		$experience=$_POST['experience'];
		$other_info=$_POST['other_info'];
		date_default_timezone_set("Asia/Calcutta");
		$date=date("Y-m-d h:i:s");
		// echo $name_org;exit;
		 if($_POST['hid'] == "")
		{ 
	
		 $sql="INSERT INTO general_information (gi_u_id, name_oraganization,designation, expereince, other_info,  updated_at, updated_by,created_at)	VALUES ('','".$id."', '".$name_org."','".$desig."', '".$experience."', '".$other_info."', '".$date."')"; 
			//echo'pre';print_r($sql);
		 } 
		 else
		{
			$sql="UPDATE general_information SET gi_u_id='".$id."',name_oraganization='".$name_org."',designation='".$desig."',expereince='".$experience."',other_info='".$other_info."',updated_at='".$date."',updated_by='".$id."' WHERE gi_u_id=$hid";
			
		} 
		
		mysql_query($sql);
		header("location:ProposedFramework.php?id=$id");
		
	}
	 $res=mysql_query("select * from general_information where gi_u_id=$id");
		//print_r($res);exit;
		
	$row=mysql_fetch_assoc($res);
		

?>
<head>
	<style>
		label {color:purple;
			}
			h2 {
				color:blue;
			}
	</style>
</head>
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
						<label style="font-weight:bold;font-size:14px;">1.Name Of The Organization(optional)</label>
						<input type="text" id="" name="name_org" 
						value="<?php if(isset($row['name_oraganization'])){
							echo $row['name_oraganization'];
						}?>" size="30" />
					</div>
					<div>
						<label style="font-weight:bold;font-size:14px;">2.Position Or Designation(optional)</label>
						<input type="text" id="" name="desg" value="<?php if(isset($row['designation'])){
							echo $row['designation'];
						}?>" size="30"/>
					</div>
					<div>
						<label style="font-weight:bold;font-size:14px;">3.Any Experience in IT(optional)</label>
						<input type="text" id="" name="experience" value="<?php if(isset($row['expereince'])){
							echo $row['expereince'];
						}?>" size="30"/>
					</div>
					<div>
						<label style="font-weight:bold;font-size:14px;">4.Any of Other Information(optional)</label>
						<input type="text" id="" name="other_info" value="<?php if(isset($row['other_info'])){
							echo $row['other_info'];
						}?>" size="30"/>
					</div>
					<div>
						<!--<input type="submit" id="button" onclick="" name="submit" value="submit"/>-->
					</div>					
						<input type="hidden" name="hid" id="hid"   value="<?php if(isset($row['gi_id'])){
							echo $row['gi_id'];
						}?>"/>									
							
			</div><br>
			<div>	
				<a href="ProposedFramework.php" style="float:right;margin-left:20px;"><input type="submit" name="submit" value="Next" onclick="return validate();"/></a>
			</div>
			</form>	
		</div><br><br>
					
		<div class="push"></div>			
	</div>	<br>		
	<?php include("footer.php");
	}
	else{
		header('location:index.php');
	}
	
	?>
	
