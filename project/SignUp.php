
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    require("SignUp_Process.php");
}

?>
<div class="main">

    <section class="signup">

        <div class="container">
            <div class="signup-content">
                <form action="" method="POST" id="signup-form" class="signup-form">
                    <h2 class="form-title">Create account</h2>
                    <div class="form-group">
                        <input type="text" value="<?php if(isset($_POST['name'])) {echo $_POST['name'];} ?>" class="form-input" name="name" id="name" placeholder="Your Name"/>
                    </div>
                    <div class="form-group">
                        <input type="email" value="<?php if(isset($_POST['email'])) {echo $_POST['email'];} ?>" class="form-input" name="email" id="email" placeholder="Your Email"/>
                    </div>
                    <div class="form-group">
                        <input type="text"  class="form-input" name="password" id="password" placeholder="Password"/>
                        <span toggle="#password" class=" field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" id="submit" class="form-submit" value="Sign up">Sign up</button>
                    </div>
                </form>
                <p class="loginhere">
                    Have already an account ? <a href="Login.php" >Login here</a>
                </p>
            </div>
        </div>
    </section>

</div>


</body>
</html>