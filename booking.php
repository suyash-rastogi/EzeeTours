<?php
    if(isset($_POST["book"]))
    {
        include"connect.php";

        $pno = $_GET["pno"];
        $name = $_POST["name"];
        $mob = $_POST["mob"];
        $email = $_POST["email"];
        $uid = $_POST["uid"];
        $address = $_POST["address"];
        $pax = $_POST["pax"];
        $status = $_POST["status"];
        
        $stmt=$con->prepare("INSERT INTO `booking` (`pno`, `name`, `mob`, `email`, `uid`, `address`, `pax`) VALUES (?, ?, ?, ?, ?, ?, ?) ;");
        $stmt->bind_param("issssss",$pno,$name,$mob,$email,$uid,$address,$pax);
        $stmt->execute();
        
        
        header("location: packages.php?pno=$pno");
        exit();

    }
?>