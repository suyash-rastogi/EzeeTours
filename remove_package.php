<?php
    session_start();
    $id=$_SESSION["userid"];
    if(!$id)
    {
        header("location: admin.php");
    }
    include"connect.php";
    $pno=$_GET["pno"];
    $rs=$con->query("select img_src from package where pno=$pno");
    $row=$rs->fetch_assoc();
    $img_src=$row["img_src"];
    unlink("$img_src");
    $con->query("delete from package where pno=$pno;");
    header("location: manage_package.php");
    exit();
?>