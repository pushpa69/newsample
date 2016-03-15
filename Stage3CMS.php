	<div class="wrapper">
			<?php include("menu.php");?>
			<div class="container">
			<div id="page6">
				<div>
					<h1>CLOUD MIGRATION STAGE: Focuses on migration.</h1><br>
				</div>
				<div>
					<form action="" method="post" name="myform" onsubmit="return validate();">
						<div>
							<p>1. Cloud service provider and contract: Attributes to look for CSP selection and negotiating cloud contracts</p><br>
							<input type="checkbox" id="" name="" value="">Assure that CSP is transparent in pricing when it comes to subscriptions, pay as you go models,upgrades, maintenance, exit cost and any other <span>liabilities.</span></input><br>
							<input type="checkbox" id="" name="" value="">Look for CSP who offers scalable and flexible solution, which help users to upscale and downscale services as per business needs.</input><br>
							<input type="checkbox" id="" name="" value="">Select CSP who has high security, interoperability, legal and privacy standards in practice to offer services.</input><br>
							<input type="checkbox" id="" name="" value="">Dictate cloud contract and negotiate your terms rather being on receiving side.</input><br><br>
						</div>
						<div>
							<p>2. Migration, Testing and Deployment: Exhibits preparedness of an enterprise leading to migration, testing and deployment of data.</p><br>
							<input type="checkbox" id="" name="" value="">Ensure all the data is migrated slowly and tested regulalry to avoid any complications during deployment.</input><br>
							<input type="checkbox" id="" name="" value="">Ensure high level of testing is done prior to going live to avoid issues like compatibility and rugged performance of apps and data</input><br>
							<input type="checkbox" id="" name="" value="">Ensure data migration is done using parallel approach and carried out by highly skilled data professionals.</input><br><br>
						</div>
						<div>
							<p>3. Monitoring and maintenance: Post migration stage which focuses on monitoring and maintenance of thedeployed system.</p><br>
							<input type="checkbox" id="" name="" value="">Ensure all terms in SLAs are being abide by CSP.</input><br>
							<input type="checkbox" id="" name="" value="">Monitor the performance of the over all system on a regular basis.</input><br>
							<input type="checkbox" id="" name="" value="">Monitor the performance of the over all system on a regular basis.</input><br>
							<input type="checkbox" id="" name="" value="">If performance goes down, enusreits been comprehensively maintained by the CSP as per the contract.</input><br>
						</div>
						<div>
							<input type="submit" value="submit" onclick="" style="margin-left:587px;">
						</div>
					</form>
				</div>
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
		
		

