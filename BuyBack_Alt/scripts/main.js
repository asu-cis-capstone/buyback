  $(function(){
    $('button').popover()
    });


function mint()
{
	document.getElementById("messages").innerHTML=
	"If ALL of the following are true: <span class='bullet'><br/>No Scratches <br>No Blemishes <br>Flawless Condition</span>";
}

function good()
{
	document.getElementById("messages").innerHTML=
	"If ALL of the following are true: <span class='bullet'><br/>Fully functional<br>All buttons function properly <br>No chips or major scratches <br>Never exposed to liquid</span>";
}

function cracked()
{
	document.getElementById("messages").innerHTML=
	"If ALL of the following are true: <span class='bullet'><br/>Fully functional<br>Cracked front or back glass<br>NO LCD damage <br>Never exposed to liquid</span>";
}

function damaged()
{
	document.getElementById("messages").innerHTML=
	"If ANY of the following are true: <span class='bullet'><br/>Non-working or missing buttons<br>Device has personal engraving<br>Cannot make or receive calls<br></span>";
}

function broken()
{
	document.getElementById("messages").innerHTML=
	"If ANY of the following are true: <span class='bullet'><br/>Damaged LCD screen<br>Does not power on <br>Bent midframe<br>Liquid damage<br>Any password lock</span>";
}