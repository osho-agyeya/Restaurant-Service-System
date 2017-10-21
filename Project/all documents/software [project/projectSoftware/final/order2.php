<?php
include 'connection1.php';
echo "<head>
   <title>Forgot Password</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>    
    <link rel='stylesheet' href='external/css1.css'>
    <link rel='stylesheet' href='external/css2.css'>
    <link rel='stylesheet' href='external/css3.css'>
      <script src='external/jq1.js'></script>
      <script src='external/jq2.js'></script>
      <script src='external/jq3.js'></script>           
      <script src='external/jq4.js'></script> 
        <script>
         $(document).ready(function() {
         $('select').material_select();
      });</script>
</head>
<div class='container' padding:10px>
<div class='row'>
<div class='col l2'> <p></p></div>
<div class='col l8'><table class='striped'>
<tr><th>Item</th><th>quantity</th><th>subtotal</th></tr>";
$cost=0;
$order="<table>";
if(isset($_POST['submit']))
{
	
	if(isset($_POST['101']))
	{
		if(isset($_POST['101q']))
		{
		
		$quantity=$_POST['101q'];
		$cost=$cost+(90*$quantity);
		$current=$_POST['101'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(90*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['102']))
	{
		if(isset($_POST['102q']))
		{
		
		$quantity=$_POST['102q'];
		$cost=$cost+(75*$quantity);
		$current=$_POST['102'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(75*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['103']))
	{
		if(isset($_POST['103q']))
		{
		
		$quantity=$_POST['103q'];
		$cost=$cost+(75*$quantity);
		$current=$_POST['103'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(75*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['104']))
	{
		if(isset($_POST['104q']))
		{
		
		$quantity=$_POST['104q'];
		$cost=$cost+(75*$quantity);
		$current=$_POST['104'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(75*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['105']))
	{
		if(isset($_POST['105q']))
		{
		
		$quantity=$_POST['105q'];
		$cost=$cost+(70*$quantity);
		$current=$_POST['105'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(70*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['106']))
	{
		if(isset($_POST['106q']))
		{
		
		$quantity=$_POST['106q'];
		$cost=$cost+(55*$quantity);
		$current=$_POST['106'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(55*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['107']))
	{
		if(isset($_POST['107q']))
		{
		
		$quantity=$_POST['107q'];
		$cost=$cost+(55*$quantity);
		$current=$_POST['107'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(55*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['108']))
	{
		if(isset($_POST['108q']))
		{
		
		$quantity=$_POST['108q'];
		$cost=$cost+(20*$quantity);
		$current=$_POST['108'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(20*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['109']))
	{
		if(isset($_POST['109q']))
		{
		
		$quantity=$_POST['109q'];
		$cost=$cost+(30*$quantity);
		$current=$_POST['109'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(30*$quantity)."</td></tr>";
		
		}

	}	
	if(isset($_POST['110']))
	{
		if(isset($_POST['110q']))
		{
		
		$quantity=$_POST['110q'];
		$cost=$cost+(20*$quantity);
		$current=$_POST['110'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(20*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['111']))
	{
		if(isset($_POST['111q']))
		{
		
		$quantity=$_POST['111q'];
		$cost=$cost+(95*$quantity);
		$current=$_POST['111'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(95*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['112']))
	{
		if(isset($_POST['112q']))
		{
		
		$quantity=$_POST['112q'];
		$cost=$cost+(95*$quantity);
		$current=$_POST['112'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(95*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['113']))
	{
		if(isset($_POST['113q']))
		{
		
		$quantity=$_POST['113q'];
		$cost=$cost+(120*$quantity);
		$current=$_POST['113'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(120*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['114']))
	{
		if(isset($_POST['114q']))
		{
		
		$quantity=$_POST['114q'];
		$cost=$cost+(65*$quantity);
		$current=$_POST['114'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(65*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['115']))
	{
		if(isset($_POST['115q']))
		{
		
		$quantity=$_POST['115q'];
		$cost=$cost+(55*$quantity);
		$current=$_POST['115'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(55*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['116']))
	{
		if(isset($_POST['116q']))
		{
		
		$quantity=$_POST['116q'];
		$cost=$cost+(70*$quantity);
		$current=$_POST['116'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(70*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['117']))
	{
		if(isset($_POST['117q']))
		{
		
		$quantity=$_POST['117q'];
		$cost=$cost+(80*$quantity);
		$current=$_POST['117'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(80*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['118']))
	{
		if(isset($_POST['118q']))
		{
		
		$quantity=$_POST['118q'];
		$cost=$cost+(95*$quantity);
		$current=$_POST['118'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(95*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['201']))
	{
		if(isset($_POST['201q']))
		{
		
		$quantity=$_POST['201q'];
		$cost=$cost+(80*$quantity);
		$current=$_POST['201'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(80*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['202']))
	{
		if(isset($_POST['202q']))
		{
		
		$quantity=$_POST['202q'];
		$cost=$cost+(60*$quantity);
		$current=$_POST['202'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(60*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['203']))
	{
		if(isset($_POST['203q']))
		{
		
		$quantity=$_POST['203q'];
		$cost=$cost+(75*$quantity);
		$current=$_POST['203'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(75*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['204']))
	{
		if(isset($_POST['204q']))
		{
		
		$quantity=$_POST['204q'];
		$cost=$cost+(70*$quantity);
		$current=$_POST['204'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(70*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['205']))
	{
		if(isset($_POST['205q']))
		{
		
		$quantity=$_POST['205q'];
		$cost=$cost+(70*$quantity);
		$current=$_POST['205'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(70*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['206']))
	{
		if(isset($_POST['206q']))
		{
		
		$quantity=$_POST['206q'];
		$cost=$cost+(80*$quantity);
		$current=$_POST['206'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(80*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['207']))
	{
		if(isset($_POST['207q']))
		{
		
		$quantity=$_POST['207q'];
		$cost=$cost+(95*$quantity);
		$current=$_POST['207'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(95*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['208']))
	{
		if(isset($_POST['208q']))
		{
		
		$quantity=$_POST['208q'];
		$cost=$cost+(55*$quantity);
		$current=$_POST['208'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(55*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['209']))
	{
		if(isset($_POST['209q']))
		{
		
		$quantity=$_POST['209q'];
		$cost=$cost+(65*$quantity);
		$current=$_POST['209'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(65*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['210']))
	{
		if(isset($_POST['210q']))
		{
		
		$quantity=$_POST['210q'];
		$cost=$cost+(55*$quantity);
		$current=$_POST['210'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(55*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['211']))
	{
		if(isset($_POST['211q']))
		{
		
		$quantity=$_POST['211q'];
		$cost=$cost+(50*$quantity);
		$current=$_POST['211'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(50*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['212']))
	{
		if(isset($_POST['212q']))
		{
		
		$quantity=$_POST['212q'];
		$cost=$cost+(50*$quantity);
		$current=$_POST['212'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(50*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['213']))
	{
		if(isset($_POST['213q']))
		{
		
		$quantity=$_POST['213q'];
		$cost=$cost+(50*$quantity);
		$current=$_POST['213'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(50*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['214']))
	{
		if(isset($_POST['214q']))
		{
		
		$quantity=$_POST['214q'];
		$cost=$cost+(45*$quantity);
		$current=$_POST['214'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(45*$quantity)."</td></tr>";
		}

	}
	if(isset($_POST['215']))
	{
		if(isset($_POST['215q']))
		{
		
		$quantity=$_POST['215q'];
		$cost=$cost+(45*$quantity);
		$current=$_POST['215'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(45*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['216']))
	{
		if(isset($_POST['216q']))
		{
		
		$quantity=$_POST['216q'];
		$cost=$cost+(80*$quantity);
		$current=$_POST['216'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(80*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['217']))
	{
		if(isset($_POST['217q']))
		{
		
		$quantity=$_POST['217q'];
		$cost=$cost+(60*$quantity);
		$current=$_POST['217'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(60*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['218']))
	{
		if(isset($_POST['218q']))
		{
		
		$quantity=$_POST['218q'];
		$cost=$cost+(60*$quantity);
		$current=$_POST['218'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(60*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['219']))
	{
		if(isset($_POST['219q']))
		{
		
		$quantity=$_POST['219q'];
		$cost=$cost+(50*$quantity);
		$current=$_POST['219'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(50*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['220']))
	{
		if(isset($_POST['220q']))
		{
		
		$quantity=$_POST['220q'];
		$cost=$cost+(65*$quantity);
		$current=$_POST['220'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(65*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['221']))
	{
		if(isset($_POST['221q']))
		{
		
		$quantity=$_POST['221q'];
		$cost=$cost+(60*$quantity);
		$current=$_POST['221'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(60*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['222']))
	{
		if(isset($_POST['222q']))
		{
		
		$quantity=$_POST['222q'];
		$cost=$cost+(55*$quantity);
		$current=$_POST['222'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(55*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['223']))
	{
		if(isset($_POST['223q']))
		{
		
		$quantity=$_POST['223q'];
		$cost=$cost+(60*$quantity);
		$current=$_POST['223'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(60*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['224']))
	{
		if(isset($_POST['224q']))
		{
		
		$quantity=$_POST['224q'];
		$cost=$cost+(60*$quantity);
		$current=$_POST['224'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(60*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['225']))
	{
		if(isset($_POST['225q']))
		{
		
		$quantity=$_POST['225q'];
		$cost=$cost+(60*$quantity);
		$current=$_POST['225'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(60*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['226']))
	{
		if(isset($_POST['226q']))
		{
		
		$quantity=$_POST['226q'];
		$cost=$cost+(70*$quantity);
		$current=$_POST['226'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(70*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['227']))
	{
		if(isset($_POST['227q']))
		{
		
		$quantity=$_POST['227q'];
		$cost=$cost+(70*$quantity);
		$current=$_POST['227'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(70*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['228']))
	{
		if(isset($_POST['228q']))
		{
		
		$quantity=$_POST['228q'];
		$cost=$cost+(60*$quantity);
		$current=$_POST['228'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(60*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['229']))
	{
		if(isset($_POST['229q']))
		{
		
		$quantity=$_POST['229q'];
		$cost=$cost+(80*$quantity);
		$current=$_POST['229'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(80*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['301']))
	{
		if(isset($_POST['301q']))
		{
		
		$quantity=$_POST['301q'];
		$cost=$cost+(50*$quantity);
		$current=$_POST['301'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(50*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['302']))
	{
		if(isset($_POST['302q']))
		{
		
		$quantity=$_POST['302q'];
		$cost=$cost+(50*$quantity);
		$current=$_POST['302'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(50*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['303']))
	{
		if(isset($_POST['303q']))
		{
		
		$quantity=$_POST['303q'];
		$cost=$cost+(50*$quantity);
		$current=$_POST['303'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(50*$quantity)."</td></tr>";
		
		}

	}

	if(isset($_POST['304']))
	{
		if(isset($_POST['304q']))
		{
		
		$quantity=$_POST['304q'];
		$cost=$cost+(50*$quantity);
		$current=$_POST['304'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(50*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['305']))
	{
		if(isset($_POST['305q']))
		{
		
		$quantity=$_POST['305q'];
		$cost=$cost+(50*$quantity);
		$current=$_POST['305'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(50*$quantity)."</td></tr>";
		
		}

	}

	if(isset($_POST['401']))
	{
		if(isset($_POST['401q']))
		{
		
		$quantity=$_POST['401q'];
		$cost=$cost+(35*$quantity);
		$current=$_POST['401'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(35*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['402']))
	{
		if(isset($_POST['402q']))
		{
		
		$quantity=$_POST['402q'];
		$cost=$cost+(45*$quantity);
		$current=$_POST['402'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(45*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['403']))
	{
		if(isset($_POST['403q']))
		{
		
		$quantity=$_POST['403q'];
		$cost=$cost+(25*$quantity);
		$current=$_POST['403'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(25*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['404']))
	{
		if(isset($_POST['404q']))
		{
		
		$quantity=$_POST['404q'];
		$cost=$cost+(45*$quantity);
		$current=$_POST['404'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(45*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['501']))
	{
		if(isset($_POST['501q']))
		{
		
		$quantity=$_POST['501q'];
		$cost=$cost+(75*$quantity);
		$current=$_POST['501'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(75*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['502']))
	{
		if(isset($_POST['502q']))
		{
		
		$quantity=$_POST['502q'];
		$cost=$cost+(60*$quantity);
		$current=$_POST['502'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(60*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['503']))
	{
		if(isset($_POST['503q']))
		{
		
		$quantity=$_POST['503q'];
		$cost=$cost+(50*$quantity);
		$current=$_POST['503'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(50*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['504']))
	{
		if(isset($_POST['504q']))
		{
		
		$quantity=$_POST['504q'];
		$cost=$cost+(70*$quantity);
		$current=$_POST['504'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(70*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['505']))
	{
		if(isset($_POST['505q']))
		{
		
		$quantity=$_POST['505q'];
		$cost=$cost+(70*$quantity);
		$current=$_POST['505'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(70*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['506']))
	{
		if(isset($_POST['506q']))
		{
		
		$quantity=$_POST['506q'];
		$cost=$cost+(50*$quantity);
		$current=$_POST['506'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(50*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['507']))
	{
		if(isset($_POST['507q']))
		{
		
		$quantity=$_POST['507q'];
		$cost=$cost+(55*$quantity);
		$current=$_POST['507'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(55*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['508']))
	{
		if(isset($_POST['508q']))
		{
		
		$quantity=$_POST['508q'];
		$cost=$cost+(55*$quantity);
		$current=$_POST['508'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(55*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['509']))
	{
		if(isset($_POST['509q']))
		{
		
		$quantity=$_POST['509q'];
		$cost=$cost+(60*$quantity);
		$current=$_POST['509'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(60*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['510']))
	{
		if(isset($_POST['510q']))
		{
		
		$quantity=$_POST['510q'];
		$cost=$cost+(60*$quantity);
		$current=$_POST['510'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(60*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['511']))
	{
		if(isset($_POST['511q']))
		{
		
		$quantity=$_POST['511q'];
		$cost=$cost+(65*$quantity);
		$current=$_POST['511'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(65*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['512']))
	{
		if(isset($_POST['512q']))
		{
		
		$quantity=$_POST['512q'];
		$cost=$cost+(70*$quantity);
		$current=$_POST['512'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(70*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['513']))
	{
		if(isset($_POST['513q']))
		{
		
		$quantity=$_POST['513q'];
		$cost=$cost+(75*$quantity);
		$current=$_POST['513'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(75*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['514']))
	{
		if(isset($_POST['514q']))
		{
		
		$quantity=$_POST['514q'];
		$cost=$cost+(50*$quantity);
		$current=$_POST['514'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(50*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['515']))
	{
		if(isset($_POST['515q']))
		{
		
		$quantity=$_POST['515q'];
		$cost=$cost+(55*$quantity);
		$current=$_POST['515'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(55*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['516']))
	{
		if(isset($_POST['516q']))
		{
		
		$quantity=$_POST['516q'];
		$cost=$cost+(60*$quantity);
		$current=$_POST['516'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(60*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['515']))
	{
		if(isset($_POST['515q']))
		{
		
		$quantity=$_POST['515q'];
		$cost=$cost+(55*$quantity);
		$current=$_POST['515'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(55*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['516']))
	{
		if(isset($_POST['516q']))
		{
		
		$quantity=$_POST['516q'];
		$cost=$cost+(60*$quantity);
		$current=$_POST['516'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(60*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['601']))
	{
		if(isset($_POST['601q']))
		{
		
		$quantity=$_POST['601q'];
		$cost=$cost+(55*$quantity);
		$current=$_POST['601'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(55*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['602']))
	{
		if(isset($_POST['602q']))
		{
		
		$quantity=$_POST['602q'];
		$cost=$cost+(60*$quantity);
		$current=$_POST['602'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(60*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['603']))
	{
		if(isset($_POST['603q']))
		{
		
		$quantity=$_POST['603q'];
		$cost=$cost+(80*$quantity);
		$current=$_POST['603'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(80*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['604']))
	{
		if(isset($_POST['604q']))
		{
		
		$quantity=$_POST['604q'];
		$cost=$cost+(70*$quantity);
		$current=$_POST['604'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(70*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['605']))
	{
		if(isset($_POST['605q']))
		{
		
		$quantity=$_POST['605q'];
		$cost=$cost+(70*$quantity);
		$current=$_POST['605'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(70*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['606']))
	{
		if(isset($_POST['606q']))
		{
		
		$quantity=$_POST['606q'];
		$cost=$cost+(80*$quantity);
		$current=$_POST['606'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(80*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['607']))
	{
		if(isset($_POST['607q']))
		{
		
		$quantity=$_POST['607q'];
		$cost=$cost+(80*$quantity);
		$current=$_POST['607'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(80*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['608']))
	{
		if(isset($_POST['608q']))
		{
		
		$quantity=$_POST['608q'];
		$cost=$cost+(80*$quantity);
		$current=$_POST['608'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(80*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['609']))
	{
		if(isset($_POST['609q']))
		{
		
		$quantity=$_POST['609q'];
		$cost=$cost+(90*$quantity);
		$current=$_POST['609'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(90*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['610']))
	{
		if(isset($_POST['610q']))
		{
		
		$quantity=$_POST['610q'];
		$cost=$cost+(50*$quantity);
		$current=$_POST['610'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(50*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['611']))
	{
		if(isset($_POST['611q']))
		{
		
		$quantity=$_POST['611q'];
		$cost=$cost+(55*$quantity);
		$current=$_POST['611'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(55*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['612']))
	{
		if(isset($_POST['612q']))
		{
		
		$quantity=$_POST['612q'];
		$cost=$cost+(60*$quantity);
		$current=$_POST['612'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(60*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['613']))
	{
		if(isset($_POST['613q']))
		{
		
		$quantity=$_POST['613q'];
		$cost=$cost+(65*$quantity);
		$current=$_POST['613'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(65*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['614']))
	{
		if(isset($_POST['614q']))
		{
		
		$quantity=$_POST['614q'];
		$cost=$cost+(70*$quantity);
		$current=$_POST['614'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(70*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['615']))
	{
		if(isset($_POST['615q']))
		{
		
		$quantity=$_POST['615q'];
		$cost=$cost+(75*$quantity);
		$current=$_POST['615'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(75*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['616']))
	{
		if(isset($_POST['616q']))
		{
		
		$quantity=$_POST['616q'];
		$cost=$cost+(60*$quantity);
		$current=$_POST['616'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(60*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['617']))
	{
		if(isset($_POST['617q']))
		{
		
		$quantity=$_POST['617q'];
		$cost=$cost+(65*$quantity);
		$current=$_POST['617'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(65*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['618']))
	{
		if(isset($_POST['618q']))
		{
		
		$quantity=$_POST['618q'];
		$cost=$cost+(70*$quantity);
		$current=$_POST['618'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(70*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['619']))
	{
		if(isset($_POST['619q']))
		{
		
		$quantity=$_POST['619q'];
		$cost=$cost+(75*$quantity);
		$current=$_POST['619'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(75*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['620']))
	{
		if(isset($_POST['620q']))
		{
		
		$quantity=$_POST['620q'];
		$cost=$cost+(90*$quantity);
		$current=$_POST['620'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(90*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['621']))
	{
		if(isset($_POST['621q']))
		{
		
		$quantity=$_POST['621q'];
		$cost=$cost+(65*$quantity);
		$current=$_POST['621'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(65*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['622']))
	{
		if(isset($_POST['622q']))
		{
		
		$quantity=$_POST['622q'];
		$cost=$cost+(55*$quantity);
		$current=$_POST['622'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(55*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['701']))
	{
		if(isset($_POST['701q']))
		{
		
		$quantity=$_POST['701q'];
		$cost=$cost+(20*$quantity);
		$current=$_POST['701'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(20*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['702']))
	{
		if(isset($_POST['702q']))
		{
		
		$quantity=$_POST['702q'];
		$cost=$cost+(20*$quantity);
		$current=$_POST['702'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(20*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['703']))
	{
		if(isset($_POST['703q']))
		{
		
		$quantity=$_POST['703q'];
		$cost=$cost+(20*$quantity);
		$current=$_POST['703'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(20*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['704']))
	{
		if(isset($_POST['704q']))
		{
		
		$quantity=$_POST['704q'];
		$cost=$cost+(20*$quantity);
		$current=$_POST['704'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(20*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['705']))
	{
		if(isset($_POST['705q']))
		{
		
		$quantity=$_POST['705q'];
		$cost=$cost+(35*$quantity);
		$current=$_POST['705'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(35*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['706']))
	{
		if(isset($_POST['706q']))
		{
		
		$quantity=$_POST['706q'];
		$cost=$cost+(20*$quantity);
		$current=$_POST['706'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(20*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['707']))
	{
		if(isset($_POST['707q']))
		{
		
		$quantity=$_POST['707q'];
		$cost=$cost+(35*$quantity);
		$current=$_POST['707'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(35*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['708']))
	{
		if(isset($_POST['708q']))
		{
		
		$quantity=$_POST['708q'];
		$cost=$cost+(40*$quantity);
		$current=$_POST['708'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(40*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['709']))
	{
		if(isset($_POST['709q']))
		{
		
		$quantity=$_POST['709q'];
		$cost=$cost+(8*$quantity);
		$current=$_POST['709'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(8*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['710']))
	{
		if(isset($_POST['710q']))
		{
		
		$quantity=$_POST['710q'];
		$cost=$cost+(6*$quantity);
		$current=$_POST['710'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(6*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['711']))
	{
		if(isset($_POST['711q']))
		{
		
		$quantity=$_POST['711q'];
		$cost=$cost+(10*$quantity);
		$current=$_POST['711'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(10*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['712']))
	{
		if(isset($_POST['712q']))
		{
		
		$quantity=$_POST['712q'];
		$cost=$cost+(8*$quantity);
		$current=$_POST['712'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(8*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['713']))
	{
		if(isset($_POST['713q']))
		{
		
		$quantity=$_POST['713q'];
		$cost=$cost+(8*$quantity);
		$current=$_POST['713'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(8*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['714']))
	{
		if(isset($_POST['714q']))
		{
		
		$quantity=$_POST['714q'];
		$cost=$cost+(30*$quantity);
		$current=$_POST['714'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(30*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['715']))
	{
		if(isset($_POST['715q']))
		{
		
		$quantity=$_POST['715q'];
		$cost=$cost+(30*$quantity);
		$current=$_POST['715'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(30*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['802']))
	{
		if(isset($_POST['802q']))
		{
		
		$quantity=$_POST['802q'];
		$cost=$cost+(35*$quantity);
		$current=$_POST['802'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(35*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['801']))
	{
		if(isset($_POST['801q']))
		{
		
		$quantity=$_POST['801q'];
		$cost=$cost+(20*$quantity);
		$current=$_POST['801'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(20*$quantity)."</td></tr>";
		
		}

	}
	if(isset($_POST['901']))
	{
		if(isset($_POST['901q']))
		{
		
		$quantity=$_POST['901q'];
		$cost=$cost+(30*$quantity);
		$current=$_POST['901'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(30*$quantity)."</td></tr>";
		
		}

	}
if(isset($_POST['902']))
	{
		if(isset($_POST['902q']))
		{
		
		$quantity=$_POST['902q'];
		$cost=$cost+(25*$quantity);
		$current=$_POST['902'];
		$order=$order."<tr><td>$current</td><td>$quantity</td><td>".(25*$quantity)."</td></tr>";
		
		}

	}
	$order.="</table>";
	$email=$_SESSION['user'];
	 $query="insert into orders values('$order','','$email','');";
 mysql_query($query) or die('problem occured');
 echo $order;
 echo "<tr><td colspan=3 align='right'>The Grand total :".$cost ."</td></tr></table>";
echo "</div><div class='col l2'><p></p></div></div></div>";
 }
?>