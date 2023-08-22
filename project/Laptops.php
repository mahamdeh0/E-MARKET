<?php
//session
session_start();

require_once('php/Conn.php');
require_once('./php/component.php');
$database=new Conn();
if(isset($_POST['submit'])) {
    if(isset($_SESSION['cart']))
    {

        $item_array_id=array_column($_SESSION['cart'],"product_id");

        if(in_array($_POST['product_id'], $item_array_id))
        {
            echo "<script> alert(\"already in cart\") </script>";
            echo "<script> window.location='ComputerCases.php' </script>";
        }
        else{
            $count=count($_SESSION['cart']); //how many elemnts in cart
            $item_array=array(
                'product_id'=>$_POST['product_id']

            );
            $_SESSION['cart'][$count]=$item_array;
        }

    }
    else{
        $item_array=array(
            'product_id'=>$_POST['product_id']
        );
        $_SESSION['cart'][0]=$item_array;
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles1.css" />

    <!-- CSS only -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
        crossorigin="anonymous"
    />
    <title>Items</title>
</head>
<body>
<!-- NavBar-->

<?php
require_once ("php/Header.php");
?>
<h2 class="items_header_text">
    Laptops</h2>
<div class="d-flex justify-content-around m-5">

    <?php
    $result=$database->getData();

    while($row=mysqli_fetch_assoc($result))
    {
        if($row['category'] == 'LT')
        {
            component($row['p_name'],$row['p_price'],$row['p_img'],$row['id']);
        }

    }



    ?>

</div>
<div class="d-flex justify-content-around m-5">

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
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"
></script>
</body>
</html>