<?php
	session_start();
	if(isset($_SESSION) && $_SESSION['uid']!=''){
	$questionArray[0][0]='<span style="text-decoration:underline;margin-left:0px;">1. Feasibility Study:</span> Financial and technical suitability 	for	an enterprise to migrate on cloud computing.';

	$questionArray[0][1]='Study of an existing data and applications to get desired output by embracing cloud solution.';
	$questionArray[0][2]='Availability of supporting hardware for proposed cloud solution';
	$questionArray[0][3]='Detailed carry out feasibility analysis of an enterprise.outline of cost/benefit model  of an enterprise.';
	$questionArray[0][4]="Recommended tools like maturity, technical and business feasibility tools to carry out feasibility analysis of an enterprise.";
	$questionArray[100][0]='2. Assessing Enterprise readiness: Factors comprising enterprise preparedness.';
	$questionArray[1][0]='<span style="text-decoration:underline;margin-left:0px;">2.1 Governance:</span> How well policies and rules have been implemented to ensure smooth operation within enterprise.';
	$questionArray[1][1]='Assessing business oriented decisions in predicting performance and taking responsibilities.';
	$questionArray[1][2]='Availability of IT governance, which is combination of business and IT members of an enterprise.';
	$questionArray[1][3]='Proper implementation of IT governance(maintenance, control and contribution of available assests )to accomplish business strategy and <span>goals.';
	$questionArray[1][4]='For medium and some small enterprises, ensure Service Oriented Architecture (SOA) is running which manages a relationship between <span>customer and provider in various management activities.';
	
	$questionArray[200][0]='<span style="text-decoration:underline;margin-left:0px;">2.2 Top Cloud Risks and its assessment:</span> Technical and organizational risks associated with cloud computing.';
	$questionArray[2][0]='<span style="text-decoration:underline;margin-left:0px;">2.2.1Loss of Governance:</span> Probability is very often, impact is severe and overall calculated risk is high.';
	$questionArray[2][1]='Clear roles and responsibilities';
	$questionArray[2][2]='Appropriate SLA clauses.';
	$questionArray[2][3]='Adequate use of technology and solutions provided.';
	$questionArray[2][4]='Avoiding ambiguity over terms of use.';
	$questionArray[3][0]='<span style="text-decoration:underline;margin-left:0px;">2.2.2 Compliance:</span> Probability is very often, impact is severe and overall calculated risk is high.';
	$questionArray[3][1]='Clear roles and responsibilities of data controller at both ends, customer and cloud service provider (CSP).';
	$questionArray[3][2]='Appropriate SLA clauses for data control.';
	$questionArray[3][3]='Avoiding ambiguity over terms of use.';
	$questionArray[4][0]='<span style="text-decoration:underline;margin-left:0px;">2.2.3 Cloud service termination, failure or acquisition.:</span> Probability is low, impact is severe and overall calculatedrisk is medium.';
	$questionArray[4][1]='Well defined terms of use.';
	$questionArray[4][2]='Appropriate SLA clauses to defend this issue.';
	$questionArray[4][3]='Avoid any client liability issues.';
	$questionArray[4][4]='Good selection of CSP.';
	$questionArray[5][0]='<span style="text-decoration:underline;margin-left:0px;">2.2.4 Insider abuse of privilege:</span> Probability is often, impact is severe and overall calculated risk is high.';
	$questionArray[5][1]='Clear roles and responsibilities at CSP"s end to avoid adverse effect on data confidentiality, availability and integrity.';
	$questionArray[5][2]='Appropriate SLA clauses to defend this issue.';
	$questionArray[5][3]='Ensure data is not processed in encrypted form.';
	$questionArray[5][4]='Well defined terms of use for services offered by CSP.';
	$questionArray[6][0]='<span style="text-decoration:underline;margin-left:0px;">2.2.5 Compromise in Management interface (Manipulation, Availability of infrastructure):</span> Probability israre, impact is severe and overall calculated risk is high.';
	$questionArray[6][1]='Use of secured virtual private network (VPN) while moving data.';
	$questionArray[6][2]='Ensure data is disk level protected.';
	$questionArray[6][3]='Ensure data is replicated on regular basis.';
	$questionArray[6][4]='Ensure data is replicated following Journaled/checkpoint technique.';
	$questionArray[7][0]='<span style="text-decoration:underline;margin-left:0px;">2.2.6. Data leakage while uploading or downloading data :</span> Probability is often, impact is severe and overall calculated risk is high.';
	$questionArray[7][1]='Use of secured virtual private network (VPN) while moving data.';
	$questionArray[7][2]='Ensure data is disk level protected. ';
	$questionArray[7][3]='Ensure data is replicated on regular basis.';
	$questionArray[7][4]='Ensure data is replicated following Jounaled/checkpoint technique.';
	$questionArray[8][0]='<span style="text-decoration:underline;margin-left:0px;">2.2.7 Distributed denial of service (DDoS), Economic denial of service (EDoS) and data deletion:</span> Probability is often, impact is severe and overall calculated risk is medium.';
	$questionArray[8][1]='Ensure massive amount of bandwidth is alotted to intake large network traffic';
	$questionArray[8][2]='Ensure pushback techniques to avoid DDoS, it allows router to request adjacent router to limit rate of traffic.';
	$questionArray[8][3]='Ensure EDoS-Shield is implemented which has virtual firewall to filter legitimate requests.';
	$questionArray[8][4]='Ensure data is replicated on regular basis.';
	$questionArray[9][0]='<span style="text-decoration:underline;margin-left:0px;">2.2.8 Court summons and e-discovery:</span> Probability is often, impact is severe and overall calculated risk is medium.';
	$questionArray[9][1]='Ensure data location is clearly defined.';
	$questionArray[9][2]='Ensure appropriate SLA clauses are defined to avoid court summons or e-discovery.';
	$questionArray[10][0]='<span style="text-decoration:underline;margin-left:0px;">2.2.9 Change of Jurisdiction and data protection:</span> Probability is often, impact is medium and overallcalculated risk is high.';
	$questionArray[10][1]='Ensure data location is clearly defined and it is not outside EU zone.';
	$questionArray[10][2]='Ensure CSP is compliant to UK data protection act.';
	$questionArray[10][3]='Ensure clear roles and responsibilities have been defined for data';
	$questionArray[11][0]='<span style="text-decoration:underline;margin-left:0px;">2.2.10 Licensing in Cloud:</span> Probability is rare, impact is medium and overall calculated risk is high.';
	$questionArray[11][1]='Ensure adequate information regarding billing is defined.';
	$questionArray[11][2]='Ensure appropriate SLA clauses are defined to avoid licensing issues in cloud.';
	$questionArray[11][3]='Ensure complete information about number of users or instances is stated.';
	$questionArray[110][0]='<span style="text-decoration:underline;margin-left:0px;">2.3 Standards:</span> Set of standards to look in CSP for providing cloud services.';
	$questionArray[12][0]='<span style="text-decoration:underline;margin-left:0px;">2.3.1 Security standards:';
	$questionArray[12][1]='Ensure ISO/IEC27001, which enables enterprises to secure their information assets.';
	$questionArray[12][2]='Availability of Cloud Controls Matrix and Consensus assessments initiative questionnaire, which enables customers to question CSP for data <span>protection and risk management.';
	$questionArray[13][0]='<span style="text-decoration:underline;margin-left:0px;">2.3.2 Confidentiality standards:</span>';
	$questionArray[13][1]='Ensure transport Layer Security (TLS), which is protocol to ensure smooth and safe running of computer network.';
	$questionArray[13][2]='Ensure OASIS Key Management Interoperability Protocol (KMIP), which helps in managing passwords for message decoding.';
	$questionArray[13][3]='Ensure Media sanitization (SP- 800-88), which is used to sanitise media before disposal and reuse.';
	$questionArray[14][0]='<span style="text-decoration:underline;margin-left:0px;">2.4 Data Classification and Responsibilities:</span> Segregation and tagging of data for quick and effective reuse of data.';
	$questionArray[14][1]='Classify data on the basis of confidential, secret, top secret, for internal use only and private, based on jurisdiction.';
	$questionArray[14][2]='Be aware of the structured, semi or unstructured data as it may affect data integrity.';
	$questionArray[14][3]='Be responsible about the classification and sensitivity of the data before and after migration to cloud.';
	$questionArray[14][4]='Ensure CSP is committed and transparent about compliance, security and privacy of the data.';
	$questionArray[15][0]='<span style="text-decoration:underline;margin-left:0px;">3. Identifying Stakeholder Needs:</span> Know what your users want to increase business productivity.';
	$questionArray[15][1]='Know the potential of your employees and how susceptible they are of change';
	$questionArray[15][2]='Involve decision makers of cloud adoption plan to know users needs using stakeholder needs platform and questionnaires.';
	$questionArray[16][0]='<span style="text-decoration:underline;margin-left:0px;">4.Four Steps to Cloud:</span> Four common and recent challenges faced by cloud computing adoption and its remedies.';
	$questionArray[16][1]='Gain cloud computing knowledge using in house training courses, recruiting employees with cloud computing knowledge.';
	$questionArray[16][2]='Be equipped with virtualization concepts, cloud layers, data location etc. to dictate your cloud contracts.';
	$questionArray[16][3]='Select CSP who demonstrates cloud services prior to migration and is transparent to SLAs.';
	$questionArray[16][4]='Involve cloud insurers as they are better in assessing and monitoring cloud associated risks.';
	$questionArray[16][5]='Ensure interoperability among legacy systems and cloud is addressed using mulesoft, Unified Cloud interface.';
	$questionArray[16][6]='Ensure CSP complies with open standardizations like: Open cloud computing interface, Webs service agreement specification,cloud <span>infrastructure Management Interface, Open virtualization format and cloud data management interface, to avoid interoperability issues.';
	$questionArray[16][7]='Ask for solutions that provides data location of the users at all time.';
	$questionArray[16][8]='Ensure CSP use two layered data ware houses for data storage and are at least in European economic Zone.';
?>

<?php
	include('db.php');
	$id=$_SESSION['uid'];
	$uid=$_GET['userid'];
	$stage='2';
	$an='';
	if(isset($_POST['submit']))
	{		
		if(count($_POST) != 0){
			$query="DELETE FROM q_answers WHERE con_u_id=$id AND stage=2";
				mysql_query($query);								
			foreach($_POST as $qNo=>$q){
				
				if($qNo != 'submit'){
					foreach($q as $a){
						$an .= $a.',';
					}
					$fAns = rtrim($an,',');
										
					$query="INSERT INTO q_answers (con_u_id, stage, question_id, q_answers, created_at, status) VALUES ( '".$id."', '".$stage."', '".$qNo."', '".$fAns."', NOW(), '1')"; 
					mysql_query($query);
					$an = "";
					
				}
			}
		}
		header('location:Stage3CMS.php');
		
	}
	
	$sql=mysql_query("select * from q_answers where con_u_id='$id' and stage=2");
	$focus=array();
	while($row=mysql_fetch_assoc($sql))
	{
		 $focus[$row['question_id']]=explode(",",$row['q_answers']);
		
	}
	
?>
	<div class="wrapper">
			<?php include("menu.php");?>
		<div class="container">			
			<div id="page5">
				<div>
					<h1 style="color:blue;">CLOUD PREPARATION STAGE: Focuses on preparation of enterprise for cloud migration.</h1><br>
				</div>
				<div>
					<form action="" method="POST" name="myform" onsubmit="return validate();">
						
						<?php foreach($questionArray as $key=>$val)
						{							
							
						?>						
						<div>
						
							<?php foreach($val as $key1=>$val1)
							{
								if($key1==0)
								{
								?>
								<p style="font-weight:bold;"><?php echo $val1?></p>
									
								<?php 
								}
								else
								{
									$u ='_';
									$optn_name='Q'.($key).$u.($key1);
									?>
									<br>
																		
							<input type="checkbox" id="" name="Q<?php echo $key;?>[]" value ="Q<?php echo $key; ?>_<?php echo $key1?>" <?php  if(in_array($optn_name,$focus['Q'.$key])) { ?> checked="checked"  <?php  }else{?>  <?php } ?> /><?php echo $val1; ?>
							
							<?php 
								}
								}
								 
							
							?>
												
						</div><br>
						<?php }?>
						
						
							
					
				</div>				
			</div><br><br>
			<div>
				<a href="Stage1CRS.php"  style="float:left;margin-left:20px;"><input id="button" type="button" value="Back"></a>			
				<a href="Stage3CMS.php" style="float:right;margin-left:20px;"><input id="button" type="submit" name="submit" value="Next" onclick="return validate();"/></a>
			</div>
			</form>
		</div>	
		<div class="push"></div>			
	</div>	<br>		
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
			}
			function myfunction()
			{
			//alert("ok");
				window.location.href="http://localhost/salford/trunk/Stage1CRS.php";
			}
</script>
<?php
	}
	else{
		header('location:index.php');
	}
?>