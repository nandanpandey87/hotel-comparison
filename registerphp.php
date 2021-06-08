
<?php

$servername = "localhost";
$username = "vtcbtpbw_vtcbtpbw";
$pass = "dkmo(d+Hp~5G))";
$dbname= "vtcbtpbw_fsdata";

$con = mysqli_connect('localhost','vtcbtpbw_vtcbtpbw','dkmo(d+Hp~5G))','vtcbtpbw_fsdata');


if($con)
{
	//echo "<h1> we are now connected to database </h1>";
}
else
{

	echo "<h1>error, we are not connected to database </h1>";
}


$username = $_POST['Username'];
$email = $_POST['email'];
$password = $_POST['Password'];
$str_password = password_hash($password, PASSWORD_BCRYPT);
$pass_check = password_verify($password, $str_password);
if($pass_check)
{
	//echo "<br> login successful";
	//echo "<script>
		//{
			//alert('Good job!.... registraion successful....');window.location='index.php';
		//}
		//</script>";
}
else{
	echo "<script>
		{
			alert('login incorrect');window.location='register.php';
		}
		</script>";
	}

		$username_search = "select * from hotel_website_registerphp where username='$username' ";
        $query = mysqli_query($con, $username_search);
        $username_count = mysqli_num_rows($query);

        if($username_count>0){
        	echo "<script>
				{
					alert('username already exists!!....try another username..');window.location='register.php';
				}
				</script>";
        }

		if(!$username_count)
		{
			$query = "insert into hotel_website_registerphp (username,email,password) values('$username','$email','$str_password')";
			mysqli_query($con,$query);
			
			echo "<script>
				{
					alert('Good job!.... registraion successful....please login');window.location='login.php';
				}
				</script>";
		}
//header('location:index.php');
?>