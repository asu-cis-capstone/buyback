<?php
	//Validate Referral Code
	//Start PHP session 
	session_name('customer');
	session_start('customer');
	// Set up db connection
	include('../connection/localconnection.php');
	
	//php referral code variable
	$rcode = $_POST['refcode'];
	
	//Buil referral code query
	$query = "SELECT * FROM accounts WHERE ReferralCode = '$rcode'";
	
	//Run the username query
	$result = mysqli_query($dbc, $query) or die ('Referral code read error!');
	
	//Check to see if we got any rows
	if (mysqli_num_rows($result) == 0)
	{
		header('Location: checkout.php?rc=1');
		exit;
	}
	
	if (mysqli_num_rows($result) == 1)
	{
		header('Location: checkout.php?rc=2');
		exit;
	}
	

	//Close the db connection
	mysqli_close($dbc);
	
	
	
	//Get and store our PHP session variables
	$row = mysqli_fetch_array($result);
	$_SESSION['refcode'] = $row['ReferralCode'];
	header('Location: confirm.php');
	exit;
	
	header('Location: checkout.php?rc=3');
	exit;
?>