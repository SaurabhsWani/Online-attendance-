<?php
session_start();
require('dbconfig.php');

if ($connection) 
{
	//echo "Database Connected";
}
else
{
	header('Location:dbconfig.php');
}
?>