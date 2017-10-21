<?php
include 'connection1.php';

if(isset($_POST['status']))
{
	$email=$_SESSION['user'];
	$query="select * from orders order by temp desc";
	$r=mysql_query($query) or die('NN');
	while($row=mysql_fetch_array($r))
	{
		if($row['id']==$email)
		{
			if($row['flag']==-1)
			{
				echo $row['allorder']."  REJECTED";
			}
			else if($row['flag']==1)
			{
				echo $row['allorder']."  ACCEPTED";
			}
			else if($row['flag']==0)
			{
				echo $row['allorder']." PENDING";
			}
			echo "<br><br>";
		}
	}
}
?>