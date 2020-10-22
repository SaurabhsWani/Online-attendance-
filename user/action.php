<?php
include('security.php');
if(isset($_POST['submit']))
{ 
	$col=$_POST['subj'];
	echo "<script>alert(".$col.");</script>";
}
if ($connection)
{
	echo "<script>alert('Database Connected');</script>";
}

//new col
$sql = "SELECT * FROM $col WHERE 1";
$c=date("Y/m/d--").date("h:i:sa");
$_SESSION['col']=$c;
$x="ALTER TABLE `$col` ADD `$c` VARCHAR (255)";
mysqli_query($connection,$x);
$connection->query($x);
//new col end
$sql="SHOW COLUMNS FROM $col";
$res=mysqli_query($connection,$sql);
$ncol=0;
while ($row=mysqli_fetch_array($res)) 
{
	$ncol+=1;
}
$query="SELECT prn FROM $col ";
$sql_run=mysqli_query($connection,$query);
$row=mysqli_num_rows($sql_run);
$sql = "INSERT INTO $col (`$c`) VALUES ('null')";
$u=0;
for ($i=1; $i <=$row; $i++) 
{
	$check =$_POST[$i];
	if ($check==NULL) 
	{
		$check="Absent";
	}
	else{$u+=1;}
	$sql="UPDATE $col SET `$c`='$check' WHERE id=$i";
	mysqli_query($connection,$sql); 
}
echo "<script>alert('Toltal Present Students Are ".$u."');</script>";

$query2="SELECT percnt FROM $col";
$sql2=mysqli_query($connection,$query2);
$i=1;
while ($row2=mysqli_fetch_assoc($sql2)) 
{  	
	foreach ($row2 as $key=>$value) 
	{
	$z=$value;
	$m=($z*($ncol-4))/100;	
	}  		
	$check =$_POST[$i];
	if ($check==NULL) 
	{
		$check="Absent";
	}
	else
	{
		$m+=1;
	}
	$n=$m;
	$ssw=($n/($ncol-3))*100;
	$sql="UPDATE `$col` SET `percnt` = '$ssw' WHERE `$col`.`id`= $i";
	mysqli_query($connection,$sql); 
	$i++;
}

mysqli_close($connection);
echo '<script>window.location="Class.php"</script>'; 
// header('Location:view.php');
?>