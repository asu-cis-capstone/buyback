<!DOCTYPE html>

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
				<button type="button" id="return" onclick="location.href = '../index.html'">
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