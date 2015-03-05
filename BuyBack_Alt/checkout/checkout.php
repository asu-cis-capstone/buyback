<!DOCTYPE html>

<html>
	<head> 
	<!-- Meta tag -->
	<meta charset="utf-8"/>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

	<!-- Link tag for CSS -->
	<link type="text/css" rel="stylesheet" href="../content/BBB_checkout.css" />
	<link type="text/css" rel="stylesheet" href="../content/BBB_header.css" />
	<!--<link type="text/css" rel="stylesheet" href="../content/bootstrap.css" />-->
	
	
	<link href="../images/Buyback-Boss-Logo.jpg" rel="shortcut icon" type="image/x-icon" />

	<!-- JavaScript Tags -->
        <script src="../scripts/jquery-2.1.3.js" type="text/javascript"></script>
		<script src="../scripts/bootstrap.js" type="text/javascript"></script>
		<script src="../scripts/main.js" type="text/javascript"></script>

	<!-- Web Page Title -->
	<title>Checkout</title>

	</head>
	
	<body>
	    <!-- Header and Navigation Bar -->
	    <header>
            <div class="content-wrapper">
                <div>
                    <nav class="navbar-fixed-top">
                            <a class="logo-desktop" href="#"><img src="../images/Buyback-Boss-Logo.png" alt="Sell and Buy Used iPhone" /></a> 
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

		
		<!-- What your selling, option to go back, option to add another device
		<div id="youareselling">
			<div class="leftarrow">
				<a href="#"><img src="../images/leftarrow.png" id="left_arrow"/></a>
			</div>
			
			<div class="sellingpic">
				<img src="../images/youareselling.png" id="You_Are_Selling"/>
			</div>
			
		<!--Add Another Device Button...?-->
		<!---<div id="addanother">
			<button type="add" class="add_btn">Add Another Device</button>
		</div>
		</div>-->
		<div id="title">
			Checkout
		</div>
		
		<div id="form">
			
			<!-- FORM -->
			<form action="confirm.php" method="post" class="form-inline">	
			
			<!-- Choose Payment Method -->
				<div class="paymentmethod">
					<p class="label">Payment Method:</p>
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-primary active">
							<input type="radio" name="payment" id="paypal"><img src="../images/paypal.png" alt="paypal" />
						</label>
						<label class="btn btn-primary">
							<input type="radio" name="payment" id="check"><img src="../images/check.png" alt="check" /><span class="btntext">Check</span>
						</label>
					</div>
				</div>
			
			<!-- Choose Shipping Method -->
			<div class="shippingmethod">
				<p class="label">Shipping Method:</p>
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-primary active">
						<input type="radio" name="payment" id="paypal" value="paypal"><span class="btntext">Send me a buyback box!</span>
					</label>
					<label class="btn btn-primary">
						<input type="radio" name="payment" id="check"><span class="btntext">I have my own box! Print a label now!</span>
					</label>
				</div>
			</div>
		
			<div id="offercontainer">
				<span class="offerstatement">
				Your offer:
				</span>
			<div id="offerAmount">
				$355
			</div>
		</div>
		
		<!-- Shipping -->
			<div id="shipinfo">
			<p class="label">Shipping Information:</p>
			<div class="form-group">
			
			<!-- First Name -->
		`		<input type="text" class="form-control" id="firstname" name="firstname"
				required autofocus
				pattern="[a-zA-Z-' ]{4,30}"
				title="Name: 4-30 chars, u/l case letters and - or ' only!"
				placeholder="First Name" />
				
			<!-- Last Name -->
				<input type="text" class="form-control" id="lastname" name="lastname"
				required
				pattern="[a-zA-Z-' ]{4,30}"
				title="Name: 4-30 chars, u/l case letters and - or ' only!"
				placeholder="Last Name" />
				
			<!-- Email -->	
				<input type="email" class="form-control" id="email" name="email"
				title="Valid email address only!" required
				placeholder="Email Address" maxlength="50" />
				
			<!-- Phone Number -->
				<input type="text" class="form-control" id="phone" name="phone"
				required
				pattern="[0-9]{10,10}"
				title="US Based Phone Number 10 numbers exactly"
				placeholder="Phone Number"/>
				
			<!-- Street Address -->	
				<input type="text" class="form-control" id="streetaddress" name="streetaddress"
				required
				maxlength="60"
				title="Enter valid street address" 
				placeholder="Street Address"/>
				
			<!-- Apt Number -->
				<input type="text" class="form-control" id="aptnumber" name="aptnumber"
				placeholder="Apt. Unit P.O. Box etc..." />
				
			<!-- City -->
				<input type="text" class="form-control" id="city" name="city"
				required
				pattern="[a-zA-Z-' ]{2,30}"
				title="Enter city"
				placeholder="City" />
				
			<!-- State -->	
				<input type="text" class="form-control" id="state" name="state"
				required
				pattern="[a-zA-Z-' ]{4,30}"
				title="Enter State"
				placeholder="State" />
				
			<!-- Zip Code -->	
				<input type="text" class="form-control" id="zip" name="zip"
				required
				pattern="[0-9]{5,5}"
				title="Enter valid 5 digit zip code"
				placeholder="Zip Code" />
				
				<br/>
				
				<label for="refcode">Referral/Coupon Code</label> 
				<input type="text" class="form-control" id="refcode" name="refcode"><span class="validate">
				
				
				<button class="btn btn-success" type="submit" value="validate" id="validate" 
				onclick="pricechange();return false;">Validate Code</button></span>
				
				<label for="howhear">How did you hear about Buyback Boss?</label>
				<input type="text" class="form-control" id="howhear">
			</div>
			<span class="checkoutButton">
               <button class="btn btn-primary" type="submit" value="checkout">Submit</button>
			</span>
			</form>
		</div></div>
		
        <footer>
            <div>
                <div class="float-left">
                    <p>&copy; 2015 - Buyback Boss</p>
                </div>
            </div>
        </footer>
	</body>
</html>