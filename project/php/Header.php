<nav class="navbar navbar-expand-lg bg-dark navbar-dark ">

    <div class="container ">
        <a href="Home.php" class="navbar-brand">E-Market</a>
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


<!-- <nav class="navbar navbar-expand-lg bg-dark navbar-dark d-flex justify-content-space-around">

    <div class="d-flex container justify-content-between ">
        <a href="\project\Home.php" class="navbar-brand">E-Market</a>


            <input class="search_f" type="search" value="search"  id="example-search-input">


        <<<<<<<<<<<<<<<<<<<<<
        <div class=" px-5">
            <a href="cart.php"  style="color: bisque">Cart

              </a>
        </div>

    </div>
</nav> -->
