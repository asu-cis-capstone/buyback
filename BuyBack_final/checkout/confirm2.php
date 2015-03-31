<!DOCTYPE html>

<?php
	session_start();
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
	if(isset($_SESSION['refcode'])){
		$rcode = $_SESSION['refcode'];
	}
	$payment = $_POST['payment'];
	$shipping = $_POST['shipping'];
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
	$accountIdQuery = "SELECT AccountId FROM accounts WHERE Email = '$email' && LastName = '$lname' && FirstName = '$fname' && PhoneNum = '$pnumber' && Address1 = '$saddress' && Address2 = '$aptnumber' && City = '$city' && State = '$state' && Zip = '$zip'";
	$accountIdReturn = mysqli_query($dbc, $accountIdQuery) or die('Unable to find accountId');
	$row = mysqli_fetch_array($accountIdReturn);
	$accountId = $row[0];
	$modelId = $_SESSION['modelId'];
	$salePrice = $_SESSION['quotes'][($_SESSION['condition'])];
	$date = date("Y-m-d");
	if(isset($rcode)){
		$orderQuery = "INSERT INTO orders(OrderId, AccountId, ModelId, PostedPrice, ShipStatus, ShipMethod, DateRecieved, Payment, ReferralCode)" . 
								"VALUES (NULL, '$accountId', '$modelId', '$salePrice', 'Received', '$shipping','$date', '$payment', '$rcode')";
	}
	else{
		$orderQuery = "INSERT INTO orders(OrderId, AccountId, ModelId, PostedPrice, ShipStatus, ShipMethod, DateRecieved, Payment) VALUES (NULL, '$accountId', '$modelId', '$salePrice', 'Received', '$shipping','$date', '$payment')";
	}
	echo $accountId;
	echo $modelId;
	echo $salePrice;
	echo $shipping;
	echo $date;
	echo $payment;
	$orderResult = mysqli_query($dbc, $orderQuery) or die('Unable to post order to db!');
	
	// Close the sql connection
	mysqli_close($dbc);

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Buyback Boss</title>

    <!-- Bootstrap core CSS -->
    <link href="../content/bootstrap.min.css" rel="stylesheet">
	
	<!--Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Lobster|Oswald:400,700|Bree+Serif|Roboto+Condensed:700italic,400,300|Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../content/sticky-footer-navbar.css" rel="stylesheet">
	<link href="../content/BBB_confirm.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<div class="modal fade" id="refer">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Join our referral program!</h4>
      </div>
      <div class="modal-body">
	  <div id="textrefer">
        Share your referral code with friends! When they sell their device to Buyback Boss, you will get $10 and so will they!
	  </div>
	  <div id="share">
	  <div id="fb">
	  <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count"></div></div>
	  <div id="twitter"><a href="https://twitter.com/share" class="twitter-share-button" data-size="large">Tweet</a></div>
	</div>
	</div>
	</div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  
  
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img id="navlogo" src="../images/Buyback-Boss-Logo.png"  alt="logo"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
			<li><a href="../index.php">HOME</a></li>
            <li><a href="../index.php#home">HOW IT WORKS</a></li>
            <li><a href="#press">PRESS & REVIEWS</a></li>
            <li class="SUPPORT">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">SUPPORT<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Track Your Order</a></li>
                <li><a href="#">FAQ</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Contact</li>
                <li><a href="#">24/7 Chat Support</a></li>
                <li><a href="#">Contact Form</a></li></ul>
				<li><a href="#">BLOG</a></li></li>
              </ul>
			  <ul class="nav navbar-nav navbar-right">
					<li><a href="#cart">CART<span class="sr-only">(current)</span></a></li>
			  </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
	<div class="page-header">
        <h1>THANK YOU!</h1>
      </div>
	  		<div id="message-container">
			<div id="message">
				<p>Your order is being processed!</p>
				<p>An email has been sent to the address with your receipt and confirmation</p>
				<p>Thanks for choosing us! We greatly appreciate it.</p>
			</div>

			<!--<div>
				<button type="button" id="return" onclick="location.href = '../index.php'">
					HOME
				</button>-->
			</div>
		</div>

</div>



    <footer class="footer">
      <div class="container">
        <p class="text-muted">Buyback Boss Information</p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../scripts/bootstrap.js"></script>
	<script src="../scripts/main.js"></script>

  </body>
</html>
