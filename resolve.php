<?php
    session_start();
    $id=$_SESSION["userid"];
    if(!$id)
    {
        header("location: admin.php");
    }
    include"connect.php";
    $eno=$_GET["eno"];
    $con->query("update enquiry set status='RESOLVED' where eno=$eno;");
    header("location: manage_enquiry.php");
?>