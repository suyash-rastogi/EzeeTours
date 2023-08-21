<?php
    session_start();
    $id=$_SESSION["userid"];
    if(!$id)
    {
        header("location: admin.php");
    }
    include"connect.php";
    $cno=$_GET["cno"];
    $rs=$con->query("select img_src from category where cno=$cno");
    $row=$rs->fetch_assoc();
    $img_src=$row["img_src"];
    unlink("$img_src");
    $con->query("delete from category where cno=$cno;");
    header("location: manage_category.php");
?>