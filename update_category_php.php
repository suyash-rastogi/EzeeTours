<?php
    session_start();
    $id=$_SESSION["userid"];
    if(!$id)
    {
        header("location: admin.php");
    }

    if(isset($_POST["update_cat"]))
    {
        include"connect.php";

        $cname=$_POST["cname"];
        $csdesc=$_POST["csdesc"];
        $cdesc=$_POST["cdesc"];

        $cno=$_GET["cno"];
        $img_src=$_GET["img_src"];
        
        if (!empty($_FILES['img_file']['name']))
        {
            unlink("$img_src");
            $filename=$_FILES["img_file"]["name"];
            $tempname=$_FILES["img_file"]["tmp_name"];
            $img_src="images/"."category.$cname.$filename";
            move_uploaded_file($tempname,$img_src);
        }
        

        $stmt=$con->prepare("UPDATE `category` SET cname=?, csdesc=?, cdesc=?, img_src=? WHERE cno=$cno;");
        $stmt->bind_param("ssss",$cname,$csdesc,$cdesc,$img_src);
        $stmt->execute();

        header("location: manage_category.php");

    }
?>