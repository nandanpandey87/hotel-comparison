<?php
session_start();

if(isset($_SESSION['username']))
{
	
	echo "<script>
		{
			alert('Logout Successful!');location.href='index.php';
		}
	</script>";
	session_destroy();

}
else
{
	echo "<script>location.href='index.php'</script>";
}
?>