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
	<div id="option">
		<!-- Modal -->
		<div class="modal fade" id="refer">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Do you have a referral code?</h4>
			  </div>
			  <div class="modal-body">
				<form id="referral" action="process.php" method="post">
					<!-- Referral Code -->	
					<label for="refcode">Referral/Coupon Code</label> 
					<input type="text" class="form-control" id="refcode" name="refcode"
					pattern="[a-z0-9]{6,6}"
					title="Invalid referral code!"/>
			
					<!-- Validate Button for Ref Code -->	
					<span class="validate">
					<input class="btn btn-success" type="submit" id="validate" value="Validate Code" 
					onclick="closemodal(); location.href='process.php';"></button>
					</span>
				</form>
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	</div>
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
		
		<!-- Shipping -->
			<div id="shipinfo">
			<p class="label">Shipping Information:</p>
			<div class="form-group">
			
			<!-- First Name -->
		`		<input type="text" class="form-control" id="firstname" name="firstname"
				required autofocus
				pattern="[a-zA-Z-' ]{2,30}"
				title="Name: 2-30 chars, u/l case letters and - or ' only!"
				placeholder="First Name" />
				
			<!-- Last Name -->
				<input type="text" class="form-control" id="lastname" name="lastname"
				required
				pattern="[a-zA-Z-' ]{2,30}"
				title="Name: 2-30 chars, u/l case letters and - or ' only!"
				placeholder="Last Name" />
				
			<!-- Email -->	
				<input type="email" class="form-control" id="email" name="email"
				required
				pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
				title="Valid email address only!" 
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
				maxlength="20"
				placeholder="Apt. Unit P.O. Box etc..." />
				
			<!-- City -->
				<input type="text" class="form-control" id="city" name="city"
				required
				pattern="[a-zA-Z-' ]{2,30}"
				title="Enter city"
				placeholder="City" />
				
			<!-- State -->	
				<select type="text" class="form-control" id="state" name="state">
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
				placeholder="Zip Code" />
				
				<br/>
				
				
			<!-- How did you hear about us? -->
				<label for="howhear">How did you hear about Buyback Boss?</label>
				<select type="text" class="form-control" id="family" name="family">
					<option value="XXX">Select an option...</option>
					<option value="Family">Family</option>
					<option value="Friend">Friend</option>
					<option value="BB End">Buyback Endorser</option>
					<option value="Ad">Advertisement</option>
					<option value="Other">Other</option>
				</select>
				
				
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