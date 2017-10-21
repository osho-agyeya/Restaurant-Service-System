<?php
echo "<!DOCTYPE html>
<html lang='en'>
<head>
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
<body>
<div class='navbar-fixed'>
    <nav>
      <div class='nav-wrapper'>
        <a href='#!' class='brand-logo center'>Owner page</a>
      </div>
    </nav>
</div>";

echo "<br><div class='row' align='right'><form action='' method='post'><button class='btn waves-effect waves-light lime' type='submit' name='res' value='res' > Master Reset<i class='material-icons left'>replay</i></button></form>";     

include 'connection1.php';
$query1="select * from orders order by temp desc";
$r=mysql_query($query1) or die('nnn');
$queryw="select * from orders;";
$a= mysql_query($queryw);
$nums=mysql_num_rows($a);

$i=$nums;
echo "<form action='' method='post'>";

while($row=mysql_fetch_array($r))
{
	echo "<div class='row'>
      			<div class='col s12 m4'>
       				 <div class='card-panel white'>
        			  <span class='black-text'>";
	if($row['flag']==0)
	{
		
		echo "	 $row[allorder]&nbsp;&nbsp; 
		<button class='btn waves-effect waves-light green' type='submit' name='accept$i'>Submit
    <i class='material-icons left'>done</i>
  </button>
  <button class='btn waves-effect waves-light red' type='submit' name='reject$i' ><h7><b>X</b></h7> Reject
  </button>";
			    
				
		$i--;
	}
	else if($row['flag']==-1)
	{
		echo "$row[allorder] NO &nbsp&nbsp&nbsp<button class='btn waves-effect waves-light amber' value='reset 'type='submit' name='reset$i' > reset<i class='material-icons left'>receipt</i></button>";
		$i--;
	}

	else
	{
		echo "$row[allorder] YES &nbsp&nbsp&nbsp<button class='btn waves-effect waves-light amber' value='reset 'type='submit' name='reset$i' > reset<i class='material-icons left'>receipt</i></button>";
		$i--;
	}
	echo "</span>
        </div>
     	</div>
    	</div>";

}
echo "</form></br>";


for($j=0;$j<=$nums;$j++)
{
	
	if(isset($_POST["accept$j"]))
	{
		$query2="update orders set flag=1 where temp=$j;";
		mysql_query($query2);
		echo "<meta http-equiv='refresh' content='0'>";
			}
	else if(isset($_POST["reject$j"]))
	{
		$query3="update orders set flag=-1 where temp=$j;";
		mysql_query($query3);
		echo "<meta http-equiv='refresh' content='0'>";
	}
	else if(isset($_POST["reset$j"]))
	{
		$query4="update orders set flag=0 where temp=$j;";
		mysql_query($query4) or die('NNNN');
		echo "<meta http-equiv='refresh' content='0'>";

	}
}
if(isset($_POST['res']))
{
	$query4="update orders set flag=0;";
	mysql_query($query4) or die('NNNN');
	echo "<meta http-equiv='refresh' content='0'>";
}
?>