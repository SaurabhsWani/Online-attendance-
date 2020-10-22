<?php
include('security.php');
$id1=$_SESSION['bid'];
if (isset($_POST['updp'])) 
{
$target="../admin/image/".basename($_FILES['adimg']['name']);
 $image=$_FILES['adimg']['name'];
 $sql="UPDATE b_person SET image='$image' WHERE bid=$id1";

 if(mysqli_query($connection,$sql))
 {
 	move_uploaded_file($image,$target);
 	$_SESSION['Success']="User profile Updated";
 	header("Location:profile.php");
 	 	
 }
 else
{
$_SESSION['Status']="User profile Not Updated";
	header('Location: profile.php');
}
}
else if (isset($_POST['updeml'])) 
{
 $sql="UPDATE b_person SET Email='$_POST[Email]' WHERE bid=$id1";

 if(mysqli_query($connection,$sql))
 {
 	$_SESSION['Success']="User profile Updated";
 	header("Location:profile.php");
 	 	
 }
 else
{
$_SESSION['Status']="User profile Not Updated";
	header('Location: profile.php');
}
}
else if (isset($_POST['updfn'])) 
{
 $sql="UPDATE b_person SET Name='$_POST[First_Name]' WHERE bid=$id1";

 if(mysqli_query($connection,$sql))
 {
 	$_SESSION['Success']="User profile Updated";
 	header("Location:profile.php");
 	 	
 }
 else
{
$_SESSION['Status']="User profile Not Updated";
	header('Location: profile.php');
}
}
else if (isset($_POST['updpd'])) 
{
 $sql="UPDATE b_person SET Password='$_POST[Password]' WHERE bid=$id1";

 if(mysqli_query($connection,$sql))
 {
 	$_SESSION['Success']="User profile Updated";
 	header("Location:profile.php");
 	 	
 }
 else
{
$_SESSION['Status']="User profile Not Updated";
	header('Location: profile.php');
}
}
?>