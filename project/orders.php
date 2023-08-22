<?php
session_start();
require_once ("php/Conn.php");
$user=array();
$con = mysqli_connect("localhost", "root", "","e-market","3306");
$conn=new Conn();

if(isset($_SESSION['userid']))
{
    $user=$conn->getUserInfo($con,$_SESSION['userid']);

    $sql="SELECT orderid,address,price FROM orders WHERE userid=?";
    $q1= mysqli_stmt_init($con);
    mysqli_stmt_prepare($q1,$sql);
    mysqli_stmt_bind_param($q1,'s',$user['id']);
    mysqli_stmt_execute($q1);
    $res1=mysqli_stmt_get_result($q1);
    $row1=mysqli_fetch_array($res1,MYSQLI_ASSOC);

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link rel="stylesheet" href="css/styles11.css" />
    <link rel="stylesheet" href="css/menu.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Orders</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark ">

    <div class="container ">
        <a href="#" class="navbar-brand">E-Market</a>
        <div class="d-flex">

            <input class="form-control border-end-0 border rounded-pill" type="search" value="search"
                   id="example-search-input">
            <span class="input-group-append">
          <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="button">
            <i><img src="imgs/search.svg" alt=""></i>
          </button>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="user.php" class="nav-link">
                        <?php
                        if(isset($_SESSION['userid']))
                        {
                            echo $user['username'];
                        }
                        else{
                            echo "Profile";
                        }
                        ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="Cart.php" class=" btn nav-link" id="cartbtn">cart <?php
                        if(isset($_SESSION['cart']))
                        {
                            $count=count($_SESSION['cart']);
                            echo "<span id=\"cartCount\" class=\"text-warning rounded\">  $count </span>";
                        }
                        else{
                            echo "<span id=\"cartCount\" class=\"text-warning rounded\"> 0 </span>";
                        }
                        ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#instrucrions" class="nav-link">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header id="header" class="d-flex  justify-content-center  ">

    <nav id="navbar" class="navbar nav-menu ">
        <ul>
            <li><a href="Home.php" class="nav-link scrollto "><img src="imgs/house.svg" alt=""><span>home</span></a></li>
            <li><a href="user.php" class="nav-link scrollto "><img src="imgs/person.svg" alt=""> <span>user</span></a></li>
            <li><a href="orders.php" class="nav-link scrollto active"><img src="imgs/cart-dash.svg" alt=""> <span>order</span></a></li>
            <li><a href="../../../Users/Mohammad/Desktop/ss/address.html" class="nav-link scrollto"><img src="imgs/signpost.svg" alt=""> <span>address</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->


    </div>

</header><!-- End Header -->

<div class="container" style="margin-top: 200px; margin-bottom: 200px;">
<section class="h-100 h-custom" style="background-color: #d2c9ff;">
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">OrderId</th>
            <th scope="col">price</th>
            <th scope="col">address</th>

        </tr>
        </thead>
        <tbody>

        <?php
        while($row1=mysqli_fetch_assoc($res1))
        {
            $orderids =$row1['orderid'];
            $orderprice=$row1['price'];
            $orderaddress=$row1['address'];
         echo   " <tr>
            <th scope=\"row\">$orderids</th>
            <td>$orderprice</td>
            <td>$orderaddress</td>
        </tr>
        ";


        }

?>
        </tbody>
    </table>
    </section>
</div>
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <img src="imgs/facebook.svg" alt="">
            </a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <img src="imgs/twitter.svg" alt="">
            </a>

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <img src="imgs/google.svg" alt="">
            </a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <img src="imgs/instagram.svg" alt="">
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
        <section class="">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->

                <!--Grid row-->
        </section>
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


</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="store.js" async></script>
</html>
</body>
</html>