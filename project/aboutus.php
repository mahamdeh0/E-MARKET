<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles1.css" />
    <link rel="stylesheet" href="css/about.css" />
    <!-- CSS only -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
        crossorigin="anonymous"
    />
    <title>About Us</title>


<body>
<!-- NavBar-->

<nav class="navbar navbar-expand-lg bg-dark navbar-dark ">

    <div class="container ">
        <a href="#" class="navbar-brand">E-Market</a>
        <div class="d-flex">

            <input class="form-control border-end-0 border rounded-pill" type="search" value="search" id="example-search-input">
            <span class="input-group-append"> </span>
            <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="button">
                <i><img src="imgs/search.svg" alt=""></i>
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
                    <a href="home.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="user.html" class="nav-link">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="#instrucrions" class="nav-link">cart</a>
                </li>
                <li class="nav-item">
                    <a href="about us.html" class="nav-link">about us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Main Carousel-->
<div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">

    <div class="carousel-inner">




        <div class="carousel-item active ">
            <img src="image/about1.jpg" class="d-block w-100" alt="..." >
            <div class="carousel-caption d-none d-md-block ">
                <h1>ABOUT US</h1>
                <p>11111111111111111111111111111111111</p>
                Z            </div>
        </div>
        <div class="carousel-item">
            <img src="image/aboutt2.jpg" class="d-block w-100" alt="..." >
            <div class="carousel-caption d-none d-md-block ">
                <h1>ABOUT US</h1>
                <p>22222222222222222222222222222</p>


            </div>
        </div>
        <div class="carousel-item">
            <img src="image/about4.jpg" class="d-block w-100" alt="..." >
            <div class="carousel-caption d-none d-md-block ">
                <h1>ABOUT US</h1>
                <p>3333333333333333333333</p>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<br>
<div class="a">
    <div class="a1">
        <br>
        <img src="image/map.png" alt="" align="top">
        <br>
        Our Location
        Palestine, Jerusalem, Ashqariya
        Working hours are from Saturday to Thursday from 9:00 - 16:00
        Google Maps Link:
    </div>

    <div class="a1">
        <br>
        <img src="image/call2.png" onmouseover="this.src='image/call1.png'" onmouseout="this.src='image/call2.png'" alt=""  >
        <br>
        Connect with us
        Call us: 025855963
        Write to us on WhatsApp: +972534948789
    </div>

    <div class="a1">
        <br>
        <img src="image/E.png" onmouseover="this.src='image/EE.png'" onmouseout="this.src='image/E.png'" alt=""  >
        <br>
        Why buy from Watani Mall?
        Customer service 6 days a week from 9:00-17:00
        All products are 100% original.
        All products are guaranteed by the original importer
        Best prices locally
        Payment upon receipt <br> or via Paypal
    </div>
</div>
<br><br><br>

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