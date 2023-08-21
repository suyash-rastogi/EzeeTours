<?php
    include"connect.php";

    $inp_id=$_POST["id"];
    $inp_pw=$_POST["password"];
    $rs=$con->query("SELECT*FROM detail where uid='$inp_id' and pw='$inp_pw'");

    
    
    if(isset($_POST["login"]))
    {
        session_start();
        if(mysqli_num_rows($rs)>0)
        {
            $_SESSION["valid"]=true;
            $_SESSION["userid"]=$inp_id;
            header("location: admin_dashboard.php");
        }
        else
        {
            $_SESSION["valid"]=false;
            header("location: admin.php");
        }
    }
?>