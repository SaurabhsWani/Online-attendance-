<?php
// for the accepted request
function is_friend($sn,$mid)
{
 $query=select("*","connxtion","WHERE ntid=$sn");
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
  $accresult=select("*","b_person","WHERE bid=$hm");
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
  $query=select("*","sent","WHERE bid=$sn");
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
    $accresult=select("*","b_person","WHERE bid=$hm");
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
  $query=select("*","recieve","WHERE bid=$sn");
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
    $accresult=select("*","b_person","WHERE bid=$hm");
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