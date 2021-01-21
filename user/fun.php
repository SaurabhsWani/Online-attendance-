<?php
function title($page){
	echo '<title>'.$_SESSION['fn'].' | '.$page.'</title>';
}

function message()
{
	if (isset($_SESSION['Success'])&&$_SESSION['Success']!='') 
	{
		echo '<h2 class="bg-primary text-white">'.$_SESSION['Success'].'</h2>';
		unset($_SESSION['Success']);
	}
	if (isset($_SESSION['Status'])&&$_SESSION['Status']!='') 
	{
		echo '<h2 class="bg-danger text-white">'.$_SESSION['Status'].'</h2>';
		unset($_SESSION['Status']);
	}
}

function select($var,$col,$condtn)
{
	$query="SELECT $var FROM $col $condtn";
	$sql=mysqli_query($GLOBALS['connection'],$query);	
	return $sql;
}

function update($col,$lhs,$rhs,$condtn)
{
	$query="UPDATE $col SET $lhs=$rhs $condtn";
	if (mysqli_query($GLOBALS['connection'],$query)) 
	{
		return true;
	}	
	else
	{
		return false;
	}
}

function poutput($msg,$location)
{
	$_SESSION['Success']=$msg;
	header('Location:'.$location.'.php');
}
function noutput($msg,$location)
{
	$_SESSION['Status']=$msg;
	header('Location:'.$location.'.php');
}
?>