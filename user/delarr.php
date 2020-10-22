<?php
include('security.php');
if (isset($_POST['delcon'])) 
{
	$p=$_POST['raid'];
	$id=$_SESSION['bid'];
	$query="SELECT * FROM connxtion WHERE ntid=$id";
	$sql=mysqli_query($connection,$query);
	foreach($sql as $row ) 
	{
		$x=$row['tid'];
	}
	$ucp= unserialize($x);
	$b = array();
	$y=count($ucp);
	for ($i=0; $i <$y ; $i++) 
	{ 
		$b[$i]=$ucp[$i];
	}
	for ($i=0; $i <$y ; $i++) 
	{ 
		if ($b[$i]==$p) 
		{
			$d=$i;
		}
	}
	unset($b[$d]);
	$cp1=array_values($b);
	$cp= serialize($cp1);
	$sql="UPDATE connxtion SET tid='$cp' WHERE ntid=$id";
	if ($connection->query($sql)) 
	{
		echo "<script>alert('Faculty Removed Successfully');</script>";
		echo '<script>window.location="Teachers.php"</script>';
	}
	else
	{
		echo "<script>alert('UnSuccessful');</script>";
		echo '<script>window.location="Teachers.php"</script>';
	}
}
?>