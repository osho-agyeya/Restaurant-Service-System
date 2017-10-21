<html>
<head>
	<link rel="stylesheet" href="external/css1.css">
    <link rel="stylesheet" href="external/css2.css">
    <link rel="stylesheet" href="external/css3.css">
      <script src="external/jq1.js"></script>
      <script src="external/jq2.js"></script>
      <script src="external/jq3.js"></script>           
      <script src="external/jq4.js"></script> 
     
	<script>
		function check()
	{
			var p=document.getElementById('i').value;
			var pr=document.getElementById('p').value;
			if(pr!=''){
			if(p!=pr)
			{
				document.getElementById('o').innerHTML='<font color="red">password doesnt match</font>';
				return false;
			}
			else 
			{
				document.getElementById('o').innerHTML='<font>✅</font>';
			}}
			
	}
	</script>

</head>
<body>
<div class="container">
<div class="row">
<div class="col l2"><p></p></div>
<div class="col l8">
<h1 align='center'>Change Password</h1>
<form action="" method="post" >
<font align='left'>
	Current Password: <input type="password"  name="current" />
	New Password: <input type="password" id='i' name="pass1"/>
	Retype New Password: <input type="password" id='p' name="pass2" onblur="check();"/> <span id='o'></span>
	</font>
	<button type="submit" value="sub" name="sub" style="width:142px" class="waves-effect waves-light green btn">Change</button>
</form>
</div>
</div>
</div>
</body>
<?php

include 'connection1.php';
$email=$_SESSION['user'];

if(isset($_POST['sub'])){
$cur=$_POST['current'];
$pass=$_SESSION['pass'];

$p=$_POST['pass1'];
$p1=$_POST['pass2'];
if($cur==$pass && $p==$p1 )
{
	$query="update customers set passwordc='".$p1."' where passwordc='".$cur."' and email='".$email."';";
	mysql_query($query)  or die('check the entered current password or your phone number');
	echo "Your password has been successfully updated";
}
else
{
	echo "Either current password is incorrect or the password isnt matching";
}}
?>
</html>