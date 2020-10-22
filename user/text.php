<?php
$connection=new mysqli('127.0.0.1','root','','olattendacne') or die("could not make connection".mysqli_connect_error());
$query="SELECT * FROM connxtion WHERE ntid=2";
$sql=mysqli_query($connection,$query);
foreach($sql as $row ) 
{
	$x=$row['tid'];
}
$ucp= unserialize($x);
$y=count($ucp);
for ($i=0; $i <$y ; $i++) 
{ 
	$b[$i]=$ucp[$i];
}
for ($i=0; $i <$y ; $i++) 
{ 
	echo $b[$i];
}
?>