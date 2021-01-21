<?php
echo "";
include('security.php');
include('fun.php');    
$id=$_SESSION['bid'];
if (isset($_POST['sub']))
{
	$sub=$_POST['sub'];
	$query="DROP TABLE $sub";
	$result=mysqli_query($connection,$query);
	$resul=select("*","subject","WHERE id=$id");
	$pas=mysqli_fetch_array($resul);
	if($pas['subjname']=$sub)
	{
		$sid=$_POST['subcode'];
		$sql="DELETE  FROM subject WHERE sid=$sid"; 
		echo "<script>alert('hlloe');</script>";        
		$result=mysqli_query($connection,$sql);
		unset($_SESSION['sub']);
		unset($_SESSION['subcode']);
		poutput("Subject Deleted","delsub");
	}
}
else if (isset($_POST['delac'])) 
{
	$id1=$_SESSION['bid'];
	$result=select("Password","b_person","WHERE bid=$id1");
	$passcode=mysqli_fetch_array($result);
	if($passcode['Password']==$_POST['Pddel'])
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
				$sql="DELETE  FROM b_person WHERE bid=$id1";
				if(mysqli_query($connection,$sql))
				{
					echo "<script>alert('Your Account Deleted');</script>";
					header('Location:../Atten/index.php');
				}
			}
		}
	}
	else
	{
		echo "<script>alert('Password Do Not Match');</script>";
		header('Location:profile.php');
	}	
}
else 
{
	$_SESSION['Status']="Subject Not Deleted";
	header('Location:Subjects.php');
}
?>