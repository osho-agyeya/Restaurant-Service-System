<?php
include 'connection1.php';

if(isset($_POST['user']))
{
$user2=$_POST['user'];
$_SESSION['name']=$user2;
$query="select * from customers where email='".$user2."'";
$r=mysql_query($query) or die(mysql_error());;
if(mysql_num_rows($r)==1)
{
	//echo "<form action='' method='post'> </br><b>Question1</b>:What was the nickname of your first friend ?<br> <textarea rows='5' cols='20' name='ques1' required></textarea><br><br><b>Quesion2</b>:What was the first song which you heard ?<br><textarea rows='5' cols='20' name='ques2' required></textarea><br><br><input type='submit' name='sub2' value='submit'/></form>";
	echo '<head>
   <title>Forgot Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="external/css1.css">
    <link rel="stylesheet" href="external/css2.css">
    <link rel="stylesheet" href="external/css3.css">
      <script src="external/jq1.js"></script>
      <script src="external/jq2.js"></script>
      <script src="external/jq3.js"></script>           
      <script src="external/jq4.js"></script> 
        <script>
         $(document).ready(function() {
         $(select).material_select();
      });</script>
</head>
<body class="container" padding:10px>
<div class=row>
<div class=col l7>  <h4>Forgot Password</h4></div>
<div class="col l5" ><br><button onclick="location.href=softwaremainlogin.html" class="btn waves-effect waves-light red">Home</button></div>
  </div>
  <form  action="forget_password.php" method="post">
     <div class="row">
     <b>Question1</b>:What was the nickname of your first friend ?<br> 
         <div class="input-field col s12">
            <input placeholder="Answer"  id="ques1" name="ques1" type="text" class="active validate">
         </div>
      </div>
      <div class=row>
      <b>Quesion2</b>:What was the first song which you heard ?<br>
         <div class="input-field col s12">      
            <input id="ques2" type="text" name="ques2" placeholder="Answer" class="validate" >          
         </div>
      </div>
      <div class="col l5"><button type="submit" name="sub2" class=btn waves-effect waves-light amber>Get Password</button></div>
  </form>
</body>';

}

else
{
	echo 'username doesnt match';
}

}
if(isset($_POST['sub2']))
	{
	$ans1=$_POST['ques1'];
	$ans2=$_POST['ques2'];
	$user2=$_SESSION['name'];
	$query2="select * from customers where question1='".$ans1."' and question2='".$ans2."' and email='".$user2."';";
	$v=mysql_query($query2)  or die(mysql_error());
	if(mysql_num_rows($v)==1)
	{
		$query3="select passwordc from customers where question1='".$ans1."' and question2='".$ans2."' and email='".$user2."';";
		$tf=mysql_query($query3)  or die(mysql_error());
		$t=mysql_fetch_array($tf)  or die(mysql_error());
		echo "Your password was : <h1>".$t['passwordc']."</h1>";
	}
	else
	{
		echo "Answers of the questions doesnt match";
	}
	}


?>
