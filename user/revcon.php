<?php
include('security.php');
if(isset($_POST['btn'])) 
{
	if(empty($_POST['rev']) || $_POST['rate']==null)
	{
		$_SESSION['Success']="Please Fill All the fields ";
		header('Location: review.php');
	} 
	else
	{
		$sql="INSERT INTO review (id,review,rate,status,`DATE`,display) VALUES('$_POST[id]','$_POST[rev]','$_POST[rate]','unread',CURRENT_TIMESTAMP,'no')";

		if(mysqli_query($connection,$sql))
		{
			$_SESSION['Success']="Your review Submitted ";
			header("Location:review.php");

		}
		else
		{
			$_SESSION['Status']="Your review Not Submitted ";
			header('Location: review.php');
		}
	}
}
if(isset($_POST['btnu'])) 
{
	if(empty($_POST['rev']) || $_POST['rate']==null)
	{
		$_SESSION['Success']="Please Fill All the fields ";
		header('Location:../Atten/about.php');
	} 
	else
	{
		$sql="INSERT INTO review(review,rate,status,`DATE`,display,email,name) VALUES('$_POST[rev]',5,'unread',CURRENT_TIMESTAMP,'yes','$_POST[ueml]','$_POST[un]')";

		if(mysqli_query($connection,$sql))
		{
			$_SESSION['Success']="Your review Submitted ";
			header("Location:../Atten/about.php");

		}
		else
		{
			$_SESSION['Status']="Your review Not Submitted ";
			header('Location:../Atten/about.php');
		}
	}
}
?>