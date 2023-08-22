<?php
session_start();

require_once('php\Conn.php');
require_once('php\component.php');
$database=new Conn();

if(isset($_POST['remove'])) {

       if($_GET['action']=='remove')
        {
            foreach ($_SESSION['cart'] as $key=>$value)
            {
                if($value["product_id"] == $_GET['id'])
                {
                    unset($_SESSION['cart'][$key]);
                        echo "<script>window.location='cart.php' </script>";
                }
            }
        }
    }


if(isset($_POST['PURCHASE']))
{
    if(empty($_POST['address']))
    {

     echo "<script> alert(\"Address cant be empty\") </script>";
        echo "<script>window.location='cart.php' </script>";
    }
    else {
        $con = mysqli_connect("localhost", "root", "", "e-market", "3306");
        $user = $database->getUserInfo($con, $_SESSION['userid']);
        $p_id=array_column($_SESSION['cart'],'product_id');
        $res=$database->getData();
        $totalPrice=0;
        while($row=mysqli_fetch_assoc($res))
        {
            foreach ($p_id as $id)
            {
                if($row['id']==$id)
                {

                    $totalPrice=$totalPrice+(int)$row['p_price'];

                }
            }
        }

        $sql="INSERT INTO orders (orderid,userid,address,price)";
        $sql .= "VALUES('',?,?,?)";
        $q=mysqli_stmt_init($con);
        mysqli_stmt_prepare($q,$sql);
        mysqli_stmt_bind_param($q,'ssi',$user['id'],$_POST['address'],$totalPrice);
        mysqli_stmt_execute($q);

        $sql="SELECT orderid FROM orders WHERE userid=?";
        $q1= mysqli_stmt_init($con);
        mysqli_stmt_prepare($q1,$sql);
        mysqli_stmt_bind_param($q1,'s',$user['id']);
        mysqli_stmt_execute($q1);
        $res1=mysqli_stmt_get_result($q1);
        $row1=mysqli_fetch_array($res1,MYSQLI_ASSOC);
        while($row1=mysqli_fetch_assoc($res1))
        {
           $order= $row1['orderid'];

        }



        $user = $database->getUserInfo($con, $_SESSION['userid']);
        $p_id=array_column($_SESSION['cart'],'product_id');
        $res=$database->getData();
        while($row=mysqli_fetch_assoc($res))
        {
            foreach ($p_id as $id)
            {
                if($row['id']==$id)
                {


                  $sql="INSERT INTO orderdetails (orderid,userid,productid,ammount,price)";
                  $sql .= "VALUES(?,?,?,'1',?)";
                   $q=mysqli_stmt_init($con);
                   mysqli_stmt_prepare($q,$sql);
                   mysqli_stmt_bind_param($q,'iiii',$order,$user['id'],$id,$row['p_price']);
                   mysqli_stmt_execute($q);

                }
            }
        }
    }
unset($_SESSION['cart']);
    echo "<script> alert(\"OrderPlaced\") </script>";
    echo "<script>window.location='orders.php' </script>";

}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
            crossorigin="anonymous"
    />
    <title>Cart</title>
</head>
<body>
<section class="h-100 h-custom" style="background-color: #d2c9ff;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                        <h6 class="mb-0 text-muted">3 items</h6>
                                    </div>
                                    <hr class="my-4">
                                    <?php
                                    if(isset($_SESSION['cart']))
                                    {
                                        $p_id=array_column($_SESSION['cart'],'product_id');
                                        $res=$database->getData();
                                        $totalPrice=0;
                                        while($row=mysqli_fetch_assoc($res))
                                        {
                                            foreach ($p_id as $id)
                                            {
                                                if($row['id']==$id)
                                                {

                                                    cartElement($row['p_img'],$row['p_name'],$row['p_price'],$row['id']);
                                                    $totalPrice=$totalPrice+(int)$row['p_price'];

                                                }
                                            }
                                        }
                                    }
                                    else{
                                        echo "Empty";
                                    }

                                    ?>
                                    <div class="pt-5">
                                        <h6 class="mb-0"><a href="Home.php" class="text-body"><i
                                                        class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 bg-grey">
                                <div class="p-5">
                                    <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-4">
                                        <h5 class="text-uppercase"> Items
                                            <?php

                                                $count=count($_SESSION['cart']);
                                                echo $count;

                                            ?>
                                        </h5>
                                        <h5>$
                                            <?php
                                            echo $totalPrice;
                                            ?>
                                        </h5>
                                    </div>

                                    <h5 class="text-uppercase mb-3">Shipping</h5>
                                    <form action="" method="POST">
                                    <div class="mb-4 pb-2">
                                        <select class="select">
                                            <option value="1">Standard-Delivery- €5.00</option>

                                        </select>

                                        <div class="input-group mb-3 mt-2">

                                            <input type="text" class="form-control" placeholder="Address" name="address" value="" aria-describedby="basic-addon1">
                                        </div>
                                    </div>



                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-5">
                                        <h5 class="text-uppercase">Total price</h5>
                                        <h5>$
                                            <?php
                                            echo $totalPrice+5;
                                            ?>

                                        </h5>
                                    </div>

                                    <button type="submit" name="PURCHASE" class="btn btn-dark btn-block btn-lg"
                                            data-mdb-ripple-color="dark">PURCHASE</button>

                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
