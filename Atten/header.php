<!DOCTYPE html>
<html lang="en">
<?php
include('security.php');
?>
<head>
    <meta charset="UTF-8">
    <meta name="Online-Attendance" content="Online-Attendance">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Online Attendance </title>

    <!-- Favicon -->
    <link rel="icon" href="../admin/image/Online-Attendance-n.png" >

    <!-- Stylesheet -->
    <link rel="stylesheet" href="saurabh.css">

</head>
    <body>
    <!-- Preloader -->
    <div id="preloader" style="background-color: white">
        <div class="spinner" style="background-color: white"><img src="../admin/image/Online-Attendance-nn.png" alt="Online Attendance"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        

        <!-- Navbar Area -->
        <div class="saurabh-main-menu" style="height: 50px;">
            <div class="classy-nav-container breakpoint-off" >
                <!-- Menu -->
                <nav class="classy-navbar" id="saurabhNav" style="text-align: left;height: 50px;">

                    <!-- Navbar Toggler --><div class="classy-navbar-toggler" >
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>&emsp;<!-- Logo -->
                    <a class="nav-brand" href="index.php">
                        <img src="../admin/image/Online-Attendance-logo3.png" alt="Online Attendance"></a>
                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="index.php"style="color: black">Home</a></li>
                                <li><a href="trial.php#trial"style="color: black">Trial</a></li>
                                <li><a href="trial.php"style="color: black">How To?</a></li> 
                                <li><a href="about.php"style="color: black">Reviews</a></li>
                                <li><a href="about.php"style="color: black">About Us</a></li>
                                <li><a href="contact.php"style="color: black">Contact</a></li>
                            </ul>                            
                            <div class="register-login-area">
                                <a href="../user/reg_buy.php" class="btn">Register</a>
                                <a href="../user/ulogin.php" class="btn active">Login</a>
                            </div>
                            <!-- Search Button -->
                            <!-- <div class="search-area">
                                <form  method="post">
                                    <input type="search" name="search" id="search" placeholder="Search" onkeyup="searchFunction()">
                                    <button type="submit"><i class="fa fa-search"  aria-hidden="true"></i></button>
                                </form>
                                <script type="text/javascript">
                                    function searchFunction()
                                    {
                                        var input,filter,x,a,i;
                                        input=document.getElementByID('search').value();
                                        filter=input.value.toUpperCase();
                                        x=document.getElementByTagName('li');
                                        for(i=0;i<x.leangth;i++)
                                        {
                                            if(!x[i].innderHTML.toUpperCase().includes(filter))
                                            {
                                                x[i].style.display="none";
                                            }
                                            else
                                            {
                                                x[i].style.display="list-item";
                                            }
                                        }
                                    }
                                </script>
                            </div> -->

                            <!-- Register / Login -->
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
        <!-- <div class="top-header-area d-flex justify-content-between align-items-center">
            <div class="contact-info">
                <a href="#" style="color: black"><span>Phone:</span> +91 9325684625</a>
                <a href="#" style="color: black"><span>Email:</span> saurabhwnai256@gmail.com</a>
            </div>         
             <div class="follow-us">
                <span style="color: black">Follow us</span>
                <a href="#" style="color: skyblue"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#" style="color: red"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#" style="color: lightblue"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div> -->
    </header>
    <!-- ##### Header Area End ##### -->