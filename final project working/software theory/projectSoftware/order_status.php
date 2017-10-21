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
        <a href='#!' class='brand-logo center'>Order Status</a>
      </div>
    </nav>
</div>
        
";
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
			echo "<div class='row'>
      			<div class='col s12 m4'>
       				 <div class='card-panel white'>
        			  <span class='black-text'>";
			if($row['flag']==-1)
			{
				echo $row['allorder']." <br/><font color='red'><b>STATUS: REJECTED</b></font>";
			}
			else if($row['flag']==1)
			{
				echo $row['allorder']." <br/><font color='green'><b> STATUS:ACCEPTED</b></font>";
			}
			else if($row['flag']==0)
			{
				echo $row['allorder']." <br/><b>STATUS:PENDING</b>";
			}
			echo "<br><br>";
			echo "</span>
        </div>
     	</div>
    	</div>";
		}
	}
}
?>