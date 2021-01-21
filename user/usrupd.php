<?php
include('security.php');
include('fun.php');
$id1=$_SESSION['bid'];
if(isset($_POST['delp']))
{
	if(update("b_person","image","''","WHERE bid=$id1"))
	{
		poutput("User Image Removed","profile");
	}
	else
	{
		noutput("User Image Not Removed","profile");
	}
}
else if (isset($_POST['updp'])) 
{
	if(is_uploaded_file($_FILES['adimg']['tmp_name']))
	{
		$image=$_FILES['adimg']['tmp_name'];
		$image2=$_FILES['adimg']['name'];
	}
	$target="../admin/image/".$_FILES['adimg']['name'];
	if(update("b_person","image","'$image2'","WHERE bid=$id1"))
	{
		move_uploaded_file($image,$target);	
		poutput("User Image Updated","profile");	
	}
	else
	{
		noutput("User Image Not Updated","profile");
	}
}
else if (isset($_POST['updeml'])) 
{
	$eml=$_POST['Email'];
	if(update("b_person","Email","'$eml'","WHERE bid=$id1"))
	{
		poutput("User Email Updated","profile");	
	}
	else
	{
		poutput("User Email Not Updated","profile");
	}
}
else if (isset($_POST['updfn'])) 
{
	$nm=$_POST['First_Name'];
	if(update("b_person","Name","'$nm'","WHERE bid=$id1"))
	{
		poutput("User Name Updated","profile");	
	}
	else
	{
		poutput("User Name Not Updated","profile");			
	}
}
else if (isset($_POST['updpd'])) 
{
	$ps=$_POST['Password'];
	if(update("b_person","Password","'$ps'","WHERE bid=$id1"))
	{
		poutput("User Password Updated","profile");	
	}
	else
	{
		poutput("User Password Not Updated","profile");
	}
}
?>