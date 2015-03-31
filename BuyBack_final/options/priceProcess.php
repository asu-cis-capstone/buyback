<?php
	session_start();
		
	$brand = $_SESSION['brand'];
	$model = $_SESSION['model'];
	
	if(isset($_SESSION['carrier']))
	{
		$carrier = $_SESSION['carrier'];
	}
	else
	{
		$_SESSION['carrier'] = $_POST['carrier'];
		$carrier = $_SESSION['carrier'];
	}
	
	if(isset($_SESSION['size']))
	{
		$size = $_SESSION['size'];
	}
	else
	{
		$_SESSION['size'] = $_POST['size'];
		$size = $_SESSION['size'];
	}
	
	include('../connection/localconnection.php');
	$phoneQuery = "SELECT ModelId FROM models WHERE brand = '$brand' && model = '$model' && size = '$size' && carrier = '$carrier'";
	$phoneResult = $dbc->query($phoneQuery);
	$phoneID = mysqli_fetch_array($phoneResult);
	$lookupId = $phoneID[0];
	if(!$phoneResult){
		echo "DB error. Could not query ModelId from database\n";
		echo 'MySQL error: ' . mysql_error();
		exit;
	}
	else{
		$priceQuery = "SELECT * FROM quotes WHERE id = '$lookupId'";
		$priceResult = $dbc->query($priceQuery);
		$rows = mysqli_fetch_array($priceResult);
		
		if(!$priceResult){
			echo "DB error. Could not query price from database\n";
			echo 'MySQL error: ' . mysql_error();
			exit;
		}
	}
	
	$quotes = array();
	for($i = 0; $i < 5; $i += 1){
		$quotes[$i] = $rows[$i + 1];
	};

	$_SESSION['quotes'] = $quotes;
	$_SESSION['modelId'] = $rows[0];
	header('Location: phoneops22.php');
	exit;

?>