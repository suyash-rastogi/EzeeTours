<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="auth";

    $con=mysqli_connect($servername,$username,$password,$dbname);

    if(!$con)
    {
        die("Connection failed".mysqli_connect_error());
    }
    // else
    // {
    //     echo"connected!!!";
    // }
?>