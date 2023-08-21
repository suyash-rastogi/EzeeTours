<?php
    session_start();
    $id=$_SESSION["userid"];
    if(!$id)
    {
        header("location: admin.php");
    }
    
    if(isset($_POST["add_pack"]))
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

        $filename=$_FILES["img_file"]["name"];
        $tempname=$_FILES["img_file"]["tmp_name"];
        $img_src="images/"."package.$pname.$filename";
        move_uploaded_file($tempname,$img_src);
        
        $stmt=$con->prepare("INSERT INTO `package` (`pname`, `psdesc`, `pdesc`, `src`, `dest`, `duration`, `hname`, `hcat`, `price`, `spl_price`, `img_src`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ;");
        $stmt->bind_param("sssssssiiis",$pname,$psdesc,$pdesc,$src,$dest,$duration,$hname,$hcat,$price,$spl_price,$img_src);
        $stmt->execute();
        
        header("location: manage_package.php");
        exit();

    }
    ?>