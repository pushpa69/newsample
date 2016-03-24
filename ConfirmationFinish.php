<?php
	session_start();
	if(isset($_SESSION) && $_SESSION['uid']!=''){
	$qustion[]="{1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18}";
	$questionArray[0][0]='<span style="text-decoration:underline;margin-left:0px;">1. Feasibility Study:</span> Financial and technical suitability 	for	an enterprise to migrate on cloud computing.';
	$questionArray[0][1]='Study of an existing data and applications to get desired output by embracing cloud solution.';
	$questionArray[0][2]='Availability of supporting hardware for proposed cloud solution';
	$questionArray[0][3]='Detailed carry out feasibility analysis of an enterprise.outline of cost/benefit model  of an enterprise.';
	$questionArray[0][4]="Recommended tools like maturity, technical and business feasibility tools to carry out feasibility analysis of an enterprise.";
	$questionArray[100][0]='2. Assessing Enterprise readiness: Factors comprising enterprise preparedness.';
	$questionArray[1][0]='<span style="text-decoration:underline;margin-left:0px;">2.1 Governance:</span> How well policies and rules have been implemented to ensure smooth operation within enterprise.';
	$questionArray[1][1]='Assessing business oriented decisions in predicting performance and taking responsibilities.';
	$questionArray[1][2]='Availability of IT governance, which is combination of business and IT members of an enterprise.';
	$questionArray[1][3]='Proper implementation of IT governance(maintenance, control and contribution of available assests )to accomplish business strategy <p>and goals.</p>';
	$questionArray[1][4]='For medium and some small enterprises, ensure Service Oriented Architecture (SOA) is running which manages a relationship <p> between customer and provider in various management activities.</p>';
	
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
	$questionArray[12][2]='Availability of Cloud Controls Matrix and Consensus assessments initiative questionnaire, which enables customers to question  <p>CSP for dataprotection and risk management.</p>';
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
	$questionArray[16][6]='Ensure CSP complies with open standardizations like: Open cloud computing interface, Webs service agreement specification,cloud <p>infrastructure Management Interface, Open virtualization format and cloud data management interface, to avoid interoperability issues.</p>';
	$questionArray[16][7]='Ask for solutions that provides data location of the users at all time.';
	$questionArray[16][8]='Ensure CSP use two layered data ware houses for data storage and are at least in European economic Zone.';

	$questionArray1[17][0]='<span style="text-decoration:underline;margin-left:0px;">1.Cloud service provider and contract:</span> Attributes to look for CSP selection and negotiating cloud contracts';
	$questionArray1[17][1]='Assure that CSP is transparent in pricing when it comes to subscriptions, pay as you go models,upgrades, maintenance, exit cost and any other <span>liabilities.</span>';
	$questionArray1[17][2]='Look for CSP who offers scalable and flexible solution, which help users to upscale and downscale services as per business needs.';
	$questionArray1[17][3]='Select CSP who has high security, interoperability, legal and privacy standards in practice to offer services.';
	$questionArray1[17][4]='Dictate cloud contract and negotiate your terms rather being on receiving side.';
	$questionArray1[18][0]='<span style="text-decoration:underline;margin-left:0px;">2. Migration, Testing and Deployment:</span> Exhibits preparedness of an enterprise leading to migration, testing and deployment of data.';
	$questionArray1[18][1]='Ensure all the data is migrated slowly and tested regulalry to avoid any complications during deployment.';
	$questionArray1[18][2]='Ensure high level of testing is done prior to going live to avoid issues like compatibility and rugged performance of apps and data';
	$questionArray1[18][3]='Ensure data migration is done using parallel approach and carried out by highly skilled data professionals.';
	$questionArray1[19][0]='<span style="text-decoration:underline;margin-left:0px;">3. Monitoring and maintenance:</span> Post migration stage which focuses on monitoring and maintenance of thedeployed system.';
	$questionArray1[19][1]='Ensure all terms in SLAs are being abide by CSP.';
	$questionArray1[19][2]='Monitor the performance of the over all system on a regular basis.';
	$questionArray1[19][3]='Monitor the performance of the over all system on a regular basis.';
	$questionArray1[19][4]='If performance goes down, enusreits been comprehensively maintained by the CSP as per the contract.';
		$stage='3';
?>

<?php
	include('db.php');
	$id=$_SESSION['uid'];
	$userid=$_GET['userid'];
	$stage='2';
	$an='';	
	$sql=mysql_query("select * from q_answers where con_u_id='$id' and stage=2");
	
	$focus=array();
	$qes_ids=array();
	while($row=mysql_fetch_assoc($sql))
	{
		 $focus[$row['question_id']]=explode(",",$row['q_answers']);
		 
		 $qes_ids[]=$row['question_id'];
		 $stage_id=$row['stage'];
	}
	
	$sql1=mysql_query("select * from q_answers where con_u_id='$id' and stage=3");
	
	$focus1=array();
	$qes_ids1=array();
	while($row1=mysql_fetch_assoc($sql1))
	{
		 $focus1[$row1['question_id']]=explode(",",$row1['q_answers']);
		 
		 $qes_ids1[]=$row1['question_id'];
		 $stage_id1=$row1['stage'];
	}
	
	
?>

	<div class="wrapper">
			<?php include("menu.php");?>
		<div class="container">		
			<div id="page7">
				<div>
					<h1 style="color:blue;">RESULTS AND RECOMMENDATIONS.</h1><br>
				</div>
				<div>
					<p style="color:green;font-size:20px;font-weight:bold;">1.Cloud Requirement Stage:</p><br>					
				</div>
				<div style="margin-left:150px;	">
					<?php $result=mysql_query('SELECT * FROM general_information WHERE gi_u_id="'.$_GET['userid'].'"');
					 // echo'<pre>'; print_r($result);exit;
					 $arr=mysql_fetch_array($result);
					  // echo'<pre>';
					  // print_r($arr);
					  // exit;
					 if ($arr['size_enterprise']=="micro"){ 
					 echo "Services suitable are IaaS** or SaaS* on public cloud depending upon usage and requirement.";
					 }else if($arr['size_enterprise']=="small"){
						 echo "Service suitable are IaaS as a standalone service on public cloud, else amalgamated services (IaaS and PaaS***) on hybrid cloud depending upon usage and requirement. ";
					 }else if($arr['size_enterprise']=="medium"){
						  echo "Service suitable are either SaaS as a standalone service on public cloud or amalgamated services (IaaS and PaaS) on hybrid cloud or two or more services (PaaS, IaaS, SaaS) on hybrid, depending upon usage and requirement. ";
					 }echo "<br>";
					  echo "<br>";?>
					  <p style="font-weight:bold;margin-left:10px;"><?php echo "NOTE:";?></p>
					  <?php echo "
							*SaaS(software as a service): could be an email solution or any software solution like customer relationship management (CRM), content management system (CMS), Enterprise resource planning (ERP), HR related software’s etc.";
					  echo "<br>";
					  echo "**IaaS(Infrastructure as a service): could be a remote data center for storing and managing data, virtual monitors (machines), cloud hosting and networks, etc."; 
					  echo "<br>";
					  echo "***Paas(platform as a Service): could be a platform for development like operating systems, virtualized servers, various frameworks used for development etc.";
												 
					?>
				</div>
				<div>
					<p style="color:green;font-size:20px;font-weight:bold;">2.Cloud Preparation Stage:</p><br>
					<p style="font-size:17px;color:Maroon ;font-weight:bold;text-decoration:underline;">Your Preparedness</p><br>
					<div>
					<?php foreach($questionArray as $key=>$val)
						{ ?>  
						<?php //if(in_array('Q'.($key),$qes_ids)){ ?>
							<?php foreach($val as $key1=>$val1)
							{ 
								
								if($key1== 0)
								{
								?>
								<p style="font-weight:bold;"><?php echo $val1?></p>
									
								<?php 
								}
								else
								{
									$u ='_';
									$optn_name='Q'.($key).$u.($key1);
									if(in_array($optn_name,$focus['Q'.$key])) {  
									?>
									
									<p> 
									<ul>
										<li><span style="font-size:60px;margin-left:140px;" >.</span>
									<?php echo $val1;/*}*/ ?> 
										</li>
									</ul></p> 
							<?php 
									}
								//}
							}?> 
						<?php }}?>							
						<br>
					<p style="font-size:17px;color:Maroon ;font-weight:bold;text-decoration:underline;">What you need to prepare for</p><br>
					 
						<?php foreach($questionArray as $key=>$val)
						{ ?>  
						<?php //if(in_array('Q'.($key),$qes_ids)){ ?>
							<?php foreach($val as $key1=>$val1)
							{ 
								
								if($key1== 0)
								{
								?>
								<p style="font-weight:bold;"><?php echo $val1?></p>
									
								<?php 
								}
								else
								{
									$u ='_';
									$optn_name='Q'.($key).$u.($key1);
									if(!in_array($optn_name,$focus['Q'.$key])) {  
									?>
									
										
										<ul>
										<li>
										<p>
										<span style="font-size:60px;">.</span><?php echo $val1;/*}*/ ?>
										</p>
										</li>
										</ul>
							<?php 
									}
								//}
							}?> 
						<?php }}?>							
					 
						 <br>
					<p style="font-size:20px;color:DarkGreen ;font-weight:bold;" >3.Cloud Migration Stage:</p>
					<p style="font-size:17px;color:Maroon ;font-weight:bold;text-decoration:underline;">Your Preparedness</p><br>
					 
						<?php foreach($questionArray1 as $key=>$val)
						{ ?>  
						<?php //if(in_array('Q'.($key),$qes_ids)){ ?>
							<?php foreach($val as $key1=>$val1)
							{ 
								
								if($key1== 0)
								{
								?>
								<p style="font-weight:bold;"><?php echo $val1?></p>
									
								<?php 
								}
								else
								{
									$u ='_';
									$optn_name='Q'.($key).$u.($key1);
									if(in_array($optn_name,$focus1['Q'.$key])) {  
									?>
									
									<p>
									<span style="font-size:60px;">.</span><?php echo $val1;/*}*/ ?></p> 
							<?php 
									}
								//}
							}?>								
						<?php }}?>							
							<br>
					<p style="font-size:17px;color:Maroon ;font-weight:bold;text-decoration:underline;">What you need to be aware of</p> <br>
					 
						<?php foreach($questionArray1 as $key=>$val)
						{ ?>  
						<?php //if(in_array('Q'.($key),$qes_ids)){ ?>
							<?php foreach($val as $key1=>$val1)
							{ 
								
								if($key1== 0)
								{
								?>
								<p style="font-weight:bold;"><?php echo $val1?></p>
									
								<?php 
								}
								else
								{
									$u ='_';
									$optn_name='Q'.($key).$u.($key1);
									if(!in_array($optn_name,$focus1['Q'.$key])) {  
									?>
									
										<p>
										<span style="font-size:60px;">.</span><?php echo $val1;/*}*/ ?></p> 
							<?php 
									}
								//}
							}?>								
						<?php }}?>	
						
				</div>				
			</div>			
			<div class="push"></div>
			
		</div><br>
			<div >
				<a style="float:left;margin-left:20px;"href="Stage3CMS.php"><input id="button" type="button" value="Back"></a>
				<a href="Feedback.php" style="float:right;margin-right:20px;"><button id="button" type="submit" name="submit" style="margin-left:587px;">Next</button></a>
			</div>
		<?php include("footer.php");?>
	</div>	
</html>
<script>
	function myfunction()
	
	{
		window.location="http://localhost/salford/trunk/Stage3CMS.php";
	}
</script>
<?php
	}
	else{
		header('location:index.php');
	}
?>