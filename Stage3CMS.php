<?php
session_start();
if(isset($_SESSION) && $_SESSION['uid']!=''){
	include('db.php');
	$questionArray[17][0]='<span style="text-decoration:underline;margin-left:0px;">1.Cloud service provider and contract:</span> Attributes to look for CSP selection and negotiating cloud contracts';
	$questionArray[17][1]='Assure that CSP is transparent in pricing when it comes to subscriptions, pay as you go models,upgrades, maintenance, exit cost and <span>any other liabilities.</span>';
	$questionArray[17][2]='Look for CSP who offers scalable and flexible solution, which help users to upscale and downscale services as per business needs.';
	$questionArray[17][3]='Select CSP who has high security, interoperability, legal and privacy standards in practice to offer services.';
	$questionArray[17][4]='Dictate cloud contract and negotiate your terms rather being on receiving side.';
	$questionArray[18][0]='<span style="text-decoration:underline;margin-left:0px;">2. Migration, Testing and Deployment:</span> Exhibits preparedness of an enterprise leading to migration, testing and deployment of data.';
	$questionArray[18][1]='Ensure all the data is migrated slowly and tested regulalry to avoid any complications during deployment.';
	$questionArray[18][2]='Ensure high level of testing is done prior to going live to avoid issues like compatibility and rugged performance of apps and data';
	$questionArray[18][3]='Ensure data migration is done using parallel approach and carried out by highly skilled data professionals.';
	$questionArray[19][0]='<span style="text-decoration:underline;margin-left:0px;">3. Monitoring and maintenance:</span> Post migration stage which focuses on monitoring and maintenance of thedeployed system.';
	$questionArray[19][1]='Ensure all terms in SLAs are being abide by CSP.';
	$questionArray[19][2]='Monitor the performance of the over all system on a regular basis.';
	$questionArray[19][3]='Monitor the performance of the over all system on a regular basis.';
	$questionArray[19][4]='If performance goes down, enusreits been comprehensively maintained by the CSP as per the contract.';
	$id=$_SESSION['uid'];
	$stage='3';
	$an="";
	
	if(isset($_POST['submit']))
	{	//tprint_r($_POST());exi;	
		if(count($_POST != 0))
		{
			//echo '<pre>'; print_r($_POST());
			$query="DELETE FROM q_answers WHERE con_u_id=$id AND stage=3";
					  mysql_query($query);
			foreach($_POST as $qno=>$q)
			{
				//print_r($qNo);
				//print_r($q);
				if($qno != 'submit')
				{
					foreach($q as $a)
					{
						$an .= $a.',';
					}
					$fAns = rtrim($an,',');
					  
					$query="INSERT INTO q_answers (con_u_id, stage, question_id, q_answers,  created_at, status) VALUES ( '".$id."', '".$stage."', '".$qno."', '".$fAns."',  NOW(), '1')"; 
					  
					mysql_query($query);
					$an = "";
					header("location:ConfirmationFinish.php?userid=$id");
				}
			}
		}
		
	}
	$sql=mysql_query("select * from q_answers where con_u_id='$id' and stage=3");
	//print_r($sql);exit;
	$focus=array();
	while($row=mysql_fetch_assoc($sql))
	{
		//echo $row['con_u_id'];exit;
		 $focus[$row['question_id']]=explode(",",$row['q_answers']);
	}
	 foreach($focus as $f)
	{
		// print_r($f);echo "<br>";
	}  
	//echo "<pre>";
	//print_r($focus);
	?>
	<div class="wrapper">
			<?php include("menu.php");?>
		<div class="container">
			<div id="page6">
				<div>
					<h1 style="color:blue;">CLOUD MIGRATION STAGE: Focuses on migration.</h1><br>
				</div>
				<div>
					<form action="" method="POST" name="myform" onsubmit="return validate();">
						<?php foreach($questionArray as $key=>$val)
						{
							//echo $key;
							?>
						<div>
							<?php 
								foreach($val as $key1=>$val1)
								{
									if($key1==0){
							?>
							<p style="font-weight:bold;margin-left:140px;"><?php echo $val1;?></p><br>
									<?php 		}
									else { 
										$u ='_';
									$optn_name='Q'.($key).$u.($key1);
									//echo $optn_name;
									
									?>
							<p style="margin-left:70px;"><input type="checkbox" id="" name="Q<?php echo $key?>[]" value="Q<?php echo $key;?>_<?php echo $key1?>" <?php  if(in_array($optn_name,$focus['Q'.$key])) { ?> checked="checked"  <?php  } else { ?><?php }?>/><?php /*if(in_array($optn_name,$focus[$key])) { */ echo $val1; /*}*/?></p>
							
							<?php 		}
								}?>
						</div>
				<?php	} ?>	
						<div>
							
							
							
						</div>
					
				</div><br>
			</div><br><br>
			<div>
				<a href="Stage2CPS.php?userid=<?php echo $id;?>" style="float:left;margin-left:20px;text-decoration:none;"><input type="button" value="Back"></a>			
				<a href="ConfirmationFinish.php" style="float:right;margin-right:20px;text-decoration:none;"><button type="submit" name="submit" style="margin-left:587px;">Next</button></a>
			</div>
		</form>			
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
		
	<?php
}
else{
	header('location:index.php');
}

?>	

