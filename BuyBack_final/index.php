<?php
	//ini_set('session.save_path', '/home3/buybackb/public_html/testcis440/session');
	if(session_status() == PHP_SESSION_ACTIVE){
		var_dump($_SESSION);
		session_destroy();
	}
	session_start("order");
	unset($_SESSION['brand']);
	unset($_SESSION['model']);
	unset($_SESSION['carrier']);
	unset($_SESSION['size']);
	unset($_SESSION['quotes']);
	unset($_SESSION['condition']);
	unset($_SESSION['modelId']);
	unset($_SESSION['rcode']); 
	unset($_SESSION['invalid']);
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
	<!--Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Lobster|Oswald:400,700|Bree+Serif|Roboto+Condensed:700italic,400,300|Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
  
  <!-- Bootstrap core CSS -->
    <link href="content/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="content/sticky-footer-navbar.css" rel="stylesheet">
	<link href="content/BBB_home.css" rel="stylesheet">

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
          <a class="navbar-brand" href="#"><img id="navlogo" src="images/Buyback-Boss-Logo.png"  alt="logo"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#how">HOW IT WORKS</a></li>
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
	<div id="main">
	 <div class="page-header">
        <h1>SELL MY...</h1>
      </div>
	  <div id="phoneselect">
        <a href="models/models.php?brand=iPhone" onclick="post"><img src="images/iphone.png" id="img_iPhone1"/></a>
        <a href="models/models.php?brand=samsung" onclick="post"><img src="images/samsung.png" id="img_iPhone2"/></a>
		</div>
		</div>
		<div id="how">
		<div class="row clearfix">
		 <h1>HOW IT WORKS</h1>
		<div class="col-md-4 column">
			<h2>
				Get a Quote
			</h2>
			<p>
				Select your iPhone on our homepage. Select your iPhone and evaluate its condition. Designate whether you would like to be paid via Business Check or PayPal and we will mail you a prepaid shipping kit. Shipping is 100% Free.			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>
		<div class="col-md-4 column">
			<h2>
				Ship Your iPhone with a Prepaid Shipping Label
			</h2>
			<p>
				Upon receipt of our prepaid mailing kit, place your iPhone in our packaging material supplied within the box, and secure the box with our tape. Drop the mailing kit off at your local Post Office, Blue Bin, or with your local Postal Carrier.			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>
		<div class="col-md-4 column">
			<h2>
				Get Paid
			</h2>
			<p>
				Once we receive your package, we will inspect your item and confirm its condition. We issue your payment within 2 business days via Check or PayPal. You can track the status of your iPhone on our website. Sit back, relax, and get paid!			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		</div>
	</div>
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
    <script src="scripts/bootstrap.js"></script>

  </body>
</html>
