<html>
	<head>	
	</head>
	<body>
		<?php
			include('db.php');
			if(isset($_GET['id'])){ ?>
			<script>
				function myFunction() {
					var x;
					if (confirm("Press a button!") == true) {
						x = <?php $result=mysql_query('DELETE FROM users WHERE u_id="'.$_GET['id'].'"');
							header('location:user.php'); ?>;
					} else {
						x = <?php header('location:user.php');?>
					}
					
				}
			</script>		
	</body>
</html>
