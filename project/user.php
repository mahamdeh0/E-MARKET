<?php
session_start();
require_once ("php/Conn.php");
$user=array();
$con = mysqli_connect("localhost", "root", "","e-market","3306");
$conn=new Conn();


if(isset($_SESSION['userid']))
{
    $user=$conn->getUserInfo($con,$_SESSION['userid']);

}
if(isset($_POST['editUsername']))
{
   $sql="UPDATE log SET username=? WHERE id=?";
    $q= mysqli_stmt_init($con);
   mysqli_stmt_prepare($q,$sql);
   mysqli_stmt_bind_param($q,'si', $_POST['userinput'], $user['id']);
    mysqli_stmt_execute($q);
    echo "<script> alert(\"Changes Saved\") </script>";
    echo "<script> window.location='user.php' </script>";
}
if(isset($_POST['editEmail']))
{
    $sql="UPDATE log SET email=? WHERE id=?";
    $q= mysqli_stmt_init($con);
    mysqli_stmt_prepare($q,$sql);
    mysqli_stmt_bind_param($q,'si', $_POST['emailinput'], $user['id']);
    mysqli_stmt_execute($q);
    echo "<script> alert(\"Changes Saved\") </script>";
    echo "<script> window.location='user.php' </script>";
}
if(isset($_POST['editPassword']))
{

    $sql="UPDATE log SET password=? WHERE id=?";
    $q= mysqli_stmt_init($con);
    mysqli_stmt_prepare($q,$sql);
    mysqli_stmt_bind_param($q,'si', $_POST['passwordinput'], $user['id']);
    mysqli_stmt_execute($q);
    echo "<script> alert(\"Changes Saved\") </script>";
    echo "<script> window.location='user.php' </script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles11.css" />
    <link rel="stylesheet" href="css/menu.css" />




    <!-- CSS only -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
        crossorigin="anonymous"
            />
    <title>Profile</title>



</head>
<body>
<!-- NavBar-->


<nav class="navbar navbar-expand-lg bg-dark navbar-dark ">

    <div class="container ">
        <a href="#" class="navbar-brand">E-Market</a>
        <div class="d-flex">

            <input class="form-control border-end-0 border rounded-pill" type="search" value="search" id="example-search-input">
            <span class="input-group-append"> </span>
            <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="button">
                <i><img src="/imgs/search.svg" alt=""></i>
            </button>
        </div>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navmenu"
                >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="Home.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="Cart.php" class="nav-link">cart</a>
                </li>
                <li class="nav-item">
                    <a href="../../../Users/Mohammad/Desktop/ss/about%20us.html" class="nav-link">about us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<div class=" d-flex flex-column profileContainer ">
    <div class="profileImg ">
        <img src="imgs/DefultProfilePic.jpg" alt="">
    </div>
    <form action="user.php" method="POST">
    <div class="input-group mb-3 mt-3">
        <div class="input-group-prepend">
            <button class="btn btn-outline-secondary" type="submit" name="editUsername">Edit</button>
        </div>
        <input type="text" class="form-control" placeholder="Username" aria-label="" name="userinput" value="<?php
        echo  $user['username'];
        ?>" aria-describedby="basic-addon1">

    </div>
        <div class="input-group mb-3 mt-3">
            <div class="input-group-prepend">
                <button class="btn btn-outline-secondary" type="submit" name="editEmail" >Edit</button>
            </div>
            <input type="email" class="form-control" placeholder="Email" aria-label="" name="emailinput" value="<?php
            echo  $user['email'];

            ?>" aria-describedby="basic-addon1">

        </div>
        <div class="input-group mb-3 mt-3">
            <div class="input-group-prepend">
                <button class="btn btn-outline-secondary" type="submit" name="editPassword">Edit</button>
            </div>
            <input type="password" class="form-control" placeholder="password" name="passwordinput" aria-label="" value="<?php
            echo  $user['password'];?>" aria-describedby="basic-addon1">

        </div>
    </form>
</div>



<header id="header" class="d-flex  justify-content-center  ">

    <nav id="navbar" class="navbar nav-menu ">
        <ul>
            <li><a href="Home.php" class="nav-link scrollto "><img src="imgs/house.svg" alt=""><span>home</span></a></li>
            <li><a href="user.php" class="nav-link scrollto active"><img src="imgs/person.svg" alt=""> <span>user</span></a></li>
            <li><a href="orders.php" class="nav-link scrollto"><img src="imgs/cart-dash.svg" alt=""> <span>order</span></a></li>
            <li><a href="../../../Users/Mohammad/Desktop/ss/address.html" class="nav-link scrollto"><img src="imgs/signpost.svg" alt=""> <span>address</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->


</div>

</header><!-- End Header -->

<pre style="text-align: center" >

    <div style=" height: 500px; color: #f2f2f2">

       <h1>user</h1>
    </div>


</pre>
</div>


<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <img src="/imgs/facebook.svg" alt="">
            </a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <img src="/imgs/twitter.svg" alt="">
            </a>

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <img src="/imgs/google.svg" alt="">
            </a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <img src="/imgs/instagram.svg" alt="">
            </a>

        </section>
        <!-- Section: Social media -->

        <!-- Section: Form -->
        <section class="">
            <form action="">
                <!--Grid row-->
                <div class="row d-flex justify-content-center">
                    <!--Grid column-->
                    <div class="col-auto">
                        <p class="pt-2">
                            <strong>Sign up for our newsletter</strong>
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-5 col-12">
                        <!-- Email input -->
                        <div class="form-outline form-white mb-4">
                            <input type="email" id="form5Example21" class="form-control" />
                            <label class="form-label" for="form5Example21">Email address</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-auto">
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-outline-light mb-4">
Subscribe
                        </button>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </form>
        </section>
        <!-- Section: Form -->

        <!-- Section: Text -->
        <section class="mb-4">
            <p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
                repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
                eum harum corrupti dicta, aliquam sequi voluptate quas.
            </p>
        </section>
        <!-- Section: Text -->

        <!-- Section: Links -->

        <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
<!-- JavaScript Bundle with Popper -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"
        ></script>
</body>
</html>