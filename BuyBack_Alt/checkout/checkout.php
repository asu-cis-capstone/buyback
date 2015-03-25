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
	<link href="../content/BBB_checkout2.css" rel="stylesheet">
	
	<!-- JavaScript Messages Script -->
	<script type="text/javascript" src="../scripts/msgs.js"></script>

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
							<button type="button" class="btn btn-default btn-circle" onclick="../options/phoneops11.php">2</button>
							<p>Options</p>
						</div>
						<div class="stepwizard-step">
							<button type="button" class="btn btn-default btn-circle" onclick="../options/phoneops22.php">3</button>
							<p>Quote</p>
						</div> 
						<div class="stepwizard-step">
							<button type="button" class="btn btn-primary btn-circle" onclick="#">4</button>
							<p>Checkout</p>
						</div>
					</div>
				</div>
			</div>
      </div>

	  		<div id="offercontainer">
				<span class="offerstatement">
				Your order total:
				</span>
			<div id="offerAmount">
				<?php
					if ($_GET["rc"] == 1)
					{
						echo '<pclass="validate">Referral code invalid </b>$355</p>
						<script>closemodal()</script>';
					}
					if ($_GET["rc"] == 2)
					{
						echo '<p class="validate">$365</p>';
					}
					if ($_GET["rc"] == 3)
					{
						echo '<p class="validate">Returned from process.php!</p>';
					}
				?>
			</div>
		</div>
	 <div id="forms">
	<div class="row form-group">
        <div class="col-xs-12">
            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                <li class="active"><a href="#step-1">
                    <h4 class="list-group-item-heading">Step 1</h4>
                    <p class="list-group-item-text">Referral &amp; Coupon Codes</p>
                </a></li>
                <li class="disabled"><a href="#step-2">
                    <h4 class="list-group-item-heading">Step 2</h4>
                    <p class="list-group-item-text">Payment &amp; Shipping Options</p>
                </a></li>
                <li class="disabled"><a href="#step-3">
                    <h4 class="list-group-item-heading">Step 3</h4>
                    <p class="list-group-item-text">Shipping &amp; Mailing Address</p>
                </a></li>
            </ul>
        </div>
	</div>
    
	<div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h1>Do you have a <strong>referral</strong> or <strong>coupon</strong> code?</h1>
					<form id="referral" action="process.php" method="post">
					<!-- Referral Code -->	
					<input type="text" class="form-control" id="refcode" name="refcode"
					pattern="[a-z0-9]{6,6}"
					title="Invalid referral code!"
					onfocus="refmsg()"/>
			
					<!-- Validate Button for Ref Code -->	
					<span class="validate">
					<input class="btn btn-success" type="submit" id="validate" value="Validate Code" 
					onclick="location.href='process.php'"></button>
					</span>
				</form>
                <br/><button id="activate-step-2" class="btn btn-primary btn-lg">Next</button>
            </div>
        </div>
		<div id="refmessage">
		<p>If you do not have a referral code or coupon code, click "Next" to continue!</p>
		</div>
    </div>
	
	
	
	<!-- FORM -->
	<form action="confirm2.php" method="post" class="form-inline">
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12 well">
                <h1 class="text-center"> How would you like us to <strong>PAY</strong> you?</h1>
				<!-- Choose Payment Method -->
				<div class="paymentmethod">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-primary active">
							<input type="radio" name="payment" value="paypal" id="paypal"><br/><span class="btntext1">PayPal</span>
						</label>
						<label class="btn btn-primary">
							<input type="radio" name="payment" value="check" id="check"><br/><span class="btntext1">Check</span>
						</label>
					</div>
				</div>
			
			<h1 class="text-center"> How would you like to<strong> ship </strong>your device?<br/><span class="sub">We pay for ALL shipping! It's FREE for you!</span></h1>
			<!-- Choose Shipping Method -->
			<div class="shippingmethod">
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-primary active">
						<input type="radio" name="payment" id="paypal" value="paypal"><span class="btntext">Send me a <br/>buyback box!</span>
						
					</label>
					<label class="btn btn-primary">
						<input type="radio" name="payment" id="check"><span class="btntext">I have my own box!<br/>Print a shipping label now!</span>
					</label>
				</div>
			</div>
				<button id="activate-step-3" class="btn btn-primary btn-lg">Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12 well">
                <h1 class="text-center">Address Information</h1>
			<!-- Shipping -->
			<div id="shipinfo">
			<div class="form-group">
			
			<!-- First Name -->
		<input type="text" class="form-control" id="firstname" name="firstname"
				required 
				pattern="[a-zA-Z-' ]{2,30}"
				title="Name: 2-30 chars, u/l case letters and - or ' only!"
				placeholder="First Name" 
				onfocus="fnamemsg()"/>
				
			<!-- Last Name -->
				<input type="text" class="form-control" id="lastname" name="lastname"
				required
				pattern="[a-zA-Z-' ]{2,30}"
				title="Name: 2-30 chars, u/l case letters and - or ' only!"
				placeholder="Last Name" 
				onfocus="lnamemsg()"/>
				
				<br/>
			<!-- Email -->	
				<input type="email" class="form-control" id="email" name="email"
				required
				pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
				title="Valid email address only!" 
				placeholder="Email Address" maxlength="50" 
				onfocus="emailmsg()"/>
				
			<!-- Phone Number -->
				<input type="text" class="form-control" id="phone" name="phone"
				required
				pattern="[0-9]{10,10}"
				title="US Based Phone Number 10 numbers exactly"
				placeholder="Phone Number"
				onfocus="pnummsg()"/>
				
				<br/>
			<!-- Street Address -->	
				<input type="text" class="form-control" id="streetaddress" name="streetaddress"
				required
				maxlength="60"
				title="Enter valid street address" 
				placeholder="Street Address"
				onfocus="streetmsg()"/>
				
			<!-- Apt Number -->
				<input type="text" class="form-control" id="aptnumber" name="aptnumber"
				maxlength="20"
				placeholder="Apt. Unit P.O. Box etc..." 
				onfocus="aptmsg()"/>
				
				<br/>
			<!-- City -->
				<input type="text" class="form-control" id="city" name="city"
				required
				pattern="[a-zA-Z-' ]{2,30}"
				title="Enter city"
				placeholder="City" 
				onfocus="citymsg()"/>
				
			<!-- State -->	
				<select type="text" class="form-control" id="state" name="state" onfocus="statemsg()">
					<option value="XX">Select a state...</option>
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AZ">Arizona</option>
					<option value="AR">Arkansas</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Connecticut</option>
					<option value="DE">Delaware</option>
					<option value="DC">District of Columbia</option>
					<option value="FL">Florida</option>
					<option value="GA">Georgia</option>
					<option value="HI">Hawaii</option>
					<option value="ID">Idaho</option>
					<option value="IL">Illinois</option>
					<option value="IN">Indiana</option>
					<option value="IA">Iowa</option>
					<option value="KS">Kansas</option>
					<option value="KY">Kentucky</option>
					<option value="LA">Louisiana</option>
					<option value="ME">Maine</option>
					<option value="MD">Maryland</option>
					<option value="MA">Massachusetts</option>
					<option value="MI">Michigan</option>
					<option value="MN">Minnesota</option>
					<option value="MS">Mississippi</option>
					<option value="MO">Missouri</option>
					<option value="MT">Montana</option>
					<option value="NE">Nebraska</option>
					<option value="NV">Nevada</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NY">New York</option>
					<option value="NC">North Carolina</option>
					<option value="ND">North Dakota</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="PA">Pennsylvania</option>
					<option value="RI">Rhode Island</option>
					<option value="SC">South Carolina</option>
					<option value="SD">South Dakota</option>
					<option value="TN">Tennessee</option>
					<option value="TX">Texas</option>
					<option value="UT">Utah</option>
					<option value="VT">Vermont</option>
					<option value="VA">Virginia</option>
					<option value="WA">Washington</option>
					<option value="WV">West Virginia</option>
					<option value="WI">Wisconsin</option>
					<option value="WY">Wyoming</option>
				</select>
				
			<!-- Zip Code -->	
				<input type="text" class="form-control" id="zip" name="zip"
				required
				pattern="[0-9]{5,5}"
				title="Enter valid 5 digit zip code"
				placeholder="Zip Code" 
				onfocus="zipmsg()"/>
				
				<br/>
				
				
			<!-- How did you hear about us? -->
				<span class="sub2"><label for="howhear">How did you hear about Buyback Boss?</label></span>
				<select type="text" class="form-control" id="family" name="family" onfocus="howdidmsg()">
					<option value="XXX">Select an option...</option>
					<option value="Family">Family</option>
					<option value="Friend">Friend</option>
					<option value="BB End">Buyback Endorser</option>
					<option value="Ad">Advertisement</option>
					<option value="Other">Other</option>
				</select>
			
			<div id="messages">
					<p></p>
				</div>
				
			</div><br/>
			
               <button id="checkoutButton" class="btn btn-primary" type="submit">Submit Order</button>

		</div>
				
            </div>
        </div>
    </div>
	
</form></div>
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
