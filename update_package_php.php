<?php
    session_start();
    $id=$_SESSION["userid"];
    if(!$id)
    {
        header("location: admin.php");
    }

    if(isset($_POST["update_pack"]))
    {
        include"connect.php";

        $pname = $_POST["pname"];
        $psdesc = $_POST["psdesc"];
        $pdesc = $_POST["pdesc"];
        $src = $_POST["src"];
        $dest = $_POST["dest"];
        $duration = $_POST["duration"];
        $hname = $_POST["hname"];
        $hcat = $_POST["hcat"];
        $price = $_POST["price"];
        $spl_price = $_POST["spl_price"];
        
        $pno=$_GET["pno"];
        $img_src=$_GET["img_src"];

        if (!empty($_FILES['img_file']['name']))
        {
            unlink("$img_src");
            $filename=$_FILES["img_file"]["name"];
            $tempname=$_FILES["img_file"]["tmp_name"];
            $img_src="images/"."package.$pname.$filename";
            move_uploaded_file($tempname,$img_src);
        }
        
        $stmt=$con->prepare("UPDATE `package` SET pname=?, psdesc=?, pdesc=?, src=?, dest=?, duration=?, hname=?, hcat=?, price=?, spl_price=?, img_src=? WHERE pno=$pno;");
        $stmt->bind_param("sssssssiiis",$pname,$psdesc,$pdesc,$src,$dest,$duration,$hname,$hcat,$price,$spl_price,$img_src);
        $stmt->execute();
        
        header("location: manage_package.php");
        exit();
    }
?>