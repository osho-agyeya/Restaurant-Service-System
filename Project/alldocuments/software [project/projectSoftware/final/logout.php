<?php
if(isset($_POST['logout']))
{
	session_destroy();
	?>
	<script>
			window.open('softwaremainlogin.html');
	</script> 
	<?php 
}
?>