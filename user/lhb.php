<?php
include('security1.php');   
if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
    if (empty($_POST["Email"])) 
    {
        echo '<script>alert(\"Please Enter Email\")</script>';
        echo '<script>window.location="ulogin.php"</script>';    
    }
    elseif (!filter_var($_POST["Email"],FILTER_VALIDATE_EMAIL)) 
    {
        echo '<script>alert(\"Please Enter Valid Email\")</script>';
        echo '<script>window.location="ulogin.php"</script>';    
    }
    else
    {
        if(isset($_POST['Email']))
        {
            $Email=$_POST['Email'];
            $query="SELECT Password FROM b_person WHERE Email='$Email' ";
            $result=mysqli_query($connection,$query);
            $passcode=mysqli_fetch_array($result);
            if($passcode['Password']==$_POST['Password'])
            {

                if (isset($_POST['rm']))
                {
                    setcookie('email',$Email, time()+60*60*7);
                    setcookie('pass',$_POST['Password'], time()+60*60*7);
                }
                $sql="UPDATE b_person SET status='on' WHERE Email='$Email'";
                if(mysqli_query($connection,$sql))
                {
                    $query2="SELECT * FROM b_person WHERE Email='$Email' LIMIT 1";
                    $result=mysqli_query($connection,$query2);
                    $idd=mysqli_fetch_array($result);
                    $_SESSION['fn']=$idd['Name'];
                    $_SESSION['bid']=$idd['bid'];
                    $_SESSION['perdet']=75;
                    $_SESSION['email']=$idd['Email'];
                    echo '<script>window.location="main.php"</script>'; 
                }           
            }
            else
            {
                echo("<script>alert('Incorrect Password or Email');</script>");
                echo '<script>window.location="ulogin.php"</script>';
                return false;
            }



        }
    }
}
?>