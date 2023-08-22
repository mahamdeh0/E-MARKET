<?php
$error=array();
$userName= $_POST['name'];
$password= $_POST['password'];
$email= $_POST['email'];
$re_password= $_POST['re_password'];
if(empty($userName))
{
    $error[]="Username Cant be empty!";
}
if(empty($password))
{
    $error[]="Password Cant be empty!";
}
if(empty($email))
{
    $error[]="Email Cant be empty!";
}
if(empty($re_password))
{
    $error[]="Confirm Password Cant be empty!";
}
if(empty($error))//No Errors
{
    //New User
    //No Hashing
    require("php/Conn.php");
    $con = mysqli_connect("localhost", "root", "","e-market","3306");

    $sql="INSERT INTO log (id,email,password,username)";
    $sql .= "VALUES('',?,?,?)";
    $q=mysqli_stmt_init($con);
    mysqli_stmt_prepare($q,$sql);
    mysqli_stmt_bind_param($q,'sss',$email,$password,$userName);
    mysqli_stmt_execute($q);
    if(mysqli_stmt_affected_rows($q)==1)
    {


        echo "<script> alert(\"Account Created\") </script>";
        echo "<script> window.location='Login.php' </script>";
    }



}
else{
    echo "no";
}


