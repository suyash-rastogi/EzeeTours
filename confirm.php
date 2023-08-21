<?php
    session_start();
    $id=$_SESSION["userid"];
    if(!$id)
    {
        header("location: admin.php");
    }
    include"connect.php";
    $bno=$_GET["bno"];
    $con->query("update booking set status='CONFIRMED' where bno=$bno;");
    header("location: manage_booking.php");
?>