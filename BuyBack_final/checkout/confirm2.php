<?php
	session_start("order");
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
	if(isset($_SESSION['rcode'])){
		$rcode = $_SESSION['rcode'];
	}
	else{
		$rcode = 'None';
	}
	$payment = $_POST['payment'];
	$shipping = $_POST['shipping'];
	//Check for existing account
	$existQuery = "SELECT * FROM accounts WHERE Email = '$email' && LastName = '$lname' && FirstName = '$fname' && PhoneNum = '$pnumber' && Address1 = '$saddress' && Address2 = '$aptnumber' && City = '$city' && State = '$state' && Zip = '$zip'";
	$checkExist = mysqli_query($dbc, $existQuery) or die('Unable to query accounts');
	/* $refrow = mysqli_fetch_array($checkExist); */
	
	if($checkExist){
		//Build SQL statement
		$query =
		"INSERT INTO accounts(Email, LastName, FirstName, PhoneNum, Address1, Address2, City, State, Zip, ReferralCode)" .
		"VALUES ('$email', '$lname', '$fname', '$pnumber', '$saddress', '$aptnumber', '$city', '$state', '$zip', '$newrefcode')";
		
		//Run the query
		$result = mysqli_query($dbc, $query) or die('Unable to write to the database!');
	}
/* 	else{
		$newrefcode = $refrow['ReferralCode'];
	} */
	$accountIdQuery = "SELECT AccountId FROM accounts WHERE Email = '$email' && LastName = '$lname' && FirstName = '$fname' && PhoneNum = '$pnumber' && Address1 = '$saddress' && Address2 = '$aptnumber' && City = '$city' && State = '$state' && Zip = '$zip'";
	$accountIdReturn = mysqli_query($dbc, $accountIdQuery) or die('Unable to find accountId');
	$row = mysqli_fetch_array($accountIdReturn);
	$accountId = (int)$row[0];
	$modelId = (int)$_SESSION['modelId'];
	$salePrice = (int)$_SESSION['quotes'][(int)($_SESSION['condition'])];
	$date = date("Y-m-d");
	$orderQuery = "INSERT INTO orders(AccountId, ModelId, PostedPrice,ShipStatus,ShipMethod, DateReceived,Payment,ReferralCode) VALUES ('$accountId', '$modelId','$salePrice','Received','$shipping','$date','$payment','$rcode')";
	echo $accountId . " Model: " . $modelId ." Price: ". $salePrice . " Ship: ".$shipping . " Date: ".$date. " Payment: " . $payment . " Code: " . $rcode;
	$orderResult = mysqli_query($dbc, $orderQuery) or die(' Unable to post order to db!');
	
	// Close the sql connection
	mysqli_close($dbc);
	session_write_close();
?>

<!DOCTYPE html>



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
	
	<!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../scripts/bootstrap.js"></script>
	<script src="../scripts/main.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

<script src="../scripts/jquery-share-master/jquery.share.js" type="text/javascript"></script>
<link rel="stylesheet" href="../scripts/jquery-share-master/jquery.share.css" type="text/css" />

<script type="text/javascript">
$(document).ready(function () {

    $('#socialshare').share({
        networks: ['facebook','twitter','linkedin','email'],
		title: 'Just sold my phone to www.BuybackBoss.com! Use my code "<?php echo $newrefcode?>" and get $10 toward your sale!',
		urlToShare: 'www.buybackboss.com'
    });
});
</script>


<div class="modal fade" id="refer">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Your friends have old iPhones, too.</h4>
      </div>
      <div class="modal-body">
	  <div id="textrefer">
		When they sell their device to Buyback Boss, <span class="accent">you get $10</span> and <span class="accent">they get $10</span>!
        <br/><br/><span class="lobster">Share your code: </span>
		<div id="socialshare"></div>
		<div id="copy">
		<span class="lobster">Save it for later:</span>
		<?php echo '<br/><span class="fakeinput">'.$newrefcode.'</span>';?></div>
	  </div>
	  <br/><span class="small">Learn more about the Buyback Boss referral program <a href="../referral">here</a>.
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
			<li><a href="../start.php">HOME</a></li>
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





  </body>
</html>