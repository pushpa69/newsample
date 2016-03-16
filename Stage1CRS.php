<?php
	session_start();
	
	include('db.php');
	$id=$_SESSION['uid'];
	//echo $id;
	if(isset($_POST['submit']))
	{
		$size_enter=$_POST['size_of_enter'];
		$type_enter=$_POST['select_type'];
		$type_ser=$_POST['services'];
		$turnover=$_POST['turnover'];
		date_default_timezone_set("Asia/Calcutta");
		$date=date("Y-m-d h:i:s");
		//echo $size_enter;exit;
		$sql="update general_information set size_enterprise='$size_enter' ,type_enterprise='$type_enter',services_enterprise='$type_ser',turover_enterprise='$turnover',updated_at='$date',updated_by='$id' where gi_id=$id";
		
		mysql_query($sql);
		
		
	}
	$sql1=mysql_query("select * from general_information where gi_id=$id");
	
	$row=mysql_fetch_assoc($sql1);
	

?>
	<div class="wrapper">
			<?php include("menu.php");?>
		<div class="container">
			<div id="page4">
				<div>
					<h1>CLOUD REQUIREMENT STAGE: WHAT'S REQUIRED FOR YOUR ENTERPRISE.</h1><br><br>
					<h2>General Info About Enterprise.</h2><br>
				</div>
				<div>
					<form action="" method="POST" onsubmit="return validate();" name="myform" >
						<div>
							<label>1.Size of your enterprise.</label>
							<select name="size_of_enter" id="size_of_enter" onblur="myfunction();">
							<option value="default" >---select size of your enterprize---</option>
							<?php
                                if($row['size_enterprise']== 'micro')	{
											
							   ?>
								<option value="micro" selected>Micro ( 1-10) employees</option>
								<?php
								}
								else
								{?>
								<option value="micro" >Micro ( 1-10) employees</option>
								<?php
								}?>
								
								<?php
                                if($row['size_enterprise']== 'small')	{
											
							   ?>
								<option value="small" selected>Small ( 11-50) employees</option>
								<?php
								}
								else
								{?>
							<option value="small" >Small ( 11-50) employees</option>
							<?php
								}?>
								<?php
                                if($row['size_enterprise']== 'medium')	{
											
							   ?>
								<option value="medium" selected>Medium ( 51-250) employees</option>
								<?php
								}
								else
								{?>
							<option value="medium" >Medium ( 51-250) employees</option>
							<?php
								}?>
							</select><br><br>
						</div><br>
						<div>
							<label>2.Type of enterprise are you?</label>
							<select name="select_type" id="select_type" onblur="myfunction();">
								<option value="default" >---select type of enterprise---</option>
								<?php
                                if($row['type_enterprise']== 'private')
									{
											
							   ?>
								<option value="private" selected>Private</option>
								<?php
								}
								else
								{?>
								
								<option value="private" >Private</option>
								<?php
								}
                                if($row['type_enterprise']== 'public')
									{
											
							   ?>
								<option value="public" selected>Public</option>
								<?php
								}
								else
								{?>
							<option value="public" >Public</option>
								<?php
								}?>
								<br><br>
							</select><br><br><br>
						</div>
						<div>
							<label>3. Type of service(s) is offered by your enterprise.</label>
							<input style="margin-left:138px; width:200px;" 
							type="text"
							id="services" 
							name="services" value="<?php if(isset($row['services_enterprise'])){
							echo $row['services_enterprise'];
						}?>" onblur="myfunction();"/><br>
						</div><br><br>
						<div>
							<label>4. Turnover of your enterprise.</label>
							<select name="turnover" id="turnover" onblur="myfunction();">
								<option value="default" >---select turnover of your enterprise---</option>
								<?php
                                if($row['turover_enterprise']== 'micro')
									{
											
							   ?>
								<option value="micro" selected>Less than 2M£</option>
								<?php
								}
								else
								{?>
							<option value="micro" >Less than 2M£</option>
							<?php
								}
                                if($row['turover_enterprise']== 'small')
									{
											
							   ?>
								<option value="small" selected>Less than 10M£</option>
								<?php
								}
								else
								{?>
							
								
							<option value="small" >Less than 10M£</option>
								<?php
								}
                                if($row['turover_enterprise']== 'medium')
									{
											
							   ?>
								<option value="medium" selected>Less than 43M£</option>
								<?php
								}
								else
								{
									?>
							<option value="medium" >Less than 10M£</option>
							<?php
							}?>
							</select><br><br>
						</div><br>
						<div>
							<input type="submit" 
							value="submit"  style="margin-left:587px;" name="submit"/>
							<input type="hidden" name="hid" id="hid"   value="<?php if(isset($row['gi_id'])){
							echo $row['gi_id'];
						}?>"/>
							
						</div>
					</form>
				</div>
			</div><br><br>
			<div>
				<a href="Stage1CRS.php"  style="float:left;margin-left:20px;"><button>Back</button></a>			
				<a href="Stage3CMS.php" style="float:right;margin-left:20px;"><button onclick="return validate();">Next</button></a>
			</div>
		</div>	
		<div class="push"></div>			
	</div>	<br>		
	<?php include("footer.php");?>	
			<script>
			function validate()
			{
				//alert("ok");
				 var size_of_enter=document.myform.size_of_enter.value;
				 var select_type=document.myform.select_type.value;
				 var services=document.myform.services.value;
				 var turnover=document.myform.turnover.value;
				 var fexp=/[a-z]/;
				if(size_of_enter == "default")
				{
					//alert("ok");
					document.getElementById("size_of_enter").style.border="2px solid red";
					return false;
				} 
				if(select_type == "default")
				{
					//alert("ok");
					document.getElementById("select_type").style.border="2px solid red";
					return false;
				} 
				if(!services.match(fexp))
				{
					document.getElementById("services").style.border="1px solid red";
					document.myform.services.focus();
					return false;
				}
				if(turnover == "default")
				{
					//alert("ok");
					document.getElementById("turnover").style.border="2px solid red";
					return false;
				} 
				
			}
			function myfunction()
			{
				document.getElementById("size_of_enter").style.border="";
					document.getElementById("select_type").style.border="";
					document.getElementById("services").style.border="";
					document.getElementById("turnover").style.border="";
			}
		</script>
		
