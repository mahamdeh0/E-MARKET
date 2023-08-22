<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
    require("Login_Process.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="login.css">


</head>
<body>

<h2>You must create an account to continue browsing</h2>

<div  class="container " id="container">
    <div class="form-container sign-up-container">
        <form action="#">
            <span>or use your email for registration</span>
            <input type="text" placeholder="Name" />
            <input type="email" placeholder="Email" />
            <input type="password" placeholder="Password" />
        </form>

    </div >
    <form action="Login.php" method="post">


    <div  class="form-container sign-in-container " >
        <form action="#">
            <br><br><br><br><br><br><br><br><br><br><br>            <h1>Sign in</h1>
            <br>
            <input type="email" name="email" placeholder="Email" />
            <input type="password"  name="password" placeholder="Password" />
            <a href="#">Forgot your password?</a>

            <button type="submit" name="login">Sign In</button>
            <img src="imgs/login2.png" alt="" >
        </form>



        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Welcome to E-Market.</h1>
                <p>If you do not have an account, click here to become part of our families</p>
                <button class="ghost" id="signUp" onclick=""><a style="color: #f2f2f2"  href="SignUp.php">Sign Up</a></button>

                <br> <br>
                <img src="/imgs/loginn.png" alt="" >
            </div>
        </div>
    </div>
</div>



</body>
</html>