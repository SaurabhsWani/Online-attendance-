<?php
include('security1.php');
$First_Name=$State=$Cat=$Email=$Password=$Password2="";
if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
  if (empty($_POST["Email"])) 
  {
    echo '<script>alert(\"Please Enter Email\")</script>';
    echo '<script>window.location="reg_buy.php"</script>';    
  }
  elseif (!filter_var($_POST["Email"],FILTER_VALIDATE_EMAIL)) 
  {
    echo '<script>alert(\"Please Enter Valid Email\")</script>';
    echo '<script>window.location="reg_buy.php"</script>';    
  }
  else
  {
    $Name = filter_input(INPUT_POST,'First_Name');
    $State= filter_input(INPUT_POST,'State');
    $Cat=filter_input(INPUT_POST,'cat');
    $Pln=filter_input(INPUT_POST,'pln');
    $Email=filter_input(INPUT_POST,'Email');
    $cs=filter_input(INPUT_POST,'CS');
    $Password=filter_input(INPUT_POST,'Password');
    $Password2=filter_input(INPUT_POST,'password2');
    if(!empty($Password)&&($Password==$Password2))
    {
      if (mysqli_connect_error())
      {
       die('connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
     }
     else
     {

       $target="../admin/image/".basename($_FILES['adimg']['name']);
       $image=$_FILES['adimg']['name'];
       $query="SELECT Email FROM b_person ";
       $result=mysqli_query($connection,$query);
       $passcode=mysqli_fetch_array($result);
       if($passcode['Email']==$Email)
       {
         echo "<script>alert(\"Already Register With This Email Please Enter Different Email OR login\")</script>";
         header("refresh:1; url=reg_buy.php");
       }
       else
       {    
        $code='';
        $char='ABCDEFGHIJKLMNOPQRSTUVEXYZ0123456789abcdefghijklmnopqrstuvwxyz';
        for ($i=0; $i <7 ; $i++) 
        { 
          $ind=rand(0,strlen($char)-1);
          $code.=$char[$ind];
        }
        $sql="INSERT INTO b_person(Name,Email,Password,image,category,code,Plan,`Date`,cs) VALUES ('$Name','$Email','$Password','$image','$Cat','$code','$Pln',CURRENT_TIMESTAMP,'$cs')";    
        if ($connection->query($sql)) 
        {
          $query2="SELECT * FROM b_person WHERE Email='$Email' LIMIT 1";
          $result=mysqli_query($connection,$query2);
          $idd=mysqli_fetch_array($result);
          $ntid=$idd['bid'];
          move_uploaded_file($image,$target);
          $b = array();
          $cp=serialize($b);
          $sql="INSERT INTO connxtion(ntid,tid) VALUES ('$ntid','$cp')";
          if ($connection->query($sql)) 
          {
            $b = array();
            $cp=serialize($b);
            $sql="INSERT INTO sent(bid,send) VALUES ('$ntid','$cp')";
            if ($connection->query($sql)) 
            {
              $b = array();
              $cp=serialize($b);
              $sql="INSERT INTO recieve(bid,rec) VALUES ('$ntid','$cp')";
              if ($connection->query($sql)) 
              {
                echo '<script>alert(\"You can Login now\")</script>';
                echo '<script>window.location="ulogin.php"</script>';
              }
            }
          }
        }
        else
        {
          echo "Error: ".$sql."<br>".$connection->error;
        }
        $connection->close();
      }
    }
  }
  else
  {
    if(!($Password==$Password2))
    {
     echo "<script>alert(\"Password Do not Match\")</script>";
   }
   else
   {
     echo "<script>alert(\"Enter Password\")</script>";
   }
 }
}
}
else
{
  echo '<script>window.location="reg_buy.php"</script>';  
}
?>