<?php
// for the accepted request
function is_friend($sn,$mid)
{
 $sql="SELECT * FROM connxtion WHERE ntid=$sn";
 $query=mysqli_query($GLOBALS['connection'],$sql);
 foreach($query as $row ) 
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
for ($a=0; $a <$y ; $a++) 
{
  $hm=$b[$a];
  $accquery="SELECT * FROM b_person WHERE bid=$hm";            
  $accresult =mysqli_query($GLOBALS['connection'],$accquery);
  while($acc = mysqli_fetch_assoc($accresult)) 
  {
    if($acc['bid']==$mid)
    {
      return true;            
    }
  } 
}
}
// for the accepted request
// for the sent request
function is_req_send($sn,$mid)
{
  $sql="SELECT * FROM sent WHERE bid=$sn";
  $query=mysqli_query($GLOBALS['connection'],$sql);
  foreach($query as $row ) 
  {
    $x=$row['send'];
  }
  $ucp= unserialize($x);
  $b = array();
  $y=count($ucp);
  for ($i=0; $i <$y ; $i++) 
  { 
    $b[$i]=$ucp[$i];
  }
  for ($a=0; $a <$y ; $a++) 
  {
    $hm=$b[$a];
    $accquery="SELECT * FROM b_person WHERE bid=$hm";            
    $accresult =mysqli_query($GLOBALS['connection'],$accquery);
    while($acc = mysqli_fetch_assoc($accresult)) 
    {
      if($acc['bid']==$mid)
      {
        return true;            
      }
    } 
  }
}
// for the sent request
// for the rec request
function is_req_came($sn,$mid)
{
  $sql="SELECT * FROM recieve WHERE bid=$sn";
  $query=mysqli_query($GLOBALS['connection'],$sql);
  foreach($query as $row ) 
  {
    $x=$row['rec'];
  }
  $ucp= unserialize($x);
  $b = array();
  $y=count($ucp);
  for ($i=0; $i <$y ; $i++) 
  { 
    $b[$i]=$ucp[$i];
  }
  for ($a=0; $a <$y ; $a++) 
  {
    $hm=$b[$a];
    $accquery="SELECT * FROM b_person WHERE bid=$hm";            
    $accresult =mysqli_query($GLOBALS['connection'],$accquery);
    while($acc = mysqli_fetch_assoc($accresult)) 
    {
      if($acc['bid']==$mid)
      {
        return true;           
      }
    } 
  }
}
?>