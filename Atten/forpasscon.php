<?php
include('security.php');
if($_SESSION['id']== NULL)
{
	echo '<script>window.location="popup.php"</script>';
}
$sql="UPDATE b_person SET Password='$_POST[pd]' WHERE bid='$_POST[id]'";

if(mysqli_query($connection,$sql))
{
	echo '<script>window.location="ulogin.php"</script>';
	echo "<script>alert(\"Updated successfully You Can Login now\");</script>";

}
else
{
	echo "<script>alert(\"Not Updated Try After Sometime\");</script>";
	echo '<script>window.location="popup.php"</script>';
}
?>