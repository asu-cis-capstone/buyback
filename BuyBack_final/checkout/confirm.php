<!DOCTYPE html>

<?php
	//Connect to the db (Local or Server)
	include('../connection/localconnection.php');
	
	function generateRandomString($length = 6) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyz';
		$charactersLength = strlen($characters);
		$randomString = '';
		global $dbc;
		do {
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
			
			$refQuery = "SELECT * FROM accounts WHERE ReferralCode = '$randomString'";
			$refExist = mysqli_query($dbc, $refQuery) or die('Unable to query referral code');
		} while (!$refExist);
		return $randomString;
	}
	
	$newrefcode = generateRandomString();
	
	//Values from HTML
	$oname = $_POST['firstname'];
	$fname	= mysqli_real_escape_string($dbc, $oname);
	$qname = $_POST['lastname'];
	$lname = mysqli_real_escape_string($dbc, $qname);
	$email = mysqli_real_escape_string($dbc, $_POST['email']);
	$pnumber = $_POST['phone'];
	$saddress = $_POST['streetaddress'];
	$aptnumber = $_POST['aptnumber'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$rcode = $_POST['refcode'];
	
	//Check for existing account
	$existQuery = "SELECT * FROM accounts WHERE Email = '$email' && LastName = '$lname' && FirstName = '$fname' && PhoneNum = '$pnumber' && Address1 = '$saddress' && Address2 = '$aptnumber' && City = '$city' && State = '$state' && Zip = '$zip'";
	$checkExist = mysqli_query($dbc, $existQuery) or die('Unable to query accounts');
	
	if($checkExist){
		//Build SQL statement
		$query =
		"INSERT INTO accounts(Email, LastName, FirstName, PhoneNum, Address1, Address2, City, State, Zip, ReferralCode)" .
		"VALUES ('$email', '$lname', '$fname', '$pnumber', '$saddress', '$aptnumber', '$city', '$state', '$zip', '$newrefcode')";
		
		//Run the query
		$result = mysqli_query($dbc, $query) or die('Unable to write to the database!');
	}
	
	
	// Close the sql connection
	mysqli_close($dbc);

?>

<html>
	<head>
	<!-- Meta tag -->
	<meta charset="utf-8"/>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

	<!-- Link tag for CSS -->
	<link type="text/css" rel="stylesheet" href="../content/BBB_header.css" />
	<link type="text/css" rel="stylesheet" href="../content/BBB_confirm.css" />
	

	<!-- JavaScript Tags -->
	    <script src="../scripts/jquery-2.1.3.js" type="text/javascript"></script>
		<script src="../scripts/bootstrap.js" type="text/javascript"></script>
		<script src="../scripts/main.js" type="text/javascript"></script>
	
	<!-- Web Page Title -->
	<title>BuyBackBoss Checkout Confirm</title>

	</head>
	
	<body>
	<div id="fb-root"></div>
	
	
	<!-- Modal -->
<div class="modal fade" id="refer">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Join our referral program!</h4>
      </div>
      <div class="modal-body">
        <img src="../images/referraldummy.png" alt="refer a friend!" id="modalimg"/>
      </div>
	  <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count"></div>
	  <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
			
	<!-- Header -->		
	    <header>
            <div class="content-wrapper">
                <div>
                    <nav class="navbar-fixed-top">
                            <a class="logo-desktop" href="../"><img src="../images/Buyback-Boss-Logo.png" alt="Sell and Buy Used iPhone" /></a> 
                        <ul class="nav nav-tabs" id="menu">
                            <li><a href="../how/">HOW IT WORKS</a></li>
                            <li><a href="../reviews/">PRESS & REVIEWS</a></li>
                            <li><a href="../support/">SUPPORT</a></li>
                            <li><a href="../blog/">BLOG</a></li>
                        </ul>
                        <button type="button" class="cart" onclick="">
                            CART
                        </button>
                    </nav>
                </div>
			</div>	
        </header>
		<div id="message-container">
			<div id="message">
				<p>Your order is being processed!</p>
				<p>An email has been sent to the address with your receipt and confirmation</p>
				<p>Thanks for choosing us! We greatly appreciate it.</p>
			</div>
			

			<div>
				<button type="button" id="return" onclick="location.href = '../index.php'">
					HOME
				</button>
			</div>
		</div>
       <!-- <footer>
            <div>
                <div class="float-left">
                    <p>&copy; 2015 - Buyback Boss</p>
                </div>
            </div>
        </footer>-->
		

	</body>
</html>
