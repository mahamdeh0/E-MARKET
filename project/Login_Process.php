<?php


$error=array();

$password= $_POST['password'];
$email= $_POST['email'];

if(empty($password))
{
    $error[]="Password Cant be empty!";
}
if(empty($email))
{
    $error[]="Email Cant be empty!";
}

if(empty($error))
{
    $conn = mysqli_connect("localhost", "root", "","e-market","3306");
   $sql="SELECT id,email,password,username FROM log WHERE email=?";
    $q= mysqli_stmt_init($conn);
    mysqli_stmt_prepare($q,$sql);
    mysqli_stmt_bind_param($q,'s',$email);
    mysqli_stmt_execute($q);
    $res=mysqli_stmt_get_result($q);
    $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
    if(!empty($row))
    {
        if($password==$row['password'] && $email == $row['email'])
        {
            session_start();
            $con = mysqli_connect("localhost", "root", "","e-market","3306");
            $_SESSION['userid']=$row['id'];
            echo "<script> window.location='Home.php' </script>";
        }
        else{
            echo "Wrong Login Info";
        }
    }
}
else{
    echo "Pleas Fill out Email And Password";
}