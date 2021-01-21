<?php
include('security.php');
include('fun.php');
if(isset($_POST['btn'])) 
{
	if(empty($_POST['rev']) || $_POST['rate']==null)
	{
		poutput("Please Fill All the fields","review");
	} 
	else
	{
		$sql="INSERT INTO review (id,review,rate,status,`DATE`,display) VALUES('$_POST[id]','$_POST[rev]','$_POST[rate]','unread',CURRENT_TIMESTAMP,'no')";

		if(mysqli_query($connection,$sql))
		{
			poutput("Your review Submitted","review");

		}
		else
		{
			noutput("Your review Not Submitted","review");
		}
	}
}
if(isset($_POST['btnu'])) 
{
	if(empty($_POST['rev']) || $_POST['rate']==null)
	{
		poutput("Please Fill All the fields","../Atten/about");
	} 
	else
	{
		$sql="INSERT INTO review(review,rate,status,`DATE`,display,email,name) VALUES('$_POST[rev]',5,'unread',CURRENT_TIMESTAMP,'yes','$_POST[ueml]','$_POST[un]')";

		if(mysqli_query($connection,$sql))
		{
			poutput("Your review Submitted","../Atten/about");

		}
		else
		{
			poutput("Your review Not Submitted","../Atten/about");
		}
	}
}
?>