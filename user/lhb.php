<?php
include('security1.php');  
include('fun.php');  
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
            $result=select("Password","b_person","WHERE Email='$Email'");
            $passcode=mysqli_fetch_array($result);
            if(empty($passcode))
            {
                // $_SESSION['email']="Incorrect Email or Email does not exit";
                setcookie('emailt'," ", time()+(60*5));
                header("Location:ulogin.php?error=Incorrect Email or Email does not exit");
                return false;
            }
            else
            {
                setcookie('emailt',$Email, time()+(60*5));
            }
            if($passcode['Password']==$_POST['Password'])
            {

                setcookie('emailt', time()-3600);
                if (isset($_POST['rm']))
                {
                    setcookie('email',$Email, time()+60*60*7);
                    setcookie('pass',$_POST['Password'], time()+60*60*7);
                }
                if(update("b_person","status","'on'","WHERE Email='$Email'"))
                {
                    $result=select("*","b_person","WHERE Email='$Email' LIMIT 1");
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
                // $_SESSION['pass']="Incorrect Password";
                header("Location:ulogin.php?error=Incorrect Password");
                return false;
            }
        }
        else
        {
            $_SESSION['email']="Incorrect Email or Email does not exit";
            echo '<script>window.location="ulogin.php"</script>';
            return false;
        }
    }
}
?>