<!DOCTYPE html>
<?php
	session_start("customer");
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
	<link href="../content/BBB_phoneops22.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body  onLoad="good(); pricegood();">

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
	  		<div id="steps">
				<div class="stepwizard">
					<div class="stepwizard-row">
						<div class="stepwizard-step">
							<button type="button" class="btn btn-default btn-circle" onclick="location.href='../models/models.php'">1</button>
							<p>Model</p>
						</div>
						<div class="stepwizard-step">
							<button type="button" class="btn btn-default btn-circle" onclick="location.href='../options/phoneops11.php'">2</button>
							<p>Options</p>
						</div>
						<div class="stepwizard-step">
							<button type="button" class="btn btn-primary btn-circle" onclick="#" disabled="disabled">3</button>
							<p>Quote</p>
						</div> 
						<div class="stepwizard-step">
							<button type="button" class="btn btn-default btn-circle" onclick="#" disabled="disabled">4</button>
							<p>Checkout</p>
						</div>
					</div>
				</div>
			</div>
      </div>
		<div id="phoneImage">
            <img src="../images/iPhone-6-wireframe.jpg" id="small_phone_left"/>
		</div>
		
		<!-- Options and Selections -->
		        <h1>What condition is your phone in?
				 <span class="help">
                <button id="help" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Help with network.">
                 ?
                </button></span></h1>
			<div id="phones">
				<p>
				<div id = "form">
		<form action="../checkout/process.php" method="post">
			<span class="storage">
			  <div class="btn-group">
                <label class = "btn btn-primary">
					<input type = "radio" name="condition" id="mintcon" value="mint" onfocus="mint(); pricemint();" onclick="mint(); pricemint();"/><br/>MINT
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="condition" id="goodcon" value="good" checked autofocus onfocus="good(); pricegood();" onclick="good(); pricegood();"/><br/>GOOD
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="condition" id="crackedcon" value="cracked" onfocus="cracked(); pricecracked();" onclick="cracked(); pricecracked();"/><br/>CRACKED
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="condition" id="damagedcon" value="damaged" onfocus="damaged(); pricedamaged();" onclick="damaged(); pricedamaged();"/><br/>DAMAGED
                </label>
                <label class="btn btn-primary">
                 <input type="radio" name="condition" id="brokencon" value="broken" onfocus="broken(); pricebroken();" onclick="broken(); pricebroken();"/><br/>BROKEN
                </label>
           </div></span>
		   		<div id="messages">
				<p></p>
				</div>
			 <button id="checkoutButton" class="btn btn-default" type="submit" value="checkout">Checkout</button>
		</div>
		</form>				
		</p>	
</div> <!---End phones -->
		<div id="offercontainer">
		   <span class="offerstatement">
               Your offer is:
           </span>
		   <div id="offerAmount">
		   $355
           </div>


		</div>
		


</div> <!-- End container -->


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
	<script  type="text/javascript" src="../scripts/main.js"></script>

  </body>
</html>
