<?php
include('dbconfig.php');
$q=$_POST['q'];
// for adding Faculty start
if (isset($_POST['add'])) 
{
	if ($_POST['acptrid']!="" AND $_POST['sendrid']!="") 
	{
		//to add in my sent array
		$flag=0;
		$aid=$_POST['acptrid'];
		$sid=$_POST['sendrid'];
		$queryy="SELECT * FROM sent WHERE bid=$sid";
		$resultt=mysqli_query($connection,$queryy);
		foreach($resultt as $roww ) 
		{
			if ($roww['bid']==$sid) 
			{
				$m=$roww['bid'];
				$arr=$roww['send'];
				$ucp= unserialize($arr);
				$b = array();
				$y=count($ucp);
				for ($i=0; $i <$y ; $i++) 
				{ 
					$b[$i]=$ucp[$i];
				}
				$l=0;
				for ($i=0; $i <$y ; $i++) 
				{ 
					if($b[$i]==$aid)
					{
						$l=1;
						break;
					}
				}
				if ($l==0) 
				{        
					array_push($b,$aid);
					$cp= serialize($b);           
					$sql="UPDATE sent SET send='$cp' WHERE bid=$m";
					if ($connection->query($sql)) 
					{
						$flag=1;
					}
				}
			}
		}//to add in my sent array end
		//to add in other's recive array
		$queryy="SELECT * FROM recieve WHERE bid=$aid";
		$resultt=mysqli_query($connection,$queryy);
		foreach($resultt as $roww ) 
		{
			if ($roww['bid']==$aid) 
			{
				$m=$roww['bid'];
				$arr=$roww['rec'];
				$ucp= unserialize($arr);
				$bb = array();
				$y=count($ucp);
				for ($i=0; $i <$y ; $i++) 
				{ 
					$bb[$i]=$ucp[$i];
				}
				$l=0;
				for ($i=0; $i <$y ; $i++) 
				{ 
					if($bb[$i]==$sid)
					{
						$l=1;
						break;
					}
				}
				if ($l==0) 
				{        
					array_push($bb,$sid);
					$cp= serialize($bb);           
					$sql="UPDATE recieve SET rec='$cp' WHERE bid=$m";
					if ($connection->query($sql)) 
					{
						if ($flag==1) 
						{
							header('Location:search.php?q='.$q.'&GO%21=Search%21');
						}
					}
				}
			}
		}
		//to add in other's recive array end
	}
}
// for adding faculty end
// for cancel req start
if (isset($_POST['can'])) 
{
	if ($_POST['acptrid']!="" AND $_POST['sendrid']!="") 
	{
		//to remove in my sent array
		$flag=0;
		$aid=$_POST['acptrid'];
		$sid=$_POST['sendrid'];
		$queryy="SELECT * FROM sent WHERE bid=$sid";
		$resultt=mysqli_query($connection,$queryy);
		foreach($resultt as $roww ) 
		{
			if ($roww['bid']==$sid) 
			{
				$m=$roww['bid'];
				$arr=$roww['send'];
				$ucp= unserialize($arr);
				$b = array();
				$y=count($ucp);
				for ($i=0; $i <$y ; $i++) 
				{ 
					$b[$i]=$ucp[$i];
				}
				$l=0;
				for ($i=0; $i <$y ; $i++) 
				{ 
					if($b[$i]==$aid)
					{
						$l=1;
						$aid=$i;
					}
				}
				if ($l==1) 
				{        
					// array_push($b,$aid);
					unset($b[$aid]);
					$cp1=array_values($b);
					$cp= serialize($cp1);           
					$sql="UPDATE sent SET send='$cp' WHERE bid=$m";
					if ($connection->query($sql)) 
					{
						$flag=1;
					}
				}
			}
		}
		//to remove in my sent array end
		//to remove in other's recive array
		$aid=$_POST['acptrid'];
		$sid=$_POST['sendrid'];
		$queryy="SELECT * FROM recieve WHERE bid=$aid";
		$resultt=mysqli_query($connection,$queryy);
		foreach($resultt as $roww ) 
		{
			if ($roww['bid']==$aid) 
			{
				$m=$roww['bid'];
				$arr=$roww['rec'];
				$ucp= unserialize($arr);
				$bb = array();
				$y=count($ucp);
				for ($i=0; $i <$y ; $i++) 
				{ 
					$bb[$i]=$ucp[$i];
				}
				$l=0;
				for ($i=0; $i <$y ; $i++) 
				{ 
					if($bb[$i]==$sid)
					{
						$l=1;
						$siid=$i;
					}
				}
				if ($l==1) 
				{        
					// array_push($bb,$sid);
					unset($bb[$siid]);
					$cp1=array_values($bb);
					$cp= serialize($cp1);           
					$sql="UPDATE recieve SET rec='$cp' WHERE bid=$m";
					if ($connection->query($sql)) 
					{
						if ($flag==1) 
						{
							header('Location:search.php?q='.$q.'&GO%21=Search%21');
						}
					}
				}
			}
		}
		//to remove in other's recive array end
	}
}
// for cancel req end
//for reject or accept
if (isset($_POST['rej'])) 
{
	if ($_POST['acptrid']!="" AND $_POST['sendrid']!="") 
	{
		//to remove in other's sent array
		$flag=0;
		$aid=$_POST['acptrid'];
		$sid=$_POST['sendrid'];
		$queryy="SELECT * FROM sent WHERE bid=$aid";
		$resultt=mysqli_query($connection,$queryy);
		foreach($resultt as $roww ) 
		{
			if ($roww['bid']==$aid) 
			{
				$m=$roww['bid'];
				$arr=$roww['send'];
				$ucp= unserialize($arr);
				$b = array();
				$y=count($ucp);
				for ($i=0; $i <$y ; $i++) 
				{ 
					$b[$i]=$ucp[$i];
				}
				$l=0;
				for ($i=0; $i <$y ; $i++) 
				{ 
					if($b[$i]==$sid)
					{
						$l=1;
						$sid=$i;
					}
				}
				if ($l==1) 
				{        
					// array_push($b,$aid);
					unset($b[$sid]);
					$cp1=array_values($b);
					$cp= serialize($cp1);           
					$sql="UPDATE sent SET send='$cp' WHERE bid=$m";
					if ($connection->query($sql)) 
					{
						$flag=1;
					}
				}
			}
		}
		//to remove in other's sent array end
		//to remove in my recieve array
		$aid=$_POST['acptrid'];
		$sid=$_POST['sendrid'];
		$queryy="SELECT * FROM recieve WHERE bid=$sid";
		$resultt=mysqli_query($connection,$queryy);
		foreach($resultt as $roww ) 
		{
			if ($roww['bid']==$sid) 
			{
				$m=$roww['bid'];
				$arr=$roww['rec'];
				$ucp= unserialize($arr);
				$bb = array();
				$y=count($ucp);
				for ($i=0; $i <$y ; $i++) 
				{ 
					$bb[$i]=$ucp[$i];
				}
				$l=0;
				for ($i=0; $i <$y ; $i++) 
				{ 
					if($bb[$i]==$aid)
					{
						$l=1;
						$aiid=$i;
					}
				}
				if ($l==1) 
				{        
					// array_push($bb,$sid);
					unset($bb[$aiid]);
					$cp1=array_values($bb);
					$cp= serialize($cp1);           
					$sql="UPDATE recieve SET rec='$cp' WHERE bid=$m";
					if ($connection->query($sql)) 
					{
						if ($flag==1) 
						{
							if($q=="xyz")
							{
								header('Location:jflty.php');
							}
							else
							{
								header('Location:search.php?q='.$q.'&GO%21=Search%21');
							}
						}
					}
				}
			}
		}
		//to remove in my recieve array end
	}
}
//for accept or rej end
//for accept
if (isset($_POST['accpt'])) 
{
	if ($_POST['acptrid']!="" AND $_POST['sendrid']!="") 
	{
		//to remove in other's send array
		$flag=0;
		$aid=$_POST['acptrid'];
		$sid=$_POST['sendrid'];
		$queryy="SELECT * FROM sent WHERE bid=$aid";
		$resultt=mysqli_query($connection,$queryy);
		foreach($resultt as $roww ) 
		{
			if ($roww['bid']==$aid) 
			{
				$m=$roww['bid'];
				$arr=$roww['send'];
				$ucp= unserialize($arr);
				$b = array();
				$y=count($ucp);
				for ($i=0; $i <$y ; $i++) 
				{ 
					$b[$i]=$ucp[$i];
				}
				$l=0;
				for ($i=0; $i <$y ; $i++) 
				{ 
					if($b[$i]==$sid)
					{
						$l=1;
						$sid=$i;
					}
				}
				if ($l==1) 
				{        
					// array_push($b,$aid);
					unset($b[$sid]);
					$cp1=array_values($b);
					$cp= serialize($cp1);           
					$sql="UPDATE sent SET send='$cp' WHERE bid=$m";
					if ($connection->query($sql)) 
					{
						$flag=1;
					}
				}
			}
		}
		//to remove in other's send array end
		//to remove in my recieve array
		$aid=$_POST['acptrid'];
		$sid=$_POST['sendrid'];
		$queryy="SELECT * FROM recieve WHERE bid=$sid";
		$resultt=mysqli_query($connection,$queryy);
		foreach($resultt as $roww ) 
		{
			if ($roww['bid']==$sid) 
			{
				$m=$roww['bid'];
				$arr=$roww['rec'];
				$ucp= unserialize($arr);
				$bb = array();
				$y=count($ucp);
				for ($i=0; $i <$y ; $i++) 
				{ 
					$bb[$i]=$ucp[$i];
				}
				$l=0;
				for ($i=0; $i <$y ; $i++) 
				{ 
					if($bb[$i]==$aid)
					{
						$l=1;
						$aiid=$i;
					}
				}
				if ($l==1) 
				{        
					// array_push($bb,$sid);
					unset($bb[$aiid]);
					$cp1=array_values($bb);
					$cp= serialize($cp1);           
					$sql="UPDATE recieve SET rec='$cp' WHERE bid=$m";
					if ($connection->query($sql)) 
					{
						if ($flag==1) 
						{
							$flag=1;
						}
						else
						{
							$flag=0;
						}
					}
				}
			}
		}//to remove in my receive array end
		//to add in my friends
		$aid=$_POST['acptrid'];
		$sid=$_POST['sendrid'];
		$queryy="SELECT * FROM connxtion WHERE ntid=$sid";
		$resultt=mysqli_query($connection,$queryy);
		foreach($resultt as $roww ) 
		{
			if ($roww['ntid']==$sid) 
			{
				$m=$roww['ntid'];
				$arr=$roww['tid'];
				$ucp= unserialize($arr);
				$b = array();
				$y=count($ucp);
				for ($i=0; $i <$y ; $i++) 
				{ 
					$b[$i]=$ucp[$i];
				}
				$l=0;
				for ($i=0; $i <$y ; $i++) 
				{ 
					if($b[$i]==$aid)
					{
						$l=1;
						break;
					}
				}
				if ($l==0) 
				{        
					array_push($b,$aid);
					$cp= serialize($b);           
					$sql="UPDATE connxtion SET tid='$cp' WHERE ntid=$m";
					if ($connection->query($sql)) 
					{
						if($flag==1)
							{
								$flag=1;
							}
							else
							{
								$flag=0;
							}
					}
				}
			}
		}
		//to add in my friends end
		//to add in other's friends
		$queryy="SELECT * FROM connxtion WHERE ntid=$aid";
		$resultt=mysqli_query($connection,$queryy);
		foreach($resultt as $roww ) 
		{
			if ($roww['ntid']==$aid) 
			{
				$m=$roww['ntid'];
				$arr=$roww['tid'];
				$ucp= unserialize($arr);
				$bb = array();
				$y=count($ucp);
				for ($i=0; $i <$y ; $i++) 
				{ 
					$bb[$i]=$ucp[$i];
				}
				$l=0;
				for ($i=0; $i <$y ; $i++) 
				{ 
					if($bb[$i]==$sid)
					{
						$l=1;
						break;
					}
				}
				if ($l==0) 
				{        
					array_push($bb,$sid);
					$cp= serialize($bb);           
					$sql="UPDATE connxtion SET tid='$cp' WHERE ntid=$m";
					if ($connection->query($sql)) 
					{
						if ($flag==1) 
						{
							if($q=="xyz")
							{
								header('Location:jflty.php');
							}
							else
							{
								header('Location:search.php?q='.$q.'&GO%21=Search%21');
							}							
						}
					}
				}
			}
		}
		//to add other's friends end
	}
}
//for accept end
//for unfriend 
if (isset($_POST['unf'])) 
{
	if ($_POST['acptrid']!="" AND $_POST['sendrid']!="") 
	{
		$flag=0;
		$aid=$_POST['acptrid'];
		$sid=$_POST['sendrid'];
		$queryy="SELECT * FROM connxtion WHERE ntid=$sid";
		$resultt=mysqli_query($connection,$queryy);
		foreach($resultt as $roww ) 
		{
			if ($roww['ntid']==$sid) 
			{
				$m=$roww['ntid'];
				$arr=$roww['tid'];
				$ucp= unserialize($arr);
				$b = array();
				$y=count($ucp);
				for ($i=0; $i <$y ; $i++) 
				{ 
					$b[$i]=$ucp[$i];
				}
				$l=0;
				for ($i=0; $i <$y ; $i++) 
				{ 
					if($b[$i]==$aid)
					{
						$l=1;
						$aid=$i;
						break;
					}
				}
				if ($l==1) 
				{   
					unset($b[$aid]);
					$cp1=array_values($b);
					$cp= serialize($cp1);            
					$sql="UPDATE connxtion SET tid='$cp' WHERE ntid=$m";
					if ($connection->query($sql)) 
					{
						$flag=1;
					}
				}
			}
		}
		//to add in my friends end
		//to add in other's friends
		$aid=$_POST['acptrid'];
		$sid=$_POST['sendrid'];
		$queryy="SELECT * FROM connxtion WHERE ntid=$aid";
		$resultt=mysqli_query($connection,$queryy);
		foreach($resultt as $roww ) 
		{
			if ($roww['ntid']==$aid) 
			{
				$m=$roww['ntid'];
				$arr=$roww['tid'];
				$ucp= unserialize($arr);
				$bb = array();
				$y=count($ucp);
				for ($i=0; $i <$y ; $i++) 
				{ 
					$bb[$i]=$ucp[$i];
				}
				$l=0;
				for ($i=0; $i <$y ; $i++) 
				{ 
					if($bb[$i]==$sid)
					{
						$l=1;
						$sid=$i;
						break;
					}
				}
				if ($l==1) 
				{        
					
					unset($bb[$sid]);
					$cp1=array_values($bb);
					$cp= serialize($cp1);             
					$sql="UPDATE connxtion SET tid='$cp' WHERE ntid=$m";
					if ($connection->query($sql)) 
					{
						if ($flag==1) 
						{
							if($q=="xyz")
							{
								header('Location:jflty.php');
							}
							else
							{
								header('Location:search.php?q='.$q.'&GO%21=Search%21');
							}
						}
					}
				}
			}
		}
	}
}
//for unfriend end
?>