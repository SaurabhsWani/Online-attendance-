<?php
echo "";
include('security.php');      
$sub=$_POST['sub'];
$query="DROP TABLE $sub"; 
$id=$_SESSION['bid'];
$result=mysqli_query($connection,$query);
$quer="SELECT * FROM subject WHERE id=$id";
$resul=mysqli_query($connection,$quer);
$pas=mysqli_fetch_array($resul);
if($pas['subjname']=$sub)
{
	$sid=$_POST['subcode'];
	$sql="DELETE   FROM subject WHERE sid=$sid"; 
	echo "<script>alert('hlloe');</script>";        
	$result=mysqli_query($connection,$sql);
	unset($_SESSION['sub']);
	unset($_SESSION['subcode']);
        // echo "<script type='text/javascript' src='../assets/js/plugin/sweetalert/sweetalert.min.js'>";
        // echo "setTimeout (function () {swal('Good job!', 'You clicked the button!', {icon : 'success',timer:6000,buttons: {confirm: {className : 'btn btn-success'}},});},1000);</script>";

	$_SESSION['Success']="Subject Deleted";
	echo '<script>window.location="delsub.php"</script>';
}
else if (isset($_POST['delac'])) 
{
	$id1=$_SESSION['bid'];
	$query="SELECT Password FROM b_person WHERE bid=$id1 ";
	$result=mysqli_query($connection,$query);
	$passcode=mysqli_fetch_array($result);
	if($passcode['Password']==$_POST[Pddel])
	{
		$sql="DELETE  FROM connxtion WHERE ntid=$id1";
		if(mysqli_query($connection,$sql))
		{			 
			$query="SELECT * FROM subject WHERE id=$id1";
			$sql=mysqli_query($connection,$query);
			foreach($sql as $row ) 
			{
				$sub=$row['subjname'];
				$query="DROP TABLE $sub";
				$result=mysqli_query($connection,$query);
			}
			$sql="DELETE  FROM subject WHERE id=$id1";
			if(mysqli_query($connection,$sql))
			{
				$sql="DELETE   FROM b_person WHERE bid=$id1";
				if(mysqli_query($connection,$sql))
				{
					echo "<script>alert('Your Account Deleted');</script>";
					echo '<script>window.location="../Atten/index.php"</script>';
				}
			}
		}
	}
	else
	{
		echo "<script>alert('Password Do Not Match');</script>";
		echo '<script>window.location="profile.php"</script>';
	}	
}
else 
{
	$_SESSION['Status']="Subject Not Deleted";
	echo '<script>window.location="Subjects.php"</script>';
}
?>