<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="bootstrap.min.css">
	<script src="jquerymin.js"></script>
	<script src="bootstrapmin.js"></script>	
	<style>
		th,td{
			padding:5px;
			text-align:left;
			border-bottom: 1px solid #ddd;
		}
		
		tr:hover{
			background-color: #f0f0f0;
		}
		
		input{
			width: 50px;
		}
		
		input.Submit{
			width: 75px;
		}
		
		tr:nth-child(even){
			background-color: #f2f2f2
		}
		
		h1{
			text-align:center;
		}
		body{
			padding: 10px;
		}
	</style>
	<title>Menu Page</title>
</head>
<?php
session_start();
		$email=$_SESSION['user'];

		echo $email." you have succesfully logged in</br>";
		$_SESSION['user']=$email;
?>
<body>
	<form action="update_pass.php" method="post" align="right">
	<input type="submit" value="Change Password" name="change"/>
</form>

	<div class="container">
		  <ul class="nav nav-tabs">
			<li><a href="060816_1.html">Home</a></li>
			<li><a href="order_status.php" text-align="right">Order Status</a></li>
			<li class="active"><a data-toggle="tab" href="#Non-Veg">Non-Veg</a></li>
			<li><a data-toggle="tab" href="#Veg">Veg</a></li> 
			<li><a data-toggle="tab" href="#Bhujia">Bhujia</a></li> 
			<li><a data-toggle="tab" href="#Rolls">Rolls</a></li>
			<li><a data-toggle="tab" href="#Fried-Rice">Fried Rice</a></li>
			<li><a data-toggle="tab" href="#Chinese">Chinese</a></li>
			<li><a data-toggle="tab" href="#Paratha">Paratha</a></li>
			<li><a data-toggle="tab" href="#Salad">Salad</a></li>
			<li><a data-toggle="tab" href="#Soft-Drinks">Soft-Drinks</a></li>
		  </ul>
		  <div class="tab-content">
			<div id="Non-Veg" class="tab-pane fade in active">
				<h1>Non-Veg Items</h1>
				
<form method="post" action="order2.php">

	<table align="center">
				
	<tr>
		<th>Select</th><th>Name</th><th>Price(Rs)</th><th>Quantity</th>
	</tr>
	<tr>
		<td><input type="checkbox" name="101" value="Chicken Butter Masala(Boneless)"/></td><td>Chicken Butter Masala(Boneless)</td><td>90</td><td><input type="number" name="101q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="102" value="Kadhai Chicken"/></td><td>Kadhai Chicken</td><td>75</td><td><input type="number" name="102q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="103" value="Chicken Masala"/></td><td>Chicken Masala</td><td>75</td><td><input type="number" name="103q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="104" value="Chicken Zeera Pepper Fry"/></td><td>Chicken Zeera Pepper Fry</td><td>75</td><td><input type="number" name="104q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="105" value="Chicken Curry"/></td><td>Chicken Curry</td><td>70</td><td><input type="number" name="105q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="106" value="Egg Keema"/></td><td>Egg Keema</td><td>55</td><td><input type="number" name="106q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="107" value="Fish Fry"/></td><td>Egg Keema</td><td>55</td><td><input type="number" name="107q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="108" value="Omelette"/></td><td>Omelette</td><td>20</td><td><input type="number" name="108q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="109" value="Egg Bhurji"/></td><td>Egg Bhurji</td><td>30</td><td><input type="number" name="109q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="110" value="Egg Half Fry"/></td><td>Egg Half Fry</td><td>20</td><td><input type="number" name="110q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="111" value="Chicken Keema"/></td><td>Chicken Keema</td><td>95</td><td><input type="number" name="111q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="112" value="Palak Chicken"/></td><td>Palak Chicken</td><td>95</td><td><input type="number" name="112q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="113" value="Mutton Masala(Sunday)"/></td><td>Mutton Masala(Sunday)</td><td>120</td><td><input type="number" name="113q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="114" value="Egg Tadka"/></td><td>Egg Tadka</td><td>65</td><td><input type="number" name="114q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="115" value="Egg Curry"/></td><td>Egg Curry</td><td>55</td><td><input type="number" name="115q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="116" value="Fish Curry"/></td><td>Fish Curry</td><td>70</td><td><input type="number" name="116q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="117" value="Lever Fry"/></td><td>Lever Fry</td><td>80</td><td><input type="number" name="117q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="118" value="Tawa Chicken"/></td><td>Tawa Chicken</td><td>95</td><td><input type="number" name="118q" min="0"/></td>
	</tr>
	</table>
			</div>
			<div id="Veg" class="tab-pane fade">
				<h1>Veg Items</h1>			
				<table align="center">
		<tr>
			<th>Select</th><th>Name</th><th>Price(Rs)</th><th>Quantity</th>
		</tr>
		<tr>
			<td><input type="checkbox" name="201" value="Paneer Butter Masala"/></td><td>Paneer Butter Masala</td><td>80</td><td><input type="number" name="201q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="202" value="Paneer Masala"/></td><td>Paneer Masala</td><td>60</td><td><input type="number" name="202q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="203" value="Kadai Paneer "/></td><td>Kadai Paneer</td><td>75</td><td><input type="number" name="203q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="204" value="Mutter Paneer"/></td><td>Mutter Paneer</td><td>70</td><td><input type="number" name="204q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="205" value="Palak Paneer"/></td><td>Palak Paneer</td><td>70</td><td><input type="number" name="205q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="206" value="Paneer Bhurji"/></td><td>Paneer Bhurji</td><td>80</td><td><input type="number" name="206q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="207" value="Shahi Paneer"/></td><td>Shahi Paneer</td><td>95</td><td><input type="number" name="207q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="208" value="Aloo Gobi Masala"/></td><td>Aloo Gobi Masala</td><td>55</td><td><input type="number" name="208q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="209" value="Gobi Masala"/></td><td>Gobi Masala</td><td>65</td><td><input type="number" name="209q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="210" value="Aloo Dum"/></td><td>Aloo Dum</td><td>55</td><td><input type="number" name="210q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="211" value="Aloo Zeera"/></td><td>Aloo Zeera</td><td>50</td><td><input type="number" name="211q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="212" value="Bhindi Masala"/></td><td>Bhindi Masala</td><td>50</td><td><input type="number" name="212q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="213" value="Bhindi Fry"/></td><td>Bhindi Fry</td><td>50</td><td><input type="number" name="213q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="214" value="Daal Fry"/></td><td>Daal Fry</td><td>45</td><td><input type="number" name="214q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="215" value="Daal Tadka"/></td><td>Daal Tadka</td><td>45</td><td><input type="number" name="215q" min="0"/></td>
		</tr>

		<tr>
			<td><input type="checkbox" name="216" value="Palak Mushroom"/></td><td>Palak Mushroom</td><td>80</td><td><input type="number" name="216q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="217" value="Channa Paneer"/></td><td>Channa Paneer</td><td>60</td><td><input type="number" name="217q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="218" value="Aloo Gobi Matar"/></td><td>Aloo Gobi Matar</td><td>60</td><td><input type="number" name="218q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="219" value="Aloo Masala"/></td><td>Aloo Masala</td><td>50</td><td><input type="number" name="219q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="220" value="Green Peas Masala"/></td><td>Green Peas Masala</td><td>65</td><td><input type="number" name="220q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="221" value="Aloo Matar"/></td><td>Aloo Matar</td><td>60</td><td><input type="number" name="221q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="222" value="Aloo Bhindi Masala"/></td><td>Aloo Bhindi Masala</td><td>55</td><td><input type="number" name="222q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="223" value="Channa Masala"/></td><td>Channa Masala</td><td>60</td><td><input type="number" name="223q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="224" value="Aloo Palak"/></td><td>Aloo Palak</td><td>60</td><td><input type="number" name="224q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="225" value="Aloo Parwal"/></td><td>Aloo Parwal</td><td>60</td><td><input type="number" name="225q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="226" value="Mushroom Masala"/></td><td>Mushroom Masala</td><td>70</td><td><input type="number" name="226q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="227" value="Matar Mushroom"/></td><td>Matar Mushroom</td><td>70</td><td><input type="number" name="227q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="228" value="Rajma Masala"/></td><td>Rajma Masala</td><td>60</td><td><input type="number" name="228q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="229" value="Mushroom Chilly"/></td><td>Mushroom Chilly</td><td>80</td><td><input type="number" name="229q" min="0"/></td>
		</tr>
		</table>			
			</div>
			<div id="Bhujia" class="tab-pane fade">
			<h1>Bhujia</h1>			
			<table align="center">	
			
	<tr>
		<th>Select</th><th>Name</th><th>Price(Rs)</th><th>Quantity</th>
	</tr>
	<tr>
		<td><input type="checkbox" name="301" value="Aloo Bhujia"/></td><td>Aloo Bhujia</td><td>50</td><td><input type="number" name="301q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="302" value="Bhindi Bhujia"/></td><td>Bhindi Bhujia</td><td>50</td><td><input type="number" name="302q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="303" value="Gobi Bhujia"/></td><td>Gobi Bhujia</td><td>50</td><td><input type="number" name="303q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="304" value="Aloo Gobi Bhujia"/></td><td>Aloo Gobi Bhujia</td><td>50</td><td><input type="number" name="304q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="305" value="Aloo Parwal Bhujia"/></td><td>Aloo Parwal BHujia</td><td>50</td><td><input type="number" name="305q" min="0"/></td>
	</tr>
	</table>			
			</div>
			<div id="Rolls" class="tab-pane fade">
			<h1>Roll Items</h1>
			<table align="center">
	<tr>
		<th>Select</th><th>Name</th><th>Price(Rs)</th><th>Quantity</th>
	</tr>
	<tr>
		<td><input type="checkbox" name="401" value="Egg Roll"/></td><td>Egg Roll</td><td>35</td><td><input type="number" name="401q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="402" value="Chicken Roll"/></td><td>Chicken Roll</td><td>45</td><td><input type="number" name="402q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="403" value="Veg Roll"/></td><td>Veg Roll</td><td>25</td><td><input type="number" name="403q" min="0"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="404" value="Paneer Roll"/></td><td>Paneer Roll</td><td>45</td><td><input type="number" name="404q" min="0"/></td>
	</tr>
	</table>
			</div>
			<div id="Fried-Rice"  class="tab-pane fade">
			<h1>Fried Rice Items</h1>
			<table align="center">
		<tr>
			<th>Select</th><th>Name</th><th>Price(Rs)</th><th>Quantity</th>
		</tr>
		<tr>
			<td><input type="checkbox" name="501" value="Chicken Fried Rice Schezwan"/></td><td>Chicken Fried Rice Schezwan</td><td>75</td><td><input type="number" name="501q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="502" value="Green Peas Rice"/></td><td>Green Peas Rice</td><td>60</td><td><input type="number" name="502q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="503" value="Jeera Rice"/></td><td>Jeera Rice</td><td>50</td><td><input type="number" name="503q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="504" value="Mushroom Fried Rice"/></td><td>Mushroom Fried Rice</td><td>70</td><td><input type="number" name="504q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="505" value="Chicken Fried Rice"/></td><td>Chicken Fried Rice</td><td>70</td><td><input type="number" name="505q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="506" value="Veg Fried Rice"/></td><td>Veg Fried Rice</td><td>50</td><td><input type="number" name="506q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="507" value="Veg Schezwan Fried Rice"/></td><td>Veg Schezwan Fried Rice</td><td>55</td><td><input type="number" name="507q" min="0"/></td>
		</tr>

		<tr>
			<td><input type="checkbox" name="508" value="Potato Fried Rice"/></td><td>Potato Fried Rice</td><td>55</td><td><input type="number" name="508q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="509" value="Potato Schezwan Fried Rice"/></td><td>Potato Schezwan Fried Rice</td><td>60</td><td><input type="number" name="509q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="510" value="Gobi Fried Rice"/></td><td>Gobi Fried Rice</td><td>60</td><td><input type="number" name="510q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="511" value="Gobi Schezwan Fried Rice"/></td><td>Gobi Schezwan Fried Rice</td><td>65</td><td><input type="number" name="511q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="512" value="Paneer Fried Rice"/></td><td>Paneer Fried Rice</td><td>70</td><td><input type="number" name="512q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="513" value="Paneer Schezwan Fried Rice"/></td><td>Paneer Schezwan Fried Rice</td><td>75</td><td><input type="number" name="513q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="514" value="Chilly Potato"/></td><td>Chilly Potato</td><td>50</td><td><input type="number" name="514q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="515" value="Egg Fried Rice"/></td><td>Egg Fried Rice</td><td>55</td><td><input type="number" name="515q" min="0"/></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="516" value="Egg Schezwan Fried Rice"/></td><td>Egg Schezwan Fried Rice</td><td>60</td><td><input type="number" name="516q" min="0"/></td>
		</tr>

		</table>			
			</div>
			<div id="Chinese" class="tab-pane fade">
				<h1>Chinese Items</h1>
				<table align="center">
				<tr>
					<th>Select</th><th>Name</th><th>Price(Rs)</th><th>Quantity</th>
				</tr>
				<tr>
					<td><input type="checkbox" name="601" value="Gobi Manchurian"/></td><td>Gobi Manchurian</td><td>55</td><td><input type="number" name="601q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="602" value="Gobi 65"/></td><td>Gobi 65</td><td>60</td><td><input type="number" name="602q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="603" value="Paneer 65"/></td><td>Paneer 65</td><td>80</td><td><input type="number" name="603q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="604" value="Paneer Chilly"/></td><td>Paneer Chilly</td><td>70</td><td><input type="number" name="604q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="605" value="Paneer Manchurian"/></td><td>Paneer Manchurian</td><td>70</td><td><input type="number" name="605q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="606" value="Chicken Manchurian"/></td><td>Chicken Manchurian</td><td>80</td><td><input type="number" name="606q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="607" value="Chilly Chicken"/></td><td>Chilly Chicken</td><td>80</td><td><input type="number" name="607q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="608" value="Chicken 65"/></td><td>Chicken 65</td><td>80</td><td><input type="number" name="608q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="609" value="Chicken Lollipop"/></td><td>Chicken Lollipop</td><td>90</td><td><input type="number" name="609q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="610" value="Veg Noodles"/></td><td>Veg Noodles</td><td>50</td><td><input type="number" name="610q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="611" value="Veg Schezwan Noodles"/></td><td>Veg Schezwan Noodles</td><td>55</td><td><input type="number" name="611q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="612" value="Egg Noodles"/></td><td>Egg Noodles</td><td>60</td><td><input type="number" name="612q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="613" value="Egg Schezwan Noodles"/></td><td>Egg Schezwan Noodles</td><td>65</td><td><input type="number" name="613q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="614" value="Chicken Noodles"/></td><td>Chicken Noodles</td><td>70</td><td><input type="number" name="614q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="615" value="Chicken Schezwan Noodles"/></td><td>Chicken Schezwan Noodles</td><td>75</td><td><input type="number" name="615q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="616" value="Gobi Noodles"/></td><td>Gobi Noodles</td><td>60</td><td><input type="number" name="616q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="617" value="Gobi Schezwan Noodles"/></td><td>Gobi Schezwan Noodles</td><td>65</td><td><input type="number" name="617q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="618" value="Paneer Noodles"/></td><td>Paneer Noodles</td><td>70</td><td><input type="number" name="618q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="619" value="Paneer Schezwan Noodles"/></td><td>Paneer Schezwan Noodles</td><td>75</td><td><input type="number" name="619q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="620" value="Paneer Makkan Wala"/></td><td>Paneer Makkan Wala</td><td>90</td><td><input type="number" name="620q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="621" value=""/></td><td>Rajama Makkani</td><td>65</td><td><input type="number" name="621q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="622" value="Dal Makhani"/></td><td>Dal Makhani</td><td>55</td><td><input type="number" name="622q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="623" value="Paneer Schezwan Noodles"/></td><td>Paneer Schezwan Noodles</td><td>75</td><td><input type="number" name="623q" min="0"/></td>
				</tr>
			</table>
			</div>
			<div id="Paratha" class="tab-pane fade">
			<h1>Paratha</h1>
			<table align="center">
			<tr>
				<th>Select</th><th>Name</th><th>Price(Rs)</th><th>Quantity</th>
			</tr>
			<tr>
				<td><input type="checkbox" name="701" value="Aloo Paratha"/></td><td>Aloo Paratha</td><td>20</td><td><input type="number" name="701q" min="0"/></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="702" value="Gobi Paratha"/></td><td>Gobi Paratha</td><td>20</td><td><input type="number" name="702q" min="0"/></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="703" value="Pudina Paratha"/></td><td>Pudina Paratha</td><td>20</td><td><input type="number" name="703q" min="0"/></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="704" value="Sattu Paratha"/></td><td>Sattu Paratha</td><td>20</td><td><input type="number" name="704q" min="0"/></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="705" value="Onion Paratha"/></td><td>Onion Paratha</td><td>20</td><td><input type="number" name="705q" min="0"/></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="706" value="Paneer Paratha"/></td><td>Paneer Paratha</td><td>35</td><td><input type="number" name="706q" min="0"/></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="707" value="Egg Paratha"/></td><td>Egg Paratha</td><td>35</td><td><input type="number" name="707q" min="0"/></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="708" value="Chicken Paratha"/></td><td>Chicken Paratha</td><td>40</td><td><input type="number" name="708q" min="0"/></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="709" value="Plain Paratha"/></td><td>Plain Paratha</td><td>8</td><td><input type="number" name="709q" min="0"/></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="710" value="Butter Paratha"/></td><td>Butter Paratha</td><td>10</td><td><input type="number" name="710q" min="0"/></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="711" value="Roti"/></td><td>Roti</td><td>6</td><td><input type="number" name="711q" min="0"/></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="712" value="Butter Roti"/></td><td>Butter Roti</td><td>8</td><td><input type="number" name="712q" min="0"/></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="713" value="Roti Sabzi"/></td><td>Roti Sabzi</td><td>30</td><td><input type="number" name="713q" min="0"/></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="714" value="Paratha Sabzi"/></td><td>Paratha Sabzi</td><td>30</td><td><input type="number" name="714q" min="0"/></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="715" value="Puri Sabzi"/></td><td>Puri Sabzi</td><td>30</td><td><input type="number" name="715q" min="0"/></td>
			</tr>
			</table>			
			</div>
			<div id="Salad" class="tab-pane fade">
			<h1>Salads</h1>
			<table align="center">
			<tr>
				<th>Select</th><th>Name</th><th>Price(Rs)</th><th>Quantity</th>
			</tr>
			<tr>
				<td><input type="checkbox" name="801" value="Green Salad"/></td><td>Green Salad</td><td>35</td><td><input type="number" name="801q" min="0"/></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="802" value="Onion Salad"/></td><td>Onion Sabzi</td><td>20</td><td><input type="number" name="802q" min="0"/></td>
			</tr>
			</table>		
			</div>
			<div id="Soft-Drinks" class="tab-pane fade">
				<h1>Soft-Drinks</h1>
				<table align="center">
				<tr>
					<th>Select</th><th>Name</th><th>Price(Rs)</th><th>Quantity</th>
				</tr>
					<td><input type="checkbox" name="901" value="Kheer"/></td><td>Kheer</td><td>30</td><td><input type="number" name="901q" min="0"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="902" value="Lassi"/></td><td>Lassi</td><td>25</td><td><input type="number" name="902q" min="0"/></td>
				</tr>
				</table></div>	
		  </div>
		  <br/>
			<center><input class="Submit" type="submit" name="submit" value="Proceed"/></center>
		  <br/>
		</div>
	</form>
	<form action="logout.php" method="post"><input type="submit" value="logout" name="logout"/></form>
	
	<form action="order_status.php" method="post">
		<input type="submit" value="Status" name="status"/>
	</form>

	
</body>
</html>