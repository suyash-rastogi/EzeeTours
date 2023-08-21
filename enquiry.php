<?php
    include"connect.php";
    $name=$_POST["name"];
    $mob=$_POST["mob"];
    $email=$_POST["email"];
    $msg=$_POST["msg"];

    $rs=$con->query("INSERT INTO `enquiry` (`name`, `mob`, `email`, `msg`) VALUES ('$name', '$mob', '$email', '$msg');");

    header("location: index.php");
?>