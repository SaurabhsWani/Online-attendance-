<?php
include('security.php');
if(isset($_POST['btnn']) )
{
	$_SESSION['perdet']=$_POST['pardet'];
	echo "<script>alert('you set ".$_SESSION['perdet']." % criteria');</script>";
	echo '<script>window.location="fordetli.php"</script>';
}
else
{
	if(isset($_POST['submit']))
	{ 
		$col=$_POST['sub'];
		$sid=$_POST['subcode'];
		$_SESSION['sub']=$col;
		$_SESSION['subcode']=$sid;
		echo '<script>window.location="Class.php"</script>';
	}
	else if(isset($_POST['submit1']))
	{ 
		$col=$_POST['sub'];
		$sid=$_POST['subcode'];
		$_SESSION['sub']=$col;
		$_SESSION['subcode']=$sid;
		echo '<script>window.location="detli.php"</script>';
	}
	else
	{
		unset($_SESSION['sub']);
		unset($_SESSION['subcode']);
		echo '<script>window.location="Subjects.php"</script>';	
	}	
}
?>