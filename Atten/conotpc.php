<?php
session_start();
if($_SESSION['id']== NULL)
	{
		echo '<script>window.location="asdfg"</script>';
	}
	$ot=$_SESSION['otp'];
	$otp = filter_input(INPUT_POST,'tp');
	if ($ot=$otp && $ot!=NULL)
	{ 	
		echo "Password match succesfull";
		unset($_SESSION['otp']);
		echo '<script>window.location="akihdar"</script>';
	}
	else
	{
		echo "<script>alert(\"OTP Didn't Match Please Try Again\");</script>";
		session_destroy();
		session_unset();
		echo '<script>window.location="asdfg"</script>';
		
	}
	


	?>