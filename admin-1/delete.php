<?php
	mysql_connect('localhost','root','');
	mysql_select_db('salford');	
	if(isset($_GET['id'])){
		$result=mysql_query('DELETE FROM users WHERE u_id="'.$_GET['id'].'"');
		header('location:user.php');
	}
	
?>
