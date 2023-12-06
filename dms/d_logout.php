<?php
	
	session_start();
	session_destroy();
	
	header('location: d_Login.php');
	
	?>