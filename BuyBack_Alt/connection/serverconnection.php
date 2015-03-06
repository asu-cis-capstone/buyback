<?php
	//Server Connection
	
	$host		= 'gator4038';
	$user		= 'buybackb';
	$pw			= 'e4tuIkho:j5K';
	$db			= 'buybackb_testcis440';


	global $dbc;
	$dbc = mysqli_connect($host, $user, $pw, $db) or die('Unable to connect to server! (LOCAL)');
	echo "Connected to Database";
?>