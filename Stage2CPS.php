<?php
	session_start();
	include('db.php');
	$id=$_SESSION['uid'];
	$stage='2';
	$an='';
	if(isset($_POST['submit']))
	{
		$hid=$_POST['hid'];
		//echo $hid;exit;
		if(count($_POST) != 0){
			foreach($_POST as $qNo=>$q){
				if($qNo != 'submit'){
					foreach($q as $a){
						$an .= $a.',';
					}
					$fAns = rtrim($an,',');
					  
					$query="INSERT INTO q_answers ( con_u_id, stage, question_id, q_answers, q_unansewred, created_at, status) VALUES ( '".$id."', '".$stage."', '".$qNo."', '".$fAns."', 'ewrew', '2016-03-09 00:00:00', '1')"; 
					
					/* else
					{
						$query="update q_answers set q_answers='".$fAns."' where id='$id'";
					} */
					mysql_query($query);
					$an = "";
					//header("location:Stage3CMS.php");
				}
			}
		}
		
		
	}
	$sql=mysql_query("select * from q_answers where con_u_id='$id'");
	//print_r($sql);exit;
	while($row=mysql_fetch_assoc($sql))
	{
		 $focus=explode(",",$row['q_answers']);
		 //print_r($focus);
	}
	
?>
	<div class="wrapper">
			<?php include("menu.php");?>
		<div class="container">
			<div id="page5">
				<div>
					<h1>CLOUD PREPARATION STAGE: Focuses on preparation of enterprise for cloud migration.</h1><br>
				</div>
				<div>
					<form action="" method="POST" name="myform" onsubmit="return validate();">
						<div>
							<p>1. Feasibility Study: Financial and technical suitability for an enterprise to migrate on cloud computing.</p><br>
							<input type="checkbox" id="" name="Q1[]" value ="Q1_1"<?php if(in_array("Q1_1",$focus)) { ?> checked="checked" <?php  }?>/>Study of an existing data and applications to get desired output by embracing cloud solution.<br>
							<input type="checkbox" id="" value ="Q1_2" name="Q1[]"<?php if(in_array("Q1_2",$focus)) { ?> checked="checked" <?php } ?> />Availability of supporting hardware for proposed cloud solution<br>
							<input type="checkbox" id="" name="Q1[]" value ="Q1_3"<?php if(in_array("Q1_3",$focus)) { ?> checked="checked" <?php } ?> >Detailed carry out feasibility analysis of an enterprise.outline of cost/benefit model  of an enterprise.<br>
							<input type="checkbox" id="" value ="Q1_4" name="Q1[]"<?php if(in_array("Q1_4",$focus)) { ?> checked="checked" <?php } ?> >Recommended tools like maturity, technical and business feasibility tools to </input><br>
							
													
						</div><br>
						<div>
							<p>2. Assessing Enterprise readiness: Factors comprising enterprise preparedness.</p><br>
						</div><br>
						<div>
							<p>2.1 Governance: How well policies and rules have been implemented to ensure smooth operation within enterprise.</p><br>
							<input type="checkbox" id="" value="Q2_1" name="Q2[]" >Assessing business oriented decisions in predicting performance and taking responsibilities.</input><br>
							<input type="checkbox" id="" value="Q2_2" name="Q2[]" >Availability of IT governance, which is combination of business and IT members of an enterprise.</input><br>
							<input type="checkbox" id="" value="Q2_3" name="Q2[]" >Proper implementation of IT governance(maintenance, control and contribution of available assests )to accomplish business strategy and <span>goals.</span></input><br>
							<input type="checkbox" id="" value="Q2_4" name="Q2[]" >For medium and some small enterprises, ensure Service Oriented Architecture (SOA) is running which manages a relationship</input><br>
							<input type="checkbox" id="" value="Q2_5" name="Q2[]" >between customer and provider in various management activities.</input><br>
						</div><br>
						<div>
							<p>2.2 Top Cloud Risks and its assessment: Technical and organizational risks associated with cloud computing.</p><br>
						</div><br>
						<div>
							<p>2.2.1Loss of Governance: Probability is very often, impact is severe and overall calculated risk is high.</p><br>
							<input type="checkbox" id="" name="Q3[]" value="Q3_1">Clear roles and responsibilities</input><br>
							<input type="checkbox" id="" name="Q3[]" value="Q3_2">Appropriate SLA clauses.</input><br>
							<input type="checkbox" id="" name="Q3[]" value="Q3_3">Adequate use of technology and solutions provided.</input><br>
							<input type="checkbox" id="" name="Q3[]" value="Q3_4">Avoiding ambiguity over terms of use.</input><br>
						</div><br>
						<div>
							<p>2.2.2 Compliance: Probability is very often, impact is severe and overall calculated risk is high.</p><br>
							<input type="checkbox" id="" name="Q4[]" value ="Q4_1">Clear roles and responsibilities of data controller at both ends, customer and cloud service provider (CSP).</input><br>
							<input type="checkbox" id="" name="Q4[]" value ="Q4_2">Appropriate SLA clauses for data control.</input><br>
							<input type="checkbox" id="" name="Q4[]" value ="Q4_3">Avoiding ambiguity over terms of use.</input><br>
						</div><br>
						<div>
							<p>2.2.3 Cloud service termination, failure or acquisition.: Probability is low, impact is severe and overall calculatedrisk is medium.</p><br>
							<input type="checkbox" id="" name="Q5[]" value ="Q5_1">Well defined terms of use.</input><br>
							<input type="checkbox" id="" name="Q5[]" value ="Q5_2">Appropriate SLA clauses to defend this issue.</input><br>
							<input type="checkbox" id="" name="Q5[]" value ="Q5_3">Avoid any client liability issues.</input><br>
							<input type="checkbox" id="" name="Q5[]" value ="Q5_4">Good selection of CSP.</input><br>
						</div><br>
						<div>
							<p>2.2.4 Insider abuse of privilege: Probability is often, impact is severe and overall calculated risk is high.</p><br>
							<input type="checkbox" id="" name="Q6[]" value ="Q6_1">Clear roles and responsibilities at CSP's end to avoid adverse effect on data confidentiality, availability and integrity.</input><br>
							<input type="checkbox" id="" name="Q6[]" value ="Q6_2">Appropriate SLA clauses to defend this issue.</input><br>
							<input type="checkbox" id="" name="Q6[]" value ="Q6_3">Ensure data is not processed in encrypted form.</input><br>
							<input type="checkbox" id="" name="Q6[]" value ="Q6_4">Well defined terms of use for services offered by CSP.</input><br>
						</div><br>
						<div>
							<p>2.2.5 Compromise in Management interface (Manipulation, Availability of infrastructure): Probability israre, impact is severe and overall calculated risk is high.</p><br>
							<input type="checkbox" id="" name="Q7[]" value ="Q7_1">Use of secured virtual private network (VPN) while moving data.</input><br>
							<input type="checkbox" id="" name="Q7[]" value ="Q7_2">Ensure data is disk level protected.</input><br>
							<input type="checkbox" id="" name="Q7[]" value ="Q7_3">Ensure data is replicated on regular basis.</input><br>
							<input type="checkbox" id="" name="Q7[]" value ="Q7_4">Ensure data is replicated following Journaled/checkpoint technique.</input><br>
						</div><br>
						<div>
							<p>2.2.7 Distributed denial of service (DDoS), Economic denial of service (EDoS) and data deletion: Probability is often, impact is severe and overall calculated risk is medium.</p><br>
							<input type="checkbox" id="" name="Q8[]" value ="Q8_1">Ensure massive amount of bandwidth is alotted to intake large network traffic</input><br>
							<input type="checkbox" id="" name="Q8[]" value ="Q8_2">Ensure pushback techniques to avoid DDoS, it allows router to request adjacent router to limit rate of traffic.</input><br>
							<input type="checkbox" id="" name="Q8[]" value ="Q8_3">Ensure EDoS-Shield is implemented which has virtual firewall to filter legitimate requests.</input><br>
							<input type="checkbox" id="" name="Q8[]" value ="Q8_4">Ensure data is replicated on regular basis.</input><br>
						</div><br>
						<div>
							<p>2.2.8 Court summons and e-discovery: Probability is often, impact is severe and overall calculated risk is medium.</p><br>
							<input type="checkbox" id="" name="Q9[]" value ="Q9_1">Ensure data location is clearly defined.</input><br>
							<input type="checkbox" id="" name="Q9[]" value ="Q9_2">Ensure appropriate SLA clauses are defined to avoid court summons or e-discovery.</input><br>
						</div><br>
						<div>
							<p>2.2.9 Change of Jurisdiction and data protection: Probability is often, impact is medium and overallcalculated risk is high.</p><br>
							<input type="checkbox" id="" name="Q10[]" value ="Q10_1">Ensure data location is clearly defined and it is not outside EU zone.</input><br>
							<input type="checkbox" id="" name="Q10[]" value ="Q10_2">Ensure CSP is compliant to UK data protection act.</input><br>
							<input type="checkbox" id="" name="Q10[]" value ="Q10_3">Ensure clear roles and responsibilities have been defined for data controller.</input><br>
						</div><br>
						<div>
							<p>2.2.10 Licensing in Cloud: Probability is rare, impact is medium and overall calculated risk is high.</p><br>
							<input type="checkbox" id="" name="Q11[]" value ="Q11_1">Ensure adequate information regarding billing is defined.</input><br>
							<input type="checkbox" id="" name="Q11[]" value ="Q11_1">Ensure appropriate SLA clauses are defined to avoid licensing issues in cloud.</input><br>
							<input type="checkbox" id="" name="Q11[]" value ="Q11_1">Ensure complete information about number of users or instances is stated.</input><br>
						</div><br>
						<div>
							<p>2.3 Standards: Set of standards to look in CSP for providing cloud services.</p><br>
						</div><br>
						<div>
							<p>2.3.1 Security standards:</p><br>
							<input type="checkbox" id="" name="Q12[]" value ="Q12_1">Ensure ISO/IEC27001, which enables enterprises to secure their information assets.</input><br>
							<input type="checkbox" id="" name="Q12[]" value ="Q12_2">Availability of Cloud Controls Matrix and Consensus assessments initiative questionnaire, which enables customers to question CSP for data <span>protection and risk management.</span></input><br>
						</div><br>
						<div>
							<p>2.3.2 Confidentiality standards:</p><br>
							<input type="checkbox" id="" name="Q13[]" value ="Q13_1">Ensure transport Layer Security (TLS), which is protocol to ensure smooth and safe running of computer network.</input><br>
							<input type="checkbox" id="" name="Q13[]" value ="Q13_2">Ensure OASIS Key Management Interoperability Protocol (KMIP), which helps in managing passwords for message decoding.</input><br>
							<input type="checkbox" id="" name="Q13[]" value ="Q13_3">Ensure Media sanitization (SP- 800-88), which is used to sanitise media before disposal and reuse.</input><br>
						</div><br>
						<div>
							<p>2.4 Data Classification and Responsibilities: Segregation and tagging of data for quick and effective reuse of data.</p><br>
							<input type="checkbox" id="" name="Q14[]" value ="Q14_1">Classify data on the basis of confidential, secret, top secret, for internal use only and private, based on jurisdiction.</input><br>
							<input type="checkbox" id="" name="Q14[]" value ="Q14_2">Be aware of the structured, semi or unstructured data as it may affect data integrity.</input><br>
							<input type="checkbox" id="" name="Q14[]" value ="Q14_3">Be responsible about the classification and sensitivity of the data before and after migration to cloud.</input><br>
							<input type="checkbox" id="" name="Q14[]" value ="Q14_4">Ensure CSP is committed and transparent about compliance, security and privacy of the data.</input><br>
						</div><br>
						<div>
							<p>3. Identifying Stakeholder Needs: Know what your users want to increase business productivity.</p><br>
							<input type="checkbox" id="" name="Q15[]" value ="Q15_1">Know the potential of your employees and how susceptible they are of change</input><br>
							<input type="checkbox" id="" name="Q15[]" value ="Q15_1">Involve decision makers of cloud adoption plan to know users needs using stakeholder needs platform and questionnaires.</input><br>
						</div><br>
						<div>
							<p>4.Four Steps to Cloud: Four common and recent challenges faced by cloud computing adoption and its remedies.</p><br>
							<input type="checkbox" id="" name="Q16[]" value ="Q16_1">Gain cloud computing knowledge using in house training courses, recruiting employees with cloud computing knowledge.</input><br>
							<input type="checkbox" id="" name="Q16[]" value ="Q16_2">Be equipped with virtualization concepts, cloud layers, data location etc. to dictate your cloud contracts.</input><br>
							<input type="checkbox" id="" name="Q16[]" value ="Q16_3">Select CSP who demonstrates cloud services prior to migration and is transparent to SLAs.</input><br>
							<input type="checkbox" id="" name="Q16[]" value ="Q16_4">Involve cloud insurers as they are better in assessing and monitoring cloud associated risks.</input><br>
							<input type="checkbox" id="" name="Q16[]" value ="Q16_5">Ensure interoperability among legacy systems and cloud is addressed using mulesoft, Unified Cloud interface.</input><br>
							<input type="checkbox" id="" name="Q16[]" value ="Q16_6"/>Ensure CSP complies with open standardizations like: Open cloud computing interface, Webs service agreement specification, <span>cloud infrastructure Management Interface, Open virtualization format and cloud data management interface, to avoid interoperability issues.</span><br>
							<input type="checkbox" id="" name="Q16[]" value ="Q16_7">Ask for solutions that provides data location of the users at all time. <br>
							<input type="checkbox" id="" name="Q16[]" value ="Q16_8">Ensure CSP use two layered data ware houses for data storage and are at least in European economic Zone.</input><br>
						</div><br>
						<div>
							<input type="submit" value="submit" name="submit" onclick="" style="margin-left:587px;">
							 <input type="hidden" name="hid" id="hid"   value="<?php /* if(isset($row['con_u_id'])){
							echo $row['con_u_id']; */
						/* } */?>"/> 
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
</script>