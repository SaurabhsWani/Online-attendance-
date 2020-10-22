<?php
include('qs.php');
// for cancel req start
// if (isset($_POST['can'])) 
// {
// 	if ($_POST['acptrid']!="" AND $_POST['sendrid']!="") 
// 	{
// 		//to remove in my sent array		
// 		//to remove in my sent array end		
// 	}
// }
// for cancel req end


function CanFromSent($aid,$sid)
{
	$flag1=0;
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
			//searching 
			$so=sort_arr($arrso);
			$sa=search_arr($so);
			// for ($i=0; $i <$y ; $i++) 
			// { 
			// 	if($b[$i]==$aid)
			// 	{
			// 		$l=1;
			// 		$aid=$i;
			// 	}
			// }


			if ($sa==1) 
			{        
				
				unset($b[$aid]);
				$cp1=array_values($b);
				$cp= serialize($cp1);           
				$sql="UPDATE sent SET send='$cp' WHERE bid=$m";
				if ($connection->query($sql)) 
					{return 1;}
				else 
					{return 0;}
			}
		}
	}
}

function CanFromRecieve($aid,$sid)
{
	//to remove in other's recive array
	// $aid=$_POST['acptrid'];
	// $sid=$_POST['sendrid'];
	$flag2=0;
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
				unset($bb[$siid]);
				$cp1=array_values($bb);
				$cp= serialize($cp1);           
				$sql="UPDATE recieve SET rec='$cp' WHERE bid=$m";
				if ($connection->query($sql)) 
				{
					return 1
					// if ($flag==1) 
					// {
					// 	header('Location:search.php?q='.$q.'&GO%21=Search%21');
					// }
				}
				else{return 0;}
			}
		}
	}
	
}




// echo "hello<br>";
// function printname($name,$id){
// 	echo $name."<br>".$id;
// }
// printname($name="saurabh",$id=1);

?>