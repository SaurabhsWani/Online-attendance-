<?php
session_start();
require('dbconfig.php');
function destroy()
{
	if (isset($_COOKIE['email']) and isset($_COOKIE['pass'])) 
	{
		$email=$_COOKIE['email'];
		$pass=$_COOKIE['pass'];
		setcookie('email',$Email, time()-1);
		setcookie('pass',$_POST['Password'], time()-1);
	}	
$First_Name=$Last_Name=$State=$Cat=$Email=$Password=$Password2=$_POST['Password']=$_POST['Email']="";
	header('Location: ulogin.php');

}
if ($connection) 
{
	//echo "Database Connected";
}
else
{
	destroy();
}
if(!$_POST['Email']?destroy():!$_POST['Password']?destroy():false)
{
	destroy();
}
?>