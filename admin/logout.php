<?php
	session_start();
		
		unset($_SESSION["authen"]);
		echo '<script>window.location = "index.php"</script>';

?>	