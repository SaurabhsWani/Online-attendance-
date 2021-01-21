<?php
include('security.php');
include('fun.php');
$st=$_POST['sname'].$_SESSION['bid'];
$id=$_SESSION['bid'];
$result=select("*","subject","WHERE id=$id");
$flag=0;
while($row = mysqli_fetch_assoc($result)) 
{
	if($row['subjname']==$st)
	{
		$flag+=1;
	}
}
if($flag==0)
	{
		$ss=$_POST['ss'];
		$sd=$_POST['sd'];
		$sql ="INSERT INTO subject (id,subjname,standard,divsion) VALUES ('$_SESSION[bid]','$st','$ss','$sd')"; 	
		mysqli_query($connection,$sql);
		if ($connection)
		{
			echo "<script>alert('Database Connected');</script>";
		}
		$sqll="CREATE TABLE $st (id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
		prn INT(11),
		percnt INT(11)
	)";
	if ($sqll)
	{
		echo "<script>alert('crated');</script>";
	}
	$result=mysqli_query($connection,$sqll);
	if ($connection)
	{
		echo "<script>alert('Database Connected');</script>";

//prn insertion start
		$s=$_POST['s'];
		$e=$_POST['e'];
		$s1=$_POST['s1'];
		$e1=$_POST['e1'];
		$s2=$_POST['s2'];
		$e2=$_POST['e2'];
		for ($i=$s; $i <=$e; $i++) 
		{
			$sql = "INSERT INTO $st (`prn`) VALUES ('$i')"; 	
			mysqli_query($connection,$sql); 
		}
		if($s1!=null)
		{
			for ($i=$s1; $i <=$e1; $i++) 
			{
				$sql = "INSERT INTO $st (`prn`) VALUES ('$i')"; 	
				mysqli_query($connection,$sql); 
			}
		}
		if($s2!=null)
		{
			for ($i=$s2; $i <=$e2; $i++) 
			{
				$sql = "INSERT INTO $st (`prn`) VALUES ('$i')"; 	
				mysqli_query($connection,$sql); 
			}
		}
		poutput("New Subject Created","Subjects");
	}
}
else
{
echo "<script>alert('Please use different subject name or use postfix to subject');</script>";
noutput("New Subject Not Created","Subjects");
}
// prn insertion complete
mysqli_close($connection);
?>