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
if(isset($_POST['submit']))
{
    $db = new mysqli("localhost", "root", "", "e-market", "3306");

    $stmt = $db->prepare('INSERT INTO feedback (username, email, feedback) VALUES (?, ?, ?)');

    // Bind the values to the statement
    $stmt->bind_param('sss', $user['username'], $user['email'], $_POST['feedbackinput']);

    // Execute the statement
    $stmt->execute();

    // Close the statement and database connection
    $stmt->close();
    $db->close();

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="stylesheet" href="styles1.css" />

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

    <title>Home</title>
</head>

<body>
<!-- NavBar-->

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
                    <a href="#" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="Logout_Process.php" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class=" main_Container outline">
    <button  class="btn btn-info" style="position: absolute; margin-left: 180px; margin-top: 470px"><a href="<?php
        if(isset($_SESSION['userid']))
        {
            echo "https://www.google.com/";
        }
        else
        {
            echo "Login.php";
        }
        ?>
    " style="height: 70px;
  width: 250px;"><?php
            if(isset($_SESSION['userid']))
            {
                echo "Get a discount!";
            }
            else
            {
                echo "Shop Now";
            }
            ?></a></button>
    <img src="imgs/Banner1.png" alt="">

</div>
<nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
    <a class="navbar-brand" href="#">Item Nav</a>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading1">First</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading2">Second</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
               aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
            </ul>
        </li>
    </ul>
</nav>

<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
    <div id="scrollspyHeading1" class="card" style="width: 18rem;">
        <img src="imgs/case-category.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"> Computer Cases</h5>
            <p class="card-text">The best of the best premium Cases OUT THERE!.</p>
            <a href="ComputerCases.php" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div id="scrollspyHeading1" class="card" style="width: 18rem;">
        <img src="imgs/cpu-category.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">CPU</h5>
            <p class="card-text">Power the beast with the most powerfull CPUs on the market.</p>
            <a href="CPU.php" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div id="scrollspyHeading1" class="card" style="width: 18rem;">
        <img src="imgs/gpu-category-2.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Graphics Cards</h5>
            <p class="card-text">Your Game was never looking better without a Good Graphics Card.</p>
            <a href="GraphicsCards.php" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
    <div id="scrollspyHeading2" class="card" style="width: 18rem;">
        <img src="imgs/psu-category.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">PSU</h5>
            <p class="card-text">Fill Your Pc With the most reliable Power Source In the markets.</p>
            <a href="PoweSupply.php" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div id="scrollspyHeading2" class="card" style="width: 18rem;">
        <img src="imgs/MotherBoeard-Cup-Bundel.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">MotherBoards</h5>
            <p class="card-text">The Mother We all Wish to have but we never get lol .</p>
            <a href="MotherBoards.php" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div id="scrollspyHeading2" class="card" style="width: 18rem;">
        <img src="imgs/monitor-category.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Computer Monitors</h5>
            <p class="card-text">The Window to view the content you wish .</p>
            <a href="ComputerMonitors.php" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
    <div id="scrollspyHeading3" class="card" style="width: 18rem;">
        <img src="imgs/laptop-category.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Laptops</h5>
            <p class="card-text">An all in all package with the best quality</p>
            <a href="Laptops.php" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div id="scrollspyHeading3" class="card" style="width: 18rem;">
        <img src="imgs/laptop-accessories.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">LAPTOP ACCESSORIES</h5>
            <p class="card-text">Some Good accessories to make your life easer</p>
            <a href="LAPTOPACCESSORIES.php" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div id="scrollspyHeading3" class="card" style="width: 18rem;">
        <img src="imgs/HEADSET-category-1.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Headsets</h5>
            <p class="card-text">Hear the sounds of your game as you would in real life</p>
            <a href="Headsets.php" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>

<!-- Fotter -->
<!-- Footer -->
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
            <form action="Home.php" method="POST">
                <!--Grid row-->
                <div class="row d-flex justify-content-center">
                    <!--Grid column-->
                    <div class="col-auto">
                        <p class="pt-2">

                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-5 col-12">
                        <!-- Email input -->
                        <div class="form-outline form-white mb-4">
                            <input type="text" name="feedbackinput" class="form-control" />
                            <label class="form-label" >Send Us A Feedback</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-auto">
                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-outline-light mb-4">
                            Send
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