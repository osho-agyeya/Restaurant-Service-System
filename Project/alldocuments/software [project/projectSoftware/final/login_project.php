<?php
include 'connection1.php';


if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$pass=$_POST['password'];
	
if($email=="user@gmail.com" && $pass=="password")
	{
		?>
		<script>
		window.open('user.php');
		</script>
		<?php
	}

	else{

	$query1="select * from customers where email='".$email."'and passwordc='".$pass."'";
	$r=mysql_query($query1) or die(mysql_error());
	if(mysql_num_rows($r)==1)
	{
		$_SESSION['pass']=$pass;
				$_SESSION['user']=$email;
		?>
		<script>
			window.open('sachin_order.php');
		</script> 

		
		<?php
	}
	
	else
	{
		?>
		<script>window.alert('username/password doesnt match. TRY AGAIN');
		window.open('softwaremainlogin.html');</script>

		<?php
		}
}
}

?>
