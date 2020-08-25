<?php 
	
	$username="root";
	$password="";
	$server="localhost";
	$db="project";

	$connect=mysqli_connect($server , $username, $password , $db);
	if($connect) {
		?>
			<script>
				alert ("Connection successful");
			</script>
		<?php
		
	}
	else {
		alert ("No connection");
	}



?>