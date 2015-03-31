<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Sell iPhone</title>
        <link href="../images/Buyback-Boss-Logo.jpg" rel="shortcut icon" type="image/x-icon" />
        <link href="../content/BBB_phoneops2.css" rel="stylesheet"/>
		<link href="../content/BBB_header.css" rel="stylesheet"/>
		
        <script src="../scripts/jquery-2.1.3.js" type="text/javascript"></script>
		<script src="../scripts/bootstrap.js" type="text/javascript"></script>
		<script src="../scripts/main.js" type="text/javascript"></script>
		
    </head>
    <body>
    <header>
            <div class="content-wrapper">
                <div>
                    <nav class="navbar-fixed-top">
                            <a class="logo-desktop" href="#"><img src="../images/Buyback-Boss-Logo.png" alt="Sell and Buy Used iPhone" /></a> 
                        <ul class="nav nav-tabs" role="tablist" id="menu">
                            <li><a href="../how/">HOW IT WORKS</a></li>
                            <li><a href="../reviews/">PRESS &amp; REVIEWS</a></li>
                            <li><a href="../support/">SUPPORT</a></li>
                            <li><a href="../blog">BLOG</a></li>
                            </ul>
                        <button type="button" class="cart" onclick="">
                            CART
                         </button>
                    </nav>
                </div>
            </div>
    </header>
		
 
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:75%">
            75% complete!
            </div>
        </div>
        <div id="phoneCheckout">
                <img src="../images/iPhone-6-wireframe.jpg" alt="iphone" id="img_iPhone_checkout"/>
        
		<div id="contentContainer">
        <div class = "network">
            What condition is the device in?
            <span class="help">
                <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Help with condition.">
                ?
                </button>
            </span>
        
		<div class="btn-group">
                <label class = "btn btn-primary">
					<input type = "radio" name="condition" id="mint" value="mint" onfocus="mint(); pricemint();" onclick="mint(); pricemint();"/>MINT
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="condtion" id="good" value="good" onfocus="good(); pricegood();" onclick="good(); pricegood();"/>GOOD
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="condition" id="cracked" value="cracked" onfocus="cracked(); pricecracked();" onclick="cracked(); pricecracked();"/>CRACKED
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="condition" id="damaged" value="damaged" onfocus="damaged(); pricedamaged();" onclick="damaged(); pricedamaged();"/>DAMAGED
                </label>
                <label class="btn btn-primary">
                    <input type="radio" name="condition" id="broken" value="broken" onfocus="broken(); pricebroken();" onclick="broken(); pricebroken();"/>BROKEN
                </label>
            </div>
        </div>
		
	
		<!-- <span class="conditionIndicator">

           </span>
		<span class="conditionDescription">
               If <b>ALL</b> of the following are true:<br />
               -Fully Functional<br />
               -All buttons work<br />
               -No chips or major scratches<br />
               -Never exposed to liquid<br />
           </span>-->

		</div>
		
		<div id="offercontainer">
		   <span class="offerstatement">
               Your offer is:
           </span>
		   <div id="offerAmount">
           </div>

           <span class="whybuyback">
               <br/><br/><br/>Why Buyback Boss?
           </span>
            
           <span class="whybuybackpoints">
               <br/>Prices Guaranteed for 30 days
               <br/>Same-day Payment
               <br/>Excellent Customer Service
		</div>
		
		<div id="messages">
		<p></p>
		</div>


		   
           <span class="checkoutButton">
               <button class="btn btn-default round" type="submit" value="checkout" onclick="location.href = '../checkout/checkout.php' ">Checkout</button>
           </span>




        </div>

        
        
        

        <!--<footer>
            <div class="content-wrapper">
                <div class="float-left">
                    <p>&copy; 2015 - Buyback Boss</p>
                </div>
            </div>
        </footer>-->

    </body>
       
        
        
   
</html>
