<?php
    session_start();
    $id=$_SESSION["userid"];
    if($id)
    {
        include"connect.php";
        $nuser=$_POST["id"];
        $npw=$_POST["password"];
        $rs=$con->query("insert into detail values('$nuser','$npw')");
        header("location: admin.php");
    }
    else
    {
        header("location: admin.php");
    }
?>