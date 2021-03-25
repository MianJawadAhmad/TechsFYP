<?php
require_once 'includes/conn.php';
if(isset($_POST['login']) && $_POST['login'] =='form')
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $query=mysqli_query($conn, "SELECT * FROM Customer where customer_email='$email' and customer_password='$pass'");
    $num=mysqli_num_rows($query);
    if($num==1)
    {
        $record=mysqli_fetch_array($query);
        session_start();
        $_SESSION['customer_id'] = $record['customer_id'];

        $_SESSION['customer_email']=$record['customer_email'];
        $_SESSION['customer_name']=$record['customer_name'];
        $_SESSION['customer_address']=$record['customer_address'];
		 $_SESSION['customer_phone']=$record['customer_phone'];
		 


        header('location:index.php?Welcome');
        exit();
    }
    else{
        header('location:index.php?0');
        exit();
    }


}



?>

<!DOCTYPE html>
<html>
<head>
    <title></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- Custom Theme files -->
    <link href="login_css/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="login_css/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->

    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <!-- //web font -->

</head>
<body>

<!-- main -->
<div class="w3layouts-main">
    <div class="bg-layer">
        <h1>Sign In </h1>
        <div class="header-main">
            <div class="main-icon">
                <span class="fa fa-user-circle"></span>
            </div>
            <div class="header-left-bottom">
                <form action="login.php" method="post">



                    <div class="icon1">
                        <span class="fa fa-user"></span>
                        <input type="email" placeholder="Email Address" name="email" required=""/>
                    </div>
                    <div class="icon1">
                        <span class="fa fa-lock"></span>
                        <input type="password" placeholder="Password" name="pass" required=""/>
                    </div>
                    <div class="login-check">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Keep me logged in</label>
                    </div>
                    <div class="bottom">
                        <button type="submit" name="submit" class="btn">Log In</button>

                        <input type="hidden" name="log" value="in">
                       
                    </div>


                    <div class="links">
                        <p><a href="">Don't Have an account</a></p>
                        <p class="right"><a href="register.php"> Sign Up Here</a></p>
                        <div class="clear"></div>
                    </div>
                </form>
            </div>
            <!--<div class="social">
                <ul>
                    <li>or login using : </li>
                    <li><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#" class="google"><span class="fa fa-google-plus"></span></a></li>
                </ul>
            </div>-->
        </div>

        <!-- copyright -->
        <!--<div class="copyright">
            <p>© 2019 Slide Login Form . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
        </div>-->
        <!-- //copyright -->
    </div>
</div>
<!-- //main -->

</body>
</html>