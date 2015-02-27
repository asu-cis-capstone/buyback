<?php
	//Connect to localhost
	
	$host 	= 'localhost';
	$user	= 'root';
	$pw		= '';
	$db		= 'buybackb_testcis440';
	
	$dbc = mysqli_connect($host, $user, $pw, $db) or die('Unable to connect! (LOCAL)');


?>