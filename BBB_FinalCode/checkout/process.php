<?php
	//Validate Referral Code
	session_start("order");
	// Set up db connection
	include('../connection/localconnection.php');
	
	//php referral code variable
	$rcode = $_POST['refcode'];
	
	//Buil referral code query
	$query = "SELECT * FROM accounts WHERE ReferralCode = '$rcode'";
	
	//Run the username query
	$result = mysqli_query($dbc, $query) or die ('Referral code read error!');
	$row = mysqli_fetch_array($result);
	
	//Check to see if we got any rows
	if (mysqli_num_rows($result) == 0)
	{
		$_SESSION['invalid'] = 1;
		header('Location: checkout.php');
		exit;
	}
	if(mysqli_num_rows($result) == 1)
	{
		$_SESSION['rcode'] = $rcode;
		$_SESSION['quotes'][($_SESSION['condition'])] += 10;
		session_write_close();
		header('Location: checkout.php');
		exit;
	}
	

	//Close the db connection
	mysqli_close($dbc);
	
	//Start PHP session 
	
	session_write_close();
	
	//Get and store our PHP session variables
	
	header('Location: confirm.php');
	exit;
	
	header('Location: checkout.php?rc=3');
	exit;
?>