<?php


class Conn
{ public $servername;
    public $username;
    public $password;
    public $dbname;

    public $con;
    public $result;


    // class constructor
    public function __construct()
    {

        // create connection
        $this->con = mysqli_connect("localhost", "root", "","e-market","3306");

        // Check connection

        if (!$this->con){

            die("Connection failed : " . mysqli_connect_error());

        }




    }

    // get product from the database
    public function getData(){


        $sql = "SELECT * FROM products";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){

            return $result;
        }

        
    }
    public function getLoginData()
    {
        $sql = "SELECT * FROM log";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){

            return $result;
        }
    }
    public function getUserInfo($con,$id)
    {
       $sql="SELECT id,email,password,username FROM log WHERE id=?";
       $q=mysqli_stmt_init($con);
       mysqli_stmt_prepare($q,$sql);
       mysqli_stmt_bind_param($q,'i',$id);
       mysqli_stmt_execute($q);
       $res=mysqli_stmt_get_result($q);
       $row=mysqli_fetch_array($res);
       if(empty($row))
       {
           return false;
       }
       else
       {
           return $row;
       }
    }
}
