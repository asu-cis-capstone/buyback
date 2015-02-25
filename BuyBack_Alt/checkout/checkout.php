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
                            <li><a href="how/">HOW IT WORKS</a></li>
                            <li><a href="reviews/">PRESS & REVIEWS</a></li>
                            <li><a href="support/">SUPPORT</a></li>
                            <li><a href="blog/">BLOG</a></li>
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
		<form class="form-inline">	
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
			</div></div>
			
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
				
			</div></div>
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
				<input type="text" class="form-control" id="firstname" placeholder="First Name">
				<input type="text" class="form-control" id="lastname" placeholder="Last Name">
				<input type="email" class="form-control" id="email" placeholder="Email Address">
				<input type="text" class="form-control" id="phone" placeholder="Phone Number">
				<input type="text" class="form-control" id="streetaddress" placeholder="Street Address">
				<input type="text" class="form-control" id="aptnumber" placeholder="Apt. Unit P.O. Box etc...">
				<input type="text" class="form-control" id="city" placeholder="City">
				<input type="text" class="form-control" id="state" placeholder="State">
				<input type="text" class="form-control" id="zip" placeholder="Zip Code">
				
				<br/>
				<label for="refcode">Referral or Coupon Code</label> 
				<input type="text" class="form-control" id="refcode"><span class="validate"><button class="btn btn-success" type="submit" value="validate" id="validate" onclick="pricechange()">Validate Code</button></span>
				<label for="howhear">How did you hear about Buyback Boss?</label>
				<input type="text" class="form-control" id="howhear">
			</div>
			<span class="checkoutButton">
               <button class="btn btn-primary" type="submit" value="checkout" onclick="location.href ='confirm.php'">Submit</button>
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