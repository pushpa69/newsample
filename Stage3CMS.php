<?php
session_start();
	include('db.php');
	$questionArray[0][0]='1.Cloud service provider and contract: Attributes to look for CSP selection and negotiating cloud contracts';
	$questionArray[0][1]='Assure that CSP is transparent in pricing when it comes to subscriptions, pay as you go models,upgrades, maintenance, exit cost and any other <span>liabilities.</span>';
	$questionArray[0][2]='Look for CSP who offers scalable and flexible solution, which help users to upscale and downscale services as per business needs.';
	$questionArray[0][3]='Select CSP who has high security, interoperability, legal and privacy standards in practice to offer services.';
	$questionArray[0][4]='Dictate cloud contract and negotiate your terms rather being on receiving side.';
	$questionArray[1][0]='2. Migration, Testing and Deployment: Exhibits preparedness of an enterprise leading to migration, testing and deployment of data.';
	$questionArray[1][1]='Ensure all the data is migrated slowly and tested regulalry to avoid any complications during deployment.';
	$questionArray[1][2]='Ensure high level of testing is done prior to going live to avoid issues like compatibility and rugged performance of apps and data';
	$questionArray[1][3]='Ensure data migration is done using parallel approach and carried out by highly skilled data professionals.';
	$questionArray[2][0]='3. Monitoring and maintenance: Post migration stage which focuses on monitoring and maintenance of thedeployed system.';
	$questionArray[2][1]='Ensure all terms in SLAs are being abide by CSP.';
	$questionArray[2][2]='Monitor the performance of the over all system on a regular basis.';
	$questionArray[2][3]='Monitor the performance of the over all system on a regular basis.';
	$questionArray[2][4]='If performance goes down, enusreits been comprehensively maintained by the CSP as per the contract.';
	$id=$_SESSION['uid'];
	$stage='3';
	$an="";
	
	if(isset($_POST['submit']))
	{
		//print_r($_POST);
		$hid=$_POST['hid'];
		//echo $hid;
		//die;
		/* if($hid == ""){ */
		if(count($_POST != 0))
		{
			foreach($_POST as $qno=>$q)
			{
				if($q != 'submit')
				{
					foreach($q as $a)
					{
						$an .= $a.',';
					}
					$fAns = rtrim($an,',');
					  $query="delete from q_answers where con_u_id='$id'";
					$query="INSERT INTO q_answers ( con_u_id, stage, question_id, q_answers, q_unansewred, created_at, status) VALUES ( '".$id."', '".$stage."', '".$qno."', '".$fAns."', '', 'NOW()', '1')"; 
					  
					mysql_query($query);
					$an = "";
				}
			}
		}
		
	}
	$sql=mysql_query("select * from q_answers where con_u_id='$id'");
	//print_r($sql);exit;
	$focus=array();
	while($row=mysql_fetch_assoc($sql))
	{
		//echo $row['con_u_id'];exit;
		 $focus[]=explode(",",$row['q_answers']);
	}
	 foreach($focus as $f)
	{
		// print_r($f);echo "<br>";
	}  
	?>
	<div class="wrapper">
			<?php include("menu.php");?>
		<div class="container">
			<div id="page6">
				<div>
					<h1>CLOUD MIGRATION STAGE: Focuses on migration.</h1><br>
				</div>
				<div>
					<form action="" method="POST" name="myform" onsubmit="return validate();">
						<?php foreach($questionArray as $key=>$val)
						{
							?>
						<div>
							<?php 
								foreach($val as $key1=>$val1)
								{
									if($key1==0){
							?>
							<p><?php echo $val1;?></p><br>
									<?php }else { 
										$u ='_';
									$optn_name='Q'.($key).$u.($key1);
									
									?>
							<input type="checkbox" id="" name="Q<?php echo $key?>[]" value="Q<?php echo $key;?>_<?php echo $key1?>" <?php  if(in_array($optn_name,$focus[$key])) { ?> checked="checked" <?php  }?>/><?php echo $val1;?>
							<br>
							<?php }}?>
						</div>
						<?php }?>	
						<div>
						<input type="hidden" name="hid" id="hid"   value="<?php  if(isset($row['con_u_id'])){
							echo $row['con_u_id']; 
						} ?>"/>	
							<input type="submit" value="submit" name="submit" onclick="" style="margin-left:587px;">
							
						</div>
					</form>
				</div><br>
			</div><br><br>
			<div>
				<a href="Stage2CPS.php" style="float:left;margin-left:20px;"><button>Back</button></a>			
				<a href="ConfirmationFinish.php" style="float:right;margin-right:20px;"><button onclick="return validate()">Next</button></a>
			</div>		
		</div>
		<div class="push"></div>	
	</div>	<br><br>	
<?php include("footer.php");?>
			<script language="javascript">
			function validate()
			{
				var chks = document.getElementsByTagName('input');
				var hasChecked = false;
			for (var i = 0; i < chks.length; i++)
			{
				if (chks[i].checked)
				{
				hasChecked = true;
				
				break;
				}
				
			}
				if (hasChecked == false)
				{
				alert("Please answer at least one question.");
				return false;
				}
			return true;
			window.location.href = 'http://localhost/salford/trunk/ConfirmationFinish.php';
			}
			</script>
		
		

