<?php
include('security.php');
if($_POST['eml']==NULL)
{
  	echo '<script>window.location="asdfg"</script>';
}
$eml=$_POST['eml'];
$query="SELECT * FROM b_person WHERE Email='$eml'";
$record=mysqli_query($connection,$query);
	if ($record) 
	{							
		$result=mysqli_query($connection,$query);
		$idd=mysqli_fetch_array($result);
		$_SESSION['id']=$idd['bid'];
		$_SESSION['email']=$idd['Email'];
		$x=rand(10000,100000);
		echo "<script>alert('".$x."');</script>";
		$_SESSION['otp']=$x;
		$headers='From:'.'Gopa Atta'.'X-Mailer:PHP'.phpversion();
		$subject="Gopa Aata OTP";
		$body="\r\nOTP to reset password is ".$x."\r\n Do NOt reply to this email";
		// if (mail($_SESSION['email'],$subject,$body,$headers)) 
		// {
			//echo "<script>alert(' $x ');</script>";
			echo "<script>alert('Please Check your email to see otp');</script>";
			echo '<script>window.location="zxcvb"</script>';
		// }
		// else
		// {
		// 	echo "<script>alert('Sorry, Could not Send OTP\n TRY AGAIN');</script>";
		// 	session_destroy();
		// 	session_unset();
		// 	echo '<script>window.location="asdfg"</script>';
		// }	
	}
	else
	{
		echo "<script>alert('Oops....Something went wrong!');</script>";
		session_destroy();
		session_unset();
		echo '<script>window.location="asdfg"</script>';
	}
?>	