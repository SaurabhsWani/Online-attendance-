<?php
include('security.php');
if (isset($_POST['logout_btn'])) 
{ 
	$Email=$_SESSION['email'];
	$sql="UPDATE b_person SET status='off' WHERE Email='$Email'";
	if(mysqli_query($connection,$sql))
	{
	echo("<script>alert('Logout Success');</script>");
	session_destroy();
	session_unset();
	if (isset($_COOKIE['email']) and isset($_COOKIE['pass'])) 
	{
		$email=$_COOKIE['email'];
		$pass=$_COOKIE['pass'];
		setcookie('email',$Email, time()-1);
		setcookie('pass',$_POST['Password'], time()-1);
	}
		header('Location:ulogin.php');
	}
}
?>