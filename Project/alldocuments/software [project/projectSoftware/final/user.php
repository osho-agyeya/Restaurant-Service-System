<?php
include 'connection1.php';
/*$query="select * from orders order by ord_no desc;";
$r=mysql_query($query)  or die(mysql_error());
while($row=mysql_fetch_array($r))
{
	echo "Order Number: ".$row['ord_no']."</br>";
	echo "Order: ".$row['allorder'];
	echo "<br><br>";
	if(isset($_POST['accept']))
	{
		echo "yo yo";
	}
}*/
$query1="select * from orders order by temp desc";
$r=mysql_query($query1);
$queryw="select * from orders;";
$a= mysql_query($queryw);
$nums=mysql_num_rows($a);

$i=$nums;
echo "<form action='' method='post'>";

while($row=mysql_fetch_array($r))
{
	if($row['flag']==0)
	{
		
		echo "$row[allorder]&nbsp;&nbsp; <input type='submit' name='accept$i'/>
			  <input type='submit' value='reject' name='reject$i'/></br>";
				
		$i--;
	}
	else if($row['flag']==-1)
	{
		echo "$row[allorder] NO<input type='submit' value='reset' name='reset$i'/></br>";
		$i--;
	}

	else
	{
		echo "$row[allorder] YES<input type='submit' value='reset' name='reset$i'/></br>";
		$i--;
	}
	echo "<br><br>";
}
echo "</form></br>";

echo "<form action='' method='post'><input type='submit' name='res' value='res'/></form>";
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