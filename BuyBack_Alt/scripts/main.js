  $(function(){
    $('button').popover()
    });
	
	$(window).load(function(){
        $('#refer').modal('show');
		
    });

function pricechange()
{
	document.getElementById("offerAmount").innerHTML=
	"$365<br><span class='small'>Referral code applied!</span>"
	document.getElementById("offerAmount").style.color = "green";
	window.scrollBy(0,-400);
}

!function(d,s,id){
	var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
	if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
	fjs.parentNode.insertBefore(js,fjs);}
}(document, 'script', 'twitter-wjs');

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function mint()
{
	document.getElementById("messages").innerHTML=
	"If ALL of the following are true: <span class='bullet'><br/>No Scratches <br>No Blemishes <br>Flawless Condition</span>";
}

function pricemint()
{
	document.getElementById("offerAmount").innerHTML=
	"$400";
}

function good()
{
	document.getElementById("messages").innerHTML=
	"If ALL of the following are true: <span class='bullet'><br/>Fully functional<br>All buttons function properly <br>No chips or major scratches <br>Never exposed to liquid</span>";
}

function pricegood()
{
	document.getElementById("offerAmount").innerHTML=
	"$355";
}

function cracked()
{
	document.getElementById("messages").innerHTML=
	"If ALL of the following are true: <span class='bullet'><br/>Fully functional<br>Cracked front or back glass<br>NO LCD damage <br>Never exposed to liquid</span>";
}

function pricecracked()
{
	document.getElementById("offerAmount").innerHTML=
	"$250";
}

function damaged()
{
	document.getElementById("messages").innerHTML=
	"If ANY of the following are true: <span class='bullet'><br/>Non-working or missing buttons<br>Device has personal engraving<br>Cannot make or receive calls<br></span>";
}

function pricedamaged()
{
	document.getElementById("offerAmount").innerHTML=
	"$100";
}

function broken()
{
	document.getElementById("messages").innerHTML=
	"If ANY of the following are true: <span class='bullet'><br/>Damaged LCD screen<br>Does not power on <br>Bent midframe<br>Liquid damage<br>Any password lock</span>";
}

function pricebroken()
{
	document.getElementById("offerAmount").innerHTML=
	"$15";
}

function closemodal()
{
	document.getElementById("#option").style.display = "none";
}