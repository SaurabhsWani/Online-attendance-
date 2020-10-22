<?php
session_start();
function destroy()
{
	session_destroy();
	session_unset();
	if (isset($_COOKIE['email']) and isset($_COOKIE['pass'])) 
	{
		$email=$_COOKIE['email'];
		$pass=$_COOKIE['pass'];
		setcookie('email',$Email, time()-1);
		setcookie('pass',$_POST['Password'], time()-1);
	}
	header('Location: ulogin.php');

}
require('dbconfig.php');

if ($connection) 
{
	//echo "Database Connected";
}
else
{
	destroy();
}

if(!$_SESSION['email']?destroy():!$_SESSION['fn']?destroy():!$_SESSION['email']?destroy():!$_SESSION['perdet']?destroy():!$_SESSION['fn'])
{
	destroy();
}
?>