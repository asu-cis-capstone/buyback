<?php
	//Server Connection
	
	$host		= 'localhost';
	$user		= 'buybackb_test';
	$pw			= 'janitor6';
	$db			= 'buybackb_testcis440';


	$dbc;
	$dbc = mysqli_connect($host, $user, $pw, $db) or die('Unable to connect to server! (LOCAL)');
	
?>