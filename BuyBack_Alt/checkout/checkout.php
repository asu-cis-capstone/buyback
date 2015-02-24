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
	

	<!-- JavaScript Tags -->
	<script src="../scripts/jquery-2.1.3.js"></script>
	<script src="../scripts/bootstrap.js"></script>

	<!-- Web Page Title -->
	<title>BuyBackBoss Checkout - Buy and Sell Used iPhone and Samsung</title>

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
		
		<!--Progress Bar -->
		<div class="progress">
			<div class="progress-bar progress-bar-striped active" role="progressbar"
				aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
				100% complete!
			</div>
		</div>
		
		<!-- What your selling, option to go back, option to add another device -->
		<div id="youareselling">
			<div class="leftarrow">
				<a href="#"><img src="../images/leftarrow.png" id="left_arrow"/></a>
			</div>
			
			<div class="sellingpic">
				<img src="../images/youareselling.png" id="You_Are_Selling"/>
			</div>
		<!--Add Another Device Button...?-->
		<div id="addanother">
			<button type="add" class="add_btn">Add Another Device</button>
		</div>
		</div>

		<div id="form">
			<!-- FORM -->
		<form class="form-inline">	
			<!-- Choose Payment Method -->
			<div class="paymentmethod">
				<p>Payment Method:</p>
				<label class="radio-payment">
				<input type="radio" name="inline-payment" id="fast" value="fast"> Fast
				</label>
				<label class="radio-payment">
				<input type="radio" name="inline-payment" id="faster" value="faster"> Faster
				</label>
			</div>
			
			<!-- Choose Shipping Method -->
			<div class="shippingmethod">
				<p>Shipping Method:</p>
				<label class="radio-shipping">
				<input type="radio" name="inline-shipping" id="fast" value="fast"> Fast
				</label>
				<label class="radio-shipping">
				<input type="radio" name="inline-shipping" id="faster" value="faster"> Faster
				</label>
				
			</div>
		
		<!-- Shipping -->
			<p>Shipping Information</p>
			<div class="form-group">
				<input type="text" class="form-control" id="firstname" placeholder="First Name">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="lastname" placeholder="Last Name">
			</div>
			<div class="form-group">
				<input type="email" class="form-control" id="email" placeholder="Email Address">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="streetaddress" placeholder="Street Address">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="aptnumber" placeholder="Apt. Unit P.O. Box etc...">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="city" placeholder="City">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="state" placeholder="State">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="zip" placeholder="Zip Code">
			</div>
			<div class="form-group">
				<label for="refcode">Referral or Coupon Code</label> 
				<input type="text" class="form-control" id="refcode"> 
			</div>
			<div class="form-group">
				<label for="howhear">How did you hear about Buyback Boss?</label>
				<input type="text" class="form-control" id="howhear">
			<button type="button" class="btn btn-default" onclick="location.href = 'confirm.php' ">Submit Information</button>
		</form>
		</div>		
        <footer>
            <div>
                <div class="float-left">
                    <p>&copy; 2015 - Buyback Boss</p>
                </div>
            </div>
        </footer>
	</body>
</html>